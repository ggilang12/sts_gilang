<?php 
require_once("database.php");
$id = $_GET['id'];
$sql = Delete2("barang", $id);
if ($sql) {
    header("location:listBarang.php");
}else
{
    echo"Hapus Gagal";
}

?>