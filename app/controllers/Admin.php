<?php
class Admin extends Controller {
	public function index(){
		$data['title'] = 'Login Admin';
		$this->view('admin/index', $data);
	}
		
	public function login(){			
		$email = $_POST['temail'];
		$password = $_POST['tpassword'];
	
		$data['login'] = $this->model('Admin_model')->getUser($email, $password); 

		if($data['login'] == NULL){
			echo "<script>alert('Wrong Email or Password!');
			window.location.href='/projekpwl/mvc2/public/';
			</script>";
		} else {
			foreach($data['login'] as $row=>$user) :
				$_SESSION['log'] = $user;
				header("location:".BASEURL);
				//var_dump($row);
				//var_dump($user);
				//var_dump($_SESSION);
			endforeach;
		}
	}
}
?>