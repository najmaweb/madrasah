<?php
	function getlessons($active = '1'){
		$ci = & get_instance();
		$query = "select id,name,grade_id,description from lessons ";
		$query.= "where active='".$active."'";
		$result = $ci->db->query($query);
		return $result->result();
	}
	function getlesson($id){
		$ci = & get_instance();
		$query = "select id,name,grade_id,description from lessons ";
		$query.= "where id=".$id;
		$result = $ci->db->query($query);
		return $result->result()[0];
	}

?>
