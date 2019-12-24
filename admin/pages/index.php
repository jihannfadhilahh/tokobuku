<?php
session_start();

if(empty($_SESSION['admin_id'])){
  header('location:../404.html');
}
include '../../model/M_Library.php';
$db = new M_Library();

?>

<!DOCTYPE html>
<html lang="en">

  <?php include 'asset/head.php'; ?>

<body id="page-top">
  <div id="wrapper">

  <?php include'asset/slidebar.php';?>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

  <?php include 'asset/navbar.php'; ?>
      
      <div class="container-fluid">
        <!-- <h6 class=" mb-2 text-gray-800">Welcome: <?= $_SESSION['username']; ?></h6> -->

  <?php include 'content.php'; ?>

      </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Gramedia 2019</span>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <?php
  include 'asset/modal.php';
  include 'asset/script.php';
  ?>
  <script>
  /*
    Tujuan:
    Untuk mengatur status centang pada checkbox sekaligus
    contoh pemakaian 1:
    centangSemua(document.getElementsByName("deleteAll[]"), true);
    artinya, semua checkbox dengan nama deleteAll akan berstatus true atau dicentang

    contoh pemakaian 2:
    centangSemua(document.getElementsByName("madam[]"), false);
    artinya, semua checkbox dengan nama "madam[]" akan berstatus false atau tidak dicentang dicentang
  */
  function centangSemua(yang_dicentang, nilai_dicentang)
  {
      for(var x = 0; x < yang_dicentang.length; x++){
          yang_dicentang[x].checked = nilai_dicentang;
      }
  }

  // skrip untuk menerapkan fungsi centangSemua diatas ke seluruh halaman
  // dengan asumsi, semua name dari checkbox dari setiap halaman adalah sama

  document.getElementById("centangAll").addEventListener("click", function(){
    // variabel "this" disini merujuk ke document.getElementById("centangAll")

    // jika centangAll tercentang atau bernilai true, maka centang checkbox yang lain
    if(this.checked == true)
    {
      centangSemua(document.getElementsByName("deleteAll[]"), true);
    }
    else
    {
      centangSemua(document.getElementsByName("deleteAll[]"), false);
    }
  })
  </script>
</body>

</html>
