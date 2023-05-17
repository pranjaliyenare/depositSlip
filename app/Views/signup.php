<!DOCTYPE html>
<html lang="en">
  <head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Urja Patsanstha">
    <meta name="author" content="Urjapatsanstha">

    <title>Urja Patsanstha</title>

    <!-- vendor css -->
    <link href="<?php echo base_url(); ?>/public/assets/lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/public/assets/lib/typicons.font/typicons.css" rel="stylesheet">

    <!-- Urja Patsanstha CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/public/assets/css/azia.css">

  </head>
  <body class="az-body">
  
    <div class="az-signup-wrapper">
      <div class="az-column-signup">
        <h1 class="az-logo">az<span>i</span>a</h1>
        <div class="az-signup-header">
          <h2>Get Started</h2>
          <h4>It's free to signup and only takes a minute.</h4>
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
          <form action="<?php echo base_url("user/create_account"); ?>" method="POST">
            <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control" placeholder="Enter your firstname and lastname" name="fullname" required="">
              <?php if($validation->getError('fullname')) {?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('fullname'); ?>
                  </div>
              <?php }?>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Enter your email" name="email" required="">
              <?php if($validation->getError('email')) {?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('email'); ?>
                  </div>
              <?php }?>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Enter your password" name="password" required="">
              <?php if($validation->getError('password')) {?>
                  <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('password'); ?>
                  </div>
              <?php }?>
            </div>
            <input type="submit" class="btn btn-az-primary btn-block" value="Create Account" />       
          </form>
        </div>
        <div class="az-signup-footer">
          <p>Already have an account? <a href="<?php echo base_url(); ?>">Sign In</a></p>
        </div>
      </div>
    </div>

    <script src="<?php echo base_url(); ?>/public/assets/lib/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/lib/ionicons/ionicons.js"></script>
    <script src="<?php echo base_url(); ?>/public/assets/js/jquery.cookie.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>/public/assets/js/azia.js"></script>
    <script>
      $(function(){
        'use strict'
      });
    </script>
  </body>
</html>
