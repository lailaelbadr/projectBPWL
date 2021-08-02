<?php
include '../model/databasebarang.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->input($_POST['kode_barang'], $_POST['nama_barang'], $_POST['brand'],  $_POST['harga_barang'],  $_POST['jumlah']);
    header("location:../view/tampil_barang.php");
} else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampil_barang.php");
} else if($aksi == "update"){ 
    $db->update($_POST['kode_barang'], $_POST['nama_barang'], $_POST['brand'],  $_POST['harga_barang'],  $_POST['jumlah']);
    header("location:../view/tampil_barang.php");
}
