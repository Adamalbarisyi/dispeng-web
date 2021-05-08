<?php
class M_login extends CI_Model{
    function cekuser($n,$p){
        $hasil=$this->db->query("select*from tbl_user where user_nip='$n'and password=md5('$p')");
        return $hasil;
    }
  
}
