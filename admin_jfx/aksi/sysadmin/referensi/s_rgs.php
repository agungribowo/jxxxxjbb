<!-- =============== Left side End ================-->
<div class="main-content-wrap sidenav-open d-flex flex-column">
    <!-- ============ Body content start ============= -->
    <div class="main-content">
        <div class="row">
        <?php
        if( empty( $_SESSION['id'] ) ){

        if($_SESSION['level']=="")
        header('Location: ./');
        die();
        } else {

            $file_sas = $_REQUEST['file_sas'];
            $sql = mysqli_query($koneksi, "SELECT jfx_regulasi.*
                   FROM jfx_regulasi WHERE id='$file_sas'
                   ");
            $row = mysqli_fetch_array($sql);

        echo '
          <div class="col-md-12 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">File Asistensi Teknis</h4>
                    <a href="./controller?hlm=regulasi" type="button" class="btn btn-warning"> Kembali</a>
                    <br><br>
                        <div class="box-body"  style="text-align: center; height:1000px" >
                            <embed width="100%" height="100%" src="../../file_regulasi/'.$row['file'].'" type="application/pdf"></embed>
                        </div>
                    </div>
                    ';
                        }
                        ?>
                </div>
            </div>
            <!-- end of col-->
        </div>
    </div>
