<?php
	function getstudents(){
		$ci = & get_instance();
		$query = "select id,concat(fname,' ',lname)name,address,city,bplace,nrp,nisn,date_format(bday,'%d-%b-%Y')birthday from students";
		$result = $ci->db->query($query);
		return $result->result();
	}
	function getstudent($id){
		$ci = & get_instance();
		$query = "select id,fname,lname,address,city,bplace,nrp,nisn,date_format(bday,'%d %M %Y')birthday,image,description from students ";
		$query.= "where id=".$id;
		$result = $ci->db->query($query);
		return $result->result()[0];
	}

?>
