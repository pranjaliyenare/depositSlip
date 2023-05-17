<?= $this->include('default/header') ?>
<?php echo view('default/navbar', array('title' => 'Generate Deposit Slip')); ?>
<?= $this->include('default/sidebar') ?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

<!-- <script>
  function myFunction()
  {
 document.getElementById("notes").innerHTML
  }
</script> -->


<div class="az-content-body pd-lg-l-40 d-flex flex-column">
          <h2 class="az-content-title">Generate Deposit Slip</h2>
          <?php $validation = \Config\Services::validation(); ?>
          <?php 
            // Display Response
            if(session()->has('message')){
            ?>
              <div class="alert <?= session()->getFlashdata('alert-class') ?>">
                <?= session()->getFlashdata('message') ?>
              </div>
            <?php
            }
            ?>
            <form action="<?php echo base_url("depositSlip"); ?>" method="POST">
                <div class="row row-sm">
                <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Bank Name</label>
                    <select class="form-control" name="bank" onchange="bankOnchange()" id="bank_name_id">
                        <option value="0">Select...</option>
                        <?php if($bank) {
                                foreach($bank as $bankddl) {    ?>
                                <option value="<?php echo $bankddl['id']; ?>"><?php echo $bankddl['bank_name']; ?></option>
                        <?php } } ?>
                    </select>
                    <input class="form-control" placeholder="Bank Name" type="hidden" name="bank_name" id="bankname_id">
                    <?php if($validation->getError('bank_name')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('bank_name'); ?>
                          </div>
                    <?php }?>
                  </div>
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Branch</label>
                    <input class="form-control" placeholder="Branch" type="text" name="branch" id="branch_id" required>
                      <?php if($validation->getError('branch')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('branch'); ?>
                          </div>
                      <?php }?>
                  </div>
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Mobile Number</label>
                    <input class="form-control" placeholder="Mobile Number" type="text" name="mobile_no" id="mobile_id" required>
                      <?php if($validation->getError('mobile_no')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('mobile_no'); ?>
                          </div>
                      <?php }?>
                  </div>
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Date</label>
                    <input class="form-control" type="date" id="date" name="date">
                      <?php if($validation->getError('date')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('date'); ?>
                          </div>
                      <?php }?>
                  </div>
                  
                  

                  <!-- <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 2000Rs. Notes</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 500Rs. Notes</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 200Rs. Notes</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 100Rs. Notes</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 50Rs. Notes</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 20Rs. Notes</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 10Rs. Notes / Coins</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 5Rs. Notes / coins</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 2Rs. coins</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20" id="notes">
                     <label for="2000quantity">No. of 1Rs. coins</label>
                     <input class="form-control" placeholder="No. of Notes" type="number" name="2000quantity" id="2000quantity" required>
                  </div> -->

                </div>                  
                <div class="col-sm-7 col-md-3 mg-b-20">
                  <input type="submit" class="btn btn-warning btn-rounded btn-block" value="Generate Deposit Slip" /> 
                </div>
            </form>
            <script>
                function bankOnchange() {
                  var id = $("#bank_name_id option:selected").text();
                  $("#bankname_id").val(id);
                //   var id = $("#bank_name_id option:selected").val();
                //      $.ajax({
                //          type: "POST",
                //          url: "<?php //echo base_url('users/fileUpload'); ?>",
                //          data: {'id': id},
                //          success: function(data) {
                //           //const msg = JSON.stringify(data);
                //           var msg = JSON.parse(data).id;
                //           //alert($("#bank_name_id option:selected").val());
                //              $("#name_id").val(data.id);
                //              $("#acc_no_id").val(data);
                //              $("#branch_id").val(msg);
                //          }
                //     });
                }
            </script>
<?= $this->include('default/footer') ?>