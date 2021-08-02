<?php
include '../model/databasetransaksi.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->input($_POST['kode_transaksi'], $_POST['kode_barang'],  $_POST['kode_supplier'],  $_POST['tgl_transaksi'],  $_POST['jml']);
    header("location:../view/tampiltransaksi.php");
} else if($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("location:../view/tampiltransaksi.php");
} else if($aksi == "update"){ 
    $db->update($_POST['kode_transaksi'], $_POST['kode_barang'], $_POST['kode_supplier'],  $_POST['tgl_transaksi'],  $_POST['jml']);
    header("location:../view/tampiltransaksi.php");
}
