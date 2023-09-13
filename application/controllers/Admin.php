<?php
Class Admin extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'pdflibrary'));
		$this->load->model(array('Admin_Model'));
	}
	public function login() {
		if($this->session->userdata('admin'))
		{
			redirect('admin/');
		}
		$this->load->view('admin/head');
		$this->load->view('admin/login');
		$this->load->view('footer');
	}
	public function index() {
		if(! $this->session->userdata('admin'))
		{
			redirect('admin/login');
		}
		$data['counttpa']		= $this->Admin_Model->counttpa();
		$data['countguru']		= $this->Admin_Model->countguru();
		$data['countpd']		= $this->Admin_Model->countpd();
		$data['countdonatur']	= $this->Admin_Model->countdonatur();
		$data['pendaftar']		= $this->Admin_Model->pendaftar();
		$data['lembagaaktif']	= $this->Admin_Model->lembagaaktif();
		$data['lembagatidakaktif']	= $this->Admin_Model->lembagatidakaktif();
		$data['dataketerangan']	= $this->Admin_Model->dataketerangan();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
	}
	public function simpanketerangan() {
		$ket_lembagaaktif		= $this->input->post('ket_lembagaaktif');
		$ket_lembagatidakaktif	= $this->input->post('ket_lembagatidakaktif');
		$update					= $this->Admin_Model->simpanketerangan($ket_lembagaaktif,$ket_lembagatidakaktif);
		if($update = true) {
			$this->session->set_flashdata('update_berhasil', 'Berhasil Memperbarui Data');
			redirect('admin/');
		}
		else {
			$this->session->set_flashdata('update_gagal', 'Tidak Dapat Memperbarui Data');
			redirect('admin/');
		}
		
	}
	public function pendaftar($username) {
		$data['berkaspendaftar'] = $this->Admin_Model->berkaspendaftar($username);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/pendaftar', $data);
		$this->load->view('admin/footer');
	}
	public function accberkas() {
		$username		= $this->input->post("username");
		$kd_persyaratan = $this->input->post("kd_persyaratan");
		$accept			= $this->Admin_Model->accberkas($username, $kd_persyaratan);
		if($accept = true) {
			$this->session->set_flashdata('accept', 'Berkas Pendaftar telah di Setujui');
			redirect('admin/pendaftar/'.$username);
		}
		else {
			echo "Terjadi Kesalahan Silahkan Coba Lagi";
		}
	}
	public function tolakberkas() {
		$username		= $this->input->post("username");
		$kd_persyaratan = $this->input->post("kd_persyaratan");
		$tolak			= $this->Admin_Model->tolakberkas($username, $kd_persyaratan);
		if($tolak = true) {
			$this->session->set_flashdata('tolak', 'Berkas Pendaftar telah di Tolak');
			redirect('admin/pendaftar/'.$username);
		}
		else {
			echo "Terjadi Kesalahan Silahkan Coba Lagi";
		}
	}
	public function pesan() {
		$data['pendaftar']		= $this->Admin_Model->gurupendaftar();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/pesan', $data);
		$this->load->view('admin/footer');
	}
	public function kirimpesan() {
		$username	= $this->input->post('username');
		$subject	= $this->input->post('subject');
		$pesan		= $this->input->post('pesan');
		$kirim		= $this->Admin_Model->kirimpesan($username, $subject, $pesan);
		if($kirim = true) {
			$this->session->set_flashdata('berhasil', 'Pesan Terkirim');
			redirect("admin/pesan");
		}
		else {
			$this->session->set_flashdata('gagal', 'Pesan Tidak Terkirim');
			redirect("admin/pesan");
		}
	}
	public function loginvalidation() {
		$username				= $this->input->post('username', TRUE);
		$password				= $this->input->post('password', TRUE);
		$result					= $this->Admin_Model->login($username, $password);
		if($result == true) {
			$this->session->set_userdata(array(
				'admin'	=> $username
			));
			redirect('admin/');
		}
		else
		{
			$this->session->set_flashdata('failed', 'Username atau Password Salah');
			redirect('admin/login');
		}
	}
	public function logout() {
		$this->session->unset_userdata('admin');
		redirect('admin/login');
	}
	public function buatuserguru() {
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		$buat 		= $this->Admin_Model->buatuserguru($username, $password);
		if($buat = true) {
			$this->session->set_flashdata('buat_success', 'Berhasil Membuat User Lembaga');
			redirect('admin/');
		}
		else {
			$this->session->set_flashdata('buat_failed', 'Gagal Membuat User Lembaga');
			redirect('admin/');
		}
	}
	public function pilihuserguru() {
		$data['datauserguru']	= $this->Admin_Model->datauserguru();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/pilih-userguru', $data);
		$this->load->view('admin/footer');
	}
	public function datatpa() {
		$data['datatpa']	= $this->Admin_Model->datatpa();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/data-tpa', $data);
		$this->load->view('admin/footer');
	}
	public function tambahdatatpa($username) {
		$data['username']	= $this->Admin_Model->usernameguru($username);
		$this->load->view("admin/head");
		$this->load->view("admin/header");
		$this->load->view("admin/tambahdatatpa", $data);
		$this->load->view('admin/footer');
	
	}
	public function tambahdata_tpa() {
		$kd_lembaga		= $this->input->post('kd_lembaga', TRUE);
		$username		= $this->input->post('username', TRUE);
		$nm_lembaga		= $this->input->post('nm_lembaga', TRUE);
		$thn_berdiri	= $this->input->post('thn_berdiri', TRUE);
		$pimpinan		= $this->input->post('pimpinan', TRUE);
		$alamat			= $this->input->post('alamat', TRUE);
		$desa			= $this->input->post('desa', TRUE);
		$kecamatan		= $this->input->post('kecamatan', TRUE);
		$tmpt_belajar	= $this->input->post('tmpt_belajar', TRUE);
		$metode			= $this->input->post('metode', TRUE);
		$kat_wilayah	= $this->input->post('kat_wilayah', TRUE);
		$tmbh_pemb		= $this->input->post('tmbh_pemb', TRUE);
		$tambahdata		= $this->Admin_Model->tambahdatatpa($kd_lembaga, $username,$nm_lembaga, $thn_berdiri, $pimpinan, $alamat, $desa, $kecamatan, $tmpt_belajar, $metode, $kat_wilayah, $tmbh_pemb);
		if($tambahdata = true)
		{
			$this->session->set_flashdata('add_success', 'Berhasil Menambahkan Data');
			redirect("admin/tambahdatatpa/".$username);
		}
		else
		{
			$this->session->set_flashdata('add_failed', 'Gagal Menambahkan Data');
			redirect("admin/tambahdatatpa/".$username);
		}
	}
	public function editdatatpa($kd_lembaga) {
		$data['datatpa']	= $this->Admin_Model->datakdtpa($kd_lembaga);
		$this->load->view("admin/head");
		$this->load->view("admin/header");
		$this->load->view("admin/editdatatpa", $data);
		$this->load->view('admin/footer');
	}
	public function updatedatatpa() {
		$kd_lembaga		= $this->input->post('kd_lembaga', TRUE);
		$nm_lembaga		= $this->input->post('nm_lembaga', TRUE);
		$thn_berdiri	= $this->input->post('thn_berdiri', TRUE);
		$pimpinan		= $this->input->post('pimpinan', TRUE);
		$alamat			= $this->input->post('alamat', TRUE);
		$desa			= $this->input->post('desa', TRUE);
		$kecamatan		= $this->input->post('kecamatan', TRUE);
		$tmpt_belajar	= $this->input->post('tmpt_belajar', TRUE);
		$metode			= $this->input->post('metode', TRUE);
		$kat_wilayah	= $this->input->post('kat_wilayah', TRUE);
		$tmbh_pemb		= $this->input->post('tmbh_pemb', TRUE);
		$tambahdata		= $this->Admin_Model->updatedatatpa($kd_lembaga, $nm_lembaga, $thn_berdiri, $pimpinan, $alamat, $desa, $kecamatan, $tmpt_belajar, $metode, $kat_wilayah, $tmbh_pemb);
		if($tambahdata = true)
		{
			$this->session->set_flashdata('edit_success', 'Update Data Berhasil');
			redirect("admin/editdatatpa/".$kd_lembaga);
		}
		else
		{
			$this->session->set_flashdata('edit_failed', 'Update Data Gagal');
			redirect("admin/editdatatpa/".$kd_lembaga);
		}
	}
	public function hapusdatatpa($kd_lembaga) {
		$validhapustpa	= $this->Admin_Model->validhapustpa($kd_lembaga);
		if($validhapustpa == true) {
			$this->session->set_flashdata('hapus_invalid', 'sd');
			redirect("admin/datatpa/");
		}
		else {
			$delete			= $this->Admin_Model->deletedatatpa($kd_lembaga);
			if($tambahdata = true)
			{
				$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Data');
				redirect("admin/datatpa");
			}
			else
			{
				$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Data');
				redirect("admin/datatpa");
			}
		}
	}
	public function dataguru() {
		$data['dataguru']	= $this->Admin_Model->dataguru();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/data-guru', $data);
		$this->load->view('admin/footer');
	}
	public function tambahguru() {
		$data['datalembaga']	= $this->Admin_Model->datatpa();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/pilih-lembaga', $data);
		$this->load->view('admin/footer');
	}
	public function tambahdataguru($kd_lembaga) {
		$data['datalembaga']	= $this->Admin_Model->datakdtpa($kd_lembaga);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahdataguru', $data);
		$this->load->view('admin/footer');
	}
	public function simpandataguru() {
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
		$simpan			= $this->Admin_Model->simpandataguru($kd_lembaga, $nik, $nm_guru, $tmpt_lahir, $tgllahir_guru, $jns_kelamin, $alamat, $pendidikan, $profesi_lain, $no_hp, $tmt_mengajar);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("admin/tambahdataguru/".$kd_lembaga);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("admin/tambahdataguru/".kd_lembaga);
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
		$simpan			= $this->Admin_Model->updateguru($kd_lembaga, $nik, $nm_guru, $tmpt_lahir, $tgllahir_guru, $jns_kelamin, $alamat, $pendidikan, $profesi_lain, $no_hp, $tmt_mengajar);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("admin/editguru/".$nik);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("admin/editguru/".$nik);
		}
	}
	public function editguru($nik) {
		$data['dataguru']	= $this->Admin_Model->datakdguru($nik);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/editguru', $data);
		$this->load->view('admin/footer');
	}
	public function hapusguru($nik) {
		$validhapusguru = $this->Admin_Model->validhapusguru($nik);
		if($validhapusguru == true) {
			$this->session->set_flashdata('hapus_invalid', 'Tidak dapat Menghapus Data Guru, Dikarenakan Guru ini masuk kedalam Kelompok Belajar');
			redirect("admin/dataguru/");
		}
		else {
			$hapus = $this->Admin_Model->hapusguru($nik);
			if($hapus = true)
			{
				$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Data');
				redirect("admin/dataguru/");
			}
			else
			{
				$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Data');
				redirect("admin/dataguru/");
			}
		}
	}
	
	public function pilihlembaga_pd() {
		$data['datatpa']	= $this->Admin_Model->datatpa();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/pilihlembaga-pd', $data);
		$this->load->view('admin/footer');
	}
	public function pilihlembagaalumni() {
		$data['datatpa']	= $this->Admin_Model->datatpa();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/pilihlembaga-alumni', $data);
		$this->load->view('admin/footer');
	}
	public function datarombel($kd_lembaga) {
		$data['datakdtpa']		= $this->Admin_Model->datakdtpa($kd_lembaga);
		$data['datarombel']		= $this->Admin_Model->datarombel($kd_lembaga);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/datarombel', $data);
		$this->load->view('admin/footer');
	}
	public function tambahrombel($kd_lembaga) {
		$data['datagurutpa']	= $this->Admin_Model->datagurutpa($kd_lembaga);
		$data['datakdtpa']	= $this->Admin_Model->datakdtpa($kd_lembaga);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahrombel', $data);
		$this->load->view('admin/footer');
	}
	public function simpanrombel() {
		$kd_lembaga		= $this->input->post('kd_lembaga');
		$kd_rombel		= $kd_lembaga.'-'.$this->input->post('kd_rombel');
		$nm_rombel		= $this->input->post('nm_rombel');
		$nik			= $this->input->post('nik');
		$simpan			= $this->Admin_Model->simpanrombel($kd_lembaga,$kd_rombel,$nm_rombel,$nik);
		if($simpan = true)
		{
			redirect("admin/datarombel/".$kd_lembaga);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("admin/tambahrombel/".$kd_lembaga);
		}
		
	}
	public function hapusrombel($kd_rombel) {
		$kd_lembaga		= $this->input->post('kd_lembaga'); 
		$countpdrombel	= $this->Admin_Model->countpdrombel($kd_rombel);
		if($countpdrombel == true) {
			$this->session->set_flashdata('hapus_invalid', 'Tidak dapat Menghapus Kelompok Belajar Karna Masih Memiliki Murid');
			redirect("admin/datarombel/".$kd_lembaga);
		}
		else {
			$hapus = $this->Admin_Model->hapusrombel($kd_rombel);
			if($hapus = true)
			{
				$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Data');
				redirect("admin/datarombel/".$kd_lembaga);
			}
			else
			{
				$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Data');
				redirect("admin/datarombel/".$kd_lembaga);
			}
		}
	}
	public function datapd($kd_rombel) {
		$data['datakdrombel']		= $this->Admin_Model->datakdrombel($kd_rombel);
		$data['datapd']				= $this->Admin_Model->datapd($kd_rombel);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/datapd', $data);
		$this->load->view('admin/footer');
	}
	public function tambahpd($kd_rombel) {
		$data['datakdrombel']	= $this->Admin_Model->datakdrombel($kd_rombel);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahdata-pd', $data);
		$this->load->view('admin/footer');
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
		$simpan 			= $this->Admin_Model->simpanpd($no_induk, $kd_rombel, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_masuk);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("admin/tambahpd/".$kd_rombel);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("admin/tambahpd/".$kd_rombel);
		}
	}
	public function editpd($no_induk) {
		$data['datapd']	= $this->Admin_Model->datakdpd($no_induk);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/editpd', $data);
		$this->load->view('admin/footer');
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
		$simpan 			= $this->Admin_Model->updatepd($no_induk, $kd_rombel, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_masuk);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("admin/editpd/".$no_induk);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("admin/editpd/".$no_induk);
		}
	}
	public function luluskanpd($no_induk) {
		$data['datapd']	= $this->Admin_Model->datakdpd($no_induk);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/luluskanpd', $data);
		$this->load->view('admin/footer');
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
		$lulus				= $this->Admin_Model->luluspd($no_induk, $kd_lembaga, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_keluar);
		if($lulus = true)
		{
			$hapus			= $this->Admin_Model->hapuspd($no_induk);
			$this->session->set_flashdata('lulus_success', 'Berhasil Meluluskan Peserta Didik');
			redirect("admin/datapd/".$kd_rombel);
		}
		else
		{
			$this->session->set_flashdata('lulus_failed', 'Gagal Meluluskan Peserta Didik');
			redirect("admin/datapd/".$kd_rombel);
		}
		
	}
	public function datalembagadonatur() {
		$data['datatpa']	= $this->Admin_Model->datatpa();
		$data['donatur']	= $this->Admin_Model->daftardonatur();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/pilihlembaga-donatur', $data);
		$this->load->view('admin/footer');
	}
	public function datadonatur($kd_lembaga) {
		$data['datadonatur'] = $this->Admin_Model->datadonatur($kd_lembaga);
		$data['datakdtpa'] = $this->Admin_Model->datakdtpa($kd_lembaga);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/datadonatur', $data);
		$this->load->view('admin/footer');
	}
	public function tambahdonatur() {
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahdonatur');
		$this->load->view('admin/footer');
	}
	public function simpandonatur() {
		$id_donatur	= $this->input->post('id_donatur');
		$nm_donatur	= $this->input->post('nm_donatur');
		$simpan 	= $this->Admin_Model->simpandonatur($id_donatur,$nm_donatur);
		if($simpan = TRUE) {
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("admin/tambahdonatur/");
		}
		else {
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("admin/tambahdonatur/");
		}
	}
	public function editdonatur($id_donatur) {
		$data['donatur']	= $this->Admin_Model->daftardonatur();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/editdonatur', $data);
		$this->load->view('admin/footer');
	}
	public function updatedonatur() {
		$id_donatur	= $this->input->post('id_donatur');
		$nm_donatur	= $this->input->post('nm_donatur');
		$simpan 	= $this->Admin_Model->updatedonatur($id_donatur,$nm_donatur);
		if($simpan = TRUE) {
			$this->session->set_flashdata('update_success', 'Berhasil Menyimpan Data');
			redirect("admin/editdonatur/".$id_donatur);
		}
		else {
			$this->session->set_flashdata('update_failed', 'Gagal Menyimpan Data');
			redirect("admin/editdonatur/".$id_donatur);
		}
	}
	public function hapusdonatur($id_donatur) {
		$delete = $this->Admin_Model->hapusdonatur($id_donatur);
		if($delete = TRUE) {
			$this->session->set_flashdata('delete_success', 'Berhasil Menghapus Data');
			redirect("admin/datalembagadonatur/");
		}
		else {
			$this->session->set_flashdata('delete_failed', 'Gagal Menghapus Data');
			redirect("admin/datalembagadonatur/");
		}
	}
	public function tambahdonasi($kd_lembaga) {
		$data['datakdtpa'] = $this->Admin_Model->datakdtpa($kd_lembaga);
		$data['donatur']	= $this->Admin_Model->daftardonatur();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahdonasi', $data);
		$this->load->view('admin/footer');
	}
	public function simpandonasi() {
		$kd_lembaga			= $this->input->post('kd_lembaga');
		$id_donatur			= $this->input->post('id_donatur');
		$tgl_donasi			= $this->input->post('tgl_donasi');
		$fisik				= $this->input->post('fisik');
		$jml_donasifisik	= $this->input->post('jml_donasifisik');
		$non_fisik			= $this->input->post('non_fisik');
		$jml_donasinonfisik	= $this->input->post('jml_donasinonfisik');
		$simpan				= $this->Admin_Model->simpandonasi($kd_lembaga, $id_donatur, $tgl_donasi, $fisik, $jml_donasifisik, $non_fisik, $jml_donasinonfisik);
		if($simpan = true)
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menyimpan Data');
			redirect("admin/datadonatur/".$kd_lembaga);
		}
		else
		{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menyimpan Data');
			redirect("admin/tambahdonatur/".$kd_lembaga);
		}
	}
	public function hapusdonasi($id_donasi){
		$hapus = $this->Admin_Model->hapusdonasi($id_donasi);
		$kd_lembaga = $this->input->post('kd_lembaga');
		if($hapus = true)
		{
			$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Data');	
			redirect("admin/datadonatur/".$kd_lembaga);
		}
		else
		{
			$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Data');
			redirect("admin/datadonatur/".$kd_lembaga);
		}
	}
	public function dataalumni($kd_lembaga) {
		$data['kd_lembaga']	= $kd_lembaga;
		$data['dataalumni']	= $this->Admin_Model->dataalumni($kd_lembaga);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/dataalumni', $data);
		$this->load->view('admin/footer');
	}
	public function tambahalumni($kd_lembaga) {
		$data['datakdtpa']	= $this->Admin_Model->datakdtpa($kd_lembaga);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/tambahalumni', $data);
		$this->load->view('admin/footer');
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
			redirect("admin/tambahalumni/".$kd_lembaga);
		}
		else
		{
			$this->session->set_flashdata('lulus_failed', 'Gagal Menambahkan Data');
			redirect("admin/tambahalumni/".$kd_lembaga);
		}
	}
	public function editalumni($no_induk) {
		$data['dataalumni']	= $this->Admin_Model->datakdalumni($no_induk);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/editalumni', $data);
		$this->load->view('admin/footer');
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
			redirect("admin/editalumni/".$no_induk);
		}
		else
		{
			$this->session->set_flashdata('update_failed', 'Tidak Dapat Memperbarui Data');
			redirect("admin/editalumni/".$no_induk);
		}
	}
	public function hapusalumni($no_induk) {
		$kd_lembaga = $this->input->post("kd_lembaga");
		$detele = $this->Admin_Model->hapusalumni($no_induk);
		if($delete = true) {
			$this->session->set_flashdata('hapus_berhasil', "Berhasil Menghapus Data Alumni");
			redirect("admin/dataalumni/".$kd_lembaga);
		}
		else {
			$this->session->set_flashdata('hapus_gagal', "Tidak Dapat Menghapus Data Alumni");
			redirect("admin/dataalumni/".$kd_lembaga);
		}
	}
	public function laporanlembaga() {
		$this->load->view('admin/laporanlembaga');
	}	
	public function laporandonatur() {
		$data['donatur'] = $this->Admin_Model->data_donatur();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/donatur', $data);
		$this->load->view('admin/footer');
	}
	public function laporandonasi($id_donatur) {
		$datadonatur = $this->Admin_Model->laporandonatur($id_donatur);
		foreach($datadonatur as $data) {}
		ob_start();
		$pdf = new FPDF('l', 'mm', 'legal');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(350,7,'DATA LEMBAGA PENDIDIKAN AL-QURAN (TPA) PENERIMA BANTUAN',0,1,'C');
		$pdf->Cell(10,7,'',0,1);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(50,7, 'KECAMATAN', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, 'GIRIRENG', 0,1);
		$pdf->Cell(50,7, 'KABUPATEN', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, 'WAJO', 0,1);
		$pdf->Cell(50,7, 'PROVINSI', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, 'SULAWESI SELATAN', 0,1);
		$pdf->Cell(50,7, 'TANGGAL', 0,0);
		$pdf->Cell(5,7, ':', 0,0);
		$pdf->Cell(60,7, date('d/m/Y'), 0,1);
		$pdf->Cell(10,7,'',0,1);
		$pdf->Cell(10,14, 'No',1,0, 'C');
		$pdf->Cell(35,14, 'Desa / Kel',1,0, 'C');
		$pdf->Cell(50,7, 'Nama Lembaga',1,0, 'C');
		$pdf->Cell(35,14, 'Nama Pimpinan',1,0, 'C');
		$pdf->Cell(40,14, 'Alamat',1,0, 'C');
		$pdf->Cell(25,7, 'Tahun',1,0, 'C');

		$pdf->Cell(50,7, 'Jenis Bantuan',1,0, 'C');
		$pdf->Cell(50,7, 'Jumlah Bantuan',1,0, 'C');
		$pdf->Cell(1,7, '',0,1, 'C');
		$pdf->Cell(45,7, '',0,0, 'C');
		$pdf->Cell(50,7, 'Pendidikan Al-Quran',1,0, 'C');
		$pdf->Cell(75,7, '',0,0, 'C');
		$pdf->Cell(25,7, 'Berdiri',1,0, 'C');

		$pdf->Cell(25,7, 'Fisik' , 1,0, 'C');
		$pdf->Cell(25,7, 'NonFisik' , 1,0, 'C');
		$pdf->Cell(25,7, 'Fisik' , 1,0, 'C');
		$pdf->Cell(25,7, 'NonFisik' , 1,0, 'C');
		$pdf->Cell(30,7, '' , 0,1);
		$pdf->Cell(10,6, '1', 1,0, 'C');
		$pdf->Cell(35,6, '2', 1,0, 'C');
		$pdf->Cell(50,6, '3', 1,0, 'C');
		$pdf->Cell(35,6, '4', 1,0, 'C');
		$pdf->Cell(40,6, '5', 1,0, 'C');
		$pdf->Cell(25,6, '6', 1,0, 'C');

		$pdf->Cell(25,6, '8', 1,0, 'C');
		$pdf->Cell(25,6, '9', 1,0, 'C');
		$pdf->Cell(25,6, '9', 1,0, 'C');
		$pdf->Cell(25,6, '9', 1,1, 'C');
		$no = 1;
		foreach($datadonatur as $data) {
			$pdf->SetFont('Arial','',9);
			$pdf->Cell(10,10, $no++ , 1,0, 'C');
			$pdf->Cell(35,10, $data['desa'] , 1,0, 'L');
			$pdf->Cell(50,10, $data['nm_lembaga'] , 1,0, 'L');
			$pdf->Cell(35,10, $data['pimpinan'] , 1,0, 'L');
			
			$pdf->Cell(40,10, $data['alamat'] , 1,0, 'L');
			$pdf->Cell(25,10, $data['thn_berdiri'] , 1,0, 'C');
			
			$pdf->Cell(25,10, $data['fisik'] , 1,0, 'C');
			$pdf->Cell(25,10, $data['non_fisik'] , 1,0, 'C');
			$pdf->Cell(25,10, $data['jml_donasifisik'] , 1,0, 'C');
			$pdf->Cell(25,10, $data['jml_donasinonfisik'] , 1,1, 'C');
		}
		$pdf->Output();
		ob_end_flush(); 
	}
	public function persyaratanguru() {
		$data['persyaratan'] = $this->Admin_Model->datapersyaratan();
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/persyaratanguru', $data);
		$this->load->view('admin/footer');
	}
	public function simpanpersyaratan() {
		$kd_persyaratan	= $this->input->post("kd_persyaratan");
		$persyaratan	= $this->input->post("persyaratan");
		$deskripsi		= $this->input->post("deskripsi");
		$simpan			= $this->Admin_Model->simpanpersyaratan($kd_persyaratan,$persyaratan,$deskripsi);
		if($simpan = true){
			redirect("admin/persyaratanguru");
		}
		else {
			redirect("admin/persyaratanguru");
		}
	}
	public function editpersyaratan($kd_persyaratan) {
		$data['kdpersyaratan'] = $this->Admin_Model->datakdpersyaratan($kd_persyaratan);
		$this->load->view('admin/head');
		$this->load->view('admin/header');
		$this->load->view('admin/editpersyaratan', $data);
		$this->load->view('admin/footer');
	}
	public function updatepersyaratan() {
		$kd_persyaratan	= $this->input->post("kd_persyaratan");
		$persyaratan	= $this->input->post("persyaratan");
		$deskripsi		= $this->input->post("deskripsi");
		$update			= $this->Admin_Model->updatepersyaratan($kd_persyaratan,$persyaratan,$deskripsi);
		if($update = true){
			redirect("admin/persyaratanguru");
		}
		else {
			redirect("admin/editpersyaratan".$kd_persyaratan);
		}
	}
	public function hapuspersyaratan($kd_persyaratan) {
		$delete = $this->Admin_Model->hapuspersyaratan($kd_persyaratan);
		if($delete = true) {
			$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Data');
			redirect("admin/persyaratanguru");
		}
		else {
			$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Data');
			redirect("admin/persyaratanguru");
		}
	}
	public function aktifkanlembaga() {
		$kd_lembaga	= $this->input->post("kd_lembaga");
		$aktifkan	= $this->Admin_Model->aktifkanlembaga($kd_lembaga);
		if($aktifkan= true)
		{
			$this->session->set_flashdata('aktif_success', 'Berhasil Mengaktifkan Lembaga');
			redirect("admin/index");
		}
		else
		{
			$this->session->set_flashdata('aktif_failed', 'Gagal Mengaktifkan Lembaga');
			redirect("admin/index");
		}
	}
	public function nonaktifkanlembaga() {
		$kd_lembaga		= $this->input->post("kd_lembaga");
		$nonaktifkan	= $this->Admin_Model->nonaktifkanlembaga($kd_lembaga);
		if($nonaktifkan= true)
		{
			$this->session->set_flashdata('nonaktif_success', 'Berhasil Menonaktifkan Lembaga');
			redirect("admin/index");
		}
		else
		{
			$this->session->set_flashdata('nonaktif_failed', 'Gagal Menonaktifkan Lembaga');
			redirect("admin/index");
		}
	}
}
?>