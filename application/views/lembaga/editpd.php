<?php
	foreach($datapd as $loaddata) {}
?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="<?php echo base_url('index.php/lembaga/pilihlembaga_pd'); ?>">Data Lembaga</a>
        </li>
		<li>
            <a href="<?php echo base_url('index.php/lembaga/datarombel'); ?>/<?php echo $loaddata['kd_lembaga']; ?>">Data Kelompok Belajar</a>
        </li>
		<li>
            <a href="<?php echo base_url('index.php/lembaga/datapd'); ?>/<?php echo $loaddata['kd_rombel']; ?>">Data Peserta Didik</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Tambah Data Peserta Didik di TPA <?php echo $loaddata['nm_lembaga']; ?> </h2>
			</div>
			<div class="box-content">
				<table border="0">
					<tr>
						<td>Kode Kelompok Belajar </td>
						<td>: </td>
						<td><?php echo $loaddata['kd_rombel']; ?> </td>
					</tr>
					<tr>
						<td>Nama Kelompok Belajar </td>
						<td>: </td>
						<td><?php echo $loaddata['nm_rombel']; ?> </td>
					</tr>
				</table>
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
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('lembaga/updatepd', $form_attribute);
				?>
				<div class="row">
					<div class="col-lg-6">
						<div class="box">
							<div class="box-inner">
							<div class="box-header well">
								<h2>Identitas Peserta Didik</h2>
							</div>
							<div class="box-content">
								<label class="label-control">No Induk</label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'name'		=> 'no_induk',
										'value'		=> $loaddata['no_induk'],
										'readonly'	=> ''
									);
									echo form_input($form_attribute);
								?>
								<?php
									$form_attribute = array(
										'type'		=> 'hidden',
										'class'		=> 'form-control',
										'name'		=> 'kd_rombel',
										'value'		=> $loaddata['kd_rombel']
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Nama Peserta Didik</label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'name'		=> 'nm_pd',
										'value'		=> $loaddata['nm_pd']
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tempat Lahir</label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'name'		=> 'tmpt_lahir',
										'value'		=> $loaddata['tmpt_lahir']
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tanggal Lahir</label>
								<?php
									$form_attribute = array(
										'type'		=> 'date',
										'class'		=> 'form-control',
										'name'		=> 'tgl_lahir',
										'value'		=> $loaddata['tgl_lahir']
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Jenis Kelamin</label>
								<?php
									$option		    = array(
										'L'			=> 'L',
										'P'			=> 'P'
									);
									$form_attribute = array(
										'name'		=> 'jns_kelamin',
										'class'		=> 'form-control'
									);
									echo form_dropdown($form_attribute, $option, $loaddata['jns_kelamin']);
								?>
								<label class="label-control">Alamat</label>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'name'		=> 'alamat',
										'value'		=> $loaddata['alamat']
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
									<h2>Data Ayah</h2>
								</div>
								<div class="box-content">
									
									<label class="label-control">Nama Ayah</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'nm_ayah',
											'class'		=> 'form-control',
											'value'		=> $loaddata['nm_ayah']
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Pekerjaan Ayah</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'pekerjaan_ayah',
											'class'		=> 'form-control',
											'value'		=> $loaddata['pekerjaan_ayah']
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Nama Ibu</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'nm_ibu',
											'class'		=> 'form-control',
											'value'		=> $loaddata['nm_ibu']
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Pekerjaan Ibu</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'pekerjaan_ibu',
											'class'		=> 'form-control',
											'value'		=> $loaddata['pekerjaan_ibu']
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Nomor HP</label>
									<?php
										$form_attribute = array(
											'type'		=> 'text',
											'name'		=> 'no_hp',
											'class'		=> 'form-control',
											'value'		=> $loaddata['no_hp']
										);
										echo form_input($form_attribute);
									?>
									<label class="label-control">Tanggal Masuk</label>
									<?php
										$form_attribute = array(
											'type'		=> 'date',
											'name'		=> 'tgl_masuk',
											'class'		=> 'form-control',
											'value'		=> $loaddata['tgl_masuk']
										);
										echo form_input($form_attribute);
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Update Peserta Didik</button>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>