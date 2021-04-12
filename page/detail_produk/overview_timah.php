<?php

$produk = $_REQUEST['produk'];


//skrip untuk menampilkan data dari database
$tsql = " SELECT TinHistory.*
FROM TinHistory
WHERE  TinHistory.product = '$produk' order by business_date desc ";
$stmt = sqlsrv_query( $conn, $tsql);
$rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);



//skrip untuk menampilkan data dari database
$sqlsy = mysqli_query($koneksi, "SELECT jfx_produk.*
  FROM jfx_produk WHERE kode_kontrak = '$produk'
  ");
  $rowsy = mysqli_fetch_array($sqlsy);



?>
<?php
$pesan='';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['input_kode'])) {
            if ($_SESSION['kode_captcha']!=$_POST['input_kode']){
                $pesan="<div class='alert alert-danger'><strong>Error!</strong> Kode yang dimasukan salah.</div>";
                session_destroy();
            }else {
                $pesan="<div class='alert alert-success'><strong>Sukses!</strong> Kode yang dimasukan benar.</div>";
            }
        }
}
?>

        <!-- start page title section -->
        <section class="wow fadeIn bg-extra-dark-gray padding-35px-tb page-title-small top-space">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-6 text-center text-md-left">
                        <!-- start page title -->
                        <h1 class="alt-font text-white-2 font-weight-600 mb-0 text-uppercase">Detail Produk</h1>
                        <!-- end page title -->
                    </div>
                    <div class="col-lg-4 col-md-6 breadcrumb alt-font text-small justify-content-center justify-content-md-end sm-margin-10px-top">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="media?hal=home" class="text-dark-gray">Beranda</a></li>
                            <li class="text-dark-gray">Detail Produk</li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start tab style 01 section -->
        <section class="wow fadeIn">
            <div class="container tab-style2">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden w-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase"><?php echo $rowmr['product']; ?></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs alt-font text-uppercase text-small text-center font-weight-600 justify-content-center">
                            <li class="nav-item"><a class="nav-link active" href="#tab_sec1" data-toggle="tab">Deskripsi</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_sec2" data-toggle="tab">Harga</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab_sec3" data-toggle="tab">Spesifikasi Kontrak</a></li>
                        </ul>
                        <!-- end tab navigation -->
                    </div>
                </div>
                <div class="tab-content">
                    <!-- start tab content -->
                    <div class="tab-pane med-text fade in active show" id="tab_sec1">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 sm-margin-30px-bottom"  id="container">
                                <!-- <img src="images/jfx/sekilas.png" alt="" class="w-100"/> -->
                            </div>
                            <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                                <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase"><?php echo $rowmr['product']; ?></h6>
                                <p style="text-align:justify">Timah merupakan salah satu mineral ekonomis yang sangat penting dan potensial di dunia karena mempunyai manfaat yang sangat melimpah. Timah dapat digunakan sebagai logam yang mandiri maupun juga paduan campuran (alloy) dengan logam lain terutama pada tembaga, seperti dalam campuran, perunggu, solder lunak, logam bel, babbitt, bahkan juga dalam pembuatan pipa PvC, dan sebagainya. Timah saat ini juga merupakan salah satu komoditas andalan pertambangan di Indonesia untuk ekspor yang peranannya cukup penting dan tidak tergantikan kebutuhannya bagi perekonomian Nasional. Untuk mendukung peningkatan daya saing ekspor timah serta penyesuaian dengan penetapan sistem klasifikasi barang yang baru dan ketentuan perundang-undangan mengenai pertambangan mineral, Kementerian Perdagangan mengeluarkan Peraturan Menteri Perdagangan Republik Indonesia Nomor 44/M-DAG/PER/7/2014 yang diubah dengan Peraturan Menteri Perdagangan Republik Indonesia Nomor 53 tahun 2018 dan Peraturan Dirjen Perdagangan Luar Negeri No. 05/DAGLU/PER/2/2019 yang antara lain mengatur bahwa timah untuk keperluan ekspor harus diperdagangkan melalui Bursa. Oleh karena itu Bursa Berjangka Jakarta (BBJ) yang selalu berupaya untuk bisa menjadi bursa yang melayani permintaan pasar, Bursa Bejangka Jakarta mengadakan Bursa Timah dalam rangka memenuhi kebutuhan pasar akan adanya keteraturan dalam perdagangan timah nasional. Produk Timah sendiri terdiri dari 5 jenis kontrak yaitu TLEAD 300, TLEAD 200, TLEAD 100, TLEAD 050 dan TPURE099.</p>
                            </div>
                            <div class="col-12 col-md-12 sm-margin-30px-bottom" >

                              <br><br><br>
                              <div class="container">
                                  <div class="row justify-content-center">
                                      <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                                          <div class="position-relative overflow-hidden w-100">
                                              <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Permintaan Harga</span>
                                          </div>
                                      </div>
                                  </div>
                                  <form id="project-contact-form" action="" method="post">
                                      <div class="row">
                                          <div class="col-12">
                                              <div id="success-project-contact-form" class="mx-0"></div>
                                          </div>
                                          <div class="col-12 col-lg-6">
                                              <input type="text" name="name" id="name" placeholder="Name *" class="big-input" value="<?php echo $rowsy['nama_produk']; ?>" readonly>
                                          </div>
                                          <div class="col-12 col-lg-3">
                                              <input type="date" name="phone" id="phone" placeholder="Tgl Awal"  class="big-input" required>
                                          </div>
                                          <div class="col-12 col-lg-3">
                                              <input type="date" name="phone" id="phone" placeholder="Tgl Akhir"  class="big-input" required>
                                          </div>
                                          <div class="col-12 col-lg-6">
                                              <input type="text" name="nama" id="name" placeholder="Nama Anda" class="big-input" required>
                                          </div>
                                          <div class="col-12 col-lg-6">
                                              <input type="text" name="email" id="email" placeholder="E-mail " class="big-input" required>
                                          </div>
                                          <div class="col-12">
                                    <img src="./page/detail_produk/captcha.php"/>
                                          </div>
                                          <div class="col-12">
                                    <input type="text" name="code" class="big-input" placeholder="Masukkan Captcha " required/>
                                          </div>

                                          <div class="col-12 text-center">
                                              <button id="project-contact-us-button" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top">send message</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                            </div>

                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_sec2">
                        <div class="row align-items-center">


                <?php

  # Deklarasi variabel
      $filterPeriode = "";
      $tglAwal  = "";
      $tglAkhir = "";

      # Membaca tanggal dari form, jika belum di-POST formnya, maka diisi dengan tanggal sekarang
      $tglAwal  = isset($_POST['txtTglAwal']) ? $_POST['txtTglAwal'] : "01-".date('m-Y');
      $tglAkhir   = isset($_POST['txtTglAkhir']) ? $_POST['txtTglAkhir'] : date('d-m-Y');


// Jika tombol filter tanggal (Tampilkan) diklik
if (isset($_POST['btnTampil'])) {
  // Membuat sub SQL filter data berdasarkan 2 tanggal (periode)
  $filterPeriode = "WHERE ( business_date BETWEEN '".InggrisTgl($tglAwal)."' AND '".InggrisTgl($tglAkhir)."')";
}
else {
  // Membaca data tanggal dari URL, saat Nomor Halaman diklik
  $tglAwal  = isset($_GET['tglAwal']) ? $_GET['tglAwal'] : "01-".date('m-Y');
  $tglAkhir   = isset($_GET['tglAkhir']) ? $_GET['tglAkhir'] : date('d-m-Y');

  // Membuat sub SQL filter data berdasarkan 2 tanggal (periode)
  $filterPeriode = "WHERE ( business_date BETWEEN '".InggrisTgl($tglAwal)."' AND '".InggrisTgl($tglAkhir)."')";
}



                ?>

                            <div class="col-12 col-lg-12 col-md-12 ">
                                <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Harga </h6>
                                <table class="table table-striped table-bordered table-sm " cellspacing="0"
                                width="100%">
                                <tr>
                                  <th>
                                    <a target="_blank"  class="btn btn-danger" href="./page/detail_produk/export_timah.php?&produk=<?php echo $produk;?>">EXPORT EXCEL</a>
                                  </th>
                                  <th>
                                   <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" name="form1" target="_self">
  <table width="100%" border="0" class="display table table-striped table-bordered">
    <tr>
      <td colspan="4" bgcolor="#CCCCCC"><strong>PERIODE TANGGAL </strong></td>
    </tr>
    <tr>
      <td ><strong>Periode </strong></td>
      <td><strong>:</strong></td>
      <td><input  class="form-control tcal" name="txtTglAwal" type="text"  value="<?php echo $tglAwal; ?>" /></td>

        <td><input width="40%" class="form-control tcal" name="txtTglAkhir" type="text"  value="<?php echo $tglAkhir; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input name="btnTampil" type="submit" value=" Tampilkan " /></td>
    </tr>
  </table>
</form><br>
                                  </th>
                                </tr>
                              </table>
                                <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
                                width="100%">
                                <thead style="background-color: #1a4a6e; color: #fff; text-align:center">
                                  <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Produk</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th colspan="3">Session 1</th>
                                      <th colspan="3">Session 2</th>
                                      <th colspan="3">Session 3</th>
                                      <th colspan="2">Total</th>
                                  </tr>
                                  <tr>

                                    <th >Terendah</th>
                                    <th >Tertinggi</th>
                                    <th >Volume</th>
                                    <th >Terendah</th>
                                    <th >Tertinggi</th>
                                    <th >Volume</th>
                                    <th >Terendah</th>
                                    <th >Tertinggi</th>
                                    <th >Volume</th>
                                    <th >Harga rata-rata</th>
                                    <th >Volume</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php
                                  $tsql = " SELECT top 20  TinHistory.*
                                  FROM TinHistory
                                  WHERE TinHistory.product = '$produk' ORDER BY business_date desc ";
                                  $stmt = sqlsrv_query( $conn, $tsql);
                                  do {
                                    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                                      $no++;
                                      echo'
                                      <tr>
                                      <td>'.$no.'</td>
                                      <td>'.$row['product'].'</td>
                                      <td>'.$row['business_date'].'   </td>
                                      <td>'.round($row['session1_lowest'], 5).'</td>
                                      <td>'.round($row['session1_highest'], 5).'</td>
                                      <td>'.round($row['session1_volume'], 5).'</td>
                                      <td>'.round($row['session2_lowest'], 5).'</td>
                                      <td>'.round($row['session2_highest'], 5).'</td>
                                      <td>'.round($row['session2_volume'], 5).'</td>
                                      <td>'.round($row['session3_lowest'], 5).'</td>
                                      <td>'.round($row['session3_highest'], 5).'</td>
                                      <td>'.round($row['session3_volume'], 5).'</td>
                                      <td>'.round($row['average_price'], 5).'</td>
                                      <td>'.round($row['volume'], 5).'</td>

                                      ';       }


                                    } while ( sqlsrv_next_result($stmt) );
                                    ?>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                    <!-- start tab content -->
                    <div class="tab-pane fade in" id="tab_sec3">
                        <div class="row align-items-center">

                            <div class="col-12 col-lg-12 col-md-12 ">
                                <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Spesifikasi</h6>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default2">
                                  <i class="icon-file-pdf"></i> LIHAT DATA PDF
                                </button><br><br>
                              <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
                    width="100%">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Spesifikasi</th>
                                        <th scope="col">Penjelasan</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php //skrip untuk menampilkan data dari database
                                      $sql = mysqli_query($koneksi, "SELECT  jfx_spesifikasi_modul.*
                                      FROM jfx_spesifikasi_modul
                                      WHERE kode_kontrak = '$id'
                                      order by urut_modul asc
                                      ");

                                        $no = 0;

                                         while($row = mysqli_fetch_array($sql)){
                                          $no++;

                                          echo'
                                      <tr>
                                        <th scope="row">'.$no.'</th>
                                        <td>'.$row['modul'].'</td>
                                        <td>'.$row['deskripsi'].'</td>
                                      </tr>
                                      ';    }?>
                                    </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->

                </div>
            </div>
        </section>
        <!-- end tab style 01 section -->



                                    <div class="modal fade" id="modal-default2">
                                          <div class="modal-dialog">
                                            <div class="modal-content">
                                              <div class="modal-header">


                                              </div>
                                              <div class="modal-body">

                                              <div class="box-body">

        <?php
        $sqlf = mysqli_query($koneksi, "SELECT jfx_produk.*
          FROM jfx_produk
          WHERE kode_kontrak = '$id'

          ");
        $rowf = mysqli_fetch_array($sqlf);

        ?>

                                                <embed type="application/pdf" src="./admin_jfx/file_upload/<?php echo $rowf['file_upload']; ?>" width="100%" height="700px"></embed>



                                              </div>
                                              <!-- /.box-body -->



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

<?php include './page/detail_produk/grafik.php'; ?>
