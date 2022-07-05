<?php
class Admin_model{	
	private $db;
	
	public function __construct(){
		$this->db = new Database;
	}
	
	public function getUser($email, $password){	
		$this->db->query("SELECT * FROM member WHERE email=:email AND password=:password");
		$this->db->bind('email', $email);
		$this->db->bind('password', $password);
		return $this->db->resultSet();
	}
}
?>