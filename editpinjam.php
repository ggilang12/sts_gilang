<?php
  require_once("database.php");
  $data=Editdata("peminjaman",$_GET['id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Insert Barang</title>
  </head>
  <body>
    <div class="container">
    <h1> Edit Peminjaman </h1>
    <?php while($peminjaman= mysqli_fetch_array($data)): ?>
    <form action="update2.php" method="post">
      <input type="hidden" class="form-control" name="id" value="<?= $peminjaman['id'];?>">
  <div class="form-group">
    <label>Tgl_Pinjam</label>
    <input type="date" class="form-control" name="tgl_pinjam">
  </div>
  <div class="form-group">
    <label>Tgl_Kembali</label>
    <input type="date" class="form-control" name="tgl_kembali">
  </div>
  <div class="form-group">
    <label>No_Identitas</label>
    <input type="text" class="form-control" name="no_identitas">
  </div>
  <div class="form-group">
    <label>Kode Barang</label>
    <input type="text" class="form-control" name="kode_brg">
  </div>
  <div class="form-group">
    <label>Jumlah</label>
    <input type="text" class="form-control" name="jumlah">
  </div>
  <button type="submit" name="update" class="btn btn-primary">Submit</button>
</form>
    <?php endwhile; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>