<!DOCTYPE html>

<?php
include '1.php';
?>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Daftar Pegawai</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Daftar penjualan</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
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
                <!-- Icon Divider-->
                
            <a href="marketing.php" class="btn btn-primary btn-icon-split">
                              <span class="icon text-white-50">
                                <i class="fas fa-plus"></i>
                                </span>
                                <span class="text">Tambah</span>
                                </a>
                                <br>
                                <br>
                                <br>
          <div class="container">
                        <div class="table-responsive">
                          <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                <tr>
                    <th>No Barang</th>
                    <th>Nama  Barang</th>
                    <th>Berat Barang(Kg)</th>
                    <th>Harga Pengiriman</th>
                    <th>Distribusi</th> 
                </tr>
                <?php
                error_reporting(0);
                $sql = mysqli_query($konek, "SELECT * FROM marketing order by no_barang");
                $no=1;
                while($d=mysqli_fetch_array($sql)){
                    echo "<tr>
                        <td>$d[no_barang]</td>
                        <td>$d[nama_barang]</td>
                        <td>$d[berat_barang]</td>
                        <td>$d[harga]</td>
                        <td>$d[distribusi]</td>
                            <td> 
                                <a href='edit_marketing.php?id=$d[no_barang]' class='btn btn-primary btn-circle'>
                                <i class='fas fa-check'>EDIT</i></a> 
                                <a href='hapus_marketing.php?id=$d[no_barang]' class='btn btn-danger btn-circle'>
                                <i class='fas fa-trash'>HAPUS</i></a>
                            </td>
                        </tr>";
                        $no++;
                }
                ?>
            </table><br><br><br>
            <a href="tampil_sales.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
            </span>
            <span class="text">Sales</span>
        </a>
        </div></div></div>
            </section>
</body>
</html>