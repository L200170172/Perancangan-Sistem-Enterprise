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
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ubah Data Penjualan</h1>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
 <?php 
 error_reporting(0);
    $sqlEdit=mysqli_query($konek, "SELECT * FROM marketing WHERE no_barang='$no_barang'");
    $e=mysqli_fetch_array($sqlEdit);
    ?>
    <form method="POST" action="" class="user">
            <input type="hidden" name='idsiswa' value="<?php echo $e['no_barang']; ?>"/>
            <div class="card-body">
                <div class="table-responsive">
                    <table  id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <td>Nomer Barang<td>
                    <td><div class="form-group">
                    <input type="text" name="no_barang" maxlenght="100"class="form-control form-control-user" >
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>Nama Barang<td>
                    <td><div class="form-group">
                    <input type="text" name="nama_barang" maxlenght="100"class="form-control form-control-user" >
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>Berat Barang(Kg)<td>
                    <td><div class="form-group">
                    <input type="text" name="berat_barang" maxlenght="100"class="form-control form-control-user" >
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>Harga Pengiriman<td>
                    <td><div class="form-group">
                            <input type="text" name="harga" maxlenght="100"class="form-control form-control-user" >
                            </div>
                    </td>
                </tr>
                <tr>
                    <td>Distribusi<td>
                    <td><div class="form-group">
                            <input type="text" name="distribusi" maxlenght="100"class="form-control form-control-user" >
                            </div>
                    </td>
                </tr>
                </tr>
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
        $no_barang=$_POST['no_barang'];
        $nama_barang=$_POST['nama_barang'];
        $berat_barang=$_POST['berat_barang'];
        $harga=$_POST['harga'];
        $distribusi=$_POST['distribusi'];

        if($no_barang=='' || $nama_barang==''|| $harga=='' || $distribusi==''){
            echo "FORM BELUM LENGKAP";
        }else{
            $update = mysqli_query($konek,"UPDATE marketing SET 
                                                no_barang='$no_barang',
                                                nama_barang='$nama_barang',
                                                berat_barang='$berat_barang',
                                                harga='$harga',
                                                distribusi='$distribusi'
                                                WHERE no_barang='$no_barang'");
            if(!$update){
                echo "Data telah di UPDATE";
            }else{
                header('location:edit_marketing.php');
            }
        }
    }
    ?>
<a href="tampil_marketing.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
            </div>
        </section>
</body>
</html>