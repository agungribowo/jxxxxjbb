<?php 


include './peta/peta_rumus_bimtek_pbj.php';
?>
<style type="text/css">
  th {
    color: #000;
  }
  td {
    color: #000;
  }


</style>

<!-- amchart -->
<script src="https://www.amcharts.com/lib/4/core.js"></script>
<script src="https://www.amcharts.com/lib/4/charts.js"></script>
<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>


    <script type="text/javascript" src="../assets/js/amcharts/newAmcharts.js"></script>





 <script src="../assets/js/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/id/id-all.js"></script>

<?php


$id_pbj = $_REQUEST['id_pbj'];
  $sql = mysqli_query($koneksi, "SELECT user.* , petugas_pbj.*
        FROM user
        INNER JOIN petugas_pbj on user.nip=petugas_pbj.nip
         where user.nip = $id_pbj
        
        ");
    $myData = mysqli_fetch_array($sql);

?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <a href="?hlm=tot_bimtek" onclick="return konfirmasi()" type="button" class="btn btn-danger" >Kembali</a><br><br>
      <h1>
        DATA PROFILE PESERTA BIMTEK   
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">DATA PROFILE PESERTA BIMTEK</li>
      </ol>

    </section>



    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
<div class="row">

  <!-- /.col (LEFT) -->
        <div class="col-md-3">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">FOTO</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart" style="height: 300px">

 <div style=" margin: 0 auto">
  <center>
 <img src="../../images/user/<?php echo $myData['img_user']; ?>" style="width: 200px" class="img-circle" alt="User Image">
</center>

 </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
        <!-- /.col (RIGHT) -->


          <div class="col-md-9">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">DETAIL</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart" style="height: 300px">
 <table id="example" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
  <tr>
    <th>NAMA</th>
    <th>NIP</th>
    <th>LOKASI PELATIHAN</th>
  </tr>
  <tr>
    <td><?php echo $myData['nama']; ?></td>
     <td><?php echo $myData['nip']; ?></td>
    <td><?php echo $myData['lok_pelatihan']; ?></td>
  </tr>
</table>
<br>
<table id="example" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
  <tr>
    <th>INSTANSI</th>
    <th>JENIS PELATIHAN</th>
    <th>LOKASI BEKERJA</th>
  </tr>
  <tr>
    <td><?php echo $myData['instansi']; ?></td>
     <td><?php echo $myData['jns_pelatihan']; ?></td>
    <td><?php echo $myData['lok_bekerja']; ?></td>
  </tr>
</table>

<br>
<table id="example" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
  <tr>
    <th>JABATAN</th>
    <th>TAHUN PELATIHAN</th>
  </tr>
  <tr>
    <td><?php echo $myData['jabatan']; ?></td>
     <td><?php echo $myData['thn_pelatihan']; ?></td>
  </tr>
</table>

 <div >


 </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
        <!-- /.col (RIGHT) -->
      </div>


      <!-- Main row -->
<?php $nip =  $myData['nip']; ?>

<div class="row">
  
  <!-- /.col (LEFT) -->
        <div class="col-md-4">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">KEGIATAN PENYULUHAN DAERAH</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart" >

 <div style=" margin: 0 auto">
<?php echo $myData['keg_penyuluhan']; ?>
 </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
        <!-- /.col (RIGHT) -->


  <!-- /.col (LEFT) -->
        <div class="col-md-4">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">FOTO KEGIATAN PEYULUHAN</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart" >

 <div style=" margin: 0 auto">
  <table id="example" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
                <thead style="border: 1px red; border: 1px solid #ddd;">
                <tr >
          <th  class="th-sm" style="font-size: 14px; font-weight: bold;">FOTO</th>
          <th class="th-sm" style="font-size: 14px; font-weight: bold;">KETERANGAN</th>
        

               <!--    <th class="no-print" rowspan="2">TOOL</th> -->
                </tr>
             <!--    <tr>
                     <th>DIKMA</th>
                     <th>DIKBANG</th>
                </tr> -->
                </thead>
                <tbody>
                     <?php
  $mySql = "SELECT foto_keg.*
   FROM foto_keg
   WHERE id_petugas = '$id_pbj' order by id_foto desc limit 10 ";
  $myQry = mysqli_query( $koneksi, $mySql)  or die ("Query salah : ".mysql_error());
  $nomor = 0;
  while ($myData = mysqli_fetch_array($myQry)) {
    $nomor++;
    
  ?>
                <tr>
          <td><a href="" class="view_data" data-toggle="modal" id="<?php echo $myData['id_foto']?>" data-target="#myModal"><?php echo $myData['foto']; ?></a></td>
            <td><?php echo $myData['keterangan']; ?></td>
          


                </tr>
  <?php } ?>
                </tbody>
    <tfoot>
          <tr>
          <th  class="th-sm" style="font-size: 14px; font-weight: bold;">FOTO</th>
          <th class="th-sm" style="font-size: 14px; font-weight: bold;">KETERANGAN</th>
        </tfoot>
              </table>
 </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
        <!-- /.col (RIGHT) -->


  <!-- /.col (LEFT) -->
        <div class="col-md-4">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">MODUL PEYULUHAN</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="chart" >

 <div style=" margin: 0 auto">
  <table id="example" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
                <thead style="border: 1px red; border: 1px solid #ddd;">
                <tr >
          <th  class="th-sm" style="font-size: 14px; font-weight: bold;">MODUL</th>
          <th class="th-sm" style="font-size: 14px; font-weight: bold;">TGL UPLOAD</th>
        

               <!--    <th class="no-print" rowspan="2">TOOL</th> -->
                </tr>
             <!--    <tr>
                     <th>DIKMA</th>
                     <th>DIKBANG</th>
                </tr> -->
                </thead>
                <tbody>
                     <?php
  $mySql1 = "SELECT mod_penyuluhan.*
   FROM mod_penyuluhan
   WHERE id_petugas = '$id_pbj' ";
  $myQry1 = mysqli_query( $koneksi, $mySql1)  or die ("Query salah : ".mysql_error());
  $nomor = 0;
  while ($myData1 = mysqli_fetch_array($myQry1)) {
    $nomor++;
    
  ?>
                <tr>
           <td><a href="" class="view_data1" data-toggle="modal" id="<?php echo $myData1['id']?>" data-target="#myModal1"><?php echo $myData1['modul']; ?></a></td>
            <td><?php echo $myData1['tgl_upload']; ?></td>
          


                </tr>
  <?php } ?>
                </tbody>
    <tfoot>
          <tr>
          <th  class="th-sm" style="font-size: 14px; font-weight: bold;">MODUL</th>
          <th class="th-sm" style="font-size: 14px; font-weight: bold;">TGL UPLOAD</th>
        </tfoot>
              </table>
 </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
        <!-- /.col (RIGHT) -->
</div>

    </section>
    <!-- /.content -->
  </div>

<!--
<script src="js/ina.js"></script> -->





        <!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Data </h4>
        </div>
        <!-- memulai untuk konten dinamis -->
        <!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
        <div class="modal-body" id="data_siswa">
        </div>
        <!-- selesai konten dinamis -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

   <!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel1">Data </h4>
        </div>
        <!-- memulai untuk konten dinamis -->
        <!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
        <div class="modal-body" id="data_siswa1">
        </div>
        <!-- selesai konten dinamis -->
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

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

    <script>
  // ini menyiapkan dokumen agar siap grak :)
  $(document).ready(function(){
    // yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
    $('.view_data1').click(function(){
      // membuat variabel id, nilainya dari attribut id pada button
      // id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
      var id = $(this).attr("id");

      // memulai ajax
      $.ajax({
        url: 'modul_peserta/view_modul.php',  // set url -> ini file yang menyimpan query tampil detail data siswa
        method: 'post',   // method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
        data: {id:id},    // nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
        success:function(data){   // kode dibawah ini jalan kalau sukses
          $('#data_siswa1').html(data);  // mengisi konten dari -> <div class="modal-body" id="data_siswa">
          $('#myModal1').modal("show");  // menampilkan dialog modal nya
        }
      });
    });
  });
  </script>