<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-user-holiday.php');

function renderViewUserHoliday()
{
  printStartHtmlDashboard( 'user-holiday', [
    'bootstrap',
    'fontawesome',
    'ionicons',
    'adminlte',
    'googlefont',
    'bootstrapdatepicker',
    'icheck',
    'colorpicker',
    'timepicker',
    'select2'
      ]);
      printHeader();
      printNavbarUser();
      contentUserHoliday();
      printFooter();
      printEndHtml('user-holiday', [
        'jquery3',
        'bootstrap',
        'jqueryui',
        'slimscroll',
        'fastclick',
        'adminlte',
        'icheck',
        'select2',
        'inputmask',
        'daterangepicker',
        'datecolorpicker'
      ]);
}
