<?php 
Class Lembaga extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'pdflibrary'));
		$this->load->model(array('Lembaga_Model', 'Admin_Model'));
	}
	public function login() {
		if($this->session->userdata('username'))
		{
			redirect('lembaga/');
		}
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/login');
		$this->load->view('footer');
	}
	public function loginvalidation() {
		$username				= $this->input->post('username', TRUE);
		$password				= $this->input->post('password', TRUE);
		$result					= $this->Lembaga_Model->login($username, $password);
		if($result == true) {
			$this->session->set_userdata(array(
				'lembaga'	=> $username
			));
			redirect('lembaga/');
		}
		else
		{
			$this->session->set_flashdata('failed', 'Username atau Password Salah');
			redirect('lembaga/login');
		}
	}
	public function logout() {
		$this->session->unset_userdata('lembaga');
		redirect('lembaga/login');
	}
	public function index() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username				= $_SESSION['lembaga'];
		$validlembaga			= $this->Lembaga_Model->validlembaga($username);
		if($validlembaga == FALSE) {
			redirect('lembaga/tambahlembaga');
		}
		$username				= $_SESSION['lembaga'];
		$data['user']			= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);	
		$data['jumlahguru']		= $this->Lembaga_Model->countguru($username);
		$data['jumlahmurid']	= $this->Lembaga_Model->countmurid($username);
		$data['jumlahalumni']	= $this->Lembaga_Model->countalumni($username);
		$data['jumlahdonatur']	= $this->Lembaga_Model->countdonatur($username);
		$data['datajmlmurid']	= $this->Lembaga_Model->datajmlmurid($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/dashboard', $data);
		$this->load->view('lembaga/footer');
	}
	public function datatpa() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username				= $_SESSION['lembaga'];
		$data['user']			= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$validation				= $this->Lembaga_Model->validlembaga($username);
		if($validation == true) {
			$this->load->view('lembaga/head');
			$this->load->view('lembaga/header', $data);
			$this->load->view('lembaga/datatpa', $data);
			//$this->load->view('lembaga/tambahdatalembaga', $data);
			$this->load->view('lembaga/footer');
		}
		else
		{
			$this->load->view('lembaga/head');
			$this->load->view('lembaga/header', $data);
			$this->load->view('lembaga/tambahdatalembaga', $data);
			//$this->load->view('lembaga/datatpa', $data);
			$this->load->view('lembaga/footer');
		}
		
	}
	public function tambahlembaga() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/tambahlembaga', $data);
		$this->load->view('lembaga/footer');
	}
	public function simpanlembaga() {
		$kd_lembaga		= $this->input->post('kd_lembaga');
		$username		= $this->input->post('username');
		$nm_lembaga		= $this->input->post('nm_lembaga');
		$alamat			= $this->input->post('alamat');
		$desa			= $this->input->post('desa');
		$kecamatan		= $this->input->post('kecamatan');
		$thn_berdiri	= $this->input->post('thn_berdiri');
		$tmpt_belajar	= $this->input->post('tmpt_belajar');
		$pimpinan		= $this->input->post('pimpinan');
		$metode			= $this->input->post('metode');
		$kat_wilayah	= $this->input->post('kat_wilayah');
		$tmbh_pemb		= $this->input->post('tmbh_pemb');
		$photo			= $this->input->post('photo');
		$save			= $this->Lembaga_Model->simpanlembaga($kd_lembaga, $username, $nm_lembaga, $alamat, $desa, $kecamatan, $thn_berdiri, $tmpt_belajar, $pimpinan, $metode, $kat_wilayah, $tmbh_pemb, $photo);
		if($save = true) {
			redirect('lembaga/index');
		}
		else {
			$this->session->set_flashdata('buat_failed', 'Gagal Menyimpan Data');
			redirect('lembaga/tambahlembaga');
		}
	}
	public function simpanphoto() {
		$kd_lembaga				= $this->input->post('kd_lembaga');
		$name					= "profile".date("dmY-his");
		$config['upload_path']	= "./asset/image/profile/";
		$config['allowed_types']= "gif|jpg|jpeg|png";
		$config['max_size']		= 1024;
		$config['file_name']	= $name;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('photo'))
		{
			$this->session->set_flashdata('info', 'Berhasil Mengupdate Photo');
			$data['upload_data']= $this->upload->data();
			$img 				= $_FILES['photo']['name'];
			$img_ext			= pathinfo($img, PATHINFO_EXTENSION);
			$photo				= $config['file_name'].".".$img_ext;
			$this->Lembaga_Model->simpanphoto($kd_lembaga, $photo);
			redirect('lembaga/index');
		}
		else 
		{
			$this->session->set_flashdata('failed', 'Gagal Mengupdate Photo');
			redirect('lembaga/index');
		}
	}
	public function editlembaga($kd_lembaga) {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['datakdlembaga']	= $this->Lembaga_Model->datakdlembaga($kd_lembaga);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/editlembaga', $data);
		$this->load->view('lembaga/footer');
		
	}
	public function updatelembaga() {
		$kd_lembaga		= $this->input->post('kd_lembaga');
		$nm_lembaga		= $this->input->post('nm_lembaga');
		$alamat			= $this->input->post('alamat');
		$desa			= $this->input->post('desa');
		$kecamatan		= $this->input->post('kecamatan');
		$thn_berdiri	= $this->input->post('thn_berdiri');
		$tmpt_belajar	= $this->input->post('tmpt_belajar');
		$pimpinan		= $this->input->post('pimpinan');
		$metode			= $this->input->post('metode');
		$kat_wilayah	= $this->input->post('kat_wilayah');
		$tmbh_pemb		= $this->input->post('tmbh_pemb');
		$save			= $this->Lembaga_Model->updatelembaga($kd_lembaga, $nm_lembaga, $thn_berdiri, $pimpinan, $alamat, $desa, $kecamatan, $tmpt_belajar, $metode, $kat_wilayah, $tmbh_pemb);
		if($save = true) {
			$this->session->set_flashdata('save_success', 'Berhasil Menyimpan Data');
			redirect('lembaga/editlembaga/'.$kd_lembaga);
		  }
		else {
			$this->session->set_flashdata('buat_failed', 'Gagal Menyimpan Data');
			redirect('lembaga/editlembaga/'.$kd_lembaga);
		}
	}
	public function dataguru() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['dataguru']	= $this->Lembaga_Model->dataguru($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/dataguru', $data);
		$this->load->view('lembaga/footer');
		
	}
	public function sumbangan() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username				= $_SESSION['lembaga'];
		$data['user']			= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['datasumbangan']	= $this->Lembaga_Model->datasumbangan($username);
		$data['datapd']			= $this->Lembaga_Model->datapesertadidik($username);
		$data['dataalumni']			= $this->Lembaga_Model->alumni($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/sumbangan', $data);
		$this->load->view('lembaga/footer');
		
	}
	public function simpansumbangan() {
		$kd_lembaga		= $this->input->post('kd_lembaga');
		$no_induk		= $this->input->post('no_induk');
		$jml_sumbangan	= $this->input->post('jml_sumbangan');
		$tanggal		= $this->input->post('tanggal');
		$simpan			= $this->Lembaga_Model->simpansumbangan($kd_lembaga, $no_induk, $jml_sumbangan, $tanggal);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("lembaga/sumbangan/");
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("lembaga/sumbangan/");
		}
	}
	public function simpansumbanganalumni() {
		$kd_lembaga		= $this->input->post('kd_lembaga');
		$no_induk		= $this->input->post('no_induk');
		$jml_sumbangan	= $this->input->post('jml_sumbangan');
		$tanggal		= $this->input->post('tanggal');
		$simpan			= $this->Lembaga_Model->simpansumbanganalumni($kd_lembaga, $no_induk, $jml_sumbangan, $tanggal);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success1', 'Berhasil Menyimpan Data');
			redirect("lembaga/sumbangan/");
		}
		else
		{
			$this->session->set_flashdata('simpan_failed1', 'Gagal Menyimpan Data');
			redirect("lembaga/sumbangan/");
		}
	}
	public function datasumbangan() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username					= $_SESSION['lembaga'];
		$bulan						= $this->input->post('bulan');
		$tahun						= $this->input->post('tahun');
		//BERDASARKAN BULAN
		if(empty($tahun)) {
			$data['laporansumbangan'] 	= $this->Lembaga_Model->bulanlaporansumbangan($username, $bulan);
			$data['totalsumbangan']		= $this->Lembaga_Model->bulantotalsumbangan($username, $bulan);
		}
		//BERDASARKAN TAHUN
		else if(empty($bulan)) {
			$data['laporansumbangan'] 	= $this->Lembaga_Model->tahunlaporansumbangan($username, $tahun);
			$data['totalsumbangan']		= $this->Lembaga_Model->tahuntotalsumbangan($username, $tahun);
		}
		//SEMUA KOSONG
		else if(empty($tahun) AND empty($bulan)){
			$data['laporansumbangan'] 	= $this->Lembaga_Model->semualaporansumbangan($username);
			$data['totalsumbangan']		= $this->Lembaga_Model->totalsumbangan($username);
		}
		//BERDASARKAN BULAN DAN TAHUN
		else {
			$data['laporansumbangan'] 	= $this->Lembaga_Model->bulantahunlaporansumbangan($username, $bulan, $tahun);
			$data['totalsumbangan']		= $this->Lembaga_Model->bulantahuntotalsumbangan($username, $bulan, $tahun);
		}
		$data['user']				= $username;
		$data['datalembaga']		= $this->Lembaga_Model->datalembaga($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/datasumbangan', $data);
		$this->load->view('lembaga/footer');
		
	}
	public function tambahguru() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['datakdlembaga']	= $this->Lembaga_Model->datakdusername($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/tambahguru', $data);
		$this->load->view('lembaga/footer', $data);
	}
	public function editguru($nik) {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['dataguru']	= $this->Lembaga_Model->datakdguru($nik);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/editguru', $data);
		$this->load->view('lembaga/footer');
	}
	public function simpanguru() {
		$kd_lembaga		= $this->input->post('kd_lembaga');
		$nik			= $this->input->post('nik');
		$nm_guru		= $this->input->post('nm_guru');
		$tmpt_lahir		= $this->input->post('tmpt_lahir');
		$tgllahir_guru	= $this->input->post('tgllahir_guru');
		$jns_kelamin	= $this->input->post('jns_kelamin');
		$alamat			= $this->input->post('alamat');
		$pendidikan		= $this->input->post('pendidikan');
		$profesi_lain	= $this->input->post('profesi_lain');
		$no_hp			= $this->input->post('no_hp');
		$tmt_mengajar	= $this->input->post('tmt_mengajar');
		$simpan			= $this->Lembaga_Model->simpandataguru($kd_lembaga, $nik, $nm_guru, $tmpt_lahir, $tgllahir_guru, $jns_kelamin, $alamat, $pendidikan, $profesi_lain, $no_hp, $tmt_mengajar);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("lembaga/tambahguru/");
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("lembaga/tambaguru/");
		}
	}
	public function hapusguru($nik) {
		$validhapusguru = $this->Lembaga_Model->validhapusguru($nik);
		if($validhapusguru == true) {
			$this->session->set_flashdata('hapus_invalid', 'Gagal');
			redirect("lembaga/dataguru/");
		}
		else{
			$hapus = $this->Lembaga_Model->hapusguru($nik);
			if($hapus = true)
			{
				$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Data');
				redirect("lembaga/dataguru/");
			}
			else
			{
				$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Data');
				redirect("lembaga/dataguru/");
			}
		}
	}
	public function updateguru() {
		$kd_lembaga		= $this->input->post('kd_lembaga');
		$nik			= $this->input->post('nik');
		$nm_guru		= $this->input->post('nm_guru');
		$tmpt_lahir		= $this->input->post('tmpt_lahir');
		$tgllahir_guru	= $this->input->post('tgllahir_guru');
		$jns_kelamin	= $this->input->post('jns_kelamin');
		$alamat			= $this->input->post('alamat');
		$pendidikan		= $this->input->post('pendidikan');
		$profesi_lain	= $this->input->post('profesi_lain');
		$no_hp			= $this->input->post('no_hp');
		$tmt_mengajar	= $this->input->post('tmt_mengajar');
		$simpan			= $this->Lembaga_Model->updateguru($kd_lembaga, $nik, $nm_guru, $tmpt_lahir, $tgllahir_guru, $jns_kelamin, $alamat, $pendidikan, $profesi_lain, $no_hp, $tmt_mengajar);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("lembaga/editguru/".$nik);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("lembaga/editguru/".$nik);
		}
	}
	public function datarombel() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['datarombel']	= $this->Lembaga_Model->datarombel($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/datarombel', $data);
		$this->load->view('lembaga/footer');
	}
	public function tambahrombel() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lemabag/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);	
		$data['datakdlembaga']	= $this->Lembaga_Model->datakdusername($username);	
		$data['datagurutpa']	= $this->Lembaga_Model->dataguru($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header',$data);
		$this->load->view('lembaga/tambahrombel',$data);
		$this->load->view('footer');
		
	}
	public function simpanrombel() {
		$kd_lembaga		= $this->input->post('kd_lembaga');
		$kd_rombel		= $kd_lembaga.'-'.$this->input->post('kd_rombel');
		$nm_rombel		= $this->input->post('nm_rombel');
		$nik			= $this->input->post('nik');
		$simpan			= $this->Lembaga_Model->simpanrombel($kd_lembaga,$kd_rombel,$nm_rombel,$nik);
		if($simpan = true)
		{
			redirect("lembaga/datarombel/".$kd_lembaga);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("lembaga/tambahrombel/".$kd_lembaga);
		}
		
	}	
	public function hapusrombel($kd_rombel) {
		$validhapusrombel = $this->Lembaga_Model->validhapusrombel($kd_rombel);
		if($validhapusrombel == true) {
			$this->session->set_flashdata('hapus_invalid', 'Gagal');
			redirect("lembaga/datarombel/");
		}
		else{
			$hapus = $this->Lembaga_Model->hapusrombel($kd_rombel);
			if($hapus = true)
			{
				$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Data');
				redirect("lembaga/datarombel/");
			}
			else
			{
				$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Data');
				redirect("lembaga/datarombel/");
			}
		}
	}
	public function datapesertadidik() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);	
		$data['datapd']		= $this->Lembaga_Model->datapesertadidik($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/datapesertadidik', $data);
		$this->load->view('lembaga/footer');
	}
	public function datapd($kd_rombel) {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);	
		$data['datapd']		= $this->Lembaga_Model->datapd($kd_rombel);
		
		$data['kd_rombel']	= $kd_rombel;
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/datapd', $data);
		$this->load->view('lembaga/footer');
	}
	public function tambahpd($kd_rombel) {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['kd_rombel']	= $kd_rombel;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/tambahpd', $data);
		$this->load->view('lembaga/footer');
	}
	public function simpanpd() {
		$kd_rombel			= $this->input->post('kd_rombel');
		$no_induk			= $kd_rombel."-".$this->input->post('no_induk');
		$nm_pd				= $this->input->post('nm_pd');
		$tmpt_lahir			= $this->input->post('tmpt_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$jns_kelamin		= $this->input->post('jns_kelamin');
		$alamat				= $this->input->post('alamat');
		$nm_ayah			= $this->input->post('nm_ayah');
		$pekerjaan_ayah		= $this->input->post('pekerjaan_ayah');
		$nm_ibu				= $this->input->post('nm_ibu');
		$pekerjaan_ibu		= $this->input->post('pekerjaan_ibu');
		$no_hp				= $this->input->post('no_hp');
		$tgl_masuk			= $this->input->post('tgl_masuk');
		$simpan 			= $this->Lembaga_Model->simpanpd($no_induk, $kd_rombel, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_masuk);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("lembaga/tambahpd/".$kd_rombel);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("lembaga/tambahpd/".$kd_rombel);
		}
	}
	public function editpd($no_induk) {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['datapd']	= $this->Lembaga_Model->datakdpd($no_induk);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/editpd', $data);
		$this->load->view('lembaga/footer');
	}
	public function updatepd() {
		$no_induk			= $this->input->post('no_induk');
		$kd_rombel			= $this->input->post('kd_rombel');
		$nm_pd				= $this->input->post('nm_pd');
		$tmpt_lahir			= $this->input->post('tmpt_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$jns_kelamin		= $this->input->post('jns_kelamin');
		$alamat				= $this->input->post('alamat');
		$nm_ayah			= $this->input->post('nm_ayah');
		$pekerjaan_ayah		= $this->input->post('pekerjaan_ayah');
		$nm_ibu				= $this->input->post('nm_ibu');
		$pekerjaan_ibu		= $this->input->post('pekerjaan_ibu');
		$no_hp				= $this->input->post('no_hp');
		$tgl_masuk			= $this->input->post('tgl_masuk');
		$simpan 			= $this->Lembaga_Model->updatepd($no_induk, $kd_rombel, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_masuk);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("lembaga/editpd/".$no_induk);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("lembaga/editpd/".$no_induk);
		}
	}
	public function luluskanpd($no_induk) {
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['datapd']	= $this->Lembaga_Model->datakdpd($no_induk);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/luluskanpd', $data);
		$this->load->view('lembaga/footer');
		
	}
	public function pdlulus() {
		$no_induk			= $this->input->post('no_induk');
		$kd_lembaga			= $this->input->post('kd_lembaga');
		$kd_rombel			= $this->input->post('kd_rombel');
		$nm_pd				= $this->input->post('nm_pd');
		$tmpt_lahir			= $this->input->post('tmpt_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$jns_kelamin		= $this->input->post('jns_kelamin');
		$alamat				= $this->input->post('alamat');
		$nm_ayah			= $this->input->post('nm_ayah');
		$pekerjaan_ayah		= $this->input->post('pekerjaan_ayah');
		$nm_ibu				= $this->input->post('nm_ibu');
		$pekerjaan_ibu		= $this->input->post('pekerjaan_ibu');
		$no_hp				= $this->input->post('no_hp');
		$tgl_keluar			= $this->input->post('tgl_keluar');
		
		$lulus				= $this->Lembaga_Model->luluspd($no_induk, $kd_lembaga, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_keluar);
		if($lulus = true)
		{
			$hapus			= $this->Lembaga_Model->hapuspd($no_induk);
			$this->session->set_flashdata('lulus_success', 'Berhasil Meluluskan Peserta Didik');
			redirect("lembaga/datapd/".$kd_rombel);
		}
		else
		{
			$this->session->set_flashdata('lulus_failed', 'Gagal Meluluskan Peserta Didik');
			redirect("lembaga/datapd/".$kd_rombel);
		}
		
	}
	public function keluarpd($no_induk) {
		$hapus		= $this->Lembaga_Model->hapuspd($no_induk);
		$kd_rombel	= $this->input->post('kd_rombel');
		if($hapus	= true)
		{
			$this->session->set_flashdata('keluar_success', 'Berhasil Mengeluarkan Peserta Didik');
			redirect("lembaga/datapd/".$kd_rombel);
		}
		else
		{
			$this->session->set_flashdata('keluar_failed', 'Gagal Mengeluarkan Peserta Didik');
			redirect("lembaga/datapd/".$kd_rombel);
		}
	}
	public function dataalumni() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('guru/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['dataalumni']	= $this->Lembaga_Model->dataalumni($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/dataalumni', $data);
		$this->load->view('lembaga/footer');
	}
	public function tambahalumni() {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datakdlembaga']	= $this->Lembaga_Model->datakdusername($username);
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/tambahalumni', $data);
		$this->load->view('lembaga/footer', $data);
	}
	public function simpanalumni() {
		$no_induk			= $this->input->post('no_induk');
		$kd_lembaga			= $this->input->post('kd_lembaga');
		$kd_rombel			= $this->input->post('kd_rombel');
		$nm_pd				= $this->input->post('nm_pd');
		$tmpt_lahir			= $this->input->post('tmpt_lahir');
		$tgl_lahir			= $this->input->post('tgl_lahir');
		$jns_kelamin		= $this->input->post('jns_kelamin');
		$alamat				= $this->input->post('alamat');
		$nm_ayah			= $this->input->post('nm_ayah');
		$pekerjaan_ayah		= $this->input->post('pekerjaan_ayah');
		$nm_ibu				= $this->input->post('nm_ibu');
		$pekerjaan_ibu		= $this->input->post('pekerjaan_ibu');
		$no_hp				= $this->input->post('no_hp');
		$tgl_keluar			= $this->input->post('tgl_keluar');
		
		$lulus				= $this->Admin_Model->luluspd($no_induk, $kd_lembaga, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_keluar);
		if($lulus = true)
		{
			$hapus			= $this->Admin_Model->hapuspd($no_induk);
			$this->session->set_flashdata('lulus_success', 'Berhasil Menambahkan Data');
			redirect("lembaga/tambahalumni/".$kd_lembaga);
		}
		else
		{
			$this->session->set_flashdata('lulus_failed', 'Gagal Menambahkan Data');
			redirect("lembaga/tambahalumni/".$kd_lembaga);
		}
		
	}
	public function editalumni($no_induk) {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username			= $_SESSION['lembaga'];
		$data['user']		= $username;
		$data['datakdlembaga']	= $this->Lembaga_Model->datakdusername($username);
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['dataalumni']		= $this->Admin_Model->datakdalumni($no_induk);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/editalumni', $data);
		$this->load->view('lembaga/footer', $data);
	}
	public function updatealumni() {
		$no_induk		= $this->input->post('no_induk');
		$nm_pd			= $this->input->post('nm_pd');
		$tmpt_lahir		= $this->input->post('tmpt_lahir');
		$jns_kelamin	= $this->input->post('jns_kelamin');
		$alamat			= $this->input->post('alamat');
		$nm_ayah		= $this->input->post('nm_ayah');
		$pekerjaan_ayah	= $this->input->post('pekerjaan_ayah');
		$nm_ibu			= $this->input->post('nm_ibu');
		$pekerjaan_ibu	= $this->input->post('pekerjaan_ibu');
		$no_hp			= $this->input->post('no_hp');
		$tgl_keluar		= $this->input->post('tgl_keluar');
		$update = $this->Admin_Model->updatealumni($no_induk,$nm_pd,$tmpt_lahir,$jns_kelamin,$alamat,$nm_ayah,$pekerjaan_ayah,$nm_ibu,$pekerjaan_ibu,$no_hp,$tgl_keluar);
		if($update= true)
		{
			$this->session->set_flashdata('update_success', 'Berhasil Memperbarui Data');
			redirect("lembaga/editalumni/".$no_induk);
		}
		else
		{
			$this->session->set_flashdata('update_failed', 'Tidak Dapat Memperbarui Data');
			redirect("lembaga/editalumni/".$no_induk);
		}
	}
	public function hapusalumni($no_induk) {
		$detele = $this->Admin_Model->hapusalumni($no_induk);
		if($delete = true) {
			$this->session->set_flashdata('hapus_berhasil', "Berhasil Menghapus Data Alumni");
			redirect("lembaga/dataalumni");
		}
		else {
			$this->session->set_flashdata('hapus_gagal', "Tidak Dapat Menghapus Data Alumni");
			redirect("lembaga/dataalumni");
		}
	}
	public function datadonatur($kd_lembaga) {
		if(! $this->session->userdata('lembaga'))
		{
			redirect('lembaga/login');
		}
		$username				= $_SESSION['lembaga'];
		$data['user']			= $username;
		$data['datalembaga']	= $this->Lembaga_Model->datalembaga($username);
		$data['datadonatur']	= $this->Lembaga_Model->datadonatur($kd_lembaga);
		$this->load->view('lembaga/head');
		$this->load->view('lembaga/header', $data);
		$this->load->view('lembaga/datadonatur', $data);
		$this->load->view('lembaga/footer');
	}
}
?>