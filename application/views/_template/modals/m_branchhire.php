<div class="modal fade" id="hirthis" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo form_open(base_url().'EmployApplicant','method="POST"');?>
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Hire Applicant</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div id="BranchModal" class="modal-body">
				<?php if (isset($_GET['id'])): ?>
				<input id="idToHire" type="hidden" name="ApplicantID" value="<?php echo $ApplicantID; ?>">
				<?php else: ?>
				<input id="idToHire" type="hidden" name="ApplicantID" value="">
				<?php endif; ?>
				<div class="form-row">
					<div class="form-group col-12">
						<label>Choose Branch</label>
						<select id="Brancheselect" class="form-control" name="BranchID">
							<?php foreach ($getBranchOption->result_array() as $row): ?>
								<option value="<?=$row['BranchID'];?>">
									<?=$row['Name'];?>
								</option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<div class="form-row ml-1 my-2">
					<h5 class="text-center">
						Contract Duration
					</h5>
				</div>
				<div class="form-row mx-1">
					<div class="form-group col-4">
						<label>Years</label>
						<input class="form-control" type="number" name="H_Years" value="1">
					</div>
					<div class="form-group col-4">
						<label>Months</label>
						<input class="form-control" type="number" name="H_Months" value="0">
					</div>
					<div class="form-group col-4">
						<label>Days</label>
						<input class="form-control" type="number" name="H_Days" value="0">
					</div>
				</div>
				<div class="form-row mx-1">
					<div class="form-group col-12">
						<label>Employee ID</label>
						<input id="EmployeeID" class="form-control" type="text" name="EmployeeID" value="">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Hire</button>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>