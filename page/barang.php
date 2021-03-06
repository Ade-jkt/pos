
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
            <h1 class="m-0 text-dark">Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Data Barang</li>
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

    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Form Data Barang</h3>
              <a class="btn btn-primary" 
              style="margin-left: 10px;line-height: 17px;" href="?page=tambah_barang">Tambah</a>
            </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 15px; text-align: center;">No</th>
                  <th>Barcode</th>
                  <th>Nama Barang</th>
                  <th>Harga Jual</th>
                  <th>Kategori</th>
                  <th>Satuan</th>
                  <th>Stock</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php
                //query ke database SELECT tabel mahasiswa urut berdasarkan id yang paling besar
                $sql = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id ASC") or die(mysqli_error($koneksi));
                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if(mysqli_num_rows($sql) > 0){
                  //membuat variabel $no untuk menyimpan nomor urut
                  $no = 1;
                  //melakukan perulangan while dengan dari dari query $sql
                  while($data = mysqli_fetch_assoc($sql)){
                    //menampilkan data perulangan
                    echo '
                    <tr>
                      <td style="width: 15px; text-align: center;">'.$no.'</td>
                      <td>'.$data['barcode'].'</td>
                      <td>'.$data['nama_barang'].'</td>
                      <td>'.$data['harga_jual'].'</td>
                      <td>'.$data['kategori_id'].'</td>
                      <td>'.$data['satuan_id'].'</td>
                      <td>'.$data['stock'].'</td>
                      <td style="text-align: center;">
                        <a href="index.php?page=edit_barang&id='.$data['id'].'" class="btn btn-primary fa fa-edit" style="line-height: 17px;"> Edit</a>
                        <a href="index.php?page=hapus_barangr&id='.$data['id'].'" class="btn btn-danger fa fa-trash-alt" style="line-height: 17px;" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"> Hapus</a>
                      </td>
                    </tr>
                    ';
                    $no++;
                  }
                //jika query menghasilkan nilai 0
                }else{
                  echo '
                  <tr>
                    <td colspan="6">Tidak ada data.</td>
                  </tr>
                  ';
                }
                ?>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
</div><!-- /.container-fluid -->
  </section>
    </div>
 