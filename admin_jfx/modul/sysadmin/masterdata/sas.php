
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>


<?php

if( empty( $_SESSION['id'] ) ){

 if($_SESSION['level']=="")
  header('Location: ./');
  die();
} else {
  if( isset( $_REQUEST['aksi'] )){
    $aksi = $_REQUEST['aksi'];
    switch($aksi){
      case 'baru':
        include 'aksi/unit/unit_add.php';
        break;
      // case 'edit':
      //  include 'transaksi_edit.php';
      //  break;
      case 'hapus':
        include 'aksi/unit/unit_hapus.php';
        break;
      // case 'cetak':
      //  include 'cetak_nota.php';
      //  break;
    }
  } else {

     // $no_agenda = isset($_GET['kode_agenda']) ?  $_GET['kode_agenda'] : ''; 
  $kode_sas = $_REQUEST['kode_sas'];
 $sql = mysqli_query($koneksi, "SELECT rkakl.*
        FROM rkakl WHERE id_rkakl='$kode_sas'
        ");
 $row = mysqli_fetch_array($sql);

echo '




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
         <h3>Realisasi SAS '.$row['bulan_anggaran'].'  '.$row['ta'].'</h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
       
         <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
          
            </div>
            <!-- /.box-header -->
            <div class="box-body"  style="text-align: center; height:1000px" >
             
<embed width="100%" height="100%" src="../../file/'.$row['rkakl'].'" type="application/pdf"></embed>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
 

';
  }
}
?>

