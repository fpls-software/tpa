<?php 
	foreach($datakdtpa as $loaddata) {}
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="">Data Alumni</a>
        </li>
		<li>
            <a href="">Tambah Alumni</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Tambah Data Peserta Didik di TPA</h2>
			</div>
			<div class="box-content">
				<?php if($this->session->flashdata('lulus_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('lulus_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('lulus_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('lulus_failed'); ?>
				</div>
				<?php } ?>
				<?php
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('admin/simpanalumni', $form_attribute);
				?>
				<div class="row">
					<div class="col-lg-6">
						<div class="box">
							<div class="box-inner">
							<div class="box-header well">
								<h2>Identitas Peserta Didik</h2>
							</div>
							<div class="box-content">
								<label class="label-control">No Induk <span class="red">*</span></label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'required'	=> '',
										'name'		=> 'no_induk'
									);
									echo form_input($form_attribute);
								?>
								<?php
									$form_attribute = array(
										'type'		=> 'hidden',
										'class'		=> 'form-control',
										'name'		=> 'kd_lembaga',
										'value'		=> $loaddata['kd_lembaga']
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Nama Peserta Didik <span class="red">*</span></label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'required'	=> '',
										'name'		=> 'nm_pd'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tempat Lahir <span class="red">*</span></label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'required'	=> '',
										'name'		=> 'tmpt_lahir'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tanggal Lahir <span class="red">*</span></label>
								<?php
									$form_attribute = array(
										'type'		=> 'date',
										'class'		=> 'form-control',
										'required'	=> '',
										'name'		=> 'tgl_lahir'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Jenis Kelamin <span class="red">*</span></label>
								<?php
									$option		    = array(
										'L'			=> 'L',
										'P'			=> 'P'
									);
									$form_attribute = array(
										'name'		=> 'jns_kelamin',
										'required'	=> '',
										'class'		=> 'form-control'
									);
									echo form_dropdown($form_attribute, $option, 'L');
								?>
								<label class="label-control">Alamat <span class="red">*</span></label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'required'	=> '',
										'name'		=> 'alamat'
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
									
									<label class="label-control">Nama Ayah</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'nm_ayah',
											'class'		=> 'form-control'
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
									<label class="label-control">Nama Ibu</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'nm_ibu',
											'class'		=> 'form-control'
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
									<label class="label-control">Tanggal Keluar <span class="red">*</span></label>
									<?php
										$form_attribute = array(
											'type'		=> 'date',
											'name'		=> 'tgl_keluar',
											'required'	=> '',
											'class'		=> 'form-control'
										);
										echo form_input($form_attribute);
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan Data Alumni</button>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>