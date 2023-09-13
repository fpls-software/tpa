<?php if($this->session->flashdata('hapus_success')) { ?>
	<script> alert("Berhasil Menghapus Data"); </script>
<?php } ?>
<?php if($this->session->flashdata('hapus_invalid')) { ?>
	<script> alert("Tidak Dapat Menghapus Kelompok Belajar ini. Dikarenakan Kelompok Belajar ini Memiliki Perserta Didik, Silahkan Keluarkan/Luluskan Peserta Didik dalam Kelompok Belajar ini terlebih dahulu Sebelum Menghapus Data"); </script>
<?php } ?>
<?php if($this->session->flashdata('hapus_failed')) { ?>
	<script> alert("Gagal Menghapus Data"); </script>
<?php } ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="#">Data Kelompok Belajar</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Data Kelompok Belajar</h2>
			</div>
			<div class="box-content">
				<a href="<?php echo base_url('index.php/lembaga/tambahrombel'); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Kelompok Belajar</button></a>
				<hr/>
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th class="text-center">Kode Kelompok Belajar</th>
								<th class="text-center">Nama Kelompok Belajar</th>
								<th class="text-center">Nama Lembaga</th>
								<th class="text-center">Nama Guru</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($datarombel as $loaddata) {
						?>
							<tr>
								<td><?php echo $loaddata['kd_rombel']; ?></td>
								<td><?php echo $loaddata['nm_rombel']; ?></td>
								<td><?php echo $loaddata['nm_lembaga']; ?></td>
								<td><?php echo $loaddata['nm_guru']; ?></td>
								<td>
									
									<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/lembaga/datapd/<?php echo $loaddata['kd_rombel']; ?>">
										<i class="glyphicon glyphicon-edit icon-white"></i>
										Pilih Kelompok Belajar Ini
									</a>
									<a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/lembaga/hapusrombel/<?php echo $loaddata['kd_rombel']; ?>">
										<i class="glyphicon glyphicon-trash icon-white"></i>
										Hapus
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