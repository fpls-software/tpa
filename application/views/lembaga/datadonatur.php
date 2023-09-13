<?php foreach($datadonatur as $loaddata) {} ?>
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
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<th class="text-center">No</th>
						<th class="text-center">Nama Donatur</th>
						<th class="text-center">Donasi Fisik</th>
						<th class="text-center">Jumlah Donasi Fisik</th>
						<th class="text-center">Donasi Non-Fisik</th>
						<th class="text-center">Jumlah Donasi Non-Fisik</th>
						<th class="text-center">Tanggal Donasi</th>
					</thead>
					<tbody>
						<?php 
							$no = 1;
							foreach($datadonatur as $loaddata) {
						?>
							<tr>
								<td class="text-center"><?php echo $no++ ?> </td>
								<td><?php echo $loaddata['nm_donatur']; ?> </td>
								<td><?php echo $loaddata['fisik']; ?> </td>
								<td class="text-center"><?php echo $loaddata['jml_donasifisik']; ?> </td>
								<td><?php echo $loaddata['non_fisik']; ?> </td>
								<td class="text-center"><?php echo "Rp.".number_format($loaddata['jml_donasinonfisik'],0,",","."); ?> </td>
								<td class="text-center"><?php echo $loaddata['tgl_donasi']; ?> </td>
								
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