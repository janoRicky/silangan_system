<?php foreach ($GetWeeklyListEmployee->result_array() as $erow): ?>
<div class="modal fade silangan-modal-background" id="HoursWeeklyModal_<?php echo $erow['ApplicantID']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xxl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Work Hours for <?php echo $erow['LastName'] . ', ' . $erow['FirstName'] . ' ' . $erow['MiddleInitial'] ?> | <span class="TotalHoursInAWeek">48</span> Hours Total</h5>
					<!-- <div class="ml-auto" data-toggle="tooltip" data-placement="bottom" title="Autosaves to the Database with each input">
						<label>Autosave&nbsp;<span style="color: rgba(125, 125, 125, 0.9)">(?)</span></label>
						<button type="button" class="btn btn-success"><i class="fas fa-check"></i> On</aybutton>
					</div> -->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url().'SetWeeklyHours'; ?>" method="post">
						<input id="ApplicantID" type="hidden" name="ApplicantID" value="<?php echo $erow['ApplicantID']; ?>">
						<input id="ClientID" type="hidden" name="ClientID" value="<?php echo $erow['ClientEmployed']; ?>">
						<div class="form-row">
							<div class="form-group col-sm-12 col-md-2">
								<label>Type</label>
								<input id="SalaryType" class="form-control" type="text" name="" value="Weekly" readonly>
							</div>
							<div class="form-group col-sm-12 col-md-2">
								<label>Salary</label>
								<div class="input-icon-sm">
									<input id="Salary" class="form-control" type="number" name="" value="<?php echo $erow['SalaryExpected']; ?>" readonly>
									<i>₱</i>
								</div>
							</div>
							<div class="form-group col-sm-12 col-md-2">
								<label>Per&nbsp;Day</label>
								<div class="input-icon-sm">
									<input id="AveragePerHour" class="form-control" type="number" name="" value="<?php
									$RatePerDay = $erow['SalaryExpected'] / 26;
									echo round($RatePerDay, 2);
									 ?>" readonly>
									<i>₱</i>
								</div>
							</div>
							
<!-- 							<div id="SalaryOvertimeFade" class="form-group col-sm-12 col-md-2 ml-auto">
								<label>Overtime Bonus</label>
								<input id="SalaryOvertime" class="form-control" type="text" name="" readonly>
							</div> -->
						</div>
						<div id="SalaryDays" class="form-row">
							<?php foreach ($GetWeeklyDates->result_array() as $row): ?>
								<input id="<?php echo $row['Time']; ?>" type="hidden" name="<?php echo $row['Time']; ?>" value="<?php echo $row['Time']; ?>">
								<!-- <input type="hidden" name="<?php echo $row['DayType']; ?>" value="<?php echo $row['DayType']; ?>"> -->
								<div class="day-hover day-container_<?php echo $row['Time']; ?> col-sm-12 col-md-3 text-center rcontent mr-4 <?php 
										// foreach ($this->Model_Selects->GetMatchingDatesType($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
										// 	if ($nrow['Type'] == 'Normal')
										// 	{ 
										// 		$Type = 'Normal';
										// 		echo 'day-indicator-success'; 
										// 	}
										// 	elseif ($nrow['Type'] == 'Rest Day') 
										// 	{ 
										// 		$Type = 'Rest Day';
										// 		echo 'day-indicator-primary'; 
										// 	}
										// 	elseif ($nrow['Type'] == 'Holiday')
										// 	{
										// 		$Type = 'Holiday';
										// 		echo 'day-indicator-warning';
										// 	}
										// 	elseif ($nrow['Type'] == 'Special')
										// 	{
										// 		$Type = 'Special';
										// 		echo 'day-indicator-danger';
										// 	}
										// endforeach;
										?>">
									<div class="row">
										<div class="col-sm-6 day-container-date">
											<b><?php echo $row['Time']; ?></b>
										</div>
										<div class="col-sm-6">
											<div class="form-group col-4">
												<input class="NCheck_<?php echo $row['Time']; ?> SalaryButtons" type="checkbox" data-toggle="toggle" data-on="Night" data-off="Night" data-onstyle="primary" data-offstyle="secondary" data-width="85" <?php if (isset($RestDay)) { echo 'checked'; } ?>>
											</div>
										</div>
									</div>
									<div class="form-row mt-2">
										<!-- data-toggle="tooltip" data-placement="bottom" title="Regular Hours" -->
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
										<!-- <div data-toggle="tooltip" data-placement="bottom" title="????? Hours" class="form-group col-4">
											<div class="">SH?</div>
											<input id="Hours_<?php echo $row['Time']; ?>" class="form-control" type="number" name="Hours_<?php echo $row['Time']; ?>" value="<?php
													foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														echo $nrow['Hours'];
													endforeach;
											?>">
										</div>
										<div data-toggle="tooltip" data-placement="bottom" title="????? Hours" class="form-group col-4">
											<div class="">NH?</div>
											<input id="Hours_<?php echo $row['Time']; ?>" class="form-control" type="number" name="Hours_<?php echo $row['Time']; ?>" value="<?php
													foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														echo $nrow['Hours'];
													endforeach;
											?>">
										</div>
										<div data-toggle="tooltip" data-placement="bottom" title="????? Hours" class="form-group col-4">
											<div class="">SPHRD?</div>
											<input id="Hours_<?php echo $row['Time']; ?>" class="form-control" type="number" name="Hours_<?php echo $row['Time']; ?>" value="<?php
													foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														echo $nrow['Hours'];
													endforeach;
											?>">
										</div> -->
									</div>
									<div class="form-row">
										<div class="form-group col-6">
											<input class="REGCheck_<?php echo $row['Time']; ?> SalaryButtons" type="checkbox" data-toggle="toggle" data-on="Regular" data-off="Regular" data-onstyle="success" data-offstyle="secondary" data-width="85" <?php if (isset($Regular)) { echo 'checked'; } ?> checked>
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
									</div>
									<!-- <p class="mr-auto ml-auto">Hours</p> -->
									<!-- <div class="form-row">
										<div class="form-group col-6 input-icon">
											<label>HDMF</label>
											<input id="PerDay" class="form-control" type="text" name="HDMF_<?php echo $row['Time']; ?>" value="<?php foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														if($nrow['HDMF'] != NULL) {
															echo $nrow['HDMF'];
														}
													endforeach;
													?>">
										</div>
										<div class="form-group col-6 input-icon">
											<label>Philhealth</label>
											<input id="PerHour" class="form-control" type="text" name="Philhealth_<?php echo $row['Time']; ?>" value="<?php foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														if($nrow['Philhealth'] != NULL) {
															echo $nrow['Philhealth'];
														}
													endforeach;
													?>">
										</div>
										<div class="form-group col-6 input-icon">
											<label>SSS</label>
											<input id="PerHour" class="form-control" type="text" name="SSS_<?php echo $row['Time']; ?>" value="<?php foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														if($nrow['SSS'] != NULL) {
															echo $nrow['SSS'];
														}
													endforeach;
													?>">
										</div>
										<div class="form-group col-6 input-icon">
											<label>Tax</label>
											<input id="PerHour" class="form-control" type="text" name="Tax_<?php echo $row['Time']; ?>" value="<?php foreach ($this->Model_Selects->GetMatchingDates($erow['ApplicantID'], $row['Time'])->result_array() as $nrow):
														if($nrow['Tax'] != NULL) {
															echo $nrow['Tax'];
														}
													endforeach;
													?>">
										</div>
									</div> -->
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
									</div>
								</div>
							<?php endforeach; ?>
								<!-- <table id="SalaryTable" class="table table-condensed">
									<th>Monday</th>
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
									<th>Saturday</th>
									<th>Monday</th>
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
									<th>Saturday</th>
									<tr>
										<td>
											<div class="input-icon">
												<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
												<i>₱</i>
											</div>
										</td>
										<td><input id="HoursDayTwo" class="form-control" type="number" name="HoursDayTwo" value="8"></td>
										<td><input id="HoursDayThree" class="form-control" type="number" name="HoursDayThree" value="8"></td>
										<td><input id="HoursDayFour" class="form-control" type="number" name="HoursDayFour" value="8"></td>
										<td><input id="HoursDayFive" class="form-control" type="number" name="HoursDayFive" value="8"></td>
										<td><input id="HoursDaySix" class="form-control" type="number" name="HoursDaySix" value="8"></td>
										<td><input id="HoursDayTwo" class="form-control" type="number" name="HoursDayTwo" value="8"></td>
										<td><input id="HoursDayThree" class="form-control" type="number" name="HoursDayThree" value="8"></td>
										<td><input id="HoursDayFour" class="form-control" type="number" name="HoursDayFour" value="8"></td>
										<td><input id="HoursDayFive" class="form-control" type="number" name="HoursDayFive" value="8"></td>
										<td><input id="HoursDaySix" class="form-control" type="number" name="HoursDaySix" value="8"></td>
										<td><input id="HoursDaySix" class="form-control" type="number" name="HoursDaySix" value="8"></td>
									</tr>
									<tr>
										<td>Hours</td>
										<td>Hours</td>
										<td>Hours</td>
										<td>Hours</td>
										<td>Hours</td>
										<td>Hours</td>
									</tr>
									<tr>
										<td>
											<div class="input-icon">
												<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
												<i>₱</i>
											</div>
										</td>
										<td>
											<div class="input-icon">
												<input id="SalaryDayTwo" class="form-control" type="text" name="" readonly>
												<i>₱</i>
											</div>
										</td>
										<td>
											<div class="input-icon">
												<input id="SalaryDayThree" class="form-control" type="text" name="" readonly>
												<i>₱</i>
											</div>
										</td>
										<td>
											<div class="input-icon">
												<input id="SalaryDayFour" class="form-control" type="text" name="" readonly>
												<i>₱</i>
											</div>
										</td>
										<td><input id="SalaryDayFive" class="form-control" type="text" name="" readonly></td>
										<td><input id="SalaryDaySix" class="form-control" type="text" name="" readonly></td>
									</tr>
									<tr>
										<td colspan="2">Estimated Per Hour</td>
									</tr>
									<tr>
										<td colspan="2"><input id="SalaryPerHour" class="form-control" type="text" name="" readonly></td>	
									</tr>
								</table> -->
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
					<button type="submit" class="btn btn-primary"><i class="fas fa-clock"></i> Set</button>
				</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach; ?>