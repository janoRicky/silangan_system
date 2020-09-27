<nav id="sidebar" style="position: fixed;">
	<div class="sidebar-banner text-center">
		<b>
			Silangan Lumber
		</b>
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
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Dashboard">
				<span class="fas fa-tachometer-alt fa-fw"></span> Dashboard 
			</a>
		</li>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Employee"><span class="fas fa-user-tie"></span> Employees </a>
		</li>

		
		<!-- <li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Employee"><span class="fas fa-users fa-fw"></span> Employees </a>
		</li> -->
		<!-- FOR LEVEL 1 USER -->
		<!-- <li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Admin_List"><span class="fas fa-user-secret fa-fw"></span> Admins </a>
		</li> -->
		<!-- END COMMENT -->
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Employers"><span class="fas fa-building fa-fw"></span> Employers </a>
		</li>
		<li class="nav-item">
			<a class="link-s" href="<?=base_url()?>Payroll"><span class="fas fa-dollar-sign fa-fw"></span> Payroll </a>
		</li>
		<li>
			<a class="link-s" href="#siteSettings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fas fa-cogs fa-fw"></span> Settings </a>
			<ul class="collapse list-unstyled collapseSettings animated fadeIn" id="siteSettings">
				<li>
					<a class="link-s" class="sublink" href="#"><i class="fas fa-table fa-fw"></i> USERS </a>
				</li>
				<li>
					<a class="link-s" class="sublink" href="<?=base_url()?>sss_table"><i class="fas fa-table fa-fw"></i> SSS Table </a>
				</li>
				<li>
					<a class="link-s" class="sublink" href="#"><i class="fas fa-sign-out-alt fa-fw"></i> Log-out </a>
				</li>
			</ul>
		</li>
	</ul>
</nav>