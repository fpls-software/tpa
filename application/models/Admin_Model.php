<?php 
Class Admin_Model extends CI_Model {
	public function login($username, $password) {
		$condition	= "username="."'".$username."'". " AND "."password="."'".$password."'";
		$select		= array('username', 'password');
		$this->db->select($select);
		$this->db->from('tb_admin');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function buatuserguru($username, $password) {
		$data			= array(
			'username'	=> $username,
			'password'	=> $password
		);
		$this->db->insert('tb_userguru', $data);
	}
	public function usernameguru($username) {
		$load	= $this->db->query("SELECT * FROM tb_userguru WHERE username='$username'");
		return $load->result_array();
	}
	public function datauserguru() {
		$load	= $this->db->query("SELECT * FROM tb_userguru");
		return $load->result_array();
	}
	public function datatpa() {
		$load	= $this->db->query("SELECT * FROM tb_lembaga");
		return $load->result_array();
	}
	public function datakdtpa($kd_lembaga) {
		$load	= $this->db->query("SELECT * FROM tb_lembaga WHERE kd_lembaga='$kd_lembaga'");
		return $load->result_array();
	}
	public function datakdrombel($kd_rombel) {
		$load	= $this->db->query("SELECT * FROM view_rombel WHERE kd_rombel='$kd_rombel'");
		return $load->result_array();
	}
	public function datakdguru($nik) {
		$load	= $this->db->query("SELECT * FROM tb_guru WHERE nik='$nik'");
		return $load->result_array();
	}
	public function dataiddonatur($id) {
		$load	= $this->db->query("SELECT * FROM tb_donatur WHERE id='$id'");
		return $load->result_array();
	}
	public function counttpa() {
		$load	= $this->db->query("SELECT COUNT(kd_lembaga) AS jumlah FROM tb_lembaga");
		return $load->result_array();
	}
	public function countguru() {
		$load	= $this->db->query("SELECT COUNT(nik) AS jumlah FROM tb_guru");
		return $load->result_array();
	}
	public function countpd() {
		$load	= $this->db->query("SELECT COUNT(no_induk) AS jumlah FROM tb_pesertadidik");
		return $load->result_array();
	}
	public function countdonatur() {
		$load	= $this->db->query("SELECT COUNT(id_donatur) AS jumlah FROM tb_donatur");
		return $load->result_array();
	}
	public function countpdrombel($kd_rombel) {
		$condition	= "kd_rombel="."'".$kd_rombel."'";
		$select		= array('kd_rombel');
		$this->db->select($select);
		$this->db->from('tb_pesertadidik');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function tambahdatatpa($kd_lembaga, $username ,$nm_lembaga, $thn_berdiri, $pimpinan, $alamat, $desa, $kecamatan, $tmpt_belajar, $metode, $kat_wilayah, $tmbh_pemb) {
		$data				= array (
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
			'tmbh_pemb'		=> $tmbh_pemb
		);
		$this->db->insert('tb_lembaga', $data);
	}
	public function updatedatatpa($kd_lembaga, $nm_lembaga, $thn_berdiri, $pimpinan, $alamat, $desa, $kecamatan, $tmpt_belajar, $metode, $kat_wilayah, $tmbh_pemb) {
		$update = $this->db->query("
			UPDATE tb_lembaga SET 
			nm_lembaga='$nm_lembaga', 
			thn_berdiri='$thn_berdiri', 
			pimpinan='$pimpinan', 
			alamat='$alamat', 
			desa='$desa', 
			kecamatan='$kecamatan', 
			tmpt_belajar='$tmpt_belajar', 
			metode='$metode', 
			kat_wilayah='$kat_wilayah', 
			tmbh_pemb='$tmbh_pemb'
			WHERE kd_lembaga='$kd_lembaga'
		");
		return $update;
	}
	public function deletedatatpa($kd_lembaga){
		$delete = $this->db->query("DELETE FROM tb_lembaga WHERE kd_lembaga='$kd_lembaga'");
		return $delete;
	}
	public function dataguru() {
		$load	= $this->db->query("SELECT * FROM view_guru");
		return $load->result_array();
	}
	public function datagurutpa($kd_lembaga) {
		$load	= $this->db->query("SELECT * FROM view_guru WHERE kd_lembaga='$kd_lembaga'");
		return $load->result_array();
	}
	public function updateguru($kd_lembaga, $nik, $nm_guru, $tmpt_lahir, $tgllahir_guru, $jns_kelamin, $alamat, $pendidikan, $profesi_lain, $no_hp, $tmt_mengajar) {
		$save = $this->db->query("
			UPDATE tb_guru SET 
			kd_lembaga='$kd_lembaga', 
			nm_guru='$nm_guru', 
			tmpt_lahir='$tmpt_lahir', 
			tgllahir_guru='$tgllahir_guru', 
			jns_kelamin='$jns_kelamin', 
			alamat='$alamat', 
			pendidikan='$pendidikan', 
			profesi_lain='$profesi_lain', 
			no_hp='$no_hp', 
			tmt_mengajar='$tmt_mengajar' 
			WHERE nik='$nik'
		");
		return $save;
	}
	public function hapusguru($nik) {
		$hapus = $this->db->query("DELETE FROM tb_guru WHERE nik='$nik'");
		return $hapus;
	}
	public function validhapustpa($kd_lembaga) {
		$condition	= "kd_lembaga="."'".$kd_lembaga."'";
		$select		= array('kd_lembaga');
		$this->db->select($select);
		$this->db->from('tb_guru');
		$this->db->where($condition);
		$valid		= $this->db->get();
		
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
		$valid		= $this->db->get();
		
		if($valid->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function simpandataguru($kd_lembaga, $nik, $nm_guru, $tmpt_lahir, $tgllahir_guru, $jns_kelamin, $alamat, $pendidikan, $profesi_lain, $no_hp, $tmt_mengajar) {
		$data				= array (
			'nik'			=> $nik,
			'kd_lembaga'	=> $kd_lembaga,
			'nm_guru'		=> $nm_guru,
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
	public function datapd($kd_rombel) {
		$data = $this->db->query("SELECT * FROM view_pd WHERE kd_rombel='$kd_rombel'");
		return $data->result_array();
	}
	public function datakdpd($no_induk) {
		$data = $this->db->query("SELECT * FROM view_pd WHERE no_induk='$no_induk'");
		return $data->result_array();
	}
	public function datarombel($kd_lembaga) {
		$data = $this->db->query("SELECT * FROM view_rombel WHERE kd_lembaga='$kd_lembaga'");
		return $data->result_array();
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
	public function hapusrombel($kd_rombel) {
		$hapus = $this->db->query("DELETE FROM tb_rombel WHERE kd_rombel='$kd_rombel'");
		return $hapus;
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
	public function updatepd($no_induk, $kd_rombel, $nm_pd, $tmpt_lahir, $tgl_lahir, $jns_kelamin, $alamat, $nm_ayah, $pekerjaan_ayah, $nm_ibu, $pekerjaan_ibu, $no_hp, $tgl_masuk) {
		$update = $this->db->query("
			UPDATE tb_pesertadidik SET 
			nm_pd='$nm_pd', 
			tmpt_lahir='$tmpt_lahir', 
			tgl_lahir='$tgl_lahir', 
			jns_kelamin='$jns_kelamin', 
			alamat='$alamat', 
			nm_ayah='$nm_ayah', 
			pekerjaan_ayah='$pekerjaan_ayah', 
			nm_ibu='$nm_ibu', 
			pekerjaan_ibu='$pekerjaan_ibu', 
			no_hp='$no_hp', 
			tgl_masuk='$tgl_masuk' 
			WHERE no_induk='$no_induk'
		");
		return $update;
	}
	public function hapuspd($no_induk) {
		$delete	= $this->db->query("DELETE FROM tb_pesertadidik WHERE no_induk='$no_induk'");
		return $delete;
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
	public function datadonatur($kd_lembaga) {
		$load = $this->db->query("
			SELECT * FROM tb_donatur INNER JOIN tb_donasi 
			ON tb_donatur.id_donatur = tb_donasi.id_donatur
			INNER JOIN tb_lembaga 
			ON tb_lembaga.kd_lembaga = tb_donasi.kd_lembaga 
			WHERE tb_lembaga.kd_lembaga='$kd_lembaga'
		");
		return $load->result_array();
	}
	public function daftardonatur() {
		$load = $this->db->query("SELECT * FROM tb_donatur");
		return $load->result_array();
	}
	public function simpandonatur($id_donatur, $nm_donatur) {
		$data				= array(
			'id_donatur'	=> $id_donatur,
			'nm_donatur'	=> $nm_donatur
		);
		$this->db->insert('tb_donatur', $data);
	}
	public function updatedonatur($id_donatur, $nm_donatur) {
		$update = $this->db->query("UPDATE tb_donatur SET nm_donatur='$nm_donatur' WHERE id_donatur='$id_donatur'");
		return $update;
	}
	public function hapusdonatur($id_donatur) {
		$hapus = $this->db->query("DELETE FROM tb_donatur WHERE id_donatur='$id_donatur'");
		return $hapus;
	}
	public function hapusdonasi($id_donasi) {
		$hapus = $this->db->query("DELETE FROM tb_donasi WHERE id_donasi='$id_donasi'");
		return $hapus;
	}
	public function simpandonasi($kd_lembaga, $id_donatur, $tgl_donasi, $fisik, $jml_donasifisik, $non_fisik, $jml_donasinonfisik) {
		$data					= array(
			'kd_lembaga'		=> $kd_lembaga, 
			'id_donatur'		=> $id_donatur,
			'tgl_donasi'		=> $tgl_donasi,
			'fisik'				=> $fisik,
			'jml_donasifisik'	=> $jml_donasifisik,
			'non_fisik'			=> $non_fisik,
			'jml_donasinonfisik'=> $jml_donasinonfisik
		);
		$this->db->insert('tb_donasi', $data);
	}
	public function dataalumni($kd_lembaga) {
		$load = $this->db->query("SELECT * FROM tb_alumni WHERE kd_lembaga='$kd_lembaga'");
		return $load->result_array();
	}
	public function datakdalumni($no_induk) {
		$load = $this->db->query("SELECT * FROM tb_alumni WHERE no_induk='$no_induk'");
		return $load->result_array();
	}
	public function updatealumni($no_induk,$nm_pd,$tmpt_lahir,$jns_kelamin,$alamat,$nm_ayah,$pekerjaan_ayah,$nm_ibu,$pekerjaan_ibu,$no_hp,$tgl_keluar) {
		$update = $this->db->query("
			UPDATE tb_alumni SET
			nm_pd			= '$nm_pd',
			tmpt_lahir		= '$tmpt_lahir',
			jns_kelamin		= '$jns_kelamin',
			alamat			= '$alamat',
			nm_ayah			= '$nm_ayah',
			pekerjaan_ayah	= '$pekerjaan_ayah',
			nm_ibu			= '$nm_ibu',
			pekerjaan_ibu	= '$pekerjaan_ibu',
			no_hp			= '$no_hp',
			tgl_keluar		= '$tgl_keluar'
			WHERE no_induk  = '$no_induk'
		");
		return $update;
	}
	public function hapusalumni($no_induk) {
		$hapus = $this->db->query("DELETE FROM tb_alumni WHERE no_induk='$no_induk'");
		return $hapus;
	} 
	public function laporanlembaga() {
		$load = $this->db->query("
			SELECT
			tb_pesertadidik.no_induk,
			tb_lembaga.desa,
			tb_lembaga.nm_lembaga,
			tb_lembaga.pimpinan,
			tb_lembaga.alamat,
			tb_lembaga.thn_berdiri,
			tb_lembaga.kd_lembaga,
			tb_rombel.kd_rombel,
			Count(tb_pesertadidik.no_induk) AS jml_murid,
			tb_lembaga.sumberdana,
			tb_lembaga.jml_iuran,
			tb_lembaga.photo
			FROM
			tb_lembaga
			INNER JOIN tb_rombel ON tb_rombel.kd_lembaga = tb_lembaga.kd_lembaga
			INNER JOIN tb_pesertadidik ON tb_pesertadidik.kd_rombel = tb_rombel.kd_rombel
			WHERE status=' '
			GROUP BY
			tb_lembaga.kd_lembaga	
		");
		return $load->result_array();
	}
	public function laporanlembagatidakaktif() {
		$load = $this->db->query("
			SELECT * FROM tb_lembaga WHERE status='tidakaktif'
		");
		return $load->result_array();
	}
	public function data_donatur() {
		$load = $this->db->query("SELECT DISTINCT id_donatur, nm_donatur FROM tb_donatur");
		return $load->result_array();
	}
	public function laporandonatur($id_donatur) {
		$load = $this->db->query("
			SELECT * 
			FROM 
			tb_lembaga 
			INNER JOIN tb_donasi ON tb_lembaga.kd_lembaga = tb_donasi.kd_lembaga 
			INNER JOIN tb_donatur ON tb_donatur.id_donatur = tb_donasi.id_donatur 
			WHERE tb_donatur.id_donatur = '$id_donatur'
		");
		return $load->result_array();
	}
	public function laporandonasi() {
		$load = $this->db->query("
			SELECT * 
			FROM 
			tb_lembaga 
			INNER JOIN tb_donasi ON tb_lembaga.kd_lembaga = tb_donasi.kd_lembaga 
			INNER JOIN tb_donatur ON tb_donatur.id_donatur = tb_donasi.id_donatur 
		");
		return $load->result_array();
	}
	public function simpanpersyaratan($kd_persyaratan, $persyaratan, $deskripsi) {
		$data					= array(
			'kd_persyaratan'	=> $kd_persyaratan,
			'persyaratan'		=> $persyaratan,
			'deskripsi'			=> $deskripsi
		);
		$this->db->insert("tb_persyaratan", $data);
	}
	public function datapersyaratan() {
		$load = $this->db->query("SELECT * FROM tb_persyaratan");
		return $load->result_array();
	}
	public function datakdpersyaratan($kd_persyaratan) {
		$load = $this->db->query("SELECT * FROM tb_persyaratan WHERE kd_persyaratan='$kd_persyaratan'");
		return $load->result_array();
	}
	public function updatepersyaratan($kd_persyaratan,$persyaratan,$deskripsi) {
		$update = $this->db->query("
			UPDATE tb_persyaratan SET
			persyaratan='$persyaratan',
			deskripsi='$deskripsi'
			WHERE kd_persyaratan='$kd_persyaratan'
		");
		return $update;
	}
	public function hapuspersyaratan($kd_persyaratan) {
		$delete = $this->db->query("DELETE FROM tb_persyaratan WHERE kd_persyaratan='$kd_persyaratan'");
		return $delete;
	}
	public function pendaftar() {
		$load = $this->db->query("
			SELECT DISTINCT 
			tb_regguru.username, 
			tb_regguru.nama
			FROM tb_regguru
			INNER JOIN tb_registrasi ON tb_regguru.username = tb_registrasi.username
			WHERE tb_registrasi.status = 'pending' OR tb_registrasi.status = 'error'
		");
		return $load->result_array();
	}
	public function gurupendaftar() {
		$load = $this->db->query("
			SELECT DISTINCT 
			tb_registrasi.username, 
			tb_regguru.nama
			FROM
			tb_regguru 	
			INNER JOIN tb_registrasi ON tb_regguru.username = tb_registrasi.username
			INNER JOIN tb_persyaratan ON tb_registrasi.kd_persyaratan = tb_registrasi.kd_persyaratan
		");
		return $load->result_array();
	}
	public function berkaspendaftar($username) {
		$load = $this->db->query("
			SELECT * FROM tb_regguru
			INNER JOIN tb_registrasi ON tb_regguru.username = tb_registrasi.username
			INNER JOIN tb_persyaratan ON tb_persyaratan.kd_persyaratan = tb_registrasi.kd_persyaratan
			WHERE tb_regguru.username='$username'
		");
		return $load->result_array();
	}
	public function accberkas($username, $kd_persyaratan) {
		$update	= $this->db->query("UPDATE tb_registrasi SET status='approved' WHERE username='$username' AND kd_persyaratan='$kd_persyaratan'");
		return $update;
	}
	public function tolakberkas($username, $kd_persyaratan) {
		$update	= $this->db->query("UPDATE tb_registrasi SET status='error' WHERE username='$username' AND kd_persyaratan='$kd_persyaratan'");
		return $update;
	}
	public function kirimpesan($username, $subject, $pesan) {
		$data			= array(
			'username'	=> $username,
			'subject'	=> $subject,
			'pesan'		=> $pesan
		);
		$this->db->insert("tb_pesan", $data);
	}
	public function lembagaaktif() {
		$load = $this->db->query("SELECT * FROM tb_lembaga WHERE status=' '");
		return $load->result_array();
	}
	public function lembagatidakaktif() {
		$load = $this->db->query("SELECT * FROM tb_lembaga WHERE status='tidakaktif'");
		return $load->result_array();
	}
	public function aktifkanlembaga($kd_lembaga) {
		$update = $this->db->query("UPDATE tb_lembaga SET status=' ' WHERE kd_lembaga='$kd_lembaga'");
		return $update;
	}
	public function nonaktifkanlembaga($kd_lembaga) {
		$update = $this->db->query("UPDATE tb_lembaga SET status='tidakaktif' WHERE kd_lembaga='$kd_lembaga'");
		return $update;
	}
	public function dataketerangan() {
		$load = $this->db->query("SELECT * FROM tb_keterangan");
		return $load->result_array();
	}
	public function simpanketerangan($ket_lembagaaktif,$ket_lembagatidakaktif) {
		$update = $this->db->query("UPDATE tb_keterangan SET ket_lembagaaktif='$ket_lembagaaktif', ket_lembagatidakaktif='$ket_lembagatidakaktif'");
		return $update;
	}
}
?>