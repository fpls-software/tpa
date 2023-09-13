
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Pilih Lembaga</h2>
			</div>
			<div class="box-content">
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th class="text-center">Kode Lembaga</th>
								<th class="text-center">Nama Lembaga</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($datatpa as $loaddata) {
						?>
							<tr>
								<td><?php echo $loaddata['kd_lembaga']; ?></td>
								<td><?php echo $loaddata['nm_lembaga']; ?></td>
								<td>
									
									<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/dataalumni/<?php echo $loaddata['kd_lembaga']; ?>">
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