<div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 style="text-align: center;">Konsultasi Dr. Paws
          </h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama Dokter
                  </th>
                  <th>Chat
                  </th>
                </tr>
              </thead>
              <tbody>
              <?php 
                foreach($list_chat as $lc){
                ?>
                <tr>
                  <td><?= $lc->user?>
                  </td>
                  <td>
                    <a class="btn btn-primary" role="button" href="<?= base_url()?>home/chat2?id=<?= $lc->id?>&&id_user=<?= $lc->id_user?>&&id_dokter=<?= $lc->id_dokter?>" style="background: rgb(0,127,210);">Mulai
                    </a>
                  </td>
                </tr>
              <?php
                }
              ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-6">
        </div>
      </div>
    </div>