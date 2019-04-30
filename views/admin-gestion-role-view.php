<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-admin-gestion-role.php');

function renderViewAdminGestionRole()
{
  printStartHtmlDashboard( 'admin-gestion-role', [
      'bootstrap',
      'fontawesome',
      'ionicons',
      'adminlte',
      'googlefont'
      ]);
      printHeader();
      printNavbarAdmin();
      contentGestionRole();
      printFooter();
      printEndHtml('admin-message', [
        'jquery3',
        'bootstrap',
        'jqueryui',
        'slimscroll',
        'fastclick',
        'adminlte',
        'ckeditor'
      ]);
}
