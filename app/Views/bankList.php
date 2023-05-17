<?= $this->include('default/header') ?>
<?php echo view('default/navbar', array('title' => 'Bank')); ?>
<?= $this->include('default/sidebar') ?>
        <div class="az-content-body pd-lg-l-40 d-flex flex-column">
          <h2 class="az-content-title">Profile</h2>
          <div class="az-content-label mg-b-5">List Of Profile</div>
          <p class="mg-b-20"></p>
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
          <div class="table-responsive">
            <table class="table table-striped mg-b-0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Account Holder Name</th>
                  <th>Bank Name</th>
                  <th>Account Number</th>
                  <th>IFSC</th>
                </tr>
              </thead>
              <tbody>
                  <?php if($bankdtl): ?>
                    <?php foreach($bankdtl as $bankdetl): ?>
                      <tr>
                        <th scope="row"><?php if($bankdetl['id']) { echo $bankdetl['id']; } else { ""; } ?></th>
                        <td><?php if($bankdetl['acc_holdr_name']) { echo $bankdetl['acc_holdr_name']; } else { ""; } ?></td>
                        <td><?php if($bankdetl['bank_name']) { echo $bankdetl['bank_name']; } else { ""; } ?></td>
                        <td><?php if($bankdetl['acc_no']) { echo $bankdetl['acc_no']; } else { ""; } ?></td>
                        <td><?php if($bankdetl['ifsc']) { echo $bankdetl['ifsc']; } else { ""; } ?></td>
                        <td> 
                            <a href="<?php echo base_url('editBank/'.$bankdetl['id']); ?>" type="button" class="btn btn-info btn-sm ">
                              <i class="typcn typcn-pencil"></i>
                            </a>
                            <a href="<?php echo base_url('deleteBank/'.$bankdetl['id']); ?>" type="button" class="btn btn-danger btn-sm ">
                              <i class="typcn typcn-trash"></i>
                            </a>
                        </td> 
                      </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>    
              </tbody>
            </table>
          </div><!-- bd -->

          <hr class="mg-y-30">

         
<?= $this->include('default/footer') ?>


    
