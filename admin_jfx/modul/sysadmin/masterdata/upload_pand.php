

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
        include '../../aksi/sysadmin/masterdat/embed_baru.php';
        break;

          case 'new':
        include '../../aksi/sysadmin/masterdat/embed_new.php';
        break;
      // case 'edit':
      //  include 'transaksi_edit.php';
      //  break;
      case 'delete':
       include '../../aksi/sysadmin/masterdat/embed_delete.php';
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
      <h3>Upload Panduan</h3>
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
          <div class="box">
            <div class="box-header">
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default2">
               Input Data
              </button>
            </div>
             <div class="col-md-12">  
         <div class="col-md-3">  
           
      </div>
   <!--  <input  type="" name="txtKataKunci2" style="width: 20%;"> -->
      



</div>
<!-- end row -->
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
               <tr>
                  <th style="width: 1%">No</th>
                  <th>File</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>';
   //skrip untuk menampilkan data dari database
      $sql = mysqli_query($koneksi, "SELECT * FROM upload_panduan");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

         while($row = mysqli_fetch_array($sql)){
          $no++;
        echo '


                <tr>
               <td>'.$no.'</td>
                   <td><b><h1>'.$row['judul'].'</h1></b>  <hr> '.$row['upload_pand'].' </td>
                         
                   <td>
                   <a href="./admin.php?hlm=upload-pand&aksi=delete&kode_pand='.$row['id'].'" onclick="return konfirmasi()" type="button" class="btn btn-danger" >Delete</a>

                  
<br><br>
Note : height dibuat "600" <br>dan width dibuat "100%" 

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



    <div class="modal fade" id="modal-default2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
Note : height dibuat "600"
dan width dibuat "100%"

              </div>
              <div class="modal-body"> 
                <form role="form"  action="./admin.php?hlm=upload-pand&aksi=new" method="post" enctype="multipart/form-data">
            

                 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">JUDUL VIDEO</label>
                 <input type="text" name="judul" class="form-control">
                </div>

              </div>


                 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">EMBED YOUTUBE</label>
                  <textarea name="embed1" class="form-control"></textarea>
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






    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>

<?php 
  $sql = mysqli_query($koneksi, "SELECT * FROM upload_panduan");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;
    $row = mysqli_fetch_array($sql)
     
?>

              </div>
              <div class="modal-body"> 
                <form role="form"  action="./admin.php?hlm=upload-pand&aksi=baru&Kode=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
              
                 <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">EMBED YOUTUBE <?php echo $row['id']; ?></label>
                  <textarea name="embed" class="form-control"></textarea>
                </div>

                




               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

          <?php } ?>
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


