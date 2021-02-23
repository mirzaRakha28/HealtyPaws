<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Healty Paws Education</h2>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <?php foreach($education as $key):?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="assets/img/course-1.jpg" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4><?=$key->jenis?></h4>
                </div>

                <h3><a href="<?=base_url()?>education/artikel/<?=$key->id?>"><?=$key->title?></a></h3>
                <p><?=$key->konten_singkat?></p>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <!-- End Course Item-->
            <?php endforeach?>
        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->