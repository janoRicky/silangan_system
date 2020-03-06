<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="row">
					<div class="col-sm-12 pt-3 pb-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb" style="background-color: transparent;">
								<li class="breadcrumb-item"><a href="">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Experimental</li>
							</ol>
						</nav>
					</div>
				</div>
				<div class="row rcontent PrintOutTable">
					<?php echo $this->session->flashdata('prompts'); ?>
					<div class="col-sm-12 col-md-12 mb-5">
						<h4>
							<i class="fas fa-vial"></i> Tax Table
						</h4>
					</div>
					<div class="col-sm-12 col-mb-12">
						<table id="SalaryTable" class="table table-condensed">
							<th>Name</th>
							<th>Client</th>
							<th>Salary</th>
							<th>Date???</th>
							<th>Monday</th>
							<th>Tuesday</th>
							<th>Wednesday</th>
							<th>Thursday</th>
							<th>Friday</th>
							<th>Saturday</th>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
							</tr>
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
	});
</script>
</html>