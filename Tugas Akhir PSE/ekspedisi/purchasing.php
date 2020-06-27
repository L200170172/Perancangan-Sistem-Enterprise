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
                <h1 class="page-section-heading text-center text-uppercase text-secondary mb-0">Tambah Barang</h1>
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
            <td>Nama Barang<td>
            <td><div class="form-group">
                    <label for='nama_barang'></label>
                    <select name='nama_barang' class="form-control form-control-user">
                        <option>MILO</option>
                        <option>LUX</option>
                        <option>CLEAR</option>
                        <option>SUNLIGHT</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td>Jenis Barang<td>
            <td><div class="form-group">
                      <input type="text" name="jenis_barang" maxlenght="100"
                      class="form-control form-control-user" id='jenis_barang' placeholder='Masukkan Jenis Barang' required>
                    </div>
            </td>
        </tr>
        <tr>
            <td>Harga Satuan<td>
            <td><div class="form-group">
                      <input type="text" name="harga_satuan" maxlenght="100"
                      class="form-control form-control-user" id='harga_satuan' onfocus='mulaiHitung()' 
                      onblur='berhentiHitung'  readonly value='2000' required>
                    </div>
            </td>
        </tr>
        <tr>
            <td>Jumlah Beli<td>
            <td><div class="form-group">
                      <input type="text" name="jumlah_beli" maxlenght="100" 
                      class="form-control form-control-user" id='jumlah_beli' onfocus='mulaiHitung()' 
                      onblur='berhentiHitung' placeholder='Masukkan Jumlah Beli Barang' required>
                    </div>
            </td>
        </tr>
        <tr>
            <td>Total<td>
            <td><div class="form-group">
                      <input type="text" name="total" maxlenght="100"
                      class="form-control form-control-user" id='total' onfocus='mulaiHitung()' 
                      onblur='berhentiHitung' readonly required>
                    </div>
            </td>
        </tr>
        <tr>
            <td>Diskon<td>
            <td><div class="form-group">
                      <input type="text" name="diskon" maxlenght="100"
                      class="form-control form-control-user" id='diskon' readonly required>
                    </div>
            </td>
        </tr>
        <tr>
            <td>Total Setelah Diskon<td>
            <td><div class="form-group">
                      <input type="text" name="total_bayar" maxlenght="100"
                      class="form-control form-control-user" id='total_setelah_diskon' required>
                    </div>
            </td>
        </tr>
        <tr>
            <td>Bayar<td>
            <td><div class="form-group">
                      <input type="text" name="bayar" maxlenght="100"
                      class="form-control form-control-user" id='bayar' required>
                    </div>
            </td>
        </tr>
        <tr>
            <td>Kembalian<td>
            <td><div class="form-group">
                      <input type="text" name="kembalian" maxlenght="100"
                      class="form-control form-control-user" id='kembalian' onfocus='mulaiHitung()' 
                      onblur='berhentiHitung' required>
                    </div>
            </td>
        </tr>
        <br><br>
        <tr>
            <td><td>
            <td><input class ='btn btn-primary btn-icon-split'type="submit" name='Simpan' value="Simpan"></td>
        </tr>
</div>
</div><script type='text/javascript'>
    function mulaiHitung(){
        Interval = setInterval("hitung()",1);
    }
    function hitung(){
        harga_satuan = parseInt(document.getElementById('harga_satuan').value);
        jumlah_beli = parseInt(document.getElementById('jumlah_beli').value);
        total = harga_satuan * jumlah_beli ;
        document.getElementById('total').value = total;

        if(total > 10000 && total >= 20000){
            diskon = (10/100)* total;
        }if(total < 10000){
            diskon = 0 * total;
        }
        
        document.getElementById('diskon').value = diskon;
        total_setelah_diskon = total - diskon;
        document.getElementById('total_setelah_diskon').value = total_setelah_diskon;
        bayar = parseInt (document.getElementById('bayar').value);
        kembalian = bayar - total_setelah_diskon;
        document.getElementById('kembalian').value = kembalian;
    }
    function berhenti(){
        clearInterval(Interval);
    }
</script>
</table>
</form>

<?php
error_reporting(0);

    if(isset($_POST['Simpan'])){
        //variabel menampung inputan
        $kode=$_POST['kode_barang'];
        $nama=$_POST['nama_barang'];
        $jenis=$_POST['jenis_barang'];
        $harga=$_POST['harga_satuan'];
        $jumlah=$_POST['jumlah_beli'];
        $total=$_POST['total'];
        $diskon=$_POST['diskon'];
        $total_bayar=$_POST['total_bayar'];
        $bayar=$_POST['bayar'];
        $kembalian=$_POST['kembalian'];
    
    if($nama=='' || $jenis=='' || $harga=='' || $jumlah=='' || $total=='' || $diskon=='' || $total_bayar=='' || $bayar=='' || $kembalian==''){
        echo  "belum lengkap";
        }else{
            $simpan = mysqli_query($konek,"insert into purchasing (nama_barang,jenis_barang,harga_satuan,jumlah_beli,total,diskon,total_bayar,bayar,kembalian)
                values('$nama','$jenis','$harga','$jumlah','$total','$diskon','$total_bayar','$bayar','$kembalian')");
            if(!$simpan){
                echo "GAGAL SIMPAN";
            }else{
                $ds=mysqli_fetch_array(mysqli_query($konek,"SELECT kode_barang FROM purchasing ORDER BY kode_barang DESC LIMIT 1"));
                $nip = $ds['kode_barang'];
                }
            }
        }

    

?><a href="tampil_purchasing.php" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
            </div>
        </section>
</body>
</html>