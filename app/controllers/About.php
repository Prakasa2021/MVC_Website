<?php
   class About extends Controller {
	   function index(){
		   $data['title'] = 'About';
		   $this->view('templates/header', $data);
		   $this->view('about/index', $data);
		   $this->view('templates/footer');
	   }
   }
?>