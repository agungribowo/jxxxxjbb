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

  <?php
  include 'header.php';
  include 'menu.php';
  ?>

  <?php
  if( isset($_REQUEST['hlm'] )){
    $hlm = $_REQUEST['hlm'];
    switch( $hlm ){

      case 'dashboard':
      include "dashboard/dashboard.php";
      break;

      //==============  web admin  ===========================//

      case 'home':
      include "modul_web/home.php";
      break;

      case 'home-edit':
      include "modul_web/home_edit.php";
      break;

      case 'slider_yinp':
      include "modul_web/home/slider_yinp.php";
      break;

      case 'tentang':
      include "modul_web/tentang.php";
      break;

      case 'struktur':
      include "modul_web/struktur.php";
      break;

      case 'teknologi':
      include "modul_web/teknologi.php";
      break;

      case 'edit-teknologi':
      include "modul_web/edit_teknologi.php";
      break;

      case 'add-teknologi':
      include "modul_web/add_teknologi.php";
      break;

      case 'pialang':
      include "modul_web/member/pialang.php";
      break;

      case 'pialang_edit':
      include "modul_web/member/pialang_edit.php";
      break;

      case 'aksi_pialang_edit':
      include "../../aksi/sysadmin/home/edit_pelaku.php";
      break;

          case 'saham':
      include "modul_web/member/saham.php";
      break;

      case 'persyaratan':
      include "modul_web/member/persyaratan.php";
      break;

      //==============  web admin  ===========================//

      case 'produk':
      include "modulproduk/produk.php";
      break;

      case 'spek_produk':
      include "modulproduk/spek_produk.php";
      break;

      case 'spek_edit':
      include "modulproduk/spek_edit.php";
      break;

      case 'aksi_spek_edit':
      include "../../aksi/sysadmin/produk/aksi_spek_edit.php";
      break;

      case 'error':
      include "dashboard/error.php";
      break;

      case 'kategori_produk':
      include "modulproduk/kategori.php";
      break;

      case 'kategori_edit':
      include "modulproduk/kategori_edit.php";
      break;

      case 'aksi_edit_kategori':
      include "../../aksi/sysadmin/produk/aksi_edit_kategori.php";
      break;

      case 'aksi_produk_edit':
      include "../../aksi/sysadmin/produk/aksi_produk_edit.php";
      break;

      //==============  batas  ===========================//

      case 'kontak':
      include "modul_web/kontak.php";
      break;

      case 'download':
      include "modul_web/download.php";
      break;

      case 'buletin':
      include "modul_web/buletin.php";
      break;

      case 'buletin_edit':
      include "modul_web/edit_buletin.php";
      break;

      case 'aksi_buletin_edit':
      include "../../aksi/sysadmin/home/edit_blt.php";
      break;

      case 'video_edit':
      include "modul_web/video_edit.php";
      break;

      case 'pelaku':
      include "modul_web/home/pelaku_pasar.php";
      break;

      // ==================== EDUKASI =========================

      case 'jadwal_webinar':
      include "modul_web/edukasi/jadwal_webinar.php";
      break;

      case 'jadwal_add':
      include "../../aksi/sysadmin/edukasi/jadwal_add.php";
      break;

      case 'jadwal_edit':
      include "modul_web/edukasi/jadwal_edit.php";
      break;

      case 'aksi_edit_webinar':
      include "../../aksi/sysadmin/edukasi/jadwal_edit.php";
      break;

      case 'materi_umum':
      include "modul_web/edukasi/materi_umum.php";
      break;

      case 'materi_add':
      include "../../aksi/sysadmin/edukasi/materi_add.php";
      break;

      case 'aksi_edit_materi':
      include "../../aksi/sysadmin/edukasi/materi_edit.php";
      break;

      case 'materi_edit':
      include "modul_web/edukasi/materi_edit.php";
      break;

      case 'form_pendaftaran':
      include "modul_web/edukasi/form_pendaftaran.php";
      break;

      case 'ftlc':
      include "modul_web/edukasi/ftlc.php";
      break;

      case 'ftlc_edit':
      include "modul_web/edukasi/ftlc_edit.php";
      break;

      case 'aksi_edit_ftlc':
      include "../../aksi/sysadmin/edukasi/ftlc_edit.php";
      break;

      //===================== REFERENSI ====================//

      case 'berita_bursa':
      include "modul_web/referensi/berita_bursa.php";
      break;

      case 'bbursa_add':
      include "../../aksi/sysadmin/referensi/bbursa_add.php";
      break;

      case 'bbursa_edit':
      include "modul_web/referensi/bbursa_edit.php";
      break;

      case 'aksi_edit_bbursa':
      include "../../aksi/sysadmin/referensi/bbursa_edit.php";
      break;

      case 'bbursa_del':
      include "../../aksi/sysadmin/referensi/bbursa_del.php";
      break;

      case 'regulasi_add':
      include "../../aksi/sysadmin/referensi/regulasi_add.php";
      break;

      case 'aksi_edit_regulasi':
      include "../../aksi/sysadmin/referensi/regulasi_edit.php";
      break;

      case 'regulasi_del':
      include "../../aksi/sysadmin/referensi/regulasi_del.php";
      break;

      case 'regulasi':
      include "modul_web/referensi/regulasi.php";
      break;

      case 'peluncuran_produk':
      include "modul_web/referensi/peluncuran_produk.php";
      break;

      case 'launch_add':
      include "../../aksi/sysadmin/referensi/launch_add.php";
      break;

      case 'peluncuran_edit':
      include "modul_web/referensi/peluncuran_edit.php";
      break;

      case 'aksi_edit_launch':
      include "../../aksi/sysadmin/referensi/launch_edit.php";
      break;

      case 'karir':
      include "modul_web/referensi/karir.php";
      break;

      case 'karir_edit':
      include "modul_web/referensi/karir_edit.php";
      break;

      case 'karir_add':
      include "../../aksi/sysadmin/referensi/karir_add.php";
      break;

      case 'kariredit':
      include "../../aksi/sysadmin/referensi/kariredit.php";
      break;

      case 'karir_del':
      include "../../aksi/sysadmin/referensi/karir_del.php";
      break;

      //==============  batas  ===========================//
      case 'user_edit2':
      include "../../aksi/sysadmin/user/user_edit2.php";
      break;

      case 'user_edit1':
      include "../../aksi/sysadmin/user/user_edit1.php";
      break;

      case 'user_edit2':
      include "../../aksi/sysadmin/user/user_edit2.php";
      break;

      case 'revisi_verifikasi':
        include "../../aksi/sysadmin/revisi/verifikasi.php";
        break;

        case 'kementerian-realisasi':
        include "masterdata/kementerian_realisasi.php";
        break;

        case 'ditjen-realisasi':
        include "masterdata/ditjen_realisasi.php";
        break;

        case 'anaksatker-realisasi':
        include "masterdata/anaksatker_realisasi.php";
        break;

        case 'upload-pand':
        include "masterdata/upload_pand.php";
        break;

        case 'import-kementrian':
        include "masterdata/import_kementrian.php";
        break;

        case 'upload-ditjen':
        include "masterdata/upload_ditjen.php";
        break;

        case 'upload-satker':
        include "masterdata/upload_satker.php";
        break;

        case 'transaksi':
        include "transaksi.php";
        break;

        case 'laporan':
        include "laporan.php";
        break;

        case 'user':
        include "user/user.php";
        break;

        case 'profile':
        include "dashboard/profile.php";
        break;

        case 'edit-user':
        include "user/edit_user.php";
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
