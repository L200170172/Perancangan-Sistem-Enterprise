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
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tambah Pengiriman</h1>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
<form method="POST" action="" class="user">
<div class="card-body">
              <div class="table-responsive">
                <table  id="dataTable" width="100%" cellspacing="0">
                  <thead>
        <tr>
            <td>NIP<td>
            <td><div class="form-group">
                      <input type="text" name="nip" maxlenght="100"class="form-control form-control-user" >
                    </div>
                </td>
        </tr>
        <tr>
            <td>Nama Pegawai<td>
            <td><div class="form-group">
                      <input type="text" name="nama_pegawai" maxlenght="100"class="form-control form-control-user" >
                    </div>
            </td>
        </tr>
        <tr>
            <td>Telepon Pegawai<td>
            <td><div class="form-group">
                      <input type="text" name="telp_pegawai" maxlenght="100"class="form-control form-control-user" >
                    </div>
            </td>
        </tr>
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
            <td><td>
            <td><input class ='btn btn-primary btn-icon-split'type="submit" name='Simpan' value="Simpan"></td> 
        </tr>
</div>
</div>
</table>
</form>

<?php
error_reporting(0);

    if(isset($_POST['Simpan'])){
        //variabel menampung inputan
        $nip=$_POST['nip'];
        $nama=$_POST['nama_pegawai'];
        $telp=$_POST['telp_pegawai'];
        $no_barang=$_POST['no_barang'];
        $nama_barang=$_POST['nama_barang'];
        $berat_barang=$_POST['berat_barang'];
   
        //Membuat array untuk bulan
        $bulanIndo= array(
            '01' =>'Januari',
            '02' =>'Februari',
            '03' =>'Maret',
            '04' =>'April',
            '05' =>'Mei',
            '06' =>'Juni',
            '07' =>'Juli',
            '08' =>'Agustus',
            '09' =>'September',
            '10' =>'Oktober',
            '11' =>'November',
            '12' =>'Desember'
        );

        if($nip=='' || $nama=='' ||  $telp=='' || $no_barang=='' || $nama_barang==''){
            echo  "belum lengkap";
        }else{
            $simpan = mysqli_query($konek,"INSERT into sales(nip,nama_pegawai,telp_pegawai,no_barang,nama_barang,berat_barang)
                values('$nip','$nama','$telp','$no_barang','$nama_barang','$berat_barang')");
            if(!$simpan){
                echo "GAGAL SIMPAN";
            }else{
                $ds=mysqli_fetch_array(mysqli_query($konek,"SELECT nip FROM sales ORDER BY nip DESC
                    LIMIT 1"));
                $nip = $ds['nip'];
                }
            }
        }

    

?>
<a href="tampil_sales.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
            </div>
        </section>
</body>
</html>