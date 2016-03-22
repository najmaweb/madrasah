<?php
class Lessons extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
  public function index(){
	if(islogin()){
		$this->load->view("lessons/lessons");
	}
  }
  public function profile(){
    $this->load->view("lessons/profile");
  }
  public function view(){
	  $this->load->view("lessons");
  }
}
