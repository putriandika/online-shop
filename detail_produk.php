<?php

include 'koneksi.php';

$id = $_GET['id'];

$query      = mysqli_query($connect, "SELECT * FROM produk WHERE id_produk='$id' ");
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

    <title>Detail Produk</title>
</head>

<body>


    <div class="container mt-3 bg-light p-5">
        <div class="row">
            <?php foreach ($results as $result) : ?>
                <div class="col-md-7">
                    <img src="foto/<?php echo $result['gambar'] ?>" height="400px" class="img-responsive">
                </div>
                <div class="col-md-5">
                    <h1 class="text-center mb-5" style="text-transform:uppercase"><?php echo $result['nama_produk']; ?></h1>
                    <table>
                        <tr>
                            <td>
                                <h4>Harga Barang</h4>
                            </td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td>
                                <h4>Rp. <?php echo number_format($result['harga']); ?></h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p&nbsp;>&nbsp;Deskirpsi Barang</p>
                            </td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;</td>
                            <td>
                                <p><?php echo $result['deskripsi']; ?></p>
                            </td>
                        </tr>
                    </table>
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