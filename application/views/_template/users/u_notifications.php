<div class="row silangan-navbar sticky-top">
	<div class="col-sm-12">
		<style type="text/css">
			.notif-link { text-decoration: none; width: 100%; color: #2262A9; }
			.notif-link:hover { text-decoration: none; }
			.dropdown-menu { width: 300px; }
			.notif-li { padding-left: 21px; padding-right: 21px ; padding-top: 11px ;padding-bottom: 11px ; font-size: 12px;}
			.notif-bells
			{
				cursor: pointer;
			}
			.notif-bells:hover
			{
				color: #ECECEC;
			}
			.notif-panel {
				background-color: #FAFAFA;
				border: 1px solid #E0E0E0;
				-webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.24);
				-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.24);
				box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.24);
				color: #313131;
				/*padding: 20px;*/
				width: 100%;
				max-width: 400px;
				position: absolute;
				right: 0px;
				top: 55px;
				display: none;
				font-size: 0.9rem;
			}
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
			<div class="notif-bell ml-auto">
				<div id="notif-bells" class="notif-bells">
					<i class="fas fa-bell fa-fw"></i>
					<?php if (isset($GetLogbook) AND $GetLogbook->num_rows() > 0) { ?>
						<span class="badge badge-danger"><?php echo $GetLogbook->num_rows(); ?></span>
					<?php } else { ?>

					<?php } ?>
				</div>
				<div id="notif-panel" class="notif-panel">
					<div class="notif-head pt-3 ">
						<div class="col-sm-10"  style="display: inline-block;">
							<h6>
								Notification
							</h6>
						</div>
						<div class="col-sm-1" style="display: inline-block;">
							<?php if (isset($GetLogbook) AND $GetLogbook->num_rows() > 0) { ?>
								<span class="badge badge-danger"><?php echo $GetLogbook->num_rows(); ?></span>
							<?php } else { ?>
								
							<?php } ?>
						</div>
					</div>
					<div class="notif-body p-2">
						<div class="w-100" style="border-top: 1px solid #E0E0E0; overflow-y: auto;"></div>
							<?php if (!isset($GetLogbook) || $GetLogbook->num_rows() < 1) { ?>
								<div class="col-12 pt-2">
									No notification
								</div>
							<?php } else { ?>
								<?php foreach ($GetLogbook->result_array() as $row) { ?>
									<div class="col-12 pt-2 pb-2">
										<div>
											<?php if ($row['Type'] == 'New' || $row['Type'] == 'Employment') 
												{ 
													echo '<i class="fas fa-comment text-success"></i>'; 
												}
												elseif ($row['Type'] == 'Archival' || $row['Type'] == 'Deletion') 
												{
													echo '<i class="fas fa-comment text-danger"></i>';
												} 
												elseif ($row['Type'] == 'Update')
												{
													echo '<i class="fas fa-comment text-info"></i>';
												}
												elseif ($row['Type'] == 'Reminder' || $row['Type'] == 'Note') 
												{
													echo '<i class="fas fa-comment text-warning"></i>';
												}
											?> <?php echo $row['Time']; ?>
										</div>
										<div>
											<small><?php echo $row['Event']; ?></small>
										</div>
									</div>
								<?php } ?>
							<?php } ?>
							<div class="w-100" style="border-top: 1px solid #E0E0E0;"></div>
							<div class="p-2">
								<a href="#"> View all notification</a>
							</div>
					</div>
				</div>
				<div>
					<a href="#"></a>
				</div>
			</div>
		</nav>
	</div>
</div>