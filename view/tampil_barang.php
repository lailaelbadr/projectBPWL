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
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css"/>
  
	<!--link search -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    
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
                    <a href="npure1.php">NPURE</a>
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
						aria-label="Search" aria-describedby="basic-addon2" name="cari">
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

        <h2 class="mb-4">Data Barang</h2>
        
		<div class="content">
    
			<div class="container">

				<div class="col-md-3">
					<button type="button" class="btn mb-2 mb-md-0 btn-outline-secondary btn-block">
						<a href = "../view/input/input_barang.php">Input Data</a>
					</button>
				</div>

				<br></br>
		
			  <div class="table-responsive">
				<table class="table custom-table text-center">
					<tr>
						<th scope="col">NO</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Brand</th>
						<th scope="col">Harga Barang</th>
						<th scope="col">Jumlah</th>
						<th scope="col">Update</th>
					</tr>


					<?php

						if(isset($_GET['cari'])) {
							$query = mysqli_query($con, "SELECT * FROM barang 
							where nama_barang LIKE '%",$_GET['cari'],"%'");
						}

						$no = 1;
						foreach($db->tampil_data() as $x){
						?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $x['nama_barang']; ?></td>
							<td><?php echo $x['brand']; ?></td>
							<td><?php echo $x['harga_barang']; ?></td>
							<td><?php echo $x['jumlah']; ?></td>
							<td>
								<a href="../view/edit/edit_barang.php?id=<?php echo $x['kode_barang']; ?>&aksi=edit">Edit</a>
								<a href="../controller/proses_barang.php?id=<?php echo $x['kode_barang']; ?>&aksi=hapus">Hapus</a>
							</td>
						</tr>    
					<?php
					} 
					?>

					
				</table>
			</div>
			</div>
			</div>


      </div>
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