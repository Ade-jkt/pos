<?php
checkadmin();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Diskon Item</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Diskon Item</li>
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
                Form Tambah Diskon Item Barang
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">

            <!-- script php dibawah ini untuk menambah data pelanggan -->

            <?php
              if(isset($_POST['simpan'])){
                $barang_id                = $_POST['barang_id'];
                $jumlah_diskon           = $_POST['jumlah_diskon'];
                $qty                    = $_POST['qty'];
                $tanggal_mulai         = $_POST['tanggal_mulai'];
                $tanggal_selesai      = $_POST['tanggal_selesai'];
                
                $cek = mysqli_query($koneksi, "SELECT * FROM diskon WHERE barang_id='$barang_id'") or die(mysqli_error($koneksi));
                
                if(mysqli_num_rows($cek) == 0){
                  $sql = mysqli_query($koneksi, "INSERT INTO diskon(barang_id, jumlah_diskon, qty, tanggal_mulai, tanggal_selesai) VALUES('$barang_id', '$jumlah_diskon', '$qty', '$tanggal_mulai', '$tanggal_selesai')") or die(mysqli_error($koneksi));
                  
                  if($sql){
                    echo '<script>alert("Berhasil menambahkan data."); document.location="?page=diskon";</script>';
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
                  <label>Nama Barang</label>
                  <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" required>
                </div>
                <div>
                  <label>Jumlah Diskon</label>
                  <input class="form-control" type="text" name="jumlah_diskon" placeholder="Jumlah Diskon" required>
                </div>
                <div>
                  <label>Qty</label>
                  <input class="form-control" type="text" name="qty" placeholder="Qty" required>
                </div>
                <div>
                  <label>Tanggal Mulai</label>
                  <input class="form-control" type="text" name="tanggal_mulai" placeholder="Tanggal Mulai" required>
                </div>
                <div>
                  <label>Tanggal Selesai</label>
                  <input class="form-control" type="text" name="tanggal_selesai" placeholder="Tanggal Selesai" required>
                </div>
                <br>
                <div>
                  <button type="submit" name="simpan" class="btn btn-primary" style="line-height: 17px;">Simpan</button>
                  <a class="btn btn-danger" style="line-height: 18px;" href="?page=diskon">Kembali</a>
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