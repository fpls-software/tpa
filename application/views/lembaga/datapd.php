<?php foreach($datapd as $loaddata) {} ?>
<?php if($this->session->flashdata('lulus_success')) { ?>
	<script>alert('Berhasil Meluluskan Perserta Didik');</script>
<?php } ?>

<?php if($this->session->flashdata('lulus_failed')) { ?>
	<script>alert('Gagal Meluluskan Perserta Didik');;</script>
<?php } ?>
<?php if($this->session->flashdata('keluar_success')) { ?>
	<script>alert('Berhasil Mengeluarkan Perserta Didik');</script>
<?php } ?>

<?php if($this->session->flashdata('keluar_failed')) { ?>
	<script>alert('Gagal Mengeluarkan Perserta Didik');;</script>
<?php } ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="#">Data Kelompok Belajar</a>
        </li>
		<li>
            <a href="#">Data Murid</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2> Data Murid Mengaji</h2>
			</div>
			<div class="box-content">
				<a href="<?php echo base_url('index.php/lembaga/tambahpd'); ?>/<?php echo $kd_rombel; ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambahkan Data Murid</button></a>
				<br/><br/>
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<th class="text-center">No</th>
						<th class="text-center">No Induk</th>
						<th class="text-center" width="200">Nama Murid</th>
						<th class="text-center">TTL</th>
						<th class="text-center">L/P</th>
						<th class="text-center">Alamat</th>
						<th class="text-center"></th>
						<th class="text-center"></th>
						<th class="text-center"></th>
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
								<td>
									<a href="<?php echo base_url('index.php/lembaga/editpd'); ?>/<?php echo $loaddata['no_induk']; ?>" ><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>
								</td>
								<td>
									<form action="<?php echo base_url('index.php/lembaga/keluarpd'); ?>/<?php echo $loaddata['no_induk'] ?>" method="post">
										<input type="hidden" name="kd_rombel" value="<?php echo $loaddata['kd_rombel']; ?>"/>
										<button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Keluar</button>
									</form>
								</td>
								<td>
									<a href="<?php echo base_url('index.php/lembaga/luluskanpd'); ?>/<?php echo $loaddata['no_induk'] ?>" ><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-log-out"></span> Luluskan</button></a>
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