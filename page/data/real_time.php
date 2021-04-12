
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/parallax-bg33.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Update Data</h1>
                        <!-- end page title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
        <!-- start post content section -->

          <!-- start feature box section -->
          <section class="wow fadeIn">
              <div class="container">
                  <div class="row">
                      <!-- feature box item-->
                      <table class="table table-striped table-bordered table-sm " cellspacing="0"
          width="100%">
                          <tr>

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
                              <th >PREVIOUS STTLEMENT</th>
                              <th >BUSSINESS DATE</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $tsql = " SELECT TOP 50 MarketSummaryLive.*
                              FROM MarketSummaryLive";
                            $stmt = sqlsrv_query( $conn, $tsql);
                              do {
                              while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {

                             $year1 = $row['TimeOfData']->format('Y');
                             $year = substr( $year1, -2);
                              $no++;

                                echo'
                            <tr>
                              <td>'.$no.'</td>
                              <td>'.$row['ContractID'].'</td>
                              <td>'.$row['ContractMonth'].' ' .$year. '  </td>
                              <td>'.round($row['OpenPrice'], 5).'</td>
                              <td>'.round($row['HighPrice'], 5).'</td>
                              <td>'.round($row['LowPrice'], 5).'</td>
                              <td>'.round($row['LastPrice'], 5).'</td>
                              <td>'.round($row['ChgPrice'],5).'</td>
                              <td>'.round($row['SettlementPrice'], 5).'</td>
                              <td>'.round($row['TotalVol'], 5).'</td>
                                <td>'.round($row['PrevPrice'], 5).'</td>
                              <td>'.$row['TimeOfData']->format('d/m/Y').'</td>

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
