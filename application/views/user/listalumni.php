<?php foreach($dataalumni as $data) {}?>
<div class="container">
	<div class="printarea">
		<div class="print-header">
			<h3 class="print-title text-center" style="color: #000;">Daftar Alumni TPA <?php echo $data['nm_lembaga']; ?> Tahun <?php echo $data['tahun']; ?></h3>
			<hr/>
			<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>TTL</th>
						<th>Nama Ayah</th>
						<th>Nama Ibu</th>
						<th>Alamat</th>
						<th>Tanggal Lulus</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						foreach($dataalumni as $alumni) {
							$alumni['bln_lahir'] = str_ireplace("12","Desember",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("11","November",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("10","Oktober",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("9","September",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("8","Agustus",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("7","Juli",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("6","Juni",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("5","Mei",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("4","April",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("3","Maret",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("2","Februari",$alumni['bln_lahir']);
							$alumni['bln_lahir'] = str_ireplace("1","Januari",$alumni['bln_lahir']);
							
							$alumni['bln_keluar'] = str_ireplace("12","Desember",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("11","November",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("10","Oktober",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("9","September",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("8","Agustus",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("7","Juli",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("6","Juni",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("5","Mei",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("4","April",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("3","Maret",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("2","Februari",$alumni['bln_keluar']);
							$alumni['bln_keluar'] = str_ireplace("1","Januari",$alumni['bln_keluar']);
					?>
					<tr>
						<th class="text-center"><?php echo $no++; ?></th>
						<th><?php echo $alumni['nm_pd']; ?></th>
						<th><?php echo $alumni['tmpt_lahir']." ,".$alumni['tgl_lahir']." ".$alumni['bln_lahir']." ".$alumni['thn_lahir']; ?></th>
						<th><?php echo $alumni['nm_ayah']; ?></th>
						<th><?php echo $alumni['nm_ibu']; ?></th>
						<th><?php echo $alumni['alamat']; ?></th>
						<th class="text-center"><?php echo $alumni['tgl_keluar']." ".$alumni['bln_keluar']." ".$alumni['thn_keluar']; ?></th>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="print-content">
			
		</div>
	</div>
</div>