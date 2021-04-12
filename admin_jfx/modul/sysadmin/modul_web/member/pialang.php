
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
      include '../../aksi/sysadmin/home/pelaku_add.php';
      break;
      case 'edit':
      include '../../aksi/sysadmin/home/edit_bimtek.php';
      break;
      case 'hapus':
      include '../../aksi/sysadmin/home/pelaku_hapus.php';
      break;
      case 'hapus_teknologi':
      include '../../aksi/sysadmin/home/hapus_teknologi.php';
      break;
    }
  } else {

    echo '
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <h3>DAFTAR PELAKU PASAR</h3>
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
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default2">
    Tambah Data
    </button>


    </div>
    <!-- /.box-header -->
    <div class="box-body" >
    <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
    width="100%">
    <thead>
    <tr>
    <th width="5%">No </th>
    <th>Logo </th>
    <th>Nama PT</th>
    <th>Alamat</th>
    <th>isi</th>

    <th>Tool</th>
    </tr>
    </thead>
    <tbody>';


    //skrip untuk menampilkan data dari database
    $sqlsy = mysqli_query($koneksi, "SELECT jfx_pelaku_pasar.*
      FROM jfx_pelaku_pasar
      ");
      if(mysqli_num_rows($sqlsy) > 0){
        $no = 0;

        while($rowsy = mysqli_fetch_array($sqlsy)){
          $no++;
          echo '
          <tr>
          <td>'.$no.'</td>
          <td><img src="../../jfx_member/'.$rowsy['logo'].'" style="max-width:100%" alt="image description" ></td>
          <td>'.$rowsy['nama_pt'].' <br> SPAB : '.$rowsy['no_spab'].' <br> Telp : '.$rowsy['telp'].' <br> Fax : '.$rowsy['fax'].' </td>
          <td><textarea readonly="readonly" height:90px>'.$rowsy['alamat'].'</textarea></td>
          <td>'.$rowsy['tipe_member'].'</td>
          <td>
          ';?>
          <a href="admin?hlm=pialang_edit&id=<?php echo $rowsy['id']; ?>" onclick="return confirm('ANDA YAKIN AKAN MENGEDIT DATA INI ... ?')" type="button" class="btn btn-warning" >Edit</a>
          <a href="?hlm=pialang&aksi=hapus&submit=yes&id=<?php echo $rowsy['id']; ?>" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ... ?')" type="button" class="btn btn-danger" >Hapus</a></td>
        </tr><?php
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

<!-- <link rel="stylesheet" href="../../../css/icomoon.css"> -->

<div class="modal fade" id="modal-default2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Tambah Data</h4>
        </div>
        <div class="modal-body">
          <form role="form"  action="./admin?hlm=pialang&aksi=baru" method="post" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Logo</label>
                <input type="file" class="form-control" name="fupload" placeholder="logo" >
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Tipe</label>
                <select class="form-control" name="tipe_member">
                  <option value="Pialang">Pialang</option>
                  <option value="Pedagang">Pedagang</option>
                  <option value="Fisik Timah Penjual">Fisik Timah Penjual</option>
                  <option value="Fisik Timah Pembeli">Fisik Timah Pembeli</option>
                  <option value="Emas Digital">Emas Digital</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Nama PT</label>
                <input type="text" class="form-control" name="nama_pt" placeholder="Nama PT" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">NO SPAB</label>
                <input type="text" class="form-control" name="no_spab" placeholder="NO SPAB" >
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Telepon</label>
                <input type="text" class="form-control" name="telp" placeholder="Telepon" >
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">FAX</label>
                <input type="text" class="form-control" name="fax" placeholder="FAX" >
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" >
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">URL Website</label>
                <input type="text" class="form-control" name="url" placeholder="URL" >
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Alamat</label>
                <textarea  class="form-control" id="editor1" name="alamat"></textarea>
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
