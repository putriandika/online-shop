<?php 
session_start();

include 'koneksi.php';

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

    <title>chekout belanja</title>
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
            <h1 class="text-center mb-3">Buat Pesanan</h1>
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>SubHarga</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php $totalbelanja =0; ?>
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
                        </tr>
                    <?php $no++; ?>
                    <?php $totalbelanja += $subharga; ?>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr class="text-center">
                        <th colspan="4">Total Belanja</th>    
                        <th>Rp. <?php echo number_format($totalbelanja); ?></th>
                    </tr>
                </tfoot>
            </table>
            
            <!-- <div class="row">
                <div class="col-md-8 text-left">
                    <a href="pesanan.php" class="btn btn-success" style="width:200px;">Chekout Belanja</a>
                </div>
                <div class="col-md-4 text-right">
                    <select class="form-control" name="id_ongkir">
                        <option value="">Pilih Tujuan Pengiriman</option>
                        <?php 
                            $ambil= $connect->query("SELECT * FROM ongkir");
                            while ($perongkir = $ambil->fetch_assoc()) {
                        ?>        
                        <option value="<?= $perongkir["id"] ?>">
                            <?= $perongkir["nama_kota"]; ?> - 
                            <?= number_format($perongkir["tarif"]); ?>
                        </option>
                        <?php } ?>
                    </select>         
                </div>
            </div>            
        </div> -->
        <h1 class="text-center">Nama dan Alamat Pembeli</h1> 
        <form method="POST" action="buat_pesanan.php" class="row g-3 needs-validation justify-content-center" novalidate>
            <div class="col-md-12">
                <label for="nama" class="form-label">Nama Lengkap Anda</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap Anda" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Silahkan Isi Nama Anda
                </div>
            </div>                    
            <div class="col-md-12">
                <label for="telp" class="form-label mt-3">No Telepon</label>
                <input type="text" class="form-control" name="telp" id="telp" placeholder="No Telepon" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Silahkan Isi Nama Anda
                </div>
            </div> 
            <div class="col-md-12">
                <label for="alamat" class="form-label mt-3">Alamat</label>
                <textarea class="form-control " id="alamat" name="alamat" rows="3" placeholder="Alamat" required></textarea>
                <div class="valid-feedback">
                    Looks good!
                </div>
                <div class="invalid-feedback">
                    Please enter a message in the textarea.
                </div>
            </div>                    
            <div class="col-md-12">
                <button type="submit" class="btn btn-success mt-3 mb-5" style="width:200px;">Buat Pesanan</button>              
            </div>
        </form>

        <!-- <div class="row">                  
            <div class="col">
                <form action="buat_pesanan.php" method="post">
                    <div class="form-group">
                        <label for="nama">Tulis Nama Lengkap Anda</label>
                        <input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" placeholder="Tulis Nama Lengkap Anda">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">No Telepon</label>
                        <input type="text" name="telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Tulis Alamat Lengkap Anda</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mb-5" style="width:200px;">Buat Pesanan</button>          
                </form>                
            </div>
        </div>                         -->
    </section>


    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
