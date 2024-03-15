<?php
require_once("database.php");
$dataBarang = DataPeminjaman();

if (isset($_POST["submit"])) {
  $tgl_pinjam = $_POST['tglPinjam'];
  $tgl_Kembali = $_POST['tgl_kembali'];
  $no_identitas = $_POST['noIdentitas'];
  $kode_barang = $_POST['kode_barang'];
  $jumlah = $_POST['jumlah'];

  TambahDataPmj($tgl_pinjam, $tgl_Kembali, $no_identitas, $kode_barang, $jumlah);
  header('location: listPeminjaman.php');
}
$number = 0
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
                                    <div class="form-group mt-4">
                                        <input type="date" class="form-control col-7" placeholder="Masukan Tanggal Pinjam"
                                            name="tglPinjam">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="date" class="form-control col-7" placeholder="Masukan Tanggal Kembali"
                                            name="tgl_kembali">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control col-7" placeholder="Masukan No Identitas"
                                            name="noIdentitas">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control col-7" placeholder="Masukan Kode Barang"
                                            name="kode_barang">
                                    </div>
                                    <div class="form-group mt-4">
                                        <input type="number" class="form-control col-7" placeholder="Masukan Jumlah"
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