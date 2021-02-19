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

function rupiah($harga)
{
    $hasil_rupiah = "Rp " . number_format($harga, 2, ',', '.');
    return $hasil_rupiah;
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

        //koding Laporan
        $SQL = "SELECT * FROM tb_data_speaker";
        $result = mysqli_query($dbconn, $SQL);

        if (mysqli_num_rows($result) > 0) {
            //ada data, iterasi, for , while, do while
            while ($row = mysqli_fetch_assoc($result)) {
                $buffer = array(
                    "id" => $row['id_speaker'],
                    "merkspeaker" => $row['merk_speaker'],
                    "tipespeaker" => $row['tipe_speaker'],
                    "harga" => rupiah($row['harga']),
                    "tahun" => $row['tahun_peluncuran'],
                );
                $response['data'][] = $buffer;
            }
        } else {
            throw new \Exception("Tidak ada data", 1);
        }
        //End Koding Laporan


        echo json_encode($response);
    } catch (\Exception $e) {
        $response = array(
            'status' => false,
            'informasi' => $e->getMessage(),
        );
        echo json_encode($response);
    }
}
