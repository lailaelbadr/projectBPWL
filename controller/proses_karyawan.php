<?php
include '../model/databasekaryawan.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->input($_POST['kode_karyawan'], $_POST['nama_karyawan'],  $_POST['alamat'],  $_POST['no_telp']);
    header("location:../view/tampil_karyawan.php");
} else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampil_karyawan.php");
} else if($aksi == "update"){ 
    $db->update($_POST['kode_karyawan'], $_POST['nama_karyawan'], $_POST['alamat'],  $_POST['no_telp']);
    header("location:../view/tampil_karyawan.php");
}
?>