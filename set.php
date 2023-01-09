<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'praktikum_web';

$connect = mysqli_connect($host, $user, $pass, $db);


if (!$connect) {
    echo 'Gagal membuat koneksi => ' . mysqli_connect_error();
}
