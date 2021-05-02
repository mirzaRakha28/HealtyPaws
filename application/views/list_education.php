<section class="article-list">
<div class="container">
        <div class="intro">
          <h2 class="text-center">Artikel Terbaru
          </h2>
          <p class="text-center">Informasi terbaru untuk kamu para pengguna Healthy Paws
          </p>
        </div>
        <div class="row articles">
          <?php foreach($education as $edu){?>
          <div class="col-sm-6 col-md-4 item">
            <a href="#">
              <img class="img-fluid" src="<?= $edu->image?>">
            </a>
            <h3 class="name"><?= $edu->title?>
            </h3>
            <p class="description"><?= $edu->konten_singkat?></p>
            <a class="action" href="#">
              <i class="fa fa-arrow-circle-right">
              </i>
            </a>
          </div>
          <?php } ?>
        </div>
      </div>
    </section>
    <section class="features-clean" style="background: #eef4f7;">
      <div class="container">
        <div class="intro">
          <h2 class="text-center">Promo Terbaru
          </h2>
        </div>
        <div class="row features">
          <div class="col-sm-6 col-lg-4 item">
            <h3 class="name">Harga khusus pengguna baru
            </h3>
            <img src="<?=base_url()?>Landing/assets/img/Promo.png" style="width: 100px;margin-left: 50px;">
          </div>
          <div class="col-sm-6 col-lg-4 item">
            <h3 class="name">Promo bulan ramadhan
            </h3>
            <img src="<?=base_url()?>Landing/assets/img/Ramadhan.png" style="width: 100px;margin-left: 50px;">
          </div>
          <div class="col-sm-6 col-lg-4 item">
            <h3 class="name">Pelanggan prioritas
            </h3>
            <img src="<?=base_url()?>Landing/assets/img/Priority.png" style="width: 100px;margin-left: 50px;">
          </div>
        </div>
      </div>
      