<?php
class Ilessons extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("lessons");
		$this->load->helper("grades");
	}
	public function add(){
		if(islogin()){
			$this->load->view("ilessons/registration");
		}
	}
	public function index(){
		if(islogin()){
			$data["objs"] = getlessons("0");
			$this->load->view("ilessons/lessons",$data);
		}
	}
	public function profile(){
		$data["obj"] = getlesson($this->uri->segment(3));
		$data["grades"] = getgradearray();
		$this->load->view("ilessons/profile",$data);
	}
	public function save(){
		$params = $this->input->post();
		$query = "insert into lessons (name,grade_id,image,description) values ('".$params["name"]."','".$params["grade_id"]."','".$params["image"]."','".$params["description"]."')";
		$this->db->query($query);
		echo $this->db->insert_id();
	}
	public function setactive(){
		$params = $this->input->post();
		$query = "update lessons set active='".$params["active"]."' where id='".$params["id"]."'";
		$this->db->query($query);
		echo $query;
	}
	public function update(){
		$params = $this->input->post();
		$query = "update lessons set name='".$params["name"]."',grade_id='".$params["grade_id"]."',image='".$params["image"]."',description='".$params["description"]."' where id='".$params["id"]."'";
		$this->db->query($query);
		echo $query;
	}
	public function view(){
		$this->load->view("ilessons");
	}
}
