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
                    <a href="npure.php">NPURE</a>
                </li>
                <li>
                    <a href="scarlett.php">Scarlett</a>
                </li>
                <li>
                    <a href="somethinc.php">Somethinc</a>
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
              <li>
              <a href="tampil_karyawan.php">Karyawan</a>
	          </li>
	        </ul>

	       

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Zurs.O
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
			<!-- Topbar Search -->
			<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
				<div class="input-group">
					<input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
						aria-label="Search" aria-describedby="basic-addon2">
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
									<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fas fa-search fa-fw"></i>
									</a>
									<!-- Dropdown - Messages -->
									<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
										aria-labelledby="searchDropdown">
										<form class="form-inline mr-auto w-100 navbar-search">
											<div class="input-group">
												<input type="text" class="form-control bg-light border-0 small"
													placeholder="Search for..." aria-label="Search"
													aria-describedby="basic-addon2">
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
									<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
										data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
										<img class="img-profile rounded-circle"
										src="../images/user.png" height="25px" width="25px">
									</a>
									<!-- Dropdown - User Information -->
									<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
										aria-labelledby="userDropdown">
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
						<h2 class="heading-section mb-5 pb-md-4">NPURE</h2>
					</div>
					<div class="col-md-12">
						<div class="featured-carousel owl-carousel">
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/NPURE/1.jpg);">
										<a href="#" class="icon d-flex align-items-center justify-content-center">
											<span class="ion-ios-search"></span>
										</a>
									</div>
									<div class="text pt-3 w-100 text-center">
										<h3><a href="#">Work 01</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/NPURE/2.jpg);">
										<a href="#" class="icon d-flex align-items-center justify-content-center">
											<span class="ion-ios-search"></span>
										</a>
									</div>
									<div class="text pt-3 w-100 text-center">
										<h3><a href="#">Work 02</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/NPURE/3.jpg);">
										<a href="#" class="icon d-flex align-items-center justify-content-center">
											<span class="ion-ios-search"></span>
										</a>
									</div>
									<div class="text pt-3 w-100 text-center">
										<h3><a href="#">Work 03</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/NPURE/4.jpg);">
										<a href="#" class="icon d-flex align-items-center justify-content-center">
											<span class="ion-ios-search"></span>
										</a>
									</div>
									<div class="text pt-3 w-100 text-center">
										<h3><a href="#">Work 04</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/NPURE/5.jpg);">
										<a href="#" class="icon d-flex align-items-center justify-content-center">
											<span class="ion-ios-search"></span>
										</a>
									</div>
									<div class="text pt-3 w-100 text-center">
										<h3><a href="#">Work 05</a></h3>
										<span>Web Design</span>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="work">
									<div class="img d-flex align-items-center justify-content-center rounded" style="background-image: url(../images/NPURE/6.jpg);">
										<a href="#" class="icon d-flex align-items-center justify-content-center">
											<span class="ion-ios-search"></span>
										</a>
									</div>
									<div class="text pt-3 w-100 text-center">
										<h3><a href="#">Work 06</a></h3>
										<span>Web Design</span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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