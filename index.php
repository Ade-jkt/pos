<?php
  session_start();
  ob_start();

  include('koneksi.php');
  include('function.php');
  include('header.php');
  include('sidebar.php');

  checklogin();

  if (isset($_GET['page']) && file_exists('page/' . $_GET['page'] . '.php')) {
      include 'page/' . $_GET['page'] . '.php';
  } else {
      include 'page/home.php';
  }

?>

<?php
include('footer.php');
?>
