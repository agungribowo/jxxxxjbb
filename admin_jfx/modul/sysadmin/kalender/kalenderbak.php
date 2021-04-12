<?php

# Deklarasi variabel
$filterPeriode = ""; 
$tglAwal  = ""; 
$tglAkhir = "";

# Membaca tanggal dari form, jika belum di-POST formnya, maka diisi dengan tanggal sekarang
$tglAwal  = isset($_POST['txtTglAwal']) ? $_POST['txtTglAwal'] : "01-".date('m-Y');
$tglAkhir   = isset($_POST['txtTglAkhir']) ? $_POST['txtTglAkhir'] : date('d-m-Y');

// Jika tombol filter tanggal (Tampilkan) diklik
if (isset($_POST['btnTampil'])) {
  // Membuat sub SQL filter data berdasarkan 2 tanggal (periode)
  $filterPeriode = "WHERE ( start BETWEEN '".$tglAwal."' AND '".$tglAkhir."')";
}
else {
  // Membaca data tanggal dari URL, saat menu Pages diklik
  $tglAwal  = isset($_GET['tglAwal']) ? $_GET['tglAwal'] : $tglAwal;
  $tglAkhir   = isset($_GET['tglAkhir']) ? $_GET['tglAkhir'] : $tglAkhir; 
  
  // Membuat sub SQL filter data berdasarkan 2 tanggal (periode)
  $filterPeriode = "WHERE ( start BETWEEN '".$tglAwal."' AND '".$tglAkhir."')";
}



?>
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
        include '../../aksi/pelaksana/agenda_add.php';
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Event Kalender</h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
 <div class="col-md-12">  
 
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table class="table table-bordered table-hover" width="500" border="0"  class="table-list">
    <tr>
      <td colspan="3" bgcolor="#CCCCCC"><strong>PERIODE </strong></td>
    </tr>

    <tr><br>
      <td width="90"><strong>Periode </strong></td>
      <td width="5"><strong>:</strong></td>
 <br>
      <td width="391"><input  name="txtTglAwal" type="date" class="tcal" value="<?php echo $tglAwal; ?>" />
        s/d
      <input name="txtTglAkhir" type="date" class="tcal" value="<?php echo $tglAkhir; ?>" /></td>
    </tr>

    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btnTampil" type="submit" value=" Tampilkan " /></td>
    </tr>
  </table>
</form>

<br>
    <br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
     <?php
     echo '
      
            <!-- /.box-header -->
            <div class="box-body"  style="overflow-x:auto;">
              <table  id="example2" class="table table-bordered table-hover">
                <thead>

              
                  <tr>
                   <th>NO</th>
                  <th>Event</th>
                    <th>satker</th>
                  <th>Mulai</th>
                  <th >Berakhir </th>
                 
                </tr>
                </thead>
                <tbody>';

      //skrip untuk menampilkan data dari database
      $sql = mysqli_query($koneksi, "SELECT revisi_event.*
        FROM revisi_event  $filterPeriode
       
          ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

         while($row = mysqli_fetch_array($sql)){
          $no++;

   

        echo '


                <tr>
                <td>'.$no.'</td>
                 <td>'.$row['title'].' </td>
                 <td>'.$row['satker'].' </td>
                <td>'.$row['start'].' </td>
                  <td>'.$row['endjadwal'].' </td>
                   
                   
                </tr>
';
        }
      } else {
         echo '<td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. </p></center></td></tr>';
      }
      echo '


                </tbody>

                
               
              </table>
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
