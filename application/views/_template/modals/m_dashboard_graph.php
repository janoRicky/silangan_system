<div class="modal <?php if (!isset($_GET['Year'])) {echo 'fade';} ?>" id="GraphChartModal">
	<div class="modal-dialog modal-xxl">
		<div class="modal-content m-content">

		<!-- Modal Header -->
		<div class="modal-header">
			<div class="row">
				<form method="GET">
					<h4 class="modal-title"><i class="fas fa-calendar-week fa-fw"></i> Year <input type="number" id="GraphYear" name="Year" class="form-group px-2" value="<?php if (isset($_GET['Year'])) { echo $SelectedYear; } else { echo $CurrentYear; } ?>" style="border-radius: 6px; width: 100px;"></h4>
				</form>
				<div id="LoadingIcon" class="spinner-border ml-2" role="status" style="display: none; margin-top: 5px;"></div>
			</div>
			<div class="text-right">
				<button type="button" class="close d-none d-sm-block" data-dismiss="modal">&times;</button>
			</div>
		</div>

		<!-- Modal body -->
		<div class="modal-body">
			<div class="row rcontent w-85 ml-auto mr-auto mt-2">
				<canvas id="GraphChartModal_Chart" class="w-100" width="800" height="250"></canvas>
			</div>
			<div class="row">
				<?php for ($i = 1; $i < 13; $i++): 
						if ($i < 10) {
							$i = '0' . $i;
						} ?>
					<div class="col-md-12 col-lg-3 mb-4">
						<div class="card-container-lite">
							<?php
								$SelectMonth = $this->Model_Selects->GetMonthlyTotalSpecificMonth($SelectedYear, $i);
								foreach ($SelectMonth->result_array() as $row) {
									$Month = $row['Month'];
									$Count = $row['Total'];
								}
							?>
							<a href="Dashboard?Year=<?php echo $SelectedYear; ?>&Month=<?php echo $Month; ?>#ByMonth">
							<div class="card-headers-lite clearfix <?php if ($Count > 0) { echo 'card-headers-primary'; } else { echo 'card-headers-info'; } ?>">
								<span class="float-left card-month-text">
									<?php 
										$MonthName = DateTime::createFromFormat('!m', $i);
										echo $MonthName->format('F');
									?>
								</span>
							</div>
							<div class="card-bodys clearfix">
								<a class="dc-links float-left" href="Dashboard?Year=<?php echo $SelectedYear; ?>&Month=<?php echo $Month; ?>#ByMonth"><span <?php if ($Count <= 0) { echo 'style="color: rgba(75, 75, 75, 0.75)"'; } ?>>
								<?php echo $Count; ?> <?php if ($Count == 1) { echo 'person'; } else { echo 'people'; } ?> applied </span></a>
							</div>
							</a>
						</div>
					</div>
				<?php endfor; ?>
			</div>
			<?php if (isset($_GET['Year']) && isset($_GET['Month'])): ?>
			<div class="row">
				<div id="ByMonth" class="col-sm-12 text-center">
					<h4 class="line-through-text">
						<span>
						<i class="fas fa-users"></i>
							<?php 
								$SelectedMonth = DateTime::createFromFormat('!m', $_GET['Month']);
								echo $SelectedMonth->format('F') . ' ' . $SelectedYear;
							?> Employees
							<?php
							$SelectMonth = $this->Model_Selects->GetMonthlyTotalSpecificMonth($SelectedYear, $_GET['Month']);
								foreach ($SelectMonth->result_array() as $row) {
									$Count = $row['Total'];
								}
								echo '(' . $Count . ')'; ?>
						</span>
					</h4>
				</div>
				<div class="col-12 text-right">
					<button id="MG_ExportPrint" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Print"><i class="fas fa-print" style="margin-right: -1px;"></i></button>
					<button id="MG_ExportCopy" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Copy to Clipboard"><i class="fas fa-clipboard-list" style="margin-right: -1px;"></i></button>
					<button id="MG_ExportExcel" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Export as an Excel file (.xlsx)"><i class="fas fa-file-excel" style="margin-right: -1px;"></i></button>
					<button id="MG_ExportCSV" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Export as a CSV file (.csv)"><i class="fas fa-file-csv" style="margin-right: -1px;"></i></button>
					<button id="MG_ExportPDF" type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Export as a PDF file (.pdf)"><i class="fas fa-file-pdf" style="margin-right: -1px;"></i></button>
				</div>
				<div class="table-responsive pt-5 pb-5 pl-2 pr-2">
					<table id="MonthlyTable" class="table table-striped table-bordered PrintOut" style="width: 100%;">
						<thead>
							<tr class="text-center">
								<th> Applicant </th>
								<th> Full Name </th>
								<th> Position Desired </th>
								<th> Applied On </th>
								<th> Current Status </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$GetApplicantsByMonth = $this->Model_Selects->GetApplicantsByMonth($SelectedYear, $_GET['Month']);
							foreach ($GetApplicantsByMonth->result_array() as $row): ?>
								<tr>
									<td class="text-center">
										<div class="col-sm-12">
											<img src="<?php echo $row['ApplicantImage']; ?>" width="70" height="70">
										</div>
										<div class="col-sm-12 align-middle">
											<?php echo $row['ApplicantID']; ?>
										</div>
									</td>
									<td class="text-center align-middle">
										<?php echo $row['LastName']; ?> , <?php echo $row['FirstName']; ?> <?php echo $row['MiddleInitial']; ?>.
									</td>
									<td class="text-center align-middle">
										<?php echo $row['PositionDesired']; ?>
									</td>
									<td class="text-center align-middle">
										<?php echo $row['AppliedOn']; ?>
									</td>
									<td class="text-center align-middle">
										<?php if ($row['Status'] == 'Employed') { ?>
											<i class="fas fa-square PrintExclude" style="color: #1BDB07;"></i> Employed
										<?php } elseif ($row['Status'] == 'Applicant') { ?>
											<i class="fas fa-square PrintExclude" style="color: #DB3E07;"></i> Applicant
										<?php } elseif ($row['Status'] == 'Expired') { ?>
											<i class="fas fa-square PrintExclude" style="color: #0721DB;"></i> Expired
										<?php } elseif ($row['Status'] == 'Blacklisted') { ?>
											<i class="fas fa-square PrintExclude" style="color: #000000;"></i> Blacklisted
										<?php } else { ?>
											<i class="fas fa-square PrintExclude" style="color: #DB3E07;"></i> Unknown
										<?php } ?>
									</td>
									<td class="text-center align-middle PrintExclude" width="100">
										<a class="btn btn-primary btn-sm w-100 mb-1" href="<?=base_url()?>ViewEmployee?id=<?php echo $row['ApplicantID']; ?>" target="_blank"><i class="fas fa-external-link-alt"></i> View</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
			<?php endif; ?>
		</div>

		<!-- Modal footer -->
		<div class="modal-footer">
			<button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
		</div>

		</div>
	</div>
</div>