<?php
class M_region extends CI_Model{
// var $table = 'tbl_user';

	function getRegion(){
		$hsl=$this->db->query("SELECT * FROM tbl_region");
		return $hsl;
	}
	
}