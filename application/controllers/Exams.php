<?php
class Exams extends CI_Controller{
  function __construct(){
    parent::__construct();
  }
  public function index(){
	if(islogin()){
		$this->load->view("exams/exams");
	}    
  }
  public function profile(){
    $this->load->view("exams/profile");
  }
  public function view(){
	  $this->load->view("exams");
  }
  public function entryresult(){
	  $this->load->view("exams/entryresult");
  }
}
