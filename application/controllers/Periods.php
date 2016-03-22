<?php
class Periods extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
  public function index(){
	if(islogin()){
		$this->load->view("periods/periods");
	}
  }
  public function profile(){
    $this->load->view("periods/profile");
  }
  public function view(){
	  $this->load->view("periods");
  }
}
