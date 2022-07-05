<div class="container mt-3">
 <div class="row">
  <div class="col-12">
  <title><?= $data['title']?></title>
   <h1>Daftar Member</h1>
    <table class="table table-stripped">
	 <thead>
	  <tr>
	   <th scope="col">Nama</th>
	   <th scope="col">Action</th>
	  </tr>
	 </thead>
	 <tbody>
	  <?php foreach ($data['member'] as $p) : ?>
	  <tr>
	   <td><?= $p['nama_member'];?></td>
	   <td>
	    <a href="<?= BASEURL; ?>/member/detail/<?= $p['id'];?>" class="btn btn-primary">Detail</a>
		<a href="<?= BASEURL; ?>/member/edit/<?= $p['id'];?>" class="btn btn-success">Edit</a>
		<a href="<?= BASEURL; ?>/member/delMember/<?= $p['id'];?>" class="btn btn-danger">Delete</a>
	   </td>
	  </tr>
	  <?php endforeach; ?>
	 </tbody>
	</table>
	<a href="<?= BASEURL; ?>/member/tambah/" class="btn btn-success mt-2">Tambah Member</a>
  </div>
 </div>
</div>