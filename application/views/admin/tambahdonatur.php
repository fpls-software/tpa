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
<div class="data-container" style="width: 400px;">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Tambah Donatur</h2>
			</div>
			<div class="box-content">
				<?php if($this->session->flashdata('simpan_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('simpan_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('simpan_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('simpan_failed'); ?>
				</div>
				<?php } ?>
				<?php 
					$form_attribute = array(
						"method"	=> "post",
						"class"		=> "form-horizontal"
					);
					echo form_open("admin/simpandonatur", $form_attribute);
				?>
				<label class="label-control">ID Donatur</label>
				<?php 
					$form_attribute = array(
						"type"		=> "text",
						"class"		=> "form-control",
						"name"		=> "id_donatur",
						"required"	=> ""
					);
					echo form_input($form_attribute);
				?> <br/>
				<label class="label-control">Nama Donatur</label>
				<?php 
					$form_attribute = array(
						"type"		=> "text",
						"class"		=> "form-control",
						"name"		=> "nm_donatur",
						"required"	=> ""
					);
					echo form_input($form_attribute);
				?> <br/>
				<button type="submit" class="btn btn-primary">Simpan Data</button>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>