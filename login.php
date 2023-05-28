<?php

session_start();

if(isset($_SESSION['masuk'])){
    header("Location: index.php?p=dashboard");
    exit;
}
require 'koneksi.php';

if(isset($_POST['masuk'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM tuser WHERE username = '$username'");

    // cek username
    if(mysqli_num_rows($result)===1){

        // cek password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){

            // SET SESSION
            $_SESSION['masuk']=true;
            echo "<script>
                alert('Anda berhasil login');
                document.location.href = 'index.php?p=dashboard';
                </script>";
                return false;
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <!-- botstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <style>
    body {
        display: flex;
        align-items: center;
        height: 100vh;
        background: grey;
    }

    .card {
        background: ;
        height: 400px;
        padding: 40px 20px 40px 20px
    }
    </style>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-5 ">

                <!-- /.login-logo -->
                <div class="card shadow">
                    <h1 class="text-center">Login</h1>
                    <div class="card-body login-card-body">
                        <form action="" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Username" name="username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <span>
                                <?php if(isset($error)): ?>
                                <p class="text-danger">Username atau password salah!</p>
                                <?php endif; ?>
                            </span>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <span>
                                <?php if(isset($error)): ?>
                                <p class="text-danger">Username atau password salah!</p>
                                <?php endif; ?>
                            </span>
                            <div class="row mt-5 ">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember" name="remember">
                                        <label for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block" name="masuk">Masuk</button>
                                </div>
                                <!-- /.col -->
                                <span class="mt-4">Belum punya akun? <a href="register.php">Silahkan daftar</a>
                                </span>
                            </div>
                        </form>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>