<?php
$id = $_REQUEST['id'];
//skrip untuk menampilkan data dari database
$sqlsy = mysqli_query($koneksi, "SELECT buletin.*
  FROM buletin where id = '$id'
  ");
$rowsy = mysqli_fetch_array($sqlsy);
?>

        <!-- start page title section -->
        <section class="wow fadeIn cover-background background-position-top top-space" style="background-image:url('./admin_jfx/file_buletin/<?php echo $rowsy['gambar']; ?>');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex justify-content-center flex-column text-center page-title-large padding-30px-tb">
                        <!-- start sub title -->
                        <span class="text-white-2 opacity6 alt-font margin-10px-bottom d-block text-uppercase text-small"><?php echo $rowsy['tgl_update']; ?></span>
                        <!-- end sub title -->
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 margin-10px-bottom">Artikel JFX</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start section -->
        <section class="wow fadeIn padding-20px-tb border-bottom border-color-extra-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 breadcrumb alt-font text-small">
                        <!-- breadcrumb -->
                        <ul>
                            <li><a href="media?hal=home" class="text-medium-gray">Beranda</a></li>
                            <li><a href="./media?hal=buletin" class="text-medium-gray">Daftar Artikel</a></li>
                            <li class="text-medium-gray"><?php echo $rowsy['judul']; ?></li>
                        </ul>
                        <!-- end breadcrumb -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- start blog content section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto last-paragraph-no-margin">
                        <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0"><?php echo $rowsy['judul']; ?></h5>
                        <img src="./admin_jfx/file_buletin/<?php echo $rowsy['gambar']; ?>" alt="" class="width-100 margin-40px-tb md-margin-30px-tb">
                        <p><?php echo $rowsy['isi']; ?></p>
                    </div>

                </div>

            </div>
        </section>
        <!-- end blog content section -->
        <!-- start section -->
        <section class="wow fadeIn pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 d-flex flex-wrap mx-auto p-0">
                        <div class="col-12 col-lg-8 col-md-6 text-center text-md-left sm-margin-10px-bottom">
                            <div class="tag-cloud">
                                <a href="blog-grid.html">Advertisement</a>
                                <a href="blog-grid.html">Artistry</a>
                                <a href="blog-grid.html">Blog</a>
                                <a href="blog-grid.html">Conceptual</a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 col-md-6 text-center text-md-right">
                            <div class="social-icon-style-6">
                                <ul class="extra-small-icon">
                                    <li><a class="likes-count" href="#" target="_blank"><i class="fas fa-heart text-deep-pink"></i><span class="text-small">300</span></a></li>
                                    <li><a class="facebook" href="http://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a class="twitter" href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="google" href="http://google.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a class="pinterest" href="http://dribbble.com/" target="_blank"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- end section -->
        <!-- start related post section -->
        <section class="wow fadeIn bg-light-gray">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-10 mx-auto text-center margin-80px-bottom sm-margin-40px-bottom">
                        <div class="position-relative overflow-hidden width-100">
                            <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray">Related Posts</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <?php
                                  //skrip untuk menampilkan data dari database
                                  $sqlsy1 = mysqli_query($koneksi, "SELECT buletin.*
                                      FROM buletin LIMIT 4
                                      ");
                                      if(mysqli_num_rows($sqlsy1) > 0){
                                          $no = 0;
                                          while($rowsy1 = mysqli_fetch_array($sqlsy1)){
                                              $no++;
                                              ?>


                    <!-- start post item -->
                    <div class="col-12 col-lg-3 col-md-6 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp">
                        <div class="blog-post blog-post-style1 text-center text-md-left">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                <a href="./media?hal=artikel-detail&id=<?php echo $rowsy1['id']; ?>">
                                    <img src="./admin_jfx/file_buletin/<?php echo $rowsy1['gambar']; ?>" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                                <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">17 july 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a></span>
                                <a href="./media?hal=artikel-detail&id=<?php echo $rowsy1['id']; ?>" class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100"><?php echo $rowsy1['judul']; ?></a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                                <p class="width-90 sm-width-100"><?php echo  substr($rowsy1['isi'],0,100); ?>....</p>
                            </div>
                        </div>
                    </div>
                    <!-- end post item -->

                    <?php
                }
            }
            ?>

                </div>
            </div>
        </section>
        <!-- end related post section -->
