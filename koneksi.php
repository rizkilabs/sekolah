<?php

// deklarasi variabel
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'db_sekolah';

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($connection) {
    return 'koneksi berhasil';
} else {
    echo 'Koneksi Gagal! : '. mysqli_connect_error();
}

?>