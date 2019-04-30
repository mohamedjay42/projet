<?php

require_once('layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-admin-dashboard.php');



function renderViewAdminDashboard()
{
  printStartHtmlDashboard( 'admin-dashboard', [
      'bootstrap',
      'fontawesome',
      'ionicons',
      'adminlte',
      'googlefont',
      'fullcalendar'
      ]);
      printHeader();
      printNavbarAdmin();
      contentAdminDashboard('societe1','societe2','societe3');
      printFooter();
      printEndHtml('admin-dashboard', [
        'jquery3',
        'bootstrap',
        'jqueryui',
        'slimscroll',
        'fastclick',
        'adminlte',
        'fullcalendar'

      ]);

}
