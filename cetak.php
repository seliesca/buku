<?php
include 'config.php';
$id=$_GET['id'];
$mahasiswa=mysqli_query($koneksi,"select * from buku where id='$id'");
while($data=mysqli_fetch_assoc($buku)){
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title><?php  echo $data['id'] ?></title>
    </head>
    
    
    <body 
            <center>
        
        <h2>BUKU</h2>

        </center>

            <?php 
            include 'koneksi.php';
?>
        <table cellspacing = "0">
            <tr>
                <th>No</th>
                <th>Nama Buku</th>
                <th>Kategori_buku</th>
                <th>Penerbit</th>
                <th>Harga</th>
                <th>Harga Diskon</th>
            </tr>
            <?php
                $sql = mysqli_query($connect,"SELECT * FROM buku ORDER BY id DESC");
                if(mysqli_num_rows($sql) != 0){
                    while($row = mysqli_fetch_assoc($sql)){
                      $total = $row["harga"] * ($row["diskon"]/100);
                        echo '
                        <tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["nama_buku"].'</td>
                            <td>'.$row["kategori_buku"].'</td>
                            <td>'.$row["penerbit"].'</td>
                            <td>'.$row["harga"].'</td>
                            <td>'.$total.'</td>
                        </tr>';
                    }
                }
            ?>
        </table>
	<script>
		window.print();
	</script>
        </div>
    <?php
}
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
    </html>