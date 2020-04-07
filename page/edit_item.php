
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
            <h1 class="m-0 text-dark">Edit Item</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Item</li>
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
                Form Edit Item
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">

            <!-- script dibawah ini untuk mengedit data pelanggan -->

            <?php
              //jika sudah mendapatkan parameter GET id dari URL
              if(isset($_GET['id_item'])){
                //membuat variabel $id untuk menyimpan id dari GET id di URL
                $id = $_GET['id_item'];
                
                //query ke database SELECT tabel mahasiswa berdasarkan id = $id
                $select = mysqli_query($koneksi, "SELECT * FROM item WHERE id_item='$id'") or die(mysqli_error($koneksi));
                
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
                $barcode     = $_POST['barcode'];
                $nama_barang = $_POST['nama_barang'];
                $harga_beli  = $_POST['harga_beli'];
                $harga_jual  = $_POST['harga_jual'];
                $stock       = $_POST['stock'];
                
                $sql = mysqli_query($koneksi, "UPDATE item SET barcode='$barcode', nama_barang='$nama_barang', harga_beli='$harga_beli', harga_jual='$harga_jual', stock='$stock' WHERE id_item='$id'") or die(mysqli_error($koneksi));
                
                if($sql){
                  echo '<script>alert("Berhasil menyimpan data."); document.location="?page=item";</script>';
                }else{
                  echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
                }
              }

            ?>

              <form method="post" action="">
                <div>
                  <label>Barcode</label>
                  <input class="form-control" type="text" name="barcode" placeholder="Barcode"
                  value="<?php echo $data['barcode']; ?>">
                </div>
                <div>
                <div>
                  <label>Nama Barang</label>
                  <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang"
                  value="<?php echo $data['nama_barang']; ?>">
                </div>
                <div>
                  <label>Harga Beli</label>
                  <input class="form-control" type="text" name="harga_beli" placeholder="Harga Beli"
                  value="<?php echo $data['harga_beli']; ?>">
                </div>
                <div>
                  <label>Harga Jual</label>
                  <input class="form-control" type="text" name="harga_jual" placeholder="Harga Jual"
                  value="<?php echo $data['harga_jual']; ?>">
                </div>
                <div>
                  <label>Stock</label>
                  <input class="form-control" type="text" name="stock" placeholder="Stock"
                  value="<?php echo $data['stock']; ?>">
                </div><br>
                <div>
                  <button type="submit" name="simpan" class="btn btn-primary" style="line-height: 17px;" value="simpan">Simpan</button>
                  <a class="btn btn-danger" style="line-height: 18px;" href="?page=item">Kembali</a>
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