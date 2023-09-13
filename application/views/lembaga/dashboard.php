<?php 
	foreach($jumlahguru as $jml_guru) {}
	foreach($jumlahmurid as $jml_murid) {}
	foreach($jumlahalumni as $jml_alumni) {}
	foreach($jumlahdonatur as $jml_donatur) {}
	foreach($datalembaga as $data){}
 ?>
<div>
    <ul class="breadcrumb">
        <li>
            <a href="#">Home</a>
        </li>
        <li>
            <a href="#">Dashboard</a>
        </li>
    </ul>
</div>

<div class=" row">
    <div class="col-md-4 col-sm-4 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="<?php echo base_url('index.php/lembaga/dataguru'); ?>">
            <i class="glyphicon glyphicon-user red"></i>


            <div>Jumlah Guru</div>
            <div> <?php echo $jml_guru['jml_guru']; ?> </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="<?php echo base_url('index.php/lembaga/datapesertadidik'); ?>">
            <i class="glyphicon glyphicon-user yellow"></i>

            <div>Jumlah Murid</div>
            <div>  <?php echo $jml_murid['jml_murid']; ?>  </div>
        </a>
    </div>

    <div class="col-md-4 col-sm-4 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="<?php echo base_url('index.php/lembaga/dataalumni'); ?>">
            <i class="glyphicon glyphicon-user green"></i>

            <div>Jumlah Alumni</div>
            <div> <?php echo $jml_alumni['jml_alumni']; ?>  </div>
        </a>
    </div>
</div>

<div class="data-container">
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-inner">
					<div class="box-header well">
						<h2>Data Lembaga TPA</h2>
					</div>
					<div class="box-content">
						<div class="row">
						<div class="col-md-3 text-center">
							<img src="<?php echo base_url().'asset/image/profile/'.$data['photo']; ?>" width="100%" height="200" alt="Photo Lembaga"/><br/>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#gantiphoto" style="width: 100%;">Ganti Photo</button>
							<div id="gantiphoto" class="modal fade" role="dialog">
								<div class="modal-dialog">

								<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Ganti Photo</h4>
										</div>
										<div class="modal-body">
										<div class="row">
										<div class="col-lg-10">
											<img src="<?php echo base_url().'asset/image/profile/'.$data['photo']; ?>" width="100%" alt="Photo Lembaga"/><br/><br/>
											<?php 
												$form_attribute = array(
													'method'	=> 'post',
													'class'		=> 'form-horizontal'
												);
												echo form_open_multipart('lembaga/simpanphoto', $form_attribute);
											?>
											<label class="label-control">
											<?php 
												$form_attribute = array(
													'type'		=> 'hidden',
													'class'		=> 'form-control',
													'name'		=> 'kd_lembaga',
													'value'		=> $data['kd_lembaga']
												);
												echo form_input($form_attribute);
											?>
											<?php 
												$form_attribute = array(
													'type'		=> 'file',
													'class'		=> 'form-control',
													'name'		=> 'photo',
													'style'		=> 'width: 100%;'
												);
												echo form_input($form_attribute);
											?>
											</div>
											<div class="col-lg-2">
											<button type="submit" class="btn btn-primary">Update</button>
											</div>
											</div>
											<?php 
												echo form_close();
											?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-9">
							<table border="0">
								<tr>
									<td>Pimpinan</td>
									<td> : </td>
									<td><?php echo $data['pimpinan']; ?></td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td> : </td>
									<td><?php echo $data['alamat']; ?>, Desa <?php echo $data['desa']; ?>, Kec. <?php echo $data['kecamatan']; ?></td>
								</tr>
							
							</table>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>