
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/parallax-bg33.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Karir</h1>
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
                    <main class="col-12 col-lg-8 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">
                        <!-- start post item -->
                        <?php
                        //skrip untuk menampilkan data dari database
                        $sqlsy = mysqli_query($koneksi, "SELECT jfx_karir.*
                          FROM jfx_karir
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
                                    <div class="text-medium-gray text-extra-small margin-5px-bottom text-uppercase alt-font"><span>Posted on <?php echo $rowsy['tanggal']; ?></span></div>
                                    <a href="media?hal=artikel-detail&id=<?php echo $rowsy['id']; ?>" class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-600 margin-15px-bottom d-block"><?php echo $rowsy['judul']; ?></a>
                                    <img src="./admin_jfx/file/file_karir/<?php echo $rowsy['gambar']; ?>" style="width:120px" alt="">
                                    <p class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-400 margin-15px-bottom d-block">Persyaratan</p>
                                    <p class="m-0" align="justify"><?php echo  substr($rowsy['persyaratan'],0,500); ?></p>
                                    <p class="text-extra-dark-gray text-uppercase alt-font text-large font-weight-400 margin-15px-bottom d-block">Deskripsi Pekerjaan</p>
                                    <p class="m-0" align="justify"><?php echo  substr($rowsy['deskripsi'],0,500); ?></p>
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

                    <aside class="col-12 col-lg-4 float-right">
                        <div class="row justify-content-center">
                          <div class="col-12 col-lg-12 text-center margin-100px-bottom sm-margin-40px-bottom">
                            <div class="position-relative overflow-hidden w-100">
                              <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Pendaftaran Karir</span>
                            </div>
                          </div>
                        </div>
                        <form id="project-contact-form" action="./media?hal=edukasi_add" method="post">
                          <div class="row">
                            <div class="col-12">
                              <div id="success-project-contact-form" class="mx-0"></div>
                            </div>
                            <div class="col-12">
                              <input type="text" name="nama" placeholder="Nama Depan" class="big-input">
                            </div>
                            <div class="col-12">
                              <input type="text" name="instansi" placeholder="Nama Belakang"  class="big-input">
                            </div>
                            <div class="col-12">
                              <input type="text" name="email" placeholder="E-mail" class="big-input">
                            </div>
                            <div class="col-12">
                              <input type="text" name="no_telp" placeholder="No Telpon " class="big-input">
                            </div>
                            <div class="col-12">

                              <input type="text" name="posisi" placeholder="Pilih Posisi" class="big-input">

                            </div>
                            <div class="col-12">
                              <img src="./page/detail_produk/captcha.php"/>
                            </div>
                            <div class="col-12">
                              <input type="text" name="code" class="big-input" placeholder="Masukkan Captcha "/>
                            </div>

                            <div class="col-12 text-center">
                              <button id="project-contact-us-button" type="submit" class="btn btn-transparent-dark-gray btn-large margin-20px-top">Daftar</button>
                            </div>
                          </div>
                        </form> <br>
                        <p class="text-extra-dark-gray alt-font font-weight-300 margin-15px-bottom d-block">*Please send your CV to yuanita.nita@jfx.co.id with email  subject: Position (i.e Digital Marketing) - Your Full Name (i.e Yuanita  Nita)</p>
                    </aside>
                </div>
            </div>
        </section>
        <!-- end blog content section -->
