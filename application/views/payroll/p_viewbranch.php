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
				<div class="col-12 col-sm-12 payroll-tabs">
					<ul>
						<li class=""><a href="<?php echo base_url() ?>ViewBranch?id=<?php echo $_GET['id']; ?>&Mode=<?php if (isset($_GET['Mode'])) { echo $_GET['Mode']; } ?>">Attendance</a></li>
						<!-- <li><a href="<?php echo base_url() ?>Payrollsss?id=<?php echo $ClientID; ?>&Mode=<?php if (isset($_GET['Mode'])) { echo $_GET['Mode']; } ?>">Pay Slip</a></li> -->
					</ul>
				</div>
				<div class="rcontent">
					<div class="row">
						<div class="col-8 mb-2">
							<form action="<?php echo base_url().'ImportExcel'; ?>" method="post" enctype="multipart/form-data">
								<input id="ExcelBranchID" type="hidden" name="ExcelBranchID" value="<?php echo $_GET['id']; ?>">
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
									<th style="min-width: 100px;">APPLICANT ID</th>
									<th style="min-width: 300px;">NAME</th>
									<th style="min-width: 75px;">SALARY(₱)</th>
								</thead>
								<tbody>
									<?php if ($GetWeeklyListEmployee->num_rows() > 0) { ?>
										<?php foreach ($GetWeeklyListEmployee->result_array() as $row): ?>
											<tr id="<?php echo $row['ApplicantID']; ?>" data-branchid="<?php echo $row['BranchEmployed']; ?>" data="<?php echo $row['ApplicantID']; ?>" class='clickable-row' data-toggle="modal" data-target="#HoursWeeklyModal_<?php echo $row['ApplicantID']; ?>">
												<td>
													<?php echo $row['ApplicantID']; ?>
												</td>
												<td>
													<?php echo $row['LastName'] . ', ' . $row['FirstName'] . ' ' . $row['MiddleInitial'];?>
												</td>
												<td>
													<?php echo $row['Rate']; ?>
												</td>
											</tr>
										<?php endforeach ?>
									<?php } else { ?>
										<tr>
											<td>

											</td>
											<td>

											</td>
											<td>

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
		<!-- $this->load->view('_template/modals/m_p_hoursweekly'); -->
		<div class="modal" id="ViewAttt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<?php echo form_open(base_url().'ViewThisAttendance','method="get"'); ?>
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header" style="border-bottom: 0px;">
						<p>
							<h4> View Attendance</h4>
						</p>
					</div>
					<div class="modal-header">
						<p>
							<h6><span class="appliid"></span> | <span class="appliname"></span></h6>
						</p>
					</div>
					
					<div class="modal-body">

						<div class="form-row">
							<input type="text" name="ApplicantID" class="in_applicantid" hidden="">
						</div>
						<div class="form-row">
							<div class="col-5 m-auto">
								<div class="form-group text-center">
									<label for="startDate" class=""><strong>START DATE</strong></label>
									<input type="date" class="form-control" id="startDate" name="startDate">
								</div>
							</div>
							<div class="col-5 m-auto">
								<div class="form-group text-center">
									<label for="EndDate" class=""><strong>END DATE</strong></label>
									<input type="date" class="form-control" id="EndDate" name="EndDate">
								</div>
							</div>
						</div>
						
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">View Attendance</button>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
		<!-- LOAD MODAL -->
		<div class="modal fade" id="LoadModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-body">
						<div class="form-row">
							<div class="text-center ml-auto mr-auto">
								<div class="spinner-border m-5" role="status"></div>
								<h4>Please wait warmly</h4>
								<p>This will only take a little bit</p>
								<p class="load-hidden-1" style="display: none;">This is taking longer than necessary...</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<?php $this->load->view('_template/users/u_scripts'); ?>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
			$('#WeeklyTable').on('click', 'tbody > tr', function ()
			{
				var id = $(this).attr('id');
				$('#ViewAttt').modal('show');
				$.ajax({
					type: "POST",
					url: '<?=base_url();?>GetDataByApplicantID',
					data: {id: id},
					success: function(response){
						var obj = JSON.parse(response);
						$('.appliid').html(obj[0]['ApplicantID']);
						$('.appliname').html(obj[0]['LastName'] + ', ' + obj[0]['FirstName'] + ' ' + obj[0]['MiddleInitial']);
						$('.in_applicantid').val(obj[0]['ApplicantID']);
					}
				});
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
			$('#TaxTable').hide();
			$('#MoreOptions').on('click', function () {
				$('#MoreOptions').hide();
				$('.modal-fade').fadeIn();
			});
			var table = $('#WeeklyTable').removeAttr('width').DataTable( {
				"order": [[ 1, "asc" ]],
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