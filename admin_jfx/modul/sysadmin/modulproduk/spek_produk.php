<?php   $kode_kontrak = $_REQUEST['kode_kontrak']; ?>
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
        include '../../aksi/sysadmin/produk/spek_produk_add.php';
        break;
      case 'edit':
      include 'spek_edit.php';
      break;
      case 'hapus':
        include '../../aksi/sysadmin/produk/spek_produk_hapus.php';
        break;

        case 'upload':
          include '../../aksi/sysadmin/produk/upload.php';
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
      <h3>Data Spek Produk</h3>

              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default1">
                 UNGGAH DATA PDF
                </button>

                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default2">
                   LIHAT DATA PDF
                  </button>

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
               Input Data
              </button>
              <a href="admin?hlm=produk" type="button" class="btn btn-danger">
              Kembali
                </a>

            </div>
            <!-- /.box-header -->
                 <div class="box-body" >
              <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
                <thead>
               <tr>
                   <th width="5%">No</th>
                  <th>Kode Kontrak</th>
                  <th>Urut Modul</th>
                  <th>Modul</th>
                   <th>Deskripsi</th>
                  <th>Tool</th>
                </tr>
                </thead>
                <tbody>';


      //skrip untuk menampilkan data dari database
      $sql = mysqli_query($koneksi, "SELECT jfx_spesifikasi_modul.*
        FROM jfx_spesifikasi_modul WHERE kode_kontrak = '$kode_kontrak'

        ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

         while($row = mysqli_fetch_array($sql)){
          $no++;



        echo '


                <tr>
                 <td>'.$no.'</td>
                 <td>'.$row['kode_kontrak'].'</td>
                  <td>'.$row['urut_modul'].'</td>
                  <td>'.$row['modul'].'</td>
                 <td> <textarea class="form-control" readonly> '.$row['deskripsi'].'</textarea> </td>

                                 ';


                                ?>
                   <td>
<a href="?hlm=spek_produk&aksi=edit&submit=yes&id_spek=<?php echo $row['id_spek']; ?>&kode_kontrak=<?php echo $row['kode_kontrak']; ?>"  onclick=" return confirm('ANDA YAKIN AKAN EDIT DATA INI ... ?')"  type="button" class="btn btn-warning" >Edit</a>


   <a href="?hlm=spek_produk&aksi=hapus&submit=yes&id_spek=<?php echo $row['id_spek']; ?>&kode_kontrak=<?php echo $row['kode_kontrak']; ?>"  onclick=" return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ... ?')"  type="button" class="btn btn-danger" >Hapus</a></td>
                               </tr>

                               <?php
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
                <form role="form"  action="./admin.php?hlm=spek_produk&aksi=baru" method="post" enctype="multipart/form-data">
              <div class="box-body">


                <div class="form-group">
                  <label for="exampleInputPassword1">Urutan Modul</label>
                  <input type="number" class="form-control" name="urut" min="1" >
                  <input type="hidden" class="form-control" name="kode_kontrak" value="<?php echo $kode_kontrak; ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Modul</label>
                  <input type="text" class="form-control" name="modul" placeholder="Isi Modul">
                </div>



                <div class="form-group">
                  <label for="exampleInputPassword1">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" placeholder="Deskripsi"></textarea>
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






            <div class="modal fade" id="modal-default1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Upload Data</h4>
                      </div>
                      <div class="modal-body">
                        <form role="form"  action="./admin.php?hlm=spek_produk&aksi=upload" method="post" enctype="multipart/form-data">
                      <div class="box-body">


                        <div class="form-group">
                          <label for="exampleInputPassword1">Unggah</label>
                          <input type="file" class="form-control" name="fupload"  >
                          <input type="hidden" class="form-control" name="kode_kontrak" value="<?php echo $kode_kontrak; ?>">
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



                            <div class="modal fade" id="modal-default2">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Upload Data</h4>
                                      </div>
                                      <div class="modal-body">

                                      <div class="box-body">

<?php
$sql = mysqli_query($koneksi, "SELECT jfx_produk.*
  FROM jfx_produk
  WHERE kode_kontrak = '$kode_kontrak'

  ");
$row = mysqli_fetch_array($sql);

?>

                                        <embed type="application/pdf" src="../../file_upload/<?php echo $row['file_upload']; ?>" width="100%" height="700px"></embed>



                                      </div>
                                      <!-- /.box-body -->



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
