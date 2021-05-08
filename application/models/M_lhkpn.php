<?php
class M_lhkpn extends CI_Model{
// var $table = 'tbl_user';

	
	
	function simpan_lhkpn($table, $data){
		$this->db->insert($table, $data);
	}

	function getLhkpnAll(){
		$this->db->select('*');
		$this->db->from('tbl_lhkpn');
		$this->db->join('tbl_employe', 'tbl_lhkpn.nip = tbl_employe.nip');
		$hsl=$this->db->get();
		return $hsl;
	}

	function getLhkpnProses(){
		$this->db->select('*');
		$this->db->from('tbl_lhkpn');
		$this->db->where('status_proses','0');
		$this->db->join('tbl_employe', 'tbl_lhkpn.nip = tbl_employe.nip');
		$hsl=$this->db->get();
		return $hsl;
	}

	public function download($id){
  $query = $this->db->get_where('tbl_lhkpn',array('id_lhkpn'=>$id));
  return $query->row_array();
 }

	
}