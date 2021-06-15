<?php

include 'koneksi.php';

$username   = $_POST['username'];
$password   = $_POST['password'];

$query      = mysqli_query($conn, "INSERT INTO customer SET username='$username', password='$password' ");

if ($query) {
    header('Location: ../login.php');
} else {
    echo 'gagal';
}
