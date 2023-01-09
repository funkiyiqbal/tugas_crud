<?php
require 'set.php';

if (isset($_GET['kode'])) {

    $kode = $_GET['kode'];

    $query = mysqli_query($connect, "DELETE FROM blog where id_blog='$kode'");

    if ($query) {
        header('location: home.php');
    } else {
        echo 'Error => ' . mysqli_error($connect);
    }
} else {
    header('location: home.php');
}
