
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
      include '../../aksi/sysadmin/tentang/edit_aksi_teknologi.php';
      break;

      case 'kuning':
      include '../../aksi/sysadmin/home/kuning_add.php';
      break;


      case 'edit_bimtek':
      include '../../aksi/sysadmin/home/edit_bimtek.php';
      break;
      break;
      case 'hapus':
      include '../../aksi/sysadmin/home/home_hapus.php';
      break;

      case 'hapus_teknologi':
      include '../../aksi/sysadmin/home/hapus_teknologi.php';
      break;
      // case 'cetak':
      //  include 'cetak_nota.php';
      //  break;
    }
  } else {

    $id = $_REQUEST['id'];
    //skrip untuk menampilkan data dari database
    $sqlsy = mysqli_query($koneksi, "SELECT jfx_teknologi.*,  jfx_icon_db.*
      FROM jfx_teknologi
      INNER JOIN  jfx_icon_db on jfx_teknologi.icon=jfx_icon_db.id_icon where jfx_teknologi.id = '$id'

      ");
      $rowsy = mysqli_fetch_array($sqlsy);
      echo '

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
      <h3>TEKNOLOGI MANAJEMEN</h3>
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
                <a href="./admin?hlm=teknologi"  type="button" class="btn btn-danger">
                  Kembali
                </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body" >

                <form role="form"  action="./admin.php?hlm=edit-teknologi&aksi=edit" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Icon</label>
                      <select  class="form-control select2" style="width: 100%;" name="icon" required="required">
                        <option value="<?php echo $rowsy['id_icon']; ?> "><?php echo $rowsy['deskripsi_icon']; ?></option>
                        <?php
                        $q = mysqli_query($koneksi, "SELECT jfx_icon_db.*
                          FROM jfx_icon_db");
                          while($data = mysqli_fetch_array($q)){
                            echo '<option style=" "  value="'.$data['id_icon'].'" >'.$data['deskripsi_icon'].'</option>';
                          }
                          ?>
                        </select>
                      </div>


                      <div class="form-group">
                        <label for="exampleInputPassword1">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="judul" value="<?php echo $rowsy['judul']; ?>" >
                        <input type="hidden" class="form-control" name="id" placeholder="judul" value="<?php echo $rowsy['id']; ?>" >
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Deskripsi</label>
                        <textarea  class="form-control" name="deskripsi" value="<?php echo $rowsy['deskripsi']; ?>"><?php echo $rowsy['deskripsi']; ?></textarea>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputPassword1">Isi</label>
                        <textarea  class="form-control" id="editor1" name="isi" value="<?php echo $rowsy['isi']; ?>"><?php echo $rowsy['isi']; ?></textarea>
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
            <form role="form"  action="./admin.php?hlm=home&aksi=kuning" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Icon</label>
                  <select  class="form-control select2" style="width: 100%;" name="icon" required="required">
                    <?php
                    $q = mysqli_query($koneksi, "SELECT jfx_icon_db.*
                      FROM jfx_icon_db");
                      while($data = mysqli_fetch_array($q)){
                        echo '<option style=" "  value="'.$data['id_icon'].'" >'.$data['deskripsi_icon'].'</option>';
                      }
                      ?>
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Judul</label>
                    <input type="text" class="form-control" name="judul" placeholder="judul" >
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea  class="form-control" name="deskripsi"></textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Isi</label>
                    <textarea  class="form-control" id="editor1" name="deskripsi"></textarea>
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
