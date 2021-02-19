<?php
header('Content-Type: application/json');

$PRIVATEKEY = "CloudComputing2020";

function dbConnection()
{
    $host = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "speakerbali";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        echo "GAGAL KONEKSI KE DATABASE";
        return false;
    } else {
        if (mysqli_set_charset($conn, "utf8")) {
            return $conn;
        } else {
            echo "GAGAL MENGGUNAKAN UTF8";
            return false;
        }
    }
}

function sanitasiVariabel($conn, $value)
{
    // memberikan perlindungan kepada data yang akan dikirim ke mysql
    return htmlspecialchars(mysqli_real_escape_string($conn, $value));
}

function hashSHA256($text)
{
    // mengubah nilai menjadi hash 256 bit
    return hash('sha256', $text);
}


function login($username, $password)
{
    $dbconn = dbConnection();

    $username = sanitasiVariabel($dbconn, $username);
    $password = hashSHA256($password);

    $SQL = "SELECT *FROM tb_login WHERE username = '" . $username . "' AND password ='" . $password . "'";

    $result = mysqli_query($dbconn, $SQL);
    if (mysqli_num_rows($result) > 0) {
        return true;
    } else {
        return false;
    }

    mysqli_close($dbconn);
}

function generateToken($username, $waktu, $pkey)
{
    //rumus username.tanggallogin.privatekey

    $ctring = $username . $waktu . $pkey;
    return hashSHA256($ctring);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (login($username, $password)) {
        //GENERATE TOKEN

        $waktulogin = date("YmdHis");
        $token = generateToken($username, $waktulogin, $PRIVATEKEY);

        $informasi = array(
            'username' => $username,
            'waktulogin' => $waktulogin,
            'token' => $token,
        );

        // memberikan perlindungan data dengan mengenkripsi string
        $informasi = base64_encode(json_encode($informasi));

        $response = array(
            'status' => true,
            'token' => $informasi,
        );

        echo json_encode($response);
    } else {
        //PESAN GAGAL LOGIN
        $response = array(
            'status' => false,
            'token' => '',
        );

        echo json_encode($response);
    }
}
