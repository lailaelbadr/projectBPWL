<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="https://fontawesome.com/releases/v5.9/css/all.css" rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Input Data Barang</h2>
                        <form action="../../controller/proses_barang.php?aksi=tambah" method="post">
                            <div class="form-group">
                                <label for="kode_barang"><i class="zmdi zmdi-widgets"></i></label>
                                <input type="text" name="kode_barang" id="kode_barang" placeholder="Kode Barang"/>
                            </div>
                            <div class="form-group">
                                <label for="nama_barang"><i class="zmdi zmdi-label"></i></label>
                                <input type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang"/>
                            </div>
                            <div class="form-group">
                                <label for="brand"><i class="zmdi zmdi-labels"></i></label>
                                <input type="text" name="brand" id="brand" placeholder="Nama Brand"/>
                            </div>
                            <div class="form-group">
                                <label for="harga_barang"><i class="zmdi zmdi-money"></i></label>
                                <input type="text" name="harga_barang" id="harga_barang" placeholder="Harga Barang"/>
                            </div>
                            <div class="form-group">
                                <label for="jumlah"><i class="zmdi zmdi-chart"></i></label>
                                <input type="text" name="jumlah" id="jumlah" placeholder="Jumlah Barang"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Input"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                    </div>
                </div>
            </div>
        </section>
        </div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>