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
        <title>Pandemic Expedition</title>
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
<section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Konfirmasi</h1>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
 <?php 
 error_reporting(0);
    $sqlEdit=mysqli_query($konek, "SELECT * FROM produksi WHERE kode_barang='$_GET[kode_barang]'");
    $e=mysqli_fetch_array($sqlEdit);
    ?>
    <form method="POST" action="" class="user">
    <input type="hidden" name='kode_barang' value="<?php echo $e['kode_barang']; ?>"/>
            <div class="card-body">
                <div class="table-responsive">
                    <table  id="dataTable" width="100%" cellspacing="0">
                <thead>
            <tr>
                <td>Lokasi Saat Ini<td>
                <td><div class="form-group">
                        <input type="text" name="lokasi" value="<?php echo $e['lokasi'];?>" maxlenght="100"class="form-control form-control-user" >
                        </div>
                    </td>
            </tr>
            <tr>
                <td>Status Pengiriman<td>
                <td><div class="form-group">
                        <input type="text" name="status_pengiriman"value="<?php echo $e['status_pengiriman'];?>" maxlenght="100"class="form-control form-control-user" >
                        </div>
                </td>
            </tr>
            
            <tr>
                <td><td>
                <td><input class ='btn btn-primary btn-icon-split'type="submit"value="    Update   "></td>
            </tr>
        </div>
        </div>
        </table>
        </form>

    <!--proses edit data-->
    <?php
    if($_SERVER['REQUEST_METHOD']=='POST'){
        //variabel yg mnampung inputan dr form
        $lokasi=$_POST['lokasi'];
        $status_pengiriman=$_POST['status_pengiriman'];
        $kode_barang = $_GET['kode_barang'];

        if($lokasi =='' || $status_pengiriman==''){
            echo "FORM BELUM LENGKAP";
        }else{
            $update = mysqli_query($konek,"UPDATE produksi SET lokasi='$lokasi',
                                                status_pengiriman='$status_pengiriman'
                                                WHERE kode_barang='$kode_barang'");
            if(!$update){
                echo "Data telah di UPDATE";
            }else{
               header('location:produksi.php');
            }
        }
    }
    ?>
<a href="lihat.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
            </div>
        </section>
</body>
</html>