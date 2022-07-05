<?php
session_start();

class Controller{
	public function view($view, $data = [])
	 {
	  if(isset($_SESSION['log'])){
		 require_once '../app/views/'.$view.'.php';
	  }
	else{
		 require_once '../app/views/admin/index.php';
	  }
	}
 
	public function model($model)
	 {
	  require_once '../app/models/'.$model.'.php';
	  return new $model;
	 }
}
?>