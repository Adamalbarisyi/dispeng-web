<?php
class M_employe extends CI_Model{
	
	function simpan_employe($table, $data){
		$this->db->insert($table, $data);
	}

	function getEmployeAll(){
		$this->db->select('*');
		$this->db->from('tbl_employe');
		$this->db->join('tbl_region', 'tbl_employe.region = tbl_region.region_id');
		$hsl=$this->db->get();
		return $hsl;
	}

	 function search_blog($nip){
        $this->db->like('nip', $nip , 'both');
        $this->db->order_by('nip', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tbl_employe')->result();
    }

	
}