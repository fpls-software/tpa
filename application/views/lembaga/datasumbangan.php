<?php foreach($totalsumbangan as $total) {}?>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2 class="box-title">Laporan Sumbangan</h2>
			</div>
			<div class="box-content">
				<div class="row">
					<div class="col-lg-8">
						<?php 
							$form_attribute = array(
								'method'	=> 'post',
								'class'		=> 'form-horizontal'
							);
							echo form_open("lembaga/datasumbangan", $form_attribute);
						?>
						<label>Filter Berdasarkan :</label>
						<div class="row">
							<div class="col-lg-4">
								<select name="bulan" class="form-control">
									<option selected disabled value="">Bulan</option>
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
							<div class="col-lg-4">
								<?php 
									$form_attribute = array(
										'type'		=> 'text',
										'class'		=> 'form-control',
										'name'		=> 'tahun',
										'placeholder'	=> 'Tahun'
									);
									echo form_input($form_attribute);
								?>	
							</div>
							<div class="col-lg-4">
								<button type="submit" class="btn btn-primary">Tampilkan Data</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
				
				<hr/>
				
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable">
					<thead>
						<tr>
							<th width="30">No</th>
							<th class="text-center">Tanggal</th>
							<th class="text-center">Bulan</th>
							<th class="text-center">Tahun</th>
							<th class="text-right">Jumlah Sumbangan</th>
							<th>Sumber (Murid/Alumni)</th>
						</tr>
					</thead>
					<tbody>
						<?php $no=1; foreach($laporansumbangan as $sumbangan) { ?>
						<tr>
							<td class="text-center"><?php echo $no++; ?></td>
							<td class="text-center"><?php echo $sumbangan['tanggal']; ?></td>
							<td class="text-center">
								<?php
									$sumbangan['bulan'] = str_ireplace('12','Desember',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('11','November',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('10','Oktober',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('9','September',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('8','Agustus',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('7','Juli',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('6','Juni',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('5','Mei',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('4','April',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('3','Maret',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('2','Februari',$sumbangan['bulan']);
									$sumbangan['bulan'] = str_ireplace('1','Januari',$sumbangan['bulan']);
									echo $sumbangan['bulan']; 
								?>
							</td>
							<td class="text-center"><?php echo $sumbangan['tahun']; ?></td>
							<td class="text-right"> <?php echo "Rp.".number_format($sumbangan['jml_sumbangan'],0,'','.'); ?></td>
							<td class="text-right"> <?php echo $sumbangan['sumber']; ?></td>
						</tr>
						<?php } ?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="5" class="text-center">TOTAL</th>
							<th class="text-right"><?php echo "Rp.".number_format($total['total'],0,'','.'); ?></th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>