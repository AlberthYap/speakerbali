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
    try {
        $token = $_POST["token"];

        if (!(IsValidToken($token))) {
            throw new \Exception("Token tidak sesuai", 1);
        }

        $dbconn = dbConnection();

        if ($dbconn == false) {
            throw new \Exception("Koneksi Ke Database Gagal", 1);
        }

        $response = array(
            'status' => true,
            'informasi' => "",
            'data' => array(),
        );

        //koding Hapus
        $idspeaker = sanitasiVariabel($dbconn, $_POST['idspeaker']);

        $SQL = "SELECT * FROM tb_data_speaker WHERE id_speaker ='$idspeaker'";
        $result = mysqli_query($dbconn, $SQL);

        if (mysqli_num_rows($result) > 0) {
            $SQL = "DELETE FROM tb_data_speaker WHERE id_speaker ='$idspeaker'";

            if (!(mysqli_query($dbconn, $SQL))) {
                throw new \Exception("Gagal menghapus SQL", 1);
            };
        } else {
            throw new \Exception("Data dengan ID = $idspeaker tidak ditemukan!", 1);
        }

        $SQL = "DELETE FROM tb_data_speaker WHERE id_speaker ='$idspeaker'";

        if (!(mysqli_query($dbconn, $SQL))) {
            throw new \Exception("Gagal menghapus SQL", 1);
        };

        //End Koding Hapus

        $response = array(
            'status' => true,
            'informasi' => "Berhasil menghapus data",
            'data' => array(),
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
