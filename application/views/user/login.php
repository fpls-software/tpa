<div class="login-container">
	<div class="box">
		<div class="box-inner">
		<div class="box-header well">
			<h2>Login </h2>
		</div>
		<div class="box-content">
			<?php if($this->session->flashdata('failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('failed'); ?>
				</div>
			<?php } ?>
			<?php 
				$form_attribute = array(
					'method'	=> 'post',
					'class'		=> 'form-horizontal'
				);
				echo form_open("user/validlogin", $form_attribute);
			?>
			<?php
				$form_attribute		= array(
					'type'			=> 'text',
					'class'			=> 'form-control',
					'name'			=> 'username',
					'required'		=> '',
					'placeholder'	=> 'Masukkan Username Anda'
				);
				echo form_input($form_attribute);
			?>
			<br/>
			<?php
				$form_attribute		= array(
					'type'			=> 'password',
					'class'			=> 'form-control',
					'name'			=> 'password',
					'required'		=> '',
					'placeholder'	=> 'Masukkan Password Anda'
				);
				echo form_input($form_attribute);
			?>
			<br/>
			<button type="submit" class="btn btn-primary btn-sm">Masuk</button>
			<?php 
				echo form_close();
			?>
		</div>
		</div>
	</div>
</div>