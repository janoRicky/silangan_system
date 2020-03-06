<div class="modal fade" id="ModalClientView" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo form_open(base_url().'ViewClientEmployees','method="POST"');?>
			<div class="load-container modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">View Client</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="load-container modal-body">
				<?php if (isset($_GET['id'])): ?>
				<input id="ViewClientID" type="hidden" name="ViewClientID" value="<?php echo $ClientID; ?>">
				<?php else: ?>
				<input id="ViewClientID" type="hidden" name="ViewClientID" value="">
				<?php endif; ?>
				<div class="form-row ml-1 my-2">
					<h5 class="text-center">
						Mode
					</h5>
				</div>
				<div class="form-row">
					<div class="form-group col-12">
						<select class="form-control" name="Mode">
							<option value="Weekly">
								Weekly
							</option>
							<option value="Semi-Monthly">
								Semi-Monthly
							</option>
							<option value="Monthly">
								Monthly
							</option>
						</select>
					</div>
				</div>
				<div class="form-row ml-1 my-2">
					<h5 class="text-center">
						Date Range
					</h5>
				</div>
				<div class="form-row mx-1">
					<div class="form-group col-sm-12 col-md-6">
						<label>From</label>
						<input id="FromDate" class="form-control" type="date" name="FromDate">
					</div>
					<div class="form-group col-sm-12 col-md-6">
						<label>To</label>
						<input id="ToDate" class="form-control" type="date" name="ToDate">
					</div>
				</div>
				<div class="load-div form-row">
					<div class="text-center ml-auto mr-auto">
						<div class="spinner-border m-5" role="status"></div>
						<h4>Please wait momentarily</h4>
						<p>Preparing the table...</p>
					</div>
				</div>
			</div>
			<div class="load-container modal-footer">
				<button id="LoadButton" type="submit" class="btn btn-primary"><i class="fas fa-clock"></i> View</button>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>