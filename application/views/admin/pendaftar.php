<?php foreach($berkaspendaftar as $data) {} ?>
<?php if($this->session->flashdata('accept')) { ?>
	<script>alert('Berkas Pendaftar telah di Setujui');</script>
<?php } ?>
<?php if($this->session->flashdata('tolak')) { ?>
	<script>alert('Berkas Pendaftar telah di Tolak');</script>
<?php } ?>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Periksa Berkas ( <?php echo $data['nama']; ?> ) </h2>
			</div>
			<div class="box-content">
				<b>Note : </b><font color="green">Warna Hijau = Approved (Berkas Diterima) </font> , <font color="blue"> Warna Biru = Pending (Belum Diperiksa)</font>, <font color="red"> Warna Merah = Error (Berkas Ditolak)</font>
				<hr/>
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<tr>
							<th width="20">#</th>
							<th colspan="2">Berkas Persyaratan</th>
							<th colspan="2">Hasil Penilaian</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$no = 1;
						foreach($berkaspendaftar as $data) { 
						if($data['status'] == 'approved') {
							$color = "green";
						}
						else if($data['status'] == 'pending') {
							$color = "blue";
						}
						else{
							$color = "red";
						}
					?>
						<tr>
							<td><?php echo $no++; ?> </td>
							<td><p style="color: <?php echo $color; ?>;"><?php echo $data['persyaratan']; ?> </p></td>
							<td width="50"><a href="<?php echo base_url(); ?>asset/image/berkas_persyaratan/<?php echo $data['berkas'] ?>" target="_blank"><button type="button" class="btn btn-primary btn-sm">Periksa</button></a></td>
							<td width="50">
								<form method="post" action="<?php echo base_url("index.php/admin/accberkas"); ?>">
									<input type="hidden" name="username" value="<?php echo $data['username']; ?>"/>
									<input type="hidden" name="kd_persyaratan" value="<?php echo $data['kd_persyaratan']; ?>"/>
									<button type="submit" class="btn btn-success btn-sm">TERIMA</button>
								</form>
							</td>
							<td width="50">
								<form method="post" action="<?php echo base_url("index.php/admin/tolakberkas"); ?>">
									<input type="hidden" name="username" value="<?php echo $data['username']; ?>"/>
									<input type="hidden" name="kd_persyaratan" value="<?php echo $data['kd_persyaratan']; ?>"/>
									<button type="submit" class="btn btn-danger btn-sm">TOLAK</button>
								</form>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>