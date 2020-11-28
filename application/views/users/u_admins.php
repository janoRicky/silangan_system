<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<div class="content m-4">
					<?php echo $this->session->flashdata('prompts'); ?>
					<div class="row content-body">
						<div class="col-4 col-sm-4 col-md-4 PrintPageName PrintOut">
							<h4 class="tabs-icon">
								<i class="fas fa-user-secret fa-fw"></i> Admins x <?php echo $ShowAdmin->num_rows() ?>
							</h4>
						</div>
						<div class="col-8 col-sm-8 col-md-8 text-right">
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add_UserAdmin" data-backdrop="static" data-keyboard="false">
								<i class="fas fa-user-plus"></i> New
							</a>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ExportModal"><i class="fas fa-download"></i> Export</button>
						</div>
						<div class="col-sm-12">
							<div class="table-responsive pt-5 pb-5 pl-2 pr-2">
								<table id="ListAdmins" class="table table-bordered PrintOut" style="width: 100%;">
									<thead>
										<tr>
											<th> Level </th>
											<th> Branch </th>
											<th> Position </th>
											<th> Employee ID </th>
											<th> Full Name </th>
											<th> Gender </th>
											<th> Date Added </th>
											<th class="PrintExclude" style="width: 5%;"> Action </th>
										</tr>
									</thead>
									<tbody>
										<?php
										// get branch names
										$Admins = $ShowAdmin->result_array();
										foreach ($Admins as $key => $row) {
											$GetBranchInfo = $this->Model_Selects->GetBranchID($row['BranchID']);
											$BranchInfo = $GetBranchInfo->row_array();
											$Admins[$key]['BranchName'] = $BranchInfo['Name'];
										}
										?>
										<?php foreach ($Admins as $row): ?>
											<tr>
												<td class="text-center align-middle">
													<?php
													switch ($row['AdminLevel']) {
														case 'Level_1':
															echo "Level 1";
															break;
														case 'Level_2':
															echo "Level 2";
															break;
														case 'Level_3':
															echo "Level 3";
															break;
														
														default:
															echo "ERROR";
															break;
													}
													?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['BranchName'] ; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['Position'] ; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['AdminID'] ; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['FirstName'] ; ?> <?php echo $row['MiddleInitial'] ; ?>. <?php echo $row['LastName'] ; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['Gender'] ; ?>
												</td>
												<td class="text-center align-middle">
													<?php
													date_default_timezone_set('Asia/Manila');
													echo date('m/d/Y H:i:s a',$row['DateAdded']);
													?>
												</td>
												<td class="text-center align-middle PrintExclude">
													<button id="<?=$row['AdminNo']?>" type="button" class="btn btn-info btn-sm w-100 mb-1 ModalReassign" data-toggle="modal" data-target="#reassign_Admin"><i class="fas fa-user-edit"></i> Reassign</button>
													<?php if ($ShowAdmin->num_rows() > 1) { ?>
														<a href="<?=base_url()?>RemoveAdmin?id=<?php echo $row['AdminNo']; ?>" class="btn btn-danger btn-sm w-100 mb-1" onclick="return confirm('Remove Admin?')"><i class="fas fa-trash"></i> Delete</a>
													<?php } else { ?>
														<button data-toggle="tooltip" data-placement="top" data-html="true" title="Must have 1 admin minimum." class="btn btn-secondary btn-sm w-100 mb-1 silangan-hover-disabled" onclick="alert('Must have 1 admin minimum.')"><i class="fas fa-lock"></i> Delete</button>
													<?php } ?>
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
	</div>
	<!-- MODALS -->
	<div class="modal fade" id="add_UserAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<?php echo form_open(base_url().'Add_NewAdmin','method="post"');?>
			<div class="modal-content m-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Add Admin</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body p-5">
					<div class="form-row">
						<div class="form-group m-1 col">
							<label>Admin Level</label>
							<select class="form-control" name="AdminLevel">
								<option value="Level_1">Level 1 President / Developer</option>
								<option value="Level_2">Level 2 Human Resource</option>
								<option value="Level_3">Level 3 Accounting</option>
							</select>
						</div>
						<div class="form-group m-1 col">
							<label>Choose Branch</label>
							<select class="form-control" name="BranchID">
								<?php foreach ($getBranchOption->result_array() as $row): ?>
									<option value="<?=$row['BranchID'];?>">
										<?=$row['Name'];?>
									</option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group m-1 col">
							<label>Position</label>
							<select class="form-control" name="Position">
								<option value="Developer">Developer</option>
								<option value="President">President</option>
								<option value="HR_Manager">HR Manager</option>
								<option value="HR_Assistant">HR Assistant</option>
								<option value="Accounting_Manager">Accounting Manager</option>
								<option value="Accounting_Assistant">Accounting Assistant</option>
							</select>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group m-1 col">
							<label>Admin ID</label>
							<input class="form-control" type="text" name="AdminID" autocomplete="off">
						</div>
						<div class="form-group m-1 col">
							<label>Password</label>
							<input class="form-control" type="text" name="Password" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group m-1 col">
							<label>First Name</label>
							<input class="form-control" type="text" name="FirstName" autocomplete="off">
						</div>
						<div class="form-group m-1 col">
							<label>Middle Initial/Name</label>
							<input class="form-control" type="text" name="MiddleIN" autocomplete="off">
						</div>
						<div class="form-group m-1 col">
							<label>Last Name</label>
							<input class="form-control" type="text" name="LastName" autocomplete="off">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group m-1">
							<label>Gender</label>
							<select class="form-control" name="Gender">
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
	<div class="modal fade" id="reassign_Admin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<?php echo form_open(base_url().'ReassignAdmin','method="post"');?>
			<div class="modal-content m-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Reassign Admin</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body p-5">
					<input id="R_AdminNo" type="hidden" name="R_AdminNo">
					<div class="form-row">
						<div class="form-group m-1 col">
							<label>Choose Branch</label>
							<select class="form-control" name="R_BranchID">
								<?php foreach ($getBranchOption->result_array() as $row): ?>
									<option value="<?=$row['BranchID'];?>">
										<?=$row['Name'];?>
									</option>
								<?php endforeach ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Reassign</button>
				</div>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
	<!-- EXPORT MODAL -->
	<?php $this->load->view('_template/modals/m_export'); ?>
</body>
<?php $this->load->view('_template/users/u_scripts'); ?>
<script type="text/javascript">
	$(document).ready(function () {
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
		var table = $('#ListAdmins').DataTable( {
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

		$('.ModalReassign').on('click', function () {
			$('#R_AdminNo').val($(this).attr('id'));
		});
	});
</script>
</html>