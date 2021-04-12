<section class="wow fadeIn p-0 main-slider mobile-height top-space">
    <div class="swiper-full-screen swiper-container w-100 white-move">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <?php
            //skrip untuk menampilkan data dari database
            $sql = mysqli_query($koneksi, "SELECT home.*
              FROM home
              ");
              if(mysqli_num_rows($sql) > 0){
                $no = 0;
                while($row = mysqli_fetch_array($sql)){
                  $no++;
                  ?>
            <div class="swiper-slide cover-background" style="background-image:url('admin_jfx/file_web/<?php echo $row['gambar']; ?>');">
                <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                <div class="container position-relative one-fourth-screen sm-height-400px">
                    <div class="slider-typography text-center">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">

                                <h1 class="alt-font text-uppercase text-white-2 font-weight-700 width-75 sm-width-95 mx-auto margin-35px-bottom sm-margin-15px-bottom"><?php echo $row['judul']; ?></h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            }
            }
            ?>
            <!-- end slider item -->

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white swiper-full-screen-pagination"></div>
        <div class="swiper-button-next swiper-button-black-highlight d-none"></div>
        <div class="swiper-button-prev swiper-button-black-highlight d-none"></div>
    </div>
</section>
<!-- end slider -->
<!-- start about agency -->
<section class="wow fadeIn bg-light-gray ">
    <div class="container">
        <!-- <div class="row justify-content-center">
            <div class="col-12 col-lg-8 col-md-11 text-center wow fadeInUp margin-eight-bottom">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">About Digital Agency</div>
                <h6 class="font-weight-300 text-extra-dark-gray mb-0">We always stay with our <strong class="font-weight-400">clients and respect</strong> their business. We deliver 100% and provide instant response to help them succeed in constantly changing and <strong class="font-weight-400">challenging business</strong> world.</h6>
            </div>
        </div> -->
        <div class="row">
            <!-- start features box item -->


           
            <!-- start features box item -->

            <div class="col-12 col-md-8 sm-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                <div class=" text-center ">
                  <div class="row ">
                      <!-- start features box -->
                      
                      <div class="col-12 col-lg-6 col-md-6 md-margin-30px-bottom wow fadeInUp">
                          <div class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 lg-padding-six-all h-100 sm-padding-15px-lr">
                              <p  style="color:#000">Kinerja Pialang</p>
                           <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
                      width="100%">
                      <thead style="background-color: #1a4a6e; color: #fff">
                        <tr>
                          <th>No</th>
                          <th >Nama</th>
                          <th >Volume</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $tsql = " SELECT TOP 10 MemberVolume.*
                        FROM MemberVolume WHERE MemberType='B' ORDER BY Vol DESC
                        ";
                        $stmt = sqlsrv_query( $conn, $tsql);
                        do {
                          while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {


                            $no++;
                            echo'
                            <tr>
                            <td>'.$no.'</td>
                            <td>'.$row['membername'].'</td>
                            <td>'.$row['Vol'].'   </td>
                            ';     }

                          } while ( sqlsrv_next_result($stmt) );
                          ?>
                        </tr>
                      </tbody>
                    </table>
                          </div>
                      </div>
                     
                      <!-- end feature box -->

 <!-- start features box -->
                      
                      <div class="col-12 col-lg-6 col-md-6 md-margin-30px-bottom wow fadeInUp">
                          <div class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 lg-padding-six-all h-100 sm-padding-15px-lr">
                              <p  style="color:#000">Kinerja Pialang</p>
                           <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
                      width="100%">
                      <thead style="background-color: #1a4a6e; color: #fff">
                        <tr>
                          <th>No</th>
                          <th >Nama</th>
                          <th >Volume</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $tsql = " SELECT TOP 10 MemberVolume.*
                        FROM MemberVolume WHERE MemberType='B' ORDER BY Vol DESC
                        ";
                        $stmt = sqlsrv_query( $conn, $tsql);
                        do {
                          while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {


                            $no++;
                            echo'
                            <tr>
                            <td>'.$no.'</td>
                            <td>'.$row['membername'].'</td>
                            <td>'.$row['Vol'].'   </td>
                            ';     }

                          } while ( sqlsrv_next_result($stmt) );
                          ?>
                        </tr>
                      </tbody>
                    </table>
                          </div>
                      </div>
                     
                      <!-- end feature box -->
                     

                  </div>
                </div>
            </div>
            <!-- end feature box item -->

        </div>
    </div>
</section>
<!-- end about agency section -->
<!-- start feature box section -->
<section class="bg-jfx wow fadeIn">
  <!-- <section class="bg-extra-dark-gray wow fadeIn"> -->
    <div class="container">
        <!-- <div class="row justify-content-center"> -->
              <div class="row ">
            <div class="col-12 col-xl-12 col-md-12 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom ">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">MARKET ACTIVITY</div>
                <h5 class="alt-font text-white-2 font-weight-600 mb-0">The widest range of global benchmark products across all major asset classes. All right here.</h5>
                  <font style="color:#fff; font-size:20px;">Quotes are delayed by at least 10 minutes.</font><br>
                  <font style="color:#fff; font-size:20px;">Last Updated
                    <?php
                    // echo time();
                    $timestamp = time();
                    $stringDate = date('d-m-Y H:i', $timestamp);
                    echo "String date: {$stringDate} ";
                    ?> GMT +7</font><br>
            </div>
        </div>
        <div class="row ">
          <!-- isi biru -->
          <div class="col-md-4" >
            <?php
            $tsql_cocoa = " SELECT contract.* FROM contract
            WHERE  contract.ContractContent = 'COCOA' ";
            $stmt_cocoa = sqlsrv_query( $conn, $tsql_cocoa);
            $rowmr_cocoa = sqlsrv_fetch_array($stmt_cocoa, SQLSRV_FETCH_ASSOC);
            ?>
            <a href="media?hal=list-settlement&id=<?php echo $rowmr_cocoa['ContractContent']; ?>" style="color:#fff;padding:5px">COCOA </a>

            <!-- kolom -->

            <!-- mulai box biru -->

            <div class="row">
              <div class="col-md-12">

                <!-- xxxx -->
                <?php
                //skrip untuk menampilkan data dari database
                // $sqlmr = mysqli_query($koneksi, "SELECT marketsummary.*, jfx_contract.*
                //   FROM marketsummary
                //   INNER JOIN jfx_contract ON marketsummary.ContractID=jfx_contract.ContractID
                //   WHERE jfx_contract.ContractID = 'CC5'
                //   ORDER BY lastUpdate DESC limit 4
                //   ");
                //   if(mysqli_num_rows($sqlmr) > 0){
                //     $no = 0;
                //     while($rowmr = mysqli_fetch_array($sqlmr)){
                //       $no++;

                $tsql = " SELECT top 4 marketsummary.*, contract.*
                FROM marketsummary
                INNER JOIN contract ON marketsummary.ContractID=contract.ContractID
                WHERE  contract.ContractContent = 'COCOA' ";
                $stmt = sqlsrv_query( $conn, $tsql);
                do {
                  while ($rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {

                    //
                    // $tsql = " SELECT top 4 marketsummary.* , contract.*
                    // from marketsummary
                    // INNER JOIN contract on	marketsummary.ContractID=contract.ContractID
                    // where contract.ContractID = 'CC5' ";
                    // $stmt = sqlsrv_query( $conn, $tsql);
                    //   do {
                    //   while ($rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {

                    ?>
                    <a href="media?hal=hm-overview&id=<?php echo $rowmr['ContractID']; ?>" >
                      <div class="col-md-6" style="font-size:12px; padding:5px">
                        <div style="color:#fff ;border: 1px solid #1e2333;padding-bottom: 5px; padding: 5px;" class="widget__content widget__grid filled pad20" id="grad1">
                          <table width="100%">
                            <tr>
                              <th> <?php echo $rowmr['ContractID']; ?> <?php echo $rowmr['TradeDate']->format('M'); ?>-<?php
                              $year1 = $rowmr['TradeDate']->format('Y');
                              $year = substr( $year1, -2);
                              echo $year;
                              ?></th>
                              <th><?php echo $rowmr['ContractType']; ?>  </th>
                              <th style="font-weight: bold; color:red"><i class="fa fa-chevron-down" aria-hidden="true"></i></th>
                            </tr>
                          </table>
                          <font style="font-weight: bold; color:#fff"><?php echo substr($rowmr['ContractName'],0,16); ?></font><br>
                          <div style="color:#fff">
                            <table  width="100%" style="font-size:9px; ">
                              <tr>
                                <th style="text-align:center"><?php echo round($rowmr['LastPrice'],4); ?></th>
                                <th style="text-align:center"><?php echo round($rowmr['TotalVolume'],4); ?></th>
                              </tr>
                              <tr>
                                <th style="text-align:center"><?php echo round($rowmr['ChgPrice'],4); ?></th>
                                <th style="text-align:center">(0.01%)</th>
                              </tr>
                            </table>
                          </div>
                        </div> <!-- /widget__content -->
                      </div>
                    </a>
                    <?php
                  }
                } while ( sqlsrv_next_result($stmt) );

                ?>
                <!-- xxxx -->
              </div>
              <!-- end biru box -->
            </div>
            <!-- kanan -->
          </div>

          <!-- end isi biru -->



        </div>
    </div>
</section>
<!-- start feature box section -->

<!-- start services section -->
<section class="p-0 wow fadeIn">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12">
                <div class="row m-0">
                    <!-- start interactive banners item -->
                    <div class="col-12 col-md-4 padding-5px-all grid-item feature-box-4 wow slideInDown">
                        <div class="position-relative overflow-hidden">
                            <figure class="m-0">
                                <img src="images/case-study-01.jpg" alt="" >
                                <div class="opacity-medium bg-extra-dark-gray"></div>
                                <figcaption>
                                    <span class="text-medium-gray margin-10px-bottom d-inline-block ">Rubber Studio</span>
                                    <div class="bg-deep-pink separator-line-horrizontal-full d-inline-block margin-10px-bottom"></div>
                                    <span class="text-extra-large d-block text-white-2 alt-font margin-25px-bottom width-60 lg-width-100 md-margin-seven-bottom">A Rich Heritage & Brand History</span>
                                    <a href="#" class="btn btn-very-small btn-white font-weight-300">view case study</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-12 col-md-4 padding-5px-all grid-item feature-box-4 wow slideInDown" data-wow-delay="0.2s">
                        <div class="position-relative overflow-hidden">
                            <figure class="m-0">
                                <img src="images/case-study-02.jpg" alt="" >
                                <div class="opacity-medium bg-extra-dark-gray"></div>
                                <figcaption>
                                    <span class="text-medium-gray margin-10px-bottom d-inline-block ">RedDot Media</span>
                                    <div class="bg-deep-pink separator-line-horrizontal-full d-inline-block margin-10px-bottom"></div>
                                    <span class="text-extra-large d-block text-white-2 alt-font margin-25px-bottom width-60 lg-width-100 md-margin-seven-bottom">Global Partners Increases Revenue</span>
                                    <a href="#" class="btn btn-very-small btn-white font-weight-300">view case study</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-12 col-md-4 padding-5px-all grid-item feature-box-4 wow slideInDown" data-wow-delay="0.4s">
                        <div class="position-relative overflow-hidden">
                            <figure class="m-0">
                                <img src="images/case-study-03.jpg" alt="" >
                                <div class="opacity-medium bg-extra-dark-gray"></div>
                                <figcaption>
                                    <span class="text-medium-gray margin-10px-bottom d-inline-block ">Third Eye Glasses</span>
                                    <div class="bg-deep-pink separator-line-horrizontal-full d-inline-block margin-10px-bottom"></div>
                                    <span class="text-extra-large d-block text-white-2 alt-font margin-25px-bottom width-60 lg-width-100 md-margin-seven-bottom">Improves Sales Efficiency with us</span>
                                    <a href="#" class="btn btn-very-small btn-white font-weight-300">view case study</a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <!-- end interactive banners item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end services section -->

<!-- start explore work section -->
<section class="p-0 wow fadeIn bg-extra-dark-gray" id="services">
    <div class="container-fluid p-0">
        <div class="row">
     <?php
                  //skrip untuk menampilkan data dari database
                  $sqlsy = mysqli_query($koneksi, "SELECT buletin.*
                    FROM buletin WHERE status = 'headline'
                    ");
                    if(mysqli_num_rows($sqlsy) > 0){
                      $no = 0;
                      while($rowsy = mysqli_fetch_array($sqlsy)){
                        $no++;
                        ?>
            <div class="col-12 col-lg-6 position-relative md-height-550px sm-height-350px cover-background wow slideInLeft" data-wow-duration="900ms" style="background-image: url('./admin_jfx/file_buletin/<?php echo $rowsy['gambar']; ?>');"></div>
            <div class="col-12 col-lg-6 padding-seven-tb padding-eight-lr md-padding-nine-tb md-padding-twelve-lr sm-padding-30px-tb sm-padding-50px-lr text-center text-lg-left wow slideInRight last-paragraph-no-margin" data-wow-duration="900ms">
                <span class="text-medium margin-20px-bottom md-margin-15px-bottom d-block alt-font sm-margin-15px-bottom"><?php echo $rowsy['judul']; ?></span>
                <p class="width-80 lg-width-100"><?php echo  substr($rowsy['isi'],0,500); ?></p>
                <a href="home-creative-small-business.html" class="btn btn-small btn-white btn-rounded margin-35px-top md-margin-25px-top">Detail</a>
            </div>
            <?php
                  }
                }
                ?>
        </div>
    </div>
</section>
<!-- end explore work section -->
<!-- start blog section -->
<section class="border-top border-color-extra-light-gray wow fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Latest Blogs</div>
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Publish what you think, don't put it on social media</h5>
            </div>
        </div>
        <div class="row">
            <!-- start blog post item -->
            <div class="col-12 col-lg-3 col-md-6 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin text-center text-md-left wow fadeInUp">
                <div class="blog-post blog-post-style1">
                    <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                        <a href="#">
                            <img src="images/latest-blog1.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-details">
                        <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom">25 April 2017 | by <a href="#" class="text-link-dark-gray">Jay Benjamin</a></span>
                        <a href="#" class="post-title text-medium text-extra-dark-gray width-90 sm-width-100 d-block">I like the body. I like to design everything to do with the body.</a>
                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-15px-tb"></div>
                        <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                    </div>
                </div>
            </div>
            <!-- end blog post item -->
            <!-- start blog post item -->
            <div class="col-12 col-lg-3 col-md-6 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin text-center text-md-left wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-post blog-post-style1">
                    <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                        <a href="#">
                            <img src="images/latest-blog2.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-details">
                        <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom">20 April 2017 | by <a href="#" class="text-link-dark-gray">Herman Miller</a></span>
                        <a href="#" class="post-title text-medium text-extra-dark-gray width-90 sm-width-100 d-block">Styles come and go. Design is a language, not a style.</a>
                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-15px-tb"></div>
                        <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                    </div>
                </div>
            </div>
            <!-- end blog post item -->
            <!-- start blog post item -->
            <div class="col-12 col-lg-3 col-md-6 sm-margin-30px-bottom last-paragraph-no-margin text-center text-md-left sm-clear-both wow fadeInUp" data-wow-delay="0.4s">
                <div class="blog-post blog-post-style1">
                    <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                        <a href="#">
                            <img src="images/latest-blog3.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-details">
                        <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom">15 march 2017 | by <a href="#" class="text-link-dark-gray">Hugh Macleod</a></span>
                        <a href="#" class="post-title text-medium text-extra-dark-gray width-90 sm-width-100 d-block">Recognizing the need is the primary condition for design.</a>
                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-15px-tb"></div>
                        <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                    </div>
                </div>
            </div>
            <!-- end blog post item -->
            <!-- start blog post item -->
            <div class="col-12 col-lg-3 col-md-6 last-paragraph-no-margin text-center text-md-left wow fadeInUp" data-wow-delay="0.6s">
                <div class="blog-post blog-post-style1">
                    <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                        <a href="#">
                            <img src="images/latest-blog4.jpg" alt="">
                        </a>
                    </div>
                    <div class="post-details">
                        <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom">10 march 2017 | by <a href="#" class="text-link-dark-gray">Jay Benjamin</a></span>
                        <a href="#" class="post-title text-medium text-extra-dark-gray width-90 sm-width-100 d-block">Get in over your head as often and as joyfully as possible.</a>
                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                        <p class="width-90 sm-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                    </div>
                </div>
            </div>
            <!-- end blog post item -->
        </div>
    </div>
</section>
<!-- end blog section -->

