<?php
    include "config/controller.php";
    session_start();
    $lg              = new resto();
    if ($lg->sessionCheck() == "true") {
        if (@$_SESSION['level'] == "Admin") {
            header("location:pageAdmin.php");
            } else if (@$_SESSION['level'] == "pelanggan") {
            header("location:pagePelanggan.php");
        }   
    }

    if (isset($_POST['btnLogin'])) {
        $username = strtolower($_POST['username']); // mengambil value username dan memaksa menjadi huruf kecil
        $password = $_POST['password']; // mengambil value password
        // menggunakan function login yang ada di controller
        if ($response = $lg->login($username, $password)) {
            if ($response['response'] == "positive") {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['level']    = $response['level'];
                if ($response['level'] == "Admin") {
                $response = $lg->redirect("pageAdmin.php");
                } else if ($response['level'] == "Pelanggan") {
                $response = $lg->redirect("pagePelanggan.php");
                }
            }
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
        <!-- Title Page-->
        <title>Kuliner Hunter</title>
        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="css/sweet-alert.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="icon" 
         type="image/png" 
         href="images/icon/tc.png" />
    </head>
    <body class="animsition" style="height: 100%; background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/bg7.png') no-repeat; background-size: cover;">
        <div class="page-wrapper">
            <div class="container">
                <br><br><br>
                <div class="login-wrap">
                    <div class="login-content p-3 mb-2 bg-light bg-gradient">
                        <div class="login-logo">
                            <a class="mt-2" href="#">
                                <img style="width: 120px; height: 90px;" src="images/icon/tc.png" alt="kuliner tasik">
                            </a>
                        </div>
                        <div class="login-form ">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input autocomplete="off" value="<?=@$_POST['username']?>" class="au-input au-input--full" type="text" name="username" placeholder="Nama Lengkap Anda" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Masukkan kata sandi" id="password">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Ingat Saya
                                    </label>
                                    <label>
                                        <p>Belum punya akun?<a href="register.php" style="color: #f08519;">Daftar</a>/<a href="index.php" style="color: #f08519;">Tanpa login</a></p>
                                    </label>
                                </div>
                                <br>
                                <button name="btnLogin" class="au-btn au-btn--block btn btn-outline-warning m-b-20"  type="submit">Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>
        <script src="js/sweetalert.min.js"></script>
        <!-- Main JS-->
        <script src="js/main.js"></script>
        <?php include "config/alert.php";?>
    </body>
</html>
<!-- end document-->