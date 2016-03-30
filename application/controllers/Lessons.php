<?php
class Lessons extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->helper("lessons");
	}
	public function add(){
		if(islogin()){
			$this->load->view("lessons/registration");
		}
	}
	public function index(){
		if(islogin()){
			$data["objs"] = getlessons();
			$this->load->view("lessons/lessons",$data);
		}
	}
	public function profile(){
		$data["obj"] = getlesson($this->uri->segment(3));
		$this->load->view("lessons/profile",$data);
	}
	public function save(){
		$params = $this->input->post();
		$query = "insert into lessons (name,grade_id,description) values ('".$params["name"]."','".$params["grade_id"]."','".$params["description"]."')";
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
		$query = "update lessons set name='".$params["name"]."',description='".$params["description"]."' where id='".$params["id"]."'";
		$this->db->query($query);
		echo $query;
	}
	public function view(){
		$this->load->view("lessons");
	}
}
