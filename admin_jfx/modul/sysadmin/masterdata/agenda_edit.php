
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
        include '../../aksi/pelaksana/agenda_edit.php';
        break;
      // case 'edit':
      //  include 'transaksi_edit.php';
      //  break;
      case 'hapus':
        include '../../aksi/sysadmin/agenda/agenda_hapus.php';
        break;
      // case 'cetak':
      //  include 'cetak_nota.php';
      //  break;
    }
  } else {

$hasilid = $_SESSION['id'];


?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>bnpt</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php 
  // $no_agenda = isset($_GET['kode_agenda']) ?  $_GET['kode_agenda'] : ''; 
  $id_agenda = $_REQUEST['id_agenda'];
 $sql = mysqli_query($koneksi, "SELECT agenda.*
        FROM agenda WHERE id_agenda='$id_agenda'
        ");
 $row = mysqli_fetch_array($sql);



?>
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Invoice
        <small>#007612</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Invoice</li>
      </ol>
    </section>

   
    <!-- Main content -->
    <section class="invoice">
   



<!-- Table row -->
      <div class="row">
        <div class="col-xs-6 table-responsive">
          <table class="table table-striped">
            
            <tbody>
            <tr>
              <td>Edit Data </td>
              <td></td>
              <td></td>
              
            </tr>
           
           
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->


      <!-- info row -->
    


      <!-- Table row -->
      <div class="row">
        <div class="col-xs-6 table-responsive">
        <form role="form"  action="./admin.php?hlm=agenda_edit&aksi=baru&Kode=<?php echo $id_agenda; ?>" method="post" enctype="multipart/form-data">
       <div class="form-group">
                  <label for="exampleInputEmail1">Kode</label>
                  <input type="text" class="form-control" name="kode_kegiatan" value="<?php echo $row['kode_agenda']; ?>">
                  <?php $petugas_lv= $_SESSION['id'];?>
                   <input type="hidden" class="form-control" name="id_user" value="<?php echo $petugas_lv; ?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Agenda</label>
                  <input type="text" class="form-control" name="nama_agenda" placeholder="Nama" value="<?php echo $row['nama_agenda']; ?>">
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Tahun Anggaran</label>
                  <input type="text" class="form-control" name="ta" placeholder="contoh : 2019" value="<?php echo $row['ta_agenda']; ?>">
                </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1">Pengajuan Anggaran Rp. </label>
                <!--   <input type="text" id="rupiah" class="form-control" name="anggaran" placeholder="masukan nominal anggaran"> -->
                    <input type="text"  class="form-control" name="anggaran" placeholder="masukan nominal anggaran" value="<?php echo $row['anggaran']; ?>">
                </div>

       <div class="form-group">
                  <label for="exampleInputPassword1">Pengajuan Rencana Kegiatan </label>
                <!--   <input type="text" id="rupiah" class="form-control" name="anggaran" placeholder="masukan nominal anggaran"> -->
                <select name="bulan_keg" class="form-control" >
                  <option value="<?php echo $row['bulan_kegiatan']; ?>"> <?php echo $row['bulan_kegiatan']; ?> </option>
                  <option value="Januari" >Januari</option>
                  <option value="Febuari">Febuari</option>
                  <option value="Maret">Maret</option>
                  <option value="April">April</option>
                  <option value="Mei">Mei</option>
                  <option value="Juni">Juni</option>
                  <option value="Juli">Juli</option>
                  <option value="Agustus">Agustus</option>
                  <option value="September">September</option>
                  <option value="Oktober">Oktober</option>
                  <option value="November">November</option>
                  <option value="Desember">Desember</option>
                </select>
                </div>



                 <div class="form-group">
                  <label for="exampleInputPassword1">Output  </label>
                  <select  class="form-control select2" style="width: 100%;" name="output_agenda" required="required">
                  
                 <option value="<?php echo $row['output_agenda']; ?>" ><?php echo $row['output_agenda']; ?></option>
                   <?php

        $q = mysqli_query($koneksi, "SELECT output_user_list.*, user.*
         FROM output_user_list 
         LEFT JOIN user on output_user_list.id_user=user.id 
        where id_user = '$hasilid'  and user.akun_kegiatan = '5096'

          ");
        while($data = mysqli_fetch_array($q)){
          echo '<option style="color: blue"  class="'.$data['id_output'].'" value="'.$data['id_output'].'">'.$data['id_output'].' ('.$data['nama_akun_out'].')</option>';
        }

      ?>
     
      </select>
                </div>
               

     
        </div>

           <div class="col-xs-6">
          <p class="lead">Edit Data</p>

          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
           Data kegiatan perjalan tidak bisa dihapus, hanya utk di edit 
          </p>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

   

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
       <!--    <a href="./admin.php?hlm=cetak-sprint" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
          <button type="submit" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Simpan
          </button>
         
        </div>
          </form>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>



  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<?php  

  }
}
?>
