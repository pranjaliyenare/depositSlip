<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
      <!-- <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-90680653-2');
      </script> -->
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="urja">
    <meta name="author" content="BootstrapDash">

    <title>Urja Patsanstha </title>

    <!-- vendor css -->
    <link href="<?php echo base_url(); ?>/public/assets/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/assets/lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- Urja Patsanstha CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/azia.css">

  </head>
  <body class="az-body">
    <div class="az-signin-wrapper">
      <div class="az-card-signin">
        <h1 class="az-logo">ur<span>j</span>a</h1>
        <div class="az-signin-header">
          <h2>Welcome back!</h2>
          <h4>Please sign in to continue</h4>
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
          <form action="<?php echo base_url("loginAuth"); ?>" method="POST">
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter your email" name="email">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div><!-- form-group -->
            <input type="submit" class="btn btn-az-primary btn-block" value="Sign In">
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <p><a href="">Forgot password?</a></p>
          <p>Don't have an account? <a href="<?php echo base_url("signup"); ?>">Create an Account</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

    <script src="<?php echo base_url(); ?>/public/assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/lib/ionicons/ionicons.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/jquery.cookie.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>/public/assets/js/azia.js"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
