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
				<div class="text-center mt-5">
					<h5 style="font-size: 18px; font-style: Arial, Helvetica, sans-serif;">
						Payslip (Date: <?php echo date('yy-d-m'); ?>)
					</h5>
				</div>
				<div class="mt-2 mb-2">
					<table cellpadding="5">
						<tr>
							<td>
								<label>ID : <?php print $ngetPayslip['ApplicantID']; ?></label>
							</td>
							<td>
								<label>Branch : <?php print $nGetClientDet['Name']; ?></label>
							</td>
							<td>
								<label>Name : <?php print $nGetApplicantDet['LastName']; ?></label>, 
								<label><?php print $nGetApplicantDet['FirstName']; ?></label> 
								<label><?php print $nGetApplicantDet['MiddleInitial']; ?></label>
							</td>
						</tr>
						<tr>
							<td>
								<label>Total Hrs : <?php print $ngetPayslip['TotalHours']; ?></label>
							</td>
							<td>
								<label>Total Overtime : <?php print $ngetPayslip['TotaOT']; ?></label>
							</td>
							<td>
								
							</td>
						</tr>
					</table>
				</div>
				<div class="mb-2">
					<h5 style="font-size: 18px; font-style: Arial, Helvetica, sans-serif;">
						Deductions
					</h5>
				</div>
				<div class="mb-2">
					<table cellpadding="5">
						<tr>
							<th>
								SSS
							</th>
							<th>
								PhilHealth
							</th>
							<th>
								HDMF
							</th>
							<th>
								TAX
							</th>
						</tr>
						<tr>
							<td style="border: 1px solid gray;">
								<label><?php print $ngetPayslip['sss_contri']; ?></label>
							</td>
							<td style="border: 1px solid gray;">
								<label><?php print $ngetPayslip['hdmf_contri']; ?></label>
							</td>
							<td style="border: 1px solid gray;">
								<label><?php print $ngetPayslip['philhealth_contri']; ?></label>
							</td>
							<td style="border: 1px solid gray;">
								<label><?php print $ngetPayslip['tax']; ?></label>
							</td>
						</tr>
					</table>
				</div>
				<div class="mb-2">
					<table cellpadding="5">
						<tr>
							<th>
								Total Deduction
							</th>
							<th>
								Gross Pay
							</th>
							<th>
								Net Pay
							</th>
						</tr>
						<tr>
							<td style="border: 1px solid gray;">
								<label><?php print $ngetPayslip['tota_deduc']; ?> PHP</label>
							</td>
							<td style="border: 1px solid gray;">
								<label><?php print $ngetPayslip['gross_pay']; ?> PHP</label>
							</td>
							<td style="border: 1px solid gray;">
								<label><?php print $ngetPayslip['net_pay']; ?> PHP</label>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
<script src="<?=base_url()?>assets/js/jquery-3.4.1.min.js"></script>
<script src="<?=base_url()?>assets/js/1.14.7_popper.min.js"></script>
<script src="<?=base_url()?>assets/js/4.3.1_bootstrap.min.js"></script>
</html>