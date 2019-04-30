<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-admin-valid-holiday.php');

function renderViewAdminValidHoliday()
{
  printStartHtmlDashboard( 'admin-valid-holiday', [
      'bootstrap',
      'fontawesome',
      'ionicons',
      'adminlte',
      'googlefont'
      ]);
      printHeader();
      printNavbarAdmin();
      contentValidHoliday();
      printFooter();
      printEndHtml('admin-valid-holiday', [
        'jquery3',
        'bootstrap',
        'jqueryui',
        'slimscroll',
        'fastclick',
        'adminlte',
        'ckeditor'
      ]);
}
