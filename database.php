<?php
$server = "localhost";
$username = "root";
$password = "";
$dbName = "peminjaman_barang";

$conn=mysqli_connect($server, $username, $password, $dbName);

function listbarang()
{
    global $conn;
    $hasil=mysqli_query($conn,"SELECT * FROM barang");
    $rows=[];
    while($row = mysqli_fetch_assoc($hasil))
    {
        $rows[] = $row;
    }
    return $rows;
}

function Login($username, $password) {
    global $conn; 
    $uname = $username;
    $upass = $password;		
    $hasil = mysqli_query($conn,"select * from user where username='$uname' and password='$upass';");
    $cek = mysqli_num_rows($hasil);
    if($cek > 0 ){
        $query = mysqli_fetch_array($hasil);
        $_SESSION['no_identitas'] = $query['no_identitas'];
        $_SESSION['username'] = $query['username'];
        $_SESSION['role'] = $query['role'];
        return true;		
    }
    else {
        return false;
    }	
}

function Delete2($tablename, $id) {
    global $conn;
    $hasil=mysqli_query($conn,"DELETE FROM $tablename where id='$id'");
    return $hasil;
}

function Delete3($tableee, $id) {
    global $conn;
    $hasil=mysqli_query($conn,"DELETE FROM $tableee where id='$id'");
    return $hasil;
}

function delete1($tablee, $id) {
    global $conn;
    $hasil=mysqli_query($conn,"DELETE FROM $tablee where id='$id'");
    return $hasil;
}


function DataPeminjaman() {
    global $conn;
    $hasil=mysqli_query($conn,"SELECT * FROM peminjaman;");
    $rows=[];
    while($row = mysqli_fetch_assoc($hasil))
    {
        $rows[] = $row;
    }  
    return $rows;

}   

function DataUser() {
    global $conn;
    $hasil=mysqli_query($conn,"SELECT * FROM user;");
    $rows=[];
    while($row = mysqli_fetch_assoc($hasil))
    {
        $rows[] = $row;
    }
    return $rows;

}

function TambahDataBrg($kode_brg, $nama_brg, $kategori, $merk, $jumlah) {
    global $conn;
    $hasil=mysqli_query($conn,"INSERT INTO barang (kode_brg, nama_brg, kategori, merk, jumlah) VALUES ('$kode_brg','$nama_brg','$kategori','$merk','$jumlah')");
    if ($hasil) {
        header("location: listBarang.php");
    } else {
        echo"gagal";
        header("location: listBarang.php");
}
}

function TambahDataPmj($tgl_pinjam, $tgl_kembali, $no_identitas, $kode_barang, $jumlah) {
    global $conn;
    $hasil=mysqli_query($conn,"INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, no_identitas, kode_barang, jumlah) VALUES ('$tgl_pinjam','$tgl_kembali','$no_identitas','$kode_barang','$jumlah')");
    if ($hasil) {
        header("location: listPeminjaman.php");
    } else {
        echo"gagal";
        header("location: listPeminjaman.php");
    }
}

function Editdata($tablename,$id)
{
    global $conn;
    $hasil=mysqli_query($conn,"select * from $tablename where id='$id'");
    return $hasil;
}

function updateBarang($table, $id, $kode_brg, $nama_brg, $kategori, $merk, $jumlah)
{
    global $conn;
    $sql = "UPDATE $table SET kode_brg ='$kode_brg', nama_brg ='$nama_brg', kategori ='$kategori', merk = '$merk', jumlah ='$jumlah' WHERE id = '$id'";
    $hasil=mysqli_query($conn,$sql);
    return $hasil;
}

function updatePeminjaman($table, $id, $tgl_pinjam, $tgl_kembali, $no_identitas, $kode_barang, $jumlah)
{
    global $conn;
    $sql = "UPDATE $table SET tgl_pinjam = '$tgl_pinjam', tgl_kembali = '$tgl_kembali', no_identitas = '$no_identitas', kode_barang = '$kode_barang', jumlah = '$jumlah' WHERE id = '$id'";
    $hasil=mysqli_query($conn,$sql);
    return $hasil;
}

?>