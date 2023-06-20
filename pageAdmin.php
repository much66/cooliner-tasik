<?php
    include "config/controller.php";
    $function = new Resto();
    session_start();
    $auth = $function->AuthUser($_SESSION['username']);
    $response = $function->sessionCheck();
    if ($response == "false") {
    header("Location:login.php");
    }
    if ($_SESSION['level'] != "Admin") {
    header("Location:login.php");
    }
    if(isset($_GET['logout'])){
        $function->logout2();
    }
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
        <title>Cooliner Admin</title>
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
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        <link href="images/icon/tcb.png" rel="shortcut icon">

    </head>
    <body>
        <div class="page-wrapper">
            <aside class="menu-sidebar2">
                <div class="logo">
                    <a href="?page=dashboard">
                        <img style="width: 60px; height: 45px; margin-left:85px;" src="images/icon/tcb.png" alt="cooliner" />
                    </a>
                </div>
                <div class="menu-sidebar2__content js-scrollbar1">
                    <div class="account2">
                        <div class="image img-cir img-120">
                            <img src="images/<?=$auth["avatar"];?>" />
                        </div>
                        <h4 class="name"><?=$auth['name'];?></h4>
                        <span><?= $auth['level'] ?></span>
                    </div>
                    <nav class="navbar-sidebar2">
                        <ul class="list-unstyled navbar__list">
                            <li>
                                <a href="?page">
                                <i class="zmdi zmdi-view-dashboard zmdi-hc-lg"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="?page=indexLevel">
                                <i class="zmdi zmdi-account zmdi-hc-lg"></i>User</a>
                            </li>
                            <li>
                                <a href="?page=indexKategori">
                                <i class="zmdi zmdi-widgets zmdi-hc-lg"></i>Kategori</a>
                            </li>
                            <li>
                                <a href="?page=indexMenu">
                                <i class="zmdi zmdi-local-dining zmdi-hc-lg"></i>Kuliner</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>
            <div class="page-container2">
                <header class="header-desktop2">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap2">
                                <div class="logo d-block d-lg-none">
                                    <a href="#">
                                        <img src="images/icon/logo-white.png" alt="CoolAdmin" />
                                    </a>
                                </div>
                                <div class="header-button2">
                                    <div class="header-button-item mr-0 js-sidebar-btn">
                                        <i class="zmdi zmdi-menu"></i>
                                    </div>
                                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="?page=editadmin">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="homepage.php?logout" id="forLogout">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <aside class="menu-sidebar2 js-right-sidebar d-block d-lg-none">
                    <div class="logo">
                        <a href="#">
                            <img src="images/icon/logo-white.png" alt="Cool Admin" />
                        </a>
                    </div>
                    <div class="menu-sidebar2__content js-scrollbar2">
                        <div class="account2">
                            <div class="image img-cir img-120">
                                <img src="images/avatar.png" alt="John Doe" />
                            </div>
                            <h4 class="name"><?=$auth['name']?></h4>
                        </div>
                        <nav class="navbar-sidebar2">
                            <ul class="list-unstyled navbar__list">
                                <li>
                                    <a href="?page">
                                    <i class="zmdi zmdi-view-dashboard zmdi-hc-lg"></i>Dashboard</a>
                                </li>
                                <li>
                                    <a href="?page=indexLevel">
                                    <i class="zmdi zmdi-account zmdi-hc-lg"></i>User</a>
                                </li>
                                <li>
                                    <a href="?page=indexKategori">
                                    <i class="zmdi zmdi-widgets zmdi-hc-lg"></i>Kategori</a>
                                </li>
                                <li>
                                    <a href="?page=indexMenu">
                                    <i class="zmdi zmdi-local-dining zmdi-hc-lg"></i>Kuliner</a>
                                </li>
                                <li>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </aside>
                <?php
                @$page = $_GET['page'];
                switch ($page) {
                    case 'indexLevel':
                    include "page/admin/level/index.php";
                    break;
                    case 'indexKategori':
                    include "page/admin/kategori/index.php";
                    break;
                    case 'createKategori':
                    include "page/admin/kategori/create.php";
                    break;
                    case 'editKategori':
                    include "page/admin/kategori/edit.php";
                    break;
                    case 'indexMenu':
                    include "page/admin/menu/index.php";
                    break;
                    case 'createMenu':
                    include "page/admin/menu/create.php";
                    break;
                    case 'editMenu':
                    include "page/admin/menu/edit.php";
                    break;
                    case 'editKuliner':
                    include "page/admin/level/edit.php";
                    break;    
                    case 'indexMeja':
                    include "page/admin/meja/index.php";
                    break;
                    case 'indexLaporan':
                    include "page/admin/laporan/laporan_transaksi.php";
                    break;
                    case 'editadmin':
                    include "page/admin/dashboard/editadmin.php";
                    break;
                    case 'indexTransaksi':
                    include "page/admin/transaksi/index.php";
                    break;
                    case 'struk_transaksi':
                    include "page/admin/transaksi/struk_transaksi.php";
                   default:
                    $page = "dashboard";
                    include "page/admin/dashboard/index.php";
                    break;
                }
                ?>
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
        <script src="js/main.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
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
        <script>
        $(document).ready(function() {
        $('#example').DataTable();
        } );
        $('.dropify').dropify();
        </script>
        <?php error_reporting(0);
        include "config/alert.php";?>
    </body>
</html>