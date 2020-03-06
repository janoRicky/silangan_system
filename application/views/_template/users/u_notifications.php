<div class="row silangan-navbar sticky-top">
	<div class="col-sm-12">
		<style type="text/css">
			.notif-link { text-decoration: none; width: 100%; color: #2262A9; }
			.notif-link:hover { text-decoration: none; }
			.dropdown-menu { width: 300px; }
			.notif-li { padding-left: 21px; padding-right: 21px ; padding-top: 11px ;padding-bottom: 11px ; font-size: 12px;}
		</style>
		<nav class="navbar navbar-expand-lg">
			<button type="button" id="sidebarCollapse" class="btn text-light"><i class="fas fa-bars" style="margin-right: -1px;"></i></button>
			<div class="silangan-breadcrumb text-light ml-3">
				<!-- BREADCRUMB -->
				<?php if (!isset($Breadcrumb) || $Breadcrumb == NULL): ?>
					<?php echo 'Breadcrumb goes here'; ?>
				<?php else: ?>
					<?php echo $Breadcrumb; ?>
				<?php endif ?>
			</div>
		</nav>
	</div>
</div>