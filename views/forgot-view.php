<?php

require_once('layout-forgot.php');


function renderViewUserForgot()
{
  printStartHtmlDashboard( 'forgot', [
      'bootstrap',
      'fontawesome',
      'ionicons',
      'adminlte',
      'googlefont',
      'icheck'
      ] );
      printForgot();
      printEndHtml('Login', [
        'jquery3',
        'bootstrap',
        'icheck'
      ]);
}


function printForgot()
{
  $sForgot = '
  <body class="hold-transition login-page">

  <div class="login-box">
    <div class="login-logo">
      <a href="https://www.facebook.com/AteccServices"><img src="dist/img/logo.ico" height="50">&nbsp;&nbsp;&nbsp;<b>Atecc</b> Services</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Récupérer un nouveau mot de passe</p>

      <form action="'.'index.php?page=login'.'" method="post">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            &nbsp;
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrer</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-box-body -->

  </div>
  <!-- /.login-box -->';
  echo sprintf($sForgot);
}
