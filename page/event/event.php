<!-- DataTables -->
<link rel="stylesheet" href="./admin_jfx/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<!-- start page title section -->
<section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('images/jfx/bg-custom-header.jpg');">
  <div class="opacity-medium bg-extra-dark-gray"></div>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
        <!-- start sub title -->
        <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">Kalender Event & Webinar JFX</span>
        <!-- end sub title -->
        <!-- start page title -->
        <h1 class="alt-font text-white-2 font-weight-600 mb-0">JFX</h1>
        <!-- end page title -->
      </div>
    </div>
  </div>
</section>
<!-- end page title section -->

<!-- end tab style 03 section -->
<!-- start heading style 01 section -->
<section class="wow fadeIn">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-12 last-paragraph-no-margin">
        <p class="text-medium line-height-30 text-medium-gray">Kalender ini mencakup acara pendidikan yang mencakup berbagai topik, baik dalam format online maupun secara langsung.
          Selain menampilkan acara yang diselenggarakan oleh JFX,
          kami juga bangga mempromosikan acara yang dikembangkan oleh mitra akademis dan
          industri kami yang kami yakini akan berharga bagi perdagangan Anda. Periksa kembali secara teratur karena acara selalu ditambahkan.</p>
          <div class="row">
            <div class="col-md-7">
              <h3>Jadwal Webinar JFX</h3><hr>
              <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
              width="100%">

              <tbody>
          <?php

              //skrip untuk menampilkan data dari database
              $sqlsy = mysqli_query($koneksi, "SELECT jfx_webinar.*
              FROM jfx_webinar  ORDER BY tanggal DESC LIMIT 10
                ");
                if(mysqli_num_rows($sqlsy) > 0){
                  $no = 0;

                  while($rowsy = mysqli_fetch_array($sqlsy)){
                    $no++;
                    $tglini =   $rowsy['tanggal'];

                    echo '
                    <tr>
                    <td style="text-align:center"><h5>'.date('d', strtotime($rowsy['tanggal'])).'</h5> '.date('F', strtotime($rowsy['tanggal'])).' </td>
                    <td>'.$rowsy['judul'].' <br><img src="./images/icons/chronometer.png" width="15" > '.$rowsy['waktu'].'</td>

                    <td>
                    ';?>
                    <a href="#" onclick="return confirm('TAMPIL DATA INI ... ?')" type="button" class="btn btn-primary" >Selengkapnya</a></td>
                  </tr><?php
                }
              } else {
                echo '<td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. </p></center></td></tr>';
              }
            ?>
              </tbody>

              </table>
    </div>

    <div class="col-md-5">

<!-- untuk kalender -->


<!-- ewnd kalender -->

    </div>

  </div>
</div>
</div>
</div>
</div>
</section>
<!-- end heading style 01 section -->

<!-- DataTables -->
<script src="./admin_jfx/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="./admin_jfx/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
