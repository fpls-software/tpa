<?php foreach($username as $user) {} ?>
<div class="">
	Data Master | <a class="" href="<?php echo base_url("index.php/admin/datatpa"); ?>">Data TPA</a> | <a class="" href="#"<?php //echo base_url("index.php/admin/tambahdatatpa"); ?>">Tambah Data TPA</a>
	<hr/>
</div>
<div class="data-container">
	<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Tambah Data TPA</h2>
            </div>
            <div class="box-content">
			<?php if($this->session->flashdata('add_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('add_success'); ?>
				</div>
			<?php } ?>
			<?php if($this->session->flashdata('add_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('add_failed'); ?>
				</div>
			<?php } ?>
			<div class="">
				<p>Anda Akan Menambahkan Data Lembaga Menggungkan User : <b><?php echo $user['username']; ?></b></p>
			</div>
                <?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form_horizontal'
					);
					echo form_open("admin/tambahdata_tpa", $form_attribute);
				?>
				<div class="row">
					<div class="col-sm-6">
						
						<div class="box">
							<div class="box-inner">
							<div class="box-header well">
								<h2>Identitas Lembaga</h2>
							</div>
							<div class="box-content">
								<label class="label-control">Kode Lembaga<span class="red"> *</span></label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'kd_lembaga',
										'placeholder'	=> 'Kode Lembaga',
										'required'		=> '',
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<?php
									$form_attribute		= array (
										'type'			=> 'hidden',
										'name'			=> 'username',
										'class'			=> 'form-control', 
										'value'			=> $user['username']
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Nama Lembaga<span class="red"> *</span></label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'nm_lembaga',
										'placeholder'	=> 'Nama Lembaga',
										'required'		=> '',
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tahun Berdiri<span class="red"> *</span></label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
						 				'name'			=> 'thn_berdiri',
										'placeholder'	=> 'Tahun Berdiri',
										'required'		=> '',
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Pempinan<span class="red"> *</span></label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'pimpinan',
										'placeholder'	=> 'Pimpinan',
										'required'		=> '',
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
								<label class="label-control">Alamat Jalan<span class="red"> *</span></label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'alamat',
										'placeholder'	=> 'Alamat',
										'required'		=> '',
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Desa<span class="red"> *</span></label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'desa',
										'placeholder'	=> 'Desa',
										'required'		=> '',
										'class'			=> 'form-control'
								);
								echo form_input($form_attribute);
								?>
								<label class="label-control">Kecamatan<span class="red"> *</span></label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'kecamatan',
										'placeholder'	=> 'kecamatan',
										'required'		=> '',
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
										'placeholder'	=> 'Tempat Belajar',
										
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Metode Pembelajaran</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'metode',
										'placeholder'	=> 'Metode Pembelajaran',
										
										'class'			=> 'form-control'
								);
								echo form_input($form_attribute);
								?>
								<label class="label-control">Kategori Wilayah</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'kat_wilayah',
										'placeholder'	=> 'Kategori Wilayah',
									
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
								<label class="label-control">Tambahan Pembelajaran</label>
								<?php
									$form_attribute		= array (
										'type'			=> 'text',
										'name'			=> 'tmbh_pemb',
										'placeholder'	=> 'Tambahan Pembelajaran',
										
										'class'			=> 'form-control'
									);
									echo form_input($form_attribute);
								?>
							
							</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan Data</button>
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