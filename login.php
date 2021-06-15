<?php 

    session_start();
    include('koneksi.php');

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

    <style>
        span {
            position: absolute;
            right: 35px;
            color: gray;
            margin-top: -30px;
        }
    </style>

    <title>Login</title>
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
                    <li class="nav-item active">
                        <a class="nav-link font-weight-bold mr-4" href="login.php">Login</a>
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

    <div class="container">
    <br><br>
        <h1 class="text-center mt-5 mb-5">Login Customer</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form method="post" id="form">
                    <div class="form-group mb-4">
                        <label for="username" class="user">Username</label>
                        <input type="username" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="pass">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <span>
                            <i class="fas fa-eye-slash" id="eyes" onclick="toggle();"></i>
                        </span>
                    </div>
                    <button type="submit" class="btn btn-success button mb-3" name="login" style="width: 100px;">Login</button>
                    <p>Belum Punya Akun? <a href="form/register.php">Register Disini!</a></p>
                </form>
            </div>
        </div>
    </div>



    <?php 
    
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];

            $ambil = $connect->query("SELECT * FROM customer WHERE username='$username' AND password='$password' ");

            $akunyangcocok = $ambil->num_rows;

            if ($akunyangcocok==1) {
                $akun = $ambil->fetch_assoc();
                $_SESSION["pelanggan"] = $akun;
                echo "<script>alert('anda sukses login')</script>";
                echo "<script>location='chekout.php';</script>";
            } else {
                echo "<script>alert('anda gagal login')</script>";
                echo "<script>location='login.php';</script>";
            }
        }
    
    ?>
    

    <!-- Optional JavaScript -->
    <script>
        var state = false;

        function toggle() {
            if (state) {
                document.getElementById("password").setAttribute("type", "password");
                $("#eyes").removeClass('fas fa-eye');
                $("#eyes").addClass('fas fa-eye-slash');
                state = false;
            } else {
                document.getElementById("password").setAttribute("type", "text");
                $("#eyes").removeClass('fas fa-eye-slash');
                $("#eyes").addClass('fas fa-eye');
                state = true;
            }
        }
    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>