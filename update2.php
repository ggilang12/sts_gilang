<?php
require_once("database.php");
$id = $_POST['id'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali= $_POST['tgl_kembali'];
$no_identitas = $_POST['no_identitas'];
$kode_barang= $_POST['kode_brg'];
$jumlah = $_POST['jumlah'];
$sql = updatePeminjaman("peminjaman", $id, $tgl_pinjam, $tgl_kembali, $no_identitas, $kodeBrg, $jumlah);

if($sql){
    header("location:listPeminjaman.php");
}
?>