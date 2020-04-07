
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
            <h1 class="m-0 text-dark">Item Barang</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Item Barang</li>
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
              <h3 class="card-title">Form Data Item Barang</h3>
              <a class="btn btn-primary" 
              style="margin-left: 10px;line-height: 17px;" href="?page=tambah_item">Tambah</a>
            </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 15px; text-align: center;">No</th>
                  <th>Barcode</th>
                  <th>Nama</th>
                  <th>H. Beli</th>
                  <th>H. Jual</th>
                  <th>Kategori</th>
                  <th>Satuan</th>
                  <th>Diskon</th>
                  <th>Qty</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql = mysqli_query($koneksi, "SELECT item.barcode, item.nama_barang, item.harga_beli, item.harga_jual, kategori.id_kategori, satuan.nama_satuan, disc_item.diskon_item, disc_item.qty item INNER JOIN (kategori, satuan INNER JOIN disc_item ON disc_item.id_item=id_kategori.disc_item, disc_item.id_kategori=id_satuan.disc_item) ON kategori.id_kategori=satuan.id_kategori ");
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
                      <td>'.$data['harga_beli'].'</td>
                      <td>'.$data['harga_jual'].'</td>
                      <td>'.$data['nama_kategori'].'</td>
                      <td>'.$data['nama_satuan'].'</td>
                      <td>'.$data['diskon_item'].'</td>
                      <td>'.$data['qty'].'</td>
                      <td style="text-align: center;">
                        <a href="index.php?page=edit_item&id_item='.$data['id_item'].'" class="btn btn-primary fa fa-edit" style="line-height: 17px;"></a>
                        <a href="index.php?page=hapus_item&id_item='.$data['id_item'].'" class="btn btn-danger fa fa-trash-alt" style="line-height: 17px;" onclick="return confirm(\'Yakin ingin menghapus data ini?\')"></a>
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
 