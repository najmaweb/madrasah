<?php
class Grades extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("grades");
	}
	public function add(){
		if(islogin()){
			$this->load->view("grades/registration");
		}
	}
	public function index(){
		if(islogin()){
			$data["objs"] = getgrades();
			$this->load->view("grades/grades",$data);
		}
	}
	public function profile(){
		$data["obj"] = getgrade($this->uri->segment(3));
		$this->load->view("grades/profile",$data);
	}
	public function save(){
		$params = $this->input->post();
		$query = "insert into grades (fname,lname,bday,bplace,nrp,image,address,description) values ('".$params["fname"]."','".$params["lname"]."','".$params["bday"]."','".$params["bplace"]."','".$params["nrp"]."','".$params["image"]."','".$params["address"]."','".$params["description"]."')";
		$this->db->query($query);
		echo $this->db->insert_id();
	}
	public function setactive(){
		$params = $this->input->post();
		$query = "update grades set active='".$params["active"]."' where id='".$params["id"]."'";
		$this->db->query($query);
		echo $query;		
	}
	public function update(){
		$params = $this->input->post();
		$query = "update grades set fname='".$params["fname"]."',lname='".$params["lname"]."',bday='".$params["bday"]."',bplace='".$params["bplace"]."',nrp='".$params["nrp"]."',address='".$params["address"]."',image='".$params["image"]."',description='".$params["description"]."' where id='".$params["id"]."'";
		$this->db->query($query);
		echo $query;
	}
	public function view(){
		$this->load->view("grades");
	}
}
