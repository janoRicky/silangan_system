<?php $T_Header;?>
<body>
	<div class="wrapper">
		<?php $this->load->view('_template/users/u_sidebar'); ?>
		<div id="content" class="ncontent">
			<div class="container-fluid">
				<?php $this->load->view('_template/users/u_notifications'); ?>
				<style type="text/css">
					.bcolor3BB515 {
						background-color: #3BB515;
					}
					.bcolorD9B319 {
						background-color: #D9B319;
					}
					.bcolor199EC4 {
						background-color: #199EC4;
					}
					.bcolorE75858 {
						background-color: #E75858;
					}
					.hei-100
					{
						min-height: 100% !important;
					}
					.card-container a {
						text-decoration: none;
					}
					.card-headers {
						border-radius: 3px 3px 0px 0px;
						padding-top: 20px;
						padding-bottom: 20px;
						padding-right: 20px;
						padding-left: 20px;
						color: #FFFFFF;
					}
					.card-bodys {
						border-radius: 0px 0px 3px 3px;
						padding-top: 20px;
						padding-bottom: 20px;
						padding-right: 20px;
						padding-left: 20px;
						background-color: #EBEBEB;
						border-right: 1px solid #D0D0D0;
						border-bottom: 1px solid #D0D0D0;
						border-left: 1px solid #D0D0D0;
						font-family: 'Open Sans', sans-serif;
					}
					.titless
					{
						color: #434343;
					}
					.head-text
					{
						font-size: 1em;
					}
					.head-ico-text
					{
						font-size: 2em;
					}
					.card-icon {
						font-size: 45px;
						color: rgba(255, 255, 255, 0.33);
					}
				</style>
				<div class="row p-4">
					<!-- <div class="col-md-12 col-lg-3 mb-4">
						<div class="card-container">
							<a href="Applicant">
								<div class="card-headers bcolor3BB515">
									<div class="row ml-2">
										<span class="head-text">
											Applicants
										</span>
									</div>
									<div class="row ml-2">
										<span class="head-ico-text">
											<b>
												<?php if ($result_capp->num_rows() > 0) { echo $result_capp->num_rows(); } ?>
											</b>
										</span>
										<i class="fas fa-user-friends fa-fw card-icon ml-auto mr-2"></i>
									</div>
								</div>
							</a>
						</div>
					</div> -->
					<div class="col-md-12 col-lg-4 mb-4">
						<div class="card-container">
							<a href="Employee">
								<div class="card-headers" style="background-color: rgba(153, 102, 255, 1);">
									<div class="row ml-2">
										<span class="head-text">
											Employees
										</span>
									</div>
									<div class="row ml-2">
										<span class="head-ico-text">
											<b>
												<?php if ($result_cemployee->num_rows() > 0) {
												echo $result_cemployee->num_rows(); } ?>
											</b>
										</span>
										<i class="fas fa-user-tie fa-fw card-icon ml-auto mr-2"></i>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-12 col-lg-4 mb-4">
						<div class="card-container">
							<a href="Branches">
								<div class="card-headers bcolor199EC4">
									<div class="row ml-2">
										<span class="head-text">
											Branches
										</span>
									</div>
									<div class="row ml-2">
										<span class="head-ico-text">
											<b>
												<?php if ($result_cBranches->num_rows() > 0) {
												echo $result_cBranches->num_rows(); } ?>
											</b>
										</span>
										<i class="fas fa-building fa-fw card-icon ml-auto mr-2"></i>
									</div>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-12 col-lg-4 mb-4">
						<div class="card-container">
							<a href="Admin_List">
								<div class="card-headers bcolorE75858">
									<div class="row ml-2">
										<span class="head-text">
											Admins
										</span>
									</div>
									<div class="row ml-2">
										<span class="head-ico-text">
											<b>
												<?php if ($result_cadmin->num_rows() > 0) {
												echo $result_cadmin->num_rows(); } ?>
											</b>
										</span>
										<i class="fas fa-user-secret fa-fw card-icon ml-auto mr-2"></i>
									</div>
								</div>
							</a>
						</div>
					</div>
					<!-- <div id="GraphChartButton" class="col-sm-12 col-lg-12 mt-5 mb-5 chart-hover">
						<div class="chart-title text-center">
							<h5 class="titless">
								<i class="fas fa-calendar-week fa-fw chart-hover-static"></i> <?php echo $CurrentYear; ?> Employees
							</h5>
						</div> -->

						<!-- <div class="col-1 ml-auto chart-hover-settings" style="margin-top: -30px; display: none;">
							<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-cog" style="margin-right: -1px;"></i></button>
						</div> -->
						
						<!-- <canvas id="ApplicantChart" class="w-100" width="800" height="250"></canvas>
					</div> -->
					<!-- <div id="PieChartButton" class="col-sm-12 col-lg-6 mt-5 mb-5">
						<div class="chart-title text-center">
							<h5 class="titless">
								<i class="fas fa-chart-pie fa-fw"></i> Employees Pool
							</h5>
						</div> -->

						<!-- <div class="col-1 ml-auto chart-hover-settings" style="margin-top: -30px; display: none;">
							<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-cog" style="margin-right: -1px;"></i></button>
						</div> -->

						<!-- <canvas id="pie-chart" width="800" height="450"></canvas>
					</div>
					<div id="BarChartButton" class="col-sm-12 col-lg-6 mt-5 mb-5">
						<div class="chart-title text-center">
							<h5 class="titless">
								<i class="fas fa-chart-line fa-fw"></i> Total Employed
							</h5>
						</div> -->

						<!-- <div class="col-1 ml-auto chart-hover-settings" style="margin-top: -30px; display: none;">
							<button type="button" class="btn btn-primary btn-sm"><i class="fas fa-cog" style="margin-right: -1px;"></i></button>
						</div> -->

						<!-- <canvas id="bar-chart-horizontal" width="800" height="450"></canvas>
					</div> -->

					<!-- LOGBOOK -->
					<div id="Logbook" class="col-sm-12 col-lg-12 mt-2 mb-2">
						<div class="content mt-1 mb-4">
							<div class="row content-body">
								<div class="col-sm-6">
									<div class="chart-title">
										<h5>
											<i class="fas fa-list"></i> Notifications
										</h5>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="text-right">
										<button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#AddNote"><i class="fas fa-plus"></i> Add Note</button>
										<button class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#ExportModal"><i class="fas fa-download" style="margin-right: -1px;"></i></button>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="table-responsive mt-4">
										<table id="ListLogbook" class="table table-condensed PrintOut" style="width: 100%;">
											<thead>
												<tr class="text-center align-middle">
													<th> Time </th>
													<th> Event </th>
													<th> Action </th>
												</tr>
											</thead>
											<tbody>
												<?php foreach ($GetLogbook->result_array() as $row): ?>
													<tr class="
														<?php 
															if ($row['Type'] == 'New' || $row['Type'] == 'Employment') 
															{ 
																echo 'logbook-success'; 
															}
															elseif ($row['Type'] == 'Archival') 
															{
																echo 'logbook-danger';
															} 
															elseif ($row['Type'] == 'Update')
															{
																echo 'logbook-info';
															}
															elseif ($row['Type'] == 'Reminder' || $row['Type'] == 'Note') 
															{
																echo 'logbook-warning';
															}
														?>">
														</td>
														<td class="text-center align-middle">
															<?php echo $row['Time']; ?>
														</td>
														<td class="text-center align-middle">
															<?php echo $row['Event']; ?>
														</td>
														<td class="text-center align-middle PrintExclude" width="100">
															<a href="<?php echo $row['Link'] ?>" class="btn btn-primary btn-sm w-100 mb-1" href="#" target="_blank"><i class="fas fa-external-link-alt"></i> View</a>
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
		</div>
	</div>
	<!-- ADD NOTE MODAL -->
	<?php $this->load->view('_template/modals/m_addnote'); ?>
	<!-- EXPORT MODAL -->
	<?php $this->load->view('_template/modals/m_export'); ?>
	<!-- PIE CHART MODAL -->
	<?php $this->load->view('_template/modals/m_dashboard_pie'); ?>
	<!-- BAR CHART MODAL -->
	<?php $this->load->view('_template/modals/m_dashboard_bar'); ?>
	<!-- GRAPH CHART MODAL -->
	<?php $this->load->view('_template/modals/m_dashboard_graph'); ?>
</body>
<?php $this->load->view('_template/users/u_scripts'); ?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.css">
<script src="<?php base_url(); ?>assets/js/Chart.bundle.js"></script>
<script src="<?php base_url(); ?>assets/js/Chart.bundle.min.js"></script>
<?php
	// BAR CHART COUNTER
	$BarBranchesLabel = '';
	$BarBranchesData = '';
	foreach ($result_cBranches->result_array() as $row):
		$BarBranchesLabel = $BarBranchesLabel . $row['Name'] . '", "';
		$BarBranchesData = $BarBranchesData . $this->Model_Selects->GetBranchesEmployed($row['BranchID'])->num_rows() . '", "';
	endforeach;
	$BarBranchesLabel = substr($BarBranchesLabel, 0, -4);
	$BarBranchesData = str_replace('"', "", $BarBranchesData);
	// GRAPH CHART COUNTER FOR CURRENT YEAR
	if (isset($_GET['Year'])) {
		$GraphMonthData = '';
		// echo date('Y');
		foreach ($result_monthly->result_array() as $row):
			$GraphMonthData = $GraphMonthData . $row['Total'] . '", "';
		endforeach;
		$GraphMonthData = str_replace('"', "", $GraphMonthData);
		// echo $GraphMonthData;
	}
	// GRAPH CHART COUNTER FOR SELECTED YEAR
	$GraphMonthDataCurrent = '';
	// echo date('Y');
	foreach ($result_monthly_current_year->result_array() as $row):
		$GraphMonthDataCurrent = $GraphMonthDataCurrent . $row['Total'] . '", "';
	endforeach;
	$GraphMonthDataCurrent = str_replace('"', "", $GraphMonthDataCurrent);
	// echo $GraphMonthData;
?>
<script type="text/javascript">
	$(document).ready(function () {
		$('[data-toggle="tooltip"]').tooltip();
		<?php if (isset($_GET['Year'])): ?>
			$('#GraphChartModal').modal('show');
		<?php endif; ?>
		<?php if (isset($_GET['Year']) && isset($_GET['Month'])): ?>
			location.href = "#ByMonth";
		<?php endif; ?>
		$("#GraphYear").change(function() {
			$(this).parents('form').submit();
			$('#LoadingIcon').fadeIn();
		});
		$('.load-div').hide();
		$('#GraphChartButton').on('click', function () {
			$('#GraphChartModal').modal('show');
		});
		// $(".chart-hover").hover(function(){
		// 	$(this).find('.chart-hover-settings').show();
		// },function(){
		// 	$(this).find('.chart-hover-settings').hide();
		// });
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
		var cData = JSON.parse(`<?php echo $chart_data; ?>`);
		new Chart(document.getElementById("pie-chart"), {
			type: 'pie',
			data: {
				labels: cData.label,
				datasets: [{
					label: cData.label,
					backgroundColor: ["#7B45E9", "#Cd45E9","#E945B3","#4561E9","#45B3E9","#7B45E9", "#Cd45E9","#E945B3","#4561E9","#45B3E9","#7B45E9", "#Cd45E9","#E945B3","#4561E9","#45B3E9","#7B45E9", "#Cd45E9","#E945B3","#4561E9","#45B3E9","#7B45E9", "#Cd45E9","#E945B3","#4561E9","#45B3E9"],
					data: cData.data,
				}]
			},
			options: {
				legend:
				{
					display: true,
				},
				title: {
					display: true,
					text: 'Position by Group'
				}
			}
		});
		new Chart(document.getElementById("bar-chart-horizontal"), {
			type: 'horizontalBar',
			data: {
				labels: ["<?php echo $BarBranchesLabel; ?>"],
				datasets: [
				{
					label : "",
					backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
					data: [<?php echo $BarBranchesData; ?>, 0]
				}
				]
			},
			options: {
				legend: {
					display: false
				},
			}
		});
		var ctx = document.getElementById('ApplicantChart');
		var myChart = new Chart(ctx, {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June' , 'July', 'August', 'September', 'October', 'November', 'December'],
				datasets: [{
					label: '# of Employees',
					data: [<?php echo $GraphMonthDataCurrent; ?>],
					backgroundColor: [
					'rgba(255, 99, 132, 0.5)',
					],
					borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{

						ticks: {
							stepValue: 1,
							beginAtZero: true
						}
					}]
				},
				title: {
					display: true,
					text: '<?php echo $CurrentYearTotal; ?> Employees Total'
				},
				legend: {
					display: false
				}
			}
		});
		var GraphChartID = document.getElementById('GraphChartModal_Chart');
		var GraphChart = new Chart(GraphChartID, {
			type: 'line',
			data: {
				labels: ['January', 'February', 'March', 'April', 'May', 'June' , 'July', 'August', 'September', 'October', 'November', 'December'],
				datasets: [{
					label: '# of Employees',
					data: [<?php if (isset($_GET['Year'])) { echo $GraphMonthData; } else { echo $GraphMonthDataCurrent; } ?>],
					backgroundColor: [
					'rgba(255, 99, 132, 0.5)',
					],
					borderColor: [
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)',
					'rgba(255, 99, 132, 1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 2
				}]
			},
			options: {
				scales: {
					yAxes: [{

						ticks: {
                            stepValue: 1,
							beginAtZero: true
						}
					}]
				},
				title: {
					display: true,
					text: '<?php if (isset($_GET['Year'])) { echo $SelectedYearTotal; } else { echo $CurrentYearTotal; } ?> Total Employees for <?php if (isset($_GET['Year'])) { echo $SelectedYear; } else { echo $CurrentYear; } ?>'
				},
				legend: {
					display: false
				}
			}
		});
		$.fn.dataTable.moment('MM/dd/yyyy hh:mm:ss A');
		var table = $('#ListLogbook').DataTable( {
        	"order": [[ 0, "desc" ]],
        	columnDefs: [{ targets: [0], type: 'date'}],
        	buttons: [
	            {
		            extend: 'print',
		            exportOptions: {
		                columns: [ 0, 1 ]
		            }
		        },
		        {
		            extend: 'copyHtml5',
		            exportOptions: {
		                columns: [ 0, 1 ]
		            }
		        },
		        {
		            extend: 'excelHtml5',
		            exportOptions: {
		                columns: [ 0, 1 ]
		            }
		        },
		        {
		            extend: 'csvHtml5',
		            exportOptions: {
		                columns: [ 0, 1 ]
		            }
		        },
		        {
		            extend: 'pdfHtml5',
		            exportOptions: {
		                columns: [ 0, 1 ]
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
		$('#MoreOptions').on('click', function () {
			$('#MoreOptions').hide();
			$('.modal-fade').fadeIn();
		});
		var	MonthlyGraph = $('#MonthlyTable').DataTable( {
        	"order": [[ 0, "desc" ]],
        	columnDefs: [{ targets: [0], type: 'date'}],
        	buttons: [
	            {
		            extend: 'print',
		            exportOptions: {
		                columns: [ 0, 1, 2, 3, 4 ]
		            }
		        },
		        {
		            extend: 'copyHtml5',
		            exportOptions: {
		                columns: [ 0, 1, 2, 3, 4 ]
		            }
		        },
		        {
		            extend: 'excelHtml5',
		            exportOptions: {
		                columns: [ 0, 1, 2, 3, 4 ]
		            }
		        },
		        {
		            extend: 'csvHtml5',
		            exportOptions: {
		                columns: [ 0, 1, 2, 3, 4 ]
		            }
		        },
		        {
		            extend: 'pdfHtml5',
		            exportOptions: {
		                columns: [ 0, 1, 2, 3, 4 ]
		            }
		        }
	        ]
   		});
		$('#MG_ExportPrint').on('click', function () {
	       	MonthlyGraph.button('0').trigger();
	    });
	    $('#MG_ExportCopy').on('click', function () {
	       	MonthlyGraph.button('1').trigger();
	    });
	    $('#MG_ExportExcel').on('click', function () {
	       	MonthlyGraph.button('2').trigger();
	    });
	    $('#MG_ExportCSV').on('click', function () {
	       	MonthlyGraph.button('3').trigger();
	    });
	    $('#MG_ExportPDF').on('click', function () {
	       	MonthlyGraph.button('4').trigger();
    	});
		$('#MoreOptions').on('click', function () {
			$('#MoreOptions').hide();
			$('.modal-fade').fadeIn();
		});
		new Chart(document.getElementById("GM_pie-chart"), {
			type: 'pie',
			data: {
				labels: cData.label,
				datasets: [{
					label: cData.label,
					backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
					data: cData.data,
				}]
			},
			options: {
				legend:
				{
					display: true,
				},
			}
		});
		var cDataExpired = JSON.parse(`<?php echo $chart_data_expired; ?>`);
		new Chart(document.getElementById("GM_pie-chart-expired"), {
			type: 'pie',
			data: {
				labels: cDataExpired.label,
				datasets: [{
					label: cDataExpired.label,
					backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
					data: cDataExpired.data,
				}]
			},
			options: {
				legend:
				{
					display: true,
				},
			}
		});
	});
</script>
</html>