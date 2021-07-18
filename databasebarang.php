<?php
class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "project_bpwl";
    var $con;

    function __construct(){
        $this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con, $this->db);
    }
    function tampil_data(){
        $data = mysqli_query($this->con, "select * from barang");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($kode_barang, $nama_barang, $brand, $harga_barang, $jumlah){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into barang
        values('$kode_barang', '$nama_barang', '$brand', '$harga_barang', '$jumlah')");
    }
    function hapus($kode_barang){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from barang
        where kode_barang= '$kode_barang'");
    }
    function edit($kode_barang){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from barang
        where kode_barang= '$kode_barang'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($kode_barang, $nama_barang, $brand, $harga_barang, $jumlah){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update barang set
        nama_barang = '$nama_barang', brand = '$brand', harga_barang = $harga_barang, jumlah = $jumlah 
        where kode_barang = '$kode_barang'");
    }
}
?>