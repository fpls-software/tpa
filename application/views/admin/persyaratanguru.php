<?php if($this->session->flashdata('hapus_success')) { ?>
	<script> alert("Berhasil Menghapus Data"); </script>
<?php } ?>
<?php if($this->session->flashdata('hapus_failed')) { ?>
	<script> alert("Gagal Menghapus Data"); </script>
<?php } ?>
<div class="data-container">
	<div class="rows">
	<div class="col-lg-3">
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
					echo form_open("admin/simpanpersyaratan");
				?>
				<label class="label-control">Kode Persyaratan <span class="required"> * </span></label>
				<?php
					$form_attribute = array(
						'type'		=> 'text',
						'name'		=> 'kd_persyaratan',
						'class'		=> 'form-control',
						'required'	=>	''
					);
					echo form_input($form_attribute);
				?>
				<label class="label-control">Persyaratan <span class="required"> * </span></label>
				<?php
					$form_attribute = array(
						'type'		=> 'text',
						'name'		=> 'persyaratan',
						'class'		=> 'form-control',
						'required'	=>	''
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
						'rows'		=> 5
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
	<div class="col-lg-9">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Persyaratan Guru</h2>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered">
					<thead>
						<th>No</th>
						<th>Persyaratan</th>
						<th>Deskripsi</th>
						<th colspan="2"></th>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							foreach($persyaratan as $data) {
						?>
							<tr>
								<td> <?php echo $no++; ?> </td>
								<td> <?php echo $data['persyaratan']; ?> </td>
								<td> <?php echo $data['deskripsi']; ?></td>
								<td><a href="<?php echo base_url("index.php/admin/editpersyaratan/").$data['kd_persyaratan']; ?>"><button type="button" class="btn btn-success btn-sm">Edit</button></a></td>
								<td><a href="<?php echo base_url("index.php/admin/hapuspersyaratan/").$data['kd_persyaratan'];?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a></td>
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
	</div>
</div>