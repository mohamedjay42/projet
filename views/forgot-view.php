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
