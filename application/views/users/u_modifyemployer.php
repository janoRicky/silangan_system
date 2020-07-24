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
							<?php echo $this->session->flashdata('prompts'); ?>
							<div class="mb-3">
								<h5>
									<i class="fas fa-user-alt"></i> Personal Information
								</h5>
							</div>
							<!-- Start form -->
							<form action="<?=base_url()?>UpdateEmployer" method="POST" enctype="multipart/form-data">
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
									<div class="form-group col-sm-12 col-md-2">
										<label>Address</label>
										<input class="form-control" type="text" name="Address" autocomplete="off" value="<?php echo $Address; ?>">
									</div>
								</div>
								<div class="form-row pt-5 pb-4">
									<div class="form-group mr-auto">
										<button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
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