
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/parallax-bg13.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 extra-small-screen d-flex flex-column justify-content-center page-title-large text-center">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Teknologi JFX</h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white-2 opacity6 alt-font mb-0">Berikut ini merupakan aplikasi atau teknologi yang diterapkan di JFX.

</span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start feature box section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">

                  <?php
                  //skrip untuk menampilkan data dari database
                  $sql = mysqli_query($koneksi, "SELECT jfx_teknologi.*,  jfx_icon_db.*
                    FROM jfx_teknologi
                    INNER JOIN  jfx_icon_db on jfx_teknologi.icon=jfx_icon_db.id_icon

                    ");
                    if(mysqli_num_rows($sql) > 0){
                      $no = 0;
                      while($row = mysqli_fetch_array($sql)){
                        $no++;
                        ?>
                    <!-- feature box item-->

                    <div class="col-12 col-md-4 sm-margin-five-bottom last-paragraph-no-margin wow fadeInUp">
                          <a href="./media?hal=teknologi_detail&id=<?php echo $row['id']; ?>">
                        <div class="feature-box">
                            <div class="content">
                                <!-- <i class="icon-browser text-medium-gray icon-large margin-25px-bottom md-margin-15px-bottom"></i> -->
                                <?php echo $row['data_icon']; ?>
                                <div class="text-medium alt-font text-capitalize text-extra-dark-gray margin-10px-bottom md-margin-5px-bottom"><?php echo $row['judul']; ?></div>
                                <p class="width-85 mx-auto md-width-100"><?php echo $row['deskripsi']; ?></p>
                            </div>
                        </div>
                    </div>
                  </a>
                    <!-- end feature box item-->
                    <?php
                    }
                    }
                    ?>
                </div>
            </div>
        </section>
        <!-- end feature box section -->
