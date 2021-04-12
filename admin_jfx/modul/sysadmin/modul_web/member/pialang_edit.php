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
      case 'edit':
      include '../../aksi/sysadmin/home/edit_pelaku.php';
      break;
    }
  } else {

    $id = $_REQUEST['id'];
    //skrip untuk menampilkan data dari database
    $sqlsy = mysqli_query($koneksi, "SELECT jfx_pelaku_pasar.* FROM jfx_pelaku_pasar WHERE id='$id'
      ");
      $rowsy = mysqli_fetch_array($sqlsy);
      echo '

      <div class="content-wrapper">
      <section class="content-header">
      <h3>Edit Data</h3>
      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Tables</a></li>
      <li class="active">Data tables</li>
      </ol>
      </section>
      ';?>

      <section class="content">
        <div class="row" >
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <a href="./admin?hlm=pialang"  type="button" class="btn btn-danger">
                  Kembali
                </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body" >
                <form role="form"  action="./admin?hlm=aksi_pialang_edit" method="post" enctype="multipart/form-data">
                  <div class="box-body">

                    <div class="box-body">
                      <div class="form-group">
                        <label>Logo</label>
                        <input type="hidden" class="form-control" name="id" value="<?php echo $rowsy['id']; ?>">
                        <input type="file" class="form-control" name="fupload" >
                      </div>

                      <div class="form-group">
                        <label >Tipe</label>
                        <select class="form-control" name="tipe_member">
                          <option value=""><?php echo $rowsy['tipe_member']; ?></option>
                          <option value="Pialang">Pialang</option>
                          <option value="Pedagang">Pedagang</option>
                          <option value="Fisik Timah Penjual">Fisik Timah Penjual</option>
                          <option value="Fisik Timah Pembeli">Fisik Timah Pembeli</option>
                          <option value="Emas Digital">Emas Digital</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label >Nama PT</label>

                        <input type="text" class="form-control" name="nama_pt" value="<?php echo $rowsy['nama_pt']; ?>">
                      </div>
                      <div class="form-group">
                        <label >NO SPAB</label>
                        <input type="text" class="form-control" name="no_spab" value="<?php echo $rowsy['no_spab']; ?>">
                      </div>
                      <div class="form-group">
                        <label >Telepon</label>
                        <input type="text" class="form-control" name="telp" value="<?php echo $rowsy['telp']; ?>">
                      </div>

                      <div class="form-group">
                        <label >FAX</label>
                        <input type="text" class="form-control" name="fax"  value="<?php echo $rowsy['fax']; ?>">
                      </div>

                      <div class="form-group">
                        <label >Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $rowsy['email']; ?>">
                      </div>

                      <div class="form-group">
                        <label >URL Website</label>
                        <input type="text" class="form-control" name="url" value="<?php echo $rowsy['url']; ?>">
                      </div>

                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea  class="form-control" id="editor1" name="alamat"> <?php echo $rowsy['alamat']; ?></textarea>
                      </div>
                    </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
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
      <?php
    }
  }
  ?>

    <script>
    $(function () {
      // Replace the <textarea id="editor1"> with a CKEditor
      // instance, using default configuration.
      CKEDITOR.replace('editor1')
      //bootstrap WYSIHTML5 - text editor
      $('.textarea').wysihtml5()
    })
  </script>
