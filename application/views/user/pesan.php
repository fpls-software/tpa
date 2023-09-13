<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Pesan</h2>
			</div>
			<div class="box-content">
				<table id="myTable" class="table table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<tr>
							<th width="10">#</th>
							<th>Pengirim</th>
							<th>Subject</th>
							<th>Pesan</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$no = 1;
						foreach($daftarpesan as $pesan) { 
					?>
						<tr>
							<td> <?php echo $no++; ?></td>
							<td> @Admin </td>
							<td> <?php echo $pesan['subject']; ?> </td>
							<td> <?php echo $pesan['pesan']; ?> </td>
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