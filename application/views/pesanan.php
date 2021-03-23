<?php
$jam1 = $operasional["jam_buka"];
$jam2 = $operasional["jam_buka"]+1;
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
                <div class="course-info d-flex justify-content-between align-items-center">
                    <h5>Selesai</h5>
                    <p><?=$_GET["jam_pesan"]?>:00-<?=$_GET["jam_selesai"]?>:00</p>
                </div>
                <form method="post" class="register-form"enctype="multipart/form-data" id="login-form"action="<?= base_url()?>order/pay">

                <div class="course-info d-flex justify-content-between align-items-center">
                    <h5>Harga</h5>
                    <?php if($bool == 1){?>
                    <input type="hidden" id="custId" name="harga" value="25000">
                    <p>Rp. 25.000</p>
                    <?php }else{?>
                    <p>Rp. 0</p>
                    <input type="hidden" id="custId" name="harga" value="0">
                    <?php }?>
                </div>
                <input type="hidden"  name="jam_pesan" value="<?=$_GET["jam_pesan"]?>">
                <input type="hidden"  name="jam_selesai" value="<?=$_GET["jam_selesai"]?>">
                <input type="hidden"  name="id_dokter" value="<?=$dokter['id']?>">
                <div class="text-center">
                        <button type="submit" class="btn btn-success">Pilih</button>
                </div>
                </form>
            </div>
        </div>
    </section><!-- End Cource Details Section -->