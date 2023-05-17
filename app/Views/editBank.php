<?= $this->include('default/header') ?>
  <?php echo view('default/navbar', array('title' => 'Add Bank')); ?>
  <?= $this->include('default/sidebar') ?>
    <div class="az-content-body pd-lg-l-40 d-flex flex-column">
          <h2 class="az-content-title">Add Bank Details</h2>
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
        
            <form action="<?php echo base_url("updateBank"); ?>" method="POST">
              <div class="row row-sm">
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                  <input class="form-control" placeholder="Bank Id" type="hidden" name="bank_id" value="<?php echo $bank[0]['id'] ?>">
                    <label>Account Holder Name</label>
                    <input class="form-control" placeholder="Account Holder Name" type="text" name="account_holdr_name" value="<?php echo $bank[0]['acc_holdr_name'] ?>">
                      <?php if($validation->getError('account_holdr_name')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('account_holdr_name'); ?>
                          </div>
                      <?php }?>
                  </div><!-- col -->
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Bank Name</label>
                    <input class="form-control" placeholder="Bank Name" readonly="" type="text" name="bank_name" value="<?php echo $bank[0]['bank_name'] ?>" >
                      <?php if($validation->getError('bank_name')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('bank_name'); ?>
                          </div>
                      <?php }?>
                  </div>
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Account Number</label>
                    <input class="form-control" placeholder="Account Number" type="text" name="account_no" value="<?php echo $bank[0]['acc_no'] ?>">
                      <?php if($validation->getError('account_no')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('account_no'); ?>
                          </div>
                      <?php }?>
                  </div><!-- col -->
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>IFSC</label>
                    <input class="form-control" placeholder="IFSC" type="text" name="ifsc" value="<?php echo $bank[0]['ifsc'] ?>">
                      <?php if($validation->getError('ifsc')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('ifsc'); ?>
                          </div>
                      <?php }?>
                  </div><!-- col -->

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Amount(In words)</label>
                    <input class="form-control" placeholder="Amount" type="text" id="amount_in_words" name="amount_in_words" value="<?php echo $bank[0]['amount_in_words'] ?>">
                      <?php if($validation->getError('amount_in_words')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('amount_in_words'); ?>
                          </div>
                      <?php }?>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Amount(In Number)</label>
                    <input class="form-control" placeholder="Amount" type="text" id="amount_in_number" name="amount_in_number" value="<?php echo $bank[0]['amount_in_number'] ?>">
                      <?php if($validation->getError('amount_in_number')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('amount_in_number'); ?>
                          </div>
                      <?php }?>
                  </div>
                  <div class="col-sm-7 col-md-3 mg-b-20">
                    <input type="submit" class="btn btn-success btn-rounded btn-block" value="Edit" /> 
                  </div>
              </div><!-- row -->
            </form>
  <?= $this->include('default/footer') ?>


    
