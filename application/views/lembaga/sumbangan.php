<?php 
	foreach($datalembaga as $lembaga) {} 
?>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2 class="box-title">Tambah Sumbangan Murid</h2>
			</div>
			<div class="box-content">
				<?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('lembaga/simpansumbangan/',$form_attribute);
				?>
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
				<table class="table table-striped table-bordered">
					<thead>
						<th>Murid Penyumbang</th>
						<th>Jumlah Sumbangan</th>
						<th>Tanggal</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						<tr>
							<td>
								<?php
									$form_attribute = array(
										'type'		=> 'hidden',
										'name'		=> 'kd_lembaga',
										'class'		=> 'form-control',
										'style'		=> 'text-align: center;',
										'value'		=> $lembaga['kd_lembaga']
									);
									echo form_input($form_attribute);
								?>
								<select name="no_induk" class="form-control">
									<option selected disabled>Pilih Murid</option>
									<?php foreach($datapd as $pd) { ?>
										<option value="<?php echo $pd['no_induk']; ?>"><?php echo '('.$pd['no_induk'].') - '.$pd['nm_pd']; ?></option>
									<?php } ?>
								</select>
							</td>
							<td>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'name'		=> 'jml_sumbangan',
										'class'		=> 'form-control',
										'style'		=> 'text-align: center;'
									);
									echo form_input($form_attribute);
								?>
							</td>
							<td>
								<?php
									$form_attribute = array(
										'type'		=> 'date',
										'name'		=> 'tanggal',
										'class'		=> 'form-control',
										'style'		=> 'text-align: center;'
									);
									echo form_input($form_attribute);
								?>
							</td>
							<td width="30">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</td>
						</tr>
						
					</tbody>
				</table>
				
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2 class="box-title">Tambah Sumbangan ALumni</h2>
			</div>
			<div class="box-content">
				<?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('lembaga/simpansumbanganalumni/',$form_attribute);
				?>
				<?php if($this->session->flashdata('simpan_success1')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('simpan_success1'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('simpan_failed1')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('simpan_failed1'); ?>
				</div>
				<?php } ?>
				<table class="table table-striped table-bordered">
					<thead>
						<th>Alumni Penyumbang</th>
						<th>Jumlah Sumbangan</th>
						<th>Tanggal</th>
						<th>Aksi</th>
					</thead>
					<tbody>
						<tr>
							<td>
								<?php
									$form_attribute = array(
										'type'		=> 'hidden',
										'name'		=> 'kd_lembaga',
										'class'		=> 'form-control',
										'style'		=> 'text-align: center;',
										'value'		=> $lembaga['kd_lembaga']
									);
									echo form_input($form_attribute);
								?>
								<select name="no_induk" class="form-control">
									<option selected disabled>Pilih Alumni</option>
									<?php foreach($dataalumni as $alumni) { ?>
										<option value="<?php echo $alumni['no_induk']; ?>"><?php echo '('.$alumni['no_induk'].') - '.$alumni['nm_pd']; ?></option>
									<?php } ?>
								</select>
							</td>
							<td>
								<?php
									$form_attribute = array(
										'type'		=> 'text',
										'name'		=> 'jml_sumbangan',
										'class'		=> 'form-control',
										'style'		=> 'text-align: center;'
									);
									echo form_input($form_attribute);
								?>
							</td>
							<td>
								<?php
									$form_attribute = array(
										'type'		=> 'date',
										'name'		=> 'tanggal',
										'class'		=> 'form-control',
										'style'		=> 'text-align: center;'
									);
									echo form_input($form_attribute);
								?>
							</td>
							<td width="30">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</td>
						</tr>
						
					</tbody>
				</table>
				
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	
	
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2 class="box-title">Data Sumbangan Murid/Alumni</h2>
			</div>
			<div class="box-content">
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<th>No</th>
						<th>No Induk</th>
						<th>Nama Murid</th>
						<th>Jumlah Sumbangan</th>
						<th>Tanggal Sumbangan</th>
						<th>Sumber (Murid/Alumni)</th>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							foreach($datasumbangan as $sumbangan) {
						?>
							<tr> 
								<td class="text-center"><?php echo $no++; ?></td>
								<td><?php echo $sumbangan['no_induk']; ?></td>
								<td><?php echo $sumbangan['nm_pd']; ?></td>
								<td class="text-right"><?php echo "Rp.".number_format($sumbangan['jml_sumbangan'],0,"","."); ?></td>
								<td><?php echo $sumbangan['tanggal'].'/'.$sumbangan['bulan'].'/'.$sumbangan['tahun']; ?></td>
								<td><?php echo $sumbangan['sumber']; ?></td>
							</tr>
						<?php 
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>