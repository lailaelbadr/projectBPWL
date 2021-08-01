<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

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
                        <h2 class="form-title">Input Data Transaksi</h2>
                        <form action="../../controller/proses_transaksi.php?aksi=tambah" method="post">
                            <div class="form-group">
                                <label for="kode_Transaksi"><i class="zmdi zmdi-mall"></i></label>
                                <input type="text" name="kode_transaksi" id="kode_transaksi" placeholder="Kode Transaksi"/>
                            </div>
                            <div class="form-group">
                                <label for="kode_barang"><i class="zmdi zmdi-widgets"></i></label>
                                <input type="text" name="kode_barang" id="kode_barang" placeholder="Kode Barang"/>
                            </div>
                            <div class="form-group">
                                <label for="kode_supplier"><i class="zmdi zmdi-accounts"></i></label>
                                <input type="text" name="kode_supplier" id="kode_supplier" placeholder="Kode Supplier"/>
                            </div>
                            <div class="form-group">
                                <label for="tgl_transaksi"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="date" name="tgl_transaksi" id="tgl_transaksi" placeholder="Tanggal Transaksi"/>
                            </div>
                            <div class="form-group">
                                <label for="jml"><i class="zmdi zmdi-chart"></i></label>
                                <input type="text" name="jml" id="jml" placeholder="Jumlah"/>
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