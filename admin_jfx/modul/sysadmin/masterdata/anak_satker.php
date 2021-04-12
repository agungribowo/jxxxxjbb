<?php

$carikode = mysqli_query($koneksi, "SELECT * from agenda where ta_agenda = '2019'") or die (mysqli_error());
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  $jumlah_data = mysqli_num_rows($carikode);
  // jika $datakode
  if ($datakode) {
   // membuat variabel baru untuk mengambil kode barang mulai dari 1
   $nilaikode = substr($jumlah_data[0], 1);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $jumlah_data + 1;
   // hasil untuk menambahkan kode 
   // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
   // atau angka sebelum $kode
   $kode_otomatis = "0".str_pad($kode, 2, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "001";
  }

?>
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
        include '../../aksi/pelaksana/agenda_add.php';
        break;
      // case 'edit':
      //  include 'transaksi_edit.php';
      //  break;
      case 'hapus':
        include '../../aksi/sysadmin/agenda/agenda_hapus.php';
        break;
      // case 'cetak':
      //  include 'cetak_nota.php';
      //  break;
    }
  } else {

$hasilid = $_SESSION['id'];
echo '




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>Laporan Pagu Dana Per Kegiatan</h3>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body" >
              <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
                <thead>

              
                  <tr>
                   <th>NO</th>
                  <th>Kode | Nama Kegiatan</th>
                  <th>Pagu</th>
                  <th>Realisasi</th>
                  <th>Persentase</th>
                  <th>Oustanding Kontrak</th>
                  <th>Jumlah Diblok / revisi </th>
                  <th>Dana Tersedia</th>
                </tr>
                </thead>
                <tbody>';

      //skrip untuk menampilkan data dari database
      $sql = mysqli_query($koneksi, "SELECT agenda.*, user.* 
        FROM agenda
        left join user on agenda.user_agenda= user.id
          ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

         while($row = mysqli_fetch_array($sql)){
          $no++;
        echo '


                <tr>
                <td>'.$no.'</td>
                  <td>249396 |PENEMPATAN TENAGA KERJA DALAM NEGERI</td>
                   <td>
                    ' . number_format($row['anggaran'],2,',','.').'  
                   </td>
                   <td>
                    ' . number_format($row['anggaran'],2,',','.').'  
                   </td>
                   <td>
                   77.61%
                   </td>
                    <td>
                   72.500.000
                   </td>
                    <td>
                   0 
                   </td>
                    <td>
                    ' . number_format($row['anggaran'],2,',','.').'  
                   </td>
                 
                   
                </tr>
';
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

<?php $petugas_lv= $_SESSION['id'];?>
    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data</h4>
              </div>
              <div class="modal-body"> 
                <form role="form"  action="./admin.php?hlm=agenda_kegiatan&aksi=baru" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Kode</label>
                  <input type="text" class="form-control" name="kode_agenda" placeholder="Kode" value="<?php echo $kode_otomatis; ?>/<?php echo "" . (int)date('Y'). "" ?>">
                  
                   <input type="hidden" class="form-control" name="id_user" value="<?php echo $petugas_lv; ?>" >
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama Agenda</label>
                  <input type="text" class="form-control" name="nama_agenda" placeholder="Nama">
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Tahun Anggaran</label>
                  <input type="text" class="form-control" name="ta" placeholder="contoh : 2019" value="<?php echo "" . (int)date('Y'). "" ?>">
                </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1">Pengajuan Anggaran Rp. </label>
                <!--   <input type="text" id="rupiah" class="form-control" name="anggaran" placeholder="masukan nominal anggaran"> -->
                    <input type="text"  class="form-control" name="anggaran" placeholder="masukan nominal anggaran">
                </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1">Pengajuan Rencana Kegiatan </label>
                <!--   <input type="text" id="rupiah" class="form-control" name="anggaran" placeholder="masukan nominal anggaran"> -->
                <select name="bulan_keg" class="form-control" >
                  <option value="" >-- pilih bulan -- </option>
                  <option value="Januari" >Januari</option>
                  <option value="Febuari">Febuari</option>
                  <option value="Maret">Maret</option>
                  <option value="April">April</option>
                  <option value="Mei">Mei</option>
                  <option value="Juni">Juni</option>
                  <option value="Juli">Juli</option>
                  <option value="Agustus">Agustus</option>
                  <option value="September">September</option>
                  <option value="Oktober">Oktober</option>
                  <option value="November">November</option>
                  <option value="Desember">Desember</option>
                </select>
                </div>

             
               
                 <div class="form-group">
                  <label for="exampleInputPassword1">Output  </label>
                  <select  class="form-control select2" style="width: 100%;" name="output_agenda" required="required">
                  
                 <option value=""  disable>--- Pilih data---</option>
                   <?php

        $q = mysqli_query($koneksi, "SELECT output_user_list.*, user.*
         FROM output_user_list 
         LEFT JOIN user on output_user_list.id_user=user.id 
        where id_user = '$hasilid'  and user.akun_kegiatan = '5096'

          ");
        while($data = mysqli_fetch_array($q)){
          echo '<option style="color: blue"  class="'.$data['id_output'].'" value="'.$data['id_output'].'">'.$data['id_output'].' ('.$data['nama_akun_out'].')</option>';
        }

      ?>
     
      </select>
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