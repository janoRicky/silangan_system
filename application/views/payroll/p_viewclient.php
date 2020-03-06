<?php $T_Header;?>
<?php
	// $IsFromExcel = False;
?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<?php echo $this->session->flashdata('prompts'); ?>
				<div class="row mt-5">
					<div class="col-8 mb-2">
						<form action="<?php echo base_url().'ImportExcel'; ?>" method="post" enctype="multipart/form-data">
							<input id="ExcelClientID" type="hidden" name="ExcelClientID" value="<?php echo $ClientID; ?>">
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
						<table id="WeeklyTable" class="table table-condensed">
							<thead>
								<th style="min-width: 100px;">Applicant ID</th>
								<th style="min-width: 300px;">Name</th>
								<th style="min-width: 75px;">Salary (₱)</th>
								<?php foreach ($GetWeeklyDates->result_array() as $row): ?>
									<th><?php echo $row['Time']; ?></th>
								<?php endforeach; ?>
								<th style="min-width: 75px;">Reg. Hrs</th>
								<th style="min-width: 75px;">Total OT Hrs</th>
							</thead>
							<tbody>
								<?php foreach ($GetWeeklyListEmployee->result_array() as $row):
									$TotalRegHours = 0;
									$TotalOTHours = 0;?>
									<tr id="<?php echo $row['SalaryExpected']; ?>" data-clientid="<?php echo $row['ClientEmployed']; ?>" data="<?php echo $row['ApplicantID']; ?>" class='clickable-row' data-toggle="modal" data-target="#HoursWeeklyModal_<?php echo $row['ApplicantID']; ?>">
										<td><?php echo $row['ApplicantID'];?></td>
										<td><?php echo $row['LastName'] . ', ' . $row['FirstName'] . ' ' . $row['MiddleInitial'];?></td>
										<td><?php echo $row['SalaryExpected'];?></td>
										<?php foreach ($GetWeeklyDates->result_array() as $brow):
											?> <td> <?php
											if($this->Model_Selects->GetMatchingDates($row['ApplicantID'], $brow['Time'])->num_rows() > 0) {
												foreach ($this->Model_Selects->GetMatchingDates($row['ApplicantID'], $brow['Time'])->result_array() as $nrow):
													$Hours = $nrow['Hours'];
													$OT = $nrow['Overtime'];
													$totalh =  $nrow['Hours'] + $nrow['Overtime'];
													echo '<div data-toggle="tooltip" data-placement="top" data-html="true" title="Regular Hours: '. $Hours . '<br>Overtime: ' . $nrow['Overtime'] . '">' . $totalh . '</div>';
													$TotalRegHours = $TotalRegHours + $Hours;
													$TotalOTHours = $TotalOTHours + $OT;
												endforeach;
											} else {
												echo '0';
											} ?> </td>
										<?php endforeach; ?>
										<td><?php echo $TotalRegHours; ?></td>
										<td><?php echo $TotalOTHours; ?></td>
<!-- 										<td class="text-center">
											<button id="<?php echo $row['Salary']; ?>" data="<?php echo $row['ApplicantID']; ?>" type="button" class="btn btn-primary btn-sm HoursButton" data-toggle="modal" data-target="#HoursWeeklyModal"><i  class="fas fa-clock"></i> Set</button>
											<button type="button" class="btn btn-primary btn-sm w-100 mb-1" data-toggle="modal" data-target="#HoursWeeklyModal"><i  class="fas fa-list"></i> Contract</button>
											<button type="button" class="btn btn-primary btn-sm w-100 mb-1" data-toggle="modal" data-target="#HoursWeeklyModal"><i  class="fas fa-book"></i> History</button>
										</td> -->
										</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- <div class="col-sm-8 col-md-8 ml-auto text-right PrintExclude">
						<button id="ShowDemo" type="button" class="btn btn-primary mr-auto"><i class="fas fa-flask"></i> Demo</button>
						<button type="button" class="btn btn-primary mr-auto"><i class="fas fa-import-file"></i> Import Excel File</button>
						<button onClick="printContent('PrintOutTable')" type="button" class="btn btn-primary mr-auto"><i class="fas fa-print"></i> Print</button>
					</div>
					<div id="TaxTable" class="col-sm-12"> -->

						<?php

						// if ( $xlsx = SimpleXLSX::parse(base_url() . 'assets/excel/Tax Calc.xlsx')) {

						// 	echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';

						// 	$dim = $xlsx->dimension();
						// 	$cols = $dim[0];

						// 	foreach ( $xlsx->rows() as $k => $r ) {
						// 		//		if ($k == 0) continue; // skip first row
						// 		echo '<tr>';
						// 		for ( $i = 0; $i < $cols; $i ++ ) {
						// 			echo '<td class="test">' . ( isset( $r[ $i ] ) ? $r[ $i ] : '&nbsp;' ) . '</td>';
						// 		}
						// 		echo '</tr>';
						// 	}
						// 	echo '</table>';
						// } else {
						// 	echo SimpleXLSX::parseError();
						// }
						?>

						<!-- <table class="table table-hover">
							<th>Compensation Range</th>
							<th>Withholding Tax</th>
							<tr>
								<td>0</td>
								<td>0 (0%)</td>
							</tr>
							<tr>
								<td>10,416 to 16,666</td>
								<td>0 (20%)</td>
							</tr>
							<tr>
								<td>16,667 to 33,333</td>
								<td>1250 (25%)</td>
							</tr>
							<tr>
								<td>33,334 to 83,333</td>
								<td>5416.67 (30%)</td>
							</tr>
							<tr>
								<td>83,334 to 333,333</td>
								<td>20416.67 (32%)</td>
							</tr>
							<tr>
								<td>333,334 to 500,000</td>
								<td>100,416.67 (35%)</td>
							</tr>
						</table>


					</div>

				</div>
				<div class="row rcontent PrintOut">
					<div class="col-sm-12 col-md-4 mb-5">
						<h4>
							<i class="fas fa-vial"></i> Tax Input for ...
						</h4>
					</div>
					<div class="col-sm-8 col-md-8 ml-auto text-right PrintExclude">
						<button onClick="printContent('PrintOut')" type="button" class="btn btn-primary mr-auto"><i class="fas fa-print"></i> Print</button>
					</div>
					<div class="col-sm-12 form-group">
						<label>Gross Income (Monthly)</label>
						<input type="text" class="form-control" name="Gross" id="Gross" value="20000">
					</div>
					<div class="col-sm-12 col-md-4 form-group">
						<label>SSS</label>
						<input type="text" class="form-control" name="SSS" id="SSS" value="500">
					</div>
					<div class="col-sm-12 col-md-4 form-group">
						<label>PhilHealth</label>
						<input type="text" class="form-control" name="PhilHealth" id="PhilHealth" value="750">
					</div>
					<div class="col-sm-12 col-md-4 form-group">
						<label>HDMF</label>
						<input type="text" class="form-control" class="form-control" name="Gross" id="Gross" value="10%" readonly>
					</div>
					<div class="col-sm-12 form-group text-center PrintExclude">
						<button class="btn btn-primary w-50" onclick="Compute()">Calculate</button>
					</div>
					<div class="col-sm-12 col-md-6 form-group">
						<label>Taxable Income</label>
						<input type="text" class="form-control" name="TaxableIncome" id="TaxableIncome" readonly>
					</div>
					<div class="col-sm-12 col-md-6 form-group">
						<label>Total Tax</label>
						<input type="text" class="form-control" name="TotalTax" id="TotalTax" readonly>
					</div>
					<div class="col-sm-12 col-md-6 form-group">
						<label>Range</label>
						<input type="text" class="form-control" name="CompRange" id="CompRange" readonly>
					</div>
					<div class="col-sm-12 col-md-6 form-group">
						<label>Formula</label>
						<input type="text" class="form-control" name="Formula" id="Formula" readonly>
					</div>
					<div class="col-sm-12 form-group">
						<label>Take Home Pay</label>
						<input type="text" class="form-control" name="TakeHomePay" id="TakeHomePay" readonly>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<?php $this->load->view('_template/modals/m_p_hoursweekly'); ?>
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
<script type="text/javascript">
	$(document).ready(function () {
		// $('input[type=checkbox]').bootstrapToggle()
		// var prevVal;
		// $(".day-indicator").on("change",function(){
		// 	var val = $(this).find('option:selected').val();
		// 	$(".day-container").removeClass(`day-indicator-${prevVal}`).addClass(`day-indicator-${val}`);
		// 	prevVal = val;
		// });
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
	 	<?php foreach ($GetWeeklyDates->result_array() as $row): ?>
		 	$(".Hours_<?php echo $row['Time']; ?>, .OTHours_<?php echo $row['Time']; ?>").bind("input", function () {
		 			// General
	                var PerHour = $(this).closest("#SalaryDays").find('.PerHour').val();
	                var PerDay = $(this).closest("#SalaryDays").find('.PerDay').val();
		 			// Hours
	                var Hours = $(this).closest("#SalaryDays").find('.Hours_<?php echo $row['Time']; ?>').val();
	                // OT
	                var OT = $(this).closest("#SalaryDays").find('.OTHours_<?php echo $row['Time']; ?>').val();

	                var TotalPerDay;
	                // Regular
	                if($(this).closest("#SalaryDays").find('.REGCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25));
	           		}
	           		// Rest Day
	           		if($(this).closest("#SalaryDays").find('.RESTCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 1.3;
	           		}
	           		// Special
	           		if($(this).closest("#SalaryDays").find('.SPCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                if($(this).closest("#SalaryDays").find('.REGCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                	TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 1.3;
		            	}
		                if($(this).closest("#SalaryDays").find('.RESTCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                	TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 1.5;
	           			}
	           		}
	           		// National
	           		if($(this).closest("#SalaryDays").find('.NHCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                if($(this).closest("#SalaryDays").find('.REGCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                	TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 2.0;
		            	}
		                if($(this).closest("#SalaryDays").find('.RESTCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                	TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 2.6;
	           			}
	           		}
	           		// Night additional
	                if($(this).closest("#SalaryDays").find('.NCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                TotalPerDay = TotalPerDay * 1.1;
	           		}
	           		$(this).closest("#SalaryDays").find('.t_pay_<?php echo $row['Time']; ?>').val(TotalPerDay.toFixed(2));

	                // var v = $(this).closest("div.hhhh").find(".t_pay").val();
	                // var perh = $(this).vl();
	                // var hidden_hval = $(this).closest("div.hhhh").find(".h_valueh").val();
	                // $(this).closest("div.hhhh").find(".t_pay").val(perh * hidden_hval);;
	         });
		 	$(".SalaryButtons").on("change", function () {
		 			// General
	                var PerHour = $(this).closest("#SalaryDays").find('.PerHour').val();
	                var PerDay = $(this).closest("#SalaryDays").find('.PerDay').val();
		 			// Hours
	                var Hours = $(this).closest("#SalaryDays").find('.Hours_<?php echo $row['Time']; ?>').val();
	                // OT
	                var OT = $(this).closest("#SalaryDays").find('.OTHours_<?php echo $row['Time']; ?>').val();

	                var TotalPerDay;
	                // Regular
	                if($(this).closest("#SalaryDays").find('.REGCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25));
	           		}
	           		// Rest Day
	           		if($(this).closest("#SalaryDays").find('.RESTCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 1.3;
	           		}
	           		// Special
	           		if($(this).closest("#SalaryDays").find('.SPCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                if($(this).closest("#SalaryDays").find('.REGCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                	TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 1.3;
		            	}
		                if($(this).closest("#SalaryDays").find('.RESTCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                	TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 1.5;
	           			}
	           		}
	           		// National
	           		if($(this).closest("#SalaryDays").find('.NHCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                if($(this).closest("#SalaryDays").find('.REGCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                	TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 2.0;
		            	}
		                if($(this).closest("#SalaryDays").find('.RESTCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                	TotalPerDay = ((PerHour * Hours) + ((PerHour * OT) * 1.25)) * 2.6;
	           			}
	           		}
	           		// Night additional
	                if($(this).closest("#SalaryDays").find('.NCheck_<?php echo $row['Time']; ?>').is(":checked")){
		                TotalPerDay = TotalPerDay * 1.1;
	           		}
	           		$(this).closest("#SalaryDays").find('.t_pay_<?php echo $row['Time']; ?>').val(TotalPerDay.toFixed(2));

	                // var v = $(this).closest("div.hhhh").find(".t_pay").val();
	                // var perh = $(this).vl();
	                // var hidden_hval = $(this).closest("div.hhhh").find(".h_valueh").val();
	                // $(this).closest("div.hhhh").find(".t_pay").val(perh * hidden_hval);;
	         });
	 	<?php endforeach; ?>
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