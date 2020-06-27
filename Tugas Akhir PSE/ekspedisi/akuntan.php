<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>LABA</title>
  </head>
  <body>
        <?php
            $koneksi = mysqli_connect("localhost", "root", "", "ekspedisi");

            /*$resultgaji = mysqli_query($koneksi, "SELECT gaji FROM payroll");*/
            $resultpur = mysqli_query($koneksi, "SELECT gaji, total_bayar FROM payroll, purchasing");
          
        ?>
    <br>
    <div class="container" id="demo">
    <center><h3>LABA</h3></center>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Laba Masuk</th>
            <th scope="col">Laba Keluar</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($resultpur)) : ?>
            <tr>  
            <th><?= $row ["total_bayar"] ; ?></th> 
            <td><?= $row ["gaji"] ; ?></td>
            </tr>
            <?php endwhile; ?>
            
              
        </tbody>
        </table>
        <a href="index.html" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-right"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
            
    <br>

    




















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>