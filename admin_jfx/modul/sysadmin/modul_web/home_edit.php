
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
      // case 'baru':
      //   include '../../aksi/sysadmin/home/home_upload.php';
      //   break;

        case 'edit':
          include '../../aksi/sysadmin/home/home_sqlsrv_edit.php';
          break;

     //    case 'kuning':
     //      include '../../aksi/sysadmin/home/kuning_add.php';
     //      break;
     //
     //
     // case 'edit_bimtek':
     //    include '../../aksi/sysadmin/home/edit_bimtek.php';
     //    break;

      // case 'hapus':
      //   include '../../aksi/sysadmin/home/home_hapus.php';
      //   break;

        // case 'hapus_kuning':
        //   include '../../aksi/sysadmin/home/hapus_kuning.php';
        //   break;
      // case 'cetak':
      //  include 'cetak_nota.php';
      //  break;
    }
  } else {


                $tsql = " SELECT home.*
                FROM home ";
                $stmt = sqlsrv_query( $conn, $tsql);
                do {
                $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

echo '
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>HOME MANAJEMEN</h3>
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
            <a href="./admin?hlm=home"  class="btn btn-danger" >
               Kembali
              </a>

            </div>
            <!-- /.box-header -->
                 <div class="box-body" >
';?>

<form role="form"  action="./admin.php?hlm=home-edit&aksi=edit" method="post" enctype="multipart/form-data">
<div class="box-body">
<div class="form-group">
  <label for="exampleInputEmail1">gambar</label><br>
  <img src="../../file_web/<?php echo $row['gambar']; ?>"  width="200" >
  <input type="file" class="form-control" name="gambar" placeholder="username">
    <input type="hidden" class="form-control" name="id" placeholder="" value="<?php echo $row['id']; ?>">
</div>


<div class="form-group">
  <label for="exampleInputPassword1">Judul</label>
  <input type="text" class="form-control" name="judul" placeholder="judul" value="<?php echo $row['judul']; ?>">
</div>
</div>
<!-- /.box-body -->

<div class="box-footer">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
<?php
echo '

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

  } while ( sqlsrv_next_result($stmt) );


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


  <!-- <link rel="stylesheet" href="../../../css/icomoon.css"> -->

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
