
<!-- script php dibawah ini berfungsi untuk memanggil function yg ada di function.php -->
<?php
checkkasiradmin();
?>

<?php
$sql = mysqli_query($koneksi,"SELECT * FROM pelanggan");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-lg-6">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h2 class="card-title m-0"><strong>TRANSAKSI</strong></h2>
                <h2 style="padding-left: 100px;" class="card-title m-0"><strong>Tanggal : </strong>
                <small><i> Ahad : 03/29/2020 : 13:00 wib</i></small></h2>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <div class="form-group">
                        <label>Pelanggan</label>
                        <select class="form-control">
                          <option>Pilih Pelanggan</option>
                          <?php while($data = mysqli_fetch_assoc($sql)): ?>
                            <option value="<?=$data['id']?>"><?=$data['nama']?></option>
                          <?php endwhile; ?>
                        </select>
                    </div>
                  </div>
                  <div class="col-5">
                    <label>Barcode</label>
                    <input type="text" class="form-control" placeholder="Barcode" autofocus>
                  </div>
                  <div class="col-4">
                    <label>Proses</label>
                    <a class="btn btn-primary" href="">Proses Transaksi</a>
                  </div>
                  <!-- <div class="col-2">
                    <label>Proses</label>
                    <a class="btn btn-primary" style="line-height: 23px;" href="">Proses</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
          <!-- /////////////////////////////// -->

          <div class="col-lg-4">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"><strong>TOTAL BAYAR = Rp. </strong></h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                        <label>Bayar Rp</label>
                        <input type="number" class="form-control" name="bayar" placeholder="Bayar">
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="form-group">
                        <label>Diskon %</label>
                        <input type="number" class="form-control" name="bayar" placeholder="Diskon">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- //////////////////////////// -->

          <div class="col-lg-2">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title"><strong>Kembalian</strong></h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                        <label>Kembali</label>
                        <input type="text" class="form-control" name="tanggal" placeholder="Tanggal">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- //////////////////////////// -->

          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0"><strong>Keranjang Belanja</strong></h5>
            </div>
        <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 15px; text-align: center;">No</th>
                  <th>Barcode</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Qty</th>
                  <th>Diskon</th>
                  <th>Sub Total</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                 <tr>
                   <td>1</td>
                   <td>1234</td>
                   <td>Sabun</td>
                   <td>Rp. 5.000</td>
                   <td>10</td>
                   <td>Rp. 0</td>
                   <td>Rp. 50.000</td>
                   <td style="text-align: center;"><a style="line-height: 15px;" class="btn btn-danger fa fa-trash-alt" href=""> Hapus</a></td>
                 </tr>

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
          </div>
          <!-- /////////////////////////////// -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- isi................... -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->