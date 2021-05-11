<?php
class M_skk extends CI_Model{
// var $table = 'tbl_user';

	
	
	function simpan_skk($table, $data){
		$this->db->insert($table, $data);
	}

	function getSkkAll(){
		$this->db->select('*');
		$this->db->from('tbl_skk');
		$this->db->join('tbl_employe', 'tbl_skk.nip = tbl_employe.nip');
		$hsl=$this->db->get();
		return $hsl;
	}

	function getSkkProses(){
		$this->db->select('*');
		$this->db->from('tbl_skk');
		$this->db->where('status_proses','0');
		$this->db->join('tbl_employe', 'tbl_skk.nip = tbl_employe.nip');
		$hsl=$this->db->get();
		return $hsl;
	}

	

	function getSkkVerif(){
		$this->db->select('*');
		$this->db->from('tbl_skk');
		$this->db->where('status_proses','1');
		$this->db->join('tbl_employe', 'tbl_skk.nip = tbl_employe.nip');
		$this->db->join('tbl_user', 'tbl_skk.verifikator = tbl_user.user_id');
		$hsl=$this->db->get();
		return $hsl;
	}
	function ambilId($id){
		$this->db->select('*');
		$this->db->from('tbl_skk');
		$this->db->where('id_skk',$id);
		$hsl=$this->db->get();
		return $hsl->row();
	}


	function download($id){
	  $query = $this->db->get_where('tbl_skk',array('id_skk'=>$id));
	  return $query->row_array();
	 }

	 function update_skk($table,$data, $id){
	 	$this->db->where('id_skk', $id);
		$this->db->update($table, $data);
	 }

	
}