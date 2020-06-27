<?php
//panggil file koneksi.php yang sudah anda buat
include "1.php";
error_reporting(0);

$id_no=$_GET['id'];   //ambil parameter GET id  dan buat variabel
//gunakan parameter get untuk menghapus data berdasarkan id produk
$hapus = mysqli_query($konek, "DELETE FROM riwayat where id_no='$id_no'");
if($hapus){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='riwayat.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='riwayat.php'</script>";
}
?>