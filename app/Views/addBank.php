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
            <form action="<?php echo base_url("insertBank"); ?>" method="POST">
              <div class="row row-sm">
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Account Holder Name</label>
                    <input class="form-control" placeholder="Account Holder Name" type="text" name="account_holdr_name">
                      <?php if($validation->getError('account_holdr_name')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('account_holdr_name'); ?>
                          </div>
                      <?php }?>
                  </div><!-- col -->
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Bank Name</label>
                    <input class="form-control" placeholder="Bank Name" readonly="" type="text" name="bank_name" value="Urja Patsanstha">
                      <?php if($validation->getError('bank_name')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('bank_name'); ?>
                          </div>
                      <?php }?>
                  </div>
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Account Number</label>
                    <input class="form-control" placeholder="Account Number" type="text" name="account_no">
                      <?php if($validation->getError('account_no')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('account_no'); ?>
                          </div>
                      <?php }?>
                  </div><!-- col -->
                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>IFSC</label>
                    <input class="form-control" placeholder="IFSC" type="text" name="ifsc">
                      <?php if($validation->getError('ifsc')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('ifsc'); ?>
                          </div>
                      <?php }?>
                  </div><!-- col -->

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Amount(In words)</label>
                    <input class="form-control" placeholder="Amount" type="text" id="amount_in_words" name="amount_in_words" required>
                      <?php if($validation->getError('amount_in_words')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('amount_in_words'); ?>
                          </div>
                      <?php }?>
                  </div>

                  <div class="col-sm-7 col-md-6 col-lg-6 mg-b-20">
                    <label>Amount(In Number)</label>
                    <input class="form-control" placeholder="Amount" type="text" id="amount_in_number" name="amount_in_number" required>
                      <?php if($validation->getError('amount_in_number')) {?>
                          <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('amount_in_number'); ?>
                          </div>
                      <?php }?>
                  </div>
                  <div class="col-sm-7 col-md-3 mg-b-20">
                    <input type="submit" class="btn btn-indigo btn-rounded btn-block" value="Save" /> 
                  </div>
              </div><!-- row -->
            </form>
  <?= $this->include('default/footer') ?>


    
