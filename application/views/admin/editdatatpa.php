<?php
	foreach($datatpa as $loaddata) {
		
	}
 ?>
<div class="">
	Data Master | <a class="" href="<?php echo base_url("index.php/admin/datatpa"); ?>">Data TPA</a> | <a class="" href="<?php echo base_url("index.php/admin/editdatatpa"); ?>/<?php echo $loaddata['kd_lembaga'] ?>">Edit Data TPA</a>
	<hr/>
</div>
<div class="data-container">
	<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Edit Data TPA</h2>
            </div>
            <div class="box-content">
			<?php if($this->session->flashdata('edit_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('edit_success'); ?>
				</div>
			<?php } ?>
			<?php if($this->session->flashdata('edit_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('edit_failed'); ?>
				</div>
			<?php } ?>
                <?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form_horizontal'
					);
					echo form_open("admin/updatedatatpa", $form_attribute);
				?>
				<div class="row">
					<div class="col-sm-6">
						
						<div class="box">
							<div class="box-inner">
							<div class="box-header well">
								<h2>Identitas Lembaga</h2>
							</div>
							<div class="box-content">
								<label class="label-control">Kode Lembaga</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'kd_lembaga',
										'value'			=> $loaddata['kd_lembaga'],
										'class'			=> 'form-control',
										'readonly'		=> ''
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Nama Lembaga</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'nm_lembaga',
										'value'			=> $loaddata['nm_lembaga'],
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tahun Berdiri</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
						 				'name'			=> 'thn_berdiri',
										'value'			=> $loaddata['thn_berdiri'],
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Pempinan</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'pimpinan',
										'value'			=> $loaddata['pimpinan'],
										'class'			=> 'form-control'
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
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'alamat',
										'value'			=> $loaddata['alamat'],
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Desa</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'desa',
										'value'			=> $loaddata['desa'],
										'class'			=> 'form-control'
								);
								echo form_input($form_attribute);
								?>
								<label class="label-control">Kecamatan</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'kecamatan',
										'value'			=> $loaddata['kecamatan'],
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
							</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="box">
							<div class="box-inner">
							<div class="box-header well">
								<h2>Data Tambahan</h2>
							</div>
							<div class="box-content">
								<label class="label-control">Tempat Belajar</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'tmpt_belajar',
										'value'			=> $loaddata['tmpt_belajar'],
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Metode Pembelajaran</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'metode',
										'value'			=> $loaddata['metode'],
										'class'			=> 'form-control'
								);
								echo form_input($form_attribute);
								?>
								<label class="label-control">Kategori Wilayah</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'kat_wilayah',
										'value'			=> $loaddata['kat_wilayah'],
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tambahan Pembelajaran</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'tmbh_pemb',
										'value'			=> $loaddata['tmbh_pemb'],
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
							
							</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary"> Update Data</button>
					</div>
				</div>				
				<?php 
					echo form_close();
				?>
            </div>
        </div>
    </div>
	</div>
</div>