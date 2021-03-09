
<!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
      <div class="container">
         <img src="<?= base_url()."assets/img/user/".$profil['gambar']?>" class="rounded-circle mr-1" alt="Sharon Lessman" width="200" height="200">
         
         </div>
      </div>
    </div><!-- End Breadcrumbs -->
    <div class="container">
        <div class="form-group">
            <p class="text-center">Name</p>
            <H4 class="text-center"><?= $profil['name']?></H4>
        </div>
        <div class="form-group">
            <p class="text-center">Email</p>
            <H4 class="text-center"><?= $profil['email']?></H4>
        </div>
        <div class="form-group">
            <p class="text-center">Telephone</p>
            <H4 class="text-center"><?= $profil['telephone']?></H4>
        </div>
        <div class="form-group">
            <p class="text-center">Alamat</p>
            <H4 class="text-center"><?= $profil['alamat']?></H4>
        </div>
        <div class="text-center">
        <a href="<?= base_url()?>profil/edit_profil">
        <button type="button" class="btn btn-success">Edit</a></button>
        </a>
        </div>
    </div>