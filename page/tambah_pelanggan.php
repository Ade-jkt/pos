
<!-- script php dibawah ini berfungsi untuk memanggil function yg ada di function.php -->
<?php
checkkasiradmin();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Pelanggan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Pelanggan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- isi................... --> 

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">
                Form Tambah Pelanggan
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">

            <!-- script php dibawah ini untuk menambah data pelanggan -->

            <?php
              if(isset($_POST['simpan'])){
                $nama   = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $email  = $_POST['email'];
                $telp   = $_POST['telp'];
                
                $cek = mysqli_query($koneksi, "SELECT * FROM pelanggan WHERE nama_pelanggan='$nama'") or die(mysqli_error($koneksi));
                
                if(mysqli_num_rows($cek) == 0){
                  $sql = mysqli_query($koneksi, "INSERT INTO pelanggan(nama_pelanggan, alamat, email, telp) VALUES('$nama', '$alamat', '$email', '$telp')") or die(mysqli_error($koneksi));
                  
                  if($sql){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="?page=pelanggan";</script>';
                  }else{
                    echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
                  }
                }else{
                  echo '<div class="alert alert-warning">Gagal, Id Sudah digunakan.</div>';
                }
              }

            ?>

              <form method="post" action="">
                <div>
                  <label>Nama</label>
                  <input class="form-control" type="text" name="nama" placeholder="Nama" required>
                </div>
                <div>
                <div>
                  <label>Alamat</label>
                  <input class="form-control" type="text" name="alamat" placeholder="Alamat" required>
                </div>
                <div>
                  <label>Email</label>
                  <input class="form-control" type="text" name="email" placeholder="Email" required>
                </div>
                <div>
                  <label>Telp</label>
                  <input class="form-control" type="text" name="telp" placeholder="Telp" required>
                </div><br>
                <div>
                  <button type="submit" name="simpan" class="btn btn-primary" style="line-height: 17px;">Simpan</button>
                  <a class="btn btn-danger" style="line-height: 18px;" href="?page=pelanggan">Kembali</a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->