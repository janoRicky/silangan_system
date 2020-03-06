<div class="modal fade" id="ExtendContractModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo form_open(base_url().'ExtendContract','method="POST"');?>
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Extend Contract for <?=$LastName?>, <?=$FirstName?> <?=$MiddleInitial?>.</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php if (isset($_GET['id'])): ?>
				<input id="ExtendID" type="hidden" name="ApplicantID" value="<?php echo $ApplicantID; ?>">
				<?php else: ?>
				<input id="ExtendID" type="hidden" name="ApplicantID" value="">
				<?php endif; ?>
				<input id="ExtendDate" type="hidden" name="E_CurrentDate" value="<?php echo $DateEnds; ?>">
				<div class="form-row mx-1">
					<div class="form-group col-4">
						<label>Days</label>
						<input class="form-control" type="number" name="E_Days">
					</div>
					<div class="form-group col-4">
						<label>Months</label>
						<input class="form-control" type="number" name="E_Months">
					</div>
					<div class="form-group col-4">
						<label>Years</label>
						<input class="form-control" type="number" name="E_Years">
					</div>
				</div>
			</div>
			<div class="modal-footer">

				<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i>Extend</button>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>