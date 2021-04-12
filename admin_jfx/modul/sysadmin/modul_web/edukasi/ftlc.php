
<link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
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
      include '../../aksi/sysadmin/edukasi/ftlc_add.php';
      break;
      case 'edit_ftlc':
      include '../../aksi/sysadmin/home/edit_bimtek.php';
      break;
      case 'hapus':
      include '../../aksi/sysadmin/edukasi/ftlc_del.php';
      break;

    }
  } else {

    echo '
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h3>Futures Trading Learning Center</h3>
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
    Input data
    </button>
    </div>
    <!-- /.box-header -->
    <div class="box-body" >
    <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
    width="100%">
    <thead>
    <tr>
    <th width="5%">No</th>
    <th>Provinsi</th>
    <th>Kota</th>
    <th>Kampus</th>
    <th>Pialang</th>
    <th>Tool</th>
    </tr>
    </thead>
    <tbody>';


    //skrip untuk menampilkan data dari database
    $sql = mysqli_query($koneksi, "SELECT jfx_ftlc.*
      FROM jfx_ftlc
      ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

        while($row = mysqli_fetch_array($sql)){
          $no++;
          echo '
          <tr>
          <td>'.$no.'</td>
          <td>'.$row['provinsi'].'</td>
          <td>'.$row['kota'].'</td>
          <td>'.$row['kampus'].'<br>'.$row['kampus_link'].'</td>
          <td>'.$row['pialang'].'<br>'.$row['pialang_link'].'</td>
          <td>
          ';?>
          <a href="./admin?hlm=ftlc_edit&id=<?php echo $row['id'] ?>" type="button" class="btn btn-warning" >Edit</a>
          <a href="?hlm=ftlc&aksi=hapus&submit=yes&id=<?php echo $row['id'] ?>" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ... ?')" type="button" class="btn btn-danger" >Hapus</a></td>
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
          <form role="form"  action="./admin.php?hlm=ftlc&aksi=baru" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label>Provinsi</label>
                <input type="text" class="form-control" name="provinsi" placeholder="provinsi">
              </div>
              <div class="form-group">
                <label>Kota</label>
                <input type="text" class="form-control" name="kota" placeholder="kota">
              </div>
              <div class="form-group">
                <label>Kampus</label>
                <input type="text" class="form-control" name="kampus" placeholder="kampus">
              </div>
              <div class="form-group">
                <label>Kampus Link</label>
                <input type="text" class="form-control" name="kampus_link" placeholder="kampus_link">
              </div>

              <div class="form-group">
                <label>Pialang</label>
                <input type="text" class="form-control" name="pialang" placeholder="Pialang">
              </div>

              <div class="form-group">
                <label>Pialang Link</label>
                <input type="text" class="form-control" name="pialang_link" placeholder="Pialang Link">
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
