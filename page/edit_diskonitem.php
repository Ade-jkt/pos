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
            <h1 class="m-0 text-dark">Edit Diskon Item</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Dsikon Item</li>
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
                Edit Diskon Barang Item
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">

            <!-- script dibawah ini untuk mengedit data pelanggan -->

            <?php
              //jika sudah mendapatkan parameter GET id dari URL
              if(isset($_GET['id'])){
                //membuat variabel $id untuk menyimpan id dari GET id di URL
                $id = $_GET['id'];
                
                //query ke database SELECT tabel mahasiswa berdasarkan id = $id
                $select = mysqli_query($koneksi, "SELECT * FROM diskon WHERE id='$id'") or die(mysqli_error($koneksi));
                
                //jika hasil query = 0 maka muncul pesan error
                if(mysqli_num_rows($select) == 0){
                  echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
                  exit();
                //jika hasil query > 0
                }else{
                  //membuat variabel $data dan menyimpan data row dari query
                  $data = mysqli_fetch_assoc($select);
                }
              }
            ?>

            <!-- script php dibawah ini untuk menambah data diskon -->

            <?php
              //jika tombol simpan di tekan/klik
              if(isset($_POST['simpan'])){
                $barang_id                = $_POST['barang_id'];
                $jumlah_diskon           = $_POST['jumlah_diskon'];
                $qty                    = $_POST['qty'];
                $tanggal_mulai         = $_POST['tanggal_mulai'];
                $tanggal_selesai      = $_POST['tanggal_selesai'];
            
                
                $sql = mysqli_query($koneksi, "UPDATE diskon SET barang_id='$barang_id', jumlah_diskon=$jumlah_diskon, qty='$qty', tanggal_mulai=$tanggal_mulai, tanggal_selesai=$tanggal_selesai WHERE id='$id'") or die(mysqli_error($koneksi));
                
                if($sql){
                  echo '<script>alert("Berhasil menyimpan data."); document.location="?page=diskon";</script>';
                }else{
                  echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
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