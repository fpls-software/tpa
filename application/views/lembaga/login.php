
    <div class="row">
        <div class="col-md-12 center login-header">
            <h2>Selamat Datang di SISFO TPA</h2>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-5 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>
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
				echo form_open('lembaga/loginvalidation', $form_attribute);
			?>
                <fieldset>
                    <div class="input-group input-group-lg">
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
                    </div>
                    <div class="clearfix"></div><br>

                    <div class="input-group input-group-lg">
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
                    </div>
                    <div class="clearfix"></div>

                    <div class="input-prepend">
                       
                    </div>
                    <div class="clearfix"></div>

                    <p class="center col-md-5">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </p>
                </fieldset>
            <?php echo form_close(); ?>
        </div>
        <!--/span-->
    </div><!--/row-->