<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2> Data Murid Mengaji</h2>
			</div>
			<div class="box-content">
				<br/><br/>
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<th class="text-center">No</th>
						<th class="text-center">No Induk</th>
						<th class="text-center" width="200">Nama Murid</th>
						<th class="text-center">TTL</th>
						<th class="text-center">L/P</th>
						<th class="text-center">Alamat</th>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							foreach($datapd as $loaddata) {
						?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td class="text-center"><?php echo $loaddata['no_induk']; ?></td>
								<td><?php echo $loaddata['nm_pd']; ?></td>
								<td><?php echo $loaddata['tmpt_lahir']; ?>, <?php echo $loaddata['tgl_lahir']; ?></td>
								<td class="text-center"><?php echo $loaddata['jns_kelamin']; ?></td>
								<td><?php echo $loaddata['alamat']; ?></td>

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