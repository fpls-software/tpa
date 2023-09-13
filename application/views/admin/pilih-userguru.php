
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Pilih User</h2>
			</div>
			<div class="box-content">
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th class="text-center">Username</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($datauserguru as $loaddata) {
						?>
							<tr>
								<td><?php echo $loaddata['username']; ?></td>
								<td>
									
									<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/tambahdatatpa/<?php echo $loaddata['username']; ?>">
										<i class="glyphicon glyphicon-edit icon-white"></i>
										Pilih User Ini
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