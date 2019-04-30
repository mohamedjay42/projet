<?php


function printLogin()
{
  $sLogin =
  ' <body class="hold-transition login-page">

  <div class="login-box">
    <div class="login-logo">
      <a href="https://www.facebook.com/AteccServices"><img src="dist/img/logo.ico" height="50">&nbsp;&nbsp;&nbsp;<b>Atecc</b> Services</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">S\'identifier</p>

      <form action="index.php" method="post">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Se souvenir de moi
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrer</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="'.'index.php?page=recuperation'.'">Mot de passe oublié</a><br>

    </div>
    <!-- /.login-box-body -->
    <br /><br /><br /><br /><br />
  <a href="'.'index.php?page=admin-dashboard'.'"><button type="button" class="btn btn-block btn-primary btn-lg">Version Administrateur</button></a>
  <br />
  <a href="'.'index.php?page=user-dashboard'.'"><button type="button" class="btn btn-block btn-success btn-lg">Version utilisateur</button></a>
  <br />

  </div>
  <!-- /.login-box -->';
  echo sprintf($sLogin,'index.php');
}
