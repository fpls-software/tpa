<?php foreach($dataiddonatur as $loaddata) {} ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="">Data Donatur</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2><span class="glyphicon glyphicon-plus-sign"></span> Tambah Donatur</h2>
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
					echo form_open('admin/simpandonatur', $form_attribute);
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
					<label class="label-control">Nama Donatur</label>
					<?php
						$form_attribute = array(
							'type'		=> 'text',
							'class'		=> 'form-control',
							'name'		=> 'nm_donatur',
							'value'		=> $loaddata['nm_donatur']
						);
						echo form_input($form_attribute);
					?>
					<label class="label-control">Tanggal Donasi</label>
					<?php
						$form_attribute = array(
							'type'		=> 'date',
							'class'		=> 'form-control',
							'name'		=> 'tgl_donasi',
							'value'		=> $loaddata['tgl_donasi']
						);
						echo form_input($form_attribute);
					?>
					<label class="label-control">Jenis Donasi</label>
					<select id="select" onchange="jenis()" class="form-control">
						<option selected value="Fisik">Fisik</option>
						<option value="NonFisik">Non Fisik</option>
					</select>
					<label class="label-control">Donasi</label>
					<?php
						$form_attribute = array(
							'type'		=> 'text',
							'class'		=> 'form-control',
							'name'		=> 'fisik',
							'id'		=> 'jnsdonasi'
						);
						echo form_input($form_attribute);
					?>
					<label class="label-control">Jumlah Donasi</label>
					<?php
						$form_attribute = array(
							'type'		=> 'text',
							'class'		=> 'form-control',
							'name'		=> 'jml_donasifisik',
							'id'		=> 'jmldonasi'
						);
						echo form_input($form_attribute);
					?>
					<br/>
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Simpan Data Donatur</button>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	function jenis() {
		var event 		= document.getElementById('select').value;
		if(event == 'Fisik') {
			document.getElementById('jnsdonasi').placeholder = 'Fisik';
			document.getElementById('jnsdonasi').name = 'fisik';
			document.getElementById('jmldonasi').placeholder = 'Jumlah Donasi Fisik';
			document.getElementById('jmldonasi').name = 'jml_donasifisik';
		}
		else {
			document.getElementById('jnsdonasi').placeholder = 'Non Fisik';
			document.getElementById('jnsdonasi').name = 'non_fisik';
			document.getElementById('jmldonasi').placeholder = 'Jumlah Donasi Non Fisik';
			document.getElementById('jmldonasi').name = 'jml_donasinonfisik';
		}
		
	}
</script>