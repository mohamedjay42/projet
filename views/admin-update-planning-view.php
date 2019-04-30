<?php

//require_once('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-admin-planning-update.php');

function renderViewAdminPlanningUpdate()
{
   printStartHtmlDashboard( 'admin-planning-update', [
      'bootstrap',
      'fontawesome',
      'ionicons',
      'adminlte',
      'googlefont',
      'calendrier',
      'select2'
    ]);
      printHeader();
      printNavbarAdmin();
      contentPlanningUpdate();
      printFooter();
      printEndHtml('admin-planning-update', [
        'jquery3',
        'bootstrap',
        'jqueryui',
        'slimscroll',
        'fastclick',
        'adminlte',
        'calendrier',
        'select2'
      ]);
}
