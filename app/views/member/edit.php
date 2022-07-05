<title><?= $data['title']?></title>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-10">
    <h1>Form Edit Member</h1>
	<form action="<?= BASEURL; ?>/member/updMember" method="post" enctype="multipart/form-data"> 
		<div class="mb-3">
		  <label for="l1" class="form-label">ID</label>
		  <input type="text" class="form-control" id="id" name="tid" value="<?= $data['member']['id'];?>" readonly >
		</div>	
		<div class="mb-3">
		  <label for="l2" class="form-label">Nama Member</label>
		  <input type="text" class="form-control" id="nama_member" name="tnama_member" value="<?= $data['member']['nama_member'];?>">
		</div>	
		<div class="mb-3">
		  <label for="l3" class="form-label">Email</label>
		  <input type="text" class="form-control" id="email" name="temail"  value="<?= $data['member']['email'];?>"> 
		</div>
		<div class="mb-3">
		  <label for="l4" class="form-label">Telepon</label>
		  <input type="text" class="form-control" id="telp" name="ttelp"  value="<?= $data['member']['telp'];?>"> 
		</div>
		<div class="mb-3">
		  <label for="l5" class="form-label">Alamat</label>
		  <input type="text" class="form-control" id="alamat" name="talamat" value="<?= $data['member']['alamat'];?>"> 
		</div>
		<div class="mb-3">
		  <label for="l6" class="form-label">Kota</label>
		  <input type="text" class="form-control" id="kota" name="tkota" value="<?= $data['member']['kota'];?>"> 
		</div>
		<div class="mb-3">
		  <label for="l7" class="form-label">Provinsi</label>
		  <input type="text" class="form-control" id="provinsi" name="tprovinsi" value="<?= $data['member']['provinsi'];?>"> 
		</div>
		<div class="mb-3">
		  <label for="l8" class="form-label">Gender</label>
		  <input type="text" class="form-control" id="gender" name="tgender" value="<?= $data['member']['gender'];?>"> 
		</div>
		<div class="mb-3">
		  <label for="l9" class="form-label">Username</label>
		  <input type="text" class="form-control" id="userName" name="tuserName" value="<?= $data['member']['userName'];?>"> 
		</div>
		<div class="mb-3">
		  <label for="20" class="form-label">Password</label>
		  <input type="text" class="form-control" id="password" name="tpassword" value="<?= $data['member']['password'];?>"> 
		</div>
	    <div class="mb-3">
		   <button class="btn btn-primary mt-2" type="submit">Update</button>
		   <a href="<?= BASEURL; ?>/member" class="btn btn-primary mt-2">Kembali</a>
	    </div>		
	</form>
    </div>
  </div>
</div>