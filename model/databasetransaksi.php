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
        $data = mysqli_query($this->con, "select * from transaksi");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function input($kode_transaksi,$nama_barang, $kode_supplier, $tgl_transaksi, $jml){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into transaksi
        values('$kode_transaksi', '$kode_barang', '$kode_supplier', '$tgl_transaksi', '$jml')");
    }
    function hapus($kode_transaksi){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from transaksi
        where kode_transaksi= '$kode_transaksi'");
    }
    function edit($kode_transaksi){
        $data = mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "select * from transaksi
        where kode_transaksi= '$kode_transaksi'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($kode_transaksi, $kode_barang, $kode_supplier, $tgl_transaksi, $jml){
        mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "update transaksi set
         kode_barang = '$kode_barang', kode_supplier = '$kode_supplier', tgl_transaksi = '$tgl_transaksi', jml = '$jml' where kode_transaksi = '$kode_transaksi'");
    }
}
?>