<html>
<head>
	<title><?= $data['title']?></title>
</head>
<body>
<div class="container mt-3">
 <div class="row">
  <div class="col-12">
	<h1>Home Admin</h1>
	<p>Selamat Datang di Toko Online</p>
	<form action="" method="post">
		<input type="submit" name="logout" class="btn btn-outline-danger" value="Logout" />
	</form>
  </div>
 </div>
 <script>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['logout']))
    {
        func();
    }
    function func()
    {
        session_destroy();
		header('location:'.BASEURL);
    }
?>
 </script>
 </body>
 </html>