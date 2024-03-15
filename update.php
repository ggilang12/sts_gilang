<?php
require_once("database.php");
$id = $_POST['id'];
$kodeBrg = $_POST['kodeBrg'];
$namaBrg= $_POST['namaBrg'];
$kategori = $_POST['kategori'];
$merk = $_POST['merk'];
$jumlah = $_POST['jumlah'];
$sql = updateBarang("barang", $id, $kodeBrg, $namaBrg, $kategori, $merk, $jumlah);

if($sql){
    header("location:listBarang.php");
}
?>