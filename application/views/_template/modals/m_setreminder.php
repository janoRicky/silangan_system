<div class="modal fade" id="ReminderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo form_open(base_url().'SetReminder','method="POST"');?>
			<div class="modal-header">
				<h5 class="modal-title">Set a reminder for...</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php if (isset($_GET['id'])): ?>
				<input id="ReminderID" type="hidden" name="ApplicantID" value="<?php echo $ApplicantID; ?>">
				<?php else: ?>
				<input id="ReminderID" type="hidden" name="ApplicantID" value="">
				<?php endif; ?>
				<div class="form-row">
					<div class="form-group col-12">
						<select class="form-control" name="R_Type">
							<option value="R_ContractDuration">
								Contract Duration
							</option>
						</select>
					</div>
				</div>
				<div class="form-row ml-1 my-2">
					<h5 class="text-center">
						Time before it happens...
					</h5>
				</div>
				<div class="form-row mx-1">
					<div class="form-group col-4">
						<label>Years</label>
						<input class="form-control" type="number" name="R_Years" value="0">
					</div>
					<div class="form-group col-4">
						<label>Months</label>
						<input class="form-control" type="number" name="R_Months" value="1">
					</div>
					<div class="form-group col-4">
						<label>Days</label>
						<input class="form-control" type="number" name="R_Days" value="0">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary"><i class="fas fa-stopwatch"></i> Set</button>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>