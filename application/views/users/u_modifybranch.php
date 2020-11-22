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
													<img class="image-text image-hidden" src="<?php echo base_url(); ?>assets/img/silangan_change_photo.png" width="120" height="120">
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
											<div class="form-group col-sm-4">
												<label>NavbarBG</label>
												<input id="NavbarBG" class="form-control" type="color" name="brcolNavbarBG" value="<?=$brcolNavbarBG?>">
											</div>
											<div class="form-group col-sm-4">
												<label>NavbarColor</label>
												<input id="NavbarColor" class="form-control" type="color" name="brcolNavbarColor" value="<?=$brcolNavbarColor?>">
											</div>
											<div class="form-group col-sm-4">
												<label>NavbarBorder</label>
												<input id="NavbarBorder" class="form-control" type="color" name="brcolNavbarBorder" value="<?=$brcolNavbarBorder?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>NavbarSideBG</label>
												<input id="NavbarSideBG" class="form-control" type="color" name="brcolNavbarSideBG" value="<?=$brcolNavbarSideBG?>">
											</div>
											<div class="form-group col-sm-6">
												<label>NavbarSideBorder</label>
												<input id="NavbarSideBorder" class="form-control" type="color" name="brcolNavbarSideBorder" value="<?=$brcolNavbarSideBorder?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>SidebarBG</label>
												<input id="SidebarBG" class="form-control" type="color" name="brcolSidebarBG" value="<?=$brcolSidebarBG?>">
											</div>
											<div class="form-group col-sm-6">
												<label>SidebarBorder</label>
												<input id="SidebarBorder" class="form-control" type="color" name="brcolSidebarBorder" value="<?=$brcolSidebarBorder?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4">
												<label>SideLinkBG</label>
												<input id="SideLinkBG" class="form-control" type="color" name="brcolSideLinkBG" value="<?=$brcolSideLinkBG?>">
											</div>
											<div class="form-group col-sm-4">
												<label>SideLinkColor</label>
												<input id="SideLinkColor" class="form-control" type="color" name="brcolSideLinkColor" value="<?=$brcolSideLinkColor?>">
											</div>
											<div class="form-group col-sm-4">
												<label>SideLinkBorder</label>
												<input id="SideLinkBorder" class="form-control" type="color" name="brcolSideLinkBorder" value="<?=$brcolSideLinkBorder?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-12">
												<label>MainBG</label>
												<input id="MainBG" class="form-control" type="color" name="brcolMainBG" value="<?=$brcolMainBG?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>WindowsBG</label>
												<input id="WindowsBG" class="form-control" type="color" name="brcolWindowsBG" value="<?=$brcolWindowsBG?>">
											</div>
											<div class="form-group col-sm-6">
												<label>WindowsBorder</label>
												<input id="WindowsBorder" class="form-control" type="color" name="brcolWindowsBorder" value="<?=$brcolWindowsBorder?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4">
												<label>TableBG</label>
												<input id="TableBG" class="form-control" type="color" name="brcolTableBG" value="<?=$brcolTableBG?>">
											</div>
											<div class="form-group col-sm-4">
												<label>TableColor</label>
												<input id="TableColor" class="form-control" type="color" name="brcolTableColor" value="<?=$brcolTableColor?>">
											</div>
											<div class="form-group col-sm-4">
												<label>TableBorder</label>
												<input id="TableBorder" class="form-control" type="color" name="brcolTableBorder" value="<?=$brcolTableBorder?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-3">
												<label>TabsBG</label>
												<input id="TabsBG" class="form-control" type="color" name="brcolTabsBG" value="<?=$brcolTabsBG?>">
											</div>
											<div class="form-group col-sm-3">
												<label>TabsLinkColor</label>
												<input id="TabsLinkColor" class="form-control" type="color" name="brcolTabsLinkColor" value="<?=$brcolTabsLinkColor?>">
											</div>
											<div class="form-group col-sm-3">
												<label>TabsActiveColor</label>
												<input id="TabsActiveColor" class="form-control" type="color" name="brcolTabsActiveColor" value="<?=$brcolTabsActiveColor?>">
											</div>
											<div class="form-group col-sm-3">
												<label>TabsBorder</label>
												<input id="TabsBorder" class="form-control" type="color" name="brcolTabsBorder" value="<?=$brcolTabsBorder?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-3">
												<label>ButtonBG</label>
												<input id="ButtonBG" class="form-control" type="color" name="brcolButtonBG" value="<?=$brcolButtonBG?>">
											</div>
											<div class="form-group col-sm-3">
												<label>ButtonColor</label>
												<input id="ButtonColor" class="form-control" type="color" name="brcolButtonColor" value="<?=$brcolButtonColor?>">
											</div>
											<div class="form-group col-sm-3">
												<label>ButtonBorder</label>
												<input id="ButtonBorder" class="form-control" type="color" name="brcolButtonBorder" value="<?=$brcolButtonBorder?>">
											</div>
											<div class="form-group col-sm-3">
												<label>ButtonHover</label>
												<input id="ButtonHover" class="form-control" type="color" name="brcolButtonHover" value="<?=$brcolButtonHover?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>ProgressRemaining</label>
												<input id="ProgressRemaining" class="form-control" type="color" name="brcolProgressRemaining" value="<?=$brcolProgressRemaining?>">
											</div>
											<div class="form-group col-sm-6">
												<label>ProgressBar</label>
												<input id="ProgressBar" class="form-control" type="color" name="brcolProgressBar" value="<?=$brcolProgressBar?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-6">
												<label>PageNoBG</label>
												<input id="PageNoBG" class="form-control" type="color" name="brcolPageNoBG" value="<?=$brcolPageNoBG?>">
											</div>
											<div class="form-group col-sm-6">
												<label>PageNoColor</label>
												<input id="PageNoColor" class="form-control" type="color" name="brcolPageNoColor" value="<?=$brcolPageNoColor?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4">
												<label>PageNoActiveBG</label>
												<input id="PageNoActiveBG" class="form-control" type="color" name="brcolPageNoActiveBG" value="<?=$brcolPageNoActiveBG?>">
											</div>
											<div class="form-group col-sm-4">
												<label>PageNoActiveColor</label>
												<input id="PageNoActiveColor" class="form-control" type="color" name="brcolPageNoActiveColor" value="<?=$brcolPageNoActiveColor?>">
											</div>
											<div class="form-group col-sm-4">
												<label>PageNoActiveBorder</label>
												<input id="PageNoActiveBorder" class="form-control" type="color" name="brcolPageNoActiveBorder" value="<?=$brcolPageNoActiveBorder?>">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-12">
												<label>HeadColor</label>
												<input id="HeadColor" class="form-control" type="color" name="brcolHeadColor" value="<?=$brcolHeadColor?>">
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
	}
	.image-hover:hover + .image-text {
		display: block;
		position: absolute;
		top: 1%;
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