
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
      include '../../aksi/sysadmin/produk/produk_add.php';
      break;
      case 'edit':
      include 'produk_edit.php';
      break;
      case 'hapus':
      include '../../aksi/sysadmin/produk/produk_hapus.php';
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
    <h3>Data Produk</h3>
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
    <th>Kode Kontrak</th>
    <th>kategori</th>
    <th>Nama Produk</th>
    <th>Definisi</th>
    <th>Tool</th>
    </tr>
    </thead>
    <tbody>';


    //skrip untuk menampilkan data dari database
    $sql = mysqli_query($koneksi, "SELECT jfx_produk.*, jfx_kategori.*
      FROM jfx_produk
      INNER JOIN jfx_kategori on jfx_produk.id_kategori=jfx_kategori.id_kategori

      ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

        while($row = mysqli_fetch_array($sql)){
          $no++;
          echo '
          <tr>
          <td>'.$no.'</td>
          <td> <a href="./admin?hlm=spek_produk&kode_kontrak='.$row['kode_kontrak'].' ">'.$row['kode_kontrak'].' </a></td>
          <td>'.$row['kategori'].'</td>
          <td>'.$row['nama_produk'].'</td>
          <td> <textarea class="form-control" readonly> '.$row['definisi'].'</textarea> </td>
          ';
          ?>
          <td>
            <a href="?hlm=produk&aksi=edit&submit=yes&id_produk=<?php echo $row['kode_kontrak']; ?>"  onclick=" return confirm('ANDA YAKIN AKAN EDIT DATA INI ... ?')"  type="button" class="btn btn-warning" >Edit</a>
            <a href="?hlm=produk&aksi=hapus&submit=yes&id_produk=<?php echo $row['kode_kontrak']; ?>"  onclick=" return confirm('ANDA YAKIN AKAN MENGHAPUS DATA INI ... ?')"  type="button" class="btn btn-danger" >Hapus</a></td>
          </tr>
          <?php
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
            <form role="form"  action="./admin.php?hlm=produk&aksi=baru" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode Kontrak</label>
                  <!-- <input type="text" class="form-control" name="kode_kontrak" placeholder="GOL"> -->
                  <select  class="form-control select2" style="width: 100%;" name="kode_kontrak" required="required">
                    <option value=""  disable>--- Pilih data---</option>
                    <?php
                    $q = mysqli_query($koneksi, "SELECT jfx_contract.*
                      FROM jfx_contract
                      ");
                      while($data = mysqli_fetch_array($q)){
                        echo '<option    value="'.$data['ContractID'].'">'.$data['ContractID'].' ('.$data['ContractName'].')</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Kategori</label>
                    <select  class="form-control select2" style="width: 100%;" name="kategori" required="required">

                      <option value=""  disable>--- Pilih data---</option>
                      <?php

                      $q = mysqli_query($koneksi, "SELECT jfx_kategori.*
                        FROM jfx_kategori


                        ");
                        while($data = mysqli_fetch_array($q)){
                          echo '<option    value="'.$data['id_kategori'].'">'.$data['kategori'].'</option>';
                        }

                        ?>

                      </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Nama Produk</label>
                      <input type="text" class="form-control" name="nama_produk" placeholder="KONTRAK BERJANGKA EMAS 1 KG">
                    </div>

                    <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Nama Produk Slug</label>
                    <input type="text" class="form-control" name="nama_produk_slug" placeholder="kontrak_berjangka_emas_1_kg">
                  </div> -->



                  <div class="form-group">
                    <label for="exampleInputPassword1">Definisi</label>
                    <textarea class="form-control" name="definisi" placeholder="definisi"></textarea>
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
