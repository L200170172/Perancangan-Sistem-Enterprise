<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Produksi</title>
  </head>
  <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Riwayat Pengiriman</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.html">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </br></br>
<section class="page-section portfolio" id="portfolio">
            <div class="container">
                
        <?php
            $koneksi = mysqli_connect("localhost", "root", "", "ekspedisi");

            $result = mysqli_query($koneksi, "SELECT * FROM produksi");
          
        ?>
    <br>
    <div class="container" id="demo">
    <center><h3>PRODUKSI</h3></center>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Tanggal Dikirim</th>
            <th scope="col">Status pengiriman</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
            <th scope="row"><?= $row ["kode_barang"] ; ?></th>
            <td><?= $row ["nama_barang"] ; ?></td>
            <td><?= $row ["tanggal_kirim"] ; ?></td>
            <td><?= $row ["status_pengiriman"] ; ?></td>
            <td><a href="lihat.php"> <button type="button" class="btn btn-info">Lihat</button></a> </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
        </table>
    </div>
            
    <br>

    




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>