
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Pilih Lembaga</h2>
			</div>
			<div class="box-content">
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable">
						<thead>
							<tr>
								<th class="text-center" width="100">Kode Lembaga</th>
								<th class="text-center" width="200">Nama Lembaga</th>
								<th class="text-center" width="100">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($datalembaga as $loaddata) {
						?>
							<tr>
								<td width="100"><?php echo $loaddata['kd_lembaga']; ?></td>
								<td><?php echo $loaddata['nm_lembaga']; ?></td>
								<td>
									
									<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/tambahdataguru/<?php echo $loaddata['kd_lembaga']; ?>">
										<i class="glyphicon glyphicon-edit icon-white"></i>
										Pilih Lembaga Ini
									</a>
									
								</td>
							</tr>
						<?php 
							} 
						?> 
						</tbody>
					</table>
			</div>
		</div>
	<//div>
</div>