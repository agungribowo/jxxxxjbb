
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
                            <li class="nav-item"><a class="nav-link active" href="#tab-four1" data-toggle="tab">Struktur JFX</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-four2" data-toggle="tab">Pemegang Saham</a></li>
                           
                        </ul>
                        <!-- end tab navigation -->
                    </div>
                    <div class="col-12 col-lg-10 col-md-9 pl-0">
                        <div class="tab-content">
                            <!-- start tab content -->
                            <div class="tab-pane med-text fade in active show" id="tab-four1">
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
                            <div class="tab-pane fade in" id="tab-four2">
                                <div class="row align-items-center">

    <div class="row">

<?php

      $tsqls = " SELECT pemegang_saham.*
            FROM pemegang_saham";
            $stmtsl = sqlsrv_query( $conn, $tsqls);
            do {
              while ($rowsy = sqlsrv_fetch_array($stmtsl, SQLSRV_FETCH_ASSOC)) {
                ?>



                    <!-- start client logo item -->
                    <div class="col-12 col-lg-12 col-md-6 wow fadeInUp">
                        <div class="bg-white clients-list text-center  align-items-center justify-content-center w-100 margin-10px-bottom view_data " data-toggle="modal" data-target="#myModal">
                          <table>
                          <th style=""><figure ><a href="javascript:void(0);"><img src="./admin_jfx/file_saham/<?php echo $rowsy['logo']; ?>" style="max-width:100%" alt="image description" ></a></figure></th>
                          <th style=" text-align:left;padding:2px;">  <p><?php echo $rowsy['nama_pt']; ?></p></th>
                          </table>
                        </div>
                    </div>
                    <!-- end client logo item -->
                <?php
          }
          } while ( sqlsrv_next_result($stmtsl) );

          ?>
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
