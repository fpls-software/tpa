<?php
	foreach($lembaga as $data) {}
	foreach($totalsumbangan as $total) {}
	foreach($datasumbangan1 as $sumbangan1) {}
	foreach($jumlahdonatur as $jmldonatur) {}
?>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div class="post-category">
				<h2 class="post-category-title"><?php echo $data['nm_lembaga']; ?></h2>
			</div>
			<hr/>
			<div class="box">
				<div class="box-inner">
					<div class="box-header well">
						<h2>Data Lembaga</h2>
					</div>
					<div class="box-content">
						<table border="0">
							<tr>
								<td>Nama Lembaga</td>
								<td> : </td>
								<td><?php echo $data['nm_lembaga']; ?></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td> : </td>
								<td><?php echo $data['alamat']; ?>, Desa <?php echo $data['desa']; ?></td>
							</tr>
							<tr>
								<td>Tahun Berdiri</td>
								<td> : </td>
								<td><?php echo $data['thn_berdiri']; ?></td>
							</tr>
							<tr>
								<td>Pimpinan</td>
								<td> : </td>
								<td><?php echo $data['pimpinan']; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<br/>
			<div class="box">
				<div class="box-inner">
					<div class="box-header well">
						<h2>Data Guru</h2>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
							<thead>
								<tr>
									<th width="10" class="text-center">No</th>
									<th>Nama Guru</th>
									<th>L/P</th>
									<th>Alamat</th>
									<th>Pendidikan</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no = 1;
									foreach($guru as $dataguru) {
								?>
								<tr>
									<td class="text-center"><?php echo $no++; ?></td>
									<td><?php echo $dataguru['nm_guru']; ?></td>
									<td class="text-center"><?php echo $dataguru['jns_kelamin']; ?></td>
									<td><?php echo $dataguru['alamat']; ?></td>
									<td class="text-center"><?php echo $dataguru['pendidikan']; ?></td>
								</tr>
								<?php 
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<br/>
			<div class="box">
				<div class="box-inner">
					<div class="box-header well">
						<h2>Data Murid</h2>
					</div>
					<div class="box-content">
						<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
							<thead>
								<tr>
									<th width="10" class="text-center">No</th>
									<th>Nama Murid</th>
									<th>L/P</th>
									<th>Alamat</th>
									<th>Nama Ayah</th>
									<th>Nama Ibu</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no = 1;
									foreach($pesertadidik as $datamurid) {
								?>
								<tr>
									<td class="text-center"><?php echo $no++; ?></td>
									<td><?php echo $datamurid['nm_pd']; ?></td>
									<td class="text-center"><?php echo $datamurid['jns_kelamin']; ?></td>
									<td><?php echo $datamurid['alamat']; ?></td>
									<td><?php echo $datamurid['nm_ayah']; ?></td>
									<td><?php echo $datamurid['nm_ibu']; ?></td>
								</tr>
								<?php 
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<br/>
			<div class="box">
				<div class="box-inner">
					<div class="box-header well">
						<h2>Data Alumni</h2>
					</div>
					<div class="box-content">
						<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
							<thead>
								<tr>
									<th width="10" class="text-center">No</th>
									<th>Tahun Lulus</th>
									<th>Jumlah</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$no = 1;
									foreach($dataalumni as $alumni) {
								?>
								<tr>
									<td class="text-center"><?php echo $no++; ?></td>
									<td><a target="_blank" href="<?php echo base_url("index.php/user/listalumni/").$alumni['kd_lembaga']."/".$alumni['tahun'];?>"><?php echo $alumni['tahun']; ?></a></td>
									<td class="text-center"><?php echo $alumni['jumlah']; ?></td>
								</tr>
								<?php 
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="box">
				<div class="box-inner">
					<div class="box-header well">
						<h2 class="box-title">Data Keuangan</h2>
					</div>
					<div class="box-content">
						<h4>Sumbangan Murid</h4>
						<hr/>
						<p>Filter Berdasarkan</p>
						<?php 
							$form_attribute = array(
								'method'	=> 'post',
								'class'		=> 'form-horizontal'
							);
							echo form_open("user/lembaga/".$kd_lembaga, $form_attribute);
						?>
						<div class="row">
						<div class="col-lg-3">
						<select name="bulan" class="form-control">
							<option selected disabled>Bulan</option>
							<option value="1">Januari</option>
							<option value="2">Februari</option>
							<option value="3">Maret</option>
							<option value="4">April</option>
							<option value="5">Mei</option>
							<option value="6">Juni</option>
							<option value="7">Juli</option>
							<option value="8">Agustus</option>
							<option value="9">September</option>
							<option value="10">Oktober</option>
							<option value="11">November</option>
							<option value="12">Desember</option>
						</select>
						</div>
						<div class="col-lg-3">
						<?php 
							$form_attribute = array(
								'type'			=> 'text',
								'class'			=> 'form-control',
								'name'			=> 'tahun',
								'placeholder'	=> 'Tahun'
							);
							echo form_input($form_attribute);
						?>
						</div>
						<div class="col-lg-6">
							<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-open-eye"></span> Tampilkan Data</button>
							<button type="button" class="btn btn-primary" onClick="printDiv('printarea')"><span class="glyphicon glyphicon-print"></span> Cetak</button>
						</div>
						</div> <br/>
						<?php 
							echo form_close();
						?>
						<div id="printarea">
						<div class="printheader">
							<h3 class="text-center" style="color: #000;">Laporan Sumbangan Murid TPA 
								<?php 
									if(empty($sumbangan1)) {
										echo "";
									}
									else {
										echo $sumbangan1['nm_lembaga']; 
									}
								?>
							</h3>
							<hr/>
						</div>
						<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
							<thead>
								<tr>
									<th>No</th>
									<th>Murid Penyumbang</th>
									<th>Tanggal Sumbangan</th>
									<th>Jumlah Sumbangan</th>
									<th>Sumber(Murid/Alumni)</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$no=1; 
									foreach($datasumbangan as $sumbangan) {
									$bulan = $sumbangan['bulan'];
									$bulan = str_ireplace("12","Desember",$bulan);			
									$bulan = str_ireplace("11","November",$bulan);			
									$bulan = str_ireplace("10","Oktober",$bulan);		
									$bulan = str_ireplace("9","September",$bulan);			
									$bulan = str_ireplace("8","Agustus",$bulan);			
									$bulan = str_ireplace("7","Juli",$bulan);			
									$bulan = str_ireplace("6","Juni",$bulan);			
									$bulan = str_ireplace("5","Mei",$bulan);			
									$bulan = str_ireplace("4","April",$bulan);			
									$bulan = str_ireplace("3","Maret",$bulan);			
									$bulan = str_ireplace("2","Februari",$bulan);			
									$bulan = str_ireplace("1","Januari",$bulan);
									?>
									<tr>
										<td class="text-center"><?php echo $no++; ?></td>
										<td class="text-left"><?php echo $sumbangan['nm_pd']; ?></td>
										<td class="text-left"><?php echo $sumbangan['tanggal']." ".$bulan." ".$sumbangan['tahun']; ?></td>
										<td class="text-right"><?php echo "Rp.".number_format($sumbangan['jml_sumbangan'],0,'','.'); ?> </td>
										<td class="text-left"><?php echo $sumbangan['sumber']; ?></td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="4" class="text-center">TOTAL</th>
									<th class="text-right">
										<?php echo "Rp.".number_format($total['total'],0,'','.'); ?>
									</th>
								</tr>
							</tfoot>
						</table>
						</div>
						
						<hr/>
						<h4>Donatur</h4> 
						<hr/>
						<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
							<thead>
								<tr>
									<th rowspan="2">No</th>
									<th rowspan="2">Donatur</th>
									<th rowspan="2">Tgl Donasi</th>
									<th colspan="2">Jenis Donasi</th>
									<th colspan="2">Jumlah Donasi</th>
								</tr>
								<tr>
									<th>Fisik</th>
									<th>Non Fisik</th>
									<th>Fisik</th>
									<th>Non Fisik</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$no=1; 
									foreach($datadonatur as $donatur) { 
									$donatur['bln_donasi'] = str_ireplace("12","Desember",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("11","November",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("10","Oktober",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("9","September",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("8","Agustus",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("7","Juli",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("6","Juni",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("5","Mei",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("4","April",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("3","Maret",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("2","Februari",$donatur['bln_donasi']);
									$donatur['bln_donasi'] = str_ireplace("1","Januari",$donatur['bln_donasi']);
								?>
								<tr>
									<td class="text-center"><?php echo $no++; ?></td>
									<td><?php echo $donatur['nm_donatur']; ?></td>
									<td><?php echo $donatur['tgl_donasi']." ".$donatur['bln_donasi']." ".$donatur['thn_donasi']; ?></td>
									<td><?php echo $donatur['fisik']; ?></td>
									<td><?php echo $donatur['non_fisik']; ?></td>
									<td class="text-center"><?php echo $donatur['jml_donasifisik']; ?></td>
									<td class="text-right"><?php echo "Rp.".number_format($donatur['jml_donasinonfisik'],0,'','.'); ?></td>
								</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr bgcolor="#e0e0e0">
									<th colspan="5" class="text-center">JUMLAH</th>
									<th class="text-center"><?php echo $jmldonatur['jmlfisik']; ?></th>
									<th class="text-right"><?php echo "Rp.".number_format($jmldonatur['jmlnonfisik'],0,'','.'); ?></th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
		<script>
			function printDiv(divName) {
				var printContents = document.getElementById(divName).innerHTML;
				var originalContents = document.body.innerHTML;

				document.body.innerHTML = printContents;

				window.print();

				document.body.innerHTML = originalContents;
			}
		</script>
	