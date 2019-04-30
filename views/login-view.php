<?php

require_once('layout-login.php');


function renderViewLogin()
{
  printStartHtmlDashboard( 'Login', [
      'bootstrap',
      'fontawesome',
      'ionicons',
      'adminlte',
      'googlefont',
      'icheck'
      ] );
      printLogin();
      printEndHtml('Login', [
        'jquery3',
        'bootstrap',
        'icheck'
      ]);
}
