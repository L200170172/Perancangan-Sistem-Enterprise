<?php
//panggil file koneksi.php yang sudah anda buat
include "1.php";
error_reporting(0);

$nip=$_GET['id'];   //ambil parameter GET id  dan buat variabel
//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($konek, "DELETE FROM sales where nip='$nip'");
if($hapus){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='tampil_sales.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='tampil_sales.php'</script>";
}
?>