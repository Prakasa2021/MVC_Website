<title><?= $data['title']?></title>
<div class="container mt-3">
 <div class="card" style="width: 18rem;">
  <div class="card-body">
   <h3 class="card-title"><?= $data['member']['nama_member']; ?></h3>
   <p class="card-text">Email </br> <?= $data['member']['email']; ?></p>
   <p class="card-text">Telepon </br> <?= $data['member']['telp']; ?></p>
   <p class="card-text">Alamat </br> <?= $data['member']['alamat']; ?></p>
   <p class="card-text">Kota </br> <?= $data['member']['kota']; ?></p>
   <p class="card-text">Provinsi </br> <?= $data['member']['provinsi']; ?></p>
   <p class="card-text">Gender </br> <?= $data['member']['gender']; ?></p>
   <p class="card-text">Username </br> <?= $data['member']['userName']; ?></p>
   <p class="card-text">Password </br> <?= $data['member']['password']; ?></p>
   <a href="<?= BASEURL; ?>/member" class="btn btn-primary">Kembali</a>
  </div>
 </div>

</div>