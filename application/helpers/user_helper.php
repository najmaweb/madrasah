<?php
	function _create_salt(){
		return sha1(random_string('alnum', 32));
	}
	function changepassword($email,$password){
		$ci = & get_instance();
		$salt = _create_salt();
		$newpassword = sha1($password.$salt);
		$query = "update users ";
		$query.= "set salt='".$salt."' ";
		$query.= ",password='".$newpassword."' ";
		$query.= "where email='".$email."' ";
		$result = $ci->db->query($query);
	}
	function createuser($name,$email,$password){
		$salt = _create_salt();
		$newpassword = sha1($password.$salt);
		$query = "insert into users (name,email,password,salt) values ('".$name."','".$email."','".$newpassword."','".$salt."')";
		$ci = & get_instance();
		$ci->db->query($query);
	}
	function checklogin($email,$password){
		$ci = & get_instance();
		$query = "select * from users ";
		$query.= "where email='".$email."' ";
		$result = $ci->db->query($query);
		if($result->num_rows()>0){
			$row = $result->result()[0];
			if($row->password===sha1($password.$row->salt)){
				$ci->session->set_userdata(array(
				"user"=>$row->name,
				"userid"=>$row->id,
				"email"=>$row->email,
				"img"=>$row->img,
				"description"=>$row->description,
				"createdate"=>$row->createdate
				));
				return $row;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	function listuser(){
		$ci = & get_instance();
		$query = "select * from users";
		$result = $ci->db->query($query);
		foreach($result->result() as $row){
			echo "<br />".$row->name;
		}
	}
	function gologout(){
		$ci = & get_instance();
		$ci->session->sess_destroy();
		redirect(baseurl()."main/login");
	}
	function getprofile($userid){
		$query = "select * from users ";
		$query.= "where id=".$userid." ";
		$ci = & get_instance();
		$result = $ci->db->query($query);
		return $result->result()[0];
	}
	function islogin(){
		$ci = & get_instance();
		if($ci->session->userdata["userid"]){
			return true;
		}else{
			redirect(baseurl()."main/login");
		}
	}
?>
