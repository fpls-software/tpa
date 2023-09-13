<?php 
	foreach($counttpa as $jmltpa){}
	foreach($countguru as $jmlguru){}
	foreach($countpd as $jmlpd){}
	foreach($countdonatur as $jmldonatur){}
	foreach($dataketerangan as $ket){}
?>
<div class="">
	Main | <a class="" href="#">Dashboard</a>
	<hr/>
</div>
<div class=" row">
    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="6 new members." class="well top-block" href="<?php echo base_url('index.php/admin/datatpa'); ?>">
            <i class="glyphicon glyphicon-user blue"></i>

            <div>Jumlah TPA</div>
            <div><?php echo $jmltpa['jumlah']; ?></div>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="4 new pro members." class="well top-block" href="<?php echo base_url('index.php/admin/dataguru'); ?>">
            <i class="glyphicon glyphicon-user red"></i>


            <div>Total Guru</div>
            <div><?php echo $jmlguru['jumlah']; ?></div>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="$34 new sales." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user yellow"></i>

            <div>Total Peserta Didik</div>
            <div><?php echo $jmlpd['jumlah']; ?></div>
        </a>
    </div>

    <div class="col-md-3 col-sm-3 col-xs-6">
        <a data-toggle="tooltip" title="12 new messages." class="well top-block" href="#">
            <i class="glyphicon glyphicon-user green"></i>

            <div>Jumlah Donatur</div>
            <div><?php echo $jmldonatur['jumlah']; ?></div>
        </a>
    </div>
</div>
<hr/>
<div class="row">
	<div class="box col-lg-6">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Non-Aktifkan Lembaga</h2>
			</div>
			<div class="box-content">
				<?php if($this->session->flashdata('nonaktif_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('nonaktif_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('nonaktif_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('nonaktif_failed'); ?>
				</div>
				<?php } ?>
				<?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('admin/nonaktifkanlembaga', $form_attribute);
				?>
				<div class="row">
					<div class="col-md-8">
						<select name='kd_lembaga' class="form-control">
							<option selected disabled>Pilih Lembaga</option>
							<?php foreach($lembagaaktif as $lembaga1) { ?>
								<option value="<?php echo $lembaga1['kd_lembaga']; ?>"><?php echo $lembaga1['kd_lembaga'].'-'.$lembaga1['nm_lembaga']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
	<div class="box col-lg-6">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Aktifkan Lembaga</h2>
			</div>
			<div class="box-content">
				<?php if($this->session->flashdata('aktif_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('aktif_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('aktif_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('aktif_failed'); ?>
				</div>
				<?php } ?>
				<?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open('admin/aktifkanlembaga', $form_attribute);
				?>
				<div class="row">
					<div class="col-md-8">
						<select name='kd_lembaga' class="form-control">
							<option selected disabled>Pilih Lembaga</option>
							<?php foreach($lembagatidakaktif as $lembaga0) { ?>
								<option value="<?php echo $lembaga0['kd_lembaga']; ?>"><?php echo $lembaga0['kd_lembaga'].'-'.$lembaga0['nm_lembaga']; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="col-md-4">
						<button type="submit" class="btn btn-primary">Simpan Perubahan</button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div> <br/>
<div class="row">
	<?php
			$form_attribute = array(
				'method'	=> 'post',
				'class'		=> 'form-horizontal'
			);
			echo form_open("admin/simpanketerangan", $form_attribute);
	?>
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="box">
			<div class="box-inner">
				<div class="box-header well">
					<div class="col-lg-6 col-md-6">
						<h2>Keterangan Lembaga</h2>
					</div>
					<div class="col-lg-6 col-md-6 text-right">
						<button type="submit" class="btn btn-primary btn-sm">Simpan Perubahan</button>
					</div>
				</div>
				<div class="box-content">
					<?php if($this->session->flashdata('update_berhasil')) { ?>
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('update_berhasil'); ?>
						</div>
						<?php } ?>
						<?php if($this->session->flashdata('update_gagal')) { ?>
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('update_gagal'); ?>
						</div>
					<?php } ?>
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<label class="label-control">Keterangan Lembaga Aktif</label>
							<?php 
								$form_attribute 	= array(
									'type'			=> 'text',
									'class'			=> 'form-control',
									'name'			=> 'ket_lembagaaktif',
									'placeholder'	=> 'Keterangan Lembaga Aktif',
									'style'			=> 'width: 100%;',
									'value'			=> $ket['ket_lembagaaktif']
								);
								echo form_textarea($form_attribute);
							?>
						</div>
						<div class="col-lg-6 col-md-6">
							<label class="label-control">Keterangan Lembaga Tidak Aktif</label>
							<?php 
								$form_attribute 	= array(
									'type'			=> 'text',
									'class'			=> 'form-control',
									'name'			=> 'ket_lembagatidakaktif',
									'placeholder'	=> 'Keterangan Lembaga Tidak Aktif',
									'style'			=> 'width: 100%;',
									'value'			=> $ket['ket_lembagatidakaktif']
								);
								echo form_textarea($form_attribute);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
		echo form_close();
	?>
</div>
<div class="row">
	<div class="box col-lg-8">
		<div class="box-inner">
			<div class="box-header well">
				<h2> Informasi Terbaru </h2>
			</div>
			<div class="box-content">
				<table id="myTable" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
					<thead>
						<tr>
							<th width="10">#</th>
							<th>Nama Pendaftar</th>
							<th>Link</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						$no = 1;
						foreach($pendaftar as $data) { 
					?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $data['nama']; ?></td>
							<td><a href="<?php echo base_url("index.php/admin/pendaftar/").$data['username']; ?>">Periksa Berkas</a></td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well">
                <h2><i class="glyphicon glyphicon-user"></i> Buat User Lembaga</h2>
            </div>
            <div class="box-content row">
                <div class="col-lg-12 col-md-12">
					<?php if($this->session->flashdata('buat_success')) { ?>
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('buat_success'); ?>
						</div>
					<?php } ?>
					<?php if($this->session->flashdata('buat_failed')) { ?>
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('buat_failed'); ?>
						</div>
					<?php } ?>
                    <?php 
						$form_attribute = array (
							'method'	=> 'post',
							'class'		=> 'form-horizontal'
						);
						echo form_open('admin/buatuserguru', $form_attribute);
					?>
					<div class="input-group input-group-md">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
						<?php 
							$form_attribute = array (
								'type'			=> 'text',
								'class'			=> 'form-control',
								'name'			=> 'username',
								'placeholder'	=> 'Username'
							);
							echo form_input($form_attribute);
						?>
                    </div><br/>
					<div class="input-group input-group-md">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                        <?php 
							$form_attribute = array (
								'type'			=> 'password',
								'class'			=> 'form-control',
								'name'			=> 'password',
								'placeholder'	=> 'Password'
							);
							echo form_input($form_attribute);
						?>
                    </div><br/>
					<button type="submit" class="btn btn-primary"> Buat User Lembaga</button>
					<?php 
						echo form_close();
					?>
                </div>
            </div>
        </div>
    </div>
</div>
