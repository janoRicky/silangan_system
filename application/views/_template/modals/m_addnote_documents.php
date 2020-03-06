<div class="modal fade" id="AddNote" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<?php echo form_open(base_url().'AddNoteDocuments','method="POST"');?>
			<input id="AddNote_ApplicantID" type="hidden" name="ApplicantID">
			<div class="modal-header">
				<h5 class="modal-title">Add New Note (Limit: 255 characters)</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-row ml-1 my-2">
					<textarea class="form-control" name="NoteDocuments" rows="6"></textarea>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save</button>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>