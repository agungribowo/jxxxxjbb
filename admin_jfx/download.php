<?php 
require('koneksi.php');
include 'konek_123.php';

?>

<!DOCTYPE html>
<html lang="en">


<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Kemenaker</title>

  <!-- Mobile Specific Metas
  ================================================== -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

  <!-- CSS
  ================================================== -->

  <!-- Bootstrap -->
  <link rel="stylesheet" href="web/css/bootstrap.min.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="web/css/style.css">
  <!-- Responsive styles-->
  <link rel="stylesheet" href="web/css/responsive.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="web/css/font-awesome.min.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="web/css/owl.carousel.min.css">
  <link rel="stylesheet" href="web/css/owl.theme.default.min.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="web/css/colorbox.css">
   <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="web/js/html5shiv.js"></script>
      <script src="web/js/respond.min.js"></script>
    <![endif]-->
 <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

</head>

<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;



}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from {  opacity:0 } 
  to {  opacity:1 }
}

@keyframes animatebottom { 
  from{  opacity:0 } 
  to{ opacity:1 }
}

#myDiv {
  display: none;
/*  text-align: center;*/
}



.ex3 {
  height: 400px;
  width: 100%;  
  overflow-y: auto;
}
</style>


<body class="hold-transition skin-blue sidebar-mini" onload="myFunction()" style="margin:0;">
<div id="loader"></div>

<div style="display:block;" id="myDiv" class="animate-bottom">

  <div class="body-inner">



  <!-- Header start -->
  <header id="header" class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <!-- <div class="logo"> -->
            <div class="">
            <!--  <a href="index.html">
              <img src="web/images/logos/logo.png" alt="">
             </a> -->
             <font style="font-weight: bold; font-size: 22px">SUBDIT PENYULUHAN DAN BIMBINGAN JABATAN </font> <br>
              <font style="font-weight: bold; font-size: 18px">Direktorat Pengembangan Pasar Kerja</font> <br>
             <font style="font-weight: bold; font-size: 16px"> Ditjen Binapenta & PKK </font>

          </div>
        </div><!-- logo col end -->

        <div class="col-md-4 col-sm-12">
          <!-- <div class="logo"> -->
            <div class="">
             <a href="index.php">
              <img src="web/images/logos/logo.png" alt="" style="width: 300px">
             </a>
          </div>
        </div><!-- logo col end -->


      </div><!-- Row end -->
    </div><!-- Logo and banner area end -->
  </header><!--/ Header end -->

  <div class="main-nav clearfix">
    <div class="container">
      <div class="row">
        <nav class="navbar navbar-expand-lg col">
          <div class="site-nav-inner float-left">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <!-- End of Navbar toggler -->

            <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse">
              <ul class="nav navbar-nav">
                     <li>
                <a href="login">BERANDA</a>
              </li>

              <li>
                <a href="tentang">TENTANG KAMI</a>
              </li>

              <li>
                <a href="download">DOWNLOAD</a>
              </li>

                <li>
                <a href="kontak">KONTAK</a>
              </li>

                <li>
                <a href="buletin">BULETIN</a>
              </li>

              </ul><!--/ Nav ul end -->
            </div><!--/ Collapse end -->

          </div><!-- Site Navbar inner end -->
        </nav><!--/ Navigation end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <input type="text" class="form-control" placeholder="Type what you want and enter">
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->

      </div><!--/ Row end -->
    </div><!--/ Container end -->

  </div><!-- Menu wrapper end -->

  <div class="gap-40"></div>



  <section class="block-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">



          <!--- Featured Tab startet -->
          <div class="featured-tab color-blue">
            <h3 class="block-title"><span>DOWNLOAD</span></h3>
           
            <div class="tab-content">
                <div class="tab-pane active animated fadeInRight" id="tab_a">
                  <div class="row">
                    <div class="col-lg-12 col-md-6">
                      <div class="post-block-style clearfix">


                      <div class="post-content">


   <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
  width="100%">
                <thead>
               <tr>
                   <th width="5%">No</th>
                  <th>File</th>
                  <th>Judul</th>
                  <th>Tgl Update</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php
   
      //skrip untuk menampilkan data dari database
      $sql = mysqli_query($koneksi, "SELECT download.*
        FROM download
        
        ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

         while($row = mysqli_fetch_array($sql)){
          $no++;


        echo '


                <tr>
                 <td>'.$no.'</td>
                 <td><a href="file_upload/'.$row['file_upload'].'" target="_BLANK">'.$row['file_upload'].'</a></td>
                  <td>'.$row['judul'].'</td>
                 
                    <td>'.$row['tgl_upload'].'</td>
                 
                 


                ';?>

                </tr><?php 
        }
      } else {
         echo '<td colspan="8"><center><p class="add">Tidak ada data untuk ditampilkan. <u><a href="" data-toggle="modal" data-target="#modal-default">Tambah data baru</a></u> </p></center></td></tr>';
      }
    ?>
                </tbody>
               
              </table>
                      </div><!-- Post content end -->
                    </div><!-- Post Block style end -->
                    </div><!-- Col end -->


                  </div><!-- Tab pane Row 1 end -->
                </div><!-- Tab pane 1 end -->



            </div><!-- tab content -->
          </div><!-- Technology Tab end -->

          <div class="gap-40"></div>



        </div><!-- Content Col end -->

        <div class="col-lg-4 col-md-12">
          <div class="sidebar sidebar-right">


            <div class="widget color-default">
                <h3 class="block-title"><span>Login</span></h3>
              <div class="">
                <div class="newsletter-introtext">
                  <h4>Login</h4>

                </div>

                <div class="newsletter-form">
                    <form method="POST" action="cek_login.php">
                <!--  <form action="#" method="post"> -->
                    <div class="form-group">
                      <input type="text"  name="username" id="newsletter-form-email" class="form-control form-control-lg" placeholder="username" autocomplete="off">
                      <br>
                      <input type="password" name="password" id="newsletter-form-email" class="form-control form-control-lg" placeholder="password" autocomplete="off">
                      <!-- <button class="btn btn-primary">Login</button> -->
                       <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                     <a href="./register/" class="btn btn-primary btn-block btn-flat">Daftar Peserta Bimtek</a>
                    </div>
                  </form>
                </div>
              </div><!-- Newsletter end -->
              <div class="list-post-block">
                <h3 class="block-title"><span>Informasi Pasar Kerja</span></h3>
                <ul class="list-post">
                  <li class="clearfix">
                    <div class="post-block-style post-float clearfix">
                    <div class="post-content">
                        <h2 style="text-align: right;">
                          <a href="https://ayokitakerja.kemnaker.go.id/konsultasi/form">Link</a>
                        </h2>
                        <hr>
                      </div><!-- Post content end -->
                    </div><!-- Post block style end -->
                  </li><!-- Li 1 end -->

              <h3 class="block-title"><span>ARTIKEL DOWNLOAD</span></h3>
                    <li class="clearfix">
                    <div class="post-block-style post-float clearfix">
                    <div class="post-content">
                             <ul class="">
                <?php 
      //skrip untuk menampilkan data dari database
      $sql = mysqli_query($koneksi, "SELECT download.*
        FROM download
        
        ");
      if(mysqli_num_rows($sql) > 0){
        $no = 0;

         while($row = mysqli_fetch_array($sql)){
          $no++;

           echo '  
                  <li class="">
                  
                      <div class="">
                        <h2 class="post-title">
                       <a href="file_upload/'.$row['file_upload'].'" target="_BLANK">'.$row['judul'].'</a>
                        </h2>
                    
                   
                  </li><!-- Li 1 end -->
 ';

}}?>  

                </ul><!-- List post end -->
                        <hr>
                      </div><!-- Post content end -->
                    </div><!-- Post block style end -->
                  </li><!-- Li 1 end -->



                <h3 class="block-title"><span>WEBSITE VISIT</span></h3>

                        <!-- <h2 style="text-align: right;">
                          <a href="#">13.000</a>
                        </h2> -->
                          <?php
              $ip      = $_SERVER['REMOTE_ADDR']; // Mendapatkan IP komputer user
              $tanggal = date("Ymd"); // Mendapatkan tanggal sekarang
              $waktu   = time(); //

              // Mencek berdasarkan IPnya, apakah user sudah pernah mengakses hari ini
              $s = mysql_query("SELECT * FROM statistik WHERE ip='$ip' AND tanggal='$tanggal'");
              // Kalau belum ada, simpan data user tersebut ke database
              if(mysql_num_rows($s) == 0){
                mysql_query("INSERT INTO statistik(ip, tanggal, hits, online) VALUES('$ip','$tanggal','1','$waktu')");
              }
              else{
                mysql_query("UPDATE statistik SET hits=hits+1, online='$waktu' WHERE ip='$ip' AND tanggal='$tanggal'");
              }

              $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE tanggal='$tanggal' GROUP BY ip"));
              $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(hits) FROM statistik"), 0);
              $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(hits) as hitstoday FROM statistik WHERE tanggal='$tanggal' GROUP BY tanggal"));
              $totalhits        = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0);
              $tothitsgbr       = mysql_result(mysql_query("SELECT SUM(hits) FROM statistik"), 0);
              $bataswaktu       = time() - 300;
              $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM statistik WHERE online > '$bataswaktu'"));

              $path = "counter/";
              $ext = ".png";

              $tothitsgbr = sprintf("%06d", $tothitsgbr);
              for ( $i = 0; $i <= 9; $i++ ){
                 $tothitsgbr = str_replace($i, "<img src='$path$i$ext' alt='$i'>", $tothitsgbr);
              }

              echo "<br /><p align=center>$tothitsgbr </p>
                    <table>
                    <tr><td class='news-title'><img src=counter/hariini.png> Pengunjung hari ini </td><td class='news-title'> : $pengunjung </td></tr>
                    <tr><td class='news-title'><img src=counter/total.png> Total pengunjung </td><td class='news-title'> : $totalpengunjung </td></tr>
                    <tr><td class='news-title'><img src=counter/hariini.png> Hits hari ini </td><td class='news-title'> : $hits[hitstoday] </td></tr>
                    <tr><td class='news-title'><img src=counter/total.png> Total Hits </td><td class='news-title'> : $totalhits </td></tr>
                    <tr><td class='news-title'><img src=counter/online.png> Pengunjung Online </td><td class='news-title'> : $pengunjungonline </td></tr>
                    </table>";
            ?>
                        <hr>



  <h3 class="block-title"><span>ARTIKEL TENTANG KARIR</span></h3>
                    <li class="clearfix">
                    <div class="post-block-style post-float clearfix">
                    <div class="post-content">
                        <ul class="list-post review-post-list">
                  <li class="clearfix">
                    <div class="post-block-style post-float clearfix">
                      <div class="post-thumb">
                        <a href="#">
                          <img class="img-fluid" src="images/news/review/review1.jpg" alt="" />
                        </a>
                      </div><!-- Post thumb end -->

                      <div class="post-content">
                        <h2 class="post-title">
                          <a href="#">Kemenaker Ajak BPJS Ketenagakerjaan Optimalkan Pelayanan Peserta</a>
                        </h2>

                      </div><!-- Post content end -->
                    </div><!-- Post block style end -->
                  </li><!-- Li 1 end -->

                  <li class="clearfix">
                    <div class="post-block-style post-float clearfix">
                      <div class="post-thumb">
                        <a href="#">
                          <img class="img-fluid" src="images/news/review/review2.jpg" alt="" />
                        </a>
                      </div><!-- Post thumb end -->

                      <div class="post-content">
                        <h2 class="post-title">
                          <a href="#">Kemenaker Membuka Layanan Portal Konsultasi Karir</a>
                        </h2>

                      </div><!-- Post content end -->
                    </div><!-- Post block style end -->
                  </li><!-- Li 2 end -->


                </ul><!-- List post end -->
                        <hr>
                      </div><!-- Post content end -->
                    </div><!-- Post block style end -->
                  </li><!-- Li 1 end -->
                </ul><!-- List post end -->
              </div><!-- List post block end -->

            </div><!-- Popular news widget end -->




            </div><!-- Trending news end -->

          </div><!-- Sidebar right end -->
        </div><!-- Sidebar Col end -->

      </div><!-- Row end -->
    </div><!-- Container end -->
  </section><!-- First block end -->


        <br><br>
  <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <div class="copyright-info">
              <span>Copyright © 2019 Kemenaker All Rights Reserved.</span>
            </div>
          </div>


        </div><!-- Row end -->

        <div id="back-to-top" class="back-to-top">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
   </div><!-- Copyright end -->


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script type="text/javascript" src="web/js/jquery.js"></script>
  <!-- Popper Jquery -->
  <script type="text/javascript" src="web/js/popper.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script type="text/javascript" src="web/js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="web/js/owl.carousel.min.js"></script>
  <!-- Color box -->
  <script type="text/javascript" src="web/js/jquery.colorbox.js"></script>
  <!-- Smoothscroll -->
  <script type="text/javascript" src="web/js/smoothscroll.js"></script>


  <!-- Template custom -->
  <script type="text/javascript" src="web/js/custom.js"></script>

  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

  </div><!-- Body inner end -->
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 2000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}


$(document).ready(function() {
    $('#example').DataTable( {
        "scrollX": true
    } );
} );


</script>
</body>

</html>
