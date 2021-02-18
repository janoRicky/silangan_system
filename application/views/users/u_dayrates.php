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
						<div class="col-sm-12 PrintPageName PrintOut mb-3">
							<h4>
								<i class="fas fa-building fa-fw"></i> Rate Settings
							</h4>
						</div>
						<style type="text/css">
							.rCards
							{
								/*border: 1px solid #686868;*/
								border-radius: 1px;
								color: #454545;
								background-color: #DCDCDC;
								-webkit-box-shadow: 0px 0px 26px -12px rgba(0,0,0,0.1);
								-moz-box-shadow: 0px 0px 26px -12px rgba(0,0,0,0.1);
								box-shadow: 0px 0px 26px -12px rgba(0,0,0,0.1);
							}
							.smEX
							{
								color: #464646;
							}
						</style>
						
						<?php if ($get_drates->num_rows() > 0) { ?>
							<?php foreach ($get_drates->result_array() as $row) { ?>
								
								<div class="col-sm-12 col-md-3 d-inline mt-5">
									<?php echo form_open(base_url().'update_drates','method="post"'); ?>
									<div class="rCards p-4" style="background-color: <?php echo $row['bg_color'];?>;">
										<div class="form-row">
											<div class="form-group col-sm-12">
												<h5>
													<i class="fas fa-calendar-day fa-fw"></i> <?php echo $row['rate_title'];?>
												</h5>
											</div>
											<input type="hidden" name="id" value="<?php echo $row['id'];?>">
											<div class="form-group col">
												<label for="NOvertime">
													Non-Night Shift
												</label>
												<input id="NOvertime" class="form-control" type="text" name="day_shift" value="<?php echo $row['day_shift'];?>">
												<small class="smEX">Per hr (50) x <?php echo $row['day_shift'];?> = <?php echo 50 * $row['day_shift'];?></small>
											</div>
											<div class="form-group col">
												<label for="NsOvertime">
													Night Shift
												</label>
												<input id="NsOvertime" class="form-control" type="text" name="night_shift" value="<?php echo $row['night_shift'];?>">
												<small class="smEX">Per hr (50) x <?php echo $row['night_shift'];?> = <?php echo 50 * $row['night_shift'];?></small>
											</div>
											<div class="form-group col-sm-12">
												<input type="hidden" name="update_ot" value="yes">
												<button class="btn btn-primary" type="submit">
													<i class="far fa-edit f-w"></i> Update
												</button>
											</div>
										</div>
									</div>
									<?php echo form_close(); ?>
								</div>
								
							<?php } ?>
						<?php } else { ?>
							<h5>
								No data
							</h5>
						<?php } ?>
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
	});
</script>
<script type="text/javascript">
	<?php if ($this->session->flashdata('prompt_status') == 'Please input valid value!') { ?>
		toastr.options = {
			"closeButton": true,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-bottom-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "1000",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		toastr.warning('<?php print $this->session->flashdata('prompt_status');?>');
	<?php } ?>
	<?php if ($this->session->flashdata('prompt_status') == 'Rate updated') { ?>
		toastr.options = {
			"closeButton": true,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-bottom-right",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "1000",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		toastr.success('<?php print $this->session->flashdata('prompt_status');?>');
	<?php } ?>
</script>
</html>