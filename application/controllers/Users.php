<?php
class Users extends CI_Controller{
  function __construct(){
    parent::__construct();
	$this->load->helper("user");
  }
  public function changepassword(){
    $this->load->view("commons/changepassword");
  }
  public function index(){
	if(islogin()){
		$this->load->view("users/users");
	}
  }
  public function profile(){
    $this->load->view("users/profile");
  }
  public function update(){
	  $params = $this->input->post();
	  $query = "update users set name='".$params["name"]."',email='".$params["email"]."',img='".$params["img"]."',description='".$params["description"]."' where id='".$params["id"]."'";
	  $this->db->query($query);
  }
}
