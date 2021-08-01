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
        $data = mysqli_query($this->con, "select * from karyawan");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($kode_karyawan, $nama_karyawan, $alamat, $no_telp){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into karyawan
        values('$kode_karyawan', '$nama_karyawan', '$alamat', '$no_telp')");
    }
    function hapus($kode_karyawan){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from karyawan
        where kode_karyawan= '$kode_karyawan'"); 
    }
    function edit($kode_karyawan){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from karyawan
        where kode_karyawan= '$kode_karyawan'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($kode_karyawan, $nama_karyawan, $alamat, $no_telp){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update karyawan set
        nama_karyawan = '$nama_karyawan', alamat = $alamat, no_telp = $no_telp 
        where kode_karyawan = '$kode_karyawan'");
    }
}
?>