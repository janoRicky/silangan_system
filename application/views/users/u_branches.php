<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="row p-5">
					<?php echo $this->session->flashdata('prompts'); ?>
					<div class="col-4 col-sm-4 col-md-4 PrintPageName PrintOut">
						<h4 class="tabs-icon">
							<i class="fas fa-building fa-fw"></i> Branches x <?php echo $ShowBranches->num_rows() ?>
						</h4>
					</div>
					<div class="col-8 col-sm-8 col-md-8 text-right">
						<button class="btn btn-primary" data-toggle="modal" data-target="#addBranches">
							<i class="fas fa-user-plus"></i> New
						</button>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExportModal"><i class="fas fa-download"></i> Export</button>
					</div>
					<div class="col-sm-12">
						<div class="table-responsive pt-5 pb-5 pl-2 pr-2">
							<table id="ListBranches" class="table table-bordered PrintOut" style="width: 100%;">
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
										<tr class="text-center align-middle">
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
												<a class="btn btn-primary btn-sm w-100 mb-1" href="<?=base_url()?>Branches?id=<?php echo $row['BranchID']; ?>"><i class="fas fa-users"></i> Employees</a>
												<a href="<?=base_url()?>RemoveBranch?id=<?=$row['BranchID']?>" class="btn btn-danger btn-sm w-100 mb-1" onclick="return confirm('Remove Branch?')"><i class="fas fa-trash"></i> Delete</a>
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
	<!-- MODALS -->
	<div class="modal fade" id="addBranches" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<?php echo form_open(base_url().'Add_newBranch','method="post"');?>
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add New Branch</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Name</label>
							<input class="form-control" type="text" name="BranchName" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Address</label>
							<input class="form-control" type="text" name="BranchAddress" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-12">
							<label>Contact Number</label>
							<input class="form-control" type="text" name="BranchContact" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-sm-5">
							<label>Employee ID Suffix <span style="color: rgba(0, 0, 0, 0.55);" data-toggle="tooltip" data-placement="top" data-html="true" title="Employees who get hired to this Branch will be assigned the designated Employee ID with this as the suffix. See the preview for an example.<br><br>By default, all ID follows the format of SL(Suffix)-NUMBER-YEAR. You can manually change the ID of an applicant whenever they are hired."><i>(?)</i></span></label>
							<input id="EmployeeIDSuffix" class="form-control" type="text" name="EmployeeIDSuffix" autocomplete="off">
						</div>
						<div class="form-group col-sm-2 text-center">
							<p><i class="fas fa-arrow-right" style="margin-right: -1px; color: rgba(0, 0, 0, 0.55);"></i></p>
							<p><i class="fas fa-arrow-right" style="margin-right: -1px; color: rgba(0, 0, 0, 0.55);"></i></p>
						</div>
						<div class="form-group col-sm-5">
							<label>Preview</label>
							<input id="SuffixPreview" class="form-control" type="text" autocomplete="off" readonly>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div>
	<!-- EXPORT MODAL -->
	<?php $this->load->view('_template/modals/m_export'); ?>
</body>
<?php $this->load->view('_template/users/u_scripts'); ?>
<script type="text/javascript">
	$(document).ready(function () {
		$('#EmployeeIDSuffix').bind('input', function() {
			$('#SuffixPreview').val('SL' + $(this).val() + '-####-20');
		});
		$('[data-toggle="tooltip"]').tooltip();
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
	});
</script>
</html>