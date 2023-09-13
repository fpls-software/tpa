<?php if($this->session->flashdata('hapus_success')) { ?>
	<script> alert("Berhasil Menghapus Data"); </script>
<?php } ?>
<?php if($this->session->flashdata('hapus_invalid')) { ?>
	<script> alert("Tidak dapat Menghapus Data Lembaga ini, Dikarenakan Lembaga ini Memiliki Guru yg Mengajar didalamnya, Silahkan Hapus Semua Data Guru dalam Lembaga ini sebelum Menghapus Data"); </script>
<?php } ?>
<?php if($this->session->flashdata('hapus_failed')) { ?>
	<script> alert("Gagal Menghapus Data"); </script>
<?php } ?>
<div class="">
	Data Master | <a class="" href="#">Data TPA</a>
	<hr/>
</div>
<div class="data-container">
	<a href="<?php echo base_url("index.php/admin/pilihuserguru"); ?>"><button type="button" class="btn btn-primary"> <span class=""></span> Tambah Data</button></a>
	<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Data TPA</h2>
            </div>
            <div class="box-content row">
                <div class="col-lg-12 col-md-12">
                   <table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th class="text-center">Kode Lembaga</th>
								<th class="text-center">Nama Lembaga</th>
								<th class="text-center">Alamat</th>
								<th class="text-center">Tahun Berdiri</th>
								<th class="text-center">Tempat Belajar</th>
								<th class="text-center">Pimpinan</th>
								<th class="text-center"></th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($datatpa as $loaddata) {
						?>
							<tr>
								<td><?php echo $loaddata['kd_lembaga']; ?></td>
								<td><?php echo $loaddata['nm_lembaga']; ?></td>
								<td>
									<?php echo $loaddata['alamat']; ?>,
									Desa <?php echo $loaddata['desa']; ?>,
									Kecamatan <?php echo $loaddata['kecamatan']; ?>
								</td>
								<td><?php echo $loaddata['thn_berdiri']; ?></td>
								<td><?php echo $loaddata['tmpt_belajar']; ?></td>
								<td><?php echo $loaddata['pimpinan']; ?></td>
								<td>
									
									<a class="btn btn-info" style="width: 100%;" href="<?php echo base_url(); ?>index.php/admin/editdatatpa/<?php echo $loaddata['kd_lembaga']; ?>">
										<i class="glyphicon glyphicon-edit icon-white"></i>
										Edit 
									</a>
								</td>
								<td>
									<a class="btn btn-danger" style="width: 100%;" href="<?php echo base_url(); ?>index.php/admin/hapusdatatpa/<?php echo $loaddata['kd_lembaga']; ?>">
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
	</div>
</div>