<div class="modal fade" id="HoursWeeklyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xxl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Work Hours for each day... | <span class="TotalHoursInAWeek">48</span> Hours Total</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url().'SetWeeklyHours'; ?>" method="post">
						<input id="ApplicantID" type="hidden" name="ApplicantID" value="">
						<div class="form-row">
							<div class="form-group col-sm-12 col-md-2">
								<label>Type</label>
								<input id="SalaryType" class="form-control" type="text" name="" value="Weekly" readonly>
							</div>
							<div class="form-group col-sm-12 col-md-2">
								<label>Salary</label>
								<input id="Salary" class="form-control" type="number" name="" value="" readonly>
							</div>
							<div class="form-group col-sm-12 col-md-2">
								<label>Average Per Hour</label>
								<input id="AveragePerHour" class="form-control" type="number" name="" value="" readonly>
							</div>
<!-- 							<div id="SalaryOvertimeFade" class="form-group col-sm-12 col-md-2 ml-auto">
								<label>Overtime Bonus</label>
								<input id="SalaryOvertime" class="form-control" type="text" name="" readonly>
							</div> -->
						</div>
						<div id="SalaryDays" class="form-row">
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
								<div class="col-auto text-center rcontent">
									<b>Day One</b>
									<input id="HoursDayOne" class="form-control" type="number" name="HoursDayOne" value="8">
									<p class="mr-auto ml-auto">Hours</p>
									<div class="input-icon">
										<input id="SalaryDayOne" class="form-control" type="text" name="" readonly>
										<i>₱/h</i>
									</div>
								</div>
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