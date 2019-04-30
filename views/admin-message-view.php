<?php

//require_once('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-admin-message.php');

function renderViewAdminMessage()
{
  printStartHtmlDashboard( 'admin-message', [
      'bootstrap',
      'fontawesome',
      'ionicons',
      'adminlte',
      'googlefont',
      'fullcalendar',
      'wysihtml5'
      ]);
      printHeader();
      printNavbarAdmin();
      contentSendMessage();
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
