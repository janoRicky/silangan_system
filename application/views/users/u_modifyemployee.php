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
							<form action="<?=base_url()?>UpdateEmployee" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="M_ApplicantID" value="<?php echo $ApplicantID; ?>"> 
								<input type="hidden" name="M_ApplicantImage" value="<?php echo $ApplicantImage; ?>"> 
								<div class="form-row mb-2">
									<div class="form-group col-sm-12 image-holder">
										<?php if($this->agent->is_mobile()): ?>
											<p>
												Tap the image to change
											</p>
										<?php endif; ?>
										<input type='file' id="imgInp" name="pImage" style="display: none;">
										<img class="image-hover" id="blah" src="<?php echo $ApplicantImage; ?>" width="120" height="120">
										<?php if(!$this->agent->is_mobile()): ?>
											<img class="image-text image-hidden" src="<?php echo base_url(); ?>assets/img/silangan_change_photo.png" width="120" height="120">
										<?php endif; ?>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-2">
										<label>Position</label>
										<input class="form-control" type="text" name="PositionDesired" autocomplete="off" value="<?php echo $PositionDesired; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Employed Date</label>
										<input class="form-control" type="date" name="AppliedOn" value="<?php echo $AppliedOn; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Person Recommending</label>
										<input class="form-control" type="text" name="PersonRecommending" autocomplete="off" value="<?php echo $PersonRecommending; ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-2">
										<label>Contract Type</label>
										<select class="form-control" name="ContractType">
											<option value="Contractual" <?php if ($ContractType == 'Contractual') {
												echo 'selected=""';
											} ?>>
												Contractual
											</option>
											<option value="Irregular" <?php if ($ContractType == 'Irregular') {
												echo 'selected=""';
											} ?>>
												Irregular
											</option>
											<option value="Others" <?php if ($ContractType == 'Others') {
												echo 'selected=""';
											} ?>>
												Others
											</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Salary Type</label>
										<select class="form-control" name="SalaryType">
											<option value="Weekly" <?php if ($SalaryType == 'Weekly') {
												echo 'selected=""';
											} ?>>
												Weekly
											</option>
											<option value="Monthly" <?php if ($SalaryType == 'Monthly') {
												echo 'selected=""';
											} ?>>
												Monthly
											</option>
											<option value="Semi-Monthly" <?php if ($SalaryType == 'Semi-Monthly') {
												echo 'selected=""';
											} ?>>
												Semi-Monthly
											</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Rate</label>
										<input class="form-control" type="text" name="Rate" autocomplete="off" value="<?php echo $Rate; ?>">
									</div>
									<!-- <?php if($Status == 'Employed'): ?>
									<div class="form-group col-sm-12 col-md-2">
										<label>Salary</label>
										<input class="form-control" type="text" name="SalaryExpected" autocomplete="off" value="<?php echo $SalaryExpected; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Employee ID</label>
										<input class="form-control" type="text" name="EmployeeID" autocomplete="off" value="<?php echo $EmployeeID; ?>">
									</div>
									<?php endif; ?> -->
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-4">
										<label>Last Name</label>
										<input class="form-control" type="text" name="LastName" autocomplete="off" value="<?php echo $LastName; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>First Name</label>
										<input class="form-control" type="text" name="FirstName" autocomplete="off" value="<?php echo $FirstName; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Middle Initial</label>
										<input class="form-control" type="text" name="MI" autocomplete="off" value="<?php echo $MiddleInitial; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Nickname</label>
										<input class="form-control" type="text" name="Nickname" autocomplete="off" value="<?php echo $Nickname; ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-2">
										<label>Gender</label>
										<select class="form-control" name="Gender">
											<option value="Male" <?php if ($Gender == 'Male') {
												echo 'selected=""';
											} ?>>
												Male
											</option>
											<option value="Female" <?php if ($Gender == 'Female') {
												echo 'selected=""';
											} ?>>
												Female
											</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-1">
										<label>Age</label>
										<input class="form-control" type="number" name="Age" autocomplete="off" value="<?php echo $Age; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-1">
										<label>Height</label>
										<input class="form-control" type="text" name="Height" autocomplete="off" value="<?php echo $Height; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-1">
										<label>Weight</label>
										<input class="form-control" type="text" name="Weight" autocomplete="off" value="<?php echo $Weight; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Religion</label>
										<input class="form-control" type="text" name="Religion" autocomplete="off" value="<?php echo $Religion; ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-2">
										<label>Birth Date</label>
										<input class="form-control" type="date" name="bDate" value="<?php echo $BirthDate; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-5">
										<label>Birth Place</label>
										<input class="form-control" type="text" name="bPlace" autocomplete="off" value="<?php echo $BirthPlace; ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-3">
										<label>Mother's Name</label>
										<input class="form-control" type="text" name="MotherName" autocomplete="off" value="<?php echo $MotherName; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-3">
										<label>Occupation</label>
										<input class="form-control" type="text" name="MotherOccupation" autocomplete="off" value="<?php echo $MotherOccupation; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-3">
										<label>Mother's Name</label>
										<input class="form-control" type="text" name="FatherName" autocomplete="off" value="<?php echo $FatherName; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-3">
										<label>Occupation</label>
										<input class="form-control" type="text" name="FatherOccupation" autocomplete="off" value="<?php echo $FatherOccupation; ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-4">
										<label>Citizenship</label>
										<input class="form-control" type="text" name="Citizenship" autocomplete="off" value="<?php echo $Citizenship; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Civil Status</label>
										<select class="form-control" name="CivilStatus">
											<option value="Single" <?php if ($CivilStatus == 'Single') {
												echo 'selected=""';
											} ?>>
												Single
											</option>
											<option value="Married" <?php if ($CivilStatus == 'Married') {
												echo 'selected=""';
											} ?>>
												Married
											</option>
											<option value="Widowed" <?php if ($CivilStatus == 'Widowed') {
												echo 'selected=""';
											} ?>>
												Widowed
											</option>
											<option value="Divorced" <?php if ($CivilStatus == 'Divorced') {
												echo 'selected=""';
											} ?>>
												Divorced
											</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Name of Spouse</label>
										<input class="form-control" type="text" name="SpouseName" autocomplete="off" value="<?php echo $SpouseName; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>No. of Children</label>
										<input class="form-control" type="number" name="No_Children" autocomplete="off" value="<?php echo $No_OfChildren; ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-4">
										<label>Phone Number</label>
										<input class="form-control" type="text" name="PhoneNumber" autocomplete="off" value="<?php echo $Phone_No; ?>">
									</div>
								</div>
								<div class="mt-5 mb-4">
									<h5>
										<i class="fas fa-user-alt"></i> Documents
									</h5>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-lg-3">
										<label>S.S.S. #</label>
										<input class="form-control" type="text" name="SSS" autocomplete="off" value="<?php echo $SSS_No; ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>Effective Date of Coverage</label>
										<input class="form-control" type="date" name="SSS_Effective" value="<?php echo $EffectiveDateCoverage; ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>Residence Certificate No.</label>
										<input class="form-control" type="text" name="RCN" autocomplete="off" value="<?php echo $ResidenceCertificateNo; ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>Tax Identification No.</label>
										<input class="form-control" type="text" name="TIN" autocomplete="off" value="<?php echo $TIN; ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-lg-3">
										<label>HDMF</label>
										<input class="form-control" type="text" name="HDMF" autocomplete="off" value="<?php echo $HDMF; ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>PHILHEALTH</label>
										<input class="form-control" type="text" name="PhilHealth" autocomplete="off" value="<?php echo $PhilHealth; ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>ATM #</label>
										<input class="form-control" type="text" name="ATM_No" autocomplete="off" value="<?php echo $ATM_No; ?>">
									</div>
								</div>
								<div class="mt-5 mb-4">
									<h5>
										<i class="fas fa-user-alt"></i> Addresses
									</h5>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-4">
										<label>Present</label>
										<input class="form-control" type="text" name="Address_Present" autocomplete="off" value="<?php echo $Address_Present; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Provincial</label>
										<input class="form-control" type="text" name="Address_Provincial" autocomplete="off" value="<?php echo $Address_Provincial; ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Manila</label>
										<input class="form-control" type="text" name="Address_Manila" autocomplete="off" value="<?php echo $Address_Manila; ?>">
									</div>
								</div>
								<div class="form-row pb-5 pt-5">
									<div class="pb-3">
										<h5><i class="fas fa-stream"></i> Academic History</h5>
									</div>
									<div class="col-sm-12">
										<div class="table-responsive">
											<table class="table table-condensed">
												<thead>
													<th>Level</th>
													<th>School Name</th>
													<th>School Address</th>
													<th>From Year</th>
													<th>To Year</th>
													<th>Highest Degree / Certificate Attained</th>
													<th class="text-center">Remove</th>
												</thead>
												<tbody>
													<?php if ($GetAcadHistory->num_rows() > 0) { ?>
														<?php foreach ($GetAcadHistory->result_array() as $row): ?>
															<?php if ($ApplicantID == $row['ApplicantID']) { ?>
																<tr>
																	<td><?php echo $row['Level'];?></td>
																	<td><?php echo $row['SchoolName'];?></td>
																	<td><?php echo $row['SchoolAddress'];?></td>
																	<td><?php echo $row['DateStarted'];?></td>
																	<td><?php echo $row['DateEnds'];?></td>
																	<td><?php echo $row['HighDegree'];?></td>
																	<td class="text-center"><input type="checkbox" name="AcadHCheckbox[]" value="<?php echo $row['Acad_No']; ?>"></td>
																</tr>
															<?php } ?>
														<?php endforeach ?>
													<?php } else { ?>
														<tr class="w-100 text-center">
															<td colspan="7">
																<h5>
																	No Data
																</h5>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
									<div id="AcadHsssistory" class="" style="width: 100%;">
										
									</div>
								</div>
								<div class="form-row pb-5">
									<div class="pb-3">
										<h5><i class="fas fa-stream"></i> Employment Record</h5>
									</div>
									<div class="col-sm-12">
										<div class="table-responsive">
											<table class="table table-condensed">
												<thead>
													<th>Name</th>
													<th>Address</th>
													<th>Period Covered</th>
													<th>Position</th>
													<th>Salary</th>
													<th>Cause of Separation</th>
													<th class="text-center">Remove</th>
												</thead>
												<tbody>
													<?php if ($employment_record->num_rows() > 0) { ?>
														<?php foreach ($employment_record->result_array() as $row): ?>
															<?php if ($ApplicantID == $row['ApplicantID']) { ?>
																<tr>
																	<td><?php echo $row['Name'];?></td>
																	<td><?php echo $row['Address'];?></td>
																	<td><?php echo $row['PeriodCovered'];?></td>
																	<td><?php echo $row['Position'];?></td>
																	<td><?php echo $row['Salary'];?></td>
																	<td><?php echo $row['CauseOfSeparation'];?></td>
																	<td class="text-center"><input type="checkbox" name="EmpRecordCheckbox[]" value="<?php echo $row['No']; ?>"></td>
																</tr>
															<?php } ?>
														<?php endforeach ?>
													<?php } else { ?>
														<tr class="w-100 text-center">
															<td colspan="7">
																<h5>
																	No Data
																</h5>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
									<div id="empskills" class="" style="width: 100%;">
										
									</div>
								</div>
								
								<div class="form-row pb-5 pt-5">
									<div class="pb-3">
										<h5><i class="fas fa-stream"></i> Character References</h5>
									</div>
									<div class="col-sm-12">
										<div class="table-responsive">
											<table class="table table-condensed">
												<thead>
													<th>Name</th>
													<th>Position</th>
													<th>Company / Address</th>
													<th class="text-center">Remove</th>
												</thead>
												<tbody>
													<?php if ($GetCharRef->num_rows() > 0) { ?>
														<?php foreach ($GetCharRef->result_array() as $row): ?>
															<?php if ($ApplicantID == $row['ApplicantID']) { ?>
																<tr>
																	<td><?php echo $row['RefName'];?></td>
																	<td><?php echo $row['RefPosition'];?></td>
																	<td><?php echo $row['CompanyAddress'];?></td>
																	<td class="text-center"><input type="checkbox" name="CharRefCheckbox[]" value="<?php echo $row['Char_Ref_No']; ?>"></td>
																</tr>
															<?php } ?>
														<?php endforeach ?>
													<?php } else { ?>
														<tr class="w-100 text-center">
															<td colspan="7">
																<h5>
																	No Data
																</h5>
															</td>
														</tr>
													<?php } ?>
												</tbody>
											</table>
										</div>
									</div>
									<div id="charRefs" class="" style="width: 100%;">
										
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

	<!-- Modal -->
	<div class="modal fade" id="acadFields" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Academic Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="Main_Controller/AddtoAcadCart" method="post">
						<div class="form-row">
							<div class="form-group">
								<select id="SchoolLevel" class="form-control" name="SchoolLevel">
									<option hidden="" disabled="" selected="">
										Choose Level
									</option>
									<option>
										High School
									</option>
									<option>
										College
									</option>
									<option>
										Other courses / Special Training
									</option>
								</select>
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>School Name</label>
								<input id="SchoolName" class="form-control" type="text" name="SchoolName">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>School Address</label>
								<input id="SchoolAddress" class="form-control" type="text" name="SchoolAddress">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12 col-md-6 m-auto">
								<input id="FromYearSchool" class="form-control" type="text" name="FromYearSchool" placeholder="From year" maxlength="4">
							</div>
							<div class="form-group col-sm-12 col-md-6 m-auto">
								<input id="ToYearSchool" class="form-control" type="text" name="ToYearSchool" placeholder="To year" maxlength="4">
							</div>
						</div>
						<div class="form-row mt-3">
							<div class="form-group col-sm-12 m-auto">
								<label>Highest Degree / Certificate Attained</label>
								<input id="H_Attained" class="form-control" type="text" name="H_Attained">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button id="add_sssscc" type="submit" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><i class="fas fa-plus"></i> Add</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="skillsFields" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Employment Details</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-row">
							<div class="form-group col-sm-12 col-md-6">
								<label>Employeer Name</label>
								<input id="EmployeerName" class="form-control" type="text" name="">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>Address</label>
								<input id="emAddress" class="form-control" type="text" name="SchoolName">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12 col-md-6 m-auto">
								<label>Period Covered</label>
								<input id="PeriodCovered" class="form-control" type="text" name="FromYearSchool">
							</div>
							<div class="form-group col-sm-12 col-md-6 m-auto">
								<label> Position</label>
								<input id="Position" class="form-control" type="text" name="ToYearSchool">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12 col-md-6 m-auto">
								<label>Salary</label>
								<input id="Salary" class="form-control" type="text" name="FromYearSchool">
							</div>
							<div class="form-group col-sm-12 col-md-6 m-auto">
								<label> Cause of separation</label>
								<input id="cos" class="form-control" type="text" name="ToYearSchool">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button id="add_empdet" type="submit" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><i class="fas fa-plus"></i> Add</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="refFields" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Character References</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-row">
							<div class="form-group col-sm-8">
								<label>Name</label>
								<input id="RefName" class="form-control" type="text" name="RefName">
							</div>
							<div class="form-group col-sm-4">
								<label>Position</label>
								<input id="RefPosition" class="form-control" type="text" name="RefPosition">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group col-sm-12">
								<label>Company / Address</label>
								<input id="CompanyAddress" class="form-control" type="text" name="CompanyAddress">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button id="add_charRef" type="submit" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><i class="fas fa-plus"></i> Add</button>
				</div>
			</div>
		</div>
	</div>
</body>
<style type="text/css">
	.in-beni:focus { box-shadow: none; }
	.btn-tr { background-color: transparent; border: none; }
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
		$('#blah').click(function(){ $('#imgInp').trigger('click'); });
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#blah').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#imgInp").change(function() {
			readURL(this);
		});
		// Cart Academic History
		$('#add_sssscc').click(function(){

			var SchoolLevel = $('#SchoolLevel').val();
			var SchoolName = $('#SchoolName').val();
			var SchoolAddress = $('#SchoolAddress').val();
			
			var FromYearSchool = $('#FromYearSchool').val();
			var ToYearSchool = $('#ToYearSchool').val();
			var H_Attained = $('#H_Attained').val();
			

			$.ajax({
				url : "<?php echo site_url('Main_Controller/add_to_cart');?>",
				method : "POST",
				data : {SchoolLevel: SchoolLevel, SchoolName: SchoolName,SchoolAddress: SchoolAddress, FromYearSchool: FromYearSchool, ToYearSchool: ToYearSchool,H_Attained: H_Attained},
				success: function(data){
					$('#SchoolLevel option:selected').index();
					$('#SchoolName').val("");
					$('#FromYearSchool').val("");
					$('#ToYearSchool').val("");
					$('#AcadHsssistory').load("<?php echo site_url('Main_Controller/showAcad');?>");
				}
			});
		});
		$(document).on('click','.remoach',function(){
			var row_id = $(this).attr("id");
            // alert(row_id);
            $.ajax({
            	url : "<?php echo site_url('Main_Controller/removeAcad');?>",
            	method : "POST",
            	data : {row_id : row_id},
            	success :function(data){
            		$('#AcadHsssistory').load("<?php echo site_url('Main_Controller/showAcad');?>");
            	}
            });
        });
		$('#AcadHsssistory').load("<?php echo site_url('Main_Controller/showAcad');?>");

		// ADD EMPLOYMENT DETAILS
		$('#add_empdet').click(function(){

			var EmployeerName = $('#EmployeerName').val();
			var emAddress = $('#emAddress').val();
			var PeriodCovered = $('#PeriodCovered').val();
			
			var Position = $('#Position').val();
			var Salary = $('#Salary').val();
			var cos = $('#cos').val();
			

			$.ajax({
				url : "<?php echo site_url('Main_Controller/add_toemp');?>",
				method : "POST",
				data : {EmployeerName: EmployeerName, emAddress: emAddress,PeriodCovered: PeriodCovered, Position: Position, Salary: Salary,cos: cos},
				success: function(data){
					$('#empskills').load("<?php echo site_url('Main_Controller/showSkills');?>");
				}
			});
		});
		$(document).on('click','.remoaemop',function(){
			var row_id = $(this).attr("id");
            // alert(row_id);
            $.ajax({
            	url : "<?php echo site_url('Main_Controller/removeemp');?>",
            	method : "POST",
            	data : {row_id : row_id},
            	success :function(data){
            		$('#empskills').load("<?php echo site_url('Main_Controller/showSkills');?>");
            	}
            });
        });
		$('#empskills').load("<?php echo site_url('Main_Controller/showSkills');?>");


		// Cart Character References
		$('#add_charRef').click(function(){

			var RefName = $('#RefName').val();
			var RefPosition = $('#RefPosition').val();
			var CompanyAddress = $('#CompanyAddress').val();
			

			$.ajax({
				url : "<?php echo site_url('Main_Controller/atcRef');?>",
				method : "POST",
				data : {RefName: RefName, RefPosition: RefPosition, CompanyAddress: CompanyAddress},
				success: function(data){
					$('#RefName').val("");
					$('#RefPosition').val("");
					$('#CompanyAddress').val("");
					$('#charRefs').load("<?php echo site_url('Main_Controller/showRef');?>");
				}
			});
		});
		$(document).on('click','.remoach',function(){
			var row_id = $(this).attr("id");
            $.ajax({
            	url : "<?php echo site_url('Main_Controller/removeRef');?>",
            	method : "POST",
            	data : {row_id : row_id},
            	success :function(data){
            		$('#charRefs').load("<?php echo site_url('Main_Controller/showRef');?>");
            	}
            });
        });
		$('#charRefs').load("<?php echo site_url('Main_Controller/showRef');?>");
	});
</script>
</html>