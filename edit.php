<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Data Buku</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Data Buku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
      </div>
    </div>
  </div>
  </nav>

  <?php
  include 'config.php';
  $id = $_GET['id'];
  $mahasiswa = mysqli_query($koneksi, "select * from buku where id='$id'");

  while($data = mysqli_fetch_assoc($buku)){
  ?>
    <div class="container mt-5">
        <p><a href="index.php">Home</a> / Edit Buku / <?php echo $data['nama'] ?></p>
        <div class="card">
            <div class="card-header">
                <p class="fw-bold">Data Buku</p>
            </div>
            <div class="card-body fw-bold">
                <form  method="post" action="update.php">
                    
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahDataLabel">Tambah Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                
                    <div class="modal-body">

                         
                         <div class="mb-3">
                            <label for="id" class="form-label">Id</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Id Buku" name="id" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama_buku</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama Buku" name="nama" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Kategori_Buku</label>
                            <input type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori" required>
                        </div>
                       
                        <div class="mb-3">
                            <label for="Penerbit" class="form-label">Penerbit</label>
                            <textarea type="text" class="form-control" id="Penerbit" placeholder="Masukkan Nama Penerbit" name="penerbit" required></textarea>
                        </div>
                         
                         <div class="mb-3">
                            <label for="Harga" class="form-label">Harga</label>
                            <textarea type="text" class="form-control" id="Harga" placeholder="Masukkan Harga" name="harga" required></textarea>
                        </div>
                         
                         <div class="mb-3">
                            <label for="Diskon" class="form-label">Diskon</label>
                            <textarea type="text" class="form-control" id="Diskon" placeholder="Masukkan Diskon" name="diskon" required></textarea>
                        </div>
                    <button type="submit" class="btn btn-primary" values="SIMPAN">Update</button>
                </form>
            </div>
        </div>
    </div>
  <?php
  }
  ?>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>