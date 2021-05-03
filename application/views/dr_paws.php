<section class="projects-horizontal">
    <div class="container" style="background: #eef4f7;">
        <div class="intro">
          <h2 class="text-center">Dr. Paws
          </h2>
          <p class="text-center">Lakukan konsultasi sekarang dengan dokter pilihanmu
          </p>
        </div>
        <div class="row projects">
          <?php foreach ($dokter as $dok){ ?>
          <?php foreach ($operasional as $op){ ?>
          <?php if($dok->id ==  $op->id_dokter){ ?>
          <div class="col-sm-6 item">
            <div class="row">
              <div class="col-md-12 col-lg-5">
                <a href="#">
                </a>
                <img src="<?= base_url()?>assets/img/dokter/<?= $dok->image?>" style="width: 200px;">
              </div>
              <div class="col">
                <h3 class="name"><?=$dok->name?>
                </h3>
                <p class="description">Alumni: <?=$dok->alumni?>
                  <br>Tempat Praktik: <?=$dok->praktek?>
                  <br>Lama Praktik: <?=$dok->pengalaman?> Tahun
                  <br>
                  <br>Biaya: Rp25.000,-
                  <br>
                  <br>
                  <a class="btn btn-primary"  role="button" href="<?= base_url()."order/?id=".md5($dok->id);?>" style="background: rgb(0,127,210);">Konsultasi
                  </a>
                  <br>
                </p>
              </div>
            </div>
          </div>
          <?php } ?>
          <?php } ?>
          <?php } ?>
        </div>
      </div>
    </section>
    