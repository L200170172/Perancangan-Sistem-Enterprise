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
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tambah Riwayat</h1>
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
            <td>Nomor Id<td>
            <td><div class="form-group">
                      <input type="text" name="id_no" maxlenght="100"class="form-control form-control-user" >
                    </div>
                </td>
        </tr>
        <tr>
            <td>Nama<td>
            <td><div class="form-group">
                      <input type="text" name="nama" maxlenght="100"class="form-control form-control-user" >
                    </div>
            </td>
        </tr>
        <tr>
            <td>Alamat Pengiriman<td>
            <td><div class="form-group">
                      <input type="text" name="alamat_pengiriman" maxlenght="100"class="form-control form-control-user" >
                    </div>
            </td>
        </tr>
        <tr>
            <td>Tanggal Pengiriman<td>
            <td><div class="form-group">
                      <input type="text" name="tanggal_pengiriman" maxlenght="100"class="form-control form-control-user" >
                    </div>
            </td>
        </tr>
        <tr>
            <td>Status Pengiriman<td>
            <td><div class="form-group">
                      <input type="text" name="status_pengiriman" maxlenght="100"class="form-control form-control-user" >
                    </div>
            </td>
        </tr>
        <tr>
            <td>Invoice<td>
            <td><div class="form-group">
                      <input type="text" name="invoice" maxlenght="100"class="form-control form-control-user" >
                    </div>
            </td>
        </tr>
        <tr>
            <td>No Resi<td>
            <td><div class="form-group">
                      <input type="text" name="no_resi" maxlenght="100"class="form-control form-control-user" >
                    </div>
            </td>
        </tr>
        <tr>
            <td>Total Harga<td>
            <td><div class="form-group">
                      <input type="text" name="total_harga" maxlenght="100"class="form-control form-control-user" placeholder="Rp. " >
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
        $id_no=$_POST['id_no'];
        $nama=$_POST['nama'];
        $alamat_pengiriman=$_POST['alamat_pengiriman'];
        $tanggal_pengiriman=$_POST['tanggal_pengiriman'];
        $status_pengiriman=$_POST['status_pengiriman'];
        $invoice=$_POST['invoice'];
        $no_resi=$_POST['no_resi'];
        $total_harga=$_POST['total_harga'];
   
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

        if($id_no=='' ){
            echo  "belum lengkap";
        }else{
            $simpan = mysqli_query($konek,"insert into riwayat(id_no,nama,alamat_pengiriman,tanggal_pengiriman,status_pengiriman,invoice,no_resi,total_harga)
                values('$id_no','$nama','$alamat_pengiriman','$tanggal_pengiriman','$status_pengiriman','$invoice','$no_resi','$total_harga')");
            if(!$simpan){
                echo "GAGAL SIMPAN";
            }else{
                $ds=mysqli_fetch_array(mysqli_query($konek,"SELECT riwayat FROM id_no ORDER BY id_no DESC
                    LIMIT 1"));
                $id_no = $ds['id_no'];
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