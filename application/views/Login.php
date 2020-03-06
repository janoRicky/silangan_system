<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		Login | Silangan Lumber
	</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/regular.css" integrity="sha384-IG162Tfx2WTn//TRUi9ahZHsz47lNKzYOp0b6Vv8qltVlPkub2yj9TVwzNck6GEF" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous">

	<style type="text/css">
		html , body
		{
			height: 100%;
			padding: 0px;
			margin: 0px;
			background-color: #2A2A2A;
		}
		.header
		{
			height: 20%;
		}
		.login-container
		{
			background-color: #FFFEFE;
			border-radius: 6px;
			-webkit-box-shadow: 0px 0px 57px -9px rgba(0,0,0,0.34);
			-moz-box-shadow: 0px 0px 57px -9px rgba(0,0,0,0.34);
			box-shadow: 0px 0px 57px -9px rgba(0,0,0,0.34);
		}
	</style>
</head>
<body>
	<div class="header">

	</div>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-11 col-lg-4 m-auto">
					<div class="login-container pt-4 pl-4 pb-4 pr-4">
						<?php echo form_open(base_url().'LoginValidation','method="post"'); ?>
						<!-- <div class="text-center mb-3">
							<img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.0-9/13240629_242086709504627_6587238279405995147_n.jpg?_nc_cat=111&_nc_eui2=AeFIkegEnuFMZPmHGeqO-6uIG-rM1RZ5XD-LNf9UTUgJmn0v1GaIwczrIaQhaOx612Te_DTWS27mrMXaP9PA5cLpK8kq-b9p50v730jmKNf0AqIIRSow2qCKyf0fw6FzNHY&_nc_oc=AQkTOQ3cESjy4W8r09IC7PA9h5THnvCINqcdQc5TM6tFP_vT2ZcGHt00ZXrKc8umZbs&_nc_ht=scontent.fmnl9-1.fna&oh=2d4b6f1485ef1087abad0bdee3661e2d&oe=5E22AE3E" alt="LOGO" width="100">
						</div> -->
						
						<div class="text-center mb-5 mt-4">
							<h5>
								Welcome
							</h5>
						</div>
						<?php echo $this->session->flashdata('prompt');?>
						<div class="form-row">
							<div class="form-group w-100 text-center">
								<label>Username</label>
								<input class="form-control text-center" type="text" name="UserName">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group w-100 text-center">
								<label>Password</label>
								<input class="form-control text-center" type="password" name="Password">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group w-100">
								<!-- <button type="submit" class="btn btn-primary w-100"> Sign-in </button> -->
								<button type="submit" class="btn btn-primary w-100"> Sign-in </button>
							</div>
							<!-- <div class="form-group w-100">
								<button class="btn btn-secondary w-100"> Sign-up </button>
							</div> -->
						</div>
						<div class="form-row">
							<div class="form-group w-100 text-center">
								<a class="btn btn-link" href="#">Forgot password?</a>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">

	</div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<noscript>JavaScript disabled. Enable JavaScript</noscript>
</html>