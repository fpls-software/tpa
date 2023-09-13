		<div class="col-lg-4">
			<div class="sidebar">
				<div class="sidebar-header">
					<h3 class="sidebar-title">Daftar Lembaga</h3>
				</div>
				<div class="sidebar-content">
					<ul class="sidebar-item">
					<?php
						foreach($datalembaga as $lembaga) {
					?>
						<li>
							<a href="<?php echo base_url('index.php/user/lembaga/').$lembaga['kd_lembaga']; ?>"><?php echo $lembaga['nm_lembaga']; ?></a>
						</li>
					<?php 
						}
					?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>