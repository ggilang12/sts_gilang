<?php
require_once("database.php");
$dataBarang = listbarang();

if (isset($_POST["submit"])) {
    $kode_brg = $_POST['kode_brg'];
    $nama_brg = $_POST['nama_brg'];
    $kategori = $_POST['kategori'];
    $merk = $_POST['merk'];
    $jumlah = $_POST['jumlah'];

    TambahDataBrg($kode_brg, $nama_brg, $kategori, $merk, $jumlah);
    header('location: listBarang.php');
}
    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>           
                            <form method="post">
                                <div class="modal-body">
                                    <input type="hidden" name="id">
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control col-7" placeholder="kode barang"
                                            name="kode_brg">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control col-7" placeholder="nama barang"
                                            name="nama_brg">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control col-7" placeholder="kategori"
                                            name="kategori">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control col-7" placeholder="merk"
                                            name="merk">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="number" class="form-control col-7" placeholder="jumlah"
                                            name="jumlah">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>