<?php 

    include 'koneksi.php';

    $cari       = $_GET['cari'];
    $query      = mysqli_query($connect, "SELECT * FROM produk WHERE nama_produk LIKE  '%$cari%' ");
    $results    = mysqli_fetch_all($query, MYSQLI_ASSOC);


 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
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
                        <i class="fas fa-shopping-cart ml-3 mr-3" data-toggle="tooltip" title="Keranjang"></i>
                        <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Pesan"></i>
                        <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Nofitikasi"></i>
                    </h5>
                </div>
            </div>
        </div>
    </nav>


    <div class='container'>
        <h3 class="text-center" style="text-transform: uppercase; margin-top:70px;">Hasil Pencarian Dari <?php echo $cari; ?></h3>

        <?php if (empty($results)) : ?>
            <div class="alert alert-danger" role="alert" style="text-transform: uppercase;">
                <?= $cari; ?> tidak ditemukan
            </div>
        <?php endif ?>
    
        <div class="row ml-2">
            <?php foreach ($results as $result) : ?>
                <div class="card mr-2 mt-5 border-success" style="width: 270px; padding:5px;">
                    <img class="card-img-top" src="foto/<?php echo $result['gambar'] ?>" height="250px" alt="Card image cap">
                    <div class="card-body">
                        <h5 style="text-transform: uppercase;"><?php echo $result['nama_produk'] ?></h5>
                        <p class="card-text"><?php echo $result['deskripsi'] ?></p>
                    </div>
                    <div class="row">
                        <div class="col pb-3 ml-2">
                            <div class="pt-2 mb-2 bg-danger text-white text-center mr-2" style="width: 242px; height:39px;border-radius:5px"><label><i class="fas fa-tags mr-2"></i>Rp. <?php echo number_format($result['harga']); ?></label></div>
                            <a href="detail_produk.php?id=<?php echo $result['id_produk'] ?>" class="btn btn-primary mb-2" style="width: 242px;"><i class="fas fa-info-circle mr-2"></i>Detail Produk</a>
                            <a href="beli.php?id=<?php echo $result['id_produk']; ?>" class="btn btn-success" style="width: 242px;"><i class="fas fa-shopping-cart ml-3 mr-2"></i>Tambah ke Keranjang</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>