
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/parallax-bg33.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Berita dan Artikel</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start post content section -->

        <section>

            <div class="container">
                <div class="row">
                    <main class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">
                        <!-- start post item -->
                        <?php
                        //skrip untuk menampilkan data dari database
                        $sqlsy = mysqli_query($koneksi, "SELECT buletin.*
                          FROM buletin
                          ");
                          if(mysqli_num_rows($sqlsy) > 0){
                            $no = 0;
                            while($rowsy = mysqli_fetch_array($sqlsy)){
                              $no++;
                              ?>
                        <div class="col-12 blog-post-content margin-60px-bottom sm-margin-30px-bottom text-center text-md-left">
                            <!-- <div class="blog-image"><a href="media?hal=artikel-detail&id=<?php echo $rowsy['id']; ?>"><img src="./admin_jfx/file_buletin/<?php echo $rowsy['gambar']; ?>" style="width:220px; height:166px"></a></div> -->
                            <div class="blog-text border-all d-inline-block width-100">
                                <div class="content padding-50px-all sm-padding-20px-all">
                                    <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on June 30, 2017</span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<span><a href="blog-grid.html" class="text-medium-gray ">Branding</a></span></div>
                                    <a href="media?hal=artikel-detail&id=<?php echo $rowsy['id']; ?>" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block"><?php echo $rowsy['judul']; ?></a>
                                    <img src="./admin_jfx/file_buletin/<?php echo $rowsy['gambar']; ?>" style="width:220px; height:166px" alt="">
                                    <p class="m-0" align="justify"><?php echo  substr($rowsy['isi'],0,500); ?></p>
                                </div>
                                <div class="row m-0 author border-top border-color-extra-light-gray text-center">
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <img src="images/avtar-04.jpg" alt="" class="rounded-circle width-30px">
                                            <span class="text-medium-gray text-uppercase text-extra-small alt-font padding-10px-left">by <a href="blog-grid.html" class="text-medium-gray">Paul Scrivens</a></span>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name border-lr padding-15px-all border-color-extra-light-gray sm-no-border">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-heart margin-5px-right text-small"></i>5 like(s)</a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 d-flex flex-column justify-content-center name padding-15px-all">
                                        <div>
                                            <a href="#" class="text-extra-small alt-font text-medium-gray text-uppercase"><i class="far fa-comment margin-5px-right text-small"></i>3 Comment(s)</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end post item -->
                        <?php
                      }
                    }
                    ?>

                        <!-- start pagination -->
                        <div class="col-12 text-center margin-100px-top md-margin-50px-top wow fadeInUp">
                            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                <ul class="mx-auto">
                                    <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right d-none d-md-inline-block"></i> Prev</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left d-none d-md-inline-block"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end pagination -->
                    </main>
                    <aside class="col-12 col-lg-3 float-right">
                        <div class="d-inline-block width-100 margin-45px-bottom sm-margin-25px-bottom">
                            <form>
                                <div class="position-relative">
                                    <input type="text" class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left" placeholder="Enter your keywords...">
                                    <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fas fa-search no-margin-left"></i></button>
                                </div>
                            </form>
                        </div>


                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Kategori</span></div>
                            <ul class="list-style-6 margin-50px-bottom text-small">
                                <li><a href="blog-masonry.html">Arts and Entertainment</a><span>12</span></li>
                                <li><a href="blog-masonry.html">Blog</a><span>05</span></li>
                                <li><a href="blog-masonry.html">Blog Full width</a><span>08</span></li>
                                <li><a href="blog-masonry.html">Blog Grid</a><span>10</span></li>
                                <li><a href="blog-masonry.html">Branding</a><span>21</span></li>
                                <li><a href="blog-masonry.html">Design Tutorials</a><span>09</span></li>
                                <li><a href="blog-masonry.html">Designing</a><span>07</span></li>
                                <li><a href="blog-masonry.html">Feature</a><span>06</span></li>
                                <li><a href="blog-masonry.html">Home Blog</a><span>10</span></li>
                                <li><a href="blog-masonry.html">Onepage Fashion</a><span>11</span></li>
                                <li><a href="blog-masonry.html">Sample</a><span>06</span></li>
                            </ul>
                        </div>
                        <div class="bg-deep-pink padding-30px-all text-white-2 text-center margin-45px-bottom sm-margin-25px-bottom">
                            <i class="fas fa-quote-left icon-small margin-15px-bottom d-block"></i>
                            <span class="text-extra-large font-weight-300 margin-20px-bottom d-block">The future belongs to those who believe in the beauty of their dreams.</span>
                            <a class="btn btn-very-small btn-transparent-white border-width-1 text-uppercase" href="portfolio-boxed-grid-overlay.html">Explore Portfolio</a>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Popular post</span></div>
                            <ul class="latest-post position-relative">
                                <li class="media">
                                    <figure>
                                        <a href="blog-masonry.html"><img src="images/aside-image-2.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Traveling abroad will change you forever</span></a> <span class="d-block text-medium-gray text-small">April 30, 2016</span></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-masonry.html"><img src="images/aside-image-3.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Having a new perspec-tive on new york city</span></a> <span class="d-block text-medium-gray text-small">March 10, 2016</span></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-masonry.html"><img src="images/aside-image-4.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">The incredible talents of street performers</span></a> <span class="d-block text-medium-gray text-small">March 05, 2016</span></div>
                                </li>
                                <li class="media">
                                    <figure>
                                        <a href="blog-masonry.html"><img src="images/aside-image-5.jpg" alt=""></a>
                                    </figure>
                                    <div class="media-body text-small"><a href="blog-masonry.html" class="text-extra-dark-gray"><span class="d-inline-block margin-5px-bottom">Praesent placerat risus quis eros</span></a> <span class="d-block text-medium-gray text-small">March  01, 2016</span></div>
                                </li>
                            </ul>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>tag</span></div>
                            <div class="tag-cloud">
                                <a href="blog-grid.html">ADVERTISEMENT</a>
                                <a href="blog-grid.html">ARTISTRY</a>
                                <a href="blog-grid.html">BLOG</a>
                                <a href="blog-grid.html">CONCEPTUAL</a>
                                <a href="blog-grid.html">DESIGN</a>
                                <a href="blog-grid.html">FASHION</a>
                                <a href="blog-grid.html">INSPIRATION</a>
                                <a href="blog-grid.html">SMART</a>
                                <a href="blog-grid.html">QUOTES</a>
                                <a href="blog-grid.html">UNIQUE</a>
                                <a href="blog-grid.html">CONCEPTS</a>
                            </div>
                        </div>
                        <div class="margin-45px-bottom sm-margin-25px-bottom">
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Archive</span></div>
                            <ul class="list-style-6 margin-20px-bottom text-small">
                                <li><a href="blog-grid.html">July 2017</a><span>12</span></li>
                                <li><a href="blog-grid.html">June 2017</a><span>05</span></li>
                                <li><a href="blog-grid.html">May 2017</a><span>08</span></li>
                                <li><a href="blog-grid.html">April 2017</a><span>10</span></li>
                                <li><a href="blog-grid.html">March 2017</a><span>21</span></li>
                                <li><a href="blog-grid.html">February 2017</a><span>09</span></li>
                                <li><a href="blog-grid.html">January 2017</a><span>07</span></li>
                            </ul>
                        </div>

                        <div>
                            <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Instagram</span></div>
                            <div class="instagram-follow-api">
                                <ul id="instaFeed-aside"></ul>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
        <!-- end blog content section -->
