<?php foreach($dataketerangan as $ket) {} ?>
<div class="container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<div class="row">
					<div class="col-lg-6">
						<h2>Daftar Lembaga TPA</h2>
					</div>
					<div class="col-lg-6 text-right">
						<a href="<?php echo base_url("index.php/admin/laporanlembaga/"); ?>" target="_blank"><button type="button" class="btn btn-flat btn-primary btn-sm"><span class="glyphicon glyphicon-download"></span> Download</button></a>
					</div>
				</div>
			</div>
			<div class="box-content">
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<th class="text-center">No</th>
						<th class="text-center">Desa / Kelurahan</th>
						<th class="text-center">Nama Lembaga Pendidikan Al-Qur'an</th>
						<th class="text-center">Nama Pempinan</th>
						<th class="text-center">Alamat</th>
						<th class="text-center">Tahun Berdiri</th>
						<th class="text-center">Jumlah Murid</th>
					</thead>
					<tfoot>
						<th colspan="2">Keterangan</th>
						<th colspan="5"><?php echo $ket['ket_lembagaaktif'];?></th>
					</tfoot>
					<tbody>
						<tr>
						<?php for($i=1;$i<=7;$i++) { ?>
							<td class="text-center">
								<?php echo $i; ?>
							</td>
						<?php } ?>
						</tr>
						<tr>
							<td colspan="9"> </td>
						</tr>
						<?php 
							$no = 1;
							foreach($datalembaga as $data) {
						?>
							<tr>
								<td class="text-center"><?php echo $no++; ?></td>
								<td><?php echo $data['desa']; ?></td>
								<td><?php echo $data['nm_lembaga']; ?></td>
								<td><?php echo $data['pimpinan']; ?></td>
								<td><?php echo $data['alamat']; ?></td>
								<td class="text-center"><?php echo $data['thn_berdiri']; ?></td>
								<td class="text-center"><?php echo $data['jml_murid']; ?></td>
							</tr>
						<?php 
							} 
						?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>