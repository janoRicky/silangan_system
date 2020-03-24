<?php $T_Header;?>
<?php
	// $IsFromExcel = False;
?>
<body>
	<div class="wrapper wercher-background-lowpoly">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<?php echo $this->session->flashdata('prompts'); ?>
				<br>
				<div class="col-12 col-sm-12 payroll-tabs">
					<ul>
						<li>
							<a href="<?php echo base_url() ?>ViewBranch?id=<?php echo $BranchID; ?>">Attendance</a>
						</li>
						<li class="payroll-tabs-active">
							<a href="<?php echo base_url() ?>Payrollsss?id=<?php echo $BranchID; ?>">Payroll</a>
						</li>
					</ul>
				</div>
				<div class="rcontent">
					<div class="row">
						<div class="col-8 mb-2">
							<form action="<?php echo base_url().'ImportExcel'; ?>" method="post" enctype="multipart/form-data">
								<input id="ExcelBranchID" type="hidden" name="ExcelBranchID" value="<?php echo $BranchID; ?>">
								<input id="file" type="file" name="file" class="btn btn-success" style="display: none;" onchange="form.submit()">
								<button id="ImportButton" type="button" class="btn btn-success"><i class="fas fa-file-excel"></i> Import</button>
								<button id="ImportButton" type="button" class="btn btn-secondary"><i class="fas fa-lock"></i> Export (WIP)</button>
							</form>
							<!-- <div id="datatables-export"></div> -->
						</div>
						<div class="col-4 mb-2 text-right">
							<button id="ImportButton" type="button" class="btn btn-secondary"><i class="fas fa-lock"></i> Generate Payslip (WIP)</button>
						</div>
						<div class="col-sm-12 col-mb-12">
							<div class="table-responsive w-100">
								<table id="WeeklyTable" class="table table-condensed">
									<thead>
										<th>Applicant ID</th>
										<th>Gross Pay</th>
										<th>Reg. Hrs.</th>
										<th>OT. Hrs.</th>
										<th>SSS Contribution</th>
										<th>TAX</th>
										<th>Net Pay</th>
										<th>Mode</th>
										<th>Date</th>
										<th>PDF</th>
									</thead>
									<tbody>
										<!-- <?php foreach ($GetWeeklyListEmployee->result_array() as $row): ?>
											<tr id="<?php echo $row['SalaryExpected']; ?>" data-branchid="<?php echo $row['BranchEmployed']; ?>" data="<?php echo $row['ApplicantID']; ?>" class='clickable-row' data-toggle="modal" data-target="#applicantPay_<?php echo $row['ApplicantID']; ?>">
												<td><?php echo $row['ApplicantID'];?></td>
												<td><?php echo $row['LastName'] . ', ' . $row['FirstName'] . ' ' . $row['MiddleInitial'];?></td>
												<td><?php echo $row['SalaryExpected'];?></td>
											</tr>
										<?php endforeach; ?> -->
										<?php foreach ($get_applicantContri->result_array() as $row): ?>
											<tr>
												<td>
													<?php echo $row['ApplicantID'];?>
												</td>
												<td>
													<?php echo $row['gross_pay'];?>
												</td>
												<td>
													<?php echo $row['TotalHours'];?>
												</td>
												<td>
													<?php echo $row['TotaOT'];?>
												</td>
												<td>
													<?php echo $row['sss_contri'];?>
												</td>
												<td>
													SAMPLE
												</td>
												<td>
													<?php echo $row['net_pay'];?>
												</td>
												<td>
													<?php switch ($row['c_week']) {
														case '1':
															echo "Weekly";
															break;
														case '2':
															echo "Semi-Weekly";
															break;
														case '4':
															echo "Monthly";
															break;
														default:
															echo "NULL";
															break;
													} ?>
												</td>
												<td>
													<?php echo $row['c_month'];?>
												</td>
												<td>
													<a class="btn btn-primary btn-sm" href="<?=base_url()?>CreatePDF/GeneratePaySlip?id=<?php echo $row['id'];?>"><i class="fas fa-file fa-fw"></i> Print </a>
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
			<!-- Modal -->
			<!-- <?php foreach ($GetWeeklyListEmployee->result_array() as $row): ?>
				<div class="modal fade" id="applicantPay_<?php echo $row['ApplicantID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel"><?php echo $row['ApplicantID'];?> Contributions</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<table class="table table-condensed table-bordered">
									<thead>
										<th>
											Gross Pay
										</th>
										<th>
											SSS Contribution
										</th>
									</thead>
									<tbody>
										<?php foreach ($get_applicantContri->result_array() as $nrow): ?>
									<?php if ($row['ApplicantID'] == $nrow['ApplicantID']): ?>
										<tr>
											<td>
												<?php echo $nrow['gross_pay']; ?>
											</td>
											<td>
												<?php echo $nrow['sss_contri']; ?>
											</td>
										</tr>
									<?php endif ?>
								<?php endforeach ?>
									</tbody>
								</table>
								
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Save changes</button>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach ?> -->
			
			<!-- LOAD MODAL -->
			<div class="modal fade" id="LoadModal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-row">
								<div class="text-center ml-auto mr-auto">
									<div class="spinner-border m-5" role="status"></div>
									<h4>Fetching the table, just for you...</h4>
								</div>
							</div>
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
		$('[data-toggle="tooltip"]').tooltip();
		$('#ImportButton').click(function(){ $('#file').trigger('click'); });
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#ImportButton').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#file").change(function() {
			$('#LoadModal').modal('show');
			readURL(this);
			setTimeout(function (){

				$('.load-hidden-1').fadeIn();

			}, 2000);
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

		var dd_buttons = new $.fn.dataTable.Buttons(table, {
			buttons: [
			{
				extend: 'collection',
				text: '<i class="fas fa-download"></i>',
				className: 'btn btn-primary',

				buttons: [
				{
					extend: 'copy',
					text: '<div class="btn btn-sm btn-info w-100">Copy</div>',
					className: 'dropdown-item w-25 ml-auto',
				},
				{
					extend: 'csv',
					text: '<div class="btn btn-sm btn-info w-100">CSV</div>',
					className: 'dropdown-item w-25 ml-auto',
				},
				{
					extend: 'excel',
					text: '<div class="btn btn-sm btn-info w-100">Excel</div>',
					className: 'dropdown-item w-25 ml-auto',
				},
				{
					extend: 'pdf',
					text: '<div class="btn btn-sm btn-info w-100">PDF</div>',
					className: 'dropdown-item w-25 ml-auto',
				},
				{
					extend: 'print',
					text: '<div class="btn btn-sm btn-info w-100">Print</div>',
					className: 'dropdown-item w-25 ml-auto',
				},
				]
			}
			]
		}).container().appendTo($('#datatables-export'));
	});
</script>
<style>
	#WeeklyTable th {
		font-size: 14px;
	}
	#WeeklyTable td {

	}
	#WeeklyTable tbody tr:hover {
		background-color: rgba(125, 125, 255, 0.25);
		cursor: pointer;
	}
	.modal-open {
		overflow-y: auto !important;
		padding-right: 0 !important;
	}
</style>
</html>