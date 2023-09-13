<div class="container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<div class="row">
					<div class="col-lg-6">
						<h2>Daftar TPA Penerima Bantuan</h2>
					</div>
					<div class="col-lg-6 text-right">
						<a href="<?php echo base_url("index.php/user/laporandonasi"); ?>"><button type="button" class="btn btn-primary btn-sm">Download Data Donatur</button></a>
					</div>
				</div>
			</div>
			<div class="box-content">
				<table class="table donasi table-striped table-bordered">
					<thead>
						<tr>
							<th rowspan="2">No</th>
							<th rowspan="2">Nama Donatur</th>
							<th rowspan="2">Nama Lembaga Penerima</th>
							<th rowspan="2">Tanggal Donasi</th>
							<th colspan="2">Jenis Donasi</th>
							<th colspan="2">Jumlah Donasi</th>
						</tr>
						<tr>
							<th>Fisik</th>
							<th>Non Fisik</th>
							<th>Fisik</th>
							<th>Non Fisik</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							foreach($datadonasi as $data) {
						?>
							<tr>
								<td><?php echo $no++; ?> </td>
								<td><?php echo $data['nm_donatur']; ?> </td>
								<td><?php echo $data['nm_lembaga']; ?> </td>
								<td><?php echo $data['tgl_donasi']; ?> </td>
								<td><?php echo $data['fisik']; ?> </td>
								<td><?php echo $data['non_fisik']; ?> </td>
								<td class="text-center"><?php echo $data['jml_donasifisik']; ?> </td>
								<td class="text-right"><?php echo "Rp.".number_format($data['jml_donasinonfisik'],0,'','.'); ?> </td>
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