<?php 
 
class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('pendaftaran');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function delete($id){
		$where = array('id' => $id);
		$this->db->where($where);
		$this->db->delete('pendaftaran');
	}
}
?>