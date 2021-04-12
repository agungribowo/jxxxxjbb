   <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../../plugins/iCheck/all.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">
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

  if( isset( $_REQUEST['submit'] )){

    $no_nota = $_REQUEST['no_nota'];
    $jenis = $_REQUEST['jenis'];
    $nama = $_REQUEST['nama'];
    $bayar = $_REQUEST['bayar'];
    $kembali = $_REQUEST['kembali'];
    $total = $_REQUEST['total'];
    $id_user = $_SESSION['id_user'];

    $sql = mysqli_query($koneksi, "INSERT INTO transaksi(no_nota, jenis, nama, bayar, kembali, total, tanggal, id_user) VALUES('$no_nota', '$jenis', '$nama', '$bayar', '$kembali', '$total', NOW(), '$id_user')");

    if($sql == true){
      header('Location: ./admin.php?hlm=transaksi');
      die();
    } else {
      echo 'ERROR! Periksa penulisan querynya.';
    }
  } else {
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Tambah Rencana Kegiatan
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <a href="./admin.php?hlm=agenda_kegiatan" type="button" class="btn btn-primary" >Kembali</a>
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
<?php
 // $no_agenda = isset($_GET['kode_agenda']) ?  $_GET['kode_agenda'] : ''; 
  $no_agenda = $_REQUEST['kode_agenda'];
 $sql1 = mysqli_query($koneksi, "SELECT agenda.*
        FROM agenda WHERE kode_agenda='$no_agenda'
        ");
 $row1 = mysqli_fetch_array($sql1);
?>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Nomor Surat</label> 
               <input class="form-control" type="text" value=" <?php echo $row1['kode_agenda']; ?>  " readonly="readonly"/> 
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
               <label>Nama Kegiatan</label>
               <input class="form-control" type="text" value="<?php echo $row1['nama_agenda']; ?> " readonly="readonly" /> 
              </div>
            </div>
         
          </div>
          <!-- /.row -->

<div class="row">

     <!-- /.col -->
            <div class="col-md-6">
               <div class="form-group">
                <label>Tanggal Kegiatan:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <!-- /.col -->
       
            <!-- /.col -->
            <div class="col-md-6">
               <div class="form-group">
                <label>Tanggal Akhir Kegiatan:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->



 <div class="row">
              <div class="col-md-6">
               <div class="form-group">
                <label>Rencana Anggaran Kegiatan</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    Rp
                  </div>
                  <input type="text" class="form-control" value=" <?php echo $row1['anggaran']; ?>  "  readonly="readonly">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>
            <!-- /.col -->
          
          </div>
          <!-- /.row -->

 <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Menimbang</label>
            <textarea id="editor3" name="editor3" rows="10" cols="80">
                                            menimbang
                    </textarea>
            </div>
          
          </div>
        </div>
          <!-- /.row -->


 <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Dasar</label>
         
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
1. Undang-undang Nomor 5 Tahun 2018 tentang Perubahan atas Undang-undang Nomor 15 Tahun 2003 tentang Penetapan Peraturan Pemerintah Pengganti Undang-undang Nomor 1 Tahun 2002 tentang Pemberantasan Tindak Pidana Terorisme menjadi Undang-undang;<br>
2.  Peraturan Presiden Nomor 46 Tahun 2010 tentang Badan Nasional Penanggulangan Terorisme sebagaimana telah diubah dengan Peraturan Presiden Nomor 12 Tahun 2012;<br>
3.  Peraturan Kepala Badan Nasional Penanggulangan Terorisme Nomor Per-01/K.BNPT/I/2017 tentang Organisasi dan Tata Kerja Badan Nasional Penanggulangan Terorisme;<br>
4.  Daftar Isian Pelaksanaan Anggaran (DIPA) Badan Nasional Penanggulangan Terorisme Tahun Anggaran 2019.

                    </textarea>
      
                  
              </div>
            </div>
          
          </div>
          <!-- /.row -->




        </div>
        <!-- /.box-body -->
        
      </div>
      <!-- /.box -->


<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" style="background-color: #fcf8e3;">
            <h3><b>Untuk</b></h3>
            </div>
            <!-- /.box-header -->
            
            <br>
            <div class="box-body">
          
 <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Untuk </label>
            <textarea id="editor2" name="editor2" rows="10" cols="80">
                                            isikan dasar
                    </textarea>
       
              </div>
            </div>
          
          </div>
          <!-- /.row -->



           
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->



<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header" style="background-color: #d9edf7;">
            <h3><b>Daftar Nama Pegawai</b></h3>
            </div>
            <!-- /.box-header -->
            
            <br>
            <div class="box-body">
            <table id="dataTable"  class="table table-bordered table-hover">
               <tr>
                 <th width="5%">Ceklis</th>
                 <th>No</th>
                  <th>Nama</th>
                  <th>NIP</th>
                  <th>Pangkat</th>
                   <th>Jabatan</th>
                
                  
                </tr>

             
<tr>
    <td style="text-align: center;" > <input  name="chk" type="checkbox" /></td>
   <td></td>
                 <td></td>
                   <td></td>
                  <td></td>
                  <td></td>
  </tr>


</table>
           
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->




<div class="row">
        <div class="col-xs-12">
       
          <div style="float: right;">
 <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
              Simpan
              </button>

            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php
  }
}
?>

<!-- Bootstrap 3.3.7 -->
<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="../../bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
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
<!-- Page script -->

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>


  <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/js/jquery.chained.min.js"></script>
        <script>
            $("#kota").chained("#provinsi");
            $("#kecamatan").chained("#kota");
            $("#kelurahan").chained("#kecamatan");
        </script>

            <script>
            $("#kota1").chained("#provinsi1");
            $("#kecamatan1").chained("#kota1");
            $("#kelurahan1").chained("#kecamatan1");
        </script>

