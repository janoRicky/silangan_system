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
				<br>
				<div class="col-12 col-sm-12 payroll-tabs">
					<ul>
						<li>
							<a href="<?php echo base_url() ?>ViewBranch?id=<?php echo $ClientID; ?>&Mode=<?php if (isset($_GET['Mode'])) { echo $_GET['Mode']; } ?>">Attendance</a>
						</li>
						<li class="payroll-tabs-active">
							<a href="<?php echo base_url() ?>Payrollsss?id=<?php echo $ClientID; ?>&Mode=<?php if (isset($_GET['Mode'])) { echo $_GET['Mode']; } ?>">Pay Slip</a>
						</li>
					</ul>
				</div>
				<div class="rcontent">
					<div class="row">
						<div class="col-8 mb-2">
							<form action="<?php echo base_url().'ImportExcel'; ?>" method="post" enctype="multipart/form-data">
								<input id="ExcelBranchID" type="hidden" name="ExcelBranchID" value="<?php echo $ClientID; ?>">
								<input id="file" type="file" name="file" class="btn btn-success" style="display: none;" onchange="form.submit()">
								<button id="ImportButton" type="button" class="btn btn-success"><i class="fas fa-file-excel"></i> Import</button>
								<button id="ImportButton" type="button" class="btn btn-secondary"><i class="fas fa-lock"></i> Export (WIP)</button>
							</form>
							<!-- <div id="datatables-export"></div> -->
						</div>
						<div class="col-4 mb-2 text-right">
							<!-- <a href="<?=base_url()?>export_payslip?id=<?php echo $ClientID; ?>" class="btn btn-secondary"><i class="fas fa-lock"></i> Generate Payslip (WIP)</a> -->
							<button type="button" id="<?php echo $ClientID; ?>" class="btn btn-secondary gen_paysli" data-toggle="modal" data-target="#Gen_paydate"><i class="fas fa-lock"></i> Generate Payslip (WIP)</button>
						</div>
						<div class="col-sm-12 col-mb-12">
							<div class="table-responsive col-12">
								<table id="WeeklyTable" class="table table-condensed">
									<thead>
										<th>APPLICANT ID</th>
										<th>GROSS PAY</th>
										<th>REG. HRS.</th>
										<th>Late HRS.</th>
										<th>OVERTIME</th>
										<th>SSS CONTRI.</th>
										<th>HDMF CONTRI.</th>
										<th>PHILHEALTH CONTRI.</th>
										<th>TAX</th>
										<th>NET PAY</th>
										<th>TOTAL DEDUC.</th>
										<th>PAYMENT</th>
										<th>PDF</th>
									</thead>
									<tbody>
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
													<?php if ($row['Total_Late'] < 1) {
														echo '<strong class="text-success">None</strong>';
													} else 
													{
														echo '<strong class="text-warning">'.$row['Total_Late'].'</strong>';
													}?>
												</td>
												<td>
													<?php echo $row['TotaOT'];?>
												</td>
												<td>
													<?php echo $row['sss_contri'];?>
												</td>
												<td>
													<?php echo $row['hdmf_contri'];?>
												</td>
												<td>
													<?php echo $row['philhealth_contri'];?>
												</td>
												<td>
													<?php echo $row['tax'];?>
												</td>
												<td>
													<?php echo $row['net_pay'];?>
												</td>
												<td>
													<?php echo $row['tota_deduc'];?>
												</td>
												<td>
													<?php if (isset($row['Mode'])) {
														switch ($row['Mode']) {
															case 'Weekly':
															echo '<strong style="color:#2F890B;"> '.$row['Mode'].' </strong>';
															break;
															case 'Semi-Monthly':
															echo '<strong style="color:#AEA40A;"> '.$row['Mode'].' </strong>';
															break;
															case 'Monthly':
															echo '<strong style="color:#A3510F;"> '.$row['Mode'].' </strong>';
															break;
															default:
															echo 'Null';
															break;
														}
													}
													?>
												</td>
												<td>
													<a class="btn btn-primary btn-sm" href="<?=base_url()?>GeneratePaySlip?id=<?php echo $row['id'];?>"><i class="fas fa-file fa-fw"></i> Print </a>
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
	<!-- Modal -->
	<div class="modal fade" id="Gen_paydate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<?php echo form_open(base_url().'export_payslip','method="post"'); ?>
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Generate Payslip</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="col">
							<div class="text-center">
								<h5>
									Choose date to generate
								</h5>
							</div>
						</div>
					</div>
					<input id="h_id" type="hidden" name="h_id" value="">
					<div class="form-row">
						<div class="col">
							<div class="form-group">
								<label>From</label>
								<input class="form-control" type="date" name="fdate">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label>To</label>
								<input class="form-control" type="date" name="tdate">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
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

		$('.gen_paysli').on('click', function () {
			$('#h_id').val($(this).attr('id'));
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