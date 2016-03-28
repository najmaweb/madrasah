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
		$query = "insert into students (fname,bday,bplace,nrp,nisn,image,description) values ('".$params["fname"]."','".$params["bday"]."','".$params["bplace"]."','".$params["nrp"]."','".$params["nisn"]."','".$params["image"]."','".$params["description"]."')";
		$this->db->query($query);
		echo $this->db->insert_id();
	}
	public function update(){
		$params = $this->input->post();
		$query = "update students set fname='".$params["fname"]."',bday='".$params["bday"]."',bplace='".$params["bplace"]."',nrp='".$params["nrp"]."',nisn='".$params["nisn"]."',image='".$params["image"]."',description='".$params["description"]."' where id='".$params["id"]."'";
		$this->db->query($query);
		echo $query;
	}
	public function view(){
	$this->load->view("students");
	}
	function upload(){
		//Check if we are getting the image
		if(isset($_FILES['image'])){
			//Get the image array of details
			$img = $_FILES['image'];       
			//The new path of the uploaded image, rand is just used for the sake of it
			$path = "upload/" . rand().$img["name"];
			//Move the file to our new path
			move_uploaded_file($img['tmp_name'],$path);
			//Get image info, reuiqred to biuld the JSON object
			$data = getimagesize($path);
			//The direct link to the uploaded image, this might varyu depending on your script location    
			$link = "http://$_SERVER[HTTP_HOST]"."/media/".$path;
			//Here we are constructing the JSON Object
			$res = array("upload" => array(
									"links" => array("original" => $link),
									"image" => array("width" => $data[0],
													 "height" => $data[1]
													)                              
						));
			//echo out the response :)
			echo json_encode($res);
		}		
	}
	function upload2(){
		//Check if we are getting the image
		if(isset($_FILES['image'])){
				//Get the image array of details
				$img = $_FILES['image'];       
				//The new path of the uploaded image, rand is just used for the sake of it
				$path = "upload/" . rand().$img["name"];
				//Move the file to our new path
				move_uploaded_file($img['tmp_name'],$path);
				//Get image info, reuiqred to biuld the JSON object
				$data = getimagesize($path);
				//The direct link to the uploaded image, this might varyu depending on your script location    
				$link = "http://$_SERVER[HTTP_HOST]"."/nicedit/".$path;
				//Here we are constructing the JSON Object
				$res = array("upload" => array(
										"links" => array("original" => $link),
										"image" => array("width" => $data[0],
														 "height" => $data[1]
														)                              
							));
				//echo out the response :)
				echo json_encode($res);
		}
	}
}
