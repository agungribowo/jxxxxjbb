<!-- DataTables -->
<link rel="stylesheet" href="./admin_jfx/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<style>
.dtHorizontalVerticalExampleWrapper {
  max-width: 600px;
  margin: 0 auto;
}
#dtHorizontalVerticalExample th, td {
  white-space: nowrap;
}
table.dataTable thead .sorting:after,
table.dataTable thead .sorting:before,
table.dataTable thead .sorting_asc:after,
table.dataTable thead .sorting_asc:before,
table.dataTable thead .sorting_asc_disabled:after,
table.dataTable thead .sorting_asc_disabled:before,
table.dataTable thead .sorting_desc:after,
table.dataTable thead .sorting_desc:before,
table.dataTable thead .sorting_desc_disabled:after,
table.dataTable thead .sorting_desc_disabled:before {
  bottom: .5em;
}
</style>
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/parallax-bg33.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Data Historis</h1>
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
                              <th >RANGE</th>
                              <th >SETTLE</th>
                              <th >VOLUME</th>
                              <th >PREVIOUS</th>
                              <th >BUSSINESS DATE</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                            $tsql = " SELECT TOP 50 TblMarketSummaryHist.*
                              FROM TblMarketSummaryHist";
                            $stmt = sqlsrv_query( $conn, $tsql);
                              do {
                              while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {



                             $year1 = $row['TradeDate']->format('Y');
                             $year = substr( $year1, -2);
                              $no++;

                                echo'
                            <tr>
                              <td>'.$no.'</td>
                              <td>'.$row['ContractID'].'</td>
                              <td>'.$row['ContractMonth'].' ' .$year. '  </td>
                              <td>'.round($row['OpeningPrice'], 5).'</td>
                              <td>'.round($row['Highest'], 5).'</td>
                              <td>'.round($row['Lowest'], 5).'</td>
                              <td>'.round($row['LastVol'], 5).'</td>
                              <td>'.round($row['ChgPrice'],5).'</td>
                              <td>'.round($row['DailySettPrice'], 5).'</td>
                              <td>'.round($row['TotalVolume'], 5).'</td>
                                <td>'.round($row['PrevSettPrice'], 5).'</td>
                              <td>'.$row['TradeDate']->format('d/m/Y').'</td>

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





          <script type="text/javascript">
          $(document).ready(function () {
            $('#dtHorizontalVerticalExample').DataTable({
              "scrollX": true,

            });
            $('.dataTables_length').addClass('bs-select');
          });
        </script>


        <!-- DataTables -->
        <script src="./admin_jfx/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="./admin_jfx/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script>
          $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
              'paging'      : true,
              'lengthChange': false,
              'searching'   : false,
              'ordering'    : true,
              'info'        : true,
              'autoWidth'   : false
            })
          })
        </script>
