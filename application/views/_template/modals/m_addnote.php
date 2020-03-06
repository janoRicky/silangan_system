<div class="modal fade" id="AddNote" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo form_open(base_url().'AddNote','method="POST"');?>
			<div class="modal-header">
				<h5 class="modal-title">Add New Note</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-row ml-1 my-2">
					<input class="form-control" type="text" name="Note">
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Publish</button>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>