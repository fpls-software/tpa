<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Upload Berkas</h2>
			</div>
			<div class="box-content">
				<p class="required"><i>File Berkas yang anda Upload harus Berformat PDF dengan Ukuran File Maksimal 2MB , 
				<br/>
				Jika berkas anda tidak berformat PDF anda dapat Menkonversi-nya Secara Online di <b><a href="https://smallpdf.com/" target="_blank">Small PDF</a></b></i>
				<br/><br/>
				</p>
				<p style="color: green;">
				<b>Status</b> adalah status Upload Berkas anda, Status akan berwana Merah Jika anda belum mengupload Berkas, dan Akan Berwarna Hijau jika telah mengupload Berkas
				</p> <hr/>
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<th>#</th>
						<th>Berkas Persyaratan</th>
						<th>Deskripsi</th>
						<th colspan="2">Upload Berkas</th>
						
						<th>Status</th>
					</thead>
					<tbody>
						<?php
							$no = 1;
							foreach($persyaratan as $data) {
						?>
						<tr>
							<td class="text-center"><?php echo $no++; ?></td>
							<td><?php echo $data['persyaratan']; ?></td>
							<td><?php echo $data['deskripsi']; ?></td>
							<?php
								$form_attribute = array(
									'method'	=> 'post',
									'class'		=> 'form-horizontal'
								);
								echo form_open_multipart("user/uploadberkas");
							?>
							<td> 
								<?php 
									$form_attribute	= array(
										'type'		=> 'hidden',
										'class'		=> 'form-control',
										'name'		=> 'username',
										'value'		=> $user
									);
									echo form_input($form_attribute);
								?>
								<?php 
									$form_attribute	= array(
										'type'		=> 'hidden',
										'class'		=> 'form-control',
										'name'		=> 'kd_persyaratan',
										'value'		=> $data['kd_persyaratan']
									);
									echo form_input($form_attribute);
								?>
								<?php 
									$form_attribute	= array(
										'type'		=> 'file',
										'class'		=> 'form-control',
										'name'		=> 'berkas',
										'required'	=> ''
									);
									echo form_input($form_attribute);
								?>
							</td>
							<td>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</td>

							<?php echo form_close(); ?>
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