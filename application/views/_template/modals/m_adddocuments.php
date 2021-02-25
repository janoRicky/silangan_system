<div class="modal fade" id="AddSuppDoc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content m-content">
			<?php echo form_open_multipart(base_url().'AddSupDoc','method="post"'); ?>
				<input id="pImageChecker" type="hidden" name="pImageChecker">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Upload Documents</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input id="Pass_ID" type="hidden" name="ApplicantID">
					<div class="form-row" style="margin-left: 15px; margin-right: 15px;">
						<input type="hidden" id="MAX_FILE_SIZE" name="MAX_FILE_SIZE" value="300000" />

						<div class="silangan-drop-area form-group col-sm-12 text-center">
							<div id="output">
								<div class="silangan-drop-area-file">
									<p>
										<i class="fas fa-download"></i>
									</p>
									<label for="fileselect">Choose a PDF file</label>
									<input type="file" id="fileselect" name="pFile" />
									or drop it here (WIP)
								</div>
								<div id="output-output">
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div id="ViolationNotice" class="row ml-auto mr-auto pb-1 w-100" style="display: none;">
						<div class="col-sm-12 col-mb-12 w-100 text-center document-notice-violation py-2">
							<div class="col-sm-12 pb-2">
								<i class="fas fa-exclamation-triangle" style="font-size: 24px;"></i>
							</div>
							<div class="col-sm-12">
								You are marking this document as a violation.
							</div>
						</div>
					</div>
					<div id="BlacklistNotice" class="row ml-auto mr-auto pb-1 w-100" style="display: none;">
						<div class="col-sm-12 col-mb-12 w-100 text-center document-notice-blacklist py-2">
							<div class="col-sm-12 pb-2">
								<i class="fas fa-exclamation-triangle" style="font-size: 24px;"></i>
							</div>
							<div class="col-sm-12">
								You are blacklisting this individual.
							</div>
						</div>
					</div>
					<div class="form-row" style="margin-left: 10px; margin-right: 10px;">
						<div class="form-group col-sm-4 text-center">
							<label>Type</label>
							<select id="Type" class="form-control" name="Type">
								<option value="Document">Document</option>
								<option value="Violation">Violation</option>
								<!-- <option value="Blacklist">Blacklist</option> -->
							</select>
						</div>
						<div class="form-group col-sm-8 text-center">
							<label>Subject</label>
							<input class="form-control" type="text" name="Subject">
						</div>
					</div>
					<div class="form-group col-sm-12 text-center">
						<label>Description</label>
						<textarea class="form-control" name="Description" rows="6"></textarea>
					</div>
					<div class="form-group col-sm-12 text-center">
						<label>Remarks</label>
						<textarea class="form-control" name="Remarks" rows="6"></textarea>
					</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>