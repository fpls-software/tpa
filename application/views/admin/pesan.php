<div class="data-container">
	<div class="box">
		<div class="box-inner">
			<div class="box-header well">
				<h2>Kirim Pesan</h2>
			</div>
			<div class="box-content">
				
				<?php 
					$form_attribute = array(
						'method'	=> 'post',
						'class'		=> 'form-horizontal'
					);
					echo form_open("admin/kirimpesan", $form_attribute);
				?>
				<label class="label-control">Penerima</label>
				<select class="form-control" name="username">
					<option disabled selected>Pilih Penerima</option>
					<?php
						foreach($pendaftar as $data) {
					?>
						<option value="<?php echo $data['username'] ?>">(<?php echo $data['username']; ?>) - <?php echo $data['nama']; ?>
					<?php 
						}
					?>
				</select>
				<label class="label-control">Subject</label>
				<?php 
					$form_attribute	= array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'subject'
					);
					echo form_input($form_attribute);
				?>
				<label class="label-control">Pesan</label>
				<?php 
					$form_attribute	= array(
						'type'		=> 'text',
						'class'		=> 'form-control',
						'name'		=> 'pesan',
						'id'		=> 'pesan',
						'rows'		=> 3
					);
					echo form_textarea($form_attribute);
				?>
				<br/>
				<button type="submit" class="btn btn-primary">Kirim Pesan</button>
				<?php 
					echo form_close();
				?>
			</div>
		</div>
	</div>
</div>