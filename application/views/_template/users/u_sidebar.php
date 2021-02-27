<nav id="sidebar" style="position: fixed;">
	<div class="sidebar-banner text-center">
		<b>
			<a href="Dashboard">
				<?php
				if (isset($_SESSION['BranchIcon'])) {
					echo '<img class="m-auto BranchIcon" src="' .$_SESSION["BranchIcon"] . '" style="height: 100%;">';
				}
				else
				{
					echo $_SESSION['BranchIcon'];
				}
				?>
			</a>
		</b>
	</div>
	<div class="col text-center p-3">
		<img src="<?=base_url()?>/assets/img/user.png" width="75" height="75" style="border-radius: 100%;">
	</div>
	<ul class="list-unstyled components">
		<div class="text-center pt-2 pb-3">
				<?php
				if (isset($_SESSION['is_logged_in'])) {
					echo '<small>'.strtoupper($_SESSION['FirstName']).' '.strtoupper($_SESSION['MiddleInitial']).' '.strtoupper($_SESSION['LastName']).'</small>';
					echo '<h6>'.strtoupper($_SESSION['Position']).'</h6>';
				}
				else
				{
					echo "GUEST";
				}
				?>
			
		</div>
		<div class="pb-1 pt-1" style="border-bottom: 1px solid #E6E6E6;"></div>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Dashboard">
				<span class="fas fa-tachometer-alt fa-fw"></span> Dashboard 
			</a>
		</li>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Employee"><span class="fas fa-user-tie"></span> Employees </a>
		</li>

		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Employers"><span class="fas fa-building fa-fw"></span> Employers </a>
		</li>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Payroll"><span class="fas fa-dollar-sign fa-fw"></span> Payroll </a>
		</li>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Admin_List"><i class="fas fa-table fa-fw"></i> Users </a>
		</li>

		<div class="pb-1 pt-3" style="border-bottom: 1px solid #E6E6E6; text-align: center;"> Tables </div>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>sss_table"><i class="fas fa-table fa-fw"></i> SSS Table </a>
		</li>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>hdmf_table"><i class="fas fa-table fa-fw"></i> HDMF Table </a>
		</li>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>philhealth_table"><i class="fas fa-table fa-fw"></i> PhilHealth Table </a>
		</li>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>tax_table"><i class="fas fa-table fa-fw"></i> Tax Table </a>
		</li>

		<div class="pb-1 pt-3" style="border-bottom: 1px solid #E6E6E6;"></div>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>day_rates"><i class="fas fa-table fa-fw"></i> Rates </a>
		</li>
		<li class="nav-item">
			<a class="link-s" href="Logout"><i class="fas fa-sign-out-alt fa-fw"></i> Log-out </a>
		</li>
	</ul>
</nav>