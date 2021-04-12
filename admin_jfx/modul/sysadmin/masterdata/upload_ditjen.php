
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
     <script src="upload/js/jquery.min.js"></script>

    <script>
    $(document).ready(function(){
      // Sembunyikan alert validasi kosong
      $("#kosong").hide();
    });
    </script>


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
        include '../../aksi/sysadmin/masterdat/import_ditjen.php';
        break;
      case 'tambah':
      include 'add_user.php';
      break;
      case 'hapus':
        include 'aksi/user/user_hapus.php';
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
      <h3>Data Upload Ditjen</h3>
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
            <a href="./admin?hlm=ditjen-realisasi" class="btn btn-danger pull-right">
        <span class="glyphicon glyphicon-remove"></span> Cancel
      </a>

      <h3>Form Import Data</h3>
      <hr>

              <!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
      <form method="post" action="" enctype="multipart/form-data">
       <a href="upload/downloadfile/ditjen_realisasi.xlsx" class="btn btn-default">
          <span class="glyphicon glyphicon-download"></span>
          Download Format
        </a><br><br>

        <!--
        -- Buat sebuah input type file
        -- class pull-left berfungsi agar file input berada di sebelah kiri
        -->
        <input type="file" name="file" class="pull-left">

        <button type="submit" name="preview" class="btn btn-success btn-sm">
          <span class="glyphicon glyphicon-eye-open"></span> Preview
        </button>
      </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x:auto;">
       ';
       ?>      
             <hr>

      <!-- Buat Preview Data -->
      <?php
      // Jika user telah mengklik tombol Preview
      if(isset($_POST['preview'])){
        //$ip = ; // Ambil IP Address dari User
        $nama_file_baru = 'data.xlsx';

        // Cek apakah terdapat file data.xlsx pada folder tmp
        if(is_file('upload/tmp/'.$nama_file_baru)) // Jika file tersebut ada
          unlink('upload/tmp/'.$nama_file_baru); // Hapus file tersebut

        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
        $tmp_file = $_FILES['file']['tmp_name'];

        // Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
        if($ext == "xlsx"){
          // Upload file yang dipilih ke folder tmp
          // dan rename file tersebut menjadi data{ip_address}.xlsx
          // {ip_address} diganti jadi ip address user yang ada di variabel $ip
          // Contoh nama file setelah di rename : data127.0.0.1.xlsx
          move_uploaded_file($tmp_file, 'upload/tmp/'.$nama_file_baru);

          // Load librari PHPExcel nya
          require_once 'upload/PHPExcel/PHPExcel.php';

          $excelreader = new PHPExcel_Reader_Excel2007();
          $loadexcel = $excelreader->load('upload/tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp
          $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);

          // Buat sebuah tag form untuk proses import data ke database
          // echo "<form method='post' action='../real_kementrian/import.php'>";
          echo "<form method='post' action='./admin.php?hlm=upload-ditjen&aksi=baru'>";

          // Buat sebuah div untuk alert validasi kosong
          echo "<div class='alert alert-danger' id='kosong'>
          Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
          </div>";

          echo "<table class='table table-bordered'>
          <tr>
            <th colspan='5' class='text-center'>Preview Data</th>
          </tr>
          <tr>
            <th>Kode Kegiatan</th>
            <th>Nama Kegiatan</th>
            <th>Pagu </th>
            <th>Realisasi</th>
          </tr>";

          $numrow = 1;
          $kosong = 0;
          foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel
            // Ambil data pada excel sesuai Kolom
            $nis = $row['A']; // Ambil data NIS
            $nama = $row['B']; // Ambil data nama
            $jenis_kelamin = $row['C']; // Ambil data jenis kelamin
            $telp = $row['D']; // Ambil data telepon

            // Cek jika semua data tidak diisi
            if($nis == "" && $nama == "" && $jenis_kelamin == "" && $telp == "")
              continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if($numrow > 1){
              // Validasi apakah semua data telah diisi
              $nis_td = ( ! empty($nis))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
              $nama_td = ( ! empty($nama))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
              $jk_td = ( ! empty($jenis_kelamin))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
              $telp_td = ( ! empty($telp))? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah

              // Jika salah satu data ada yang kosong
              if($nis == "" or $nama == "" or $jenis_kelamin == "" or $telp == "" ){
                $kosong++; // Tambah 1 variabel $kosong
              }

              echo "<tr>";
              echo "<td".$nis_td.">".$nis."</td>";
              echo "<td".$nama_td.">".$nama."</td>";
              echo "<td".$jk_td.">".$jenis_kelamin."</td>";
              echo "<td".$telp_td.">".$telp."</td>";
              echo "</tr>";
            }

            $numrow++; // Tambah 1 setiap kali looping
          
          }

          echo "</table>";

          // Cek apakah variabel kosong lebih dari 1
          // Jika lebih dari 1, berarti ada data yang masih kosong
          if($kosong > 1){
          ?>
            <script>
            $(document).ready(function(){
              // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
              $("#jumlah_kosong").html('<?php echo $kosong; ?>');

              $("#kosong").show(); // Munculkan alert validasi kosong
            });
            </script>
          <?php
          }else{ // Jika semua data sudah diisi
            echo "<hr>";

            // Buat sebuah tombol untuk mengimport data ke database
            echo "<button type='submit' name='import' class='btn btn-primary'><span class='glyphicon glyphicon-upload'></span> Import</button>";
          }

          echo "</form>";
        }else{ // Jika file yang diupload bukan File Excel 2007 (.xlsx)
          // Munculkan pesan validasi
          echo "<div class='alert alert-danger'>
          Hanya File Excel 2007 (.xlsx) yang diperbolehkan
          </div>";
        }
      }
      ?>
               
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
 <?php

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

