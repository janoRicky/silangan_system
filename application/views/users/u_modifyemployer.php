<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="p-5">
							<!-- Start form -->
							<form action="<?=base_url()?>UpdateEmployer" method="POST" enctype="multipart/form-data">
								<div class="content mt-3">
									<div class="content-body">
										<div class="cbody-header mb-3">
											<h5>
												<i class="fas fa-user-alt"></i> Personal Information
											</h5>
										</div>
										<input type="hidden" name="M_EmployerID" value="<?php echo $EmployerID; ?>">
										<div class="form-row">
											<div class="form-group col-sm-12 col-md-2">
												<label>Last Name</label>
												<input class="form-control" type="text" name="LastName" autocomplete="off" value="<?php echo $LastName; ?>">
											</div>
											<div class="form-group col-sm-12 col-md-2">
												<label>First Name</label>
												<input class="form-control" type="text" name="FirstName" autocomplete="off" value="<?php echo $FirstName; ?>">
											</div>
											<div class="form-group col-sm-12 col-md-2">
												<label>Middle Initial</label>
												<input class="form-control" type="text" name="MiddleInitial" autocomplete="off" value="<?php echo $MiddleInitial; ?>">
											</div>
											<div class="form-group col-sm-12 col-md-2">
												<label>Contact Number</label>
												<input class="form-control" type="text" name="ContactNumber" autocomplete="off" value="<?php echo $ContactNumber; ?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-12 col-md-4">
												<label>Area</label>
												<input class="form-control" type="text" name="Area" autocomplete="off" value="<?php echo $Area; ?>">
											</div>
											<div class="form-group col-sm-12 col-md-4">
												<label>Address</label>
												<input class="form-control" type="text" name="Address" autocomplete="off" value="<?php echo $Address; ?>">
											</div>
										</div>
										<div class="form-row pt-5 pb-4">
											<div class="form-group ml-auto">
												<button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
											</div>
										</div>
									</div>
								</div>
							</form>
							<!-- End Form -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<?php $this->load->view('_template/users/u_scripts'); ?>
<script type="text/javascript">
	$(document).ready(function () {
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
	});
</script>
</html>