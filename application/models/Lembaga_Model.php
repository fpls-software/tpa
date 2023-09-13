<?php
Class Lembaga_Model extends CI_Model {
	public function login($username, $password) {
		$condition	= "username="."'".$username."'". " AND "."password="."'".$password."'";
		$select		= array('username', 'password');
		$this->db->select($select);
		$this->db->from('tb_userguru');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function datalembaga($username) {
		$load = $this->db->query("SELECT * FROM tb_lembaga INNER JOIN tb_userguru ON tb_userguru.username = tb_lembaga.username WHERE tb_userguru.username='$username'");
		return $load->result_array();
	}
	public function datakdlembaga($kd_lembaga) {
		$load = $this->db->query("SELECT * FROM tb_lembaga WHERE kd_lembaga='$kd_lembaga'");
		return $load->result_array();
	}
		public function datakdusername($username) {
		$load = $this->db->query("SELECT * FROM tb_lembaga WHERE username='$username'");
		return $load->result_array();
	}
	public function datakdguru($nik) {
		$load = $this->db->query("SELECT * FROM tb_guru WHERE nik='$nik'");
		return $load->result_array();
	}
	public function datakdpd($no_induk) {
		$data = $this->db->query("SELECT * FROM view_pd WHERE no_induk='$no_induk'");
		return $data->result_array();
	}
	public function countguru($username) {
		$load = $this->db->query("SELECT *, (SELECT COUNT(nik)) AS jml_guru FROM tb_lembaga INNER JOIN tb_guru ON tb_lembaga.kd_lembaga = tb_guru.kd_lembaga WHERE tb_lembaga.username = '$username'");
		return $load->result_array();
	}
	public function countmurid($username) {
		$load = $this->db->query("SELECT *, (SELECT COUNT(no_induk)) AS jml_murid FROM tb_lembaga INNER JOIN tb_rombel ON tb_lembaga.kd_lembaga = tb_rombel.kd_lembaga INNER JOIN tb_pesertadidik ON tb_rombel.kd_rombel = tb_pesertadidik.kd_rombel WHERE tb_lembaga.username = '$username'");
		return $load->result_array();
	}
	public function countalumni($username) {
		$load = $this->db->query("SELECT *, (SELECT COUNT(no_induk)) AS jml_alumni FROM tb_lembaga INNER JOIN tb_alumni ON tb_lembaga.kd_lembaga = tb_alumni.kd_lembaga WHERE tb_lembaga.username = '$username'");
		return $load->result_array();
	}
	public function countdonatur($username) {
		$load = $this->db->query("SELECT *, (SELECT COUNT(tb_donatur.id_donatur)) AS jml_donatur FROM tb_lembaga INNER JOIN tb_donasi ON tb_lembaga.kd_lembaga = tb_donasi.kd_lembaga INNER JOIN tb_donatur ON tb_donatur.id_donatur = tb_donasi.id_donatur WHERE tb_lembaga.username = '$username'");
		return $load->result_array();
	}
	public function datajmlmurid($username) {
		$load	= $this->db->query("
			SELECT 
			tb_lembaga.kd_lembaga,
			tb_rombel.kd_rombel,
			tb_rombel.nm_rombel,
			(SELECT COUNT(tb_pesertadidik.jns_kelamin='L')) AS L,
			(SELECT COUNT(tb_pesertadidik.jns_kelamin='P')) AS P
			FROM tb_lembaga 
			INNER JOIN tb_rombel ON tb_lembaga.kd_lembaga = tb_rombel.kd_lembaga
			INNER JOIN tb_pesertadidik ON tb_rombel.kd_rombel = tb_pesertadidik.kd_rombel
			WHERE tb_lembaga.username='$username'
			GROUP BY tb_rombel.kd_rombel
		");
		return $load->result_array();
	}
	public function validlembaga($username) {
		$condition	= "username="."'".$username."'";
		$select		= array('username');
		$this->db->select($select);
		$this->db->from('tb_lembaga');
		$this->db->where($condition);
		$valid 		= $this->db->get();
		
		if($valid->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function validhapusguru($nik) {
		$condition	= "nik="."'".$nik."'";
		$select		= array('nik');
		$this->db->select($select);
		$this->db->from('tb_rombel');
		$this->db->where($condition);
		$valid 		= $this->db->get();
		
		if($valid->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function simpanlembaga($kd_lembaga, $username, $nm_lembaga ,$alamat, $desa, $kecamatan, $thn_berdiri, $tmpt_belajar, $pimpinan, $metode, $kat_wilayah, $tmbh_pemb, $photo) {
		$data				= array(
			'kd_lembaga'	=> $kd_lembaga,	
			'username'		=> $username,
			'nm_lembaga'	=> $nm_lembaga,
			'alamat'		=> $alamat,
			'desa'			=> $desa,
			'kecamatan'		=> $kecamatan,
			'thn_berdiri'	=> $thn_berdiri,
			'tmpt_belajar'	=> $tmpt_belajar,
			'pimpinan'		=> $pimpinan,
			'metode'		=> $metode,
			'kat_wilayah'	=> $kat_wilayah,
			'tmbh_pemb'		=> $tmbh_pemb,
			'photo'			=> $photo
		);
		$this->db->insert('tb_lembaga', $data);
	}
	public function simpanphoto($kd_lembaga, $photo) {
		$update = $this->db->query("UPDATE tb_lembaga SET photo='$photo' WHERE kd_lembaga='$kd_lembaga'");
		return $update;
	}
	public function updatelembaga($kd_lembaga, $nm_lembaga, $thn_berdiri, $pimpinan, $alamat, $desa, $kecamatan, $tmpt_belajar, $metode, $kat_wilayah, $tmbh_pemb) {
		$update = $this->db->query("UPDATE tb_lembaga SET nm_lembaga='$nm_lembaga', thn_berdiri='$thn_berdiri', pimpinan='$pimpinan', alamat='$alamat', desa='$desa', kecamatan='$kecamatan', tmpt_belajar='$tmpt_belajar', metode='$metode', kat_wilayah='$kat_wilayah', tmbh_pemb='$tmbh_pemb' WHERE kd_lembaga='$kd_lembaga'");
		return $update;
	}
	public function dataguru($username) {
		$data = $this->db->query("SELECT * FROM tb_lembaga INNER JOIN tb_guru ON tb_lembaga.kd_lembaga = tb_guru.kd_lembaga WHERE tb_lembaga.username = '$username'");
		return $data->result_array();
	}
	public function simpandataguru($kd_lembaga, $nik, $nm_guru, $tmpt_lahir, $tgllahir_guru, $jns_kelamin, $alamat, $pendidikan, $profesi_lain, $no_hp, $tmt_mengajar) {
		$data				= array (
			'nik'			=> $nik,
			'kd_lembaga'	=> $kd_lembaga,
			'nm_guru'		=> $nm_guru,
			'tmpt_lahir'	=> $tmpt_lahir,
			'tmpt_lahir'	=> $tmpt_lahir,
			'tgllahir_guru'	=> $tgllahir_guru,
			'jns_kelamin'	=> $jns_kelamin,
			'alamat'		=> $alamat,
			'pendidikan'	=> $pendidikan,
			'profesi_lain'	=> $profesi_lain,
			'no_hp'			=> $no_hp,
			'tmt_mengajar'	=> $tmt_mengajar
		);
		$this->db->insert('tb_guru', $data);
	}
	public function hapusguru($nik) {
		$hapus = $this->db->query("DELETE FROM tb_guru WHERE nik='$nik'");
		return $hapus;
	}
	public function updateguru($kd_lembaga, $nik, $nm_guru, $tmpt_lahir, $tgllahir_guru, $jns_kelamin, $alamat, $pendidikan, $profesi_lain, $no_hp, $tmt_mengajar) {
		$save = $this->db->query("UPDATE tb_guru SET kd_lembaga='$kd_lembaga', nm_guru='$nm_guru', tmpt_lahir='$tmpt_lahir', tgllahir_guru='$tgllahir_guru', jns_kelamin='$jns_kelamin', alamat='$alamat', pendidikan='$pendidikan', profesi_lain='$profesi_lain', no_hp='$no_hp', tmt_mengajar='$tmt_mengajar' WHERE nik='$nik'");
		return $save;
	}
	public function datarombel($username) {
		$load = $this->db->query("
		SELECT tb_lembaga.kd_lembaga,tb_lembaga.nm_lembaga,tb_rombel.kd_rombel,tb_rombel.nm_rombel,tb_guru.nm_guru
		FROM tb_lembaga 
		INNER JOIN tb_rombel ON tb_lembaga.kd_lembaga = tb_rombel.kd_lembaga 
		INNER JOIN tb_guru ON tb_guru.nik = tb_rombel.nik 
		WHERE tb_lembaga.username = '$username'
		");
		return $load->result_array();
	}
	public function simpanrombel($kd_lembaga,$kd_rombel,$nm_rombel,$nik) {
		$data				= array(
			'kd_lembaga'	=> $kd_lembaga,
			'kd_rombel'		=> $kd_rombel,
			'nm_rombel'		=> $nm_rombel,
			'nik'			=> $nik
		);
		$this->db->insert('tb_rombel', $data);
	}
	public function validhapusrombel($kd_rombel) {
		$condition	= "kd_rombel="."'".$kd_rombel."'";
		$select		= array('kd_rombel');
		$this->db->select($select);
		$this->db->from('tb_pesertadidik');
		$this->db->where($condition);
		$valid 		= $this->db->get();
		
		if($valid->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function hapusrombel($kd_rombel) {
		$delete = $this->db->query("DELETE FROM tb_rombel WHERE kd_rombel='$kd_rombel'");
		return $delete;
	}
	public function datapd($kd_rombel) {
		$load = $this->db->query("SELECT * FROM tb_pesertadidik WHERE kd_rombel='$kd_rombel'");
		return $load->result_array();
	}
	public function datapesertadidik($username) {
		$load = $this->db->query("
			SELECT * FROM
			tb_lembaga 
			INNER JOIN tb_rombel ON tb_lembaga.kd_lembaga = tb_rombel.kd_lembaga
			INNER JOIN tb_pesertadidik ON tb_rombel.kd_rombel = tb_pesertadidik.kd_rombel
			WHERE tb_lembaga.username = '$username'
		");
		return $load->result_array();
	}
	public function simpanpd($no_induk, $kd_rombel, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_masuk) {
		$data = array(
			'no_induk'			=> $no_induk,
			'kd_rombel'			=> $kd_rombel,
			'nm_pd'				=> $nm_pd,
			'tmpt_lahir'		=> $tmpt_lahir,
			'tgl_lahir'			=> $tgl_lahir,
			'jns_kelamin'		=> $jns_kelamin,
			'alamat'			=> $alamat,
			'nm_ayah'			=> $nm_ayah,
			'pekerjaan_ayah'	=> $pekerjaan_ayah,
			'nm_ibu'			=> $nm_ibu,
			'pekerjaan_ibu'		=> $pekerjaan_ibu,
			'no_hp'				=> $no_hp,
			'tgl_masuk'			=> $tgl_masuk
		);
		$this->db->insert('tb_pesertadidik', $data);
	}
	public function luluspd($no_induk, $kd_lembaga, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_keluar) {
		$data					= array (
			'no_induk'			=> $no_induk,
			'kd_lembaga'		=> $kd_lembaga,
			'nm_pd'				=> $nm_pd,
			'tmpt_lahir'		=> $tmpt_lahir,
			'tgl_lahir'			=> $tgl_lahir,
			'jns_kelamin'		=> $jns_kelamin,
			'alamat'			=> $alamat,
			'nm_ayah'			=> $nm_ayah,
			'pekerjaan_ayah'	=> $pekerjaan_ayah,
			'nm_ibu'			=> $nm_ibu,
			'pekerjaan_ibu'		=> $pekerjaan_ibu,
			'no_hp'				=> $no_hp,
			'tgl_keluar'		=> $tgl_keluar
		);
		$this->db->insert('tb_alumni', $data);
	}
	public function hapuspd($no_induk){
		$hapus	= $this->db->query("DELETE FROM tb_pesertadidik WHERE no_induk='$no_induk'");
		return $hapus;
	}
	public function updatepd($no_induk, $kd_rombel, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_masuk) {
		$update = $this->db->query("UPDATE tb_pesertadidik SET nm_pd='$nm_pd', tmpt_lahir='$tmpt_lahir', tgl_lahir='$tgl_lahir', jns_kelamin='$jns_kelamin', alamat='$alamat', nm_ayah='$nm_ayah', pekerjaan_ayah='$pekerjaan_ayah', nm_ibu='$nm_ibu', pekerjaan_ibu='$pekerjaan_ibu', no_hp='$no_hp', tgl_masuk='$tgl_masuk' WHERE no_induk='$no_induk'");
		return $update;
	}
	public function dataalumni($username) {
		$load = $this->db->query("SELECT * FROM tb_lembaga INNER JOIN tb_alumni ON tb_lembaga.kd_lembaga = tb_alumni.kd_lembaga WHERE tb_lembaga.username = '$username'");
		return $load->result_array();
	}
	public function alumni($username) {
		$load = $this->db->query("SELECT * FROM tb_alumni INNER JOIN tb_lembaga ON tb_lembaga.kd_lembaga = tb_alumni.kd_lembaga WHERE tb_lembaga.username='$username'");
		return $load->result_array();
	}
	public function datadonatur($kd_lembaga) {
		$load = $this->db->query("
			SELECT *
			FROM tb_donasi
			inner JOIN tb_donatur ON tb_donatur.id_donatur = tb_donasi.id_donatur
			WHERE tb_donasi.kd_lembaga = '$kd_lembaga'
		");
		return $load->result_array();
	}
	public function datasumbangan($username) {
		$load = $this->db->query("
			SELECT * FROM
			view_sumbangan WHERE username = '$username'
		");
		return $load->result_array();
	}
	public function simpansumbangan($kd_lembaga, $no_induk, $jml_sumbangan, $tanggal) {
		$data				= array(
			'kd_lembaga'	=> $kd_lembaga,	
			'no_induk'		=> $no_induk,
			'jml_sumbangan'	=> $jml_sumbangan,
			'tanggal'		=> $tanggal
		);
		$this->db->insert("tb_sumbanganmurid", $data);
	}
	public function simpansumbanganalumni($kd_lembaga, $no_induk, $jml_sumbangan, $tanggal) {
		$data				= array(
			'kd_lembaga'	=> $kd_lembaga,	
			'no_induk'		=> $no_induk,
			'jml_sumbangan'	=> $jml_sumbangan,
			'tanggal'		=> $tanggal,
			'sumber'		=> 'alumni'
		);
		$this->db->insert("tb_sumbanganmurid", $data);
	}
	
	public function semualaporansumbangan($username) {
		$load	= $this->db->query("SELECT * FROM view_sumbangan WHERE username='$username'");
		return $load->result_array();
	}
	public function bulanlaporansumbangan($username, $bulan) {
		$load	= $this->db->query("SELECT * FROM view_sumbangan WHERE username='$username' AND bulan='$bulan'");
		return $load->result_array();
	}
	public function bulantotalsumbangan($username, $bulan) {
		$load = $this->db->query("SELECT SUM(jml_sumbangan) AS total FROM view_sumbangan WHERE username='$username' AND bulan='$bulan'");
		return $load->result_array();
	}
	public function tahunlaporansumbangan($username, $tahun) {
		$load	= $this->db->query("SELECT * FROM view_sumbangan WHERE username='$username' AND tahun='$tahun'");
		return $load->result_array();
	}
	public function tahuntotalsumbangan($username, $tahun) {
		$load = $this->db->query("SELECT SUM(jml_sumbangan) AS total FROM view_sumbangan WHERE username='$username' AND tahun='$tahun'");
		return $load->result_array();
	}
	public function bulantahunlaporansumbangan($username, $bulan, $tahun) {
		$load	= $this->db->query("SELECT * FROM view_sumbangan WHERE username='$username' AND bulan='$bulan' AND tahun='$tahun'");
		return $load->result_array();
	}
	public function bulantahuntotalsumbangan($username, $bulan, $tahun) {
		$load = $this->db->query("SELECT SUM(jml_sumbangan) AS total FROM view_sumbangan WHERE username='$username' AND (bulan='$bulan' AND tahun='$tahun')");
		return $load->result_array();
	}
	
}

 ?>