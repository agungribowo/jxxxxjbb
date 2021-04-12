<?php
// require('admin_jfx/koneksi.php');
$id = $_REQUEST['id'];


//skrip untuk menampilkan data dari database


// $tsql = "SELECT  TblMarketSummaryHist.*, contract.*
//               FROM TblMarketSummaryHist
//               INNER JOIN contract
//               ON TblMarketSummaryHist.ContractID=contract.ContractID
//   WHERE  contract.ContractContent = '$id' ";
// $stmt = sqlsrv_query( $conn, $tsql);
//   $rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

  //
  //   $sqlmr = mysqli_query($koneksi, "SELECT marketsummary.*, jfx_contract.*
  //     FROM marketsummary
  //     INNER JOIN jfx_contract ON marketsummary.ContractID=jfx_contract.ContractID
  //     WHERE marketsummary.ContractID = '$id'
  //
  //     ");
  // $rowmr = mysqli_fetch_array($sqlmr);


?>
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/jfx/bg-custom-header.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 extra-small-screen d-flex flex-column justify-content-center page-title-large text-center">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Harga</h1>
                        <!-- end page title -->
                        <!-- start sub title -->
                        <span class="text-white-2 opacity6 alt-font mb-0"><?php echo $id ?></span>
                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start feature box section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- feature box item-->
                    <table class="table table-striped table-bordered table-sm " cellspacing="0"
        width="100%">
                        <tr>
                          <th>
                            <a target="_blank"  class="btn btn-danger" href="./page/export_setlement.php">EXPORT EXCEL</a>
                          </th>
                          <th>
                            <!-- <form action="./admin?hlm=gup_cair" method="post" name="form1" target="_self"> -->
    <form action="" method="post" name="form1" target="_self">
                                              <select  class="form-control chosen-select" style="width: 100%;"  name="cmb" required="required">
                                              <option   class="" value="<?php echo $cmb?> "><?php echo $cmb?> </option>

                                                        <?php

                                                        $q = mysqli_query($koneksi, "SELECT DISTINCT TradeDate FROM marketsummary
                                                        ");
                                                        while($data = mysqli_fetch_array($q)){
                                                        echo '<option   class="" value="'.$data['TradeDate'].'"> ' .date('d-m-Y', strtotime($data['TradeDate'])).' </option>';


                                                        }

                                                        ?>

                                                        </select>


                          </th>
                          <th>
                            <input name="btnTampil" class="btn btn-success" type="submit" value=" Tampilkan " />
                          </th>

                           </form>
                          </th>
                        </tr>
                      </table>

                    </div>
                    <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
        width="100%">
                        <thead style="background-color: #1a4a6e; color: #fff">
                          <tr>
                            <th>No</th>
                            <th >CONTRACT</th>
                            <th >MONTH</th>
                            <th >OPEN</th>
                            <th >HIGH</th>
                            <th >LOW</th>
                            <th >LAST</th>
                            <th >CHANGE</th>
                            <th >SETTLE</th>
                            <th >VOLUME</th>
                            <th >PREVIOUS SETTLEMENT</th>
                             <th >BUSSINESS DATE</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $tsql = "SELECT top 4 TblMarketPreviousSpa.*, contract.*
  FROM TblMarketPreviousSpa
  INNER JOIN contract ON TblMarketPreviousSpa.ContractID=contract.ContractID
                         WHERE  contract.ContractContent = '$id' ORDER BY BisnisDate DESC";
                          $stmt = sqlsrv_query( $conn, $tsql);
                            do {
                            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {


                          //skrip untuk menampilkan data dari database
                          // $sql = mysqli_query($koneksi, "SELECT marketsummary.*, jfx_contract.*
                          //   FROM marketsummary
                          //   INNER JOIN jfx_contract ON marketsummary.ContractID=jfx_contract.ContractID
                          //   WHERE marketsummary.ContractID = '$id'
                          // ");
                          //
                          //   $no = 0;
                          //
                          //    while($row = mysqli_fetch_array($sql)){
                          //     $no++;
                          //   $data1 =  date('Y', strtotime($row['ContractYear']));

                           $year1 = $row['BisnisDate']->format('Y');
                           $year = substr( $year1, -2);
                            $no++;

                              echo'
                          <tr>
                            <td>'.$no.'</td>
                            <td>
                        <a href="media?hal=spa-overview&id='.$row['ContractID'].'" style="color:blue;padding:5px">'.$row['ContractID'].'</a></td>
                            <td>'.$row['ContractMonth'].' ' .$year. '  </td>
                            <td>'.round($row['OpeningPrice'], 5).'</td>
                            <td>'.round($row['Highest'], 5).'</td>
                            <td>'.round($row['Lowest'], 5).'</td>
                            <td>'.round($row['LastVol'], 5).'</td>
                            <td>'.round($row['ChgPrice'],5).'</td>
                            <td>'.round($row['DailySettPrice'], 5).'</td>
                            <td>'.round($row['TotalVolume'], 5).'</td>
                            <td>'.round($row['DailyOpenInterest'], 5).'</td>
                            <td>'.round($row['DailyOpenInterest'], 5).'</td>

                          ';     }


                          } while ( sqlsrv_next_result($stmt) );
    ?>
                          </tr>
                        </tbody>
                      </table>
                    <!-- end feature box item-->
                </div>
            </div>
        </section>
        <!-- end feature box section -->
