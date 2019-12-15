<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['pendaftaran'] = $this->m_data->tampil_data()->result();
		$this->load->view('auth/pendaftar',$data);
	}
 
	function tambah(){
		$this->load->view('dasbor');
	}
 
function tambah_aksi(){
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
		$this->m_data->input_data($data,'pendaftaran');
		redirect('auth/dasbor');
	}
function delete($id){
		$this->m_data->delete($id);

		redirect('crud');
	}

function update($id){
	$where = array('id' => $id);
	$this->db->where($where);
	$data['pendaftaran'] = $this->m_data->tampil_data()->result();
	$this->load->view('auth/update', $data);

	if ($this->input->post('update')) {
		$this->m_data->update($id);

		redirect('crud');
	}
}
}
?>