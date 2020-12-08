<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="content m-4">
					<?php echo $this->session->flashdata('prompts'); ?>
					<div class="row content-body">
						<div class="col-6 col-sm-6 col-md-6 PrintPageName PrintOut">
							<h4 class="tabs-icon">
								<i class="fas fa-building fa-fw"></i> HDMF Table x <?php if (isset($get_hdmftable)) {
									echo $get_hdmftable->num_rows();
								}; ?>
							</h4>
						</div>
						<div class="col-6 col-sm-6 col-md-6 text-right">
							<button class="btn btn-primary" data-toggle="modal" data-target="#add_hdmfcontri"><i class="fas fa-user-plus"></i> New</button>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExportModal"><i class="fas fa-download"></i> Export</button>
						</div>
						<div class="col-sm-12">
							<div class="table-responsive pt-5 pb-5 pl-2 pr-2">
								<table id="HDMFTable" class="table table-bordered PrintOut" style="width: 100%;">
									<thead class="text-center align-middle">
										<th> From / To </th>
										<th> ER </th>
										<th> EE </th>
										<th> Total </th>
										<th> Action </th>
									</thead>
									<tbody>
										<?php foreach ($get_hdmftable->result_array() as $row): ?>
											<tr class="text-center align-middle">
												<td>
													<?php if (isset($row['f_range'])) echo $row['f_range'];
													else echo '<span class="text-danger"> Null </>'; ?>
													-

													<?php if (isset($row['t_range'])) echo $row['t_range'];
													else echo '<span class="text-danger"> Null </>'; ?>
												</td>
												<td>
													<?php if (isset($row['contribution_er'])) echo $row['contribution_er'];
													else echo '<span class="text-danger"> Null </>'; ?>
												</td>
												<td>
													<?php if (isset($row['contribution_ee'])) echo $row['contribution_ee'];
													else echo '<span class="text-danger"> Null </>'; ?>
												</td>
												<td>
													<?php if (isset($row['total'])) echo $row['total'];
													else echo '<span class="text-danger"> Null </>'; ?>
												</td>
												<td class="text-center align-middle" style="width: 100px;">
													<a href="<?=base_url()?>remove_contri_HDMF?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm w-100 mb-1" onclick="return confirm('Remove Row?')"><i class="fas fa-trash"></i> Delete</a>
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
	<div class="modal fade" id="add_hdmfcontri" tabindex="-1" role="dialog" aria-labelledby="Lab_add_hdmfcontri" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<?php echo form_open(base_url().'add_newcontri_HDMF','method="post"'); ?>
			<div class="modal-content m-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Lab_add_hdmfcontri">New HDMF Data</h5>
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
							<label>Employer's Contribution</label>
							<input id="cER" class="form-control" type="number" name="contribution_er" autocomplete="off" value="0" step="0.01">
						</div>
						<div class="form-group col-sm-6 text-center">
							<label>Employee's Contribution</label>
							<input id="cEE" class="form-control" type="number" name="contribution_ee" autocomplete="off" value="0" step="0.01">
						</div>
					</div>
					<div class="form-row mb-3">
						<div class="form-group col-sm-12 text-center">
							<label>Total</label>
							<input id="cTotal" class="form-control" type="number" name="total" autocomplete="off" value="0" step="0.01" readonly>
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
		var hdmfTable = $('#HDMFTable').DataTable( {
			"order": [[ 3, "asc" ]]
		});

		function showTotal() {
			var total = parseFloat($("#cER").val()) + parseFloat($("#cEE").val());
			$("#cTotal").val(total.toFixed(2));
		}
		$("#cER").change(function(e) { showTotal(); });
		$("#cEE").change(function(e) { showTotal(); });
	});
</script>
</html>