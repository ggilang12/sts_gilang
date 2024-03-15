<?php 
require_once("database.php");
$id = $_GET['id'];
$sql = Delete3("user", $id);
if ($sql) {
    header("location:listUser.php");
}else
{
    echo"Hapus Gagal";
}

?>