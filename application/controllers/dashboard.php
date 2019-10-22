<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('model_data');
		$this->load->model('model_admin');
		// $this->load->helper('url');
	}

	public function index(){
		if($this->model_admin->logged_id()) {

			$data['daftaralat'] = $this->model_data->tampil_data()->result();
			$this->load->view('view_leftpanel');
			$this->load->view('view_header');
			$this->load->view('view_index',$data);
			$this->load->view('view_footer');
			
		}else{

		    //jika session belum terdaftar, maka redirect ke halaman login
		    redirect("login");

		}
	}

	public function daftar_all(){
		$data['daftaralat'] = $this->model_data->tampil_data()->result();
		$this->load->view('view_leftpanel');
		$this->load->view('view_header');
		$this->load->view('view_daftar',$data);
		$this->load->view('view_footer');
	}

	function tambah_aksi(){
		$nama_barang = $this->input->post('nama_barang');
		$merk = $this->input->post('merk');
		$asal = $this->input->post('asal');
		$tipe = $this->input->post('tipe');
		$nomor_seri = $this->input->post('nomor_seri');
		$kode_lab = $this->input->post('kode_lab');
		$kuantitas = $this->input->post('kuantitas');
		$tahun_diperoleh = $this->input->post('tahun_diperoleh');
		$sumber = $this->input->post('sumber');
		$lokasi = $this->input->post('lokasi');
		$tanggal_dicek = $this->input->post('tanggal_dicek');
		$petugas_pengecek = $this->input->post('petugas_pengecek');
		$kondisi = $this->input->post('kondisi');
		$keterangan = $this->input->post('keterangan');
		$barcode = $this->input->post('barcode');
		$spesifikasi = $this->input->post('spesifikasi');

		$data = array(
			'nama_barang' => $nama_barang,
			'merk' => $merk,
			'asal' => $asal,
			'tipe' => $tipe,
			'nomor_seri' => $nomor_seri,
			'kode_lab' => $kode_lab,
			'kuantitas' => $kuantitas,
			'tahun_diperoleh' => $tahun_diperoleh,
			'sumber' => $sumber,
			'lokasi' => $lokasi,
			'tanggal_dicek' => $tanggal_dicek,
			'petugas_pengecek' => $petugas_pengecek,
			'kondisi' => $kondisi,
			'keterangan' => $keterangan,
			'barcode' => $barcode,
			'spesifikasi' => $spesifikasi
			);
		$this->model_data->input_data($data,'daftaralat');
		redirect('dashboard/daftar_all');
	}

	function detail() {
		
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->model_data->hapus_data($where,'daftaralat');
		redirect('dashboard/daftar_all');
	}

	public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

	// function user(){
	// 	$data['user'] = $this->model_data->tampil_data()->result();
	// 	$this->load->view('view_header');
	// 	$this->load->view('view_user.php',$data);
	// 	$this->load->view('view_footer');
	// }

	// function form(){
	// 	$this->load->view('view_header');
	// 	$this->load->view('view_form');
	// 	$this->load->view('view_footer');
	// }

	// function aksi(){
	// 	$this->form_validation->set_rules('nama','Nama','required');
	// 	$this->form_validation->set_rules('email','Email','required');
	// 	$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

	// 	if($this->form_validation->run() != false){
	// 		$this->load->view('view_header');
	// 		$this->load->view('view_form');
	// 		$this->load->view('view_footer');
	// 	}else{
	// 		$this->load->view('view_header');
	// 		$this->load->view('view_form');
	// 		$this->load->view('view_footer');
	// 	}
	// }

	// function tambah(){
	// 	$this->load->view('view_tambah');
	// }

	// 	function edit($id){
	// 		$where = array('id' => $id);
	// 		$data['user'] = $this->model_data->edit_data($where,'user')->result();
	// 		$this->load->view('view_edit',$data);
	// 	}

	// function update(){
	// 	$id = $this->input->post('id');
	// 	$nama = $this->input->post('nama');
	// 	$alamat = $this->input->post('alamat');
	// 	$pekerjaan = $this->input->post('pekerjaan');

	// 	$data = array(
	// 		'nama' => $nama,
	// 		'alamat' => $alamat,
	// 		'pekerjaan' => $pekerjaan
	// 	);

	// 	$where = array(
	// 		'id' => $id
	// 	);

	// 	$this->model_data->update_data($where,$data,'user');
	// 	redirect(base_url().'index.php/web/user');
	// }

}
