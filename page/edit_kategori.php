
<!-- script php dibawah ini berfungsi untuk memanggil function yg ada di function.php -->
<?php
checkgudangadmin();
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Kategori</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Kategori</li>
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
                Form Edit Kategori
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
                $select = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id='$id'") or die(mysqli_error($koneksi));
                
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

            <!-- script php dibawah ini untuk menambah data pelanggan -->

            <?php
              //jika tombol simpan di tekan/klik
              if(isset($_POST['simpan'])){
                $nama_kategori     = $_POST['nama_kategori'];

                $sql = mysqli_query($koneksi, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id'") or die(mysqli_error($koneksi));
                
                if($sql){
                  echo '<script>alert("Berhasil menyimpan data."); document.location="?page=kategori";</script>';
                }else{
                  echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
                }
              }

            ?>

              <form method="post" action="">
                <div>
                  <label>Nama Kategori</label>
                  <input class="form-control" type="text" name="nama_kategori" placeholder="Nama Kategori"
                  value="<?php echo $data['nama_kategori']; ?>">
                </div>
                <br>
                <div>
                  <button type="submit" name="simpan" class="btn btn-primary" style="line-height: 17px;" value="simpan">Simpan</button>
                  <a class="btn btn-danger" style="line-height: 18px;" href="?page=kategori">Kembali</a>
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