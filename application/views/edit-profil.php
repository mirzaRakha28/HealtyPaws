<form method="post" class="register-form"enctype="multipart/form-data" id="login-form"action="<?= base_url()?>profil/edit">
  <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <img src="<?= base_url()."assets/img/user/".$profil['gambar']?>" class="rounded-circle mr-1" alt="Sharon Lessman" width="200" height="200">
            <div class="mb-auto" style= "">
                <div class="image-upload">
                    <label for="file-input">
                        <i class="fas fa-camera fa-2x"></i>
                    </label>

                    <input type="file" name="gambar"  value="xxx"   id="file-input">
                </div>
            </div>
        </div>
    </div>
    
    <!-- <input type="file" name="gambar"  /> -->
    <div class="container">
        <div class="form-group">
            <p class="text-center">Name</p>
            <input type="text" class="form-control" value="<?=$profil['name']?>"name="name">
            
        </div>
        <div class="form-group">
            <p class="text-center">Email</p>
            <input type="email" class="form-control" value="<?=$profil['email']?>"name="email">
        </div>
        <div class="form-group">
            <p class="text-center">Password Lama</p>
            <input type="password" class="form-control" name="password_lama">
            <small id="emailHelp" class="form-text text-muted"><?= $this->session->flashdata('message')?></small>             
        </div>
        <div class="form-group">
            <p class="text-center">Password Baru</p>
            <input type="password" class="form-control"name="password_baru">
        </div>
        <div class="form-group">
            <p class="text-center">Telephone</p>
            <input type="text" class="form-control"value="<?=$profil['telephone']?>"name="telephone">
        </div>
        <div class="form-group">
            <p class="text-center">Alamat</p>
            <input type="text" class="form-control"value="<?=$profil['alamat']?>"name="alamat">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Edit</a></button>
        </div>

    </div>
</form>