<?php
// funntion dibawah ini berfungsi untuk hak akses menu sidebar khusus admin yg nnti page yg akan dipanggil
function checkadmin(){
    if($_SESSION['user_level']!='Admin'){
        // phpAlert("tidak bisa akses!");
        header("Location: index.php");
      }
}
// funntion dibawah ini berfungsi untuk hak akses menu sidebar khusus kasir yg nnti page yg akan dipanggil
function checkkasir(){
    if($_SESSION['user_level']!='Kasir'){
        // phpAlert("tidak bisa akses!");
        header("Location: index.php");
      }
}
// funntion dibawah ini berfungsi untuk hak akses menu sidebar khusus gudang yg nnti page yg akan dipanggil
function checkgudang(){
    if($_SESSION['user_level']!='Gudang'){
        // phpAlert("tidak bisa akses!");
        header("Location: index.php");
      }
}

function checklogin(){
    if(!isset($_SESSION['user_id'])){
        header("Location: login.php");
    }
}

// funntion dibawah ini berfungsi untuk hak akses menu sidebar yg ada di admin dan kasir bisa berjalan
function checkkasiradmin(){
    if($_SESSION['user_level'] =='Gudang'){
        // phpAlert("tidak bisa akses!");
        header("Location: index.php");
    }
}

// funntion dibawah ini berfungsi untuk hak akses menu sidebar yg ada di admin dan gudang bisa berjalan
function checkgudangadmin(){
    if($_SESSION['user_level'] =='Kasir'){
        // phpAlert("tidak bisa akses!");
        header("Location: index.php");
    }
}

?>