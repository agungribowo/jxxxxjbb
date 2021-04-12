
        <!-- start page title section -->
        <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5" style="background-image:url('images/parallax-bg13.jpg');">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 extra-small-screen d-flex flex-column justify-content-center page-title-large text-center">
                        <!-- start page title -->
                        <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">Forum</h1>
                        <!-- end page title -->
                        <!-- start sub title -->

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

                  <a href="" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModaltopik" >
                  Buat Topik
                </a>
                  <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
                  width="100%">
                          <thead style="background-color:#718492 ">
                              <tr>
                                  <th>Topik</th>
                                  <th>Dibuat</th>

                              </tr>
                          </thead>
                          <tbody>
                            <tr>
                   <td><a href="?hal=listforum">Bagaimana cara untuk bermain saham ? </a></td>
                   <td>5-1-2021</td>

                </tr>
                <tr>
                   <td><a href="">Bagaimana cara mendaftar sebagai pialang ?</a></td>
                   <td>5-1-2021</td>

                </tr>

                            </tbody>

                </table>


                </div>
            </div>
        </section>
        <!-- end feature box section -->


        <!-- Modal -->
        <div class="modal fade" id="myModaltopik" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Buat topik</h4> -->
              </div>
              <div class="modal-body">
                <form method="POST" action="">
                  <fieldset>
                    <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left">
                        <div class="form-group">
                          <input type="text" name="username" class="form-control" placeholder="Nama anda" autocomplete="off">
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left">
                        <div class="form-group">
                      <textarea class="form-control" placeholder="Isi topik"></textarea>
                        </div>
                      </div>


                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pull-left">
                        <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
              <div class="modal-footer">
                <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
              </div>
            </div>

          </div>
        </div>
