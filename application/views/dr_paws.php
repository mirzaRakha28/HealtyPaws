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
        <?php foreach($dokter as $dok){?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url()?>assets/img/<?= $dok->image?>" class="img-fluid" alt="">
              <div class="member-content">
                <h4><?= $dok->name?></h4>
                <?php foreach($operasional as $op){
                    if($dok->id == $op->id_dokter){
                    ?>
                    <h6><?= $op->hari?></h6>
                    <h6><?= $op->jam_buka?> - <?= $op->jam_tutup?></h6>
                <?php
                    break;
                    } 
                }?>
                <span>Dokter Hewan</span>
                <button type="button" class="btn btn-success">Pilih</button>
              </div>
              
            </div>
          </div>
        <?php }?>
        <!--  -->
        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->

