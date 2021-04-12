
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
      include '../../aksi/pelaksana/kegiatan/foto_keg.php';
      break;
      break;
      case 'hapus':
      include '../../aksi/pelaksana/kegiatan/foto_hapus.php';
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
    <h3>Data Laporan Perdagangan</h3>
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
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
    Input Data
    </button>

    </div>

    <div class="box-body" style="overflow-x:auto;">
    <table id="example" class="table table-striped table-bordered table-sm " cellspacing="0"
    width="100%">

    <thead>
    <tr>
    <th width="5%">No</th>
    <th >Tanggal Laporan</th>
    <th >Nama Dokumen</th>
    <th>File</th>
    <th>Tanggal Upload</th>
    <th>Status</th>
    <th >Tool</th>
    </tr>
    </thead>
    <tbody>';

    //skrip untuk menampilkan data dari database
    $sql = mysqli_query($koneksi, " SELECT jfx_laporan.* FROM jfx_laporan ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;
        while($row = mysqli_fetch_array($sql)){
          $no++;
          echo '
          <tr>
          <td>'.$no.'</td>
          <td>'.$row['tgl_laporan'].'</td>
          <td>'.$row['nama'].'</td>
          <td> '.$row['file_upload'].'</td>
          <td>'.$row['tgl_upload'].'</td>
          <td>'.$row['status'].'</td>
          <td> ';?>
            <a href="?hlm=laporan&aksi=hapus&submit=yes&id=<?php echo $row['id'] ?>" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ... ?')" type="button" class="btn btn-danger" >Hapus</a>
          </td>
          </tr>
          <?php
        }
      } else {
        echo '<td colspan="10"><center><p class="add">Tidak ada data untuk ditampilkan. </p></center></td></tr>';
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
            <form role="form"  action="./admin?hlm=laporan_tambah" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Laporan</label>
                  <input type="date" class="form-control" name="tgl_laporan"></input>
                  <input type="hidden" class="form-control" name="id" value="<?php echo $idx ?>">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Dokumen</label>
                  <input type="text" class="form-control" name="nama"></input>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">File Laporan</label>
                  <input type="file" class="form-control" name="fupload" >
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
s
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->


    <script>
    // ini menyiapkan dokumen agar siap grak :)
    $(document).ready(function(){
      // yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
      $('.view_data').click(function(){
        // membuat variabel id, nilainya dari attribut id pada button
        // id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
        var id = $(this).attr("id");

        // memulai ajax
        $.ajax({
          url: 'modul_peserta/view.php',  // set url -> ini file yang menyimpan query tampil detail data siswa
          method: 'post',   // method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
          data: {id:id},    // nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
          success:function(data){   // kode dibawah ini jalan kalau sukses
            $('#data_siswa').html(data);  // mengisi konten dari -> <div class="modal-body" id="data_siswa">
            $('#myModal').modal("show");  // menampilkan dialog modal nya
          }
        });
      });
    });
    </script>

    <script type="text/javascript">
    $(document).ready(function () {
      $('#dtHorizontalVerticalExample').DataTable({
        "scrollX": true,
        "scrollY": 400,
      });
      $('.dataTables_length').addClass('bs-select');
    });
  </script>
