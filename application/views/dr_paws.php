<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Dr.paws</h2>
        <p>find</p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <!--  -->
        <?php 
        foreach($dokter as $dok){
                foreach($operasional as $op){
          ?>
          <?php if($dok->id == $op->id_dokter){
                    ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url()?>assets/img/dokter/<?= $dok->image?>" width="200"height="200"alt="">
              <div class="member-content">
                <h4><?= $dok->name?></h4>
                
                    <h6><?= $op->hari?></h6>
                    <h6><?= $op->jam_buka?>:00 - <?= $op->jam_tutup?>:00</h6>
                    
                <span>Dokter Hewan</span>
                <a href="<?= base_url()."order/?id=".md5($dok->id);?>"><button type="button" class="btn btn-success">Pilih</button></a>
              </div>
              
            </div>
          </div>
          <?php
                    break;
                    } 
                }?>
        <?php }?>
        <!--  -->
        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

