
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
      include '../../aksi/sysadmin/referensi/regulasi_add.php';
      break;
      case 'edit_bimtek':
      include '../../aksi/sysadmin/home/edit_bimtek.php';
      break;
      case 'hapus':
      include '../../aksi/sysadmin/home/ftlc_hapus.php';
      break;

    }
  } else {

    echo '
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h3>Karir</h3>
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
      <th>Gambar</th>
      <th>Judul</th>
      <th>Tanggal</th>
      <th>Persyaratan</th>
      <th>Deskripsi</th>
      <th>Tool</th>
    </tr>
    </thead>
    <tbody>';


    //skrip untuk menampilkan data dari database
    $sql = mysqli_query($koneksi, "SELECT jfx_karir.* FROM jfx_karir  ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;
        while($row = mysqli_fetch_array($sql)){
          $no++;
          echo '
          <tr>
          <td>'.$no.'</td>
          <td><img src="../../file/file_karir/'.$row['gambar'].'"  width="100"></td>
          <td>'.$row['judul'].'</td>
          <td>'.$row['tanggal'].'</td>
          <td><textarea readonly="readonly" height:90px>'.$row['persyaratan'].'</textarea></td>
          <td><textarea readonly="readonly" height:90px>'.$row['deskripsi'].'</textarea></td>
          <td>
          ';?>
          <a href="./admin?hlm=karir_edit&id=<?php echo $row['id']; ?>" type="button" class="btn btn-warning" >Edit</a>
          <a href="admin?hlm=karir_del&submit=yes&id=<?php echo $row['id']; ?>" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ... ?')" type="button" class="btn btn-danger" >Hapus</a></td>
        </tr><?php
      }
    } else {
      echo '<td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. </p></center></td></tr>';
    }
    echo '
    </tbody>

    </table>
    </div>
    </div>

    </div>
    </div>
    </section>
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
          <h4 class="modal-title">Tambah Data Karir</h4>
        </div>
        <div class="modal-body">
          <form role="form"  action="./admin?hlm=karir_add" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label>Gambar</label>
                <input type="file" class="form-control" name="fupload" accept="file/*">
              </div>
              <div class="form-group">
                <label>Judul</label>
                <input type="text" class="form-control" name="judul">
              </div>
              <div class="form-group">
                <label>Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
              </div>
              <div class="form-group">
                <label>Persyaratan</label>
                <textarea class="form-control" id="editor1" name="editor1"></textarea>
              </div>
              <div class="form-group">
                <label>Deskripsi Kerja</label>
                <textarea class="form-control" id="editor2" name="editor2"></textarea>
              </div>
            </div>
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

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
  CKEDITOR.replace('editor1')
  $('.textarea').wysihtml5()
})
</script>

<script>
$(function () {
  CKEDITOR.replace('editor2')
  $('.textarea').wysihtml5()
})
</script>
