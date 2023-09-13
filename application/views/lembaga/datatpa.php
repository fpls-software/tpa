 <div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Data Master</a>
        </li>
        <li>
            <a href="#">Data Lembaga</a>
        </li>
    </ul>
</div>
<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Data Lembaga TPA</h2>
			</div>
			<div class="box-content">
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<th>Kode Lembaga</th>
						<th>Nama Lembaga</th>
						<th>Pimpinan</th>
						<th>Alamat</th>
						<th>Aksi</th>
					<thead>
					<tbody>
						<?php foreach($datalembaga as $loaddata) { ?>
							<tr>
								<td><?php echo $loaddata['kd_lembaga']; ?></td>
								<td><?php echo $loaddata['nm_lembaga']; ?></td>
								<td><?php echo $loaddata['pimpinan']; ?></td>
								<td><?php echo $loaddata['alamat'].', Desa '.$loaddata['desa']; ?></td>
								<td><a href="<?php echo base_url('index.php/lembaga/editlembaga'); ?>/<?php echo $loaddata['kd_lembaga']; ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span> Edit</button></a></td>
							</tr>
						<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>