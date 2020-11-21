<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); //TODO: Limit the bell to HR access? ?>
				<div class="content m-4">
					<?php echo $this->session->flashdata('prompts'); ?>
					<div class="row content-body">
						<div class="col-4 col-sm-4 col-md-4 PrintPageName PrintOut">
							<h4 class="tabs-icon">
								<i class="fas fa-user-tag fa-fw"></i> Branches x <?php echo $ShowBranches->num_rows() ?>
							</h4>
						</div>
						<div class="col-8 col-sm-8 col-md-8 text-right">
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExportModal"><i class="fas fa-download"></i> Export</button>
						</div>
						<div class="col-sm-12">
							<div class="table-responsive pt-4 pb-4 pl-2 pr-2">
								<table id="ListBranches" class="table table-striped table-bordered PrintOut" style="width: 100%;">
									<thead>
										<tr class="text-center align-middle">
											<th> Name </th>
											<th> Address </th>
											<th> Contact </th>
											<th> Employees </th>
											<th class="text-center PrintExclude" style="width: 5%;"> Action </th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($ShowBranches->result_array() as $row): ?>
											<tr class="text-center align-middle f-opensans">
												<td>
													<?php echo $row['Name']; ?>
												</td>
												<td>
													<?php echo $row['Address']; ?>
												</td>
												<td>
													<?php echo $row['ContactNumber']; ?>
												</td>
												<td>
													<?php echo $this->Model_Selects->GetWeeklyListEmployee($row['BranchID'])->num_rows(); ?>
												</td>
												<td class="text-center align-middle PrintExclude">
													<button id="<?php echo $row['BranchID']; ?>" type="button" class="btn btn-primary btn-sm w-100 mb-1 ViewBranchIDButton"  data-toggle="modal" data-target="#ModalBranchView"><i class="fas fa-calendar-alt"></i> View by Date</button>
													<form action="<?php echo base_url().'ImportExcel'; ?>" method="post" enctype="multipart/form-data">
														<input type="hidden" name="ExcelBranchID" value="<?php echo $row['BranchID']; ?>">
														<input id="file" type="file" name="file" class="btn btn-success" style="display: none;" onchange="form.submit()">
														<button type="button" class="ImportButton btn btn-sm btn-success w-100"><i class="fas fa-file-excel"></i> Import Excel</button>
													</form>
													<!-- <a class="btn btn-success btn-sm w-100 mb-1" href="<?=base_url()?>ViewBranch?id=<?php echo $row['BranchID']; ?>"><i class="fas fa-file-excel"></i> Excel</a> -->
													<button id="<?php echo $row['BranchID']; ?>" type="button" class="excel_formatbtn btn btn-secondary btn-sm w-100 mb-1 mt-1"  data-toggle="modal" data-target="#DateFroto_modal"><i class="fas fa-file-download"></i> Excel Template</button>
												</td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div> 
					</div>
				</div>
				<div class="content m-4">
					<div class="row content-body">
						<div class="col-4 col-sm-4 col-md-4 PrintPageName PrintOut">
							<h5>
								<i class="fas fa-user-edit fa-fw"></i> Recent Hires
							</h5>
						</div>
						<div class="col-sm-12">
							<div class="table-responsive pb-5 pl-2 pr-2">
								<table id="ListLogbook" class="table table-condensed PrintOut" style="width: 100%;">
									<thead>
										<tr class="text-center align-middle">
											<th> Time </th>
											<th> Event </th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($GetLogbookLatestHires->result_array() as $row): ?>
											<tr>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['Time']; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['Event']; ?>
												</td>
											</tr>
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- MODALS -->
	<?php $this->load->view('_template/modals/m_p_branchview'); ?>
	<!-- LOAD MODAL -->
	<div class="modal fade" id="LoadModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content m-content">
				<div class="modal-body">
					<div class="form-row">
						<div class="text-center ml-auto mr-auto">
							<div class="spinner-border m-5" role="status"></div>
							<h4>Please wait momentarily</h4>
							<p>Preparing the table...</p>
							<p class="load-hidden-1">This is taking longer than necessary...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<!-- EXPORT MODAL -->
<?php $this->load->view('_template/modals/m_export'); ?>
<?php $this->load->view('_template/modals/m_export_fromat'); ?>
<?php $this->load->view('_template/users/u_scripts'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#FromDate').val(moment().subtract(7,'d').format('YYYY-MM-DD'));
		$('#ToDate').val(moment().format('YYYY-MM-DD'));
		$('.ImportButton').click(function(){ $('#file').trigger('click'); });
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('.ImportButton').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#file").change(function() {
			$('#LoadModal').modal('show');
			readURL(this);
		});
		$('.load-div').hide();
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
		var table = $('#ListBranches').DataTable( {
			"order": [[ 3, "desc" ]],
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
   		});
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
		$('.ViewBranchIDButton').on('click', function () {
			$('#ViewBranchID').val($(this).attr('id'));
			console.log($('#ViewBranchID').val());
		});
		$('#LoadButton').on('click', function () {
			$('.load-container').children().hide();
			$('.load-div').show();
		});
		$('.excel_formatbtn').on('click', function () {
			$('#idforFormatex').val($(this).attr('id'));
		});
	});
</script>
</html>