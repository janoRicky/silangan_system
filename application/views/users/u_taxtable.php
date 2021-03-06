<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="content m-4">
					<div class="row content-body">
						<div class="col-6 col-sm-6 col-md-6 PrintPageName PrintOut">
							<h4 class="tabs-icon">
								<i class="fas fa-building fa-fw"></i> Tax Table x <?php if (isset($get_taxtable)) {
									echo $get_taxtable->num_rows();
								}; ?>
							</h4>
						</div>
						<div class="col-6 col-sm-6 col-md-6 text-right">
							<button class="btn btn-primary" data-toggle="modal" data-target="#add_taxcontri"><i class="fas fa-user-plus"></i> New</button>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExportModal"><i class="fas fa-download"></i> Export</button>
						</div>
						<div class="col-sm-12">
							<div class="table-responsive pt-5 pb-5 pl-2 pr-2">
								<table id="TaxTable" class="table table-bordered PrintOut" style="width: 100%;">
									<thead class="text-center align-middle">
										<th> From / To </th>
										<th> Tax </th>
										<th> Tax Rate </th>
										<th> Action </th>
									</thead>
									<tbody>
										<?php foreach ($get_taxtable->result_array() as $row): ?>
											<tr class="text-center align-middle">
												<td>
													<?php if (isset($row['f_range'])) echo $row['f_range'];
													else echo '<span class="text-danger"> Null </>'; ?>
													-

													<?php if (isset($row['t_range'])) echo $row['t_range'];
													else echo '<span class="text-danger"> Null </>'; ?>
												</td>
												<td>
													<?php if (isset($row['tax'])) echo $row['tax'];
													else echo '<span class="text-danger"> Null </>'; ?>
												</td>
												<td>
													<?php if (isset($row['tax_rate'])) echo $row['tax_rate'];
													else echo '<span class="text-danger"> Null </>'; ?>
												</td>
												<td class="text-center align-middle" style="width: 100px;">
													<a href="<?=base_url()?>remove_contri_Tax?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm w-100 mb-1" onclick="return confirm('Remove Row?')"><i class="fas fa-trash"></i> Delete</a>
												</td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="add_taxcontri" tabindex="-1" role="dialog" aria-labelledby="Lab_add_taxcontri" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<?php echo form_open(base_url().'add_newcontri_Tax','method="post"'); ?>
			<div class="modal-content m-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Lab_add_taxcontri">New Tax Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-row mb-3">
						<div class="form-group col-sm-6">
							<label>From</label>
							<input class="form-control" type="number" name="f_range" autocomplete="off" value="0" step="0.01">
						</div>
						<div class="form-group col-sm-6">
							<label>To</label>
							<input class="form-control" type="number" name="t_range" autocomplete="off" value="0" step="0.01">
						</div>
					</div>
					<div class="form-row mb-3">
						<div class="form-group col-sm-6 text-center">
							<label>Tax</label>
							<input id="tax" class="form-control" type="number" name="tax" autocomplete="off" value="0" step="0.01">
						</div>
						<div class="form-group col-sm-6 text-center">
							<label>Tax Rate</label>
							<input id="taxrate" class="form-control" type="number" name="tax_rate" autocomplete="off" value="0" step="0.01">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Save</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</body>
<?php $this->load->view('_template/users/u_scripts'); ?>

<script type="text/javascript">
	$(document).ready(function () {
		
		$('#EmployeeIDSuffix').bind('input', function() {
			$('#SuffixPreview').val($(this).val() + '-####-20');
		});
		$('[data-toggle="tooltip"]').tooltip();
		<?php if ($this->session->flashdata('prompts')) { 
			$prompts = json_encode($this->session->flashdata('prompts'));
			echo "var prompts = " . $prompts . ";";
			?>
			toastr.options = {
				"positionClass": "toast-bottom-right",
				"showDuration": "300",
				"hideDuration": "1000",
				"timeOut": "5000",
				"extendedTimeOut": "1000",
			}
			if (prompts[0] == "success") {
				toastr.success(prompts[1]);
			} else if (prompts[0] == "error") {
				toastr.error(prompts[1]);
			} else if (prompts[0] == "warning") {
				toastr.warning(prompts[1]);
			} else if (prompts[0] == "info") {
				toastr.info(prompts[1]);
			}
		<?php } ?>
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
		var taxTable = $('#TaxTable').DataTable( {
			"order": [[ 2, "asc" ]]
		});
	});
</script>
</html>