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
				<h2> Data Lembaga TPA </h2>
			</div>
			<div class="box-content">
				<a href="<?php echo base_url("index.php/lembaga/tambahlembaga"); ?>"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign"></span> Tambahkan Data Lembaga</button></a>
				<hr/>
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
								<td colspan="5" class="text-center">
									<p>Anda belum memiliki data Lembaga, Silahkan tambahkan data Lembaga Anda Dengan Mengklik Tombol <b>"Tambahkan Data Lembaga"</b> Diatas</p>
								</td>
							</tr>
						<?php } ?>
					<tbody>
				</table>
			</div>
		</div>
	</div>
</div>