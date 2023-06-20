<?php
    include "config/controller.php";
    $rg       = new Resto();
    $table    = "tb_user";
    $autokode = $rg->autokode($table, "kd_user", "US");
    if (isset($_POST['btnRegister'])) {
        $kd_user = $rg->validateHtml($_POST['kd_user']);
        $nama_user = $rg->validateHtml($_POST['nama_user']);
        $email = $rg->validateHtml($_POST['email']);
        $username  = $rg->validateHtml($_POST['username']);
        $password  = $rg->validateHtml($_POST['password']);
        $confirm   = $rg->validateHtml($_POST['confirm']);
        $avatar    = $_FILES['foto'];
        $redirect = 'login.php';
        if ($nama_user == "" || $email == "" || $username == "" || $password == "" || $confirm == "") {
        $response = ['response' => 'negative', 'alert' => 'Lengkapi Field'];
        } else {
        $response = $rg->validateImage();
        if ($response['types'] == "true") {
        $response = $rg->register($kd_user, $nama_user, $email, $username, $password, $confirm, 'Pelanggan', $avatar, $redirect);
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
        <title>Halaman Register</title>
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
        <link rel="stylesheet" href="css/sweet-alert.css">
        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">
        <link href="images/icon/tc.png" rel="shortcut icon">

    </head>
    <body class="animsition" style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url('images/bg9.png') no-repeat; background-size: cover;">
        <div class="page-wrapper">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img style="width: 120px; height: 90px;" src="images/icon/tc.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    
                                    <input style="color: red; font-weight: bold;" class="au-input au-input--full" type="hidden" name="kd_user" readonly value="<?=$autokode;?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="au-input au-input--full" type="text" name="nama_user" value="<?php echo @$_POST['nama_user'] ?>" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" value="<?php echo @$_POST['email'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text" name="username" placeholder="Username" value="<?php echo @$_POST['username'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" value="<?php echo @$_POST['password'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input class="au-input au-input--full" type="password" name="confirm" placeholder="Confirm Password" value="<?php echo @$_POST['confirm'] ?>">
                                </div>
                                <div class="form-group">
                                        <label for="photo">Avatar</label>
                                        <input type="file" name="foto" id="photo" data-allowed-file-extensions="png jpg jpeg" class="dropify">
                                    </div>
                                <br>
                                <button name="btnRegister" class="btn au-btn--block btn-outline-warning m-b-20" type="submit">DAFTAR</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Sudah punya akun?
                                    <a href="login.php" style="color: #f08519;">Masuk</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
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