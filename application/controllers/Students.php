<?php
class Students extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("students");
	}
	public function add(){
		if(islogin()){
			$this->load->view("students/add");
		}
	}
	public function index(){
		if(islogin()){
			$data["objs"] = getstudents();
			$this->load->view("students/students",$data);
		}
	}
	public function profile(){
		if(islogin()){
			$data["obj"] = getstudent($this->uri->segment(3));
			$this->load->view("students/profile",$data);
		}
	}
	public function registration(){
		if(islogin()){
			$this->load->view("students/registration");
		}
	}
	public function save(){
		$params = $this->input->post();
		$query = "insert into students (fname,bday,bplace,image) values ('".$params["fname"]."','".$params["bday"]."','".$params["bplace"]."','".$params["image"]."')";
		$this->db->query($query);
	}
	public function update(){
		$params = $this->input->post();
		$query = "update students set fname='".$params["fname"]."',bday='".$params["bday"]."',bplace='".$params["bplace"]."',image='".$params["image"]."' where id='".$params["id"]."'";
		$this->db->query($query);
	}
	public function view(){
	$this->load->view("students");
	}
}
