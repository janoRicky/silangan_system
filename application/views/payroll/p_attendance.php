<?php $T_Header;?>
<body>
	<div class="wrapper wercher-background-lowpoly">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="row rcontent PrintOutTable mt-5">
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
					
					<div class="w-100 mt-4 mb-4 mr-3 ml-3 p-4" style="border: 1px solid rgba(0,0,0,0.1); border-radius: 5px;">
						<?php echo form_open(base_url().'ViewThisAttendance','method="get"'); ?>
						<div class="fom-row">
							<input class="form-control" type="text" name="ApplicantID" hidden="" value="<?php echo $getApplicantDataa['ApplicantID'];?>">
							<div class="form-group col-12 col-md-2" style="display: inline-block; float: left;">
								<label>Start Date</label>
								<input class="form-control" type="date" name="startDate" value="<?php echo $_GET['startDate'];?>">
							</div>
							<div class="form-group col-12 col-md-2" style="display: inline-block; float: left;">
								<label>End Date</label>
								<input class="form-control" type="date" name="EndDate" value="<?php echo $_GET['EndDate'];?>">
							</div>
							<div class="form-group col-12" style="display: block; float: left;">
								<button class="btn btn-success" type="submit">
									<i class="fas fa-filter f-w"></i> Filter Date
								</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
					<div class="w-100 mb-4 ml-3 mr-3 p-4" style="border: 1px solid rgba(0,0,0,0.1); border-radius: 5px;">
						<div class="fom-row">
							<button class="btn btn-primary" type="button">
								<i class="fas fa-receipt"></i> View Payslips
							</button>
							<button id="submitformslip" class="btn btn-success" type="button">
								<i class="fas fa-receipt"></i> Generate Payslip
							</button>
						</div>
					</div>
					<div class="col-sm-12 col-mb-12 mt-2">
						<div class="table-responsive p-1">
							<table id="dateTable" class="table table-condensed table-bordered w-100" data-page-length='25'>
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
										<tr class='clickable-row <?php if ($row['row_status'] == 2) {
											echo 'absent_back';
										} ?>'>
										<td class="text-center">
											<input id="sel_ids" class="checkSelectall chk_customsize" type="checkbox" name="row_id[]" value="<?php echo $row['id']; ?>">
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
										<?php switch ($row['row_status']) {
											case '0':
											echo '<td id="'.$row['id'].'" class="text-center vm_witdata" data-toggle="tooltip" data-html="true" title="Need update">
											<i class="fas fa-ban" style="color: #E47216;"></i>
											</td>';
											break;
											case '1':
											echo '<td id="'.$row['id'].'" class="text-center vm_witdata" data-toggle="tooltip" data-html="true" title="Updated">
											<i class="fas fa-check-circle" style="color: #0DB425;"></i>
											</td>';
											break;
											case '2':
											echo '<td id="'.$row['id'].'" class="text-center vm_witdata" data-toggle="tooltip" data-html="true" title="Absent">
											<i class="fas fa-times-circle"></i>
											</td>';
											break;
											default:
											echo '<td></td>';
											break;
										} ?>
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
						$('#otpay').val(obj[0]['ot_earned']);
						
						
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
				$('.checkSelectall').removeClass("for_submit");
			} else {
				$('.checkSelectall').prop( "checked",true).change();
				$('.checkSelectall').addClass("for_submit");
			}
		});

		$('#time_inam , #time_outam , #time_inpm ,#time_outpm').on('change', function () {

			var time_inam = $('#time_inam').val();
			var time_outam = $('#time_outam').val();
			var time_inpm = $('#time_inpm').val();
			var time_outpm = $('#time_outpm').val();

			if (time_outam == "" && time_inpm == "") 
			{
				var amtime1 = time_inam.split(':'), amtime2 = time_outpm.split(':');
				var hours1 = parseInt(amtime1[0], 10), 
				hours2 = parseInt(amtime2[0], 10),
				mins1 = parseInt(amtime1[1], 10),
				mins2 = parseInt(amtime2[1], 10);
				var amhours = hours2 - hours1, mins = 0;
				if(amhours < 0) amhours = 24 + amhours;
				if(mins2 >= mins1) {
					mins = mins2 - mins1;
				}
				else {
					mins = (mins2 + 60) - mins1;
					amhours--;
				}
				mins = mins / 60; 
				amhours += mins;
				amhours = amhours.toFixed(2);
				var newtotal = parseFloat(amhours);

			}
			else if (time_inpm == "" && time_outpm == "") {
				var amtime1 = time_inam.split(':'), amtime2 = time_outam.split(':');
				var hours1 = parseInt(amtime1[0], 10), 
				hours2 = parseInt(amtime2[0], 10),
				mins1 = parseInt(amtime1[1], 10),
				mins2 = parseInt(amtime2[1], 10);
				var amhours = hours2 - hours1, mins = 0;
				if(amhours < 0) amhours = 24 + amhours;
				if(mins2 >= mins1) {
					mins = mins2 - mins1;
				}
				else {
					mins = (mins2 + 60) - mins1;
					amhours--;
				}
				mins = mins / 60; 
				amhours += mins;
				amhours = amhours.toFixed(2);
				var newtotal = parseFloat(amhours);
			}
			else if (time_inam == "" && time_outam == "") {
				var amtime1 = time_inpm.split(':'), amtime2 = time_outpm.split(':');
				var hours1 = parseInt(amtime1[0], 10), 
				hours2 = parseInt(amtime2[0], 10),
				mins1 = parseInt(amtime1[1], 10),
				mins2 = parseInt(amtime2[1], 10);
				var amhours = hours2 - hours1, mins = 0;
				if(amhours < 0) amhours = 24 + amhours;
				if(mins2 >= mins1) {
					mins = mins2 - mins1;
				}
				else {
					mins = (mins2 + 60) - mins1;
					amhours--;
				}
				mins = mins / 60; 
				amhours += mins;
				amhours = amhours.toFixed(2);
				var newtotal = parseFloat(amhours);
			}
			else if (time_inam != "" && time_outam != "" && time_inpm != "" && time_outpm != "")
			{
				var amin = time_inam.split(':'), amout = time_outam.split(':');
				var h_amin = parseInt(amin[0], 10), 
				h_amout = parseInt(amout[0], 10),
				m_amin = parseInt(amin[1], 10),
				m_amout = parseInt(amout[1], 10);
				var amhours = h_amout - h_amin, minsam = 0;
				if(amhours < 0) amhours = 24 + amhours;
				if(m_amout >= m_amin) {
					mins1 = m_amout - m_amin;
				}
				else {
					mins1 = (m_amout + 60) - m_amin;
					amhours--;
				}
				mins1 = mins1 / 60;
				amhours += mins1;
				amhours = amhours.toFixed(2);


				var pmin = time_inpm.split(':'), pmout = time_outpm.split(':');
				var h_pmin = parseInt(pmin[0], 10), 
				h_pmout = parseInt(pmout[0], 10),
				m_pmin = parseInt(pmin[1], 10),
				m_pmout = parseInt(pmout[1], 10);
				var pmhours = h_pmout - h_pmin, minspm = 0;
				if(pmhours < 0) pmhours = 24 + pmhours;
				if(m_pmout >= m_pmin) {
					mins2 = m_pmout - m_pmin;
				}
				else {
					mins2 = (m_pmout + 60) - m_pmin;
					pmhours--;
				}
				mins2 = mins2 / 60; 
				pmhours += mins2;
				pmhours = pmhours.toFixed(2);

				var newtotal = (parseFloat(amhours) + parseFloat(pmhours));
			}

			var c_rate = $('#cur_rate').val() / 8;		//RATE

			if (newtotal > 8) {		//CHECK IF EMPLOYEE HAVE OVERTIME
				var dtotal = 8;
			}
			else
			{
				var dtotal = newtotal;
			}

			var totalPay = dtotal * c_rate;
			var novertime , totaOtearned , holidayrate

			if ($('#regular_day').is(':checked')) {
				holidayrate = 2.60;
			}
			else if ($('#sp_day').is(':checked')) {
				holidayrate = 1.69;
			}
			else {
				holidayrate = 1.25;
			}
			
			if (newtotal > 8) {
				novertime = newtotal - 8;
				novertime = novertime * 60;
				overtimeh = newtotal - 8;

				var otvarrr = (parseFloat(c_rate) * holidayrate);
				totaOtearned = (parseFloat(otvarrr) * parseFloat(overtimeh));

			} else {
				novertime = 0;
				totaOtearned = 0;
			}

			$("#overtime").val(novertime);
			$("#totalPay").val(totalPay);
			$("#totalHrs").val(newtotal);
			$("#otpay").val(totaOtearned);

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
$('#submitformslip').on('click', function () {
	if ($('.checkSelectall').is(':checked')) {
		var row_id = $('.for_submit').map(function(){ 
			return this.value; 
		}).get();
	}
	$.ajax({
		type: 'POST',
		url: 'generate_payslip',
		data: {
			'row_id[]': row_id,
		},
		success: function(data) {
			alert(data);
		}
	});
});
$('#shift_type').change(function() {
	if(this.checked) {
		$(this).prop( "checked",true);
		$(this).val('day');
	}
	else
	{
		$(this).prop( "checked",false);
		$(this).val('night');
	}
});
$('#regular_day').change(function() {
	if(this.checked) {
		$(this).prop( "checked",true);
		$(this).val('yes');
	}
	else
	{
		$(this).prop( "checked",false);
		$(this).val('no');
	}
});
$('.checkSelectall').change(function() {
	if(this.checked) {
		$(this).addClass("for_submit");
	}
	else
	{
		$(this).removeClass("for_submit");
	}
});
$('#regular_day').on('change', function () {

	var time_inam = $('#time_inam').val();
	var time_outam = $('#time_outam').val();
	var time_inpm = $('#time_inpm').val();
	var time_outpm = $('#time_outpm').val();

	if(this.checked) {
		if (time_outam == "" && time_inpm == "") 
		{
			var amtime1 = time_inam.split(':'), amtime2 = time_outpm.split(':');
			var hours1 = parseInt(amtime1[0], 10), 
			hours2 = parseInt(amtime2[0], 10),
			mins1 = parseInt(amtime1[1], 10),
			mins2 = parseInt(amtime2[1], 10);
			var amhours = hours2 - hours1, mins = 0;
			if(amhours < 0) amhours = 24 + amhours;
			if(mins2 >= mins1) {
				mins = mins2 - mins1;
			}
			else {
				mins = (mins2 + 60) - mins1;
				amhours--;
			}
			mins = mins / 60; 
			amhours += mins;
			amhours = amhours.toFixed(2);
			var newtotal = parseFloat(amhours);
		}
		else if (time_inpm == "" && time_outpm == "")
		{
			var amtime1 = time_inam.split(':'), amtime2 = time_outam.split(':');
			var hours1 = parseInt(amtime1[0], 10), 
			hours2 = parseInt(amtime2[0], 10),
			mins1 = parseInt(amtime1[1], 10),
			mins2 = parseInt(amtime2[1], 10);
			var amhours = hours2 - hours1, mins = 0;
			if(amhours < 0) amhours = 24 + amhours;
			if(mins2 >= mins1) {
				mins = mins2 - mins1;
			}
			else {
				mins = (mins2 + 60) - mins1;
				amhours--;
			}
			mins = mins / 60; 
			amhours += mins;
			amhours = amhours.toFixed(2);
			var newtotal = parseFloat(amhours);
		}
		else if (time_inam == "" && time_outam == "")
		{
			var amtime1 = time_inpm.split(':'), amtime2 = time_outpm.split(':');
			var hours1 = parseInt(amtime1[0], 10), 
			hours2 = parseInt(amtime2[0], 10),
			mins1 = parseInt(amtime1[1], 10),
			mins2 = parseInt(amtime2[1], 10);
			var amhours = hours2 - hours1, mins = 0;
			if(amhours < 0) amhours = 24 + amhours;
			if(mins2 >= mins1) {
				mins = mins2 - mins1;
			}
			else {
				mins = (mins2 + 60) - mins1;
				amhours--;
			}
			mins = mins / 60; 
			amhours += mins;
			amhours = amhours.toFixed(2);
			var newtotal = parseFloat(amhours);
		}
		else if (time_inam != "" && time_outam != "" && time_inpm != "" && time_outpm != "")
		{
			var amin = time_inam.split(':'), amout = time_outam.split(':');
			var h_amin = parseInt(amin[0], 10), 
			h_amout = parseInt(amout[0], 10),
			m_amin = parseInt(amin[1], 10),
			m_amout = parseInt(amout[1], 10);
			var amhours = h_amout - h_amin, minsam = 0;
			if(amhours < 0) amhours = 24 + amhours;
			if(m_amout >= m_amin) {
				mins1 = m_amout - m_amin;
			}
			else {
				mins1 = (m_amout + 60) - m_amin;
				amhours--;
			}
			mins1 = mins1 / 60;
			amhours += mins1;
			amhours = amhours.toFixed(2);

			var pmin = time_inpm.split(':'), pmout = time_outpm.split(':');
			var h_pmin = parseInt(pmin[0], 10), 
			h_pmout = parseInt(pmout[0], 10),
			m_pmin = parseInt(pmin[1], 10),
			m_pmout = parseInt(pmout[1], 10);
			var pmhours = h_pmout - h_pmin, minspm = 0;
			if(pmhours < 0) pmhours = 24 + pmhours;
			if(m_pmout >= m_pmin) {
				mins2 = m_pmout - m_pmin;
			}
			else {
				mins2 = (m_pmout + 60) - m_pmin;
				pmhours--;
			}
			mins2 = mins2 / 60; 
			pmhours += mins2;
			pmhours = pmhours.toFixed(2);

			var newtotal = (parseFloat(amhours) + parseFloat(pmhours));
		}

		var c_rate = $('#cur_rate').val() / 8;
		if (newtotal > 8) {
			var dtotal = 8;
		}
		else
		{
			var dtotal = newtotal;
		}
		var totalPay = dtotal * c_rate;
		var novertime , totaOtearned
		if (newtotal > 8) {
			novertime = newtotal - 8;
			novertime = novertime * 60;
			overtimeh = newtotal - 8;

			var otvarrr = (parseFloat(c_rate) * 2.60);
			totaOtearned = (parseFloat(otvarrr) * parseFloat(overtimeh));

		} else {
			novertime = 0;
			totaOtearned = 0;
		}
	}
	else
	{
		if (time_outam == "" && time_inpm == "") 
		{
			var amtime1 = time_inam.split(':'), amtime2 = time_outpm.split(':');
			var hours1 = parseInt(amtime1[0], 10), 
			hours2 = parseInt(amtime2[0], 10),
			mins1 = parseInt(amtime1[1], 10),
			mins2 = parseInt(amtime2[1], 10);
			var amhours = hours2 - hours1, mins = 0;
			if(amhours < 0) amhours = 24 + amhours;
			if(mins2 >= mins1) {
				mins = mins2 - mins1;
			}
			else {
				mins = (mins2 + 60) - mins1;
				amhours--;
			}
			mins = mins / 60; 

			amhours += mins;
			amhours = amhours.toFixed(2);
			var newtotal = parseFloat(amhours);
		}
		else if (time_inpm == "" && time_outpm == "")
		{
			var amtime1 = time_inam.split(':'), amtime2 = time_outam.split(':');
			var hours1 = parseInt(amtime1[0], 10), 
			hours2 = parseInt(amtime2[0], 10),
			mins1 = parseInt(amtime1[1], 10),
			mins2 = parseInt(amtime2[1], 10);
			var amhours = hours2 - hours1, mins = 0;
			if(amhours < 0) amhours = 24 + amhours;
			if(mins2 >= mins1) {
				mins = mins2 - mins1;
			}
			else {
				mins = (mins2 + 60) - mins1;
				amhours--;
			}
			mins = mins / 60; 
			amhours += mins;
			amhours = amhours.toFixed(2);
			var newtotal = parseFloat(amhours);
		}
		else if (time_inam == "" && time_outam == "")
		{
			var amtime1 = time_inpm.split(':'), amtime2 = time_outpm.split(':');
			var hours1 = parseInt(amtime1[0], 10), 
			hours2 = parseInt(amtime2[0], 10),
			mins1 = parseInt(amtime1[1], 10),
			mins2 = parseInt(amtime2[1], 10);
			var amhours = hours2 - hours1, mins = 0;
			if(amhours < 0) amhours = 24 + amhours;
			if(mins2 >= mins1) {
				mins = mins2 - mins1;
			}
			else {
				mins = (mins2 + 60) - mins1;
				amhours--;
			}
			mins = mins / 60; 
			amhours += mins;
			amhours = amhours.toFixed(2);
			var newtotal = parseFloat(amhours);
		}
		else if (time_inam != "" && time_outam != "" && time_inpm != "" && time_outpm != "")
		{
			var amin = time_inam.split(':'), amout = time_outam.split(':');
			var h_amin = parseInt(amin[0], 10), 
			h_amout = parseInt(amout[0], 10),
			m_amin = parseInt(amin[1], 10),
			m_amout = parseInt(amout[1], 10);
			var amhours = h_amout - h_amin, minsam = 0;
			if(amhours < 0) amhours = 24 + amhours;
			if(m_amout >= m_amin) {
				mins1 = m_amout - m_amin;
			}
			else {
				mins1 = (m_amout + 60) - m_amin;
				amhours--;
			}
			mins1 = mins1 / 60;
			amhours += mins1;
			amhours = amhours.toFixed(2);
			var pmin = time_inpm.split(':'), pmout = time_outpm.split(':');
			var h_pmin = parseInt(pmin[0], 10), 
			h_pmout = parseInt(pmout[0], 10),
			m_pmin = parseInt(pmin[1], 10),
			m_pmout = parseInt(pmout[1], 10);
			var pmhours = h_pmout - h_pmin, minspm = 0;
			if(pmhours < 0) pmhours = 24 + pmhours;
			if(m_pmout >= m_pmin) {
				mins2 = m_pmout - m_pmin;
			}
			else {
				mins2 = (m_pmout + 60) - m_pmin;
				pmhours--;
			}
			mins2 = mins2 / 60; 
			pmhours += mins2;
			pmhours = pmhours.toFixed(2);
			var newtotal = (parseFloat(amhours) + parseFloat(pmhours));
		}

		var c_rate = $('#cur_rate').val() / 8;

		if (newtotal > 8) {
			var dtotal = 8;
		}
		else
		{
			var dtotal = newtotal;
		}
		var totalPay = dtotal * c_rate;
		var novertime , totaOtearned
		if (newtotal > 8) {
			novertime = newtotal - 8;
			novertime = novertime * 60;
			overtimeh = newtotal - 8;

			var otvarrr = (parseFloat(c_rate) * 1.25);
			totaOtearned = (parseFloat(otvarrr) * parseFloat(overtimeh));

		} else {
			novertime = 0;
			totaOtearned = 0;
		}
	}

	$("#overtime").val(novertime);
	$("#totalPay").val(totalPay);
	$("#totalHrs").val(newtotal);
	$("#otpay").val(totaOtearned);
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
	.absent_back {
		background-color: #F23D3D;
		color: #FFFFFF;
	}
	#dateTable tbody tr:hover {
		background-color: rgba(125, 125, 255, 0.25);
		cursor: pointer;
		color: #3B3B3B;
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