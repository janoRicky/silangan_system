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
			<a class="link-s" href="<?=base_url()?>Employees"><span class="fas fa-user-tie fa-fw"></span> Employees </a>
		</li>
		<!-- <li>
			<a class="link-s" href="#siteSettings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-cogs fa-fw"></i> Preferences </a>
			<ul class="collapse list-unstyled collapseSettings animated fadeIn" id="siteSettings">
				<li>
					<a class="link-s" class="sublink" href="#"><i class="fas fa-dot-circle fa-fw"></i> Sample Text </a>
				</li>
				<li>
					<a class="link-s" class="sublink" href="#"><i class="fas fa-dot-circle fa-fw"></i> Sample Text </a>
				</li>
				<li>
					<a class="link-s" class="sublink" href="#"><i class="fas fa-dot-circle fa-fw"></i> Sample Text </a>
				</li>
			</ul>
		</li> -->
	</ul>
</nav>