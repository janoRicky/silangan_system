<div class="modal fade" id="EmpContractHistory">
			<div class="modal-dialog modal-xl">
				<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h4 class="modal-title PrintOutHistory">Contract History for <?=$LastName?>, <?=$FirstName?> <?=$MiddleInitial?>.</h4>
					<div class="text-right">
						<button onClick="printContent('PrintOutHistory')" type="button" class="btn btn-primary mr-auto"><i class="fas fa-print"></i> Print</button>
						<button type="button" class="close d-none d-sm-block" data-dismiss="modal">&times;</button>
					</div>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<div class="row rcontent">
						<div class="col-sm-12">
							<div class="table-responsive pt-5 pb-5 pl-2 pr-2">
								<table id="ListContractHistory" class="table table-striped table-bordered PrintOutHistory" style="width: 100%;">
									<thead>
										<tr class="text-center align-middle">
											<th> Client </th>
											<th> Contract Started </th>
											<th> Contract Ended </th>
											<th> Notes </th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($GetContractHistory->result_array() as $row): ?>
											<tr>
												<td class="text-center align-middle">
													<?php echo $row['Client'] ; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['PreviousDateStarted'] ; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['PreviousDateEnds'] ; ?>
												</td>
												<td class="text-center align-middle">
													<?php echo $row['Notes'] ; ?>
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