<?php

include 'koneksi.php';

$nama_barang    = $_POST['nama_barang'];
$gambar         = $_FILES['gambar']['name'];
$tmp            = $_FILES['gambar']['tmp_name'];
$path           = "foto/" . $gambar;
$harga_barang   = $_POST['harga_barang'];
$deskripsi      = $_POST['deskripsi'];

if (move_uploaded_file($tmp, $path)) {
    $query  =  mysqli_query($connect, "INSERT INTO produk SET nama_produk='$nama_barang', gambar='$gambar', harga='$harga_barang', deskripsi='$deskripsi' ");
    if ($query) {
        echo "
                <script>
                    alert('produk berhasil ditambahkan!');
                    document.location.href = 'admin.php';
                </script>
                ";
    } else {
        echo 'gagal';
    }
}
