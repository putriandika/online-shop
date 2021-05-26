<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../fontawesome/css/all.min.css">

    <style>
        span {
            position: absolute;
            right: 35px;
            color: gray;
            margin-top: -30px;
        }
    </style>

    <title>Register</title>
</head>

<body>


    <div class="container">
        <h1 class="text-center mt-5 mb-5">Register Customer</h1>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <form action="doRegister.php" method="post" id="form">
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
                    <button type="submit" class="btn btn-success button mb-3" name="register" style="width: 100px;">Register</button>
                    <p>SUdah Punya Akun? <a href="../index.php">Login Disini!</a></p>
                </form>
            </div>
        </div>
    </div>




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