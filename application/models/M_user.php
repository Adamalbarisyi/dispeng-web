<?php
class M_user extends CI_Model{
// var $table = 'tbl_user';

	function getRegion(){
		$hsl=$this->db->query("SELECT * FROM tbl_region");
		return $hsl;
	}
	
	function simpan_user($table, $data){
		$this->db->insert($table, $data);
	}

	function getUserAll(){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->join('tbl_region', 'tbl_user.region_id = tbl_region.region_id');
		$hsl=$this->db->get();
		return $hsl;
	}

	function cekRegion($iduser){
		$this->db->select('*');
		$this->db->from('tbl_user');
		$this->db->where('user_id',$iduser);
		$hsl=$this->db->get();
		return $hsl->row();
	}

	function update_password($table, $data, $nip){
		$this->db->where('user_nip', $nip);
		$this->db->update($table, $data);
	}
}