<?php if($this->session->flashdata('hapus_berhasil')) { ?>
	<script> alert("Berhasil Menghapus Data"); </script>
<?php } ?>
<?php if($this->session->flashdata('hapus_gagal')) { ?>
	<script> alert("Tidak Dapat menghapus Data"); </script>
<?php } ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="">Data Alumni</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2> Data Alumni TPA  </h2>
			</div>
			<div class="box-content">
				<a href="<?php echo base_url("index.php/admin/tambahalumni/".$kd_lembaga);?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Data Alumni</button></a>
				<hr/>
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<th class="text-center" width="10">No</th>
						<th class="text-center" width="300">Nama</th>
						<th class="text-center">L/P</th>
						<th class="text-center">TTL</th>
						<th class="text-center">No HP</th>
						<th class="text-center">Tanggal Lulus</th>
						<th></th>
						<th></th>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							foreach($dataalumni as $loaddata) {
						?>
							<tr>
								<td class="text-center"><?php echo $no++; ?></td>
								<td><?php echo $loaddata['nm_pd']; ?></td>
								<td class="text-center"><?php echo $loaddata['jns_kelamin']; ?></td>
								<td><?php echo $loaddata['tmpt_lahir'].', '.$loaddata['tgl_lahir']; ?></td>
								<td class="text-center"><?php echo $loaddata['no_hp']; ?></td>
								<td class="text-center"><?php echo $loaddata['tgl_keluar']; ?></td>
								<td><a href="<?php echo base_url("index.php/admin/editalumni/".$loaddata['no_induk']); ?>"><button class="btn btn-success btn-flat"><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
								<td>
									<form method="post" action="<?php echo base_url('index.php/admin/hapusalumni/'.$loaddata['no_induk']); ?>">
										<input type="hidden" name="kd_lembaga" value="<?php echo $kd_lembaga; ?>">
										<button class="btn btn-danger btn-flat"><span class="glyphicon glyphicon-remove"> Hapus</button>
									</form>	
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