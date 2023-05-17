<?= $this->include('default/header') ?>
<?php echo view('default/navbar', array('title' => 'Home')); ?>

    <div class="az-content az-content-dashboard">
      <div class="container">
        <div class="az-content-body">
          <div class="az-dashboard-one-title">
            <div>
              <h2 class="az-dashboard-title">Hi, welcome back!</h2>
              <p class="az-dashboard-text"></p>
            </div>
            <div class="az-content-header-right">
              <a href="<?php echo base_url("generateDeptSlip"); ?>" class="btn btn-purple">Deposit Slip</a>
            </div>
          </div>
          <div class="row row-sm mg-b-20 mg-lg-b-0">
            <div class="col-lg-7 col-xl-12 mg-t-20 mg-lg-t-0">
              <div class="card card-table-one">
                <h6 class="card-title">Bank Details</h6>
                <p class="az-content-text mg-b-20"></p>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <!-- <th></th> -->
                        <th class="wd-5p">ID</th>
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
                          <!-- <td> 
                            <a href="<?php //echo base_url('editBank/'.$bankdetl['id']); ?>" type="button" class="btn btn-info btn-sm ">
                              Print
                            </a>
                          </td>  -->
                          <td><?php if($bankdetl['id']) { echo $bankdetl['id']; } else { ""; } ?></td>
                          <td><strong><?php if($bankdetl['acc_holdr_name']) { echo $bankdetl['acc_holdr_name']; } else { ""; } ?></strong></td>
                          <td><strong><?php if($bankdetl['bank_name']) { echo $bankdetl['bank_name']; } else { ""; } ?></strong></td>
                          <td><?php if($bankdetl['acc_no']) { echo $bankdetl['acc_no']; } else { ""; } ?></td>
                          <td><?php if($bankdetl['ifsc']) { echo $bankdetl['ifsc']; } else { ""; } ?></td>
                        </tr>
                      <?php endforeach; ?>
                    <?php endif; ?>                      
                    </tbody>
                  </table>
                </div><!-- table-responsive -->
              </div><!-- card -->
            </div><!-- col-lg -->

          </div><!-- row -->
        </div><!-- az-content-body -->
      </div>
    </div><!-- az-content -->

    <?= $this->include('default/footer') ?>