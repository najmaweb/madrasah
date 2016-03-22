<?php
class Teachers extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
  public function index(){
	if(islogin()){
		$this->load->view("teachers/teachers");
	}
  }
  public function profile(){
    $this->load->view("teachers/profile");
  }
  public function view(){
	  $this->load->view("teachers");
  }
}
