
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




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA PROFILE MEMBER JFX
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"  >DATA PROFILE MEMBER JFX</li>
      </ol>

    </section>



    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
<div class="row">
 <form role="form"  action="./admin.php?hlm=foto_diri" method="post" enctype="multipart/form-data">
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
  <center><input type="file" name="fupload">
    <input type="hidden" name="id" value="<?php echo $idx; ?>"> <br>
 <img src="../../images/user/<?php echo $myData['img_user']; ?>" style="width: 200px" class="img-circle" alt="User Image">
</center>

 </div>
              </div>
                 <div style="float: right;">
                <button type="submit" class="btn btn-success" >
              Edit
              </button>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        </div>
        <!-- /.col (RIGHT) -->


 </form>


      <!-- Main row -->
<?php $nip =  $myData['nip']; ?>

 <form role="form"  action="./admin.php?hlm=data_diri" method="post" enctype="multipart/form-data">
  <!-- /.col (LEFT) -->
        <div class="col-md-5">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">DATA DIRI</h3>

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
  <tr>
    <th>NAMA</th>
    <th><input type="text" class="form-control" name="nama" value="<?php echo $myData['nama']; ?>">
<input type="hidden" class="form-control" name="id" value="<?php echo $idx; ?>">

    </th>
  </tr>
   <tr>
    <th>NIK</th>
    <th><input type="text" class="form-control" name="nik2" value="<?php echo $myData['nik']; ?>"></th>
  </tr>
   <tr>
    <th>KANTOR </th>
    <th><input type="text" class="form-control" name="office" value="<?php echo $myData['office']; ?>"></th>
  </tr>


</table>

 </div>
              </div>
               <div style="float: right;">
                <button type="submit" class="btn btn-success" >
              Edit
              </button>
            </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->



        </div>
        <!-- /.col (RIGHT) -->
  </form>


 <form role="form"  action="./admin.php?hlm=passcode" method="post" enctype="multipart/form-data">
  <!-- /.col (LEFT) -->
        <div class="col-md-4">
          <!-- LINE CHART -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">USERNAME DAN PASSWORD</h3>

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
  <tr>
    <th>USERNAME</th>
    <th><input type="text" class="form-control" name="username" value="<?php echo $myData['username']; ?>">
<input type="hidden" class="form-control" name="id" value="<?php echo $idx; ?>">
    </th>
  </tr>
<th>PASSWORD</th>
    <th><input type="text" class="form-control" name="password" required="required"></th>
  </tr>


</table>

 </div>
              </div>
               <div style="float: right;">
                <button type="submit" class="btn btn-success" >
              Edit
              </button>
            </div>
            </div>
            <!-- /.box-body -->

          </div>
          <!-- /.box -->



        </div>
        <!-- /.col (RIGHT) -->
  </form>



</div>




    </section>
    <!-- /.content -->
  </div>

<!--
<script src="js/ina.js"></script> -->





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
