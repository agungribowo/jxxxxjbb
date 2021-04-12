
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
        case 'edit_tentang':
        include '../../aksi/sysadmin/home/edit_tentang.php';
        break;

        case 'edit_visi':
        include '../../aksi/sysadmin/home/edit_visi.php';
        break;

        case 'edit_misi':
        include '../../aksi/sysadmin/home/edit_misi.php';
        break;

      break;
      case 'hapus':
        include '../../aksi/sysadmin/home/home_hapus.php';
        break;
    }
  } else {

echo '
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>TENTANG MANAJEMEN</h3>
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
            <form role="form"  action="./admin.php?hlm=tentang&aksi=edit_tentang" method="post" enctype="multipart/form-data">
            </div>
            <!-- /.box-header -->
            ';
            //skrip untuk menampilkan data dari database
              $sql22 = mysqli_query($koneksi, "SELECT jfx_tentang_kami.*
                FROM jfx_tentang_kami where id = 1
                ");
              if(mysqli_num_rows($sql22) > 0){
                $no = 0;

                 while($row22 = mysqli_fetch_array($sql22)){
                  $no++;
                echo '
                 <div class="box-body" >
                 <div class="form-group">
                   <label>Judul</label>
                   <input type="text" class="form-control" name="judul"  value="'.$row22['judul'].'">
                 </div>
              <table id="" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
                <thead>
               <tr>
                   <th width="5%">No</th>
                  <th>Isi : </th>
                  <th>Tool</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                 <td>'.$no.'</td>
                 <td><textarea class="form-control" id="editor1" name="editor1" rows="10" cols="80">'.$row22['isi'].'</textarea>
                 <input type="hidden" class="form-control"  name="id"  value="'.$row22['id'].'" />
                 </td>
                  <td> ';?>
                  <button onclick="return confirm('ANDA YAKIN AKAN MENGUBAH DATA INI ... ?')" type="submit" class="btn btn-warning" >Edit</button>
                </td>
                </tr><?php
                      }
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

    <section class="content">
      <div class="row" >
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <h3>DATA TENTANG VISI</h3>
                <form role="form"  action="./admin.php?hlm=tentang&aksi=edit_visi" method="post" enctype="multipart/form-data">
            </div>
            <!-- /.box-header -->
                 <div class="box-body" >
              <table class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
                <thead>
               <tr>
                   <th width="5%">No</th>
                  <th>Isi</th>
                  <th>Tool</th>
                </tr>
                </thead>
                <tbody>';
                    //skrip untuk menampilkan data dari database
                    $sql22 = mysqli_query($koneksi, "SELECT jfx_tentang_kami.*
                      FROM jfx_tentang_kami where id=2

                      ");
                    if(mysqli_num_rows($sql22) > 0){
                      $no = 0;

                       while($row22 = mysqli_fetch_array($sql22)){
                        $no++;
                      echo '
                              <tr>
                               <td>'.$no.'</td>
                               <td><textarea class="form-control" id="editor2" name="editor2" rows="10" cols="80">'.$row22['isi'].'</textarea>

                               <input type="hidden" class="form-control"  name="id"  value="'.$row22['id'].'" />

                               </td>
                                <td> ';?>
                                <button onclick="return confirm('ANDA YAKIN AKAN MENGUBAH DATA INI ... ?')" type="submit" class="btn btn-warning" >Edit</button>
                              </td>

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
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <section class="content">
      <div class="row" >
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
                <h3>DATA TENTANG MISI</h3>
                <form role="form"  action="./admin.php?hlm=tentang&aksi=edit_misi" method="post" enctype="multipart/form-data">
            </div>
            <!-- /.box-header -->
                 <div class="box-body" >
              <table class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
                <thead>
               <tr>
                   <th width="5%">No</th>
                  <th>Judul</th>
                  <th>Tool</th>
                </tr>
                </thead>
                <tbody>';
                    //skrip untuk menampilkan data dari database
                    $sql22 = mysqli_query($koneksi, "SELECT jfx_tentang_kami.*
                      FROM jfx_tentang_kami WHERE id=3

                      ");
                    if(mysqli_num_rows($sql22) > 0){
                      $no = 0;

                       while($row22 = mysqli_fetch_array($sql22)){
                        $no++;
                      echo '
                              <tr>
                               <td>'.$no.'</td>
                               <td><textarea class="form-control" id="editor4" name="editor4" rows="10" cols="80">'.$row22['isi'].'</textarea>

                               <input type="hidden" class="form-control"  name="id"  value="'.$row22['id'].'" />

                               </td>
                                <td> ';?>
                                <button onclick="return confirm('ANDA YAKIN AKAN MENGUBAH DATA INI ... ?')" type="submit" class="btn btn-warning" >Edit</button>
                              </td>

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
            </form>
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>




  </div>
';
  }
}
?>



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

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor4')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
