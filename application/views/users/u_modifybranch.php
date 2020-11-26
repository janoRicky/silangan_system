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
							<!-- Start form -->
							<form action="<?=base_url()?>UpdateBranch" method="POST" enctype="multipart/form-data">
								<div class="content mt-3">
									<div class="content-body">
										<div class="cbody-header mb-3">
											<h5>
												<i class="fas fa-building"></i> Branch Information
											</h5>
										</div>
										<input type="hidden" name="M_BranchID" value="<?=$BranchID; ?>">
										<input type="hidden" name="M_BranchIcon" value="<?php echo $BranchIcon; ?>">
										<div class="form-row mb-2">
											<div class="form-group col-sm-12 image-holder">
												<?php if($this->agent->is_mobile()): ?>
													<p>
														Tap the image to change
													</p>
												<?php endif; ?>
												<input type='file' id="imgInp" name="pImage" style="display: none;">
												<img class="image-hover" id="imgPreview" src="<?php echo $BranchIcon; ?>" width="100%" height="120">
												<?php if(!$this->agent->is_mobile()): ?>
													<img class="image-text image-hidden" src="<?php echo base_url(); ?>assets/img/silangan_change_photo.png" width="100%" height="120">
												<?php endif; ?>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-12">
												<label>Choose Employer</label>
												<select class="form-control" name="EmployerID">
													<?php $GetEmployers = $this->Model_Selects->GetEmployers(); ?>
													<?php foreach ($GetEmployers->result_array() as $row): ?>
														<option value="<?=$row['EmployerID'];?>" <?php if ($EmployerID == $row["EmployerID"]) echo "selected"; ?>>
															<?=$row['LastName']; ?>, <?=$row['FirstName']; ?> <?=$row['MiddleInitial'];?>.
														</option>
													<?php endforeach ?>
												</select>
											</div>
											<div class="form-group col-sm-12 col-md-2">
												<label>Name</label>
												<input class="form-control" type="text" name="Name" autocomplete="off" value="<?php echo $Name; ?>">
											</div>
											<div class="form-group col-sm-12 col-md-2">
												<label>Address</label>
												<input class="form-control" type="text" name="Address" autocomplete="off" value="<?php echo $Address; ?>">
											</div>
											<div class="form-group col-sm-12 col-md-2">
												<label>Contact Number</label>
												<input class="form-control" type="text" name="ContactNumber" autocomplete="off" value="<?php echo $ContactNumber; ?>">
											</div>
											<div class="form-group col-sm-12 col-md-2">
												<label>Employee ID Suffix</label>
												<input class="form-control" type="text" name="EmployeeIDSuffix" autocomplete="off" value="<?php echo $EmployeeIDSuffix; ?>">
											</div>
										</div>


										<div class="cbody-header mb-3">
											<h5>
												<i class="fas fa-paint-brush"></i> Branch Colors
											</h5>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>NavbarBG</label>
												<input id="NavbarBG" class="form-control" type="color" name="brcolNavbarBG" value="<?=$brcolNavbarBG?>">
											</div>
											<div class="form-group col-sm-6">
												<label>NavbarColor</label>
												<input id="NavbarColor" class="form-control" type="color" name="brcolNavbarColor" value="<?=$brcolNavbarColor?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>MainBG</label>
												<input id="MainBG" class="form-control" type="color" name="brcolMainBG" value="<?=$brcolMainBG?>">
											</div>
											<div class="form-group col-sm-6">
												<label>Borders</label>
												<input id="Borders" class="form-control" type="color" name="brcolBorders" value="<?=$brcolBorders?>">
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
<style type="text/css">
	.image-holder {
		position: relative;
		display: block;
	}
	.image-hover:hover {
		border: 2px dotted rgba(155, 155, 155, 1.0);
		opacity: 40%;
	}
	.image-hover:hover + .image-text {
		display: block;
		position: absolute;
		top: 1%;
		object-fit: contain;
	}
	.image-text {
		display: none;
		pointer-events:none;
	}
</style>
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
		$('#imgPreview').click(function(){ $('#imgInp').trigger('click'); });
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#imgPreview').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#imgInp").change(function() {
			readURL(this);
		});
	});
</script>
</html>