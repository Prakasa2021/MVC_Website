<?php
class Member_model{
	
	private $table = "member";
	private $db;
	
	public function __construct(){
		$this->db = new Database;
	}
	
	public function getAllMember(){
		$this->db->query('SELECT * FROM '.$this->table);
		return $this->db->resultSet();
	}
	
	public function getMemberById($id){
		$sql="SELECT * FROM " . $this->table . " WHERE id=:id";
		$this->db->query($sql);
		$this->db->bind('id',$id);
		return $this->db->single();
	}
	
	public function add($data){
		$nama_member = $data['tnama_member'];
		$email = $data['temail'];
		$telp = $data['ttelp'];
		$alamat = $data['talamat'];
		$kota = $data['tkota'];
		$provinsi = $data['tprovinsi'];
		$gender = $data['tgender'];
		$userName = $data['tuserName'];
		$password = $data['tpassword'];
		$this->db->query('SELECT if(max(id)is null,1,max(id)+1) as maks_id  FROM ' . $this->table);
		$data=$this->db->resultSet();
		foreach ($data as $rec){
			$id=$rec["maks_id"];
		}		  
		$this->db->query('INSERT INTO ' . $this->table . ' (id,nama_member,email,telp,alamat,kota,provinsi,gender,userName,password) 
		VALUES(:id,:nama_member, :email, :telp, :alamat, :kota, :provinsi, :gender, :userName, :password)');
		$this->db->bind('id',$id);
		$this->db->bind('nama_member',$nama_member);
		$this->db->bind('email',$email);
		$this->db->bind('telp',$telp);
		$this->db->bind('alamat',$alamat);
		$this->db->bind('kota',$kota);
		$this->db->bind('provinsi',$provinsi);
		$this->db->bind('gender',$gender);
		$this->db->bind('userName',$userName);
		$this->db->bind('password',$password);
		$res=$this->db->execute();
	}

	public function edit($data){
		$id=$data["tid"];
		$nama_member = $data['tnama_member'];
		$email = $data['temail'];
		$telp = $data['ttelp'];
		$alamat = $data['talamat'];
		$kota = $data['tkota'];
		$provinsi = $data['tprovinsi'];
		$gender = $data['tgender'];
		$userName = $data['tuserName'];
		$password = $data['tpassword'];	  	
		$sql="update member set nama_member='$nama_member',email='$email',telp='$telp',alamat='$alamat',kota='$kota',provinsi='$provinsi',gender='$gender',userName='$userName',password='$password' where id='$id'";
		$this->db->query($sql);
		$this->db->execute();
	}
	
	public function del($id){
	  	$data['member']=$this->getMemberById($id);
		$sql="delete from member where id='$id'";
		$hasil=$this->db->query($sql);
		$this->db->execute();		  
	}
}
?>