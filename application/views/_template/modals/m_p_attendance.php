<style type="text/css">
  .modal-content  {
    -webkit-border-radius: 0px !important;
    -moz-border-radius: 0px !important;
    border-radius: 0px !important; 
  }
</style>
<?php echo form_open(base_url().'UpdatethisAttRecord','method="post"'); ?>
<!------------------ INPUT ------------------>
<input id="date_id" type="hidden" name="date_id" value="">
<input id="ApplicantID" type="hidden" name="ApplicantID" value="<?php if (isset($_GET['ApplicantID'])) { echo $_GET['ApplicantID']; } ?>">
<input id="startDate" type="hidden" name="startDate" value="<?php if (isset($_GET['startDate'])) { echo $_GET['startDate']; } ?>">
<input id="EndDate" type="hidden" name="EndDate" value="<?php if (isset($_GET['EndDate'])) { echo $_GET['EndDate']; } ?>">

<div class="modal" id="modalDateEditor" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Update record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-row p-4">
          <div class="form-group text-center col-12">
            <h4 id="dateTitle" class="mb-3">
              Checked-in
            </h4>
            <!------------------ INPUT ------------------>
            <input id="shift_type" type="checkbox" data-toggle="toggle" data-width="200" data-size="large" data-style="android" data-on="<i class='fas fa-sun fw'></i> Day shift" data-off="<i class='fas fa-moon fw'></i> Night shift" data-onstyle="primary" data-offstyle="warning" name="shift_type" value="">
          </div>
          <div class="form-group m-auto col-12 text-center pb-3">
            <h6><strong>Holiday</strong></h6>
          </div>
          <div class="form-group m-auto">
            <div class="col-3 d-inline">
              <!------------------ INPUT ------------------>
              <input id="regular_day" class="holiday_btn" type="checkbox" data-toggle="toggle" data-width="140" data-style="android" data-on="<i class='fas fa-check fw'></i> Regular" data-off="<i class='fas fa-times fw'></i> Regular" data-onstyle="success" data-offstyle="danger" name="regular_day">
            </div>
            <div class="col-3 d-inline">
              <!------------------ INPUT ------------------>
              <input id="sp_day" class="holiday_btn" type="checkbox" data-toggle="toggle" data-width="140" data-style="android" data-on="<i class='fas fa-check fw'></i> Special" data-off="<i class='fas fa-times fw'></i> Special" data-onstyle="success" data-offstyle="danger" name="sp_day">
            </div>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group text-center col-6 m-auto" style="padding-top: 2rem; padding-bottom: 2rem; border-radius: 2px;">
            <h6>
              AM
            </h6>
            <div style="display: inline-block;">
              <label>Time in</label>
              <!------------------ INPUT ------------------>
              <input id="time_inam" class="form-control text-center" type="time" name="time_inam">
            </div>
            <div style="display: inline-block;">
              <label>Time out</label>
              <!------------------ INPUT ------------------>
              <input id="time_outam" class="form-control text-center" type="time" name="time_outam">
            </div>
          </div>
          <div class="form-group text-center col-6 m-auto" style="padding-top: 2rem; padding-bottom: 2rem; border-radius: 2px;">
            <h6>
              PM
            </h6>
            <div style="display: inline-block;">
              <label>Time in</label>
              <!------------------ INPUT ------------------>
              <input id="time_inpm" class="form-control text-center" type="time" name="time_inpm">
            </div>
            <div style="display: inline-block;">
              <label>Time out</label>
              <!------------------ INPUT ------------------>
              <input id="time_outpm" class="form-control text-center" type="time" name="time_outpm">
            </div>
          </div>
        </div>
        
        <div class="form-row mt-4">
          <div class="form-group col-2 text-center ml-auto">
            <label for="">Rate</label>
            <input id="cur_rate" type="text" class="form-control text-center" readonly="">
          </div>
          <div class="form-group col-2 text-center">
            <label for="">Hours</label>
            <input id="totalHrs" type="text" class="form-control text-center" readonly="">
          </div>
          <div class="form-group col-2 text-center">
            <label for="">OT (min/s)</label>
            <input id="overtime" type="text" class="form-control text-center" readonly="">
          </div>
          <div class="form-group col-2 text-center">
            <label for="">Earned (PHP)</label>
            <input id="totalPay" type="text" class="form-control text-center" readonly="">
          </div>
          <div class="form-group col-2 text-center mr-auto">
            <label for="">OT Earned (PHP)</label>
            <input id="otpay" type="text" class="form-control text-center" readonly="">
          </div>
        </div>
        <div class="col-10 ml-auto mr-auto mt-3" style="border-top: 5px solid #CC3D3D; border-radius: 100%;">
        </div>
        <div class="form-row mt-4">
          <div class="form-group m-auto col-10 text-center">
            <h6>
              Notes
            </h6>
          </div>
          <div class="form-group m-auto col-10">
            <!------------------ INPUT ------------------>
            <textarea id="record_note" class="form-control" rows="7" name="note"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php echo form_close(); ?>
