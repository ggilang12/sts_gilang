<?php
    require_once('database.php');
    $dataBarang=listbarang();
    $nomor=0;
?>

<!doctype html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>list barang</title>
  </head>
  <body>
    <br><br><br>
    <div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
  <a class="navbar-brand" href="home.php">PEMINJAMAN BARANG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="listbarang.php">list barang<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listpeminjaman.php">list peminjaman</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listuser.php">user</a>
      </li>
    </ul>
    <a href="logout.php ">
      <button>logout</button>
    </a>
  </div>
</nav>
    </div>
    <div class ="container">
    <h1>BARANG</h1>   <button><a href="add.php">ADD</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">kategori</th>
      <th scope="col">Merk</th>
      <th scope="col">jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($dataBarang as $data) : ?> 
    <?php $nomor++; ?>   
    <tr>
      <th scope="row"><?php echo "$nomor"; ?></th>
      <td><?php echo "$data[kode_brg]";?></td>
      <td><?php echo "$data[nama_brg]";?></td>
      <td><?php echo "$data[kategori]";?></td>
      <td><?php echo "$data[merk]";?></td>
      <td><?php echo "$data[jumlah]";?></td>
      <td>
      <?php echo "<a href='editbarang.php?id=$data[id]'><button class='btn btn-warning'>Edit</button></a> <a href='javascript:hapusData(".$data['id'].")'><button class='btn btn-danger'>Hapus</button></a>"; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
    <script language="JavaScript" type="text/javascript">
      function hapusData(id){
        if (confirm("Apakah anda yakin akan menghapus data ini?")){
          window.location.href = 'delete.php?id=' + id;
        }
      }
    </script>

    </body>
</html>