<?php
include '../model/databasebarang.php';
$db = new database();
?>

<!doctype html>
<html lang="en">

<head>
    <title>Sidebar 02</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="produk/css/owl.carousel.min.css">
    <link rel="stylesheet" href="produk/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="produk/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" />
</head>

<body>

    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <div class="p-4 pt-5">
                <h1><a href="index.html" class="logo">zurs.O</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li>
                                <a href="caltusia1.php">Caltusia</a>
                            </li>
                            <li>
                                <a href="lacoco1.php">Lacoco</a>
                            </li>
                            <li>
                                <a href="npure1.php">NPURE</a>
                            </li>
                            <li>
                                <a href="scarlett1.php">Scarlett Whitening</a>
                            </li>
                            <li>
                                <a href="somethinc1.php">Somethinc</a>
                            </li>
                            <li>
                                <a href="whitelab1.php">Whitelab</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="tampil_barang.php">Barang</a>
                    </li>
                    <li>
                        <a href="tampil_supplier.php">Supplier</a>
                    </li>
                    <li>
                        <a href="tampil_transaksi.php">Transaksi</a>
                    </li>
                </ul>



                <div class="footer">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Zurs.O
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                            <img class="img-profile rounded-circle" src="../images/user.png" height="25px" width="25px">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../index.php" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>
            </nav>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="heading-section mb-5 pb-md-4">SCARLETT WHITENING</h2>
                        </div>
                        <div class="col-md-12 text-left">
                            <h2 class="heading-section mb-5 pb-md-4">Body Lotion</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/1.png);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Fragrance Brightening Body Lotion Jolly</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/2.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Fragrance Brightening Body Lotion Charming</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/3.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Fragrance Brightening Body Lotion Fantasia</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/4.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Fragrance Brightening Body Lotion Freshy</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/5.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Fragrance Brightening Body Lotion Romansa</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--batas lotion-->
                        <div class="col-md-12 text-left">
                            <h2 class="heading-section mb-5 pb-md-4">Body Scrub</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/6.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Body Scrub Pomegrante</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/7.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Body Scrub Romansa</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--batas Scrub-->
                        <div class="col-md-12 text-left">
                            <h2 class="heading-section mb-5 pb-md-4">Shower Scrub</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/10.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Shower Scrub Cucumber</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/11.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Showe Scrub Pomegrante</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/12.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Showe Scrub Mango</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--batas Shower Scrub-->
                        <div class="col-md-12 text-left">
                            <h2 class="heading-section mb-5 pb-md-4">Face Serum</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/13.png);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Glowtening Serum</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/14.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Acne Serum</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/15.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Brightly Ever After Serum</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--batas face serum-->
                        <div class="col-md-12 text-left">
                            <h2 class="heading-section mb-5 pb-md-4">Face Cream</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/16.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Acne Day Cream</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/18.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Acne Night Cream</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/19.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Brightly Ever After Day Cream</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/20.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Brightly Ever After Night Cream</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--batas cream-->
                        <div class="col-md-12 text-left">
                            <h2 class="heading-section mb-5 pb-md-4">Facial Wash</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="featured-carousel owl-carousel">
                                <div class="item">
                                    <div class="work">
                                        <div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/Scarlett/21.jpg);">
                                            <a href="#" class="icon d-flex align-items-center justify-content-center">
                                                <span class="ion-ios-search"></span>
                                            </a>
                                        </div>
                                        <div class="text pt-3 w-100 text-center">
                                            <h3><a href="#">Brightening Facial wash</a></h3>
                                            <span>Rp,-70.000</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>

    <script src="produk/js/jquery.min.js"></script>
    <script src="produk/js/popper.js"></script>
    <script src="produk/js/bootstrap.min.js"></script>
    <script src="produk/js/owl.carousel.min.js"></script>
    <script src="produk/js/main.js"></script>
    </div>






    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../index.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>