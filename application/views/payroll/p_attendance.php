<?php $T_Header;?>
<body>
	<div class="wrapper wercher-background-lowpoly">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="row rcontent PrintOutTable mt-5">
					<?php echo $this->session->flashdata('prompts'); ?>
					<!-- <div class="col-12 col-sm-12 mt-2 payroll-tabs">
						<ul>
							<li class=""><a href="">DATE</a></li>
							<li><a href="">PAYSLIP</a></li>
						</ul>
					</div> -->
					<div class="col-sm-12 col-md-12 mt-4">
						<h4>
							<i class="fas fa-table fw"></i> Attendance
						</h4>

					</div>
					<div class="col-sm-12 col-md-12 mt-4 mb-2">
						<h5>
							<?php echo $getApplicantDataa['ApplicantID'];?>
						</h5>
						<h6>
							<?php echo $getApplicantDataa['LastName'];?> , <?php echo $getApplicantDataa['FirstName'];?> <?php echo $getApplicantDataa['MiddleInitial'];?>.
						</h6>
						<a href="<?=base_url()?>ViewEmployee?id=<?php echo $getApplicantDataa['ApplicantID'];?>" target="_BLANK" style="text-decoration: none;">
							<i class="fas fa-info-circle fw"></i></i>  View Employee Information
						</a>
					</div>
					<div class="col-4 col-sm-4 col-md-4">
						<h4 class="">
							<!-- Created in  -->
						</h4>
					</div>

					<style type="text/css">
						.date_dsgn {
							background-color: #3AA3A2;
							color: #FFFFFF;
							border: 1px solid #3AA3A2 !important;
							width: 160px;
						}
						.am_dsgn {
							background-color: #62C160;
							color: #FFFFFF;
							border: 1px solid #62C160 !important;
						}
						.pm_dsgn {
							background-color: #C0905C;
							color: #FFFFFF;
							border: 1px solid #C0905C !important;
						}
						.time_dsgm {
							background-color: #D186D8;
							color: #FFFFFF;
							border: 1px solid #D186D8 !important;
						}
					</style>
					<div class="col-12 mt-4 mb-4">
						<button class="btn btn-primary" type="button">
							<i class="fas fa-receipt"></i> View Payslips
						</button>
						<button class="btn btn-success" type="button">
							<i class="fas fa-receipt"></i> Generate Payslip
						</button>
					</div>
					<div class="col-sm-12 col-mb-12 mt-2">
						<div class="table-responsive p-1">
							<table id="dateTable" class="table table-condensed table-bordered w-100">
								<thead>
									<tr style="border: none;">
										<th class="text-center" style="background-color: #23BBD6; color: #EAEAEA; border: none;" data-sortable="false">
											
										</th>
										<th class="text-center date_dsgn">
											DATE
										</th>
										<th colspan="2" class="text-center am_dsgn">
											AM
										</th>
										<th colspan="2" class="text-center pm_dsgn">
											PM
										</th>
										<th colspan="5" class="text-center time_dsgm">
											TIME (Minutes)
										</th>
										<th class="text-center" style="border: none; background-color: #E655E8;color:#EDEDED;">
											<!-- ACTION -->
										</th>
									</tr>
									<tr>
										<th id="selectALl" class="text-center" style="background-color: #23BBD6; color: #EAEAEA; border: none;" data-sortable="false">
											<i class="fas fa-check-double fw"></i>
										</th>
										<th class="text-center date_dsgn">
											YEAR-MONTH-DAY
										</th>
										<th class="text-center am_dsgn">
											IN
										</th>
										<th class="text-center am_dsgn">
											OUT
										</th>
										<th class="text-center pm_dsgn">
											IN
										</th>
										<th class="text-center pm_dsgn">
											OUT
										</th>
										<th class="text-center time_dsgm">
											LATE
										</th>
										<th class="text-center time_dsgm">
											EARLY LEAVE
										</th>
										<th class="text-center time_dsgm">
											ABSENCE
										</th>
										<th class="text-center time_dsgm">
											OVERTIME
										</th>
										<th class="text-center time_dsgm">
											TOTAL
										</th>
										<th class="text-center" style="border: none; background-color: #E655E8;color:#EDEDED; width: 85px;">
											STATUS
										</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($GetDateAttendance->result_array() as $row) { ?>
										<tr class='clickable-row'>
											<td class="text-center">
												<input class="checkSelectall chk_customsize" type="checkbox" name="row_id[]" value="<?php echo $row['id']; ?>">
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php echo $row['Date_Time']; ?>
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php echo $row['Timein_AM']; ?>
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php echo $row['Timeout_AM']; ?>
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php echo $row['Timein_PM']; ?>
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php echo $row['Timeout_PM']; ?>
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php if (!isset($row['Late_Time']) || $row['Late_Time'] < 1) {
													echo "0";
												} else {
													echo $row['Late_Time'];
												} ?>
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php if (!isset($row['Leave_Early']) || $row['Leave_Early'] < 1) {
													echo "0";
												} else {
													echo $row['Leave_Early'];
												} ?>
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php if (!isset($row['Absence_Time']) || $row['Absence_Time'] < 1) {
													echo "0";
												} else {
													echo $row['Absence_Time'];
												} ?>
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php if (isset($row['overtime']) || $row['overtime'] < 1) {
													echo $row['overtime'];
												} ?>
											</td>
											<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata">
												<?php if (!isset($row['Total_BYmin']) || $row['Total_BYmin'] < 1) { ?>
													0
												<?php } else { ?>
													<span data-toggle="tooltip" data-html="true" title="<?php echo 'Regular Hrs : '.floor($row['Total_BYmin']/60).' Hr(s) </br>OT : '.($row['Total_BYmin']%60).' min(s)'; ?>"><?php echo $row['Total_BYmin']; ?></span>
												<?php } ?>
											</td>
											<?php if ($row['row_status'] == '1') { ?>
												<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata" data-toggle="tooltip" data-html="true" title="Updated">
													<i class="fas fa-check-circle" style="color: #0DB425;"></i>
												</td>
											<?php } else { ?>
												<td id="<?php echo $row['id']; ?>" class="text-center vm_witdata" data-toggle="tooltip" data-html="true" title="Need update">
													<i class="fas fa-ban" style="color: #D83838;"></i>
												</td>
											<?php } ?>
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
	<?php $this->load->view('_template/modals/m_p_attendance'); ?>
</body>
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
		$('#TaxTable').hide();
		$('#dateTable').DataTable();
		$('#dateTable').on('click', '.vm_witdata', function ()
		{
			var id = $(this).attr('id');
			$.ajax({
				type: "POST",
				url: '<?=base_url();?>GetDateByApplicantID',
				data: {id: id},
				success: function(response){
					var obj = JSON.parse(response);
						// alert(obj[0]['Timein_AM']);
						// $('.appliid').html();
						$('#date_id').val(obj[0]['id']);

						
						$('#dateTitle').html("Date checked-in <strong>" + obj[0]['Date_Time'] + "</strong>");
						$('#time_inam').val(obj[0]['Timein_AM']);
						$('#time_outam').val(obj[0]['Timeout_AM']);
						$('#time_inpm').val(obj[0]['Timein_PM']);
						$('#time_outpm').val(obj[0]['Timeout_PM']);
						$('#record_note').val(obj[0]['Note']);

						// SHIFT TYPE STATUS
						if (obj[0]['shift_type'] == 'day') {
							$('#shift_type').prop( "checked",true).change();
							$('#shift_type').val('day');
						}
						else
						{
							// if (true) {}
							$('#shift_type').prop( "checked",false).change();
							$('#shift_type').val('night');
						}
						// REGULAR DAY STATUS
						if (obj[0]['regular_day'] == 'yes') {
							$('#regular_day').prop( "checked",true).change();
							$('#regular_day').val('yes');
						} else {
							$('#regular_day').prop( "checked",false).change();
							$('#regular_day').val('no');
						}
						// SP DAY
						if (obj[0]['sp_day'] == 'yes') {
							$('#sp_day').prop( "checked",true).change();
							$('#sp_day').val('yes');
						} else {
							$('#sp_day').prop( "checked",false).change();
							$('#sp_day').val('no');
						}
						// NH DAY
						if (obj[0]['nh_day'] == 'yes') {
							$('#nh_day').prop( "checked",true).change();
							$('#nh_day').val('yes');
						} else {
							$('#nh_day').prop( "checked",false).change();
							$('#nh_day').val('no');
						}

						$('#cur_rate').val(obj[0]['cur_rate']);
						$('#totalHrs').val(obj[0]['totalHrs']);
						$('#overtime').val(obj[0]['overtime']);
						$('#totalPay').val(obj[0]['totalPay']);
						
						$('#modalDateEditor').modal({
							backdrop: 'static',
							keyboard: false
						});
					}
				});
		});
		
		$('#selectALl').on('click', function () {
			if ($('.checkSelectall').is(':checked')) {
				$('.checkSelectall').prop( "checked",false).change();
			} else {
				$('.checkSelectall').prop( "checked",true).change();
			}
		});
		$('#time_inam , #time_outam , #time_inpm ,#time_outpm').on('change', function () {

			var amtime1 = $("#time_inam").val().split(':'), amtime2 = $("#time_outam").val().split(':');
		     var hours1 = parseInt(amtime1[0], 10), 
		         hours2 = parseInt(amtime2[0], 10),
		         mins1 = parseInt(amtime1[1], 10),
		         mins2 = parseInt(amtime2[1], 10);
		     var amhours = hours2 - hours1, mins = 0;
		     // get hours
		     if(amhours < 0) amhours = 24 + amhours;

		     // get minutes
		     if(mins2 >= mins1) {
		         mins = mins2 - mins1;
		     }
		     else {
		         mins = (mins2 + 60) - mins1;
		         amhours--;
		     }

		     // convert to fraction of 60
		     mins = mins / 60; 

		     amhours += mins;
		     amhours = amhours.toFixed(2);

		     var pmtime1 = $("#time_inpm").val().split(':'), pmtime2 = $("#time_outpm").val().split(':');
		     var hours3 = parseInt(pmtime1[0], 10), 
		         hours4 = parseInt(pmtime2[0], 10),
		         mins3 = parseInt(pmtime1[1], 10),
		         mins4 = parseInt(pmtime2[1], 10);
		     var pmhours = hours4 - hours3, mins = 0;
		     // get hours
		     if(pmhours < 0) pmhours = 24 + pmhours;

		     // get minutes
		     if(mins4 >= mins3) {
		         mins1 = mins4 - mins3;
		     }
		     else {
		         mins1 = (mins4 + 60) - mins3;
		         pmhours--;
		     }

		     // convert to fraction of 60
		     mins1 = mins1 / 60; 

		     pmhours += mins1;
		     pmhours = pmhours.toFixed(2);

	         
	         var newtotal = (parseFloat(amhours) + parseFloat(pmhours));


	         var c_rate = $('#cur_rate').val() / 8;
	         if (newtotal > 8) {
	         	var dtotal = 8;
	         }
	         else
	         {
	         	var dtotal = newtotal;
	         }

	         var totalPay = dtotal * c_rate;
	         var novertime
	         if (newtotal >= 8) {
	         	novertime = newtotal - 8;
	         	novertime = novertime * 60;
	         } else {
	         	novertime = 0;
	         }
	         $("#overtime").val(novertime);
	         $("#totalPay").val(totalPay);
	         $("#totalHrs").val(newtotal);

	         if ($("#totalHrs").val() < 0) {
	         	Command: toastr["error"]("Error in time checked-in.", "Warning!")
	         	toastr.options = {
	         		"showDuration": "300",
	         		"hideDuration": "1000",
	         		"timeOut": "5000",
	         		"extendedTimeOut": "1000",
	         		"showEasing": "swing",
	         		"hideEasing": "linear",
	         		"showMethod": "fadeIn",
	         		"hideMethod": "fadeOut"
	         	}
	         }
	     });
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		});
	});
</script>
<script type="text/javascript">
	<?php if ($this->session->flashdata('alert_error') == 'amin_error') { ?>
		toastr.options = {
			"positionClass": "toast-bottom-right",
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
		}
		toastr.error('AM Time in is empty!');
	<?php } elseif ($this->session->flashdata('alert_error') == 'amout_error') { ?>
		toastr.options = {
			"positionClass": "toast-bottom-right",
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
		}
		toastr.error('AM Time out is empty!');
	<?php } elseif ($this->session->flashdata('alert_error') == 'pmin_error') { ?>
		toastr.options = {
			"positionClass": "toast-bottom-right",
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
		}
		toastr.error('PM Time out is empty!');
	<?php } elseif ($this->session->flashdata('alert_error') == 'pmout_error') { ?>
		toastr.options = {
			"positionClass": "toast-bottom-right",
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
		}
		toastr.error('PM Time out is empty!');
	<?php } elseif ($this->session->flashdata('alert_error') == 'update_success') { ?>
		toastr.options = {
			"positionClass": "toast-bottom-right",
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
		}
		toastr.success('Record successfuly updated!');
	<?php } elseif ($this->session->flashdata('alert_error') == 'update_error') { ?>
		toastr.options = {
			"positionClass": "toast-bottom-right",
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
		}
		toastr.error('Record update failed!');
	<?php } ?>
</script>

<style>
	#dateTable th {
		font-size: 14px;
	}
	#dateTable td {

	}
	#dateTable tbody tr:hover {
		background-color: rgba(125, 125, 255, 0.25);
		cursor: pointer;
	}
	.modal-open {
		overflow-y: auto !important;
		padding-right: 0 !important;
	}
	.chk_customsize
	{
		/* Double-sized Checkboxes */
		-ms-transform: scale(1.4); /* IE */
		-moz-transform: scale(1.4); /* FF */
		-webkit-transform: scale(1.4); /* Safari and Chrome */
		-o-transform: scale(1.4); /* Opera */
		transform: scale(1.4);
		padding: 10px;
	}
</style>
</html>