<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Talanta | Forgot Password</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=  base_url() ?>/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?=  base_url() ?>/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=  base_url() ?>/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>RESET PASSWORD</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
     
        <?php if (isset($validation)): ?>
          <div class="col-12">
            <div  class="alert alert-danger" role="alert">
              <?= $validation->listErrors()?>
            </div>
          </div>
         <?php endif; ?>
          <?php
                   if(session()->getTempdata('error')):?>
                      <div class="alert alert-danger"><?= session()->getTempdata('error');?></div> 
                  <?php endif; ?>
                   <?php
                   if(session()->getTempdata('success')):?>
                      <div class="alert alert-success"><?= session()->getTempdata('success');?></div> 
                  <?php endif; ?>

      <form action="<?= base_url()?>/users/reset_password/<?= $token;?>" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br>
           <div class="input-group mb-3">
          <input type="password" class="form-control" name="password_confirm" placeholder="Password Confirm">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
          </div>
        
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=  base_url() ?>/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=  base_url() ?>/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=  base_url() ?>/admin/dist/js/adminlte.min.js"></script>
</body>
</html>
