<?php 
	foreach($datalembaga as $loaddatalembaga) {}
?>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Tambah Data Guru</h2>
			</div>
			<div class="box-content">
				<table border="0">
					<tr>
						<td>Kode Lembaga</td>
						<td>:</td>
						<td><?php echo $loaddatalembaga['kd_lembaga']; ?></td>
					</tr>
					<tr>
						<td>Nama Lembaga</td>
						<td>:</td>
						<td><?php echo $loaddatalembaga['nm_lembaga']; ?></td>
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
					$form_attribute	= array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('admin/simpandataguru', $form_attribute);
				?>
				<div class="row">
					<div class="col-lg-6">
						<?php 
							$form_attribute		= array(
								'type'			=> 'hidden',
								'name'			=> 'kd_lembaga',
								'value'			=> $loaddatalembaga['kd_lembaga'],
								'required'		=> '',
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">NIK / No.ID <span class="red"> *</span></label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'nik',
								'placeholder'	=> 'Masukkan NIK atau Nomor Identitas',
								'required'		=> '',
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Nama Guru<span class="red"> *</span></label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'nm_guru',
								'placeholder'	=> 'Masukkan Nama Guru',
								'required'		=> '',
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Tempat Lahir<span class="red"> *</span></label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'tmpt_lahir',
								'placeholder'	=> 'Masukkan Tempat Lahir Guru',
								'required'		=> '',
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Tanggal Lahir<span class="red"> *</span></label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'date',
								'name'			=> 'tgllahir_guru',
								'placeholder'	=> 'Masukkan Tanggal Lahir Guru',
								'required'		=> '',
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">Jenis Kelamin<span class="red"> *</span></label>
						<?php 
							$option			= array(
								'L'			=> 'L',
								'P'			=> 'P'
							);	
							$form_attribute	= array(
								'name'		=> 'jns_kelamin',
								'class'		=> 'form-control'
							);
							
							echo form_dropdown($form_attribute, $option, 'L');
						?>
						<label class="label-control">Alamat<span class="red"> *</span></label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'alamat',
								'placeholder'	=> 'Masukkan Alamat',
								'required'		=> '',
								'class'			=> 'form-control',
								
							);
							echo form_input($form_attribute);
						?>
						<br/>
					</div>
					<div class="col-lg-6">
						<label class="label-control">Pendidikan<span class="red"> *</span></label>
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
								'required'		=> '',
								'class'		=> 'form-control'
							);
							
							echo form_dropdown($form_attribute, $option, 'S1');
						?>
						<label class="label-control">Profesi Lain</label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'profesi_lain',
								'placeholder'	=> 'Masukkan Profesi Lain Guru',
								'class'			=> 'form-control'
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">No HP<span class="red"> *</span></label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'text',
								'name'			=> 'no_hp',
								'placeholder'	=> 'Masukkan Nomor HP Guru',
								'required'		=> '',
								'class'			=> 'form-control',
								
							);
							echo form_input($form_attribute);
						?>
						<label class="label-control">TMT Mengajar<span class="red"> *</span></label>
						<?php 
							$form_attribute		= array(
								'type'			=> 'date',
								'name'			=> 'tmt_mengajar',
								'placeholder'	=> 'Masukkan Tanggal Mulai Tugas Guru',
								'required'		=> '',
								'class'			=> 'form-control',
								
							);
							
							echo form_input($form_attribute);
						?>
						<br/>
						<button type="submit" class="btn btn-primary">Simpan Data Guru</button>
					</div>
				</div>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>