
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

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

    
.dtHorizontalVerticalExampleWrapper {
max-width: 600px;
margin: 0 auto;
}
#dtHorizontalVerticalExample th, td {
white-space: nowrap;
}
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
bottom: .5em;
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
        include '../../aksi/sysadmin/home/home_upload.php';
        break;
     case 'edit_kontak':
        include '../../aksi/sysadmin/home/edit_kontak.php';
        break;
      break;
      case 'hapus':
        include '../../aksi/sysadmin/home/home_hapus.php';
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
      <h3>KONTAK MANAJEMEN</h3>
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
                       
  <form role="form"  action="./admin.php?hlm=kontak&aksi=edit_kontak" method="post" enctype="multipart/form-data">
            </div>
            <!-- /.box-header -->
                 <div class="box-body" >
              <table id="" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
                <thead>
               <tr>
                   <th width="5%">No</th>
                  <th>Judul</th>
                 
                
                  <th>Tool</th>
                </tr>
                </thead>
                <tbody>';

   //skrip untuk menampilkan data dari database
      $sql22 = mysqli_query($koneksi, "SELECT kontak.*
        FROM kontak
        
        ");
      if(mysqli_num_rows($sql22) > 0){
        $no = 0;

         while($row22 = mysqli_fetch_array($sql22)){
          $no++;
        echo '
                <tr>
                 <td>'.$no.'</td>
                 <td><textarea class="form-control" id="editor1" name="editor1" rows="10" cols="80">'.$row22['kontak'].'</textarea>

                 <input type="hidden" class="form-control"  name="id"  value="'.$row22['id'].'" />

                 </td>
                  <td> ';?>
                  <button onclick="return confirm('ANDA YAKIN AKAN MENGUBAH DATA INI ... ?')" type="submit" class="btn btn-warning" >Edit</button>
                </td>
                  
                </tr><?php 
        }
      } else {
         echo '<td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u><a href="" data-toggle="modal" data-target="#modal-default">Tambah data baru</a></u> </p></center></td></tr>';
      }
      echo '
                </tbody>
               
              </table>
            </div>
            <!-- /.box-body -->
            </form>
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
                <form role="form"  action="./admin.php?hlm=home&aksi=baru" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">gambar</label>
                  <input type="file" class="form-control" name="gambar" placeholder="username">
                </div>
               

                <div class="form-group">
                  <label for="exampleInputPassword1">Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="judul">
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

<script type="text/javascript">
$(document).ready(function () {
$('#dtHorizontalVerticalExample').DataTable({
"scrollX": true,

});
$('.dataTables_length').addClass('bs-select');
});
</script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>