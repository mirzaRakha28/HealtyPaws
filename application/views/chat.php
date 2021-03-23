    <span class="closebtn" title="Close Overlay">×</span>
    <main class="content" style="">
      <div class="container p-0 ">
        <div class="card"style="width: 100%;">
          <div class="row g-0">
            <div class="col-12 col-lg-5 col-xl-3 border-right">
            <?php foreach($list_chat as $lc){?>
              <a href="<?= base_url()?>home/chat2?id=<?= $lc->id?>&&id_dokter=<?= $lc->id_dokter?>" class="list-group-item list-group-item-action border-0">
                  <div class="d-flex align-items-start">
                  <img src="<?= base_url()?>assets/img/dokter/<?= $lc->gambar?>" class="rounded-circle mr-1" alt="Vanessa Tucker" width="40" height="40">
                  <div class="flex-grow-1 ml-3">
                      <?= $lc->user?>
                  </div>
                  </div>
              </a>
            <?php }?>
            </div>
            <div class="col-12 col-lg-7 col-xl-9 h-70">
              

            </div>
              
            
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>