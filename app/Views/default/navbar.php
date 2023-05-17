    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="<?php echo base_url("index"); ?>" class="az-logo"><span></span> <img class="img-fluid" src="<?php echo base_url();?>/public/assets/img/logo.png" alt=""></a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="<?php echo base_url("index"); ?>" class="az-logo"><span></span> Urja Patsanstha</a>
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
            <li class="nav-item <?php if($title == 'Home') { echo 'active show';} ?> ">
              <a href="<?php echo base_url("index"); ?>" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
            </li>
            <li class="nav-item <?php if($title == 'Bank') { echo 'active show';} ?> ">
              <a href="<?php echo base_url("bankList"); ?>" class="nav-link"><i class="fa fa-bank"></i> Bank</a>
            </li>
          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          
          <div class="dropdown az-profile-menu">
            <a href="" class="az-img-user"><img src="<?php echo base_url(); ?>/public/assets/img/faces/face1.jpg" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
              </div>
              <!-- <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="../img/faces/face1.jpg" alt="">
                </div>
                <h6>Aziana Pechon</h6>
                <span>Premium Member</span>
              </div> -->
              <!-- <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-time"></i> Activity Logs</a>
              <a href="" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Account Settings</a> -->
              <a href="<?php echo base_url("logOut"); ?>" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Sign Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->