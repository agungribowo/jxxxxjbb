
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
        include 'aksi/user/user_add.php';
        break;
      // case 'upload':
      // include 'upload_kementrian.php';
      break;
      case 'hapus':
        include '../../aksi/sysadmin/masterdat/delete_kementrian.php';
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
      <h3>Data Kementrian Realisasi</h3>
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
              <a href="./admin?hlm=upload" type="button" class="btn btn-primary" >
               Upload Data
              </a>
            </div>
            <!-- /.box-header -->
            <div class="box-body" >
               <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
                <thead>
               <tr>
                   <th  width="5%">No</th>
                  <th >Judul</th>
                  <th >Nama Eselon</th>
                  <th >Pagu Pegawai</th>
                  <th >Realisasi Pegawai</th>
                   <th >Pagu Barang</th>
                  <th >Realisasi Barang</th>
                   <th >Pagu Modal</th>
                  <th >Realisasi Modal</th>
                  <th >Tool</th>
                </tr>
                </thead>
                <tbody>';

   
      //skrip untuk menampilkan data dari database
      $sql = mysqli_query($koneksi, "SELECT  realisasi_kementrian.*
        FROM  realisasi_kementrian
        ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

         while($row = mysqli_fetch_array($sql)){
          $no++;



        echo '


                <tr>
                 <td>'.$no.'</td>
                 <td>'.$row['judul_kementrian'].'</td>
                  <td>'.$row['kode_eselon'].' || '.$row['nama_eselon'].'</td>
                  <td> ' . number_format($row['pagu_pegawai'],2,',','.').' </td>
                  <td> ' . number_format($row['realisasi_pegawai'],2,',','.').' </td>
                  <td> ' . number_format($row['pagu_barang'],2,',','.').' </td>
                   <td> ' . number_format($row['realisasi_barang'],2,',','.').' </td>
                     <td> ' . number_format($row['pagu_modal'],2,',','.').' </td>
                   <td> ' . number_format($row['realisasi_modal'],2,',','.').' </td>
                   <td>

                  <a href="?hlm=kementerian-realisasi&aksi=hapus&submit=yes&id_real='.$row['id_real'].'" onclick="return konfirmasi()" type="button" class="btn btn-danger" >Hapus</a></td>
                </tr>';
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

                <!--   <div class="form-group">
                  <label for="exampleInputPassword1">Role</label>
                   <select  class="form-control select2" style="width: 100%;" name="role" required="required">
                  
                 <option value=""  disable>--- Pilih data---</option>
      <?php

        $q = mysqli_query($koneksi, "SELECT * FROM role");
        while($data = mysqli_fetch_array($q)){
          echo '<option style="color: blue" value="'.$data['id_role'].'">'.$data['nama_role'].' ('.$data['id_role'].')</option>';
        }

      ?>
      </select>
                </div> -->


               <div class="form-group">
                  <label for="exampleInputPassword1">Kegiatan Akun </label>
                  <select  class="form-control select2" style="width: 100%;" name="unit" required="required">
                  
                 <option value=""  disable>--- Pilih data---</option>
                <?php

        $q = mysqli_query($koneksi, "SELECT * FROM akun_kegiatan
          ");
        while($data = mysqli_fetch_array($q)){
          echo '<option style="color: blue"  class="'.$data['id_akun'].'" value="'.$data['id_akun'].'">'.$data['id_akun'].' ('.$data['nama_akun'].')</option>';
        }

      ?>
     
      </select>
                </div>



                  <div class="form-group">
                 <!--  <label for="exampleInputPassword1">Unit</label> -->
                  <label for="exampleInputPassword1">Output</label>
                   <select  class="form-control select2" style="width: 100%;" name="unit" required="required">
                  
                 <option value=""  disable>--- Pilih data---</option>
                   <option value=""  >005</option>
                     <option value=""  >003</option>
     
      </select>
                </div>

                     <div class="form-group">
                <a href="">--tambah --</a>
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
"scrollY": 400,
});
$('.dataTables_length').addClass('bs-select');
});
</script>