<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>
		Login | Silangan Lumber
	</title>

	<link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/dataTables.bootstrap4.min.css">

	<link rel="stylesheet" href="<?=base_url()?>assets/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<!-- FONTAWESOME -->
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/solid.css" integrity="sha384-r/k8YTFqmlOaqRkZuSiE9trsrDXkh07mRaoGBMoDcmA58OHILZPsk29i2BsFng1B" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/regular.css" integrity="sha384-IG162Tfx2WTn//TRUi9ahZHsz47lNKzYOp0b6Vv8qltVlPkub2yj9TVwzNck6GEF" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/brands.css" integrity="sha384-BKw0P+CQz9xmby+uplDwp82Py8x1xtYPK3ORn/ZSoe6Dk3ETP59WCDnX+fI1XCKK" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/fontawesome.css" integrity="sha384-4aon80D8rXCGx9ayDt85LbyUHeMWd3UiBaWliBlJ53yzm9hqN21A+o1pqoyK04h+" crossorigin="anonymous"> -->

	<style type="text/css">
		html , body
		{
			height: 100%;
			padding: 0px;
			margin: 0px;
			background-color: #2A2A2A;
		}
		.f-opensans { font-family: 'Open Sans', sans-serif; }
		.header
		{
			height: 20%;
		}
		.content {
			display: flex;
			width: 100%;
			align-items: stretch;
		}
		.footer
		{
			margin-top: 100px;
		}
		.login-container
		{
			background-color: #FFFEFE;
			/*border-radius: 6px;*/
			-webkit-box-shadow: 0px 0px 57px -9px rgba(0,0,0,0.34);
			-moz-box-shadow: 0px 0px 57px -9px rgba(0,0,0,0.34);
			box-shadow: 0px 0px 57px -9px rgba(0,0,0,0.34);
		}
		.l-spacing09 { letter-spacing: 0.9px !important; }
	</style>
</head>
<body>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: absolute;"><path fill="#0099ff" fill-opacity="1" d="M0,96L720,320L1440,256L1440,0L720,0L0,0Z"></path></svg>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200"  style="position: absolute;">
		<path fill="#0099ff" fill-opacity="1" d="M0,200L288,64L576,128L864,200L1152,200L1440,200L1440,0L1152,0L864,0L576,0L288,0L0,0Z"></path>
	</svg>
	<div class="header">
	</div>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-10 col-lg-4 m-auto">
					<div class="login-container p-5" style="z-index: 1;">
						<?php echo form_open(base_url().'LoginValidation','method="post"'); ?>
						<!-- <div class="text-center mb-3">
							<img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.0-9/13240629_242086709504627_6587238279405995147_n.jpg?_nc_cat=111&_nc_eui2=AeFIkegEnuFMZPmHGeqO-6uIG-rM1RZ5XD-LNf9UTUgJmn0v1GaIwczrIaQhaOx612Te_DTWS27mrMXaP9PA5cLpK8kq-b9p50v730jmKNf0AqIIRSow2qCKyf0fw6FzNHY&_nc_oc=AQkTOQ3cESjy4W8r09IC7PA9h5THnvCINqcdQc5TM6tFP_vT2ZcGHt00ZXrKc8umZbs&_nc_ht=scontent.fmnl9-1.fna&oh=2d4b6f1485ef1087abad0bdee3661e2d&oe=5E22AE3E" alt="LOGO" width="100">
						</div> -->
						<div class="text-center mb-5 mt-4">
							<img src="assets/img/silangan_lumber-250px.png" style="width: 100%;">
						</div>
						<?php echo $this->session->flashdata('prompt');?>
						<div class="form-row">
							<div class="form-group w-100">
								<label><i class="fas fa-users fa-fw"></i> <span class="l-spacing09 f-opensans">Username</span></label>
								<input class="form-control text-center f-opensans" type="text" name="UserName">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group w-100">
								<label><i class="fas fa-key fa-fw"></i> <span class="l-spacing09 f-opensans">Password</span></label>
								<input class="form-control text-center f-opensans" type="password" name="Password">
							</div>
						</div>
						<div class="form-row">
							<div class="form-group w-100">
								<!-- <button type="submit" class="btn btn-primary w-100"> Sign-in </button> -->
								<button type="submit" class="btn btn-primary w-100"><i class="fas fa-sign-in-alt fa-fw"></i> <span class="l-spacing09 f-opensans">Login</span> </button>
							</div>
							<!-- <div class="form-group w-100">
								<button class="btn btn-secondary w-100"> Sign-up </button>
							</div> -->
						</div>
						<!-- <div class="form-row">
							<div class="form-group w-100 text-center">
								<a class="btn btn-link" href="#">Forgot password?</a>
							</div>
						</div> -->
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer">
			<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="position: relative;z-index: -1 !important;"><path fill="#0099ff" fill-opacity="1" d="M0,320L288,64L576,128L864,192L1152,224L1440,256L1440,320L1152,320L864,320L576,320L288,320L0,320Z"></path></svg> -->
		</div>
	</div>
	
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<noscript>JavaScript disabled. Enable JavaScript</noscript>
</html>