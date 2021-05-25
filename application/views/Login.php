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
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/toastr.min.css" rel="stylesheet"/>

	<style type="text/css">
		html , body
		{
			height: 100%;
			padding: 0px;
			margin: 0px;
			background-color: #2A2A2A;
		}
		.f-opensans { font-family: 'Roboto', sans-serif; }
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
		.l-spacing09 { letter-spacing: 0.7px !important; }
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
					<?php echo form_open(base_url().'LoginValidation','method="post"'); ?>
					<div class="login-container" style="z-index: 1; padding: 2rem;">
						<div class="text-center mb-5 mt-4">
							<img src="assets/img/silangan_lumber-250px.png" style="width: 100%;">
						</div>
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
								<button type="submit" class="btn btn-primary w-100"><i class="fas fa-sign-in-alt fa-fw"></i> <span class="l-spacing09 f-opensans">Login</span> </button>
							</div>
						</div>
						
						<?php echo form_close(); ?>
					</div>
					<?php echo $this->session->flashdata('prompts_login');?>
				</div>
			</div>
		</div>
	</div>
	
</body>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?=base_url()?>assets/js/toastr.min.js"></script>
<script type="text/javascript">
	<?php if ($this->session->flashdata('alert_error') == 'cred_error') { ?>
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-bottom-full-width",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		toastr.error('Incorrect username or password!');

	<?php } elseif ($this->session->flashdata('alert_error') == 'blank_error') { ?>
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-bottom-full-width",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		toastr.error('Enter username and password!');
		
	<?php } elseif ($this->session->flashdata('alert_error') == 'no_user') { ?>
		toastr.options = {
			"closeButton": false,
			"debug": false,
			"newestOnTop": false,
			"progressBar": false,
			"positionClass": "toast-bottom-full-width",
			"preventDuplicates": false,
			"onclick": null,
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		}
		toastr.error('User doesn\'t exist. Please try again!');
		
	<?php } ?>
</script>
<noscript>JavaScript disabled. Enable JavaScript</noscript>
</html>