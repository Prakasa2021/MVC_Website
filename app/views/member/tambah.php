<title><?= $data['title']?></title>
<div class="container mt-3">
 <form action="<?= BASEURL; ?>/member/insMember" method="POST" enctype="multipart/form-data">
		<div class="mb-3">
		  <label for="l2" class="form-label">Nama Member</label>
		  <input type="text" class="form-control" id="nama_member" name="tnama_member" placeholder="Nama member">
		</div>	
		<div class="mb-3">
		  <label for="l3" class="form-label">Email</label>
		  <input type="text" class="form-control" id="email" name="temail"  placeholder="Email" required> 
		</div>
		<div class="mb-3">
		  <label for="l4" class="form-label">Telepon</label>
		  <input type="text" class="form-control" id="telp" name="ttelp"  placeholder="Telp" required> 
		</div>
		<div class="mb-3">
		  <label for="l5" class="form-label">Alamat</label>
		  <input type="text" class="form-control" id="alamat" name="talamat"  placeholder="Alamat"> 
		</div>
		<div class="mb-3">
		  <label for="l6" class="form-label">Kota</label>
		  <input type="text" class="form-control" id="kota" name="tkota" placeholder="Kota"> 
		</div>
		<div class="mb-3">
		  <label for="l7" class="form-label">Provinsi</label>
		  <input type="text" class="form-control" id="provinsi" name="tprovinsi" placeholder="Provinsi"> 
		</div>
		<div class="mb-3">
		  <label for="l8" class="form-label">Gender</label>
		  <input type="text" class="form-control" id="gender" name="tgender" placeholder="Gender"> 
		</div>
		<div class="mb-3">
		  <label for="l9" class="form-label">Username</label>
		  <input type="text" class="form-control" id="userName" name="tuserName" placeholder="Username"> 
		</div>
		<div class="mb-3">
		  <label for="20" class="form-label">Password</label>
		  <input type="text" class="form-control" id="password" name="tpassword" placeholder="Password"> 
		</div>
	    <div class="mb-3">
		   <button class="btn btn-primary" type="submit">Simpan</button>		   
		   <a href="<?= BASEURL; ?>/member" class="btn btn-primary">Kembali</a>
	    </div>		
 </form>

</div>