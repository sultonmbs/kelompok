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
	function update($id){
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$kontak = $this->input->post('kontak');
		$tmpt_lahir = $this->input->post('tmpt_lahir');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$prodi = $this->input->post('prodi');
		$fakultas = $this->input->post('fakultas');
		$divisi = $this->input->post('divisi');
 
		$data = array(
			'nama' => $nama,
			'email' => $email,
			'kontak' => $kontak,
			'tmpt_lahir' => $tmpt_lahir,
			'tgl_lahir' => $tgl_lahir,
			'alamat' => $alamat,
			'prodi' => $prodi,
			'fakultas' => $fakultas,
			'divisi' => $divisi
			
			);
		$where = array('id' => $id);
		$this->db->where($where);
		$this->db->update('pendaftaran', $data);
	}
}
?>