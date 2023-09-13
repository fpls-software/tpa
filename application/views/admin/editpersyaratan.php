<?php 
	foreach($kdpersyaratan as $data) {}
?>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Tambah Persyaratan Guru</h2>
			</div>
			<div class="box-content">
				<?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open("admin/updatepersyaratan");
				?>
				<label class="label-control">Kode Persyaratan <span class="required"> * </span></label>
				<?php
					$form_attribute = array(
						'type'		=> 'text',
						'name'		=> 'kd_persyaratan',
						'class'		=> 'form-control',
						'required'	=> '',
						'value'		=> $data['kd_persyaratan'],
						'readonly'	=> ''
					);
					echo form_input($form_attribute);
				?>
				<label class="label-control">Persyaratan <span class="required"> * </span></label>
				<?php
					$form_attribute = array(
						'type'		=> 'text',
						'name'		=> 'persyaratan',
						'class'		=> 'form-control',
						'required'	=> '',
						'value'		=> $data['persyaratan']
					);
					echo form_input($form_attribute);
				?>
				<label class="label-control">Deskripsi <span class="required"> * </span></label>
				<?php
					$form_attribute = array(
						'type'		=> 'text',
						'name'		=> 'deskripsi',
						'class'		=> 'form-control',
						'required'	=>	'',
						'rows'		=> 5,
						'value'		=> $data['deskripsi']
					);
					echo form_textarea($form_attribute);
				?> <br/>
				<button type="submit" class="btn btn-primary btn-sm">Simpan Data</button>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>