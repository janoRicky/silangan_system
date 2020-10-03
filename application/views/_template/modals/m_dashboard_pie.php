<div class="modal fade" id="PieChartModal">
	<div class="modal-dialog modal-xl">
		<div class="modal-content m-content">

		<!-- Modal Header -->
		<div class="modal-header">
			<h4 class="modal-title"><i class="fas fa-user-tie fa-fw"></i> Positions Desired - Work in progress <?php // TODO: ¯\_(ツ)_/¯ ?></h4>
			<div class="text-right">
				<button type="button" class="close d-none d-sm-block" data-dismiss="modal">&times;</button>
			</div>
		</div>

		<!-- Modal body -->
		<div class="modal-body">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<div class="chart-title text-center">
						<h5 class="titless">
							<i class="fas fa-user fa-fw"></i> Current Pool
						</h5>
					</div>
					<!-- <div class="col-1 ml-auto chart-hover-settings" style="margin-top: -30px; display: none;">
						<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-cog" style="margin-right: -1px;"></i></button>
					</div> -->
					<canvas id="GM_pie-chart" width="800" height="450"></canvas>
				</div>
				<div class="col-sm-12 col-md-6">
					<div class="chart-title text-center">
						<h5 class="titless">
							<i class="fas fa-user-edit fa-fw"></i> Expired Employees
						</h5>
					</div>
					<!-- <div class="col-1 ml-auto chart-hover-settings" style="margin-top: -30px; display: none;">
						<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-cog" style="margin-right: -1px;"></i></button>
					</div> -->
					<canvas id="GM_pie-chart-expired" width="800" height="450"></canvas>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<form name="PositionForm" method="GET">
						Find all people with the Position <input type="text" class="form-group" name="PositionSearch"><i class="fas fa-search"></i>
					</form>
				</div>
			</div>
		</div>

		<!-- Modal footer -->
		<div class="modal-footer">
			<button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
		</div>

		</div>
	</div>
</div>