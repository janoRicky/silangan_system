<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="row">
					<div class="col-sm-12">
						<div class="col-sm-12 text-right">
							<button id="DebugFill" type="button" class="btn btn-primary"><i class="fas fa-vial"></i> Debug Fill</button>
						</div>
						<div class="p-5">
							<?php echo $this->session->flashdata('prompts'); ?>
							<div class="mb-3">
								<h5>
									<i class="fas fa-user-alt"></i> Personal Information
								</h5>
							</div>
							<!-- Start form -->
							<form action="<?=base_url()?>addNewEmployee" method="POST" enctype="multipart/form-data">
								<input id="pImageChecker" type="hidden" name="pImageChecker">

								<!-- 
									
									Person Recommending
									Nickname
									Father, Occupation
									Mother, Occupation
									Name of Spouse, if married

									Have you been to manila before
									Do you have relatives in Manila
									Please give the name, address and your relation
									
									Character references - multiple

									Have you been convicted for violating any law, decree, ordinance, or regulations in any court or tribunal, if yes give particulars

									Convictions for violations of any law, decree, ordinance, or regulations in any court or tribunal

									Have you been convicted for any breach of infraction by a military, tribunal, or authority or found guilty of any administrative offense, if yes give particulars

									Convictions for any breach of infraction by a military, tribunal, or authority, or found guilty of any administrative offense


									Willing to render overtime work when required any time,yesno
									Willing to be assigned to other place during your employment with the company,yesno

								 -->

								<div class="form-row mb-2">
									<div class="form-group col-sm-12">
										<input type='file' id="imgInp" name="pImage" style="display: none;">
										<?php if(!$this->agent->is_mobile()): ?>
											<img class="image-hover" id="blah" src="<?php echo base_url() ?>assets/img/silangan_default_photo.png" width="120" height="120">
										<?php else: ?>
											<img class="image-hover" id="blah" src="<?php echo base_url() ?>assets/img/silangan_default_photo_mobile.png" width="120" height="120">
										<?php endif; ?>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-2">
										<label>Position</label>
										<input class="form-control" type="text" name="PositionDesired" autocomplete="off" value="<?php echo $this->session->flashdata('PositionDesired'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Employed Date</label>
										<input class="form-control" type="date" name="AppliedOn" autocomplete="off" value="<?php if ($this->session->flashdata('AppliedOn')) { echo $this->session->flashdata('AppliedOn'); } else { echo date('Y-m-d'); } ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Person Recommending</label>
										<input class="form-control" type="text" name="PersonRecommending" autocomplete="off" value="<?php echo $this->session->flashdata('PersonRecommending'); ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-4">
										<label>Willing to render overtime work</label>
										<div class="radio form-control">
											<label class="radio-inline">
												<input type="radio" name="Overtime" value="Yes" <?php if ($this->session->flashdata('Overtime') == 'Yes') echo 'checked'; ?>> Yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="Overtime" value="No" <?php if ($this->session->flashdata('Overtime') == 'No') echo 'checked'; ?>> No
											</label>
										</div>
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Willing to be assigned to other places</label>
										<div class="radio form-control">
											<label class="radio-inline">
												<input type="radio" name="Reassignment" value="Yes" <?php if ($this->session->flashdata('Reassignment') == 'Yes') echo 'checked'; ?>> Yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="Reassignment" value="No" <?php if ($this->session->flashdata('Reassignment') == 'No') echo 'checked'; ?>> No
											</label>
										</div>
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-2">
										<label>Contract Type</label>
										<select class="form-control" name="ContractType">
											<option value="Contractual" <?php if ($this->session->flashdata('ContractType') == 'Contractual') {
												echo 'selected=""';
											} ?>>
												Contractual
											</option>
											<option value="Irregular" <?php if ($this->session->flashdata('ContractType') == 'Irregular') {
												echo 'selected=""';
											} ?>>
												Irregular
											</option>
											<option value="Others" <?php if ($this->session->flashdata('ContractType') == 'Others') {
												echo 'selected=""';
											} ?>>
												Others
											</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Salary Type</label>
										<select class="form-control" name="SalaryType">
											<option value="Weekly" <?php if ($this->session->flashdata('SalaryType') == 'Weekly') {
												echo 'selected=""';
											} ?>>
												Weekly
											</option>
											<option value="SemiMonthly" <?php if ($this->session->flashdata('SalaryType') == 'SemiMonthly') {
												echo 'selected=""';
											} ?>>
												Semi-Monthly
											</option>
											<option value="Monthly" <?php if ($this->session->flashdata('SalaryType') == 'Monthly') {
												echo 'selected=""';
											} ?>>
												Monthly
											</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Rate</label>
										<input class="form-control" type="number" name="Rate" autocomplete="off" value="<?php echo $this->session->flashdata('Rate'); ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-3">
										<label>Last Name</label>
										<input class="form-control" type="text" name="LastName" autocomplete="off" value="<?php echo $this->session->flashdata('LastName'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>First Name</label>
										<input class="form-control" type="text" name="FirstName" autocomplete="off" value="<?php echo $this->session->flashdata('FirstName'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Middle Initial</label>
										<input class="form-control" type="text" name="MI" autocomplete="off" value="<?php echo $this->session->flashdata('MI'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Nickname</label>
										<input class="form-control" type="text" name="Nickname" autocomplete="off" value="<?php echo $this->session->flashdata('Nickname'); ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-2">
										<label>Gender</label>
										<select class="form-control" name="Gender">
											<option value="Male" <?php if ($this->session->flashdata('Gender') == 'Male') {
												echo 'selected=""';
											} ?>>
												Male
											</option>
											<option value="Female" <?php if ($this->session->flashdata('Gender') == 'Female') {
												echo 'selected=""';
											} ?>>
												Female
											</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-1">
										<label>Age</label>
										<input class="form-control" type="number" name="Age" autocomplete="off" value="<?php echo $this->session->flashdata('Age'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-1">
										<label>Height</label>
										<input class="form-control" type="text" name="Height" autocomplete="off" value="<?php echo $this->session->flashdata('Height'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-1">
										<label>Weight</label>
										<input class="form-control" type="text" name="Weight" autocomplete="off" value="<?php echo $this->session->flashdata('Weight'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>Religion</label>
										<input class="form-control" type="text" name="Religion" autocomplete="off" value="<?php echo $this->session->flashdata('Religion'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Citizenship</label>
										<input class="form-control" type="text" name="Citizenship" autocomplete="off" value="<?php echo $this->session->flashdata('Citizenship'); ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-2">
										<label>Birth Date</label>
										<input class="form-control" type="date" name="bDate" value="<?php echo $this->session->flashdata('bDate'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-5">
										<label>Birth Place</label>
										<input class="form-control" type="text" name="bPlace" autocomplete="off" value="<?php echo $this->session->flashdata('bPlace'); ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-2">
										<label>Civil Status</label>
										<select class="form-control" name="CivilStatus">
											<option value="Single" <?php if ($this->session->flashdata('CivilStatus') == 'Single') {
												echo 'selected=""';
											} ?>>
												Single
											</option>
											<option value="Married" <?php if ($this->session->flashdata('CivilStatus') == 'Married') {
												echo 'selected=""';
											} ?>>
												Married
											</option>
											<option value="Widowed" <?php if ($this->session->flashdata('CivilStatus') == 'Widowed') {
												echo 'selected=""';
											} ?>>
												Widowed
											</option>
											<option value="Divorced" <?php if ($this->session->flashdata('CivilStatus') == 'Divorced') {
												echo 'selected=""';
											} ?>>
												Divorced
											</option>
										</select>
									</div>
									<div class="form-group col-sm-12 col-md-3">
										<label>Name of Spouse</label>
										<input class="form-control" type="text" name="SpouseName" autocomplete="off" value="<?php echo $this->session->flashdata('SpouseName'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-2">
										<label>No. of Children</label>
										<input class="form-control" type="number" name="No_Children" autocomplete="off" value="<?php echo $this->session->flashdata('No_Children'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Contact Number</label>
										<input class="form-control" type="text" name="PhoneNumber" autocomplete="off" value="<?php echo $this->session->flashdata('PhoneNumber'); ?>">
									</div>
								</div>
								<div class="mt-5 mb-4">
									<h5>
										<i class="fas fa-user-alt"></i> Relatives
									</h5>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-3">
										<label>Mother's Name</label>
										<input class="form-control" type="text" name="MotherName" autocomplete="off" value="<?php echo $this->session->flashdata('MotherName'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-3">
										<label>Occupation</label>
										<input class="form-control" type="text" name="MotherOccupation" autocomplete="off" value="<?php echo $this->session->flashdata('MotherOccupation'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-3">
										<label>Father's Name</label>
										<input class="form-control" type="text" name="FatherName" autocomplete="off" value="<?php echo $this->session->flashdata('FatherName'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-3">
										<label>Occupation</label>
										<input class="form-control" type="text" name="FatherOccupation" autocomplete="off" value="<?php echo $this->session->flashdata('FatherOccupation'); ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-4">
										<label>Name of Relative (in Manila)</label>
										<input class="form-control" type="text" name="RelName" autocomplete="off" value="<?php echo $this->session->flashdata('RelName'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Relative's Address</label>
										<input class="form-control" type="text" name="RelAddress" autocomplete="off" value="<?php echo $this->session->flashdata('RelAddress'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-3">
										<label>Relation</label>
										<input class="form-control" type="text" name="RelRelation" autocomplete="off" value="<?php echo $this->session->flashdata('RelRelation'); ?>">
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
										<input class="form-control" type="text" name="Address_Present" autocomplete="off" value="<?php echo $this->session->flashdata('Address_Present'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Provincial</label>
										<input class="form-control" type="text" name="Address_Provincial" autocomplete="off" value="<?php echo $this->session->flashdata('Address_Provincial'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-4">
										<label>Manila</label>
										<input class="form-control" type="text" name="Address_Manila" autocomplete="off" value="<?php echo $this->session->flashdata('Address_Manila'); ?>">
									</div>
								</div>
								<div class="mt-5 mb-4">
									<h5>
										<i class="fas fa-user-alt"></i> Convictions / Cases
									</h5>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-12">
										<label>Convictions for violations of any law, decree, ordinance, or regulations in any court or tribunal</label>
										<input class="form-control" type="text" name="ConLDOR" autocomplete="off" value="<?php echo $this->session->flashdata('ConLDOR'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-12">
										<label>Convictions for any breach of infraction by a military, tribunal, or authority, or found guilty of any administrative offense</label>
										<input class="form-control" type="text" name="ConMTAA" autocomplete="off" value="<?php echo $this->session->flashdata('ConMTAA'); ?>">
									</div>
									<div class="form-group col-sm-12 col-md-12">
										<label>Pending administrative/criminal cases</label>
										<input class="form-control" type="text" name="CaseAC" autocomplete="off" value="<?php echo $this->session->flashdata('CaseAC'); ?>">
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
										<input class="form-control" type="text" name="SSS" autocomplete="off" value="<?php echo $this->session->flashdata('SSS'); ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>Effective Date of Coverage</label>
										<input class="form-control" type="date" name="SSS_Effective" value="<?php echo $this->session->flashdata('SSS_Effective'); ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>Residence Certificate No.</label>
										<input class="form-control" type="text" name="RCN" autocomplete="off" value="<?php echo $this->session->flashdata('RCN'); ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>Tax Identification No.</label>
										<input class="form-control" type="text" name="TIN" autocomplete="off" value="<?php echo $this->session->flashdata('TIN'); ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-lg-3">
										<label>HDMF</label>
										<input class="form-control" type="text" name="HDMF" autocomplete="off" value="<?php echo $this->session->flashdata('HDMF'); ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>PHILHEALTH</label>
										<input class="form-control" type="text" name="PhilHealth" autocomplete="off" value="<?php echo $this->session->flashdata('PhilHealth'); ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>ATM #</label>
										<input class="form-control" type="text" name="ATM_No" autocomplete="off" value="<?php echo $this->session->flashdata('ATM_No'); ?>">
									</div>
								</div>
								<div class="form-row pb-5 pt-5">
									<div class="pb-3">
										<h5><i class="fas fa-stream"></i> Beneficiaries</h5>
									</div>
									<div id="beneficiaries" class="" style="width: 100%;">
										
									</div>
								</div>
								<div class="form-row pb-5">
									<div class="pb-3">
										<h5><i class="fas fa-stream"></i> Academic History</h5>
									</div>
									<div id="AcadHsssistory" class="" style="width: 100%;">
										
									</div>
								</div>
								<div class="form-row pb-5">
									<div class="pb-3">
										<h5><i class="fas fa-stream"></i> Employment Record </h5>
									</div>
									<div id="empskills" class="" style="width: 100%;">
										
									</div>
								</div>
								<div class="form-row pb-5">
									<div class="pb-3">
										<h5><i class="fas fa-stream"></i> Character References</h5>
									</div>
									<div id="charRefs" class="" style="width: 100%;">
										
									</div>
								</div>
								<div class="mt-5 mb-4">
									<h5>
										<i class="fas fa-user-alt"></i> Contract
									</h5>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-md-3">
										<label>Branch</label>
										<select id="Brancheselect" class="form-control" name="BranchID">
											<?php foreach ($getBranchOption->result_array() as $row): ?>
												<option value="<?=$row['BranchID'];?>">
													<?=$row['Name'];?>
												</option>
											<?php endforeach ?>
										</select>
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>Years</label>
										<input class="form-control" type="number" name="H_Years" autocomplete="off" value="<?php if (empty($this->session->flashdata('H_Years'))) {echo 1;} else {echo $this->session->flashdata('H_Years');} ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>Months</label>
										<input class="form-control" type="number" name="H_Months" autocomplete="off"  value="<?php if (empty($this->session->flashdata('H_Months'))) {echo 0;} else {echo $this->session->flashdata('H_Months');} ?>">
									</div>
									<div class="form-group col-sm-12 col-lg-3">
										<label>Days</label>
										<input class="form-control" type="number" name="H_Days" autocomplete="off" value="<?php if (empty($this->session->flashdata('H_Days'))) {echo 0;} else {echo $this->session->flashdata('H_Days');} ?>">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-sm-12 col-lg-4">
										<label>Employee ID</label>
										<input id="EmployeeID" class="form-control" type="text" name="EmployeeID" value="<?php echo $this->session->flashdata('EmployeeID'); ?>">
									</div>
								</div>
								
								<div class="form-row pt-5 pb-4">
									<div class="form-group mr-auto">
										<button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
									</div>
									<div class="form-group ml-auto">
										<a href="<?=base_url()?>Employees" class="btn btn-secondary"><i class="fas fa-chevron-left"></i> Back</a>
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
	<div class="modal fade" id="benFields" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Beneficiaries</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-row">
							<div class="form-group col-sm-12">
								<select id="BenWhat" class="form-control" name="BenWhat">
									<option hidden="" disabled="" selected="">
										Choose
									</option>
									<option>
										SSS
									</option>
									<option>
										HDMF
									</option>
									<option>
										PhilHealth
									</option>
								</select>
							</div>
							<div class="form-group col-sm-8">
								<label>Name</label>
								<input id="BenName" class="form-control" type="text" name="BenName">
							</div>
							<div class="form-group col-sm-4">
								<label>Relationship</label>
								<input id="BenRelation" class="form-control" type="text" name="BenRelation">
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button id="add_ben" type="submit" class="btn btn-primary" data-dismiss="modal" aria-label="Close"><i class="fas fa-plus"></i> Add</button>
				</div>
			</div>
		</div>
	</div>
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
	#SalaryTable {
		table-layout: fixed;
		word-wrap: break-word;
	}
</style>
<?php $this->load->view('_template/users/u_scripts'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#Brancheselect').on('change', function() {
			<?php foreach ($getBranchOption->result_array() as $row): ?>
			<?php
			// Count how many employees are on the Branch
			$CountEmployees = $this->Model_Selects->GetBranchesEmployed($row['BranchID'])->num_rows();
			$CountEmployees++;
			$CountEmployees = str_pad($CountEmployees,4,0,STR_PAD_LEFT);
			// Get the current year
			$Year = date('Y');
			$Year = substr($Year, 2);
			// Concatenate them all together
			$EmployeeID = 'SL' . $row['EmployeeIDSuffix'] . '-' . $CountEmployees . '-' . $Year;
			?>
			if ($(this).val() == '<?php echo $row['BranchID']; ?>') {
				$(this).closest('form').find('#EmployeeID').val('<?php echo $EmployeeID; ?>');
			}
			<?php endforeach; ?>
		});
		$('#DebugFill').on('click', function () {
			$('input[type="number"]').val(Math.floor(Math.random() * Math.floor(99)));
			$('input[type="text"]').val('TEST-' + Math.floor(Math.random() * Math.floor(9999999)));
			$('input[type="date"]').val(moment().format('YYYY-MM-DD'));
		});
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
			$('#pImageChecker').val('Has Image')
		});
		// Cart Beneficiaries
		$('#add_ben').click(function(){

			var BenWhat = $('#BenWhat').val();
			var BenName = $('#BenName').val();
			var BenRelation = $('#BenRelation').val();
			

			$.ajax({
				url : "<?php echo site_url('Main_Controller/atcBen');?>",
				method : "POST",
				data : {BenWhat: BenWhat, BenName: BenName, BenRelation: BenRelation},
				success: function(data){
					$('#BenWhat option:selected').index();
					$('#BenName').val("");
					$('#BenRelation').val("");
					$('#beneficiaries').load("<?php echo site_url('Main_Controller/showBen');?>");
				}
			});
		});
		$(document).on('click','.remoach',function(){
			var row_id = $(this).attr("id");
            $.ajax({
            	url : "<?php echo site_url('Main_Controller/removeBen');?>",
            	method : "POST",
            	data : {row_id : row_id},
            	success :function(data){
            		$('#beneficiaries').load("<?php echo site_url('Main_Controller/showBen');?>");
            	}
            });
        });
		$('#beneficiaries').load("<?php echo site_url('Main_Controller/showBen');?>");

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

		// $('#SalaryRaw,#HoursDayOne,#HoursDayTwo,#HoursDayThree,#HoursDayFour,#HoursDayFive,#HoursDaySix').on('input', function() {
		// 	// TODO: Clean & optimize this.
		//     $('#SalaryOvertimeFade').fadeIn();
		//     $('#SalaryDays').fadeIn();

		//     var HourOne = $("#HoursDayOne").val();
		//     var HourTwo = $("#HoursDayTwo").val();
		//     var HourThree = $("#HoursDayThree").val();
		//     var HourFour = $("#HoursDayFour").val();
		//     var HourFive = $("#HoursDayFive").val();
		//     var HourSix = $("#HoursDaySix").val();

		//     var SalaryWeekly = $('#SalaryRaw').val();
		//     var TotalHoursInAWeek = parseFloat(HourOne) + parseFloat(HourTwo) + parseFloat(HourThree) + parseFloat(HourFour) + parseFloat(HourFive) + parseFloat(HourSix);
		//     var SalaryPerHour = SalaryWeekly / TotalHoursInAWeek;
		//     $('#SalaryPerHour').val(SalaryPerHour.toFixed(2));

		//     var SalaryPerDay = SalaryPerHour * parseFloat(HourOne);
		//     $('#SalaryDayOne').val(SalaryPerDay.toFixed(2));
		//     SalaryPerDay = SalaryPerHour * parseFloat(HourTwo);
		//     $('#SalaryDayTwo').val(SalaryPerDay.toFixed(2));
		//     SalaryPerDay = SalaryPerHour * parseFloat(HourThree);
		//     $('#SalaryDayThree').val(SalaryPerDay.toFixed(2));
		//     SalaryPerDay = SalaryPerHour * parseFloat(HourFour);
		//     $('#SalaryDayFour').val(SalaryPerDay.toFixed(2));
		//     SalaryPerDay = SalaryPerHour * parseFloat(HourFive);
		//     $('#SalaryDayFive').val(SalaryPerDay.toFixed(2));
		//     SalaryPerDay = SalaryPerHour * parseFloat(HourSix);
		//     $('#SalaryDaySix').val(SalaryPerDay.toFixed(2));
		// });
	});
</script>
</html>