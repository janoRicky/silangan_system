<?php $T_Header;?>
<body>
	<div class="wrapper wercher-background-lowpoly">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="row rcontent PrintOutTable">
					<?php echo $this->session->flashdata('prompts'); ?>
					<div class="col-sm-12 col-md-12 mb-2">
						<h4>
							<i class="fas fa-table"></i> SSS Table
						</h4>
					</div>
					<div class="col-4 col-sm-4 col-md-4 PrintPageName PrintOut">
						<h4 class="sss-datecreated">
							Created in 
						</h4>
					</div>
					<div class="col-8 col-sm-8 col-md-8 text-right">
						<button href="#" class="btn btn-info" data-toggle="modal" data-target="#AddSSSdata">
							<i class="fas fa-plus"></i> New Line
						</button>
						<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_UserAdmin" data-backdrop="static" data-keyboard="false">
							<i class="fas fa-redo"></i> New Batch
						</a>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExportModal"><i class="fas fa-download"></i> Export</button>
					</div>
					<div class="col-sm-12 col-mb-12 mt-2">
						<div class="table-responsive">
							<table id="SalaryTable" class="table table-condensed">
								<thead>
									<th>From</th>
									<th>To</th>
									<th>Contribution</th>
									<th style="max-width: 33px;">Updated</th>
									<th>Action</th>
								</thead>
								<tbody>
									<form method="POST" action="UpdateSSSField">
									<?php foreach ($sss_Contri->result_array() as $row) { ?>
										<?php if(isset($_GET['row']) && ($_GET['row'] == $row['id'])): ?>
											<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
										<?php endif; ?>
										<tr>
											<td>
												<?php if(isset($_GET['row']) && ($_GET['row'] == $row['id'])): ?>
													<input class="form-control w-25" type="number" name="f_range" min="0" value="<?php echo $row['f_range']; ?>">
												<?php else: ?>
													<?php print $row['f_range']; ?>
												<?php endif; ?>
											</td>
											<td>
												<?php if(isset($_GET['row']) && ($_GET['row'] == $row['id'])): ?>
													<input class="form-control w-25" type="number" name="t_range" min="0" value="<?php echo $row['t_range']; ?>">
												<?php else: ?>
													<?php print $row['t_range']; ?>
												<?php endif; ?>
											</td>
											<td>
												<?php if(isset($_GET['row']) && ($_GET['row'] == $row['id'])): ?>
													<input class="form-control w-25" type="number" name="contribution" min="0" value="<?php echo $row['contribution']; ?>">
												<?php else: ?>
													<?php print $row['contribution']; ?>
												<?php endif; ?>
											</td>
											<td class="sss-updated">
												No
											</td>
											<td width="140">
												<?php if(isset($_GET['row']) && ($_GET['row'] == $row['id'])): ?>
													<button class="btn btn-success btn-sm w-100 mb-1" type="submit"><i class="fas fa-check fa-fw"></i> Update</button>
													<a class="btn btn-secondary btn-sm w-100 mb-1" href="<?php echo base_url() ?>SSS_Table"><i class="fas fa-times fa-fw"></i> Cancel</a>
												<?php else: ?>
													<a class="btn btn-info btn-sm w-100 mb-1" href="<?php echo base_url() ?>SSS_Table?row=<?php echo $row['id']; ?>"><i class="fas fa-edit fa-fw"></i> Update</a>
													<a class="btn btn-danger btn-sm w-100 mb-1" href="#"><i class="fas fa-trash-alt fa-fw"></i> Delete</a>
												<?php endif; ?>
											</td>
										</tr>
									<?php } ?>
									</form>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="AddSSSdata" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<?php echo form_open(base_url().'AddthisSss','method="post"'); ?>
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add to SSS table</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="text-center">
						<h6>
							Range of Compensations
						</h6>
					</div>
					<div class="form-row text-center">
						<div class="form-group m-auto w-50">
							<label>From</label>
							<input class="form-control text-center" type="text" name="f_range">
						</div>
						<div class="form-group m-auto w-50">
							<label>To</label>
							<input class="form-control text-center" type="text" name="t_range">
						</div>
					</div>
					<div class="form-row text-center">
						<div class="form-group m-auto w-100">
							<label>Contribution</label>
							<input class="form-control text-center" type="text" name="contribution">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</body>
<?php $this->load->view('_template/users/u_scripts'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		if (localStorage.getItem('SidebarVisible') == 'true') {
			$('#sidebar').addClass('active');
			$('.ncontent').addClass('shContent');
		} else {
			$('#sidebar').css('transition', 'all 0.3s');
			$('#content').css('transition', 'all 0.3s');
		}
		$('#sidebarCollapse').on('click', function () {
			if (localStorage.getItem('SidebarVisible') == 'false') {
				$('#sidebar').addClass('active');
				$('.ncontent').addClass('shContent');
				$('#sidebar').css('transition', 'all 0.3s');
				$('#content').css('transition', 'all 0.3s');
				localStorage.setItem('SidebarVisible', 'true');
			} else {
				$('#sidebar').removeClass('active');
				$('.ncontent').removeClass('shContent');
				$('#sidebar').css('transition', 'all 0.3s');
				$('#content').css('transition', 'all 0.3s');
				localStorage.setItem('SidebarVisible', 'false');
			}
		});
		$('#TaxTable').hide();
	});
</script>
</html>