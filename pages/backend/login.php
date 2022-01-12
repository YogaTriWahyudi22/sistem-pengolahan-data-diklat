<?php

include 'config/connection.php';

session_start();

if ( isset($_POST['admin']) ) {
    header("location: index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../../asset/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../asset/backend/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- icon -->
    <link href="../../asset/backend/img/icon/icon.png" rel="icon">

</head>

<body class="bg-gradient-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0 bg-gray-900">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-200 mb-4">Selamat Datang, Silahkan Login Terlebih Dahulu</h1>
                                    </div> <hr class="bg-gray-600">
                                    <form action="#" method="POST" class="user">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Masukan Username anda...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Ketikkan Password anda...">
                                        </div><br>
                                        <button type="submit" name="login" class="btn btn-block btn-danger" >Masuk</button>
                                    </form>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 

                include 'config/connection.php';
                
                if ( isset($_POST['login']) ) {

                    $username = $_POST['username'];
                    $password = $_POST['password'];


                    $cek = $conn->query("SELECT * FROM tb_user
                                            WHERE
                                            username = '$username'
                                            AND
                                            password = '$password'
                    ")->fetch_assoc();


                    if ( $cek == True ) {

                        $_SESSION['admin'] = $cek;
                        $_SESSION['username'] = $cek['username'];
                        $_SESSION['password'] = $cek['password'];
                        $_SESSION['level'] = $cek['level'];

                       
                        echo "<script>
                                  alert('Login Sukses')
                                  window.location = 'index.php'
                              </script>";
                    } else {
                        echo "<script>
                                  alert('Login Gagal')
                                  window.location = 'login.php'
                              </script>";
                    }

                }      
                ?>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../asset/backend/vendor/jquery/jquery.min.js"></script>
    <script src="../../asset/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../asset/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../asset/backend/js/sb-admin-2.min.js"></script>

</body>

</html>