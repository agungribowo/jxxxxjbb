<!-- start page title section -->
<section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-md-6 text-center text-md-left">
                <!-- start page title -->
                <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">FTLC</h1>
                <!-- end page title -->
            </div>
            <div class="col-xl-4 col-md-6 alt-font breadcrumb justify-content-center justify-content-md-end text-small sm-margin-10px-top">
                <!-- start breadcrumb -->
                <ul>
                    <li><a href="#" class="text-dark-gray">Pages</a></li>
                    <li><a href="#" class="text-dark-gray">Edukasi</a></li>
                    <li class="text-dark-gray">FTLC</li>
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
                <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase width-80 lg-width-100">Futures Trading Learning Center</h5>
                <div class="separator-line-verticle-extra-small bg-extra-dark-gray width-50 md-width-30 mx-auto ml-lg-0 margin-30px-bottom md-margin-20px-bottom"></div>
                <p align="justify">Futures Trading Learning Center (FTLC) adalah suatu wadah kerjasama berbasis edukasi yang
                  berkelanjutan antara lembaga JFX (Bursa Berjangka Jakarta), KBI (Kliring Berjangka Indonesia),
                  Pialang dan Kampus perihal industri Perdagangan Berjang.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center text-lg-left md-margin-30px-bottom md-padding-80px-lr sm-padding-15px-lr wow fadeIn">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Provinsi</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Kampus</th>
                    <th scope="col">Pialang</th>
                  </tr>
                </thead>
                <tbody>
                  <?php //skrip untuk menampilkan data dari database
                  $sql = mysqli_query($koneksi, "SELECT  jfx_ftlc.* FROM jfx_ftlc ");
                    $no = 0;
                     while($row = mysqli_fetch_array($sql)){
                      $no++;
                      echo'
                  <tr>
                    <th scope="row">'.$no.'</th>
                    <td>'.$row['provinsi'].'</td>
                    <td>'.$row['kota'].'</td>
                    <td><a href="'.$row['kampus_link'].' " target="_blank">'.$row['kampus'].'</a> </td>
                    <td><a href="'.$row['pialang_link'].'" target="_blank">'.$row['pialang'].'</a> </td>
                  </tr>
                  ';    }?>
                </tbody>
                    </table>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
