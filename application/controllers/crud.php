<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['pendaftaran'] = $this->m_data->tampil_data()->result();
		$this->load->view('dasboradmin',$data);
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
 
}

function insert_data() {
    $kata = $this->input->post('kata');
    if($kata == null) {
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-danger">
                    <h4>Oppss</h4>
                    <p>Tidak ada kata dinput.</p>
                </div>');    
        $this->load->view('welcome_message');      
    } else {    
        $this->session->set_flashdata('msg', 
                '<div class="alert alert-success">
                    <h4>Berhasil </h4>
                    <p>Anda berhasil input kata '.$kata.'.</p>
                </div>');    
        $this->load->view('welcome_message');    
    };
}