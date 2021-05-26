<?php 

    session_start();

    include 'koneksi.php';

    $totalbelanja =0;
    foreach ($_SESSION['keranjang'] as $id => $jumlah ){
        $ambil= $connect->query("SELECT * FROM produk WHERE id_produk='$id' ");
        $pecah = $ambil->fetch_assoc();
        $subharga = $pecah['harga']*$jumlah;

        $nama_produk    = $pecah['nama_produk'];
        $jmlh_barang    = $jumlah;
        $harga          = $totalbelanja += $subharga;
    }

    $nama   = $_POST['nama'];
    $tlp    = $_POST['telp'];
    $alamat = $_POST['alamat'];
    

    

    $query = $connect->query("INSERT INTO pesanan SET nama='$nama', no_tlp='$tlp', alamat='$alamat', nama_barang='$nama_produk', jmlh_barang='$jmlh_barang', harga='$harga' ");

    if ($query) {
        echo "
                <script>
                    alert('Pesanan Berhasil');
                    document.location.href = 'shop.php';
                </script>
                ";
    } else {
        echo 'gagal';
    }
    
?>