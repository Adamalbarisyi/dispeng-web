<?php
class M_hukdis extends CI_Model{
// var $table = 'tbl_user';

	
	
	function simpan_hukdis($table, $data){
		$this->db->insert($table, $data);
	}

	function getHukdisAll(){
		$this->db->select('*');
		$this->db->from('tbl_hukdis');
		$this->db->join('tbl_employe', 'tbl_hukdis.nip = tbl_employe.nip');
		$this->db->join('kategori_hukuman', 'tbl_hukdis.kategori_hukuman = kategori_hukuman.id_kategori');
		$hsl=$this->db->get();
		return $hsl;
	}
	function getAllKategori(){
		$hsl=$this->db->get('kategori_hukuman');
		return $hsl;
	}

	
	function download($id){
	  $query = $this->db->get_where('tbl_hukdis',array('id_hukdis'=>$id));
	  return $query->row_array();
	 }

	

	
}