<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php?page=home" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .5">
    <span class="brand-text font-weight-light">Halaman <strong><i><?php echo $_SESSION['user_level']; ?></i></strong></span>
    </a>
    <div class="sidebar" style="width: 250px;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-2 pb-2 mb-2 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="index.php?page=home" class="d-block">Selamat Datang <?php echo $_SESSION['user_level']; ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <?php
        if(isset($_SESSION['user_level'])):
            if($_SESSION['user_level']=='Admin'):
                include('menu/admin.php');
            endif;
            if($_SESSION['user_level']=='Kasir'):
              include('menu/kasir.php');
            endif;
            if($_SESSION['user_level']=='Gudang'):
              include('menu/gudang.php');
            endif;
        endif;
        ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
  </div>
    <!-- /.sidebar -->
  </aside>