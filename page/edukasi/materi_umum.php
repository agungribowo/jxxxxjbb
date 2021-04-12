<!-- start page title section -->
<section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-md-6 text-center text-md-left">
                <!-- start page title -->
                <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">Materi Umum</h1>
                <!-- end page title -->
            </div>
            <div class="col-xl-4 col-md-6 alt-font breadcrumb justify-content-center justify-content-md-end text-small sm-margin-10px-top">
                <!-- start breadcrumb -->
                <ul>
                    <li><a href="#" class="text-dark-gray">Pages</a></li>
                    <li><a href="#" class="text-dark-gray">Edukasi</a></li>
                    <li class="text-dark-gray">Materi Umum</li>
                </ul>
                <!-- end breadcrumb -->
            </div>
        </div>
    </div>
</section>
<!-- end page title section -->
<!-- start section -->
<section class="wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-lg-left md-margin-30px-bottom md-padding-80px-lr sm-padding-15px-lr wow fadeIn">
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase width-80 lg-width-100">Materi Umum</h5>
                <div class="separator-line-verticle-extra-small bg-extra-dark-gray width-25 md-width-30 mx-auto ml-lg-0 margin-30px-bottom md-margin-20px-bottom"></div>

            </div>
            <div class="row">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Deskripsi</th>
                  <th>Ukuran KB</th>
                  <th>Unduh</th>
                </thead>
                <tbody>
                  <?php //skrip untuk menampilkan data dari database
                  $sql = mysqli_query($koneksi, "SELECT  jfx_materi.* FROM jfx_materi ORDER BY tgl_update DESC LIMIT 10");
                    $no = 0;
                     while($row = mysqli_fetch_array($sql)){
                      $no++;
                      echo'
                  <tr>
                    <td>'.$no.'</td>
                    <td>'.$row['judul'].'</td>
                    <td>'.$row['deskripsi'].'</td>
                    <td>366</td>
                    <td><a href="../../file_upload/'.$row['file'].'" target="_BLANK">'.$row['file'].' <i class="fa fa-file-pdf fa-2x"></i></a></td>
                  </tr>
                  ';    }?>
                </tbody>
              </table>
            </div>
        </div>

    </div>
</section>
<!-- end section -->
