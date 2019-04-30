<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('views/layout-commun.php');
require_once('layout-user-dashboard.php');


function renderViewUserDashboard()
{
  printStartHtmlDashboard( 'user-dashboard', [
      'bootstrap',
      'fontawesome',
      'ionicons',
      'adminlte',
      'googlefont',
      'fullcalendar'
      ]);
      printHeader();
      printNavbarUser();
      contentUserDashboard();
      printFooter();
      printEndHtml('user-dashboard', [
        'jquery3',
        'bootstrap',
        'jqueryui',
        'slimscroll',
        'fastclick',
        'adminlte',
        'fullcalendar'
      ]);
}
