<?php 
	foreach($datakdtpa as $datatpa) {} 
	foreach($datarombel as $loaddata) {}
?>
<?php if($this->session->flashdata('hapus_success')) { ?>
	<script>alert('Berhasil Menghapus Kelompok Belajar');</script>
<?php } ?>
<?php if($this->session->flashdata('hapus_invalid')) { ?>
	<script>alert('Tidak dapat Menghapus Kelompok Belajar ini. Dikarenakan Masih Memiliki Murid. Silahkan Keluarkan/Luluskan Peserta Didik di Dalam Kelompok Belajar ini Sebelum Menghapus Data');</script>
<?php } ?>
<?php if($this->session->flashdata('hapus_failed')) { ?>
	<script>alert(<?php echo $this->session->flashdata('hapus_failed'); ?>);</script>
<?php } ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="<?php echo base_url('index.php/admin/pilihlembaga_pd'); ?>">Data Lembaga</a>
        </li>
    </ul
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Pilih Kelompok Belajar</h2>
			</div>
			<div class="box-content">
				<table border="0">
					<tr>
						<td>Kode Lembaga</td>
						<td>: </td>
						<td><?php echo $datatpa['kd_lembaga']; ?></td>
					</tr>
					<tr>
						<td>Nama Lembaga</td>
						<td>: </td>
						<td><?php echo $datatpa['nm_lembaga']; ?></td>
					</tr>
				</table><hr/>
				<a href="<?php echo base_url("index.php/admin/tambahrombel"); ?>/<?php echo $datatpa['kd_lembaga']; ?>"><button type="button" class="btn btn-primary"> Tambah Kelompok Belajar</button></a>
				<br/><br/><br/>
					<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th class="text-center">Kode Kelompok Belajar</th>
								<th class="text-center">Nama Kelompok Belajar</th>
								<th class="text-center">Nama Lembaga</th>
								<th class="text-center">Nama Guru</th>
								<th class="text-center"></th>
								<th class="text-center"></th>
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
									
									<a class="btn btn-info" style="width: 100%; border-radius: 0;" href="<?php echo base_url(); ?>index.php/admin/datapd/<?php echo $loaddata['kd_rombel']; ?>">
										<i class="glyphicon glyphicon-edit icon-white"></i>
										Pilih
									</a>
								</td>
								<td>
									<form method="post" action="<?php echo base_url('index.php/admin/hapusrombel'); ?>/<?php echo $loaddata['kd_rombel']; ?>">
									
									<button type="submit" style="width: 100%; border-radius: 0;" class="btn btn-danger"><i class="glyphicon glyphicon-trash icon-white"></i>
										Hapus
									</button>
									<input type="hidden" value="<?php echo $loaddata['kd_lembaga']; ?>" name="kd_lembaga"/>
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
	<//div>
</div>