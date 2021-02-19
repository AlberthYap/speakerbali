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
    return htmlspecialchars(mysqli_real_escape_string($conn, $value));
}

function hashSHA256($text)
{
    return hash('sha256', $text);
}

function IsValidToken($token)
{
    try {
        $PRIVATEKEY = "CloudComputing2020";
        $rawToken = json_decode(base64_decode($token), 1);
        $tokenseharusnya = hashSHA256(@$rawToken['username'] . @$rawToken['waktulogin'] . $PRIVATEKEY);

        if ($tokenseharusnya == @$rawToken['token']) {
            return true;
        } else {
            return false;
        }
    } catch (\Exception $e) {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // memerintah PHP supaya mengeksekusi program jika terjadi error maka catch akan befungsi dan diprogram ini untuk mengamankan jika terjadi perubahan token
    try {
        $token = $_POST["token"];

        if (!(IsValidToken($token))) {
            // exception aka mengembalikan nilainya jika isi kosong / tidak sesuai
            throw new \Exception("Token tidak sesuai", 1);
        }

        $dbconn = dbConnection();

        if ($dbconn == false) {
            throw new \Exception("Koneksi Ke Database Gagal", 1);
        }

        $merkspeaker = sanitasiVariabel($dbconn, $_POST["merkspeaker"]);
        $tipespeaker = sanitasiVariabel($dbconn, $_POST["tipespeaker"]);
        $harga = sanitasiVariabel($dbconn, $_POST["harga"]);
        $tahun = sanitasiVariabel($dbconn, $_POST["tahun"]);

        $SQL = "INSERT INTO `tb_data_speaker`(`merk_speaker`, `tipe_speaker`, `harga`, `tahun_peluncuran`) VALUES ('$merkspeaker', '$tipespeaker', '$harga' , '$tahun')";

        if (!(mysqli_query($dbconn, $SQL))) {
            throw new \Exception("Query Gagal", 1);
        };

        $response = array(
            'status' => true,
            'informasi' => "Data Berhasil Diinputkan",
        );
        echo json_encode($response);
    } catch (\Exception $e) {
        $response = array(
            'status' => false,
            'informasi' => $e->getMessage(),
        );
        echo json_encode($response);
    }
}
