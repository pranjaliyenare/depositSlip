<div class="az-content pd-y-20 pd-lg-y-30 pd-xl-y-40">
      <div class="container">
        <div class="az-content-left az-content-left-components">
          <div class="component-item">
            <label>Master</label>
            <nav class="nav flex-column">
              <a href="<?php echo base_url("addBank"); ?>" class="nav-link <?php if($title == 'Add Bank') { echo "active"; } else { echo ""; }  ?>">Add Bank</a>
            </nav>
            <label>Transaction</label>
            <nav class="nav flex-column">
              <a href="<?php echo base_url("generateDeptSlip"); ?>" class="nav-link <?php if($title == 'Generate Deposit Slip') { echo "active"; } ; ?>">Generate Deposit Slip</a>
            </nav>
          </div>
        </div>