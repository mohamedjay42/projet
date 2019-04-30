<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-user-planning.php');

function renderViewUserPlanning()
{
  printStartHtmlDashboard( 'user-planning', [
    'bootstrap',
    'fontawesome',
    'ionicons',
    'adminlte',
    'googlefont',
    'fullcalendar'
      ]);
      printHeader();
      printNavbarUser();
      contentUserPlanning();
      printFooter();
      printEndHtml('user-planning', [
        'jquery3',
        'bootstrap',
        'jqueryui',
        'slimscroll',
        'fastclick',
        'adminlte',
        'fullcalendar'
      ]);
}
