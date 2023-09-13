<div class="lembaga-container">
	<div class="container">
	<div class="rows">
		<div class="col-lg-8">
			<div class="post-category">
				<h2 class="post-category-title">Selamat Datang di Sistem Informasi TPA Kec.Gilireng</h2>
			</div>
			<hr/>
			<div class="post">
				<div class="post-content">
					<p>Selamat Datang di Sistem Informasi TPA Kec.Gilireng, Sistem Informasi ini di buat dengan tujuan
					untuk mempermudah Masyarakat untuk mendapatkan Informasi Seputar Lembaga TPA yang berada di Kecamatan Gilireng
					</p>
				</div>
			</div>
			<br/>
			<div class="post-category">
				<h2 class="post-category-title">Daftar Lembaga TPA Kec.Gilireng</h2>
			</div>
			<hr/>
			<?php 
				$no = 1;
				foreach($datalembaga as $lembaga) {
			?>
			<div class="post">
				<div class="post-header">
					<h2 class="post-title">
						<b><?php echo $no++.'. '.$lembaga['nm_lembaga']; ?></b> <br/>
					</h2>
					<i><span class="glyphicon glyphicon-user"></span> Pengelolah : <?php echo $lembaga['pimpinan']; ?></i> 
				</div>
				<hr/>
				<div class="post-content">
					<div class="row">
						<div class="col-md-3">
							<img src="<?php echo base_url().'asset/image/profile/'.$lembaga['photo']; ?>" width="100%" height="130" alt="Photo Lembaga"/>
							
						</div>
						<div class="col-md-9">
							<table border="0">
								<tr>
									<td>Jumlah Murid</td>
									<td> : </td>
									<td><?php echo $lembaga['jml_murid']; ?> Orang</td>
								</tr>
								<tr>
								    <td colspan="3"><a href="<?php echo base_url('index.php/user/lembaga/').$lembaga['kd_lembaga']; ?>">Selengkapnya</a></td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			<?php 
				}
			?>
		</div>
		