<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Hasil Pemeriksaan Berkas</h2>
			</div>
			<div class="box-content">
				<p>Jika semua status pemeriksaan sudah berstatus <font color="green"><b>"Approved"</b></font>, Maka admin akan Memberikan User-Lembaga 
				kepada anda, yang dapat diceknya di <a href="<?php echo base_url("index.php/user/pesan"); ?>">Pesan</a>, dan anda dapat Login dengan menggunakan User-Lembaga anda di <a href="<?php echo base_url("index.php/lembaga/login"); ?>" target="_blank">Login Lembaga</a>
				</p>
				<hr/>
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<tr>
							<th width="20">#</th>
							<th>Berkas Persyaratan</th>
							<th>status</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$no = 1;
						foreach($berkaspendaftar as $data) {
						if($data['status'] == "approved") {
							$status = "btn-success";
						}
						else if($data['status'] == "pending") {
							$status = "btn-info";
						}
						else {
							$status = "btn-danger";
						}
					?>
						<tr>
							<td> <?php echo $no++; ?> </td>
							<td> <?php echo $data['persyaratan']; ?></td>
							<td> <button style="width: 100%;" type="button" class="btn <?php echo $status; ?> btn-sm"><?php echo $data['status']; ?></button></td>
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