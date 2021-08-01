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
                        <h2 class="form-title">Input Data Karyawan</h2>
                        <form action="../../controller/proses_karyawan.php?aksi=tambah" method="post">
                            <div class="form-group">
                                <label for="kode_karyawan"><i class="zmdi zmdi-widgets"></i></label>
                                <input type="text" name="kode_karyawan" id="kode_karyawan" placeholder="Kode Karyawan"/>
                            </div>
                            <div class="form-group">
                                <label for="nama_karyawan"><i class="zmdi zmdi-account-box"></i></label>
                                <input type="text" name="nama_karyawan" id="nama_karyawan" placeholder="Nama Karyawan"/>
                            </div>
                            <div class="form-group">
                                <label for="alamat"><i class="zmdi zmdi-city"></i></label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat"/>
                            </div>
                            <div class="form-group">
                                <label for="no_telp"><i class="zmdi zmdi-phone"></i></label>
                                <input type="text" name="no_telp" id="no_telp" placeholder="No Telpon"/>
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