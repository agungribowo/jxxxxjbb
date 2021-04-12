
<!-- start page title section -->
<section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('images/jfx/bg-custom-header.jpg');">
    <div class="opacity-medium bg-extra-dark-gray"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                <!-- start sub title -->
                <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">Jakarta Futures Exchange</span>
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
        <!-- start tab style 04 section -->
        <section class="wow fadeIn bg-light-gray">
            <div class="container tab-style4">

                <div class="row align-items-center">
                    <div class="col-12 col-lg-2 col-md-3 pr-0 position-relative z-index-1">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs alt-font text-uppercase text-small font-weight-600">
                            <li class="nav-item"><a class="nav-link active" href="#tab-four1" data-toggle="tab">Sekilas JFX</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-four2" data-toggle="tab">Visi Misi</a></li>
                          <!--   <li class="nav-item"><a class="nav-link" href="#tab-four3" data-toggle="tab">Struktur JFX</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-four4" data-toggle="tab">JFX Milestone</a></li> -->
                        </ul>
                        <!-- end tab navigation -->
                    </div>
                    <div class="col-12 col-lg-10 col-md-9 pl-0">
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane med-text fade in active show" id="tab-four1">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 sm-margin-30px-bottom">
                                        <img src="images/jfx/sekilas.png" alt="" class="width-100"/>
                                    </div>
                                   <?php
            $tsqls = " SELECT tentang_kami.*
            FROM tentang_kami WHERE id = '1'";
            $stmtsl = sqlsrv_query( $conn, $tsqls);
            do {
              while ($rowsl = sqlsrv_fetch_array($stmtsl, SQLSRV_FETCH_ASSOC)) {
                ?>
                                    <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                                        <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase"><?php echo $rowsl['judul']; ?></h6>
                                        <p><?php echo $rowsl['isi']; ?></p>
                                    </div>
                                  
            <?php
          }
          } while ( sqlsrv_next_result($stmtsl) );

          ?>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab-four2">
                                <div class="row align-items-center">

                                    <?php
                                    //skrip untuk menampilkan data dari database
                                    $sql1 = mysqli_query($koneksi, "SELECT jfx_tentang_kami.*
                                      FROM jfx_tentang_kami WHERE id=2
                                      ");
                                      if(mysqli_num_rows($sql1) > 0){
                                        $no = 0;
                                        while($row1 = mysqli_fetch_array($sql1)){
                                          $no++;
                                          ?>
                                    <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                                        <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Visi</h6>
                                      <p><?php echo $row1['isi']; ?></p>
                                    </div>
                                    <?php
                                    }
                                    }
                                    ?>
                                    <div class="col-12 col-md-6 sm-margin-30px-bottom">
                                        <img src="images/jfx/visi.png" alt="" class="width-100"/>
                                    </div>
                                    <div class="col-12 col-md-6 sm-margin-30px-bottom">
                                        <img src="images/jfx/logo jfx.png" alt="" class="width-100"/>
                                    </div>
                                    <?php
                                    //skrip untuk menampilkan data dari database
                                    $sql2 = mysqli_query($koneksi, "SELECT jfx_tentang_kami.*
                                      FROM jfx_tentang_kami WHERE id=3
                                      ");
                                      if(mysqli_num_rows($sql2) > 0){
                                        $no = 0;
                                        while($row2 = mysqli_fetch_array($sql2)){
                                          $no++;
                                          ?>
                                    <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                                        <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Misi</h6>
                                      <p><?php echo $row2['isi']; ?></p>
                                    </div>
                                    <?php
                                    }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab-four3">
                                <div class="row align-items-center">
                                  <?php
                                  //skrip untuk menampilkan data dari database
                                  $sql3 = mysqli_query($koneksi, "SELECT jfx_tentang_kami.*
                                    FROM jfx_tentang_kami WHERE id=4
                                    ");
                                    if(mysqli_num_rows($sql3) > 0){
                                      $no = 0;
                                      while($row3 = mysqli_fetch_array($sql3)){
                                        $no++;
                                        ?>
                                    <div class="col-12 col-lg-12 col-md-12 offset-lg-1">
                                        <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">Struktur Organisasi</h6>
                                        <p><?php echo $row3['isi']; ?></p>
                                    </div>
                                    <?php
                                    }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- start tab content -->
                            <div class="tab-pane fade in" id="tab-four4">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 sm-margin-30px-bottom">
                                        <img src="images/jfx/visi.png" alt=""/>
                                    </div>
                                    <div class="col-12 col-lg-5 col-md-6 offset-lg-1">
                                        <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase">JFX Milestone</h6>
                                        <span class="text-extra-large text-extra-dark-gray margin-20px-bottom d-block">Lorem Ipsum is simply</span>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <a href="javascript:void(0);" class="btn btn-small btn-rounded btn-dark-gray">Explore services</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end tab style 04 section -->
