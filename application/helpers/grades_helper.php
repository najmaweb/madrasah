<?php
	function getgrades($active = '1'){
		$ci = & get_instance();
		$query = "select id,name,description from grades ";
		$query.= "where active='".$active."'";
		$result = $ci->db->query($query);
		return $result->result();
	}
	function getgrade($id){
		$ci = & get_instance();
		$query = "select id,name,description from grades ";
		$query.= "where id=".$id;
		$result = $ci->db->query($query);
		return $result->result()[0];
	}
	function getgradearray(){
		$out = array();
		foreach(getgrades() as $grade){
			$out[$grade->id] = $grade->name;
		}
		return $out;
	}
?>
