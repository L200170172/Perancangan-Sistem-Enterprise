<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Status Produksi</title>
  </head>
  <body>
        <?php
            $koneksi = mysqli_connect("localhost", "root", "", "ekspedisi");

            $result = mysqli_query($koneksi, "SELECT * FROM produksi");
          
            

        ?>
    <br>
    <div class="container">
    <center><h3>PRODUKSI</h3></center>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Kurir</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Alamat pengiriman</th>
            <th scope="col">Lokasi saat ini</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <form action="" method="GET">
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
            <th scope="row"><?= $row ["kurir"] ; ?></th>
            <td><?= $row ["nama_barang"] ; ?></td>
            <td><?= $row ["alamat"] ; ?></td>
            <td><?= $row ["lokasi"] ; ?></td>
            <td><a href='update_produksi.php?kode_barang=<?= $row ["kode_barang"] ;?>'><button  type="button" name="konfirmasi" class="btn btn-info" value="konfirmasi">Konfirmasi</button></a></td>
            </tr>

           
            <?php endwhile; ?>
            </form>
        </tbody>
        </table>
    </div>
    











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>