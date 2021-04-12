
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/jfx/visi.png');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 extra-small-screen d-flex flex-column justify-content-center page-title-large text-center">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Kinerja Transaksi</h1>
                        <!-- end page title -->
                        <!-- start sub title -->

                        <!-- end sub title -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title section -->
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

                                    <p style="text-align:center; padding-top:5px"><b>Kinerja Pialang</b></p>
                                    <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >
                                      <option>Hari ini</option>
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
                                    $tsqlpialang = " SELECT TOP 10 MemberVolume.*
                                    FROM MemberVolume WHERE MemberType='B' ORDER BY Vol DESC
                                    ";
                                    $stmtpia = sqlsrv_query( $conn, $tsqlpialang);
                                    do {
                                      while ($rowpia = sqlsrv_fetch_array($stmtpia, SQLSRV_FETCH_ASSOC)) {


                                        $nop++;
                                        echo'
                                        <tr>
                                        <td>'.$nop.'</td>
                                        <td>'.$rowpia['membername'].'</td>
                                        <td>'.$rowpia['Vol'].'   </td>
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
                                    <p style="text-align:center; padding-top:5px"><b>Kinerja Pedagang</b></p>
                                    <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >

                                      <option>Hari ini</option>
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
                                    $tsqldagang = " SELECT TOP 10  MemberVolume.*
                                    FROM MemberVolume WHERE MemberType='T'  ORDER BY Vol DESC
                                    ";
                                    $stmtdagang = sqlsrv_query( $conn, $tsqldagang);
                                    do {
                                      while ($rowdagang = sqlsrv_fetch_array($stmtdagang, SQLSRV_FETCH_ASSOC)) {


                                        $no1++;
                                        echo'
                                        <tr>
                                        <td>'.$no1.'</td>
                                        <td>'.$rowdagang['membername'].'</td>
                                        <td>'.$rowdagang['Vol'].'   </td>
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
                                    <p style="text-align:center; padding-top:5px"><b>Kontrak tertinggi</b></p>
                                    <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >


                                      <option>Hari ini</option>
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
                                        <th >ID</th>
                                      <th >Volume</th>

                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $tsqlkon = " SELECT TOP 10 MemberVolume.*
                                    FROM MemberVolume WHERE MemberType='B' ORDER BY Vol DESC
                                    ";
                                    $stmtkon = sqlsrv_query( $conn, $tsqlkon);
                                    do {
                                      while ($rowkon = sqlsrv_fetch_array($stmtkon, SQLSRV_FETCH_ASSOC)) {


                                        $no3++;
                                        echo'
                                        <tr>
                                        <td>'.$no3.'</td>
                                          <td>'.$rowkon['ContractSubType'].'</td>
                                        <td>'.$rowkon['membername'].'</td>
                                        <td>'.$rowkon['Vol'].'   </td>
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
                                    <p style="text-align:center; padding-top:5px"><b>Grup kontrak tertinggi</b></p>
                                    <select  class="form-control chosen-select" style="width: 100%;"  required="required" name="pialang" onchange="showUser(this.value)" >

                                      <option>Hari ini</option>
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
                                    $tsql = " SELECT  TOP 10  MemberVolume.*
                                    FROM MemberVolume  ORDER BY VolEQ DESC
                                    ";
                                    $stmt = sqlsrv_query( $conn, $tsql);
                                    do {
                                      while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {


                                        $no4++;
                                        echo'
                                        <tr>
                                        <td>'.$no4.'</td>
                                          <td>'.$row['ContractSubType'].'</td>
                                        <td>'.$row['groupreport1'].'</td>
                                        <td>'.$row['VolEQ'].'   </td>
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
