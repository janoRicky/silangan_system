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
						<div class="col-4 col-sm-4 col-md-4 PrintPageName PrintOut">
							<h4 class="tabs-icon">
								<i class="fas fa-building fa-fw"></i> Employers x <?php echo $ShowEmployers->num_rows() ?>
							</h4>
						</div>
						<div class="col-8 col-sm-8 col-md-8 text-right">
							<button class="btn btn-primary" data-toggle="modal" data-target="#addEmployer"><i class="fas fa-user-plus"></i> New</button>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExportModal"><i class="fas fa-download"></i> Export</button>
						</div>
						<div class="col-sm-12">
							<div class="table-responsive pt-4 pb-4 pl-2 pr-2">
								<table id="EmployersTable" class="table table-bordered PrintOut" style="width: 100%;">
									<thead>
										<tr class="text-center align-middle">
											<th> Name </th>
											<th> Contact </th>
											<th> Area </th>
											<th> Address </th>
											<th> Branches </th>
											<th class="text-center PrintExclude" style="width: 5%;"> Action </th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($ShowEmployers->result_array() as $row): ?>
											<tr class="text-center align-middle">
												<td>
													<?php echo $row['LastName']; ?>, <?php echo $row['FirstName']; ?> <?php echo $row['MiddleInitial']; ?>.
												</td>
												<td>
													<?php echo $row['ContactNumber']; ?>
												</td>
												<td>
													<?php echo $row['Area']; ?>
												</td>
												<td>
													<?php echo $row['Address']; ?>
												</td>
												<td>
													<?php echo $this->Model_Selects->GetEmployerBranches($row['EmployerID'])->num_rows(); ?>
												</td>
												<td class="text-center align-middle PrintExclude">
													<a class="btn btn-primary btn-sm w-100 mb-1" href="<?=base_url()?>Employers?employerID=<?php echo $row['EmployerID']; ?>"><i class="fas fa-building"></i> Branches</a>
													<a class="btn btn-primary btn-sm w-100 mb-1" href="<?=base_url()?>ModifyEmployer?id=<?php echo $row['EmployerID']; ?>"><i class="fas fa-edit"></i> Edit</a>
													<a href="<?=base_url()?>RemoveEmployer?id=<?=$row['EmployerID']?>" class="btn btn-danger btn-sm w-100 mb-1" onclick="return confirm('Remove Employer?')"><i class="fas fa-trash"></i> Delete</a>
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
	<!-- MODALS -->
	
	<div class="modal fade" id="employerBranches" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content m-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">Branches of <?php
					$EmployerID = $_GET['employerID'];
					$GetEmployer = $this->Model_Selects->GetEmployerByID($EmployerID);
					foreach($GetEmployer->result_array() as $row):
						echo $row['LastName'] . ", " . $row['FirstName'] . " " . $row['MiddleInitial'] . ".";
					endforeach;
					?> (<?php echo $this->Model_Selects->GetEmployerBranches($EmployerID)->num_rows(); ?>)</h4>
					<div class="text-right">
						<button id="BranchesExportPrint" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Print"><i class="fas fa-print" style="margin-right: -1px;"></i></button>
						<button id="BranchesExportCopy" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="fas fa-clipboard-list" style="margin-right: -1px;"></i></button>
						<button id="BranchesExportExcel" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Export as an Excel file (.xlsx)"><i class="fas fa-file-excel" style="margin-right: -1px;"></i></button>
						<button id="BranchesExportCSV" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Export as a CSV file (.csv)"><i class="fas fa-file-csv" style="margin-right: -1px;"></i></button>
						<button id="BranchesExportPDF" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Export as a PDF file (.pdf)"><i class="fas fa-file-pdf" style="margin-right: -1px;"></i></button>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12 text-right">
							<button class="btn btn-primary" data-toggle="modal" data-target="#addBranch">
								<i class="fas fa-plus"></i> New Branch
							</button>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="pt-3 pb-5 pl-2 pr-2">
								<?php if (isset($_GET['employerID'])): ?>
									<div class="row">
										<div class="table-responsive pb-5 pl-2 pr-2">
											<table id="EmployerBranchesTable" class="table" style="width: 100%;">
												<thead>
													<tr class="text-center">
														<th> Name </th>
														<th> Address </th>
														<th> Contact Number </th>
														<th> ID Suffix </th>
														<th> Employees </th>
														<th> Action </th>
													</tr>
												</thead>
												<tbody>
													<?php 
													$GetEmployerBranches = $this->Model_Selects->GetEmployerBranches($_GET['employerID']);
													foreach ($GetEmployerBranches->result_array() as $row): ?>
														<tr>
															<td class="text-center align-middle">
																<?php echo $row['Name']; ?>
															</td>
															<td class="text-center align-middle">
																<?php echo $row['Address']; ?>
															</td>
															<td class="text-center align-middle">
																<?php echo $row['ContactNumber']; ?>
															</td>
															<td class="text-center align-middle">
																<?php echo $row['EmployeeIDSuffix']; ?>
															</td>
															<td class="text-center align-middle">
																<?php echo $this->Model_Selects->GetWeeklyListEmployee($row['BranchID'])->num_rows(); ?>
															</td>
															<td class="text-center align-middle PrintExclude" width="100">
																<a class="btn btn-primary btn-sm w-100 mb-1" href="<?=base_url()?>Employers?employerID=<?php echo $row['EmployerID']; ?>&branchID=<?php echo $row['BranchID']; ?>"><i class="fas fa-users"></i> Employees</a>
																<a class="btn btn-primary btn-sm w-100 mb-1" href="<?=base_url()?>ModifyBranch?id=<?php echo $row['BranchID']; ?>"><i class="fas fa-edit"></i> Edit</a>
																<a href="<?=base_url()?>RemoveBranch?id=<?=$row['BranchID']?>" class="btn btn-danger btn-sm w-100 mb-1" onclick="return confirm('Remove Branch?')"><i class="fas fa-trash"></i> Delete</a>
															</td>
														</tr>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<div class="modal fade" id="branchEmployees" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content m-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title">
						<?php if (isset($_GET['employerID'])): ?>
							<a class="btn" href="<?=base_url()?>Employers?employerID=<?php echo $_GET['employerID']; ?>">
								<i class="fas fa-arrow-left"></i>
							</a>
						<?php endif; ?>
						Employees of <?php
						$BranchID = $_GET['branchID'];
						$GetBranch = $this->Model_Selects->GetBranchID($BranchID);
						foreach($GetBranch->result_array() as $row):
							echo $row['Name'];
						endforeach;
						?> (<?php echo $this->Model_Selects->GetWeeklyListEmployee($BranchID)->num_rows(); ?>)
					</h4>
					<div class="text-right">
						<button id="EmployeesExportPrint" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Print"><i class="fas fa-print" style="margin-right: -1px;"></i></button>
						<button id="EmployeesExportCopy" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="fas fa-clipboard-list" style="margin-right: -1px;"></i></button>
						<button id="EmployeesExportExcel" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Export as an Excel file (.xlsx)"><i class="fas fa-file-excel" style="margin-right: -1px;"></i></button>
						<button id="EmployeesExportCSV" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Export as a CSV file (.csv)"><i class="fas fa-file-csv" style="margin-right: -1px;"></i></button>
						<button id="EmployeesExportPDF" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Export as a PDF file (.pdf)"><i class="fas fa-file-pdf" style="margin-right: -1px;"></i></button>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12">
							<div class="pt-5 pb-5 pl-2 pr-2">
								<?php if (isset($_GET['branchID'])): ?>
									<div class="row">
										<div class="table-responsive pb-5 pl-2 pr-2">
											<table id="BranchEmployeesTable" class="table" style="width: 100%;">
												<thead>
													<tr class="text-center">
														<th> Employee </th>
														<th> Full Name </th>
														<th> Position </th>
														<th> Rate </th>
														<th> Action </th>
													</tr>
												</thead>
												<tbody>
													<?php 
													$GetWeeklyListEmployee = $this->Model_Selects->GetWeeklyListEmployee($_GET['branchID']);
													foreach ($GetWeeklyListEmployee->result_array() as $row): ?>
														<tr>
															<td class="text-center">
																<div class="col-sm-12">
																	<img src="<?php echo $row['ApplicantImage']; ?>" width="70" height="70" class="rounded-circle">
																</div>
																<div class="col-sm-12 align-middle">
																	<?php if($row['EmployeeID'] != NULL): ?>
																		<?php echo $row['EmployeeID']; ?>
																	<?php else: ?>
																		<?php echo 'No Employee ID'; ?>
																	<?php endif; ?>
																</div>
															</td>
															<td class="text-center align-middle">
																<?php echo $row['LastName']; ?> , <?php echo $row['FirstName']; ?> <?php echo $row['MiddleInitial']; ?>.
															</td>
															<td class="text-center align-middle">
																<?php echo $row['PositionDesired']; ?>
															</td>
															<td class="text-center align-middle">
																<?php echo $row['Rate']; ?>
															</td>
															<td class="text-center align-middle PrintExclude" width="100">
																<a class="btn btn-primary btn-sm w-100 mb-1" href="<?=base_url()?>ViewEmployee?id=<?php echo $row['ApplicantID']; ?>" target="_blank">
																	<i class="fas fa-external-link-alt"></i> View
																</a>
															</td>
														</tr>
													<?php endforeach ?>
												</tbody>
											</table>
										</div>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<div class="modal fade" id="addEmployer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content m-content">
				<?php echo form_open(base_url().'Add_NewEmployer','method="post"');?>
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New Employer</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Last Name</label>
							<input class="form-control" type="text" name="EmployerLastName" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>First Name</label>
							<input class="form-control" type="text" name="EmployerFirstName" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Middle Initial</label>
							<input class="form-control" type="text" name="EmployerMI" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Contact Number</label>
							<input class="form-control" type="text" name="EmployerContact" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Area</label>
							<input class="form-control" type="text" name="EmployerArea" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Address</label>
							<input class="form-control" type="text" name="EmployerAddress" autocomplete="off">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	<div class="modal fade" id="addBranch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content m-content">
				<?php echo form_open(base_url().'Add_NewBranch','method="post" enctype="multipart/form-data"');?>
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New Branch</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input class="form-control" type="hidden" name="EmployerID" autocomplete="off" value="<?php if (isset($_GET['employerID']) && !isset($_GET['branchID'])) echo $_GET['employerID']; ?>">

					<input id="pImageChecker" type="hidden" name="pImageChecker">
					<div class="form-row mb-2">
						<div class="form-group col-sm-12">
							<input type='file' id="imgInp" name="pImage" style="display: none;">
							<?php if(!$this->agent->is_mobile()): ?>
								<img class="image-hover" id="imgPreview" src="<?php echo base_url() ?>assets/img/silangan_default_photo.png" width="100%" height="120">
							<?php else: ?>
								<img class="image-hover" id="imgPreview" src="<?php echo base_url() ?>assets/img/silangan_default_photo_mobile.png" width="100%" height="120">
							<?php endif; ?>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Name</label>
							<input class="form-control" type="text" name="BranchName" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Address</label>
							<input class="form-control" type="text" name="BranchAddress" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Contact Number</label>
							<input class="form-control" type="text" name="BranchContact" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>ID Suffix</label>
							<input class="form-control" type="text" name="EmployeeIDSuffix" autocomplete="off">
						</div>
					</div>
					<div class="form-row pt-2">
						<div class="col-sm-12">
							<h4>Branch Colors</h4>
						</div>
					</div>
					<hr>
					<div class="form-row">
						<div class="form-group col-sm-4">
							<label>NavbarBG</label>
							<input id="NavbarBG" class="form-control" type="color" name="brcolNavbarBG">
						</div>
						<div class="form-group col-sm-4">
							<label>NavbarColor</label>
							<input id="NavbarColor" class="form-control" type="color" name="brcolNavbarColor">
						</div>
						<div class="form-group col-sm-4">
							<label>NavbarBorder</label>
							<input id="NavbarBorder" class="form-control" type="color" name="brcolNavbarBorder">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>NavbarSideBG</label>
							<input id="NavbarSideBG" class="form-control" type="color" name="brcolNavbarSideBG">
						</div>
						<div class="form-group col-sm-6">
							<label>NavbarSideBorder</label>
							<input id="NavbarSideBorder" class="form-control" type="color" name="brcolNavbarSideBorder">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>SidebarBG</label>
							<input id="SidebarBG" class="form-control" type="color" name="brcolSidebarBG">
						</div>
						<div class="form-group col-sm-6">
							<label>SidebarBorder</label>
							<input id="SidebarBorder" class="form-control" type="color" name="brcolSidebarBorder">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-4">
							<label>SideLinkBG</label>
							<input id="SideLinkBG" class="form-control" type="color" name="brcolSideLinkBG">
						</div>
						<div class="form-group col-sm-4">
							<label>SideLinkColor</label>
							<input id="SideLinkColor" class="form-control" type="color" name="brcolSideLinkColor">
						</div>
						<div class="form-group col-sm-4">
							<label>SideLinkBorder</label>
							<input id="SideLinkBorder" class="form-control" type="color" name="brcolSideLinkBorder">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>MainBG</label>
							<input id="MainBG" class="form-control" type="color" name="brcolMainBG">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>WindowsBG</label>
							<input id="WindowsBG" class="form-control" type="color" name="brcolWindowsBG">
						</div>
						<div class="form-group col-sm-6">
							<label>WindowsBorder</label>
							<input id="WindowsBorder" class="form-control" type="color" name="brcolWindowsBorder">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-4">
							<label>TableBG</label>
							<input id="TableBG" class="form-control" type="color" name="brcolTableBG">
						</div>
						<div class="form-group col-sm-4">
							<label>TableColor</label>
							<input id="TableColor" class="form-control" type="color" name="brcolTableColor">
						</div>
						<div class="form-group col-sm-4">
							<label>TableBorder</label>
							<input id="TableBorder" class="form-control" type="color" name="brcolTableBorder">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-3">
							<label>TabsBG</label>
							<input id="TabsBG" class="form-control" type="color" name="brcolTabsBG">
						</div>
						<div class="form-group col-sm-3">
							<label>TabsLinkColor</label>
							<input id="TabsLinkColor" class="form-control" type="color" name="brcolTabsLinkColor">
						</div>
						<div class="form-group col-sm-3">
							<label>TabsActiveColor</label>
							<input id="TabsActiveColor" class="form-control" type="color" name="brcolTabsActiveColor">
						</div>
						<div class="form-group col-sm-3">
							<label>TabsBorder</label>
							<input id="TabsBorder" class="form-control" type="color" name="brcolTabsBorder">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-3">
							<label>ButtonBG</label>
							<input id="ButtonBG" class="form-control" type="color" name="brcolButtonBG">
						</div>
						<div class="form-group col-sm-3">
							<label>ButtonColor</label>
							<input id="ButtonColor" class="form-control" type="color" name="brcolButtonColor">
						</div>
						<div class="form-group col-sm-3">
							<label>ButtonBorder</label>
							<input id="ButtonBorder" class="form-control" type="color" name="brcolButtonBorder">
						</div>
						<div class="form-group col-sm-3">
							<label>ButtonHover</label>
							<input id="ButtonHover" class="form-control" type="color" name="brcolButtonHover">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>ProgressRemaining</label>
							<input id="ProgressRemaining" class="form-control" type="color" name="brcolProgressRemaining">
						</div>
						<div class="form-group col-sm-6">
							<label>ProgressBar</label>
							<input id="ProgressBar" class="form-control" type="color" name="brcolProgressBar">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-6">
							<label>PageNoBG</label>
							<input id="PageNoBG" class="form-control" type="color" name="brcolPageNoBG">
						</div>
						<div class="form-group col-sm-6">
							<label>PageNoColor</label>
							<input id="PageNoColor" class="form-control" type="color" name="brcolPageNoColor">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-4">
							<label>PageNoActiveBG</label>
							<input id="PageNoActiveBG" class="form-control" type="color" name="brcolPageNoActiveBG">
						</div>
						<div class="form-group col-sm-4">
							<label>PageNoActiveColor</label>
							<input id="PageNoActiveColor" class="form-control" type="color" name="brcolPageNoActiveColor">
						</div>
						<div class="form-group col-sm-4">
							<label>PageNoActiveBorder</label>
							<input id="PageNoActiveBorder" class="form-control" type="color" name="brcolPageNoActiveBorder">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>HeadColor</label>
							<input id="HeadColor" class="form-control" type="color" name="brcolHeadColor">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	<!-- EXPORT MODAL -->
	<?php $this->load->view('_template/modals/m_export'); ?>
</body>
<?php $this->load->view('_template/users/u_scripts'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		<?php if (isset($_GET['employerID']) && !isset($_GET['branchID'])): ?>
			$('#employerBranches').modal('show');
			// assign current branch colors to color selection
			<?php
			foreach ($_SESSION['Colors'] as $row) {
				echo "$('#" . $row["Part"] . "').val('" . $row["HexColor"] . "');";
			}
			?>
		<?php elseif(isset($_GET['employerID']) && isset($_GET['branchID'])): ?>
			$('#branchEmployees').modal('show');
		<?php endif; ?>
		$('#EmployeeIDSuffix').bind('input', function() {
			$('#SuffixPreview').val('SL' + $(this).val() + '-####-20');
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
		var employersTable = $('#EmployersTable').DataTable( {
			"order": [[ 4, "desc" ]],
			buttons: [
            {
	            extend: 'print',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3 ]
	            }
	        },
	        {
	            extend: 'copyHtml5',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3 ]
	            }
	        },
	        {
	            extend: 'excelHtml5',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3 ]
	            }
	        },
	        {
	            extend: 'csvHtml5',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3 ]
	            }
	        },
	        {
	            extend: 'pdfHtml5',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3 ]
	            }
	        }
        ]
   		});
		$('#ExportPrint').on('click', function () {
	        employersTable.button('0').trigger();
	    });
	    $('#ExportCopy').on('click', function () {
	        employersTable.button('1').trigger();
	    });
	    $('#ExportExcel').on('click', function () {
	        employersTable.button('2').trigger();
	    });
	    $('#ExportCSV').on('click', function () {
	        employersTable.button('3').trigger();
	    });
	    $('#ExportPDF').on('click', function () {
	        employersTable.button('4').trigger();
    	});
		var branchesTable = $('#EmployerBranchesTable').DataTable( {
			"order": [[ 4, "desc" ]],
			buttons: [
            {
	            extend: 'print',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3, 4 ]
	            }
	        },
	        {
	            extend: 'copyHtml5',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3, 4 ]
	            }
	        },
	        {
	            extend: 'excelHtml5',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3, 4 ]
	            }
	        },
	        {
	            extend: 'csvHtml5',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3, 4 ]
	            }
	        },
	        {
	            extend: 'pdfHtml5',
	            exportOptions: {
	                columns: [ 0, 1, 2, 3, 4 ]
	            }
	        }
        ]
   		});
		$('#BranchesExportPrint').on('click', function () {
	        branchesTable.button('0').trigger();
	    });
	    $('#BranchesExportCopy').on('click', function () {
	        branchesTable.button('1').trigger();
	    });
	    $('#BranchesExportExcel').on('click', function () {
	        branchesTable.button('2').trigger();
	    });
	    $('#BranchesExportCSV').on('click', function () {
	        branchesTable.button('3').trigger();
	    });
	    $('#BranchesExportPDF').on('click', function () {
	        branchesTable.button('4').trigger();
    	});
		var employeesTable = $('#BranchEmployeesTable').DataTable( {
			"order": [[ 1, "desc" ]],
			buttons: [
            {
	            extend: 'print',
	            exportOptions: {
	                columns: [ 1, 2, 3 ]
	            }
	        },
	        {
	            extend: 'copyHtml5',
	            exportOptions: {
	                columns: [ 1, 2, 3 ]
	            }
	        },
	        {
	            extend: 'excelHtml5',
	            exportOptions: {
	                columns: [ 1, 2, 3 ]
	            }
	        },
	        {
	            extend: 'csvHtml5',
	            exportOptions: {
	                columns: [ 1, 2, 3 ]
	            }
	        },
	        {
	            extend: 'pdfHtml5',
	            exportOptions: {
	                columns: [ 1, 2, 3 ]
	            }
	        }
        ]
   		});
		$('#EmployeesExportPrint').on('click', function () {
	        employeesTable.button('0').trigger();
	    });
	    $('#EmployeesExportCopy').on('click', function () {
	        employeesTable.button('1').trigger();
	    });
	    $('#EmployeesExportExcel').on('click', function () {
	        employeesTable.button('2').trigger();
	    });
	    $('#EmployeesExportCSV').on('click', function () {
	        employeesTable.button('3').trigger();
	    });
	    $('#EmployeesExportPDF').on('click', function () {
	        employeesTable.button('4').trigger();
    	});

    	// check branch icon
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
			$('#pImageChecker').val('Has Image')
		});
	});
</script>
</html>