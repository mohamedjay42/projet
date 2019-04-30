<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-chef-valid-holiday.php');

function renderViewUserChefValidHoliday()
{
  printStartHtmlDashboard( 'user-chef-valid-holiday', [
    'bootstrap',
    'fontawesome',
    'ionicons',
    'adminlte',
    'googlefont'
      ]);
      printHeader();
      printNavbarChef();
      contentChefValidHoliday();
      printFooter();
      printEndHtml('user-chef-valid-holiday', [
        'jquery3',
        'bootstrap',
        'jqueryui',
        'slimscroll',
        'fastclick',
        'adminlte'
      ]);
}
