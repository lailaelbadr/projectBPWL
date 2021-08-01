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
        $data = mysqli_query($this->con, "select * from supplier");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($kode_supplier,$nama_supplier, $alamat, $no_telp){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into supplier
        values('$kode_supplier', '$nama_supplier', '$alamat', '$no_telp')");
    }
    function hapus($kode_supplier){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from supplier
        where kode_supplier= '$kode_supplier'");
    }
    function edit($kode_supplier){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from supplier
        where kode_supplier= '$kode_supplier'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($kode_supplier, $nama_supplier,$alamat_supplier, $no_telp){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update supplier set
        nama_supplier = '$nama_supplier', alamat_supplier = '$alamat_supplier', no_telp = '$no_telp' where kode_supplier = '$kode_supplier'");
    }
}
?>