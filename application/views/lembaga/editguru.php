<?php 
	foreach($dataguru as $loaddataguru) {}
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="#">Data Guru</a>
        </li>
		 <li>
            <a href="#">Edit Data Guru</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Edit Data Guru</h2>
			</div>
			<div class="box-content">
				<hr/>
				<?php if($this->session->flashdata('simpan_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('simpan_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('simpan_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('simpan_failed'); ?>
				</div>
				<?php } ?>
				<?php 
					$form_attribute	= array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('lembaga/updateguru', $form_attribute);
				?>
				<div class="row">
					<div class="col-lg-6">
						<?php 
							$form_attribute		= array(
								'type'			=> 'hidden',
								'name'			=> 'kd_lembaga',
								'value'			=> $loaddataguru['kd_lembaga'],
								'class'			=> 'form-control',
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">NIK / No.ID</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'nik',
								'placeholder'	=> 'Masukkan NIK atau Nomor Identitas',
								'value'			=> $loaddataguru['nik'],
								'class'			=> 'form-control',
								'readonly'		=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Nama Guru</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'nm_guru',
								'placeholder'	=> 'Masukkan Nama Guru',
								'value'			=> $loaddataguru['nm_guru'],
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Tempat Lahir</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'tmpt_lahir',
								'placeholder'	=> 'Masukkan Tempat Lahir Guru',
								'value'			=> $loaddataguru['tmpt_lahir'],
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Tanggal Lahir</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'date',
								'name'			=> 'tgllahir_guru',
								'placeholder'	=> 'Masukkan Tanggal Lahir Guru',
								'value'			=> $loaddataguru['tgllahir_guru'],
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Jenis Kelamin</label>
						<?php 
							$option			= array(
								'L'			=> 'L',
								'P'			=> 'P'
							);	
							$form_attribute	= array(
								'name'		=> 'jns_kelamin',
								'class'		=> 'form-control'
							);
							
							echo form_dropdown($form_attribute, $option, $loaddataguru['jns_kelamin']);
						?>
						<label class="label-control">Alamat</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'alamat',
								'placeholder'	=> 'Masukkan Alamat',
								'value'			=> $loaddataguru['alamat'],
								'class'			=> 'form-control',
								
							);
							echo form_input($form_attribute);
						?>
						<br/>
					</div>
					<div class="col-lg-6">
						<label class="label-control">Pendidikan</label>
						<?php 
							$option			= array(
								'SLTP'			=> 'SLTP/Sederajat',
								'SLTA'			=> 'SLTA/Sederajat',
								'D1'			=> 'D1',
								'D2'			=> 'D2',
								'D3'			=> 'D3',
								'D4'			=> 'D4',
								'S1'			=> 'S1',
								'S2'			=> 'S2',
								'S3'			=> 'S3'
							);	
							$form_attribute	= array(
								'name'		=> 'pendidikan',
								'class'		=> 'form-control'
							);
							
							echo form_dropdown($form_attribute, $option, $loaddataguru['pendidikan']);
						?>
						<label class="label-control">Profesi Lain</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'profesi_lain',
								'placeholder'	=> 'Masukkan Profesi Lain Guru',
								'value'			=> $loaddataguru['profesi_lain'],
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">No HP</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'no_hp',
								'placeholder'	=> 'Masukkan Nomor HP Guru',
								'value'			=> $loaddataguru['no_hp'],
								'class'			=> 'form-control',
								
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">TMT Mengajar</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'date',
								'name'			=> 'tmt_mengajar',
								'placeholder'	=> 'Masukkan Tanggal Mulai Tugas Guru',
								'value'			=> $loaddataguru['tmt_mengajar'],
								'class'			=> 'form-control',
								
							);
							
							echo form_input($form_attribute);
						?>
						<br/>
						<button type="submit" class="btn btn-primary">Update Data Guru</button>
					</div>
				</div>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>