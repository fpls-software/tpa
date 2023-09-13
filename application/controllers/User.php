<?php 
Class User extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'pdflibrary'));
		$this->load->model(array('Admin_Model', 'User_Model'));
	}
	public function index() {
		$data['datalembaga'] = $this->Admin_Model->laporanlembaga();
		
		$this->load->view('user/head');
		$this->load->view('user/header');
		$this->load->view('user/beranda', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/footer');
	}
	public function lembaga($kd_lembaga) {
		$data['datalembaga'] 	 = $this->Admin_Model->laporanlembaga();
		$data['lembaga']		 = $this->User_Model->lembaga($kd_lembaga);
		$data['guru']			 = $this->User_Model->guru($kd_lembaga);
		$data['pesertadidik']	 = $this->User_Model->pesertadidik($kd_lembaga);
		$data['dataalumni'] 	 = $this->User_Model->dataalumni($kd_lembaga);
		$data['datasumbangan1']	 = $this->User_Model->datasumbangan($kd_lembaga);
		$data['datadonatur']	 = $this->User_Model->datadonatur($kd_lembaga);
		$data['jumlahdonatur']	 = $this->User_Model->jumlahdonatur($kd_lembaga);
		$data['kd_lembaga']		 = $kd_lembaga;
		$bulan	= $this->input->post("bulan");
		$tahun	= $this->input->post("tahun");

		//BERDASARKAN BULAN
		if(empty($tahun)) {
			$data['datasumbangan']	 = $this->User_Model->bulandatasumbangan($kd_lembaga, $bulan);
			$data['totalsumbangan']	 = $this->User_Model->bulantotalsumbangan($kd_lembaga, $bulan);
		}
		//BERDASARKAN TAHUN
		elseif(empty($bulan)) {
			$data['datasumbangan']	 = $this->User_Model->tahundatasumbangan($kd_lembaga, $tahun);
			$data['totalsumbangan']	 = $this->User_Model->tahuntotalsumbangan($kd_lembaga, $tahun);
		}
		//BERDASARKAN TAHUN DAN BULAN
		else {
			$data['datasumbangan']	 = $this->User_Model->bulantahundatasumbangan($kd_lembaga, $bulan, $tahun);
			$data['totalsumbangan']	 = $this->User_Model->bulantahuntotalsumbangan($kd_lembaga, $bulan, $tahun);
		}
		$this->load->view('user/head');
		$this->load->view('user/header');
		$this->load->view('user/datalembaga', $data);
		$this->load->view('user/sidebar', $data);
		$this->load->view('user/footer');
	}
	
	public function daftarlembaga() {
		$data['datalembaga'] 	= $this->Admin_Model->laporanlembaga();
		$data['dataketerangan'] = $this->Admin_Model->dataketerangan();
		$this->load->view('user/head');
		$this->load->view('user/header');
		$this->load->view('user/lembaga', $data);
		$this->load->view('user/footer');
	}
	public function daftarlembagatidakaktif() {
		$data['datalembaga'] = $this->Admin_Model->laporanlembagatidakaktif();
		$data['dataketerangan'] = $this->Admin_Model->dataketerangan();
		$this->load->view('user/head');
		$this->load->view('user/header');
		$this->load->view('user/datalembagatidakaktif', $data);
		$this->load->view('user/footer');
	}
	public function daftardonatur() {
		$data['datadonasi'] = $this->Admin_Model->laporandonasi();
		$this->load->view('user/head');
		$this->load->view('user/header');
		$this->load->view('user/donatur', $data);
		$this->load->view('user/footer');
	}
	public function registrasiguru() {
		$this->load->view('user/head');
		$this->load->view('user/header');
		$this->load->view('user/regguru');
		$this->load->view('user/footer');
	}
	public function simpandataregistrasi() {
		$nik			= $this->input->post('nik');
		$nama			= $this->input->post('nama');
		$jk				= $this->input->post('jk');
		$tmpt_lahir		= $this->input->post('tmpt_lahir');
		$tgl_lahir		= $this->input->post('tgl_lahir');
		$alamat			= $this->input->post('alamat');
		$pendidikan		= $this->input->post('pendidikan');
		$no_hp			= $this->input->post('no_hp');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		$password_hash	= md5($password);
		$reg			= $this->User_Model->regguru($nik,$nama,$jk,$tmpt_lahir,$tgl_lahir,$alamat,$pendidikan,$no_hp,$username,$password_hash);
		if($reg = TRUE) {
			$this->session->set_flashdata('success', 'Berhasil Membuat User');
			redirect('user/registrasiguru');
		}
		else {
			$this->session->set_flashdata('failed', 'Gagal Membuat User');
			redirect('user/registrasiguru');
		}
	}
	public function login() {
		$this->load->view('user/head');
		$this->load->view('user/header');
		$this->load->view('user/login');
		$this->load->view('user/footer');
	}
	public function validlogin() {
		$username				= $this->input->post('username', TRUE);
		$password				= $this->input->post('password', TRUE);
		$password_hash			= md5($password);
		$result					= $this->User_Model->login($username, $password_hash);
		if($result == true) {
			$this->session->set_userdata(array(
				'user'	=> $username
			));
			redirect('user/guru');
		}
		else
		{
			$this->session->set_flashdata('failed', 'Username atau Password Salah');
			redirect('user/login');
		}
	}
	public function logout() {
		$this->session->unset_userdata('user');
		redirect('user/login');
	}
	public function guru() {
		$data['user']			  = $_SESSION['user']; 
		$user					  = $data['user'];
		$data['persyaratan']	  = $this->User_Model->persyaratan();
		$data['validpersyaratan'] = $this->User_Model->validpersyaratan($user); 
		$this->load->view('user/head');
		$this->load->view('user/userheader', $data);
		$this->load->view('user/guru', $data);
		$this->load->view('user/footer');
	}
	public function uploadberkas() {
		$username		= $this->input->post("username");
		$kd_persyaratan	= $this->input->post("kd_persyaratan");
		$config['upload_path']	= "./asset/image/berkas_persyaratan/";
		$config['allowed_types']= "pdf";
		$config['max_size']		= 2048;
		$config['file_name']	= $username."_".$kd_persyaratan."_".date("d-m-Y-h-i-s");
		$this->load->library('upload', $config);
		if($this->upload->do_upload('berkas'))
		{
			$this->session->set_flashdata('info', 'Berhasil Mengupload Berkas');
			$data['upload_data']= $this->upload->data();
			$file 				= $_FILES['berkas']['name'];
			$file_ext			= pathinfo($file, PATHINFO_EXTENSION);
			$berkas				= $config['file_name'].".".$file_ext;
			$this->User_Model->uploadberkas($username, $kd_persyaratan, $berkas);
			redirect('user/guru');
		}
		else 
		{
			$this->session->set_flashdata('failed', 'Gagal Mengupload Berkas Data');
			redirect('user/guru');
		}
	}
	public function hasil() {
		$data['user']			  = $_SESSION['user']; 
		$username					  = $data['user'];
		$data['berkaspendaftar']  = $this->Admin_Model->berkaspendaftar($username);
		$this->load->view('user/head');
		$this->load->view('user/userheader', $data);
		$this->load->view('user/hasil', $data);
		$this->load->view('user/footer');
	}
	public function pesan() {
		$data['user']			= $_SESSION['user']; 
		$username				= $data['user'];
		$data['daftarpesan']	= $this->User_Model->pesan($username);	
		$this->load->view('user/head');
		$this->load->view('user/userheader', $data);
		$this->load->view('user/pesan', $data);
		$this->load->view('user/footer');
	}
	public function laporandonasi() {
		$datadonatur = $this->User_Model->laporandonatur();
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
			$pdf->Cell(25,10, "Rp.".number_format($data['jml_donasinonfisik'],0,'','.') , 1,1, 'R');
		}
		$pdf->Output();
		ob_end_flush(); 
	}
	public function listalumni($kd_lembaga, $tahun) {
		$data['dataalumni']	= $this->User_Model->listalumni($kd_lembaga,$tahun);
		$this->load->view("user/head");
		$this->load->view("user/listalumni", $data);
	}
}
?>