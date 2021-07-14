<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand " href="#">Data Mahasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto"> <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Tambah Mahasiswa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            </li>            
          </ul>        
        </div>
    </div>
    </nav>
    <div class="container data-buku mt-5">
        <!---Button trigger modal-->
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#tambahData">
            Tambah Data
        </button>
        <!-- Modal -->
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
            <div class="modal-dialog">
            <!-- konten modal-->
            <div class="modal-content">
            <!--Kita membuat form dengan method post untuk memanggil file store.php-->
                <form method="post" action="create.php" name="form">
                    <!-- heading modal -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahDataLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- body modal -->
                    <div class="modal-body">

                         <!--Input id-->
                         <div class="mb-3">
                            <label for="id" class="form-label">Id</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Id Buku" name="id" required>
                        </div>
                        <!--Input nama-->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama_buku</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Buku" name="nama" required>
                        </div>
                        <!--Input kategori-->
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori_Buku</label>
                            <input type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" required>
                        </div>
                        <!--Input penerbit-->
                        <div class="mb-3">
                            <label for="Penerbit" class="form-label">Penerbit</label>
                            <textarea type="text" class="form-control" id="Penerbit" placeholder="Masukkan Nama Penerbit" name="penerbit" required></textarea>
                        </div>
                         <!--Input harga-->
                         <div class="mb-3">
                            <label for="Harga" class="form-label">Harga</label>
                            <textarea type="text" class="form-control" id="Harga" placeholder="Masukkan Harga" name="harga" required></textarea>
                        </div>
                         <!--Input diskon-->
                         <div class="mb-3">
                            <label for="Diskon" class="form-label">Diskon</label>
                            <textarea type="text" class="form-control" id="Diskon" placeholder="Masukkan Diskon" name="diskon" required></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!---Akhir Modal-->
    <table class="table table-striped" id="tabelBuku">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama_buku</th>
            <th scope="col">Kategori_buku</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Harga</th>
            <th scope="col">Diskon</th>

            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';
            $no = 1;
            $mahasiswa = mysqli_query($koneksi, "select * from buku");

            while ($data = mysqli_fetch_array($buku)){

            
        ?>

        <tr>
            <th scope="row"><?php echo $no++; ?></th>
            <td><?php echo $data['id']; ?></td>           
            <td><?php echo $data['nama_buku']; ?></td>
            <td><?php echo $data['kategori_buku']; ?></td>
            <td><?php echo $data['penerbit']; ?></td>
            <td><?php echo $data['harga']; ?></td>
            <td><?php echo $data['diskon']; ?></td>
            <td>
                <a href="detail.php?id=<?php echo $data['id']; ?>" class="btn btn-success btn-sm text-white">DETAIL</a>
                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm text-white">EDIT</a>
                <a href="delete.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm ('Anda Yakin Akan Menghapus Data Buku Ini ?')">HAPUS</a>
            </td>
        </tr>
        <?php
         }
        ?>
        
        </div>
       
        
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>=
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tabelBuku').DataTable();
        } );
    </script>
</body>
</html>