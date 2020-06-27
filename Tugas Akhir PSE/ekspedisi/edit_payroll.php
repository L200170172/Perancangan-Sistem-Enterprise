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
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Ubah Data Pegawai</h1>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
 <?php 
 error_reporting(0);
    $sqlEdit=mysqli_query($konek, "SELECT * FROM payroll WHERE nip='$_GET[id]'");
    $e=mysqli_fetch_array($sqlEdit);
    ?>
    <form method="POST" action="" class="user">
            <input type="hidden" name='idsiswa' value="<?php echo $e['nip']; ?>"/>
            <div class="card-body">
                <div class="table-responsive">
                    <table  id="dataTable" width="100%" cellspacing="0">
                <thead>
            <tr>
                <td>Alamat Pegawai<td>
                <td><div class="form-group">
                        <input type="text" name="alamat_pegawai" value="<?php echo $e['alamat_pegawai'];?>" maxlenght="100"class="form-control form-control-user" >
                        </div>
                    </td>
            </tr>
            <tr>
                <td>Telepon Pegawai<td>
                <td><div class="form-group">
                        <input type="text" name="telp_pegawai"value="<?php echo $e['telp_pegawai'];?>" maxlenght="100"class="form-control form-control-user" >
                        </div>
                </td>
            </tr>
            <tr>
                <td>Jabatan<td>
                <td><div class="form-group">
                        <input type="text" name="jabatan" value="<?php echo $e['jabatan'];?>"maxlenght="100"class="form-control form-control-user" >
                        </div>
                </td>
            </tr>
            <tr>
                <td>Absensi<td>
                <td><div class="form-group">
                        <input type="text" name="absensi" value="<?php echo $e['absensi'];?>" maxlenght="100"class="form-control form-control-user" >
                        </div>
                </td>
            </tr>
            <tr>
                <td>Gaji<td>
                <td><div class="form-group">
                        <input type="text" name="gaji" value="<?php echo $e['gaji'];?>"maxlenght="100"class="form-control form-control-user" >
                        </div>
            </td>
            </tr>
            <tr>
                <td>Potongan<td>
                <td><div class="form-group">
                        <input type="text" name="potongan" value="<?php echo $e['potongan'];?>"maxlenght="100"class="form-control form-control-user" >
                        </div>
            </td>
            </tr>
            <tr>
                <td>Bonus<td>
                <td><div class="form-group">
                        <input type="text" name="bonus" value="<?php echo $e['bonus'];?>"maxlenght="100"class="form-control form-control-user" >
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
        $alamat=$_POST['alamat_pegawai'];
        $telp=$_POST['telp_pegawai'];
        $jabatan=$_POST['jabatan'];
        $absensi=$_POST['absensi'];
        $gaji=$_POST['gaji'];
        $potongan=$_POST['potongan'];
        $bonus=$_POST['bonus'];

        if($absensi=='' || $gaji==''|| $potongan=='' || $bonus==''){
            echo "FORM BELUM LENGKAP";
        }else{
            $update = mysqli_query($konek,"UPDATE payroll SET alamat_pegawai='$alamat',
                                                telp_pegawai='$telp',
                                                jabatan='$jabatan',
                                                absensi='$absensi',
                                                gaji='$gaji',
                                                potongan='$potongan',
                                                bonus='$bonus'
                                                WHERE nip='$_GET[id]'");
            if(!$update){
                echo "Data telah di UPDATE";
            }else{
                header('location:edit_payroll.php');
            }
        }
    }
    ?>
<a href="tampil_payroll.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
            </div>
        </section>
</body>
</html>