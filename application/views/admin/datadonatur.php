<?php if($this->session->flashdata('hapus_success')) { ?>
	<script> alert("Berhasil Menghapus Data"); </script>
<?php } ?>
<?php if($this->session->flashdata('hapus_failed')) { ?>
	<script> alert("Gagal Menghapus Data"); </script>
<?php } ?>
<?php foreach($datakdtpa as $load) {} ?>

<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="">Data Donatur</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2><span class="glyphicon glyphicon-usd"></span> Data Donatur</h2>
			</div>
			<div class="box-content">
				<table border="0">
					<tr>
						<td><b>Nama Lembaga</b></td>
						<td>:</td>
						<td><b><?php echo $load['nm_lembaga']; ?></b></td>
					</tr>
				<table>
				<hr/>
				<a href="<?php echo base_url('index.php/admin/tambahdonasi'); ?>/<?php echo $load['kd_lembaga']; ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Donatur </button></a>

				<hr/>
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<th class="text-center" class="align-middle">No</th>
						<th class="text-center">Nama Donatur</th>
						<th class="text-center">Donasi Fisik</th>
						<th class="text-center" width="50">Jumlah</th>
						<th class="text-center">Donasi Non-Fisik</th>
						<th class="text-center" width="50">Jumlah</th>
						<th class="text-center">Tanggal Donasi</th>
						<th class="text-center" width="100">Aksi</th>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							foreach($datadonatur as $loaddata) {
						?>
							<tr>
								<td class="text-center"><?php echo $no++ ?> </td>
								<td class="align-middle"><?php echo $loaddata['nm_donatur']; ?> </td>
								<td><?php echo $loaddata['fisik']; ?> </td>
								<td class="text-center"><?php echo $loaddata['jml_donasifisik']; ?> </td>
								<td><?php echo $loaddata['non_fisik']; ?> </td>
								<td class="text-center"><?php echo $loaddata['jml_donasinonfisik']; ?> </td>
								<td class="text-center"><?php echo $loaddata['tgl_donasi']; ?> </td>
								<td>
									
									<form action="<?php echo base_url("index.php/admin/hapusdonasi/").$loaddata['id_donasi']; ?>" method="post">
										<input type="hidden" name="kd_lembaga" value="<?php echo $loaddata['kd_lembaga']; ?>"/> 
										<button type="submit" style="width: 100%; border-radius: 0;" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
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