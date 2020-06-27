<?php include "1.php";?>

<html>
    <head>
        <title></title>
        <style type="text/css">
            body{
                font-family:Arial;
            }
            @media print{
                .no-print{
                    display:none;
                }
            }
            table{
                border-collapse:collapse;
            }
        </style>
    </head>
    <body>
    <h3>CETAK LAPORAN</h3>
    <hr/>
    <table width="100%" border="1" cellspacing="0" cellpadding="4">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Alamat Pengiriman</td>
            <td>Tanggal Pengiriman</td>
            <td>Status</td>
            <td>Invoice</td>
            <td>No Resi</td>
            <td>Total Harga</td>
        </tr>
        <?php 
        $sql = mysqli_query($konek, "SELECT * FROM riwayat order by id_no");
        $no=1;
        while($d=mysqli_fetch_array($sql)){
            ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['alamat_pengiriman']; ?></td>
            <td><?php echo $d['tanggal_pengiriman']; ?></td>
            <td><?php echo $d['status_pengiriman']; ?></td>
            <td><?php echo $d['invoice']; ?></td>
            <td><?php echo $d['no_resi']; ?></td>
            <td><?php echo $d['total_harga']; ?></td>
        </tr>;
        <?php 
        $no++;
        }
        ?>
    </table>

    <script>
        window.print();
    </script>
    </body>
    </html>