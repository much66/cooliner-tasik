<?php
    include "config/controller.php";
    $id = new Resto();
    session_start();
    $auth     = $id->AuthUser($_SESSION['username']);
    $response = $id->sessionCheck();
    if ($response == "false") {
    header("Location:index.php");
    }
    if (isset($_GET['logout'])) {
    $id->logout2();
    }
    $uname = $auth['username'];
    $sql2    = "SELECT kd_user FROM tb_user WHERE username='$uname'";
    
    ?>
    
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">
        <!-- Title Page-->
        <title>Kuliner Tasik</title>
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
        <link href="vendor/vector-map/jqvmap.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="vendor/dropify/dist/css/dropify.css">
        <link rel="stylesheet" href="css/sweet-alert.css">
        <!-- Main CSS-->
        <link href="css/theme.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	     <link href="images/icon/tc.png" rel="shortcut icon">
    </head>
    </head>
    <body style="background-color: #F2F2F2;">
    <div class="page-wrapper">
    <header class="header-desktop4 fixed-top">
              <div class="container"> 
                    <div class="header4-wrap">
                        <div class="header__logo">
                            <a class="navbar-brand" href="?page=dashboard">
                            <img style="width: 60px; height: 45px" src="images/icon/tc.png" alt="kuliner tasik">
                            </a>
                        </div>
                        <div class="header__tool">
                            <div class="header-button-item js-item-menu">
                            <div class="header-button-item mr-0 js-sidebar-btn">
                                        <i style="color: #f08519;" class="zmdi zmdi-menu "></i>
                                    </div>
                                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                    <div class="account-dropdown__body">
                                            <div class="account-dropdown__body" >
                                                <div class="account-dropdown__item btn-outline-warning">
                                                    <a href="?page=edit">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item btn-outline-warning">
                                                    <a href="?page=indexKuliner">
                                                    <i class="zmdi zmdi-local-dining"></i>Kuliner Anda</a>
                                                </div>
                                                
                                            </div>
                                            <div class="account-dropdown__footer btn-outline-warning">
                                            <a href="homepage.php?logout" id="forLogout">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                          </div>
                        </div>
                    </div>
                </div>   
            </header>
                <?php
                @$page = $_GET['page'];
                switch ($page) {
                case "order_menu";
                include "page/pelanggan/order/order_menu.php";
                break;
                case "detail_menu":
                include "page/pelanggan/order/detail_menu.php";
                break;
                case "rating":
                include "page/pelanggan/order/rating.php";
                break;
                case "tambahKulinerr":
                include "page/pelanggan/order/kuliner/buat_kuliner.php";
                break;
                case "edit":
                include "page/pelanggan/order/edit.php";
                break;
                case "indexKuliner":
                include "page/pelanggan/order/kuliner/index.php";
                break;
                case "editKuliner":
                include "page/pelanggan/order/kuliner/edit.php";
                break;
                default:
                $page = "dashboard";
                include "page/pelanggan/order/dashboard.php";
                break;
                }
                ?>
                <section class="p-t-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Hubungi kami di <a href="https://Instagram.com">Social Media</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <script src="vendor/jquery-3.2.1.min.js"></script>

            </div>
        </div>
        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
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
        <script src="vendor/vector-map/jquery.vmap.js"></script>
        <script src="vendor/vector-map/jquery.vmap.min.js"></script>
        <script src="vendor/vector-map/jquery.vmap.sampledata.js"></script>
        <script src="vendor/vector-map/jquery.vmap.world.js"></script>
        <script src="vendor/dropify/dist/js/dropify.min.js"></script>
        <!-- Main JS-->
        <script src="js/jquery.input-counter.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
        $('.dropify').dropify();
        var options = {
        selectors: {
        addButtonSelector: '.btn-add',
        subtractButtonSelector: '.btn-subtract',
        inputSelector: '.counter',
        },
        settings: {
        checkValue: true,
        isReadOnly: true,
        },
        };
        $(".input-counter").inputCounter(options);
        </script>
        <script>
        $(document).ready(function(){
        $('#forLogout').click(function(e){
        e.preventDefault();
        swal({
        title: "Logout",
        text: "Yakin Logout?",
        type: "info",
        showCancelButton: true,
        confirmButtonText: "Yes",
        cancelButtonText: "No",
        closeOnConfirm: false,
        closeOnCancel: true
        }, function(isConfirm) {
        if (isConfirm) {
        window.location.href="?logout";
        }
        });
        });
        })
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
        <?php error_reporting(0);
        include"config/alert.php";
        
        ?>
    </body>
</html>