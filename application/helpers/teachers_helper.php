<?php
	function getteachers($active = '1'){
		$ci = & get_instance();
		$query = "select id,concat(fname,' ',lname)name,address,city,bplace,nrp,date_format(bday,'%d-%b-%Y')birthday from teachers ";
		$query.= "where active='".$active."'";
		$result = $ci->db->query($query);
		return $result->result();
	}
	function getteacher($id){
		$ci = & get_instance();
		$query = "select id,fname,lname,address,city,bplace,nrp,date_format(bday,'%d %M %Y')birthday,image,description from teachers ";
		$query.= "where id=".$id;
		$result = $ci->db->query($query);
		return $result->result()[0];
	}

?>
