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
            <h1 class="m-0 text-dark">Laporan Pembelian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Laporan Pembelian</li>
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
              <h3 class="card-title">Form Laporan Pembelian</h3>
            </div>
        
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 15px;">No</th>
                  <th>Invoice</th>
                  <th>Supplier</th>
                  <th>Kategori</th>
                  <th>Satuan</th>
                  <th>Qty</th>
                  <th>Total</th>
                  <th style="text-align: center;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="text-align: center;">1</td>
                    <td>Invoice <span style="margin-left: 20px;" class="right badge badge-danger">12345</span></td>
                    <td>PT. Bangun Bersama <span style="margin-left: 20px;" class="right badge badge-primary">Member</span></td>
                    <td>Makanan</td>
                    <td>Pcs</td>
                    <td>100</td>
                    <td>Rp. 1.000.000</td>
                    <td style="text-align: center; width: 200px;"><a class="btn btn-success fa fa-edit" style="line-height: 15px; width: 150px;" href="">Cetak</a></td>
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
</div><!-- /.container-fluid -->
  </section>
    </div>
 