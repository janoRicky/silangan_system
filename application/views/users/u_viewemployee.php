<?php $T_Header;?>
<body>
<style>
	.rounded-circle {
		border: 4px solid white;
	}
	.tabs li a {
		padding: 14px 10px;
	}
	.tabs button {
		background-color: transparent;
		border: 0;
	}
	.info-header {
		border-bottom: 1px solid #DDDFE2;
		color: #90949C;
	}
</style>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="d-none d-sm-block" style="margin-top: 125px;">
					<div class="row content m-4">
						<div class="col-2 tabs">
							<div class="col-12 employee-image">
								<img class="rounded-circle" src="<?php echo $ApplicantImage; ?>">
							</div>
						</div>
						<div class="col-10 tabs">
							<ul>
								<li id="TabPersonalBtn" class="employee-tabs-select tabs-active"><a href="#Personal" onclick="">Personal</a><div class="tab-indicator">&nbsp;</div></li>
								<li class="tab-divider">&nbsp;</li>
								<li id="TabContractBtn" class="employee-tabs-select"><a href="#Contract" onclick="">Contract</a><div class="tab-indicator">&nbsp;</div></li>
								<li class="tab-divider">&nbsp;</li>
								<?php if($Status == 'Employed' || $Status == 'Blacklisted' || $Status == 'Expired'): ?>
									<li id="TabDocumentsBtn" class="employee-tabs-select"><a href="#Documents" onclick="">Documents</a><div class="tab-indicator">&nbsp;</div></li>
								<li class="tab-divider">&nbsp;</li>
								<?php endif; ?>
								<li id="TabAcademicBtn" class="employee-tabs-select"><a href="#Academic" onclick="">Academic</a><div class="tab-indicator">&nbsp;</div></li>
								<li class="tab-divider">&nbsp;</li>
								<li id="TabEmploymentsBtn" class="employee-tabs-select"><a href="#Employments" onclick="">Employments</a><div class="tab-indicator">&nbsp;</div></li>
								<li class="tab-divider">&nbsp;</li>
								<li id="TabReferencesBtn" class="employee-tabs-select"><a href="#References" onclick="">References</a><div class="tab-indicator">&nbsp;</div></li>
								<li class="tab-divider">&nbsp;</li>
								<li id="TabBeneficiariesBtn" class="employee-tabs-select"><a href="#Beneficiaries" onclick="">Beneficiaries</a><div class="tab-indicator">&nbsp;</div></li>
								<li class="tab-divider">&nbsp;</li>
								<li><a><button onClick="printContent('PrintOut')" type="button"><i class="fas fa-print" style="margin-right: -1px;"></i> </button></a><div class="tab-indicator">&nbsp;</div></li>
								<li class="tab-divider">&nbsp;</li>
								<li id="TabEditBtn"><a href="<?=base_url()?>ModifyEmployee?id=<?=$ApplicantID?>" onclick="" target="_blank"><i class="fas fa-edit"></i></a><div class="tab-indicator">&nbsp;</div></li>
							</ul>
						</div><!-- <img class="rounded-circle" src="<?php echo $ApplicantImage; ?>"> -->
						<!-- <div class="col-2 mb-5 employee-image">
							<div style="border: 1px">
								<img class="rounded-circle" src="<?php echo $ApplicantImage; ?>">
							</div>
						</div> -->
						<div class="row content-body">
							<div class="col-2 employee-static mt-1 d-none d-sm-block">
								<div class="col-sm-12">
									<?php echo $LastName; ?> , <?php echo $FirstName; ?>  <?php echo $MiddleInitial; ?>. <br>
									"<?php echo $Nickname; ?>"
								</div>
								<hr>
								<div class="col-sm-12 employee-static-item">
									<i class="fas fa-phone"></i> <?php echo $Phone_No; ?>
								</div>
								<div class="col-sm-12 employee-static-item">
									<i class="fas fa-map-marker-alt"></i> <?php echo $Address_Present; ?>
								</div>
								<hr>
								<div class="col-sm-12">
									<?php if($Status == 'Employed'): ?>
										<?php if($EmployeeID != NULL): ?>
											<i class="fas fa-user-tie"></i> <?php echo $EmployeeID; ?>
										<?php else: ?>
											<i class="fas fa-user-tie"></i> <a href="<?php echo base_url() ?>ModifyEmployee?id=<?php echo $ApplicantID; ?>">Employee ID not assigned</a>
										<?php endif; ?>
									<?php else: ?>
										<i class="fas fa-user"></i> <?php echo $ApplicantID; ?>
									<?php endif; ?>
								</div>
								<div class="col-sm-12 mt-2">
									<?php if ($Status == 'Employed') { ?>
										<i class="fas fa-square PrintExclude" style="color: #1BDB07;"></i> Employed
									<?php } elseif ($Status == 'Expired') { ?>
										<i class="fas fa-square PrintExclude" style="color: #0721DB;"></i> Expired
									<?php } ?> <!-- <?php if ($Status == 'Applicant') { ?>
										<i class="fas fa-square PrintExclude" style="color: #DB3E07;"></i> Applicant
									<?php } elseif ($Status == 'Blacklisted') { ?>
										<i class="fas fa-square PrintExclude" style="color: #000000;"></i> Blacklisted
									<?php } else { ?>
										<i class="fas fa-square PrintExclude" style="color: #DB3E07;"></i> Unknown
									<?php } ?> -->
								</div>
								<?php if ($Status == 'Blacklisted'): ?>
								<div class="row ml-auto mr-auto pb-5 pt-5 w-100">
									<div class="col-sm-12 col-mb-12 w-100 text-center blacklisted-notice">
										<div class="col-sm-12 pb-2 pt-4">
											<h5>
												<i class="fas fa-exclamation-triangle"></i><b> Notice </b><i class="fas fa-exclamation-triangle"></i>
											</h5>
										</div>
										<div class="col-sm-12 pb-2">
											This individual has been marked as <b>Blacklisted</b>
										</div>
										<div class="col-sm-12 col-mb-12 pb-2">
											<a href="#Documents" class="btn btn-danger"><i class="far fa-eye"></i> Documents</a>
										</div>
									</div>
								</div>
								<?php endif; ?>
							</div>
							<div class="col-10 mb-5">
								<div id="TabPersonal">
									<div class="employee-tabs-group-content">
										<div class="employee-content-header">
											<div class="float-right">
												<button onClick="printContent('PrintOutPersonal')" type="button" class="btn btn-primary"><i class="fas fa-print"></i> Print</button>
											</div>
											<?php if ($Status == 'Employed'): ?> 
												<?php if ($ReminderDate == NULL): ?> 
													<button id="<?php echo $ApplicantID; ?>" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ReminderModal"><i class="fas fa-exclamation"></i> No reminder set</button>
												<?php else: ?>
													<button id="<?php echo $ApplicantID; ?>" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ReminderModal"><i class="fas fa-check"></i> You will be notified <?php echo $ReminderDateString; ?> before expiring</button>
												<?php endif; ?>
											<?php endif; ?>
										</div>
										<div class="row mt-4">
											<div class="col-sm-12 info-header">
												Personal Information
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-sm-4 employee-dynamic-header">
												<b>Present Address</b>
											</div>
											<div class="col-sm-4 employee-dynamic-header">
												<b>Provincial Address</b>
											</div>
											<div class="col-sm-4 employee-dynamic-header">
												<b>Manila</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 employee-dynamic-item">
												<?php echo $Address_Present; ?>
											</div>
											<div class="col-sm-4 employee-dynamic-item">
												<?php echo $Address_Provincial; ?>
											</div>
											<div class="col-sm-4 employee-dynamic-item">
												<?php echo $Address_Manila; ?>
											</div>
										</div>
										<!-- ------------------ -->
										<div class="row mt-4">
											<div class="col-sm-2 employee-dynamic-header">
												<b>Gender</b>
											</div>
											<div class="col-sm-2 employee-dynamic-header">
												<b>Age</b>
											</div>
											<div class="col-sm-2 employee-dynamic-header">
												<b>Height</b>
											</div>
											<div class="col-sm-2 employee-dynamic-header">
												<b>Weight</b>
											</div>
											<div class="col-sm-2 employee-dynamic-header">
												<b>Religion</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $Gender; ?>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $Age; ?>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $Height; ?>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $Weight; ?>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $Religion; ?>
											</div>
										</div>
										<!-- ------------------ -->
										<div class="row mt-3">
											<div class="col-sm-4 employee-dynamic-header">
												<b>Birth Place</b>
											</div>
											<div class="col-sm-4 employee-dynamic-header">
												<b>Birth Date</b>
											</div>
											<div class="col-sm-4 employee-dynamic-header">
												<b>Citizenship</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 employee-dynamic-item">
												<?php echo $BirthPlace; ?>
											</div>
											<div class="col-sm-4 employee-dynamic-item">
												<?php echo $BirthDate; ?>
											</div>
											<div class="col-sm-4 employee-dynamic-item">
												<?php echo $Citizenship; ?>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-sm-3 employee-dynamic-header">
												<b>Civil Status</b>
											</div>
											<div class="col-sm-5 employee-dynamic-header">
												<b>Spouse</b>
											</div>
											<div class="col-sm-4 employee-dynamic-header">
												<b>No. of Children</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3 employee-dynamic-item">
												<?php echo $CivilStatus; ?>
											</div>
											<div class="col-sm-5 employee-dynamic-item">
												<?php echo $SpouseName; ?>
											</div>
											<div class="col-sm-4 employee-dynamic-item">
												<?php echo $No_OfChildren; ?>
											</div>
										</div>
										<div class="row mt-5">
											<div class="col-sm-12 info-header">
												Employment
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-sm-2 employee-dynamic-header">
												<b>Position</b>
											</div>
											<div class="col-sm-2 employee-dynamic-header">
												<b>Contract Type</b>
											</div>
											<div class="col-sm-2 employee-dynamic-header">
												<b>Salary Type</b>
											</div>
											<div class="col-sm-1 employee-dynamic-header">
												<b>Rate</b>
											</div>
											<div class="col-sm-3 employee-dynamic-header">
												<b>Person Recommending</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $PositionGroup; ?>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $ContractType; ?>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $SalaryType; ?>
											</div>
											<div class="col-sm-1 employee-dynamic-item">
												<?php echo $Rate; ?>
											</div>
											<div class="col-sm-3 employee-dynamic-item">
												<?php echo $PersonRecommending ; ?>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-sm-3 employee-dynamic-header">
												<b>Date Employed</b>
											</div>
											<div class="col-sm-3 employee-dynamic-header">
												<b>Willing to render overtime work</b>
											</div>
											<div class="col-sm-3 employee-dynamic-header">
												<b>Willing to be assigned to other places</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3 employee-dynamic-item">
												<?php echo $AppliedOn; ?>
											</div>
											<div class="col-sm-3 employee-dynamic-item">
												<?php echo $Overtime; ?>
											</div>
											<div class="col-sm-3 employee-dynamic-item">
												<?php echo $Reassignment; ?>
											</div>
										</div>
										<div class="row mt-5">
											<div class="col-sm-12 info-header">
												Relatives
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-sm-3 employee-dynamic-header">
												<b>Mother's Name</b>
											</div>
											<div class="col-sm-2 employee-dynamic-header">
												<b>Mother's Occupation</b>
											</div>
											<div class="col-sm-3 employee-dynamic-header">
												<b>Father's Name</b>
											</div>
											<div class="col-sm-2 employee-dynamic-header">
												<b>Father's Occupation</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-3 employee-dynamic-item">
												<?php echo $MotherName; ?>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $MotherOccupation; ?>
											</div>
											<div class="col-sm-3 employee-dynamic-item">
												<?php echo $FatherName; ?>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $FatherOccupation; ?>
											</div>
										</div>
										<div class="row mt-3">
											<div class="col-sm-4 employee-dynamic-header">
												<b>Name of Relative (in Manila)</b>
											</div>
											<div class="col-sm-4 employee-dynamic-header">
												<b>Relative's Address</b>
											</div>
											<div class="col-sm-2 employee-dynamic-header">
												<b>Relation</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4 employee-dynamic-item">
												<?php echo $RelName; ?>
											</div>
											<div class="col-sm-4 employee-dynamic-item">
												<?php echo $RelAddress; ?>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $RelRelation; ?>
											</div>
										</div>
										<?php if(!empty($ConLDOR) || !empty($ConMTAA) || !empty($CaseAC)): ?>
										<div class="row mt-5">
											<div class="col-sm-12 info-header">
												Convictions
											</div>
										</div>
										<?php endif; ?>
										<?php if(!empty($ConLDOR)): ?>
										<div class="row mt-3">
											<div class="col-sm-10 employee-dynamic-header">
												<b>Convictions for violations of any law, decree, ordinance, or regulations in any court or tribunal</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $ConLDOR; ?>
											</div>
										</div>
										<?php endif; ?>
										<?php if(!empty($ConMTAA)): ?>
										<div class="row mt-3">
											<div class="col-sm-10 employee-dynamic-header">
												<b>Convictions for any breach of infraction by a military, tribunal, or authority, or found guilty of any administrative offense</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $ConMTAA; ?>
											</div>
										</div>
										<?php endif; ?>
										<?php if(!empty($CaseAC)): ?>
										<div class="row mt-3">
											<div class="col-sm-10 employee-dynamic-header">
												<b>Pending administrative/criminal cases</b>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $CaseAC; ?>
											</div>
										</div>
										<?php endif; ?>
										<div class="row mt-5">
											<div class="col-sm-12 info-header">
												Documents
											</div>
										</div>
										<div class="row employee-personal-row">
											<div class="col-sm-2 employee-dynamic-header">
												<b>S.S.S. No.</b>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $SSS_No; ?>
											</div>
											<div class="col-sm-2 ml-5 employee-dynamic-header">
												<b>Effective Date of Coverage</b>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $EffectiveDateCoverage; ?>
											</div>
										</div>
										<div class="row employee-personal-row mt-4">
											<div class="col-sm-2 employee-dynamic-header">
												<b>PHILHEALTH</b>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $PhilHealth; ?>
											</div>
										</div>
										<div class="row employee-personal-row mt-4">
											<div class="col-sm-2 employee-dynamic-header">
												<b>Residence Certificate No.</b>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $ResidenceCertificateNo; ?>
											</div>
										</div>
										<div class="row employee-personal-row mt-4">
											<div class="col-sm-2 employee-dynamic-header">
												<b>Tax Identification No.</b>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $TIN; ?>
											</div>
										</div>
										<div class="row employee-personal-row mt-4">
											<div class="col-sm-2 employee-dynamic-header">
												<b>HDMF</b>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $HDMF; ?>
											</div>
										</div>
										<div class="row employee-personal-row mt-4">
											<div class="col-sm-2 employee-dynamic-header">
												<b>ATM No.</b>
											</div>
											<div class="col-sm-2 employee-dynamic-item">
												<?php echo $ATM_No; ?>
											</div>
										</div>
									</div>
								</div>
								<div id="TabContract">
									<div class="employee-tabs-group-content">
										<?php if ($Status == 'Employed'): ?>
										<div class="employee-content-header">
											<div class="row">
												<button id="<?php echo $ApplicantID; ?>" data-dismiss="modal" type="button" class="btn btn-primary btn-sm ExtendButton" data-toggle="modal" data-target="#ExtendContractModal"><i class="fas fa-plus"></i> Extend Contract</button>
												<button class="btn btn-primary btn-sm ml-1" data-toggle="modal" data-target="#EmpContractHistory"><i class="fas fa-book"></i> Contract History</button>
											</div>
										</div>
										<hr>
										<div class="col-sm-12 col-md-12 employee-dynamic-header text-center">
											<b>
												Days Remaining on Contract
											</b>
										</div>
										<div class="col-sm-12 col-md-12 text-center">
											<p>
												<?php

													$currTime = time();
													$strDateEnds = strtotime($DateEnds);
													$strDateStarted = strtotime($DateStarted);
													// PERCENTAGE
													$rPercentage = (($strDateEnds - $currTime) * 100) / ($strDateEnds - $strDateStarted);
													$rPercentage = round($rPercentage);
													// DAYS REMAINING
													$dateTimeZone = new DateTimeZone("Asia/Manila");
													$datetime1 = new DateTime('@' . $currTime, $dateTimeZone);
													$datetime2 = new DateTime('@' . $strDateEnds, $dateTimeZone);
													$interval = $datetime1->diff($datetime2);
													if($interval->format('%y years, %m months, %d days') == '0 years, 0 months, 0 days') {
														echo $interval->format('%H hours, %I minutes, %S seconds');
													} else {
														echo $interval->format('%y years, %m months, %d days');
													}
												?>
												<input type="hidden" id="TimeLeft" value="<?php echo $rPercentage;?>">
											</p>
										</div>
										<div class="col-sm-12 col-md-12 PrintExclude">
											<div class="progressBar">
												<div class="progressBarTitle progressRemainingColor">Time Left</div>
												<div class="progress progressRemaining"></div>
												<div class="progress_value">45%</div>
											</div>
										</div>
										<!-- <div class="col-sm-6 employee-contract-container">
											<div class="col-sm-12 employee-contract-header-title">
												Branch
											</div>
											<div class="col-sm-12 employee-contract-header-desc">
												<?php
												// TODO: Find a better solution than this.
												$found = false;
												foreach ($get_employee->result_array() as $row) {
													foreach ($getBranchOption->result_array() as $nrow) {
														if ($row['BranchEmployed'] == $nrow['BranchID'] && $found == false) {
															$found = true;
															echo $nrow['Name'];
														}
													}
												}?>
											</div>
										</div> -->
										<div class="row">
											<div class="col-sm-4">
												<div class="card mb-3" style="max-width: 18rem;">
													<div class="card-header employee-dynamic-header text-center"><b><i class="fas fa-user-tag"></i> Branch</b></div>
													<div class="card-body text-dark">
														<h5 class="card-title text-center silangan-card-title">
															<?php
															// TODO: Find a better solution than this.
															$found = false;
															foreach ($get_employee->result_array() as $row) {
																foreach ($getBranchOption->result_array() as $nrow) {
																	if ($row['BranchEmployed'] == $nrow['BranchID'] && $found == false) {
																		$found = true;
																		echo $nrow['Name'];
																	}
																}
															}?>
														</h5>
														<p class="card-text">
															<div class="col-sm-12 employee-static-item text-center mt-3">
																<div class="col-sm-12 employee-dynamic-header">
																	<b>Contact</b>
																</div>
																<div class="col-sm-12">
																	<?php
																	// TODO: Find a better solution than this.
																	$found = false;
																	foreach ($get_employee->result_array() as $row) {
																		foreach ($getBranchOption->result_array() as $nrow) {
																			if ($row['BranchEmployed'] == $nrow['BranchID'] && $found == false) {
																				$found = true;
																				echo $nrow['ContactNumber'];
																			}
																		}
																	}?>
																</div>
															</div>
															<div class="col-sm-12 employee-static-item text-center">
																<div class="col-sm-12 employee-dynamic-header">
																	<b>Address</b>
																</div>
																<div class="col-sm-12">
																	<?php
																	// TODO: Find a better solution than this.
																	$found = false;
																	foreach ($get_employee->result_array() as $row) {
																		foreach ($getBranchOption->result_array() as $nrow) {
																			if ($row['BranchEmployed'] == $nrow['BranchID'] && $found == false) {
																				$found = true;
																				echo $nrow['Address'];
																			}
																		}
																	}?>
																</div>
															</div>
														</p>
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="card mb-3" style="max-width: 18rem;">
													<div class="card-header employee-dynamic-header text-center"><b><i class="fas fa-user-tie"></i> Position</b></div>
													<div class="card-body text-dark">
														<h5 class="card-title text-center silangan-card-title"><?php echo $PositionGroup; ?></h5>
														<p class="card-text">
															<div class="col-sm-12 employee-static-item text-center mt-3">
																<div class="col-sm-12 employee-dynamic-header">
																	<b>Contract Started</b>
																</div>
																<div class="col-sm-12">
																	<?php echo $DateStarted; ?>
																</div>
															</div>
															<div class="col-sm-12 employee-static-item text-center">
																<div class="col-sm-12 employee-dynamic-header">
																	<b>Contract Ends</b>
																</div>
																<div class="col-sm-12">
																	<?php echo $DateEnds; ?>
																</div>
															</div>
														</p>
													</div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="card mb-3" style="max-width: 18rem;">
													<div class="card-header employee-dynamic-header text-center"><b><i class="fas fa-book"></i> Rate</b></div>
													<div class="card-body text-dark">
														<h5 class="card-title text-center silangan-card-title">₱ <?php echo $Rate; ?></h5>
														<p class="card-text">
															<div class="col-sm-12 employee-static-item text-center mt-3">
																<div class="col-sm-12 employee-dynamic-header">
																	<b>Documents (<?php echo $GetDocuments->num_rows(); ?>)</b>
																</div>
																<div class="col-sm-12">
																	<a href="#Documents" class="btn-sm btn btn-primary"><i class="far fa-eye"></i> View</a>
																</div>
															</div>
															<div class="col-sm-12 employee-static-item text-center">
																<div class="col-sm-12 employee-dynamic-header">
																	<b>Violations (<?php echo $GetDocumentsViolations->num_rows(); ?>)</b>
																</div>
																<div class="col-sm-12">
																	<a href="#Documents" class="btn-sm btn btn-danger"><i class="far fa-eye"></i> View</a>
																</div>
															</div>
														</p>
													</div>
												</div>
											</div>
										</div>
										<?php else: ?>
										<div class="employee-content-header">
											<button id="<?php echo $ApplicantID; ?>" data-dismiss="modal" type="button" class="btn btn-primary btn-sm mr-auto ModalHire" data-toggle="modal" data-target="#hirthis"><i class="fas fa-plus"></i> New Contract</button>
											<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#EmpContractHistory"><i class="fas fa-book"></i> Contract History</button>
										</div>
										<hr>
										<div class="row mt-4">
											<div class="col-sm-12">
												No available contract to show.
											</div>
										</div>
										<?php endif; ?>
									</div>
								</div>
								<div id="TabDocuments">
									<div class="employee-tabs-group-content">
										<div class="employee-content-header pb-2">
											<div class="float-right">
												<button onClick="printContent('PrintOutDocuments')" type="button" class="btn btn-primary"><i class="fas fa-print"></i> Print</button>
											</div>
											<button id="<?php echo $ApplicantID; ?>" class="btn btn-primary btn-sm doc_btn" data-toggle="modal" data-target="#AddSuppDoc"><i class="fas fa-file-upload"></i> Upload Documents</button>
										</div>
										<hr>
										<div class="row">
											<div class="col-sm-8">
												<div class="row ml-3">
													<div class="col-sm-12">
														<span class="folder-button"><i class="fas fa-folder-open"></i> Documents (<?php echo $GetDocuments->num_rows(); ?>)</span>
													</div>
													<div id="FolderDocuments" class="folder-documents folder-active col-sm-12 mt-4 ml-5">
													<?php if ($GetDocuments->num_rows() > 0) { ?>
														<?php foreach ($GetDocuments->result_array() as $row): ?>
																<div class="mb-3">
																	<div class="folder-documents-icon"><i class="fas fa-file-pdf"></i></div>
																	<div class="col-sm-12 ml-3">
																		<a class="ml-2" href="<?php echo $row['Doc_File'];?>" target="_blank">
																		<b><?php echo $row['Doc_FileName']; ?></b></a>
																	</div>
																	<div class="folder-documents-info col-sm-12 ml-4">
																		<?php echo $row['Subject']; ?> | Created by <?php echo $row['DateAdded']; ?>  (0MB)
																	</div>
																</div>
														<?php endforeach ?>
													<?php } else { ?>
														No documents available.
													<?php } ?>
													</div>
												</div>
												<div class="row mt-4 ml-3">
													<div class="col-sm-12">
														<span class="folder-button"><i class="fas fa-folder"></i> Violations (<?php echo $GetDocumentsViolations->num_rows(); ?>)</span>
													</div>
													<div id="FolderViolations" class="folder-documents col-sm-12 mt-4 ml-5">
													<?php if ($GetDocumentsViolations->num_rows() > 0) { ?>
														<?php foreach ($GetDocumentsViolations->result_array() as $row): ?>
																<div class="mb-3">
																	<div class="folder-documents-icon"><i class="fas fa-file-pdf"></i></div>
																	<div class="col-sm-12 ml-3">
																		<a class="ml-2" href="<?php echo $row['Doc_File'];?>" target="_blank">
																		<b>													<?php
																				if ($row['Type'] == 'Blacklist') {
																					echo '[BLACKLIST] - ' . $row['Doc_FileName'];
																				} else {
																					echo $row['Doc_FileName'];
																				}
																			?>		
																		</b></a>
																	</div>
																	<div class="folder-documents-info col-sm-12 ml-4">
																		<?php echo $row['Subject']; ?> | Created by <?php echo $row['DateAdded']; ?> (0MB)
																	</div>
																</div>
														<?php endforeach ?>
													<?php } else { ?>
														No documents available.
													<?php } ?>
													</div>
												</div>
											</div>
											<div class="col-sm-4 employee-documents-notes">
												<div class="row mt-3 employee-documents-title">
													<div class="col-sm-10">
														<i class="fas fa-list"></i> Notes
													</div>
													<div class="col-sm-2 text-right">
														<button id="AddNoteBtn" applicant-id="<?php echo $ApplicantID; ?>" class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#AddNote"><i class="fas fa-plus" style="margin-right: -1px;"></i></button>
													</div>
												</div>
												<div class="row mt-2">
													<div class="col-sm-12">
														<table id="ListNotes" class="table table-borderless" style="width: 100%;">
															<thead>
															</thead>
															<tbody>
																<?php
																$RowCount = 0;
																if ($GetDocumentsNotes->num_rows() > 0):
																	foreach ($GetDocumentsNotes->result_array() as $row):
																		$RowCount++;?>
																		<tr>
																			<td style="width: 8px;">
																				<?php echo $RowCount . '.'; ?>
																			</td>
																			<td>
																				<?php echo $row['Note'] ; ?>
																			</td>
																		</tr>
																	<?php endforeach;
																else: ?>
																	<div class="mt-2">
																		No notes found.
																	</div>
																<?php endif; ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="TabAcademic">
									<div class="employee-tabs-group-content" id="TabAcademic">
										<div class="employee-content-header pb-2 text-right">
											<button onClick="printContent('PrintOutAcademic')" type="button" class="btn btn-primary"><i class="fas fa-print"></i> Print</button>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-condensed">
														<thead class="employee-table-header">
															<th>Level</th>
															<th>School Name</th>
															<th>School Address</th>
															<th>From Year</th>
															<th>To Year</th>
															<th>Highest Degree / Certificate Attained</th>
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
																		</tr>
																	<?php } ?>
																<?php endforeach ?>
															<?php } else { ?>
																<tr class="w-100 text-center">
																	<td colspan="6">
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
										</div>
									</div>
								</div>
								<div id="TabEmployments">
									<div class="employee-tabs-group-content" id="TabEmployments">
										<div class="employee-content-header pb-2 text-right">
											<button onClick="printContent('PrintOutEmployment')" type="button" class="btn btn-primary"><i class="fas fa-print"></i> Print</button>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-condensed">
														<thead class="employee-table-header">
															<th>Name</th>
															<th>Address</th>
															<th>Period Covered</th>
															<th>Position</th>
															<th>Salary</th>
															<th>Cause of Separation</th>
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
																		</tr>
																	<?php } ?>
																<?php endforeach ?>
															<?php } else { ?>
																<tr class="w-100 text-center">
																	<td colspan="6">
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
										</div>
									</div>
								</div>
								<div id="TabReferences">
									<div class="employee-tabs-group-content" id="TabReferences">
										<div class="employee-content-header pb-2 text-right">
											<button onClick="printContent('PrintOutReferences')" type="button" class="btn btn-primary"><i class="fas fa-print"></i> Print</button>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-condensed">
														<thead class="employee-table-header">
															<th>Name</th>
															<th>Position</th>
															<th>Company / Address</th>
														</thead>
														<tbody>
															<?php if ($GetCharRef->num_rows() > 0) { ?>
																<?php foreach ($GetCharRef->result_array() as $row): ?>
																	<?php if ($ApplicantID == $row['ApplicantID']) { ?>
																		<tr>
																			<td><?php echo $row['RefName'];?></td>
																			<td><?php echo $row['RefPosition'];?></td>
																			<td><?php echo $row['CompanyAddress'];?></td>
																		</tr>
																	<?php } ?>
																<?php endforeach ?>
															<?php } else { ?>
																<tr class="w-100 text-center">
																	<td colspan="6">
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
										</div>
									</div>
								</div>
								<div id="TabBeneficiaries">
									<div class="employee-tabs-group-content" id="TabBeneficiaries">
										<div class="employee-content-header pb-2 text-right">
											<button onClick="printContent('PrintOutBeneficiaries')" type="button" class="btn btn-primary"><i class="fas fa-print"></i> Print</button>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="table-responsive">
													<table class="table table-condensed">
														<thead class="employee-table-header">
															<th></th>
															<th>Name</th>
															<th>Relationship</th>
														</thead>
														<tbody>
															<?php if ($GetBeneficiaries->num_rows() > 0) { ?>
																<?php foreach ($GetBeneficiaries->result_array() as $row): ?>
																	<?php if ($ApplicantID == $row['ApplicantID']) { ?>
																		<tr>
																			<td><?php echo $row['BenWhat'];?></td>
																			<td><?php echo $row['BenName'];?></td>
																			<td><?php echo $row['BenRelation'];?></td>
																		</tr>
																	<?php } ?>
																<?php endforeach ?>
															<?php } else { ?>
																<tr class="w-100 text-center">
																	<td colspan="6">
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
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- MOBILE VIEW -->
				<div class="d-block d-sm-none">
					<?php $this->load->view('users/u_viewemployee_mobile'); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- EMPLOYED MODAL -->          
	<?php if($Status == 'Employed') { ?>          
	<div class="modal fade" id="EmpContractModal">
		<div class="modal-dialog modal-xl">
			<div class="modal-content m-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Contract Report for <?=$LastName?>, <?=$FirstName?> <?=$MiddleInitial?>.</h4>
				<div class="text-right">
					<button onClick="printContent('PrintOutModal')" type="button" class="btn btn-primary mr-auto"><i class="fas fa-print"></i> Print</button>
					<button type="button" class="close d-none d-sm-block" data-dismiss="modal">&times;</button>
				</div>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="row rcontent">
					<?php
						$currTime = time();
						$strDateEnds = strtotime($DateEnds);
						$strDateStarted = strtotime($DateStarted);
						// PERCENTAGE
						$rPercentage = (($strDateEnds - $currTime) * 100) / ($strDateEnds - $strDateStarted);
						$rPercentage = round($rPercentage);
						// DAYS REMAINING
						$dateTimeZone = new DateTimeZone("Asia/Manila");
						$datetime1 = new DateTime('@' . $currTime, $dateTimeZone);
						$datetime2 = new DateTime('@' . $strDateEnds, $dateTimeZone);
						$interval = $datetime1->diff($datetime2);
						if($interval->format('%y years, %m months, %d days') == '0 years, 0 months, 0 days') {
							echo $interval->format('%H hours, %I minutes, %S seconds');
						} else {
							echo $interval->format('%y years, %m months, %d days');
						}
					?>
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button id="<?php echo $ApplicantID; ?>" data-dismiss="modal" type="button" class="btn btn-primary mr-auto ExtendButton" data-toggle="modal" data-target="#ExtendContractModal"><i class="fas fa-plus"></i> Extend Contract</button>
				<button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
			</div>

			</div>
		</div>
	</div>
	<?php } ?>
	<!-- EXPIRED MODAL -->
	<?php if($Status == 'Expired') { ?>          
	<div class="modal fade" id="EmpContractModal">
		<div class="modal-dialog modal-xl">
			<div class="modal-content m-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title">Previous Contract Report for <?=$LastName?>, <?=$FirstName?> <?=$MiddleInitial?>.</h4>
				<div class="text-right">
					<button onClick="printContent('PrintOutModalExpired')" type="button" class="btn btn-primary mr-auto"><i class="fas fa-print"></i> Print</button>
					<button type="button" class="close d-none d-sm-block" data-dismiss="modal">&times;</button>
				</div>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<div class="row rcontent">
				</div>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
			</div>

			</div>
		</div>
	</div>
	<?php } ?>
	<!-- Branch HIRE MODAL -->
	<?php $this->load->view('_template/modals/m_branchhire'); ?>
	<!-- CONTRACT HISTORY MODAL -->
	<?php $this->load->view('_template/modals/m_contracthistory'); ?>
	<!-- EXTEND CONTRACT MODAL -->
	<?php $this->load->view('_template/modals/m_extendcontract'); ?>
	<!-- SET A REMINDER MODAL -->
	<?php $this->load->view('_template/modals/m_setreminder'); ?>
	<!-- DOCUMENT MODAL -->
	<?php $this->load->view('_template/modals/m_documents'); ?>
	<!-- DOCUMENTS NOTE MODAL -->
	<?php $this->load->view('_template/modals/m_addnote_documents'); ?>
	<!-- ADD DOCUMENTS MODAL -->
	<?php $this->load->view('_template/modals/m_adddocuments'); ?>
</body>
<?php $this->load->view('_template/users/u_scripts');?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#Branchselect').on('change', function() {
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
				$(this).closest('#BranchModal').find('#EmployeeID').val('<?php echo $EmployeeID; ?>');
			}
			<?php endforeach; ?>
		});
		$("#Type").change(function(){
			$('#ViolationNotice').hide();
			// $('#BlacklistNotice').hide();
			if ( $(this).val() == "Violation" ) { 
				$("#ViolationNotice").fadeIn();
		    }
		  //   if ( $(this).val() == "Blacklist" ) { 
				// $("#BlacklistNotice").fadeIn();
		  //   }
		});
		$('.doc_btn').on('click', function () {
			$('#Pass_ID').val($(this).attr('id'));
		});
		$('.employee-tabs-select').removeClass('tabs-active');
		$('.tab-indicator').addClass('d-none');
		$('.employee-tabs-group-content').hide();
		var hashValue = window.location.hash.substr(1);
		if (hashValue == 'Personal') {
			$('#TabPersonal').children('.employee-tabs-group-content').show();
			$('#TabPersonalBtn').addClass('tabs-active');
			$('#TabPersonalBtn > .tab-indicator').removeClass('d-none');
		}
		else if (hashValue == 'Contract') {
			$('#TabContract').children('.employee-tabs-group-content').show();
			$('#TabContractBtn').addClass('tabs-active');
			$('#TabContractBtn > .tab-indicator').removeClass('d-none');
		}
		else if (hashValue == 'Documents') {
			$('#TabDocuments').children('.employee-tabs-group-content').show();
			$('#TabDocumentsBtn').addClass('tabs-active');
			$('#TabDocumentsBtn > .tab-indicator').removeClass('d-none');
		}
		else if (hashValue == 'Academic') {
			$('#TabAcademic').children('.employee-tabs-group-content').show();
			$('#TabAcademicBtn').addClass('tabs-active');
			$('#TabAcademicBtn > .tab-indicator').removeClass('d-none');
		}
		else if (hashValue == 'Employments') {
			$('#TabEmployments').children('.employee-tabs-group-content').show();
			$('#TabEmploymentsBtn').addClass('tabs-active');
			$('#TabEmploymentsBtn > .tab-indicator').removeClass('d-none');
		}
		else if (hashValue == 'References') {
			$('#TabReferences').children('.employee-tabs-group-content').show();
			$('#TabReferencesBtn').addClass('tabs-active');
			$('#TabReferencesBtn > .tab-indicator').removeClass('d-none');
		}
		else if (hashValue == 'Beneficiaries') {
			$('#TabBeneficiaries').children('.employee-tabs-group-content').show();
			$('#TabBeneficiariesBtn').addClass('tabs-active');
			$('#TabBeneficiariesBtn > .tab-indicator').removeClass('d-none');
		} else {
			$('#TabPersonal').children('.employee-tabs-group-content').show();
			$('#TabPersonalBtn').addClass('tabs-active');
			$('#TabPersonalBtn > .tab-indicator').removeClass('d-none');
		}
		$(window).on('hashchange',function(){ 
			$('.employee-tabs-select').removeClass('tabs-active');
			$('.tab-indicator').addClass('d-none');
			$('.employee-tabs-group-content').hide();
			var hashValue = window.location.hash.substr(1);
			if (hashValue == 'Personal') {
				$('#TabPersonal').children('.employee-tabs-group-content').show();
				$('#TabPersonalBtn').addClass('tabs-active');
				$('#TabPersonalBtn > .tab-indicator').removeClass('d-none');
			}
			else if (hashValue == 'Contract') {
				$('#TabContract').children('.employee-tabs-group-content').show();
				$('#TabContractBtn').addClass('tabs-active');
				$('#TabContractBtn > .tab-indicator').removeClass('d-none');
			}
			else if (hashValue == 'Documents') {
				$('#TabDocuments').children('.employee-tabs-group-content').show();
				$('#TabDocumentsBtn').addClass('tabs-active');
				$('#TabDocumentsBtn > .tab-indicator').removeClass('d-none');
			}
			else if (hashValue == 'Academic') {
				$('#TabAcademic').children('.employee-tabs-group-content').show();
				$('#TabAcademicBtn').addClass('tabs-active');
				$('#TabAcademicBtn > .tab-indicator').removeClass('d-none');
			}
			else if (hashValue == 'Employments') {
				$('#TabEmployments').children('.employee-tabs-group-content').show();
				$('#TabEmploymentsBtn').addClass('tabs-active');
				$('#TabEmploymentsBtn > .tab-indicator').removeClass('d-none');
			}
			else if (hashValue == 'References') {
				$('#TabReferences').children('.employee-tabs-group-content').show();
				$('#TabReferencesBtn').addClass('tabs-active');
				$('#TabReferencesBtn > .tab-indicator').removeClass('d-none');
			}
			else if (hashValue == 'Beneficiaries') {
				$('#TabBeneficiaries').children('.employee-tabs-group-content').show();
				$('#TabBeneficiariesBtn').addClass('tabs-active');
				$('#TabBeneficiariesBtn > .tab-indicator').removeClass('d-none');
			} else {
				$('#TabPersonal').children('.employee-tabs-group-content').show();
				$('#TabPersonalBtn').addClass('tabs-active');
				$('#TabPersonalBtn > .tab-indicator').removeClass('d-none');
			}
		});
		$('#AddNoteBtn').on('click', function () {
			$('#AddNote_ApplicantID').val($(this).attr('applicant-id'));
		});
		$('.folder-button').on('click', function () {
			$(this).children('i').toggleClass('fa-folder');
			$(this).children('i').toggleClass('fa-folder-open');
			$(this).closest('.row').find('.folder-documents').toggleClass('folder-active');
		});
		// $('.employee-tabs-select').on('click', function () {
		// 	$('.employee-tabs-select').removeClass('tabs-active');
		// 	$(this).addClass('tabs-active');
		// 	$('.employee-tabs-group-content').hide();
		// });
		$('#TabDocumentsBtnAlt').on('click', function () {
			$('.employee-tabs-select').removeClass('tabs-active');
			$('#TabDocumentsBtn').addClass('tabs-active');
			$('.employee-tabs-group-content').hide();
		});
		$('#TabPersonalBtn').on('click', function () {
			$('#TabPersonal').children('.employee-tabs-group-content').fadeIn(100);
		});
		$('#TabContractBtn').on('click', function () {
			$('#TabContract').children('.employee-tabs-group-content').fadeIn(100);
		});
		$('#TabDocumentsBtn, #TabDocumentsBtnAlt').on('click', function () {
			$('#TabDocuments').children('.employee-tabs-group-content').fadeIn(100);
		});
		$('#TabAcademicBtn').on('click', function () {
			$('#TabAcademic').children('.employee-tabs-group-content').fadeIn(100);
		});
		$('#TabEmploymentsBtn').on('click', function () {
			$('#TabEmployments').children('.employee-tabs-group-content').fadeIn(100);
		});
		$('#TabReferencesBtn').on('click', function () {
			$('#TabReferences').children('.employee-tabs-group-content').fadeIn(100);
		});
		$('#TabBeneficiariesBtn').on('click', function () {
			$('#TabBeneficiaries').children('.employee-tabs-group-content').fadeIn(100);
		});
		$('#TabNotesBtn').on('click', function () {
			$('#TabNotes').children('.employee-tabs-group-content').fadeIn(100);
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
		$('.ModalHire').on('click', function () {
			$('#idToHire').val($(this).attr('id'));
			console.log($('#idToHire').val());
		});
		$('.ExtendButton').on('click', function () {
			$('#ExtendID').val($(this).attr('id'));
			console.log($('#ExtendID').val());
			console.log($('#ExtendDate').val());
		});
		$('.ReminderButton').on('click', function () {
			$('#ReminderID').val($(this).attr('id'));
			console.log($('#ReminderID').val());
		});
		$('#ListContractHistory').DataTable();
		// Contract Bar
		var rPercentage = $("#TimeLeft").val();
		// if (rPercentage > 100) {
		// 	rPercentage = 100;
		// }
		$('.progressRemaining').animate({width:rPercentage + "%"},1500);
		$('.progress_value').text(rPercentage + "%");
		$('.a_eImage').on('click', function () {
			var src1 = $(this).attr('id');
			$("#enlargeImage_doc").attr("src", src1);
		});

	});
	function hideModal() {
		$("#EmpContractModal").modal('hide');
	}
</script>
<style>
	.dropdown-item:hover {
		background-color: rgba(235, 235, 235, 1.0);
	}
	.blacklisted-notice {
		border-radius: 6px;
		background-color: rgba(255, 50, 50, 0.25);
	}
</style>
<textarea id="text" style="display: none;"></textarea>
</html>