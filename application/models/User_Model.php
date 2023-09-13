<?php
Class User_Model extends CI_Model {
	public function regguru($nik,$nama,$jk,$tmpt_lahir,$tgl_lahir,$alamat,$pendidikan,$no_hp,$username,$password_hash) {
		$data				= array(
			'nik'			=> $nik,
			'nama'			=> $nama,
			'jk'			=> $jk,
			'tmpt_lahir'	=> $tmpt_lahir,
			'tgl_lahir'		=> $tgl_lahir,
			'alamat'		=> $alamat,
			'pendidikan'	=> $pendidikan,
			'no_hp'			=> $no_hp,
			'username'		=> $username,
			'password'		=> $password_hash
		);
		$this->db->insert("tb_regguru", $data);
	}
	public function login($username, $password_hash) {
		$condition	= "username="."'".$username."'". " AND "."password="."'".$password_hash."'";
		$select		= array('username', 'password');
		$this->db->select($select);
		$this->db->from('tb_regguru');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function persyaratan() {
		$load = $this->db->query("SELECT * FROM tb_persyaratan");
		return $load->result_array();
	}
	public function uploadberkas($username, $kd_persyaratan, $berkas) {
		$data					= array(
			'username'			=> $username,
			'kd_persyaratan'	=> $kd_persyaratan,
			'berkas'			=> $berkas,
			'status'			=> 'pending'
		);
		$this->db->insert("tb_registrasi", $data);
	}	
	public function validpersyaratan($user) {
		$condition	= "username="."'".$user."'";
		$select		= array('username');
		$this->db->select($select);
		$this->db->from('tb_registrasi');
		$this->db->where($condition);
		$valid 		= $this->db->get();
		
		if($valid->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function pesan($username) {
		$load = $this->db->query("SELECT * FROM tb_pesan WHERE username='$username' ORDER BY id_pesan DESC");
		return $load->result_array();
	}
	public function lembaga($kd_lembaga) {
		$load = $this->db->query("
			SELECT * FROM tb_lembaga WHERE kd_lembaga='$kd_lembaga'
		");
		return $load->result_array();
	}
	public function guru($kd_lembaga) {
		$load = $this->db->query("
			SELECT * FROM tb_lembaga INNER JOIN tb_guru ON tb_lembaga.kd_lembaga = tb_guru.kd_lembaga WHERE tb_lembaga.kd_lembaga='$kd_lembaga'
		");
		return $load->result_array();
	}
	public function pesertadidik($kd_lembaga) {
		$load = $this->db->query("
			SELECT * FROM tb_lembaga INNER JOIN tb_rombel ON tb_lembaga.kd_lembaga = tb_rombel.kd_lembaga
			INNER JOIN tb_pesertadidik ON tb_rombel.kd_rombel = tb_pesertadidik.kd_rombel WHERE tb_lembaga.kd_lembaga='$kd_lembaga' ORDER BY tb_pesertadidik.nm_pd ASC
		");
		return $load->result_array();
	}
	public function laporandonatur() {
		$load = $this->db->query("
			SELECT * 
			FROM 
			tb_lembaga 
			INNER JOIN tb_donasi ON tb_lembaga.kd_lembaga = tb_donasi.kd_lembaga 
			INNER JOIN tb_donatur ON tb_donatur.id_donatur = tb_donasi.id_donatur 
		");
		return $load->result_array();
	}
	public function dataalumni($kd_lembaga) {
		$load = $this->db->query("SELECT kd_lembaga,tahun, COUNT(tahun) as jumlah FROM view_alumni WHERE kd_lembaga='$kd_lembaga' GROUP BY tahun");
		return $load->result_array();
	}
	public function datasumbangan($kd_lembaga) {
		$load = $this->db->query("SELECT * FROM view_sumbangan WHERE kd_lembaga='$kd_lembaga' ORDER BY tahun DESC");
		return $load->result_array();
	}
	public function totalsumbangan($kd_lembaga) {
		$load = $this->db->query("SELECT kd_lembaga, SUM(jml_sumbangan) AS total FROM view_sumbangan WHERE kd_lembaga='$kd_lembaga'");
		return $load->result_array();
	}
	//FILTER BERDASARKAN BULAN
	public function bulandatasumbangan($kd_lembaga, $bulan) {
		$load = $this->db->query("SELECT * FROM view_sumbangan WHERE kd_lembaga='$kd_lembaga' AND bulan='$bulan' ORDER BY tahun DESC");
		return $load->result_array();
	}
	public function bulantotalsumbangan($kd_lembaga, $bulan) {
		$load = $this->db->query("SELECT kd_lembaga, SUM(jml_sumbangan) AS total FROM view_sumbangan WHERE kd_lembaga='$kd_lembaga' AND bulan='$bulan'");
		return $load->result_array();
	}
	//BERDASARKAN TAHUN
	public function tahundatasumbangan($kd_lembaga, $tahun) {
		$load = $this->db->query("SELECT * FROM view_sumbangan WHERE kd_lembaga='$kd_lembaga' AND tahun='$tahun' ORDER BY tahun DESC");
		return $load->result_array();
	}
	public function tahuntotalsumbangan($kd_lembaga, $tahun) {
		$load = $this->db->query("SELECT kd_lembaga, SUM(jml_sumbangan) AS total FROM view_sumbangan WHERE kd_lembaga='$kd_lembaga' AND tahun='$tahun'");
		return $load->result_array();
	}
	//BERDASARKAN BULAN DAN TAHUN
	public function bulantahundatasumbangan($kd_lembaga, $bulan, $tahun) {
		$load = $this->db->query("SELECT * FROM view_sumbangan WHERE kd_lembaga='$kd_lembaga' AND bulan='$bulan' AND tahun='$tahun' ORDER BY tahun DESC");
		return $load->result_array();
	}
	public function bulantahuntotalsumbangan($kd_lembaga, $bulan, $tahun) {
		$load = $this->db->query("SELECT kd_lembaga, SUM(jml_sumbangan) AS total FROM view_sumbangan WHERE kd_lembaga='$kd_lembaga' AND bulan='$bulan' AND tahun='$tahun'");
		return $load->result_array();
	}
	public function listalumni($kd_lembaga, $tahun) {
		$load = $this->db->query("SELECT * FROM view_alumni WHERE kd_lembaga='$kd_lembaga' AND tahun='$tahun'");
		return $load->result_array();
	}
	public function datadonatur($kd_lembaga) {
		$load = $this->db->query("SELECT * FROM view_donatur WHERE kd_lembaga='$kd_lembaga'");
		return $load->result_array();
	}
	public function jumlahdonatur($kd_lembaga) {
		$load = $this->db->query("SELECT SUM(jml_donasifisik) as jmlfisik, SUM(jml_donasinonfisik) as jmlnonfisik FROM view_donatur WHERE kd_lembaga='$kd_lembaga'");
		return $load->result_array();
	}
}
 ?>