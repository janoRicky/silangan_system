<style>
	html, body {
		background-color: #ebebeb;
		/*background:
		linear-gradient(135deg, #708090 21px, #b1bfce 22px, #b1bfce 24px, transparent 24px, transparent 67px, #b1bfce 67px, #b1bfce 69px, transparent 69px),
  linear-gradient(225deg, #708090 21px, #b1bfce 22px, #b1bfce  24px, transparent 24px, transparent 67px, #b1bfce 67px, #b1bfce 69px, transparent 69px)0 64px;*/
	}
</style>
<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="col-12 col-sm-12 tabs">
					<ul>
						<li><a href="<?php echo base_url() ?>Employee">Employees (<?php echo $get_employee->num_rows()?>)</a></li>
						<li class="tabs-active"><a href="<?php echo base_url() ?>Applicant">Applicant (<?php echo $get_applicant->num_rows()?>)</a></li>
						<li><a href="<?php echo base_url() ?>ApplicantsExpired">Expired (<?php echo $get_ApplicantExpired->num_rows()?>)</a></li>
					</ul>
				</div>
				<div class="row rcontent">
					<div class="col-5 PrintPageName PrintOut">
						<h4 class="tabs-icon">
							<i class="fas fa-user-friends fa-fw"></i> x <?php echo $get_applicant->num_rows() ?>
						</h4> 
					</div>
					<div class="col-7 text-right">
						<a href="<?=base_url()?>NewEmployee" class="btn btn-primary" onclick="// return confirm('Add Employee?')">
							<i class="fas fa-user-plus"></i> New
						</a>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExportModal"><i class="fas fa-download"></i> Export</button>
					</div>
					<div class="col-sm-12">
						<?php echo $this->session->flashdata('prompts'); ?>
						<div class="table-responsive pt-2 pb-5">
							<table id="emp" class="table PrintOut" style="width: 100%;">
								<thead>
									<tr class="text-center">
										<th> Employee </th>
										<th> Full Name </th>
										<th> Position </th>
										<th> Gender </th>
										<th> Employed On </th>
										<th> Status </th>
										<th class="PrintExclude"> Action </th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($get_applicant->result_array() as $row): ?>
										<tr>
											<td class="text-center">
												<div class="col-sm-12">
													<img src="<?=base_url() . $row['ApplicantImage']?>" width="70" height="70" class="rounded-circle">
												</div>
												<div class="col-sm-12 align-middle">
													<?php echo $row['ApplicantID']; ?>
												</div>
											</td>
											<td class="text-center align-middle">
												<?php echo $row['LastName']; ?> , <?php echo $row['FirstName']; ?> <?php echo $row['MiddleInitial']; ?>.
											</td>
											<td class="text-center align-middle">
												<?php echo $row['PositionGroup']; ?>
											</td>
											<td class="text-center align-middle">
												<?php echo $row['Gender']; ?>
											</td>
											<td class="text-center align-middle">
												<?php echo $row['AppliedOn']; ?>
											</td>
											<td class="text-center align-middle">
												<?php echo $row['Status']; ?>
											</td>
											<td class="text-center align-middle PrintExclude" width="100">
												<a class="btn btn-primary btn-sm w-100 mb-1" href="<?=base_url()?>ViewEmployee?id=<?php echo $row['ApplicantID']; ?>"><i class="far fa-eye"></i> View</a>
												<!-- <button id="<?php echo $row['ApplicantID']; ?>" type="button" class="btn btn-info btn-sm w-100 mb-1 ModalHire"  data-toggle="modal" data-target="#hirthis"><i class="fas fa-user-edit"></i> Hire</button> -->

												<!-- <a href="<?=base_url()?>RemoveEmployee?id=<?php echo $row['ApplicantID']; ?>" class="btn btn-danger btn-sm w-100 mb-1" onclick="return confirm('Remove Applicant?')"><i class="fas fa-lock"></i> Archive</a> -->
											</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Branch HIRE MODAL -->
	<?php $this->load->view('_template/modals/m_branchhire'); ?>
	<!-- EXPORT MODAL -->
	<?php $this->load->view('_template/modals/m_export'); ?>
</body>
<?php $this->load->view('_template/users/u_scripts'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#Branchselect').on('change', function() {
			<?php foreach ($getBranchOption->result_array() as $row): ?>
			<?php
			// Count how many employees are on the Branch
			$CountEmployees = $this->Model_Selects->GetBranchesEmployed($row['BranchID'])->num_rows();
			$CountEmployees++;
			$CountEmployees = str_pad($CountEmployees,4,0,STR_PAD_LEFT);
			// Get the current year
			$Year = date('Y');
			$Year = substr($Year, 2);
			// Concatenate them all together
			$EmployeeID = 'SL' . $row['EmployeeIDSuffix'] . '-' . $CountEmployees . '-' . $Year;
			?>
			if ($(this).val() == '<?php echo $row['BranchID']; ?>') {
				$(this).closest('#BranchModal').find('#EmployeeID').val('<?php echo $EmployeeID; ?>');
			}
			<?php endforeach; ?>
		});
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
		var table = $('#emp').DataTable( {
        	"order": [[ 5, "desc" ]],
        	buttons: [
            {
	            extend: 'print',
	            exportOptions: {
	                columns: [ 1, 2, 3, 4, 5 ]
	            }
	        },
	        {
	            extend: 'copyHtml5',
	            exportOptions: {
	                columns: [ 1, 2, 3, 4, 5 ]
	            }
	        },
	        {
	            extend: 'excelHtml5',
	            exportOptions: {
	                columns: [ 1, 2, 3, 4, 5 ]
	            }
	        },
	        {
	            extend: 'csvHtml5',
	            exportOptions: {
	                columns: [ 1, 2, 3, 4, 5 ]
	            }
	        },
	        {
	            extend: 'pdfHtml5',
	            exportOptions: {
	                columns: [ 1, 2, 3, 4, 5 ]
	            }
	        }
        ]
   		} );
		$('#ExportPrint').on('click', function () {
	        table.button('0').trigger();
	    });
	    $('#ExportCopy').on('click', function () {
	        table.button('1').trigger();
	    });
	    $('#ExportExcel').on('click', function () {
	        table.button('2').trigger();
	    });
	    $('#ExportCSV').on('click', function () {
	        table.button('3').trigger();
	    });
	    $('#ExportPDF').on('click', function () {
	        table.button('4').trigger();
	    });

		$('.ModalHire').on('click', function () {
			$('#idToHire').val($(this).attr('id'));
			console.log($('#idToHire').val());
		});
		
	});
</script>
</html>