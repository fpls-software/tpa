<?php if($this->session->flashdata('hapus_success')) { ?>
	<script> alert("Berhasil Menghapus Data"); </script>
<?php } ?>
<?php if($this->session->flashdata('hapus_invalid')) { ?>
	<script> alert("Tidak Dapat Menghapus Data Guru ini. Dikarenakan Guru ini Memiliki Kelompok Belajar, Silahkan Hapus Kelompok Belajar dari Guru Ini Terlebih dahulu Sebelum Menghapus Data"); </script>
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
            <a href="#">Data Guru</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<a href="<?php echo base_url("index.php/lembaga/tambahguru"); ?>"><button type="button" class="btn btn-primary"> <span class=""></span> Tambah Data</button></a>
	<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-info-sign"></i> Data GURU</h2>
            </div>
            <div class="box-content row">
                <div class="col-lg-12 col-md-12">
                   <table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
						<thead>
							<tr>
								<th class="text-center">NIK/No.ID</th>
								<th class="text-center">Nama Guru</th>
								<th class="text-center">TPA</th>
								<th class="text-center">TTL</th>
								<th class="text-center">L/P</th>
								<th class="text-center">Alamat</th>
								<th class="text-center">Pendidikan</th>
								<th class="text-center"></th>
								<th class="text-center"></th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach($dataguru as $loaddata) {
						?>
							<tr>
								<td><?php echo $loaddata['nik']; ?></td>
								<td><?php echo $loaddata['nm_guru']; ?></td>
								<td><?php echo $loaddata['nm_lembaga']; ?></td>
								<td><?php echo $loaddata['tmpt_lahir'].', '.$loaddata['tgllahir_guru']; ?></td>
								<td><?php echo $loaddata['jns_kelamin']; ?></td>
								<td><?php echo $loaddata['alamat']; ?></td>
								<td><?php echo $loaddata['pendidikan']; ?></td>
								<td>
									
									<a class="btn btn-info" style="width: 100%;" href="<?php echo base_url(); ?>index.php/lembaga/editguru/<?php echo $loaddata['nik']; ?>">
										<i class="glyphicon glyphicon-edit icon-white"></i>
										Edit 
									</a>
								</td>
								<td>
									<a class="btn btn-danger" style="width: 100%;" href="<?php echo base_url(); ?>index.php/lembaga/hapusguru/<?php echo $loaddata['nik']; ?>">
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