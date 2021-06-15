<?php 

    session_start();

    session_destroy();

    echo "<script>alert('anda sukses logout')</script>";
    echo "<script>location='shop.php';</script>";

?>