<?php foreach($datakdlembaga as $datakd) {} ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="#">Data Guru</a>
        </li>
		<li>
            <a href="#">Tambah Guru</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2><span class="glyphicon glyphicon-plus-sign"></span> Tambah Data Guru</h2>
			</div>
			<div class="box-content">
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
					$form_attribute = array (
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('lembaga/simpanguru', $form_attribute);
				?>
				<div class="row">
					<div class="col-lg-6">
						<?php 
							$form_attribute = array(
								'type'		=> 'hidden',
								'class'		=> 'form-control',
								'name'		=> 'kd_lembaga',
								'value'		=> $datakd['kd_lembaga']
								
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control"> No.ID / NIK <span class="required">(*)</span></label>
						<?php 
							$form_attribute = array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'nik',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control"> Nama Guru <span class="required">(*)</span></label>
						<?php 
							$form_attribute = array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'nm_guru',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control"> Tempat Lahir <span class="required">(*)</span></label>
						<?php 
							$form_attribute = array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'tmpt_lahir',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control"> Tanggal Lahir <span class="required">(*)</span></label>
						<?php 
							$form_attribute = array(
								'type'		=> 'date',
								'class'		=> 'form-control',
								'name'		=> 'tgllahir_guru',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control"> Jenis Kelamin <span class="required">(*)</span></label>
						<?php 
							$option = array (
								'L'	=> 'L',
								'P'	=> 'P'
							);
							$form_attribute = array(
								'class'		=> 'form-control',
								'name'		=> 'jns_kelamin',
								'required'	=> ''
							);
							echo form_dropdown($form_attribute, $option, 'L');
						?>
						<label class="label-control"> Alamat <span class="required">(*)</span></label>
						<?php 
							$form_attribute = array(
								'type'		=> 'text',
								'class'		=> 'form-control',
								'name'		=> 'alamat',
								'required'	=> ''
							);
							echo form_input($form_attribute);
						?>	
					</div>
					<div class="col-lg-6">
						<label class="label-control">Pendidikan <span class="required">(*)</span></label>
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
								'class'		=> 'form-control',
								'required'	=> ''
							);
							
							echo form_dropdown($form_attribute, $option, 'S1');
						?>
						<label class="label-control">Profesi Lain</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'profesi_lain',
								'placeholder'	=> 'Masukkan Profesi Lain Guru',
								'class'			=> 'form-control',
								
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">No HP</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'no_hp',
								'placeholder'	=> 'Masukkan Nomor HP Guru',
								'class'			=> 'form-control',
								
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">TMT Mengajar <span class="required">(*)</span></label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'date',
								'name'			=> 'tmt_mengajar',
								'placeholder'	=> 'Masukkan Tanggal Mulai Tugas Guru',
								'class'			=> 'form-control',
								'required'	=> ''
							);
							
							echo form_input($form_attribute);
						?>
						<br/>
						<button type="submit" class="btn btn-primary">Simpan Data Guru</button>
						<br/><br/>
						Tanda <span class="required">(*)</span> Harus Diisi
					</div>
				</div>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>