<?php
class Fees extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
  public function index(){
	if(islogin()){
		$this->load->view("fees/fees");
	}
  }
  public function profile(){
    $this->load->view("fees/fees");
  }
  public function view(){
	  $this->load->view("fees");
  }
}
