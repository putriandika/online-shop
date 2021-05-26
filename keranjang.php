<?php 
session_start();

include 'koneksi.php';

if (empty($_SESSION['keranjang'])) {
    echo "<script>alert ( 'keranjang kosong,silahkan belannja terlebih dahulu ' );</script>";
    echo "<script>location='shop.php'</script>";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <title>keranjang belanja</title>
  </head>
  <body>
    

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark text-white bg-success fixed-top">
        <div class="container">
            <h3><i class="fas fa-shopping-cart mr-2 mt-2"></i></h3>
            <a class="navbar-brand font-weight-bold" href="#">Reka Tronik</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-4">
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold mr-4" href="#">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold mr-4" href="#">About</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold mr-4" href="#">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get" action="search.php">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="cari" >
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit" name="submit">Search</button>
                </form>
                <div class="icon mt-2">
                    <h5>
                        <a href="keranjang.php"><i class="fas fa-shopping-cart ml-3 mr-3 text-white" data-toggle="tooltip" title="Keranjang"></i></a>
                        <a href="#"><i class="fas fa-envelope mr-3 text-white" data-toggle="tooltip" title="Pesan"></i></a>
                        <a href="#"><i class="fas fa-bell mr-3 text-white" data-toggle="tooltip" title="Nofitikasi"></i></a>
                    </h5>
                </div>
            </div>
        </div>
    </nav>

    <section class="konten" style="margin-top: 80px;">
        <div class='container'>
            <h1 class="text-center mb-3">Keranjang Belanja</h1>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>SubHarga</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($_SESSION['keranjang'] as $id => $jumlah ) : ?>
                    <?php 
                        $ambil= $connect->query("SELECT * FROM produk WHERE id_produk='$id' ");
                        $pecah = $ambil->fetch_assoc();
                        $subharga = $pecah['harga']*$jumlah;
                    ?>
                        <tr class="text-center">
                            <td><?= $no ?></td>
                            <td><?= $pecah['nama_produk']; ?></td>
                            <td>Rp. <?= number_format($pecah['harga']); ?></td>
                            <td><?= $jumlah; ?></td>
                            <td>Rp. <?= number_format($subharga); ?></td>
                            <td>
                                <a href="hapuskeranjang.php?id=<?php echo $id; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php $no++; ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="shop.php" class="btn btn-success" style="width: 150px;">Lanjutkan Belanja</a>
            <a href="chekout.php" class="btn btn-danger" style="width:150px;">Chekout Belanja</a>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
