

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



// Jika tombol Cari diklik
if(isset($_POST['btnCari'])){
  if($_POST) {
    // Cari berdasarkan Nomor RM dan Nama Pasien yang mirip
    $txtKataKunci = $_POST['txtKataKunci'];

  //skrip untuk menampilkan data dari database
      $sql = mysqli_query($koneksi, "SELECT upload_persetujuan.* 
        FROM upload_persetujuan
          ");





  }
}
else {
 $sql = mysqli_query($koneksi, "SELECT upload_persetujuan.* 
        FROM upload_persetujuan
          ");

  


}






if( empty( $_SESSION['id'] ) ){

 if($_SESSION['level']=="")
  header('Location: ./');
  die();
} else {
  if( isset( $_REQUEST['aksi'] )){
    $aksi = $_REQUEST['aksi'];
    switch($aksi){
      case 'baru':
        include '../../aksi/sysadmin/upload/upload_persetujuan.php';
        break;
      // case 'edit':
      //  include 'transaksi_edit.php';
      //  break;
      case 'delete':
    include '../../aksi/sysadmin/upload/delete_persetujuan.php';
        break;
      // case 'cetak':
      //  include 'cetak_nota.php';
      //  break;
    }
  } else {





echo '




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Upload Surat Persetujuan</h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row" >
        <div class="col-xs-12">
       ';
          ?>
          <div class="box">
            <div class="box-header">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
               Input Data
              </button>
            </div>
 <form  action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self" id="form1"  class="form-horizontal" role="form">
             <div class="col-md-12">  
         <div class="col-md-3">  
           <!--   <label for="">Filter Bulan</label> -->
      
     <!--    <select class="form-control chosen-select"  name="txtKataKunci" >
                  <option  value=""><?php echo $dataKataKunci; ?></option>
                   <option  value="Januari">Januari</option>
                     <option  value="Febuari">Febuari</option>
                    <option  value="Maret">Maret</option>
                    <option  value="April">April</option>
                    <option  value="Mei">Mei</option>
                    <option  value="Juni">Juni</option>
                    <option  value="Juli">Juli</option>
                    <option  value="Agustus">Agustus</option>
                    <option  value="September">September</option>
                    <option  value="Oktober">Oktober</option>
                    <option  value="November">November</option>
                    <option  value="Desember">Desember</option>
               
                </select>
                <br><br>
       <button class="btn btn-add" type="submit" name="btnCari" value="search" > <i class="fa fa-search"></i> Filter
   </button> -->
      </div>

 </form>
 <?php 
        echo '
</div>
<!-- end row -->
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
               <tr>
                  <th style="width: 1%">No</th>
           
                   <th>file</th>
                  <th>Tgl Input</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>';
   //skrip untuk menampilkan data dari database
      // $sql = mysqli_query($koneksi, "SELECT * FROM rkakl");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

         while($row = mysqli_fetch_array($sql)){
          $no++;
        echo '


                <tr>
               <td>'.$no.'</td>
                  
                     <td><a href="../../file/'.$row['persetujuan'].'">'.$row['persetujuan'].'</a></td>
                       <td>'.$row['tgl_upload'].'</td>
                   <td>

<a href="./admin.php?hlm=Upload-Persetujuan&aksi=delete&kode_sas='.$row['id_persetujuan'].'" onclick="return konfirmasi()" type="button" class="btn btn-danger" >Delete</a>

                </td>
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



    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
              </div>
              <div class="modal-body"> 
                <form role="form"  action="./admin.php?hlm=Upload-Persetujuan&aksi=baru" method="post" enctype="multipart/form-data">
              <div class="box-body">
              
                 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">File</label>
                  <input type="file" class="form-control" name="fupload" placeholder="username">
                     <input type="hidden" class="form-control" name="id_user" placeholder="username" value="<?php echo $_SESSION['id']; ?>">
                </div>

      


               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <!--  <button type="button" class="btn btn-primary">Save changes</button> -->
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

