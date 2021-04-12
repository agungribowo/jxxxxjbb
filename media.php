<?php
require('admin_jfx/koneksi.php');
require('admin_jfx/koneksi_sqlsrv.php');
require('admin_jfx/koneksi_sqlsrv2.php');
date_default_timezone_set('Asia/Jakarta');
// error_reporting(0);
// session_start();
include_once "./lib/lib.php";
?>

<!doctype html>
<html class="no-js" lang="en">


<head>
        <!-- title -->
        <title>JFX</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
        <meta name="author" content="ThemeZaa">
        <!-- description -->
        <meta name="description" content="Market grows on where prices discovered">
        <!-- keywords -->
        <meta name="keywords" content="bursa berjangka bursaberjangka future exchange futuresexchange komoditi trading commodity trader bullish bearish pialang broker pialang berjangka broker berjangka bappebti">

        <!-- favicon -->
        <link rel="icon" href="favicon.ico">
        <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
        <!-- animation -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- et line icon -->
        <link rel="stylesheet" href="css/et-line-icons.css" />
        <!-- font-awesome icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <!-- themify icon -->
        <link rel="stylesheet" href="css/themify-icons.css">
        <!-- swiper carousel -->
        <link rel="stylesheet" href="css/swiper.min.css">
        <!-- justified gallery  -->
        <link rel="stylesheet" href="css/justified-gallery.min.css">
        <!-- magnific popup -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- revolution slider -->
        <link rel="stylesheet" type="text/css" href="revolution/css/settings.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">


        <!-- bootsnav -->
        <link rel="stylesheet" href="css/bootsnav.css">
        <!-- style -->
        <link rel="stylesheet" href="css/style.css" />
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css" />
        <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
        <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/dark.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>


        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        <link rel="stylesheet" type="text/css" href="./lib/tigra_calendar/tcal.css"/>
        <script type="text/javascript" src="./lib/tigra_calendar/tcal.js"></script>
<style>

#chartdiv {
  width: 100%;
  height: 500px;
}
</style>

    </head>
    <body>
        <!-- start header -->
        <header class="header-with-topbar">
            <!-- topbar -->
            <div class="top-header-area bg-jfx padding-10px-tb">

                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-md-10 text-uppercase alt-font d-flex align-items-center justify-content-center justify-content-md-start">
                          <marquee style="color:#fff">
                          <?php
                          //skrip untuk menampilkan data dari database

                          $tsqlmer = "SELECT  MarketSummaryLive.*, contract.*
                          FROM MarketSummaryLive
                          INNER JOIN contract ON MarketSummaryLive.ContractID=contract.ContractID
                          ";
                          $stmtmer = sqlsrv_query( $conn, $tsqlmer);
                          do {
                            while ($rowmrmer = sqlsrv_fetch_array($stmtmer, SQLSRV_FETCH_ASSOC)) {

$harga_skrg = $rowmrmer['SettlementPrice'];
$harga_krmn = $rowmrmer['LastPrice'];
if ($harga_skrg <= $harga_krmn ) {
$makadat = '<i class="fa fa-chevron-down" aria-hidden="true" style="color:red"></i>';
$makawar = 'red';
}
if ($harga_skrg >= $harga_krmn ) {
$makadat = '<i class="fa fa-chevron-up" aria-hidden="true" style="color:green"></i>';
$makawar = 'green';
}
if ($harga_skrg == $harga_krmn ) {
$makadat = '<i class="fa fa-minus" aria-hidden="true" style="color:yellow"></i>';
$makawar = 'yellow';
}

                              ?>

  <th>&nbsp; <?php echo $makadat; ?> </th>
  <th>&nbsp;</th>
  <th> <?php echo $rowmrmer['ContractID']; ?>  <?php echo $rowmrmer['ContractMonth']; ?> -<?php
  $year1 = $rowmrmer['TimeOfData']->format('Y');
  $year = substr( $year1, -2);
  echo $year;
  ?></th>
    <th>&nbsp;</th>
      <th><font style="color:<?php echo $makawar; ?>"><?php echo number_format($rowmrmer['SettlementPrice']); ?></font></th>



                         <?php
                       }
                       } while ( sqlsrv_next_result($stmtmer) );

                       ?>
                       </marquee>
                        </div>
                        <div class="col-md-2 d-none d-md-flex align-items-center justify-content-end">
                            <!-- <div class="icon-social-very-small display-inline-block line-height-normal">
                                <a href="https://www.facebook.com/" title="Facebook" target="_blank" class="text-link-white-2"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                <a href="https://twitter.com/" title="Twitter" target="_blank" class="text-link-white-2"><i class="fab fa-twitter"></i></a>
                                <a href="https://linkedin.com/" title="Linked In" target="_blank" class="text-link-white-2"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://plus.google.com/" title="Google Plus" target="_blank" class="text-link-white-2"><i class="fab fa-google-plus-g"></i></a>
                            </div> -->
                            <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle top-1px"></div>
                            <div class="btn-group dropdown-style-1">
                                <button type="button" class="btn dropdown-toggle sm-width-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Indonesia <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#" title="Indonesia"><span class="icon-country ind"></span>Indonesia</a></li>
                                    <li><a href="#" title="English"><span class="icon-country usa"></span>English</a></li>
                                    <li><a href="#" title="China"><span class="icon-country china"></span>China</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end topbar -->
            <!-- start navigation -->
            <?php
             include "menu.php";
            ?>

        <!-- end navigation -->
            <!-- end navigation -->
        </header>


        <!-- end header -->
        <!-- start slider -->


        			<?php
        			 include "konten.php";
        			?>


        <!-- end call to action section -->
        <!-- start footer -->
        <footer class="footer-modern-dark bg-extra-dark-gray padding-five-tb sm-padding-30px-tb">
            <div class="footer-widget-area padding-40px-bottom sm-padding-30px-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- start slogan -->
                        <div class="col-lg-4 text-center text-md-left md-margin-three-bottom sm-margin-20px-bottom">
                            <h6 class="text-dark-gray width-70 lg-width-100 no-margin-bottom" style="color:#fff">Berita Terbaru</h6>
                            <?php
                                            //skrip untuk menampilkan data dari database
                                            $sqlsy = mysqli_query($koneksi, "SELECT buletin.*
                                                FROM buletin LIMIT 2
                                                ");
                                                if(mysqli_num_rows($sqlsy) > 0){
                                                    $no = 0;
                                                    while($rowsy = mysqli_fetch_array($sqlsy)){
                                                        $no++;
                                                        ?>
                    <li>
                             <a href="./media?hal=buletin"> <span class="display-block"  style="color:#fff"><?php echo $rowsy['judul']; ?></span></a>
                           <font  style="color:#fff"> <?php echo $rowsy['tgl_update']; ?> </font>
                                            </li>
                                            <?php
                                        }
                                    }
                                    ?>
                        </div>
                        <!-- end slogan -->
                        <!-- start contact information -->
                        <div class="col-lg-4 col-md-6 text-center text-md-left sm-margin-20px-bottom">
                            <span class="display-block"  style="color:#fff">PT. BURSA BERJANGKA JAKARTA ( BBJ )</span>
                            <span class="display-block"  style="color:#fff">The City Tower Building Lantai 20</span>
                            <span class="display-block"  style="color:#fff">Jl. MH. Thamrin No. 81</span>
                             <span class="display-block"  style="color:#fff">Menteng - Jakarta</span>
                              <span class="display-block"  style="color:#fff">Kode pos 10310</span>
                               <span class="display-block"  style="color:#fff">Tel : (021) 31996030 Fax: (021) 31996050</span>

                        </div>
                        <!-- end contact information -->
                        <!-- start social media -->
                        <div class="col-lg-4 col-md-6 social-style-2 text-center text-md-left">
                            <a href="./?hal=home"><img class="" src="images/logo/logo jfx.png" data-rjs="images/logo-white@2x.png" alt="JFX"></a>

                        </div>
                        <!-- end social media -->
                    </div>
                </div>
            </div>
            <div class="container">
                <!-- start copyright -->
                <div class="footer-bottom border-top border-color-medium-dark-gray padding-40px-top sm-padding-30px-top">
                    <div class="row align-items-center">
                        <div class="col-md-12 text-md-right text-center text-small"  style="color:#fff">Copyright &copy; PT. BURSA BERJANGKA JAKARTA 2021. All rights reserved.</div>
                    </div>
                </div>
                <!-- end copyright -->
            </div>
        </footer>
        <!-- end footer -->
        <!-- start scroll to top -->
        <a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
        <!-- end scroll to top  -->
        <!-- javascript libraries -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <script type="text/javascript" src="js/modernizr.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/skrollr.min.js"></script>
        <script type="text/javascript" src="js/smooth-scroll.js"></script>
        <script type="text/javascript" src="js/jquery.appear.js"></script>
        <!-- menu navigation -->
        <script type="text/javascript" src="js/bootsnav.js"></script>
        <script type="text/javascript" src="js/jquery.nav.js"></script>
        <!-- animation -->
        <script type="text/javascript" src="js/wow.min.js"></script>
        <!-- page scroll -->
        <script type="text/javascript" src="js/page-scroll.js"></script>
        <!-- swiper carousel -->
        <script type="text/javascript" src="js/swiper.min.js"></script>
        <!-- counter -->
        <script type="text/javascript" src="js/jquery.count-to.js"></script>
        <!-- parallax -->
        <script type="text/javascript" src="js/jquery.stellar.js"></script>
        <!-- magnific popup -->
        <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
        <!-- portfolio with shorting tab -->
        <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
        <!-- images loaded -->
        <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
        <!-- pull menu -->
        <script type="text/javascript" src="js/classie.js"></script>
        <script type="text/javascript" src="js/hamburger-menu.js"></script>
        <!-- counter  -->
        <script type="text/javascript" src="js/counter.js"></script>
        <!-- fit video  -->
        <script type="text/javascript" src="js/jquery.fitvids.js"></script>
        <!-- skill bars  -->
        <script type="text/javascript" src="js/skill.bars.jquery.js"></script>
        <!-- justified gallery  -->
        <script type="text/javascript" src="js/justified-gallery.min.js"></script>
        <!--pie chart-->
        <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
        <!-- retina -->
        <script type="text/javascript" src="js/retina.min.js"></script>


        <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
        <!-- <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script> -->
        <!-- https://code.jquery.com/jquery-3.5.1.js
        https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js -->
        <!-- revolution -->
        <!-- <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script> -->
        <!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
        <!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
        <!-- setting -->
        <script type="text/javascript" src="js/main.js"></script>


          <script type="text/javascript">
          $(document).ready(function () {
            $('#dtHorizontalVerticalExample').DataTable({
              "scrollX": true,

            });
            $('.dataTables_length').addClass('bs-select');
          });
        </script>




    </body>

</html>
