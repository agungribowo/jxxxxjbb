<?php
// require('admin_jfx/koneksi.php');
$id = $_REQUEST['id'];


// skrip untuk menampilkan data dari database
$tsql = " SELECT DISTINCT marketsummary.ProdContractID, contract.*
                            FROM marketsummary
                            INNER JOIN contract ON marketsummary.ProdContractID=contract.ContractID
                            
                            where ContractContent = '$id' ";
$stmt = sqlsrv_query( $conn, $tsql);
  $rowmr = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

  $datains = $rowmr['InstrumentType'];



  if ($datains == 'Rolling' ) {
    $hsldata = "and InstrumentType = 'Rolling' ";
  }  

  if ($datains == 'Futures' ) {
    $hsldata = "and InstrumentType = 'Futures' ";
  }  




  
  //   $sqlmr = mysqli_query($koneksi, "SELECT marketsummary.*, jfx_contract.*
  //     FROM marketsummary
  //     INNER JOIN jfx_contract ON marketsummary.ContractID=jfx_contract.ContractID
  //     WHERE marketsummary.ContractID = '$id'
  
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
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">PRODUK</h1>
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

                  

                    
                  

                    </div>
                    <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
        width="100%">
                        <thead style="background-color: #1a4a6e; color: #fff">
                          <tr>
                     
                            <th >PRODUK</th>
                          
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $tsql = "SELECT DISTINCT marketsummary.ProdContractID, contract.*
                            FROM marketsummary
                            INNER JOIN contract ON marketsummary.ProdContractID=contract.ContractID
                            
                            where ContractContent = '$id' $hsldata
                          ";
                          $stmt = sqlsrv_query( $conn, $tsql);
                            do {
                            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                             $no++;

                           

                              echo'
                          <tr>
                         
                            <td>
                        <a href="media?hal=hm-overview&id='.$row['ContractID'].'" style="color:blue;padding:5px">'.$row['ContractID'].'</a></td>
                           

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
