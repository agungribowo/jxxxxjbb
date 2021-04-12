<?php
//skrip untuk menampilkan data dari database
$id =  $_REQUEST['id'];
$sql = mysqli_query($koneksi, "SELECT jfx_teknologi.*,  jfx_icon_db.*
  FROM jfx_teknologi
  INNER JOIN  jfx_icon_db on jfx_teknologi.icon=jfx_icon_db.id_icon WHERE jfx_teknologi.id = $id

  ");
  $row = mysqli_fetch_array($sql);
      ?>
      <!-- start page title section -->
      <section class="wow fadeIn bg-extra-dark-gray padding-35px-tb page-title-small top-space">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-8 col-md-6 text-center text-md-left">
                      <!-- start page title -->
                      <h1 class="alt-font text-white-2 font-weight-600 mb-0 text-uppercase">Detail Teknologi</h1>
                      <!-- end page title -->
                  </div>
                  <div class="col-lg-4 col-md-6 breadcrumb alt-font text-small justify-content-center justify-content-md-end sm-margin-10px-top">
                      <!-- breadcrumb -->
                      <ul>
                          <li><a href="media?hal=home" class="text-dark-gray">Beranda</a></li>
                            <li><a href="media?hal=technology" class="text-dark-gray">Teknologi</a></li>
                          <li class="text-dark-gray">Detail Teknologi</li>
                      </ul>
                      <!-- end breadcrumb -->
                  </div>
              </div>
          </div>
      </section>
        <!-- end page title section -->
        <!-- start feature box section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">


                    <!-- feature box item-->
                    <div class="col-12 col-md-12 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp">
                        <!-- <div class="feature-box"> -->
                        <div>
                            <div class="content">
                                <!-- <i class="icon-browser text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom"></i> -->
                                <?php echo $row['data_icon']; ?>
                                <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom"><?php echo $row['judul']; ?></div>

                                <p class="width-85 mx-auto md-width-100" ><?php echo $row['isi']; ?></p>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item-->

                </div>
            </div>
        </section>
        <!-- end feature box section -->
