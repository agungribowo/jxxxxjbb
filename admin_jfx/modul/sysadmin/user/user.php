
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
        include '../../aksi/sysadmin/user/user_add.php';
        break;
      case 'edit':
      include 'edit_user.php';
      break;
      case 'hapus':
        include '../../aksi/sysadmin/user/user_hapus.php';
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
      <h3>Data Admin</h3>
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
            </div>
            <!-- /.box-header -->
                 <div class="box-body" >
              <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
                <thead>
               <tr>
                   <th width="5%">No</th>
                  <th>Level</th>
                  <th>Username</th>
                  <th>Nama</th>
                   <th>Expired time</th>
                  <th>Register time</th>
                  <th>Block</th>
                  <th>Tool</th>
                </tr>
                </thead>
                <tbody>';


      //skrip untuk menampilkan data dari database
      $sql = mysqli_query($koneksi, "SELECT user.*
        FROM user where level  = 'sysadmin'

        ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

         while($row = mysqli_fetch_array($sql)){
          $no++;

          $datastatus = $row['status_user'];

          if ($datastatus == 'Active') {
            $hasilstatus = '<button type="button" class="btn btn-success" >'.$row['status_user'].'  </button>';

          } elseif ($datastatus == 'Disable') {
             $hasilstatus = '<button type="button" class="btn btn-warning" >'.$row['status_user'].'  </button>';
          }

        echo '


                <tr>
                 <td>'.$no.'</td>
                 <td>'.$row['level'].' <hr>
                 '.$row['subdit'].' </td>
                  <td>'.$row['username'].'</td>
                  <td>'.$row['nama'].'</td>
                    <td>'.$row['expired_date'].'</td>
                 <td>'.$row['register_date'].'</td>
                   <td> '.$hasilstatus.'</td>
                   <td>
<a href="?hlm=user&aksi=edit&id_user='.$row['id'].'" onclick="return konfirmasi()" type="button" class="btn btn-warning" >Edit</a>

                  <a href="?hlm=user&aksi=hapus&submit=yes&id_user='.$row['id'].'" type="button" class="btn btn-danger" >Hapus</a></td>
                </tr>';
        }
      } else {
         echo '<td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u><a href="?hlm=transaksi&aksi=baru">Tambah data baru</a></u> </p></center></td></tr>';
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
                <form role="form"  action="./admin.php?hlm=user&aksi=baru" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" name="username_user" placeholder="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password_user" placeholder="password">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">nama petugas</label>
                  <input type="text" class="form-control" name="nama_user" placeholder="nama">
                </div>


             <div class="form-group">
                  <label for="exampleInputPassword1">Level</label>
                   <select  class="form-control select2" style="width: 100%;" name="level_user" required="required">

                 <option value=""  disable>--- Pilih data---</option>
                <option value="sysadmin">admin</option>
              <!--   <option value="pelaksana">pelaksana </option> -->
      </select>
                </div>


             <div class="form-group">
                  <label for="exampleInputPassword1">Status</label>
                   <select  class="form-control select2" style="width: 100%;" name="status_user" required="required">

                 <option value=""  disable>--- Pilih data---</option>
                <option value="Active">Active</option>
                <option value="Disable">Disable </option>
      </select>
                </div>





                 <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Expired Admin</label>
                  <input type="date" class="form-control" name="expired" placeholder="nama">
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
