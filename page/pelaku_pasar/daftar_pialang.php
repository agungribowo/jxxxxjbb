
<!-- start page title section -->
<section class="wow fadeIn bg-extra-dark-gray padding-35px-tb page-title-small top-space">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 col-md-6 text-center text-md-left">
        <!-- start page title -->
        <h1 class="alt-font text-white-2 font-weight-600 mb-0 text-uppercase">Anggota Bursa</h1>
        <!-- end page title -->
      </div>
      <div class="col-lg-4 col-md-6 breadcrumb alt-font text-small justify-content-center justify-content-md-end sm-margin-10px-top">
        <!-- breadcrumb -->
        <ul>
          <li><a href="./media?hal=home" class="text-dark-gray">Beranda</a></li>
          <li class="text-dark-gray">Pialang</li>
        </ul>
        <!-- end breadcrumb -->
      </div>
    </div>
  </div>
</section>
<!-- end page title section -->

<!-- start clients style 02 -->
<section class="wow fadeIn bg-light-gray">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
        <div class="position-relative overflow-hidden w-100">
          <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Daftar Pialang</span>
        </div>
      </div>
    </div>
    <div class="row">
      <?php

      //skrip untuk menampilkan data dari database
      $sqlsy = mysqli_query($koneksi, "SELECT jfx_pelaku_pasar.*
        FROM jfx_pelaku_pasar where tipe_member = 'pialang'
        ");
        if(mysqli_num_rows($sqlsy) > 0){
          $no = 0;

          while($rowsy = mysqli_fetch_array($sqlsy)){
            $no++;
            ?>
            <!-- start client logo item -->
            <div class="col-12 col-lg-3 col-md-6 wow fadeInUp">
              <div class="bg-white clients-list text-center  align-items-center justify-content-center w-100 margin-10px-bottom view_data " data-toggle="modal" data-target="#myModal">
                <table>
                  <th style=" width:35%; padding:2px; "><figure ><a href="javascript:void(0);"><img src="./admin_jfx/jfx_member/<?php echo $rowsy['logo']; ?>" style="max-width:100%" alt="image description" ></a></figure></th>
                  <th style=" text-align:left;padding:2px;">  <p><?php echo $rowsy['nama_pt']; ?></p></th>
                </table>
              </div>
            </div>
            <!-- end client logo item -->
            <?php
          }
        } ?>

      </div>
    </section>
    <!-- end clients style 02 -->




    <!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <!-- <h4 class="modal-title" id="myModalLabel">Data </h4> -->
          </div>
          <!-- memulai untuk konten dinamis -->
          <!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
          <div class="modal-body" id="data_siswa">
          </div>
          <!-- selesai konten dinamis -->
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>



    <script>
    // ini menyiapkan dokumen agar siap grak :)
    $(document).ready(function(){
      // yang bawah ini bekerja jika tombol lihat data (class="view_data") di klik
      $('.view_data').click(function(){
        // membuat variabel id, nilainya dari attribut id pada button
        // id="'.$row['id'].'" -> data id dari database ya sob, jadi dinamis nanti id nya
        var id = $(this).attr("id");

        // memulai ajax
        $.ajax({
          url: 'page/pelaku_pasar/detail_pialang.php',  // set url -> ini file yang menyimpan query tampil detail data siswa
          method: 'post',   // method -> metodenya pakai post. Tahu kan post? gak tahu? browsing aja :)
          data: {id:id},    // nah ini datanya -> {id:id} = berarti menyimpan data post id yang nilainya dari = var id = $(this).attr("id");
          success:function(data){   // kode dibawah ini jalan kalau sukses
            $('#data_siswa').html(data);  // mengisi konten dari -> <div class="modal-body" id="data_siswa">
            $('#myModal').modal("show");  // menampilkan dialog modal nya
          }
        });
      });
    });
    </script>
