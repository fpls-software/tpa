<?php 
	foreach($datakdlembaga as $datakd) {}
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="#">Data Lembaga</a>
        </li>
		<li>
            <a href="#">Edit Lembaga</a>
        </li>
    </ul>
</div>
<div class="box-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Tambah Data Lembaga</h2>
			</div>
			<div class="box-content">
				<?php if($this->session->flashdata('save_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('save_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('save_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('save_failed'); ?>
				</div>
				<?php } ?>
				<?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('lembaga/updatelembaga', $form_attribute);
				?>
					<div class="row">
						<div class="col-lg-6">
							<div class="box">
								<div class="box-inner">
									<div class="box-header well">
										<h2>Identitas Lembaga</h2>
									</div>
									<div class="box-content">
										<label class="label-control">Kode Lembaga</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'kd_lembaga',
												'value'		=> $datakd['kd_lembaga'],
												'readonly'	=> ''
											);
											echo form_input($form_attribute);
										?>
										<?php
											$form_attribute = array (
												'type'		=> 'hidden',
												'class'		=> 'form-control',
												'name'		=> 'username',
												'value'		=> $user
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control">Nama Lembaga</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'nm_lembaga',
												'value'		=> $datakd['nm_lembaga']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control">Pimpinan</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'pimpinan',
												'value'		=> $datakd['pimpinan']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control">Tahun Berdiri</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'thn_berdiri',
												'value'		=> $datakd['thn_berdiri']
											);
											echo form_input($form_attribute);
										?>
									</div>
								</div>
							</div>
							<div class="box">
								<div class="box-inner">
									<div class="box-header well">
										<h2>Alamat</h2>
									</div>
									<div class="box-content">
										<label class="label-control">Alamat Jalan</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'alamat',
												'value'		=> $datakd['alamat']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control">Desa</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'desa',
												'value'		=> $datakd['desa']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control">Kecamatan</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'kecamatan',
												'value'		=> $datakd['kecamatan']
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
										<h2>Data Tambahan</h2>
									</div>
									<div class="box-content">
										<label class="label-control">Tempat Belajar</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'tmpt_belajar',
												'value'		=> $datakd['tmpt_belajar']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control">Metode Pembelajaran</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'metode',
												'value'		=> $datakd['metode']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control">Kategori Wilayah</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'kat_wilayah',
												'value'		=> $datakd['kat_wilayah']
											);
											echo form_input($form_attribute);
										?>
										<label class="label-control">Tambahan Pembelajaran</label>
										<?php
											$form_attribute = array (
												'type'		=> 'text',
												'class'		=> 'form-control',
												'name'		=> 'tmbh_pemb',
												'value'		=> $datakd['tmbh_pemb']
											);
											echo form_input($form_attribute);
										?>
								
										<br/>
										<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan Data Lembaga</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>