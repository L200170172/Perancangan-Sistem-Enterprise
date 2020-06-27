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
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ubah Riwayat</h1>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
 <?php 
 error_reporting(0);
    $sqlEdit=mysqli_query($konek, "SELECT * FROM riwayat WHERE id_no='$_GET[id]'");
    $e=mysqli_fetch_array($sqlEdit);
    ?>
    <form method="POST" action="" class="user">
            <input type="hidden" name='idsiswa' value="<?php echo $e['id_no']; ?>"/>
            <div class="card-body">
                <div class="table-responsive">
                    <table  id="dataTable" width="100%" cellspacing="0">
                <thead>
            <tr>
                <td>Nama<td>
                <td><div class="form-group">
                        <input type="text" name="nama" value="<?php echo $e['nama'];?>" maxlenght="100"class="form-control form-control-user" >
                        </div>
                    </td>
            </tr>
            <tr>
                <td>Alamat Pengiriman<td>
                <td><div class="form-group">
                        <input type="text" name="alamat_pengiriman"value="<?php echo $e['alamat_pengiriman'];?>" maxlenght="100"class="form-control form-control-user" >
                        </div>
                </td>
            </tr>
            <tr>
                <td>Tanggal Pengiriman<td>
                <td><div class="form-group">
                        <input type="text" name="tanggal_pengiriman" value="<?php echo $e['tanggal_pengiriman'];?>"maxlenght="100"class="form-control form-control-user" >
                        </div>
                </td>
            </tr>
            <tr>
                <td>Status Pengiriman<td>
                <td><div class="form-group">
                        <input type="text" name="status_pengiriman" value="<?php echo $e['status_pengiriman'];?>" maxlenght="100"class="form-control form-control-user" >
                        </div>
                </td>
            </tr>
            <tr>
                <td>Invoice<td>
                <td><div class="form-group">
                        <input type="text" name="invoice" value="<?php echo $e['invoice'];?>"maxlenght="100"class="form-control form-control-user" >
                        </div>
            </td>
            </tr>
            <tr>
                <td>No Resi<td>
                <td><div class="form-group">
                        <input type="no_resi" name="potongan" value="<?php echo $e['no_resi'];?>"maxlenght="100"class="form-control form-control-user" >
                        </div>
            </td>
            </tr>
            <tr>
                <td>Total Harga<td>
                <td><div class="form-group">
                        <input type="total_harga" name="bonus" value="<?php echo $e['total_harga'];?>"maxlenght="100"class="form-control form-control-user" >
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
        $nama=$_POST['nama'];
        $alamat_pengiriman=$_POST['alamat_pengiriman'];
        $tanggal_pengiriman=$_POST['tanggal_pengiriman'];
        $status_pengiriman=$_POST['status_pengiriman'];
        $invoice=$_POST['invoice'];
        $no_resi=$_POST['no_resi'];
        $total_harga=$_POST['total_harga'];

        if($status_pengiriman==''){
            echo "FORM BELUM LENGKAP";
        }else{
            $update = mysqli_query($konek,"UPDATE riwayat SET nama='$nama',
                                                alamat_pengiriman='$alamat_pengiriman',
                                                tanggal_pengiriman='$tanggal_pengiriman',
                                                status_pengiriman='$status_pengiriman',
                                                invoice='$invoice',
                                                no_resi='$no_resi',
                                                total_harga='$total_harga'
                                                WHERE id_no='$_GET[id]'");
            if(!$update){
                echo "Data telah di UPDATE";
            }else{
                header('location:edit_riwayat.php');
            }
        }
    }
    ?>
<a href="riwayat.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
            </div>
        </section>
</body>
</html>