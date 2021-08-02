<?php
include '../model/databasesupplier.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->input($_POST['kode_supplier'], $_POST['nama_supplier'],  $_POST['alamat_supplier'],  $_POST['no_telp']);
    header("location:../view/tampil_supplier.php");
} else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampil_supplier.php");
} else if($aksi == "update"){ 
    $db->update($_POST['kode_supplier'], $_POST['nama_supplier'], $_POST['alamat_supplier'],  $_POST['no_telp']);
    header("location:../view/tampil_supplier.php");
}
