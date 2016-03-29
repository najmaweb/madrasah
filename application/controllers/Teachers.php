<?php
class Teachers extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("teachers");
	}
	public function add(){
		if(islogin()){
		$this->load->view("teachers/add");
		}
	}
	public function index(){
		if(islogin()){
			$data["objs"] = getteachers();
			$this->load->view("teachers/teachers",$data);
		}
	}
	public function profile(){
		$data["obj"] = getteacher($this->uri->segment(3));
		$this->load->view("teachers/profile",$data);
	}
	public function update(){
		$params = $this->input->post();
		$query = "update teachers set fname='".$params["fname"]."',lname='".$params["lname"]."',bday='".$params["bday"]."',bplace='".$params["bplace"]."',nrp='".$params["nrp"]."',address='".$params["address"]."',image='".$params["image"]."',description='".$params["description"]."' where id='".$params["id"]."'";
		$this->db->query($query);
		echo $query;
	}
	public function view(){
		$this->load->view("teachers");
	}
}
