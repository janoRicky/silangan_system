<div class="modal fade" id="ImportDeviceAttModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content m-content">
			<?php echo form_open(base_url().'ImportDeviceAtt','method="GET"');?>
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Import Attendance From Device</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-row mx-1">
					<div class="form-group col-6">
						<label>IP</label>
						<input class="form-control" type="text" name="ip" value="192.168.1.212">
					</div>
					<div class="form-group col-6">
						<label>Port</label>
						<input class="form-control" type="number" name="port" value="4370">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i>Import</button>
			</div>
			<?php echo form_close();?>
		</div>
	</div>
</div>