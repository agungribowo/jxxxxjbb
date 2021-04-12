<section class="wow fadeIn p-0 main-slider mobile-height top-space">
    <div class="swiper-full-screen swiper-container w-100 white-move">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <?php
            $tsqls = " SELECT home.*
            FROM home";
            $stmtsl = sqlsrv_query( $conn, $tsqls);
            do {
              while ($rowsl = sqlsrv_fetch_array($stmtsl, SQLSRV_FETCH_ASSOC)) {
                ?>
            <div class="swiper-slide cover-background" style="background-image:url('admin_jfx/file_web/<?php echo $rowsl['gambar']; ?>');">
                <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                <div class="container position-relative one-fourth-screen sm-height-400px">
                    <div class="slider-typography text-center">
                        <div class="slider-text-middle-main">
                            <div class="slider-text-middle">

                                <h1 class="alt-font text-uppercase text-white-2 font-weight-700 width-75 sm-width-95 mx-auto margin-35px-bottom sm-margin-15px-bottom"><?php echo $rowsl['judul']; ?></h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
          }
          } while ( sqlsrv_next_result($stmtsl) );

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
<!-- start feature box section -->
<section class="bg-jfx wow fadeIn">
  <!-- <section class="bg-extra-dark-gray wow fadeIn"> -->
    <div class="container">
        <!-- <div class="row justify-content-center"> -->
        <div class="row ">
            <div class="col-12 col-xl-12 col-md-12 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom ">
                <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">MARKET ACTIVITY</div>
                <h5 class="alt-font text-white-2 font-weight-600 mb-0">The widest range of global benchmark products across all major asset classes. All right here.</h5>
                  <font style="color:#fff; font-size:20px;">Market data delayed approx 10 minutes.</font><br>
                  <font style="color:#fff; font-size:20px;">Last Updated
                    <?php
                    // echo time();
                    $timestamp = time();
                    $stringDate = date('d-m-Y H:i', $timestamp);
                    echo "String date: {$stringDate} ";
                    ?> GMT +7</font><br>
            </div>
        </div>


<!-- row nama  -->
<div class="row">
  <div class="col-md-4">

    <a href="media?hal=list-settlement&id=COCOA" style="color:#fff;padding:5px">COCOA </a>
<!-- isi data biru box -->
<div class="row">
  <?php
  //skrip untuk menampilkan data dari database

  $tsql = " SELECT top 4 MarketSummaryLive.*, contract.*
  FROM MarketSummaryLive
  INNER JOIN contract ON MarketSummaryLive.ContractID=contract.ContractID
  WHERE  contract.ContractContent = 'COCOA' order by SeqNo DESC   ";
  $stmt = sqlsrv_query( $conn, $tsql);
  do {
    while ($rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {

      $harga_skrg_cc5 = $rowmr['SettlementPrice'];
      $harga_krmn_cc5 = $rowmr['LastPrice'];
      if ($harga_skrg_cc5 <= $harga_krmn_cc5 ) {
      $makadatcc5 = '<i class="fa fa-chevron-down" aria-hidden="true" style="color:red"></i>';

      }
      if ($harga_skrg_cc5 >= $harga_krmn_cc5 ) {
      $makadatcc5 = '<i class="fa fa-chevron-up" aria-hidden="true" style="color:green"></i>';

      }
      if ($harga_skrg_cc5 == $harga_krmn_cc5 ) {
      $makadatcc5 = '<i class="fa fa-minus" aria-hidden="true" style="color:yellow"></i>';

      }


      ?>
          <a href="media?hal=hm-overview&id=<?php echo $rowmr['ContractID']; ?>" >
  <div class="col-md-6" style="padding: 5px;">
    <div style="color:#fff ;border: 1px solid #1e2333;padding-bottom: 5px; padding: 5px;" class="widget__content widget__grid filled pad20" id="grad1">
      <table width="100%">
        <tr>
          <th> <?php echo $rowmr['ContractID']; ?> <?php echo $rowmr['TimeOfData']->format('M'); ?>-<?php
          $year1 = $rowmr['TimeOfData']->format('Y');
          $year = substr( $year1, -2);
          echo $year;
          ?></th>
          <th><?php echo $rowmr['ContractType']; ?>  </th>
          <th style="font-weight: bold; color:red"> <?php echo $makadatcc5; ?> </th>
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
                <th style="text-align:center">
                        <?php
                  $tvcf = $rowmr['TotalVolume'];
                  $hslcf = $tvcf / 100 ;
                  echo "$hslcf %";
                ?>

                </th>

              </tr>
            </table>
      </div>
    </div>
  </a>
  </div>
  <?php
}
} while ( sqlsrv_next_result($stmt) );

?>

</div>
  <!-- isi end data biru -->
  </div>
  <div class="col-md-4">

    <a href="media?hal=list-settlement&id=COFFEE" style="color:#fff;padding:5px">COFFEE </a>
    <!-- kolom -->
    <!-- isi data biru box -->
    <div class="row">
      <?php
      //skrip untuk menampilkan data dari database

      $tsql = "SELECT top 4 MarketSummaryLive.*, contract.*
  FROM MarketSummaryLive
  INNER JOIN contract ON MarketSummaryLive.ContractID=contract.ContractID
  WHERE  contract.ContractContent = 'COFFEE' order by SeqNo DESC  ";
      $stmt = sqlsrv_query( $conn, $tsql);
      do {
        while ($rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
          $harga_skrg_COFFEE = $rowmr['SettlementPrice'];
          $harga_krmn_COFFEE = $rowmr['LastPrice'];
          if ($harga_skrg_COFFEE <= $harga_krmn_COFFEE ) {
          $makadatCOFFEE = '<i class="fa fa-chevron-down" aria-hidden="true" style="color:red"></i>';

          }
          if ($harga_skrg_COFFEE >= $harga_krmn_COFFEE ) {
          $makadatCOFFEE = '<i class="fa fa-chevron-up" aria-hidden="true" style="color:green"></i>';

          }
          if ($harga_skrg_COFFEE == $harga_krmn_COFFEE ) {
          $makadatCOFFEE = '<i class="fa fa-minus" aria-hidden="true" style="color:yellow"></i>';

          }

          ?>
              <a href="media?hal=hm-overview&id=<?php echo $rowmr['ContractID']; ?>" >
      <div class="col-md-6" style="padding: 5px;">
        <div style="color:#fff ;border: 1px solid #1e2333;padding-bottom: 5px; padding: 5px;" class="widget__content widget__grid filled pad20" id="grad1">
          <table width="100%">
            <tr>
              <th> <?php echo $rowmr['ContractID']; ?> <?php echo $rowmr['ContractMonth']; ?>-<?php
              $year1 = $rowmr['TimeOfData']->format('Y');
              $year = substr( $year1, -2);
              echo $year;
              ?></th>
              <th><?php echo $rowmr['ContractType']; ?>  </th>
              <th ><?php echo $makadatCOFFEE; ?></th>
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
                <th style="text-align:center">
                        <?php
                  $tvcf = $rowmr['TotalVolume'];
                  $hslcf = $tvcf / 100 ;
                  echo "$hslcf %";
                ?>

                </th>

              </tr>
            </table>
          </div>
        </div>
      </a>
      </div>
      <?php
    }
    } while ( sqlsrv_next_result($stmt) );

    ?>

    </div>
      <!-- isi end data biru -->
  </div>

  <div class="col-md-4">

    <a href="media?hal=list-settlement&id=OLEIN" style="color:#fff;padding:5px">OLEIN </a>

<!-- isi data biru box -->
<div class="row">
  <?php
  //skrip untuk menampilkan data dari database

  $tsql = " SELECT top 4 MarketSummaryLive.*, contract.*
  FROM MarketSummaryLive
  INNER JOIN contract ON MarketSummaryLive.ContractID=contract.ContractID
  WHERE  contract.ContractContent = 'OLEIN' order by SeqNo DESC  ";
  $stmt = sqlsrv_query( $conn, $tsql);
  do {
    while ($rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
      $harga_skrg_OLEIN = $rowmr['SettlementPrice'];
      $harga_krmn_OLEIN = $rowmr['LastPrice'];
      if ($harga_skrg_OLEIN <= $harga_krmn_OLEIN ) {
      $makadatOLEIN = '<i class="fa fa-chevron-down" aria-hidden="true" style="color:red"></i>';

      }
      if ($harga_skrg_OLEIN >= $harga_krmn_OLEIN ) {
      $makadatOLEIN = '<i class="fa fa-chevron-up" aria-hidden="true" style="color:green"></i>';

      }
      if ($harga_skrg_OLEIN == $harga_krmn_OLEIN ) {
      $makadatOLEIN = '<i class="fa fa-minus" aria-hidden="true" style="color:yellow"></i>';

      }

      ?>
          <a href="media?hal=hm-overview&id=<?php echo $rowmr['ContractID']; ?>" >
  <div class="col-md-6" style="padding: 5px;">
    <div style="color:#fff ;border: 1px solid #1e2333;padding-bottom: 5px; padding: 5px;" class="widget__content widget__grid filled pad20" id="grad1">
      <table width="100%">
        <tr>
          <th> <?php echo $rowmr['ContractID']; ?> <?php echo $rowmr['TimeOfData']->format('M'); ?>-<?php
          $year1 = $rowmr['TimeOfData']->format('Y');
          $year = substr( $year1, -2);
          echo $year;
          ?></th>
          <th><?php echo $rowmr['ContractType']; ?>  </th>
          <th ><?php echo $makadatOLEIN; ?></th>
        </tr>
      </table>
      <font style="font-weight: bold; color:#fff"><?php echo substr($rowmr['ContractName'],0,16); ?></font><br>
      <div style="color:#fff">
        <table  width="100%" style="font-size:9px; ">
          <tr>
            <th style="text-align:center"><?php echo round($rowmr['LastPrice'],4); ?></th>
            <th style="text-align:center"><?php echo round($rowmr['TotalVol'],4); ?></th>
          </tr>
          <tr>
            <th style="text-align:center"><?php echo round($rowmr['ChgPrice'],4); ?></th>
            <th style="text-align:center">
                   <?php
                  $tvcf = $rowmr['TotalVol'];
                  $hslcf = $tvcf / 100 ;
                  echo "$hslcf %";
                ?>
            </th>
          </tr>
        </table>
      </div>
    </div>
  </a>
  </div>
  <?php
}
} while ( sqlsrv_next_result($stmt) );

?>

</div>
  <!-- isi end data biru -->
  </div>

</div>
<!-- end row nama-->

<!-- ==================================================================== -->
<br>
<!-- ==================================================================== -->
<!-- row nama  -->
<div class="row">

  <div class="col-md-4">

    <a href="media?hal=list-settlement&id=GOLD" style="color:#fff;padding:5px">GOLD </a>
    <!-- kolom -->
    <!-- isi data biru box -->
    <div class="row">
      <?php
      //skrip untuk menampilkan data dari database

      $tsql = "SELECT top 4 MarketSummaryLive.*, contract.*
  FROM MarketSummaryLive
  INNER JOIN contract ON MarketSummaryLive.ContractID=contract.ContractID
  WHERE  contract.ContractContent = 'GOLD' order by SeqNo DESC ";
      $stmt = sqlsrv_query( $conn, $tsql);
      do {
        while ($rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
          $harga_skrg_GOLD = $rowmr['SettlementPrice'];
          $harga_krmn_GOLD = $rowmr['LastPrice'];
          if ($harga_skrg_GOLD <= $harga_krmn_GOLD ) {
          $makadatGOLD = '<i class="fa fa-chevron-down" aria-hidden="true" style="color:red"></i>';

          }
          if ($harga_skrg_GOLD >= $harga_krmn_GOLD ) {
          $makadatGOLD = '<i class="fa fa-chevron-up" aria-hidden="true" style="color:green"></i>';

          }
          if ($harga_skrg_GOLD == $harga_krmn_GOLD ) {
          $makadatGOLD = '<i class="fa fa-minus" aria-hidden="true" style="color:yellow"></i>';

          }


          ?>
              <a href="media?hal=hm-overview&id=<?php echo $rowmr['ContractID']; ?>" >
      <div class="col-md-6" style="padding: 5px;">
        <div style="color:#fff ;border: 1px solid #1e2333;padding-bottom: 5px; padding: 5px;" class="widget__content widget__grid filled pad20" id="grad1">
          <table width="100%">
            <tr>
              <th> <?php echo $rowmr['ContractID']; ?> <?php echo $rowmr['TimeOfData']->format('M'); ?>-<?php
              $year1 = $rowmr['TimeOfData']->format('Y');
              $year = substr( $year1, -2);
              echo $year;
              ?></th>
              <th><?php echo $rowmr['ContractType']; ?>  </th>
              <th ><?php echo $makadatGOLD; ?></th>
            </tr>
          </table>
          <font style="font-weight: bold; color:#fff"><?php echo substr($rowmr['ContractName'],0,16); ?></font><br>
          <div style="color:#fff">
            <table  width="100%" style="font-size:9px; ">
              <tr>
                <th style="text-align:center"><?php echo round($rowmr['LastPrice'],4); ?></th>
                <th style="text-align:center"><?php echo round($rowmr['TotalVol'],4); ?></th>
              </tr>
              <tr>
                <th style="text-align:center"><?php echo round($rowmr['ChgPrice'],4); ?></th>
                <th style="text-align:center">
                  <?php
                  $tvg = $rowmr['TotalVol'];
                  $hslg = $tvg / 100 ;
                  echo "$hslg %";
                ?></th>
              </tr>
            </table>
          </div>
        </div>
      </a>
      </div>
      <?php
    }
    } while ( sqlsrv_next_result($stmt) );

    ?>

    </div>
      <!-- isi end data biru -->
  </div>
  <div class="col-md-4">

    <a href="media?hal=list-settlement-spa&id=COMMDT" style="color:#fff;padding:5px">COMMDT </a>
    <!-- kolom -->
    <!-- isi data biru box -->
    <div class="row">
      <?php
      //skrip untuk menampilkan data dari database

      $tsqlcom = "SELECT top 4 TblMarketPreviousSpa.*, contract.*
  FROM TblMarketPreviousSpa
  INNER JOIN contract ON TblMarketPreviousSpa.ContractID=contract.ContractID
      WHERE  contract.ContractContent = 'COMMDT'  ORDER BY BisnisDate DESC";
      $stmtcom = sqlsrv_query( $conn, $tsqlcom);
      do {
        while ($rowmrcom = sqlsrv_fetch_array($stmtcom, SQLSRV_FETCH_ASSOC)) {
          $harga_skrg_COMMDT = $rowmrcom['PrevSettPrice'];
          $harga_krmn_COMMDT = $rowmrcom['LastPrice'];
          if ($harga_skrg_COMMDT <= $harga_krmn_COMMDT ) {
          $makadatCOMMDT = '<i class="fa fa-chevron-down" aria-hidden="true" style="color:red"></i>';

          }
          if ($harga_skrg_COMMDT >= $harga_krmn_COMMDT ) {
          $makadatCOMMDT = '<i class="fa fa-chevron-up" aria-hidden="true" style="color:green"></i>';

          }
          if ($harga_skrg_COMMDT == $harga_krmn_COMMDT ) {
          $makadatCOMMDT = '<i class="fa fa-minus" aria-hidden="true" style="color:yellow"></i>';

          }

          ?>
              <a href="media?hal=spa-overview&id=<?php echo $rowmrcom['ContractID']; ?>" >
      <div class="col-md-6" style="padding: 5px;">
        <div style="color:#fff ;border: 1px solid #1e2333;padding-bottom: 5px; padding: 5px;" class="widget__content widget__grid filled pad20" id="grad1">
          <table width="100%">
            <tr>
              <th> <?php echo substr($rowmrcom['ContractID'],0,5); ?> <?php echo $rowmrcom['BisnisDate']->format('M'); ?>-<?php
              $year1 = $rowmrcom['BisnisDate']->format('Y');
              $year = substr( $year1, -2);
              echo $year;
              ?></th>
              <th><?php echo $rowmrcom['ContractType']; ?>  </th>
              <th><?php echo $makadatCOMMDT; ?></th>
            </tr>
          </table>
          <font style="font-weight: bold; color:#fff"><?php echo substr($rowmrcom['ContractName'],0,16); ?></font><br>
          <div style="color:#fff">
            <table  width="100%" style="font-size:9px; ">
              <tr>
                <th style="text-align:center"><?php echo round($rowmrcom['LastPrice'],4); ?></th>
                <th style="text-align:center"><?php echo round($rowmrcom['Volume'],4); ?></th>
              </tr>
              <tr>
                <th style="text-align:center"><?php echo round($rowmrcom['ChgPrice'],4); ?></th>
                <th style="text-align:center">
                   <?php
                  $tvg = $rowmr['Volume'];
                  $hslg = $tvg / 100 ;
                  echo "$hslg %";
                ?>
                </th>
              </tr>
            </table>
          </div>
        </div>
      </a>
      </div>
      <?php
    }
    } while ( sqlsrv_next_result($stmt) );

    ?>

    </div>
      <!-- isi end data biru -->
  </div>

  <div class="col-md-4">

    <a href="media?hal=list-settlement-spa&id=INDEX" style="color:#fff;padding:5px">INDEX </a>

<!-- isi data biru box -->
<div class="row">
  <?php
  //skrip untuk menampilkan data dari database
  $tsql = "SELECT top 4 TblMarketPreviousSpa.*, contract.*
  FROM TblMarketPreviousSpa
  INNER JOIN contract ON TblMarketPreviousSpa.ContractID=contract.ContractID
      WHERE  contract.ContractContent = 'INDEX' ORDER BY BisnisDate DESC ";
  $stmt = sqlsrv_query( $conn, $tsql);
  do {
    while ($rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $harga_skrg_INDEX = $rowmr['PrevSettPrice'];
        $harga_krmn_INDEX = $rowmr['LastPrice'];
        if ($harga_skrg_INDEX <= $harga_krmn_INDEX ) {
        $makadatINDEX = '<i class="fa fa-chevron-down" aria-hidden="true" style="color:red"></i>';

        }
        if ($harga_skrg_INDEX >= $harga_krmn_INDEX ) {
        $makadatINDEX = '<i class="fa fa-chevron-up" aria-hidden="true" style="color:green"></i>';

        }
        if ($harga_skrg_INDEX == $harga_krmn_INDEX ) {
        $makadatINDEX = '<i class="fa fa-minus" aria-hidden="true" style="color:yellow"></i>';

        }

        $datakolom = $rowmr['ContractType'];
        if ($datakolom == '') {
      $makakolom = '';
    } else {
        $makakolom = 'hidden';
    }

      ?>
          <a href="media?hal=spa-overview&id=<?php echo $rowmr['ContractID']; ?>" >
  <div class="col-md-6" style="padding: 5px;">
    <div style="color:#fff ;border: 1px solid #1e2333;padding-bottom: 5px; padding: 5px;" class="widget__content widget__grid filled pad20" id="grad1">
      <table width="100%">
        <tr>
          <th> <?php echo substr($rowmr['ContractID'],0,5); ?> <?php echo $rowmr['BisnisDate']->format('M'); ?>-<?php
          $year1 = $rowmr['BisnisDate']->format('Y');
          $year = substr( $year1, -2);
          echo $year;
          ?></th>
          <th><?php echo $rowmr['ContractType']; ?>  </th>
          <th><?php echo $makadatINDEX; ?></th>
        </tr>
      </table>
      <font style="font-weight: bold; color:#fff"><?php echo substr($rowmr['ContractName'],0,16); ?></font><br>
      <div style="color:#fff">
        <table  width="100%" style="font-size:9px; ">
          <tr>
            <th style="text-align:center"><?php echo round($rowmr['LastPrice'],4); ?></th>
            <th style="text-align:center"><?php echo round($rowmr['Volume'],4); ?></th>
          </tr>
          <tr>
            <th style="text-align:center"><?php echo round($rowmr['ChgPrice'],4); ?></th>
            <th style="text-align:center">
              <?php
                  $tvg = $rowmr['Volume'];
                  $hslg = $tvg / 100 ;
                  echo "$hslg %";
                ?>
            </th>
          </tr>
        </table>
      </div>
    </div>
  </a>
  </div>
  <?php
}
} while ( sqlsrv_next_result($stmt) );

?>
<?php include 'home_box/box4.php'; ?>
</div>
  <!-- isi end data biru -->
  </div>
</div>
<!-- end row nama-->


<!-- ==================================================================== -->
<br>
<!-- ==================================================================== -->
<!-- row nama  -->
<div class="row">

  <div class="col-md-4">

    <a href="media?hal=list-settlement-spa&id=FOREX" style="color:#fff;padding:5px">FOREX </a>
  <!-- kolom -->
    <!-- isi data biru box -->
    <div class="row">
      <?php
      //skrip untuk menampilkan data dari database

      $tsql = " SELECT top 4 TblMarketPreviousSpa.*, contract.*
  FROM TblMarketPreviousSpa
  INNER JOIN contract ON TblMarketPreviousSpa.ContractID=contract.ContractID
      WHERE  contract.ContractContent = 'FOREX' ORDER BY BisnisDate DESC ";
      $stmt = sqlsrv_query( $conn, $tsql);
      do {
        while ($rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
          $harga_skrg_FOREX = $rowmr['PrevSettPrice'];
          $harga_krmn_FOREX = $rowmr['LastPrice'];
          if ($harga_skrg_FOREX <= $harga_krmn_FOREX ) {
          $makadatFOREX = '<i class="fa fa-chevron-down" aria-hidden="true" style="color:red"></i>';

          }
          if ($harga_skrg_FOREX >= $harga_krmn_FOREX ) {
          $makadatFOREX = '<i class="fa fa-chevron-up" aria-hidden="true" style="color:green"></i>';

          }
          if ($harga_skrg_FOREX == $harga_krmn_FOREX ) {
          $makadatFOREX = '<i class="fa fa-minus" aria-hidden="true" style="color:yellow"></i>';

          }

          ?>
              <a href="media?hal=spa-overview&id=<?php echo $rowmr['ContractID']; ?>" >
      <div class="col-md-6" style="padding: 5px;">
        <div style="color:#fff ;border: 1px solid #1e2333;padding-bottom: 5px; padding: 5px;" class="widget__content widget__grid filled pad20" id="grad1">
          <table width="100%">
            <tr>
              <th> <?php echo substr($rowmr['ContractID'],0,5); ?> <?php echo $rowmr['BisnisDate']->format('M'); ?>-<?php
              $year1 = $rowmr['BisnisDate']->format('Y');
              $year = substr( $year1, -2);
              echo $year;
              ?></th>
              <th><?php echo $rowmr['ContractType']; ?>  </th>
              <th><?php echo $makadatFOREX; ?></th>
            </tr>
          </table>
          <font style="font-weight: bold; color:#fff"><?php echo substr($rowmr['ContractName'],0,16); ?></font><br>
          <div style="color:#fff">
            <table  width="100%" style="font-size:9px; ">
              <tr>
                <th style="text-align:center"><?php echo round($rowmr['LastPrice'],4); ?></th>
                <th style="text-align:center"><?php echo round($rowmr['Volume'],4); ?></th>
              </tr>
              <tr>
                <th style="text-align:center"><?php echo round($rowmr['ChgPrice'],4); ?></th>
                <th style="text-align:center">

                   <?php
                  $tvg = $rowmr['Volume'];
                  $hslg = $tvg / 100 ;
                  echo "$hslg %";
                ?>
                </th>
              </tr>
            </table>
          </div>
        </div>
      </a>
      </div>
      <?php
    }
    } while ( sqlsrv_next_result($stmt) );

    ?>

    </div>
      <!-- isi end data biru -->
  </div>
  <div class="col-md-4">
    <!-- isi data biru box -->

    <a href="media?hal=list-settlement-spa&id=SSTOCK" style="color:#fff;padding:5px">SSTOCK <?php echo $maka; ?></a>
  <!-- kolom -->


    <div class="row" >
      <?php
      //skrip untuk menampilkan data dari database
      $tsql = " SELECT top 4 TblMarketPreviousSpa.*, contract.*
  FROM TblMarketPreviousSpa
  INNER JOIN contract ON TblMarketPreviousSpa.ContractID=contract.ContractID
      WHERE  contract.ContractContent = 'SSTOCK' ORDER BY BisnisDate DESC ";
      $stmt = sqlsrv_query( $conn, $tsql);
      do {
        while ($rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
          $harga_skrg_SSTOCK = $rowmr['PrevSettPrice'];
          $harga_krmn_SSTOCK = $rowmr['LastPrice'];
          if ($harga_skrg_SSTOCK <= $harga_krmn_SSTOCK ) {
          $makadatSSTOCK = '<i class="fa fa-chevron-down" aria-hidden="true" style="color:red"></i>';

          }
          if ($harga_skrg_SSTOCK >= $harga_krmn_SSTOCK ) {
          $makadatSSTOCK = '<i class="fa fa-chevron-up" aria-hidden="true" style="color:green"></i>';

          }
          if ($harga_skrg_SSTOCK == $harga_krmn_SSTOCK ) {
          $makadatSSTOCK = '<i class="fa fa-minus" aria-hidden="true" style="color:yellow"></i>';

          }

          $datakolom = $rowmr['ContractType'];
          if ($datakolom == '') {
        $makakolom = '';
      } else {
          $makakolom = 'hidden';
      }

          ?>
              <a href="media?hal=spa-overview&id=<?php echo $rowmr['ContractID']; ?>" >
      <div class="col-md-6" style="padding: 5px;">
        <div style="color:#fff ;border: 1px solid #1e2333;padding-bottom: 5px; padding: 5px;" class="widget__content widget__grid filled pad20" id="grad1">
          <table width="100%">
            <tr>
              <th> <?php echo substr($rowmr['ContractID'],0,5); ?> <?php echo $rowmr['BisnisDate']->format('M'); ?>-<?php
              $year1 = $rowmr['BisnisDate']->format('Y');
              $year = substr( $year1, -2);
              echo $year;
              ?></th>
              <th><?php echo $rowmr['ContractType']; ?>  </th>
            <th><?php echo $makadatSSTOCK; ?></th>
            </tr>
          </table>
          <font style="font-weight: bold; color:#fff"><?php echo substr($rowmr['ContractName'],0,16); ?></font><br>
          <div style="color:#fff">
            <table  width="100%" style="font-size:9px; ">
              <tr>
                <th style="text-align:center"><?php echo round($rowmr['LastPrice'],4); ?></th>
                <th style="text-align:center"><?php echo round($rowmr['Volume'],4); ?></th>
              </tr>
              <tr>
                <th style="text-align:center"><?php echo round($rowmr['ChgPrice'],4); ?></th>
                <th style="text-align:center">


                   <?php
                  $tvg = $rowmr['Volume'];
                  $hslg = $tvg / 100 ;
                  echo "$hslg %";
                ?>
                </th>
              </tr>
            </table>
          </div>
        </div>
      </a>
      </div>
      <?php
    }
    } while ( sqlsrv_next_result($stmt) );

    ?>

<?php  include 'home_box/box4.php.'  ?>
    </div>
      <!-- isi end data biru -->
  </div>


<?php include 'home_box/home_box4.php'; ?>

</div>
<!-- end row nama-->

    </div>
    <!-- end container -->
</section>
<!-- start feature box section -->

<!-- start explore work section -->
<section class="p-0 wow fadeIn bg-extra-dark-gray" id="services">
    <div class="container-fluid p-0">
        <div>

        <center> <h2 style="text-align:center; padding:2px;font-size:20px; color: #fff">VOLUME BULANAN</h2>

        </center>

    <div id="chartdiv"></div>
        </div>
    </div>
</section>
<!-- end explore work section -->
<!-- start services section -->
<section class="p-0 wow fadeIn">
    <div class="container-fluid p-0 ">
        <div class="row">
            <div class="col-12">
                <div class="row m-0">
                    <!-- start interactive banners item -->
                    <div class="col-12 col-md-3 padding-5px-all grid-item feature-box-4 wow slideInDown ">
                        <div class="position-relative overflow-hidden ">
                          <div class="at-description ">
                            <p style="text-align:center; padding-top:5px"><b>Kinerja Pedagang</b></p>
                            <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >

                              <option>Bilateral</option>
                              <option>Multiteral</option>
                            </select>
                            <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >
                              <option>Terkini</option>
                              <option>Bulan ini</option>
                              <option>Tahun ini</option>
                            </select>
                            <hr>
                          </div>
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
                            $tsqlpialang = "   SELECT top 10 (groupcode), membername,Sum(VolumeEQ) as vol FROM [website].[dbo].[TblTradesmember]
                            WHERE membertype='T' AND contracttype='SPA'
                            GROUP BY groupcode,membername ORDER BY vol desc
                            ";
                            $stmtpia = sqlsrv_query( $conn, $tsqlpialang);
                            do {
                              while ($rowpia = sqlsrv_fetch_array($stmtpia, SQLSRV_FETCH_ASSOC)) {


                                $nop++;
                                echo'
                                <tr>
                                <td>'.$nop.'</td>
                                <td>'.$rowpia['membername'].'</td>
                                <td>'.$rowpia['vol'].'   </td>
                                ';     }

                              } while ( sqlsrv_next_result($stmtpia) );
                              ?>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-12 col-md-3 padding-5px-all grid-item feature-box-4 wow slideInDown">
                        <div class="position-relative overflow-hidden">
                          <div class="at-description">
                          <p style="text-align:center; padding-top:5px"><b>Kinerja Pialang</b></p>
                            <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >

                              <option>Bilateral</option>
                              <option>Multiteral</option>
                            </select>
                            <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >

                              <option>Terkini</option>
                              <option>Bulan ini</option>
                              <option>Tahun ini</option>
                            </select>
                            <hr>
                          </div>
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
                            $tsqldagang = "   SELECT top 10 (groupcode), membername,Sum(VolumeEQ) as vol FROM [website].[dbo].[TblTradesmember]
                            WHERE membertype='B' AND contracttype='SPA'
                            GROUP BY groupcode,membername ORDER BY vol desc
                            ";
                            $stmtdagang = sqlsrv_query( $conn, $tsqldagang);
                            do {
                              while ($rowdagang = sqlsrv_fetch_array($stmtdagang, SQLSRV_FETCH_ASSOC)) {


                                $no1++;
                                echo'
                                <tr>
                                <td>'.$no1.'</td>
                                <td>'.$rowdagang['membername'].'</td>
                                <td>'.$rowdagang['vol'].'   </td>
                                ';     }

                              } while ( sqlsrv_next_result($stmtdagang) );
                              ?>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-12 col-md-3 padding-5px-all grid-item feature-box-4 wow slideInDown" data-wow-delay="0.2s">
                        <div class="position-relative overflow-hidden">
                          <div class="at-description">
                              <p style="text-align:center; padding-top:5px"><b>Grup kontrak tertinggi</b></p>

                            <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >

                              <option>Bilateral</option>
                              <option>Multiteral</option>
                            </select>
                            <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >


                              <option>Terkini</option>
                              <option>Bulan ini</option>
                              <option>Tahun ini</option>
                            </select>
                            <hr>
                          </div>
                          <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
                          width="100%">
                          <thead style="background-color: #1a4a6e; color: #fff">
                            <tr>
                              <th>Rank</th>
                              <th >Tipe</th>
                                <th >Produk</th>
                              <th >Volume</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $tsqlkon = "SELECT top 10 (groupreport1) as product,
				                        Sum(VolumeEQ) as vol, ContractSubType
                                FROM [website].[dbo].[TblTradesMember]
                            WHERE ContractType='SPA' AND ContractSubType='BIL'
                            GROUP BY groupreport1, ContractSubType ORDER BY vol desc
                            ";
                            $stmtkon = sqlsrv_query( $conn, $tsqlkon);
                            do {
                              while ($rowkon = sqlsrv_fetch_array($stmtkon, SQLSRV_FETCH_ASSOC)) {
                                $no3++;
                                echo'
                                <tr>
                                <td>'.$no3.'</td>
                                  <td>'.$rowkon['ContractSubType'].'</td>
                                <td>'.$rowkon['product'].'</td>
                                <td>'.$rowkon['vol'].'   </td>
                                ';     }

                              } while ( sqlsrv_next_result($stmtkon) );
                              ?>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- end interactive banners item -->
                    <!-- start interactive banners item -->
                    <div class="col-12 col-md-3 padding-5px-all grid-item feature-box-4 wow slideInDown" data-wow-delay="0.4s">
                        <div class="position-relative overflow-hidden">
                          <div class="at-description">
                           <p style="text-align:center; padding-top:5px"><b>Kontrak tertinggi</b></p>
                            <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >

                              <option>Bilateral</option>
                              <option>Multiteral</option>
                            </select>
                            <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >

                              <option>Terkini</option>
                              <option>Bulan ini</option>
                              <option>Tahun ini</option>
                            </select>
                            <hr>
                          </div>
                          <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
                          width="100%">
                          <thead style="background-color: #1a4a6e; color: #fff">
                            <tr>
                              <th>Rank</th>
                              <th >Tipe</th>
                              <th >Group</th>
                              <th >Volume</th>

                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $tsql = "SELECT top 10 (ContractID) as contract,Sum(TotalVol) as vol FROM [dbo].MarketSummaryLive

                            GROUP BY ContractID ORDER BY vol desc
                            ";
                            $stmt = sqlsrv_query( $conn, $tsql);
                            do {
                              while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {


                                $no4++;
                                echo'
                                <tr>
                                <td>'.$no4.'</td>
                                  <td></td>
                                <td>'.$row['contract'].'</td>
                                <td>'.$row['vol'].'   </td>
                                ';     }

                              } while ( sqlsrv_next_result($stmt) );
                              ?>
                            </tr>
                          </tbody>
                        </table>
                        </div>
                    </div>
                    <!-- end interactive banners item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end services section -->

<!-- start blog section -->
<section class="border-top border-color-extra-light-gray wow fadeIn">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                <!-- <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Berita JFX</div> -->
                <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">BERITA JFX</h5>
            </div>
        </div>
        <div class="row">
          <?php
          //skrip untuk menampilkan data dari database
          $sqlsy = mysqli_query($koneksi, "SELECT buletin.*
            FROM buletin  ORDER BY tgl_update DESC LIMIT 4
            ");
            if(mysqli_num_rows($sqlsy) > 0){
              $no = 0;
              while($rowsy = mysqli_fetch_array($sqlsy)){
                $no++;
                ?>
            <!-- start blog post item -->
            <div class="col-12 col-lg-3 col-md-6 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin text-center text-md-left wow fadeInUp">
                <div class="blog-post blog-post-style1">
                    <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                        <a href="./media?hal=artikel-detail&id=<?php echo $rowsy['id']; ?>">
                            <img src="./admin_jfx/file_buletin/<?php echo $rowsy['gambar']; ?>" alt="">
                        </a>
                    </div>
                    <div class="post-details">
                        <span class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom"><?php echo $rowsy['tgl_update']; ?> | by <a href="#" class="text-link-dark-gray"><?php echo $rowsy['admin']; ?></a></span>
                        <a href="./media?hal=artikel-detail&id=<?php echo $rowsy['id']; ?>" class="post-title text-medium text-extra-dark-gray width-90 sm-width-100 d-block"><?php echo $rowsy['judul']; ?></a>
                        <div class="separator-line-horrizontal-full bg-medium-light-gray margin-15px-tb"></div>
                        <p class="width-90 sm-width-100"><?php echo  substr($rowsy['isi'],0,350); ?></p>
                    </div>
                </div>
            </div>
            <!-- end blog post item -->
            <?php
          }
          }
          ?>


        </div>
    </div>
</section>
<!-- end blog section -->
<?php
include 'rumus_chart_vol.php';
include 'chart_vol.php';
?>
