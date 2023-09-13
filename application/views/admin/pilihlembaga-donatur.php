<div class="data-container">
	<div class="row">
	<div class="col-lg-6">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Daftar Donatur</h2>
			</div>
			<div class="box-content">
				<a href="<?php echo base_url("index.php/admin/tambahdonatur"); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah Data Donatur</button></a>
				<hr/>
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th class="text-center">ID Donatur</th>
								<th class="text-center">Nama Donatur</th>
								<th class="text-center" width="30"></th>
								<th class="text-center" width="30"></th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($donatur as $loaddata) {
						?>
							<tr>
								<td><?php echo $loaddata['id_donatur']; ?></td>
								<td><?php echo $loaddata['nm_donatur']; ?></td>
								<td>
									<a href="<?php echo base_url("index.php/admin/editdonatur/").$loaddata['id_donatur']; ?>"><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>	
								</td>
								<td>
									<a href="<?php echo base_url("index.php/admin/hapusdonatur/").$loaddata['id_donatur']; ?>"><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Hapus</button></a>		
								</td>
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
	<div class="col-lg-6">
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
								<td class="text-center">
									
									<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/datadonatur/<?php echo $loaddata['kd_lembaga']; ?>">
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
	</div>
	</div>
	</div>
</div>
