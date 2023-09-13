<?php 
	foreach($datakdrombel as $datakd) {}
?>
<?php if($this->session->flashdata('lulus_success')) { ?>
	<script>alert('Berhasil Meluluskan Perserta Didik');</script>
<?php } ?>

<?php if($this->session->flashdata('lulus_failed')) { ?>
	<script>alert('Gagal Meluluskan Perserta Didik');;</script>
<?php } ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="<?php echo base_url('index.php/admin/pilihlembaga_pd'); ?>">Data Lembaga</a>
        </li>
		<li>
            <a href="<?php echo base_url('index.php/admin/datarombel'); ?>/<?php echo $datakd['kd_lembaga']; ?>">Data Kelompok Belajar</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<a href="<?php echo base_url("index.php/admin/tambahpd"); ?>/<?php echo $datakd['kd_rombel']; ?>"><button type="button" class="btn btn-primary"> <span class="glyphicon glyphicon-plus-sign"></span> Tambah Peserta Didik</button></a>
	<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Data Peserta Didik <?php echo $datakd['nm_lembaga']; ?></h2>
            </div><br/>
			<table border="0">
				<tr>
					<td>Nama Lembaga </td>
					<td>: </td>
					<td><?php echo $datakd['nm_lembaga']; ?> </td>
				</tr>
				<tr>
					<td>Nama Kelompok Belajar </td>
					<td>: </td>
					<td><?php echo $datakd['nm_rombel']; ?> </td>
				</tr>
			</table><hr/><br/>
            <div class="box-content row">
                <div class="col-lg-12 col-md-12">
                   <table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th class="text-center">No Induk</th>
								<th class="text-center">Nama</th>
								<th class="text-center">TTL</th>
								<th class="text-center">L/P</th>
								<th class="text-center">Alamat</th>
								<th class="text-center" ></th>
								<th class="text-center" ></th>
								<th class="text-center" ></th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($datapd as $loaddata) {
						?>
							<tr>
								<td><?php echo $loaddata['no_induk']; ?></td>
								<td><?php echo $loaddata['nm_pd']; ?></td>
								
								<td><?php echo $loaddata['tmpt_lahir'].','.$loaddata['tgl_lahir']; ?></td>
								<td><?php echo $loaddata['jns_kelamin']; ?></td>
								<td><?php echo $loaddata['alamat']; ?></td>
								<td width="10">
									
									<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/admin/editpd/<?php echo $loaddata['no_induk']; ?>">
										<i class="glyphicon glyphicon-edit icon-white"></i>
										Edit 
									</a>
								</td>
								<td width="10">
									<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
										<i class="glyphicon glyphicon-trash icon-white"></i>
										Keluar
									</button>
								</td>
								<td width="10">
									<a class="btn btn-success" href="<?php echo base_url(); ?>index.php/admin/luluskanpd/<?php echo $loaddata['no_induk']; ?>">
										<i class="glyphicon glyphicon-log-out icon-white"></i>
										Luluskan
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
	</div>
</div>