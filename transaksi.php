<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Struk Belanja</title>
    <style>
        body{
            color: #a7a7a7;
        }
    </style>
  </head>
  <body>
    <div class='container mt-5'>
        <div align="center">
            <table width="500" border="0" cellpadding="1" cellspacing="0">
                <tr>
                    <th class="text-center">
                        Reka Tronik <br>
                        Jl. Pattimura  <br> 
                        Pasuruan Jawa Timur 
                    </th>
                </tr>
                <tr class="text-center"><td><hr></td></tr>
                <tr>
                    <td><?= date('d-m-Y H:i:s'); ?></td>
                </tr>
                <tr class="text-center"><td><hr></td></tr>
            </table>
            <table width="500" border="0" cellpadding="3" cellspacing="0">
                
                    <tr>
                        <td>ac</td>
                        <td>1</td>
                        <td>Rp. 200.000</td>
                        
                    </tr>
               
                <tr>
                    <td colspan="4"><hr></td>
                </tr>
                <tr>
                <!-- <?= number_format($trx['total']) ?> -->
                        <td align="right" colspan="3">Total</td>
                        <td align="right">Rp. 200.000</td>
                    </tr>
            </table>
            <table width="500" border="0" cellpadding="1" cellspacing="0">
                <tr><td><hr></td></tr>
                <tr>
                    <th class="text-center">Terimakasi, Selemat Berbelanja Kembali</th>
                </tr>
            </table>
            <!-- <a href="cetak-all.php" class="btn btn-primary mt-3 celap">Cetak</a> -->
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
