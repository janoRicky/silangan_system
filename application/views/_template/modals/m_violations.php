<div class="modal fade" id="ViolationsModal">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title PrintOutHistory">Violation Records for <?=$LastName?>, <?=$FirstName?> <?=$MiddleInitial?>.</h4>
					<div class="text-right">
						<div class="datatables-export-violations"></div>
						<button type="button" class="close d-none d-sm-block" data-dismiss="modal">&times;</button>
					</div>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="row rcontent">
						<div class="col-sm-12">
							<div class="table-responsive pt-5 pb-5 pl-2 pr-2">
								<table id="ListViolations" class="table table-striped table-bordered PrintOutHistory" style="width: 100%;">
									<thead>
										<tr class="text-center align-middle">
											<th> Client ID </th>
											<th> Client Name </th>
											<th> Violation </th>
											<th> Time </th>
										</tr>
									</thead>
									<tbody>
										<?php 

										foreach ($GetViolations->result_array() as $row): ?>
											<tr>
												<td class="text-center align-middle">
													<?php echo $row['ClientID']; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['ClientName']; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['Violation']; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['Time']; ?></a>
												</td>
											</tr>
										<?php endforeach ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
					<button type="button" class="btn btn-danger ml-auto" data-dismiss="modal">Close</button>
				</div>

				</div>
			</div>
		</div>