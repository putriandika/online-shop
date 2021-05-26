<?php

include 'koneksi.php';

$username   = $_POST['username'];
$password   = md5($_POST['password']);

$query      = mysqli_query($conn, "INSERT INTO customer SET username='$username', password='$password' ");

if ($query) {
    header('Location: ../index.php');
} else {
    echo 'gagal';
}
