<?php
$jam1 = $operasional["jam_buka"];
$jam2 = $operasional["jam_buka"]+1;
$bool = false;
?>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Course Details</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Cource Details Section ======= -->
    <section id="course-details" class="course-details">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4">
            <img src="<?= base_url()?>assets/img/dokter/<?=$dokter["image"]?>" width="250"height="250" alt="">
          </div>
          <div class="col-lg-8">

            <div class="course-info d-flex justify-content-between align-items-center">
              <h5>Name</h5>
              <p><a href="#"><?=$dokter["name"]?></a></p>
            </div>
            <div class="course-info   border-right h-75 mh-75" >
              <h5>Jam Operasional</h5>
              <?php while($jam1 < $operasional["jam_tutup"]){
                  foreach($order as $od){
                    if($jam1 == $od->jam_order){
                      $bool = true;
                      break;
                    }else{
                      $bool = false;
                    }
                  }
                  if(!$bool){
                    
                ?>
              <div class="course-info d-flex justify-content-between align-items-center">
                <h5><?=$jam1?>:00-<?=$jam2?>:00</h5>
                <a href="<?=base_url()?>order/pesan?id=<?=md5($dokter["id"])?>&&jam_pesan=<?=$jam1?>&&jam_selesai=<?=$jam2?>"><button type="button" class="btn btn-success">Pilih</button></a>
              </div>
              <?php
                  }else{?>
                  <div class="course-info d-flex justify-content-between align-items-center">
                    <h5><?=$jam1?>:00-<?=$jam2?>:00</h5>
                    <p>Pilih</p>
                  </div>
                  <?php
                  }
                $jam2++;
                $jam1++;
            }?>

            </div>

            
          </div>
        </div>

      </div>
    </section><!-- End Cource Details Section -->