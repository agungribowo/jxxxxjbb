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
       Tambah User
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
          <a href="./admin.php?hlm=user" type="button" class="btn btn-primary" >Kembali</a>
          

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Username</label>
                 <input type="text" name="username_user" class="form-control" >
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password_user" placeholder="password">
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4">
               <div class="form-group">
                <label>Expired login:</label>

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
      <!-- /.col -->
           <div class="col-md-4">
              <div class="form-group">
                <label>Status User</label>
                <select  class="form-control select2" style="width: 100%;" name="unit" required="required">
                  
                 <option value=""  disable>--- Pilih data---</option>
                 <option value="Active" > Active </option>
             <option value="Disable" > Disable </option>
             
             
     
      </select>
              </div>
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label>Unit</label>
                <select  class="form-control select2" style="width: 100%;" name="unit" required="required">
                  
                 <option value=""  disable>--- Pilih data---</option>
                <?php

        $q = mysqli_query($koneksi, "SELECT * FROM unit
          ");
        while($data = mysqli_fetch_array($q)){
          echo '<option style="color: blue"  class="'.$data['id_unit'].'" value="'.$data['id_unit'].'">'.$data['id_unit'].' ('.$data['nama_unit'].')</option>';
        }

      ?>
     
      </select>
              </div>
            </div>


            <div class="col-md-4">
              <div class="form-group">
                <label>Kegiatan akun</label>
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
            </div>
            <!-- /.col -->


          
          
          </div>
          <!-- /.row -->


        <div class="row">
      <!-- /.col -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Output</label>
                   <select  class="form-control select2" style="width: 100%;" name="output" required="required">
                  
                 <option value=""  disable>--- Pilih data---</option>
                <?php

        $q = mysqli_query($koneksi, "SELECT * FROM output_akun
          ");
        while($data = mysqli_fetch_array($q)){
          echo '<option style="color: blue"  class="'.$data['akun_out'].'" value="'.$data['akun_out'].'">'.$data['akun_out'].' ('.$data['nama_output'].')</option>';
        }

      ?>
     
      </select>
              </div>
            </div>


            <!-- /.col -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Output</label>
                   <select  class="form-control select2" style="width: 100%;" name="output" required="required">
                  
                 <option value=""  disable>--- Pilih data---</option>
                <?php

        $q = mysqli_query($koneksi, "SELECT * FROM output_akun
          ");
        while($data = mysqli_fetch_array($q)){
          echo '<option style="color: blue"  class="'.$data['akun_out'].'" value="'.$data['akun_out'].'">'.$data['akun_out'].' ('.$data['nama_output'].')</option>';
        }

      ?>
     
      </select>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4">
              <div class="form-group">
                <label>Output</label>
                   <select  class="form-control select2" style="width: 100%;" name="output" required="required">
                  
                 <option value=""  disable>--- Pilih data---</option>
                <?php

        $q = mysqli_query($koneksi, "SELECT * FROM output_akun
          ");
        while($data = mysqli_fetch_array($q)){
          echo '<option style="color: blue"  class="'.$data['akun_out'].'" value="'.$data['akun_out'].'">'.$data['akun_out'].' ('.$data['nama_output'].')</option>';
        }

      ?>
     
      </select>
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
   
          <div style="float: right;">
 <button type="button" class="btn btn-success" >
              Save
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

<!-- <script src="../../bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="../../bower_components/moment/min/moment.min.js"></script>
<script src="../../bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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

