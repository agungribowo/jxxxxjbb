<!-- start page title section -->
<section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-md-6 text-center text-md-left">
                <!-- start page title -->
                <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">Persyaratan</h1>
                <!-- end page title -->
            </div>
            <div class="col-xl-4 col-md-6 alt-font breadcrumb justify-content-center justify-content-md-end text-small sm-margin-10px-top">
                <!-- start breadcrumb -->
                <ul>
                    <li><a href="#" class="text-dark-gray">Pelaku Pasar</a></li>
                    <li class="text-dark-gray">Persyaratan</li>
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
            <div class="col-10 text-center text-lg-left md-margin-30px-bottom md-padding-80px-lr sm-padding-15px-lr wow fadeIn">
              <?php
              //skrip untuk menampilkan data dari database
              $sql1 = mysqli_query($koneksi, "SELECT jfx_persyaratan.*
                FROM jfx_persyaratan WHERE id= 3
                ");
                if(mysqli_num_rows($sql1) > 0){
                  $no = 0;
                  while($row1 = mysqli_fetch_array($sql1)){
                    $no++;
                    ?>
                <div class="col-12 col-lg-12 col-md-12 offset-lg-1" >
                    <h6 class="alt-font font-weight-700 text-extra-dark-gray margin-20px-bottom text-uppercase"><?php echo $row1['judul']; ?></h6>
                    <p><?php echo $row1['isi']; ?></p>
                </div>
                <?php
                }
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
