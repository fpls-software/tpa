<?php foreach($datakdlembaga as $datakd) {} ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="#">Data Kelompok Belajar</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Tambah Rombel</h2>
			</div>
			<div class="box-content">
			<?php if($this->session->flashdata('simpan_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('simpan_failed'); ?>
				</div>
			<?php } ?>
				
				<div>
				<?php
					$form_attribute	= array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('lembaga/simpanrombel', $form_attribute);
				?>
				<div class="row">
				<div class="col-lg-6">
					<label class="label-control"> Kode Kelompok Belajar</label>
					<div class="input-group input-group-md">
                        <span class="input-group-addon"><?php echo $datakd['kd_lembaga'] ?> -</span>
						<?php
							$form_attribute	= array(
								'type'		=> 'text',	
								'class'		=> 'form-control',
								'name'		=> 'kd_rombel'
							);
							echo form_input($form_attribute);
						?>
					</div>
					<div class="clearfix"></div>
					<?php
						$form_attribute	= array(
							'type'		=> 'hidden',	
							'class'		=> 'form-control',
							'name'		=> 'kd_lembaga',
							'readonly'	=> '',
							'value'		=> $datakd['kd_lembaga']
						);
						echo form_input($form_attribute);
					?><br/>
					<label class="label-control"> Nama Kelompok Belajar</label>
					<?php
						$form_attribute	= array(
							'type'		=> 'text',	
							'class'		=> 'form-control',
							'name'		=> 'nm_rombel'
						);
						echo form_input($form_attribute);
					?>
					</div>
					<div class="col-lg-6">
					<label class="label-control"> Pilih Guru</label>
					<select name='nik' class="form-control">
						<?php foreach($datagurutpa as $guru) { ?>
							<option value="<?php echo $guru['nik']; ?>"> <?php echo $guru['nm_guru']; ?></option>
						<?php } ?>
					</select><br/><br/>
					<button type="submit" class="btn btn-primary"> Simpan Kelompok Belajar</button>
				</div>
				</div>
				<?php 
					echo form_close();
				?>
				</div><br/><br/>
			</div>
		</div>
	</div>
</div>