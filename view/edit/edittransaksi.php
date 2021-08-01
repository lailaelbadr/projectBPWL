<?php
include '../../model/databasetransaksi.php';
$db = new database();
?>

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
                        <h2 class="form-title">Edit Data Transaksi</h2>
                        <form action="../../controller/prosestransaksi.php?aksi=update" method="post">
                        <?php
                        foreach($db->edit($_GET['id']) as $d){
                        ?>
                            <div class="form-group">
                                <label for="kode_transaksi"><i class="zmdi zmdi-mall"></i></label>
                                <input type="hidden" name="kode_transaksi" value="<?php echo $d['kode_transaksi'] ?>">
                                
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-widgets"></i></label>
                                <input type="text" name="kode_barang" value="<?php echo $d['kode_barang'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-accounts"></i></label>
                                <input type="text" name="kode_supplier" value="<?php echo $d['kode_supplier'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-calendar"></i></label>
                                <input type="date" name="tgl_transaksi" value="<?php echo $d['tgl_transaksi'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-chart"></i></label>
                                <input type="text" name="jml" value="<?php echo $d['jml'] ?>">
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Input"/>
                            </div>
                            <?php  } ?>
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