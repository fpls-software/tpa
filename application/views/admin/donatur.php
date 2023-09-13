
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
								<th class="text-center">Nama Donatur</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($donatur as $loaddata) {
						?>
							<tr>
								<td><?php echo $loaddata['nm_donatur']; ?></td>
								<td>
									
									<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/laporandonasi/<?php echo $loaddata['id_donatur']; ?>">
										<i class="glyphicon glyphicon-edit icon-white"></i>
										Lihat Donasi
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