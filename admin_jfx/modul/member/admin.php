<?php
session_start();
if( empty( $_SESSION['id'] ) ){
  //session_destroy();
  if($_SESSION['level']=="")
  header('Location: ../../index.php');
  die();
} else {
  include "../../koneksi.php";
  ?>
  <?php  include 'header.php';  ?>
  <?php  include 'menu.php';  ?>
  <?php
  if( isset($_REQUEST['hlm'] )){

    $hlm = $_REQUEST['hlm'];

    switch( $hlm ){

      case 'dashboard':
      include "dashboard/dashboard.php";
      break;

      case 'laporan':
      include "modul_peserta/laporan.php";
      break;

      case 'profile':
      include "profile/profile.php";
      break;

      case 'edit_profile':
      include "profile/edit_profile.php";
      break;

      case 'data_diri':
      include "../../aksi/member/kegiatan/data_diri.php";
      break;

      case 'foto_diri':
      include "../../aksi/member/kegiatan/foto_diri.php";
      break;

      case 'detail':
      include "masterdata/detail.php";
      break;

      case 'ditjen-realisasi':
      include "masterdata/ditjen_realisasi.php";
      break;

      case 'anaksatker-realisasi':
      include "masterdata/anak_satker.php";
      break;

      // case 'foto_kegiatan':
      // include "modul_peserta/foto_kegiatan.php";
      // break;

      case 'laporan_tambah':
      include "../../aksi/member/laporan_add.php";
      break;

      case 'kegiatan':
      include "modul_peserta/kegiatan.php";
      break;

      case 'logout':
      include "profile/logout.php";
      break;
    }
  } else {
    ?>

    <?php
    include 'dashboard/dashboard.php';
  }
}
?>
<?php  include 'footer.php'; ?>
