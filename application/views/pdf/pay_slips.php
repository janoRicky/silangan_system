<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		Pay Slip
	</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<style>
					.table {
						padding: 10px;
					}
				</style>
				<h3>Payslip</h3>
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">Employee Name</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nGetApplicantDet['LastName'] .",". $nGetApplicantDet['FirstName'] ." ". $nGetApplicantDet['MiddleInitial'] ."." ?></td>
						</tr>
					</tbody>
				</table>
				<br>
				<h3>Hours</h3>
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">Total Hours</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nPayslipDet['TotalHours'];?></td>
						</tr>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">Total OT</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nPayslipDet['TotaOT'];?></td>
						</tr>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">GROSS PAY</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nPayslipDet['gross_pay'];?></td>
						</tr>
					</tbody>
				</table>
				<br>
				<h3>Deductions</h3>
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">SSS Contribution</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nPayslipDet['sss_contri'];?></td>
						</tr>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">HDMF Contribution</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nPayslipDet['hdmf_contri'];?></td>
						</tr>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">Philhealth</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nPayslipDet['philhealth_contri'];?></td>
						</tr>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">Tax</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nPayslipDet['tax'];?></td>
						</tr>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">Company Deductions</td>
							<td style="border: 2px solid black; background-color: white;">&nbsp;</td>
						</tr>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">Total Deductions</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nPayslipDet['tota_deduc'];?></td>
						</tr>
					</tbody>
				</table>
				<br><br><br><br>
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td style="border: 2px solid black; font-weight: bold; background-color: white;">NET PAY</td>
							<td style="border: 2px solid black; background-color: white;"><?php echo $nPayslipDet['net_pay'];?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
<script src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?=base_url()?>assets/js/1.14.7_popper.min.js"></script>
<script src="<?=base_url()?>assets/js/4.3.1_bootstrap.min.js"></script>
</html>