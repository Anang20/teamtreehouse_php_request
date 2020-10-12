<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<form method="POST" action="?action=edit">
  <div class="container">
      <div class="row">
          <div class="col-4 border solid 2px">
            <div class="form-group">
                <h2>Data Siswa</h2>
                <label for="exampleInputEmail1">Nama</label>
                <input type="nama" class="form-control" name="nama" placeholder="nama">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input type="alamat" class="form-control" name="alamat" placeholder="alamat">
            </div>
            <button type="submit" class="btn btn-primary" value="cari" name="action">Submit</button>
            </div>
      </div>
  </div>  
</form>

<form method="GET" action="?action=edit">
  <div class="container">
      <div class="row">
          <div class="col-4 border solid 2px mt-3">
            <div class="form-group">
                <h2>Tambah Tim</h2>
                <label for="exampleInputEmail1">Nama Tim</label>
                <input type="tim" class="form-control" name="tim" placeholder="Nama Tim">
            </div>
            <button type="submit" class="btn btn-primary" value="daftar" name="action">Submit</button>
            </div>
      </div>
  </div>  
</form>



    <?php

    if ($_POST)
    {
        echo "Nama: " . $_POST["nama"];
        echo "<br>";
        echo "alamat: " . $_POST["alamat"];

    } elseif ($_GET)
    {
        echo "Nama Tim: " . $_GET["tim"];
    }
    ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

