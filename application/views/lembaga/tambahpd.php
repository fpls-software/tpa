
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="<?php echo base_url('index.php/lembaga/pilihlembaga_pd'); ?>">Data Lembaga</a>
        </li>
		<li>
            <a href="">Data Kelompok Belajar</a>
        </li>
		<li>
            <a href="<?php echo base_url('index.php/lembaga/datapd/').$kd_rombel; ?>">Data Peserta Didik</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2><span class="glyphicon glyphicon-plus-sign"></span> Tambah Data Murid </h2>
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
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('lembaga/simpanpd', $form_attribute);
				?>
				<div class="row">
					<div class="col-lg-6">
						<div class="box">
							<div class="box-inner">
							<div class="box-header well">
								<h2>Identitas Peserta Didik</h2>
							</div>
							<div class="box-content">
								<label class="label-control">No Induk <span class="required">(*)</span></label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'name'		=> 'no_induk',
										'required'	=> ''
									);
									echo form_input($form_attribute);
								?>
								<?php
									$form_attribute = array(
										'type'		=> 'hidden',
										'class'		=> 'form-control',
										'name'		=> 'kd_rombel',
										'value'		=> $kd_rombel
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Nama Peserta Didik <span class="required">(*)</span></label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'name'		=> 'nm_pd',
										'required'	=> ''
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tempat Lahir <span class="required">(*)</span></label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'name'		=> 'tmpt_lahir',
										'required'	=> ''
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tanggal Lahir <span class="required">(*)</span></label>
								<?php
									$form_attribute = array(
										'type'		=> 'date',
										'class'		=> 'form-control',
										'name'		=> 'tgl_lahir',
										'required'	=> ''
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Jenis Kelamin <span class="required">(*)</span></label>
								<?php
									$option		    = array(
										'L'			=> 'L',
										'P'			=> 'P'
									);
									$form_attribute = array(
										'name'		=> 'jns_kelamin',
										'class'		=> 'form-control',
										'required'	=> ''
									);
									echo form_dropdown($form_attribute, $option, 'L');
								?>
								<label class="label-control">Alamat <span class="required">(*)</span></label>
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
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="box">
							<div class="box-inner">
								<div class="box-header well">
									<h2>Data Orang Tua</h2>
								</div>
								<div class="box-content">
									
									<label class="label-control">Nama Ayah <span class="required">(*)</span></label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'nm_ayah',
											'class'		=> 'form-control',
											'required'	=> ''
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Pekerjaan Ayah</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'pekerjaan_ayah',
											'class'		=> 'form-control'
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Nama Ibu <span class="required">(*)</span></label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'nm_ibu',
											'class'		=> 'form-control',
											'required'	=> ''
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Pekerjaan Ibu</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'pekerjaan_ibu',
											'class'		=> 'form-control'
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Nomor HP</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'no_hp',
											'class'		=> 'form-control'
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Tanggal Masuk <span class="required">(*)</span></label>
									<?php
										$form_attribute = array(
											'type'		=> 'date',
											'name'		=> 'tgl_masuk',
											'class'		=> 'form-control',
											'required'	=> ''
										);
										echo form_input($form_attribute);
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan Data Murid</button>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>