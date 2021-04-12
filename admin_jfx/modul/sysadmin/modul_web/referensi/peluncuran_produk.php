
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
      include '../../aksi/sysadmin/referensi/launch_add.php';
      break;
      
      case 'hapus':
      include '../../aksi/sysadmin/referensi/launch_del.php';
      break;

    }
  } else {

    echo '
    <div class="content-wrapper">
    <section class="content-header">
    <h3>Peluncuran Produk</h3>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Tables</a></li>
    <li class="active">Data tables</li>
    </ol>
    </section>

    <section class="content">
    <div class="row" >
    <div class="col-xs-12">
    <div class="box">
    <div class="box-header">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
    Input data
    </button>
    </div>
    <div class="box-body" >
    <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
    width="100%">
    <thead>
    <tr>
    <th width="5%">No</th>
    <th>Judul</th>
    <th>Deskripsi</th>
    <th>Pemateri</th>
    <th>Waktu/Tanggal</th>
    <th>Tanggal Update</th>
    <th>URL</th>
    <th>Tool</th>
    </tr>
    </thead>
    <tbody>';


    //skrip untuk menampilkan data dari database
    $sql = mysqli_query($koneksi, "SELECT jfx_peluncuran_produk.*
      FROM jfx_peluncuran_produk
      ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

        while($row = mysqli_fetch_array($sql)){
          $no++;
          echo '
          <tr>
          <td>'.$no.'</td>
          <td>'.$row['judul'].'</td>
          <td>'.$row['deskripsi'].'</td>
          <td>'.$row['pemateri'].'</td>
          <td>'.$row['waktu'].'/'.$row['tanggal'].'</td>
          <td>'.$row['tgl_update'].'</td>
          <td>'.$row['url'].'</td>
          <td>
          ';?>
          <a href="./admin?hlm=peluncuran_edit&id=<?php echo $row['id'] ?>" type="button" class="btn btn-warning" >Edit</a>
          <a href="?hlm=peluncuran_produk&aksi=hapus&submit=yes&id=<?php echo $row['id'] ?>" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ... ?')" type="button" class="btn btn-danger" >Hapus</a></td>
        </tr><?php
      }
    } else {
      echo '<td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u><a href="" data-toggle="modal" data-target="#modal-default">Tambah data baru</a></u> </p></center></td></tr>';
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
          <h4 class="modal-title">Tambah Data</h4>
        </div>
        <div class="modal-body">
          <form role="form"  action="./admin?hlm=peluncuran_produk&aksi=baru" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputPassword1">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul">
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputPassword1">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi">
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputPassword1">Pemateri</label>
                <input type="text" class="form-control" name="pemateri" placeholder="Pemateri">
              </div>
            </div>

            <div class="box-body">
              <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Waktu</label>
                <input type="time" class="form-control" name="waktu" placeholder="Waktu">
              </div>
              <div class="form-group col-md-6">
                <label for="exampleInputPassword1">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" placeholder="Tanggal">
              </div>
            </div>
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputPassword1">URL</label>
                <input type="text" class="form-control" name="url" placeholder="URL">
              </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
            </div>
          </form>
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
