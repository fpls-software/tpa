<?php if($this->session->flashdata('success')) { ?>
	<script> alert("Anda Telah Berhasil Membuat User, Silahkan Klik Tombol MASUK yang tersedia untuk Login Ke-Akun anda"); </script>
<?php } ?>
<?php if($this->session->flashdata('failed')) { ?>
	<script> alert("Gagal Membuat User, Silahkan Lakukan Registrasi Ulang"); </script>
<?php } ?>
<div class="container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Registrasi Guru</h2>
			</div>
			<div class="box-content">
				<?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open("user/simpandataregistrasi", $form_attribute);
				?>
				<div class="row">
					<div class="col-lg-4">
						<p>
							<h4>Tata Cara Registrasi Guru</h4>
							<ol class="list">
								<li>Buat Akun dengan mengisi FORM Registrasi disamping</li>
								<li>Login Menggunakan Username dan Password dengan Menekan Tombol <b>"MASUK"</b> dibawah </li>
								<li>Setelah Login anda hanya perlu Mengupload Berkas yang diminta dengan Format <b>"PDF"</b> </li>
								<li>Setelah itu Admin akan memeriksa Berkas yang anda Upload, Jika Berkas anda diterima maka akan Muncul keterangan <b>"APPROVED"</b>
								<li>Jika semua berkas yang anda Upload telah berstatus <b>APPROVED</b> maka anda bisa mendownload SK Guru anda</li> 
							</ol>
						</p>
						<a href="<?php echo base_url("index.php/user/login"); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-sign-in"></span> MASUK</button></a>
					</div>
					<div class="col-lg-4">
						<label class="label-control">NIK <span class="required">*</span></label>
						<?php 
							$form_attribute	= array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'nik',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Nama <span class="required">*</span></label>
						<?php 
							$form_attribute	= array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'nama',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Jenis Kelamin <span class="required">*</span></label>
						<select class="form-control" name="jk">
							<option>L</option>
							<option>P</option>
						</select>
						<label class="label-control">Tempat Lahir <span class="required">*</span></label>
						<?php 
							$form_attribute	= array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'tmpt_lahir',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Tanggal Lahir<span class="required">*</span></label>
						<?php 
							$form_attribute	= array(
								'type'		=> 'date',
								'class'		=> 'form-control',
								'name'		=> 'tgl_lahir',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
					</div>
					<div class="col-lg-4">
						<label class="label-control">Alamat <span class="required">*</span></label>
						<?php 
							$form_attribute	= array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'alamat',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Pendidikn <span class="required">*</span></label>
						<select class="form-control" name="pendidikan">
							<option>SLTP / Sederajat</option>
							<option>SLTA / Sederajat</option>
							<option>D1</option>
							<option>D2</option>
							<option>D3</option>
							<option>D4</option>
							<option>S1</option>
							<option>S2</option>
							<option>S3</option>
						</select>
						<label class="label-control">No. HP <span class="required">*</span></label>
						<?php 
							$form_attribute	= array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'no_hp',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Username <span class="required">*</span></label>
						<?php 
							$form_attribute	= array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'username',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Password <span class="required">*</span></label>
						<?php 
							$form_attribute	= array(
								'type'		=> 'password',
								'class'		=> 'form-control',
								'name'		=> 'password',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<br/>
						<button type="submit" class="btn btn-primary"> Buat Akun</button>
					</div>
				</div>
			
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>