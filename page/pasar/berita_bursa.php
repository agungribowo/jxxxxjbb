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
        <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">Berita Bursa</span>
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

          <div class="row">
            <h3>Berita Bursa</h3><hr>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <th>No</th>
                <th>Nomor Keputusan</th>
                <th>Perihal</th>
                <th>Ukuran KB</th>
                <th>Unduh</th>
              </thead>
              <tbody>
                <?php //skrip untuk menampilkan data dari database
                $sql = mysqli_query($koneksi, "SELECT  jfx_regulasi.* FROM jfx_regulasi WHERE kategori='Berita Bursa' ");
                  $no = 0;
                   while($row = mysqli_fetch_array($sql)){
                    $no++;
                    echo'
                <tr>
                  <td>'.$no.'</td>
                  <td>'.$row['nomor_kep'].'</td>
                  <td>'.$row['perihal'].'</td>
                  <td>366</td>
                  <td><a href="#"> Unduh File</a></td>
                </tr>
                ';    }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end heading style 01 section -->
