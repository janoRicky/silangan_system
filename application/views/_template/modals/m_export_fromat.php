<!-- Modal -->
<div class="modal fade" id="DateFroto_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <?php echo form_open(base_url().'PhpOffice_Controller/ExportFrom_To','method="post"');?>
  <div class="modal-dialog" role="document">
    <div class="modal-content m-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Select Dates :</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <input id="idforFormatex" type="text" class="form-control" name="id" readonly="" hidden="">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label><strong>From</strong></label>
            <input type="date" class="form-control" name="f_date">
          </div>
          <div class="col">
            <label><strong>To</strong></label>
            <input type="date" class="form-control" name="t_date">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Download Format</button>
      </div>
    </div>
  </div>
  <?php echo form_close();?>
</div>