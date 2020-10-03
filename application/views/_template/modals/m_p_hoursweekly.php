<?php foreach ($GetWeeklyListEmployee->result_array() as $erow): ?>
<div class="modal fade wercher-modal-background" id="HoursWeeklyModal_<?php echo $erow['ApplicantID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xxl" role="document">
			<div class="modal-content m-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Work Hours for <?php echo $erow['LastName'] . ', ' . $erow['FirstName'] . ' ' . $erow['MiddleInitial'] ?> | <span class="TotalHoursInAWeek">48</span> Hours Total</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url().'SetWeeklyHours'; ?>" method="post">
						<input id="ApplicantID" type="hidden" name="ApplicantID" value="<?php echo $erow['ApplicantID']; ?>">
						<input id="BranchID" type="hidden" name="BranchID" value="<?php echo $erow['BranchEmployed']; ?>">
						<div class="form-row">
							<div class="form-group col-sm-12 col-md-2">
								<label>Type</label>
								<input id="SalaryType" class="form-control" type="text" name="" value="Weekly" readonly>
							</div>
							<div class="form-group col-sm-12 col-md-2">
								<label>Salary</label>
								<div class="input-icon-sm">
									<input id="Salary" class="form-control" type="number" name="" value="<?php echo $erow['Rate']; ?>" readonly>
									<i>₱</i>
								</div>
							</div>
							<div class="form-group col-sm-12 col-md-2">
								<label>Per&nbsp;Day</label>
								<div class="input-icon-sm">
									<input id="AveragePerHour" class="form-control" type="number" name="" value="<?php
									$RatePerDay = $erow['Rate'] / 26;
									echo round($RatePerDay, 2);
									 ?>" readonly>
									<i>₱</i>
								</div>
							</div>
						</div>
						<div id="SalaryDays" class="form-row">
							<?php foreach ($GetWeeklyDates->result_array() as $row): ?>
								<input id="<?php echo $row['Time']; ?>" type="hidden" name="<?php echo $row['Time']; ?>" value="<?php echo $row['Time']; ?>">
								<div class="day-hover day-container_<?php echo $row['Time']; ?> col-sm-12 col-md-3 text-center rcontent mr-4">
									<div class="row">
										<div class="col-sm-12 day-container-date">
											<b><?php echo $row['Time']; ?></b>
										</div>
									</div>
									<div class="form-row mt-2">
										<div class="form-group col-8">
											<div>Hours</div>
											<input id="" class="form-control Hours_<?php echo $row['Time']; ?>" type="number" name="Hours_<?php echo $row['Time']; ?>" value="<?php
													foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														if($nrow['Hours'] != NULL) {
															echo $nrow['Hours'];
														} else {
															echo '0';
														}
													endforeach;
											?>">
										</div>
										<div class="form-group col-4">
											<div class="">Overtime</div>
											<input class="form-control OTHours_<?php echo $row['Time']; ?>" type="number" name="OTHours_<?php echo $row['Time']; ?>" value="<?php
													foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														if($nrow['Overtime'] != NULL) {
															echo $nrow['Overtime'];
														} else {
															echo '0';
														}
													endforeach;
											?>">
										</div>
										<div class="col-sm-12 text-center NightPremium">
											<h6 class="line-through-text-lite">
												<span>
													Night Premium
												</span>
											</h6>
										</div>
										<div class="form-group col-8 NightPremium">
											<div>Hours</div>
											<input id="" class="form-control NightHours_<?php echo $row['Time']; ?>" type="number" name="NightHours_<?php echo $row['Time']; ?>" value="<?php
													foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														if($nrow['NightHours'] != NULL) {
															echo $nrow['NightHours'];
														} else {
															echo '0';
														}
													endforeach;
											?>">
										</div>
										<div class="form-group col-4 NightPremium">
											<div class="">Overtime</div>
											<input class="form-control NightOTHours_<?php echo $row['Time']; ?>" type="number" name="NightOTHours_<?php echo $row['Time']; ?>" value="<?php
													foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														if($nrow['NightOvertime'] != NULL) {
															echo $nrow['NightOvertime'];
														} else {
															echo '0';
														}
													endforeach;
											?>">
										</div>
										<hr class="NightPremium">
									</div>
									<div class="form-row">
										<div class="form-group col-6">
											<input class="REGCheck_<?php echo $row['Time']; ?> SalaryButtons" type="checkbox" data-toggle="toggle" data-on="Regular" data-off="Regular" data-onstyle="success" data-offstyle="secondary" data-width="85" <?php if (isset($Regular)) { echo 'checked'; } ?> checked disabled>
										</div>
										<div class="form-group col-6">
											<input class="RESTCheck_<?php echo $row['Time']; ?> SalaryButtons" type="checkbox" data-toggle="toggle" data-on="Rest" data-off="Rest" data-onstyle="info" data-offstyle="secondary" data-width="85" <?php if (isset($RestDay)) { echo 'checked'; } ?>>
										</div>
										<hr>
										<div class="form-group col-6">
											<input class="SPCheck_<?php echo $row['Time']; ?> SalaryButtons" type="checkbox" data-toggle="toggle" data-on="SP" data-off="SP" data-onstyle="danger" data-offstyle="secondary" data-width="85" <?php if (isset($Holiday)) { echo 'checked'; } ?>>
										</div>
										<div class="form-group col-6">
											<input class="NHCheck_<?php echo $row['Time']; ?> SalaryButtons" type="checkbox" data-toggle="toggle" data-on="NH" data-off="NH" data-onstyle="danger" data-offstyle="secondary" data-width="85" <?php if (isset($Holiday)) { echo 'checked'; } ?>>
										</div>
										<!-- <div class="form-group col-6">
											<input class="SLCheck_<?php echo $row['Time']; ?> SalaryButtons" type="checkbox" data-toggle="toggle" data-on="SL" data-off="SL" data-onstyle="danger" data-offstyle="secondary" data-width="85" <?php if (isset($Holiday)) { echo 'checked'; } ?>>
										</div>
										<div class="form-group col-6">
											<input class="VLCheck_<?php echo $row['Time']; ?> SalaryButtons" type="checkbox" data-toggle="toggle" data-on="VL" data-off="VL" data-onstyle="danger" data-offstyle="secondary" data-width="85" <?php if (isset($Holiday)) { echo 'checked'; } ?>>
										</div> -->
									</div>
									<div class="form-row hhhh">
										<div class="form-group col-6 input-icon">
											<label>Per Hour</label>
											<div class="input-icon-sm">
												<input class="form-control  h_valueh" type="hidden" name="total_hoursperday_<?php echo $row['Time']; ?>" value="<?php if(isset($nrow['Hours'])) {
													$totalho = $nrow['Hours'];
												} else {
													$totalho = '0';
												}
												if(isset($nrow['Overtime'])) {
													$totalover = $nrow['Overtime'];
												} else {
													$totalover = '0';
												}
												$totalhaha = $totalho + $totalover;
												echo $totalhaha;
												?>">
												<input class="form-control PerHour" type="text" name="dayRate_<?php echo $row['Time']; ?>" value="<?php 
												$RatePerHour = $RatePerDay / 8;
												echo round($RatePerHour, 2);
														?>" readonly>
												<i>₱</i>
											</div>
										</div>
										<div class="form-group col-6 input-icon">
											<label>Total Day Pay</label>
											<div class="input-icon-sm">
												<input id="t_pay" class="form-control t_pay_<?php echo $row['Time']; ?>" type="text" name="TdRate_<?php echo $row['Time']; ?>" value="" readonly>
												<i>₱</i>
											</div>
										</div>
										<div class="form-group col-12">
											<label>Remarks</label>
											<div class="input-icon-sm">
												<input class="form-control" type="text" name="Remarks_<?php echo $row['Time']; ?>" value="<?php
													foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														if($nrow['Remarks'] != NULL) {
															echo $nrow['Remarks'];
														}
													endforeach; ?>">
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
							</div>
					<div class="modal-fade text-center" style="display: none;">
						<hr>
						<div class="form-row">
							<div class="col-4 col-sm-2">
								<label>Fill All</label>
								<input id="HoursDayOne" class="form-control" type="number" name="" value="8">
								<button id="add_machop" type="submit" class="btn btn-info mt-2" data-dismiss="modal" aria-label="Close"><i class="fas fa-angle-double-right"></i></button>
							</div>
							<div class="col-4 col-sm-2">
								<label>Increment</label>
								<input id="HoursDayOne" class="form-control" type="number" name="" value="1">
								<button id="add_machop" type="submit" class="btn btn-info mt-2" data-dismiss="modal" aria-label="Close"><i class="fas fa-angle-double-right"></i></button>
							</div>
							<div class="col-4 col-sm-2">
								<label>Decrement</label>
								<input id="HoursDayOne" class="form-control" type="number" name="" value="1">
								<button id="add_machop" type="submit" class="btn btn-info mt-2" data-dismiss="modal" aria-label="Close"><i class="fas fa-angle-double-right"></i></button>
							</div>
						</div>
					</div>

				</div>
				<div class="modal-footer">

					<button id="MoreOptions" type="button" class="btn btn-primary mr-auto"><i class="fas fa-cog"></i> More Options</button>

					<input type="hidden" name="CutoffMode" value="<?php if (isset($_GET['Mode'])) {
	echo $_GET['Mode'];
} ?>">
					<input type="radio" id="" name="DeductionOption" value="0">
					<label for="rdNoDeductions">No Deductions</label><br>
					<input type="radio" id="rdWithDeductions" name="DeductionOption" value="1" checked>
					<label for="rdWithDeductions">With Deductions</label><br>
					<input type="radio" id="rdDeferredDeductions" name="DeductionOption" value="2">
					<label for="rdDeferredDeductions">Defer Deductions</label>

					<button type="submit" class="btn btn-primary"><i class="fas fa-clock"></i> Set</button>
				</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>
