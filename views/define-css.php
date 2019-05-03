<?php

define( 'CSS_BOOTSTRAP', '
<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
');

define( 'CSS_FONTAWESOME', '
<!-- Font Awesome -->
<link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
');

define( 'CSS_IONICONS', '
<!-- Ionicons -->
<link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
');

define( 'CSS_ADMINLTE', '
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<!-- AdminLTE Skins. Choose a skin from the css/skins
     folder instead of downloading all of them to reduce the load. -->
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
');

define( 'CSS_GOOGLEFONT', '
<!-- Google Font -->
<link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
');

define( 'CSS_FULLCALENDAR', '
<!-- fullCalendar -->
<link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.min.css">
<link rel="stylesheet" href="bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">');

define( 'CSS_CALENDRIER', '
<!--tableau calendrier-->
<link rel="stylesheet" href="dist/css/table.css">');

define( 'CSS_DATERANGEPICKER', '
<!-- daterange picker -->
<link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
');

define( 'CSS_BOOTSTRAPDATEPICKER', '
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
');

define( 'CSS_ICHECK', '
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="plugins/iCheck/all.css">
');

define( 'CSS_COLORPICKER', '
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
');

define( 'CSS_TIMEPICKER', '
<!-- Bootstrap time Picker -->
<link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
');

define( 'CSS_SELECT2', '
<!-- Select2 -->
<link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
');

define( 'CSS_WYSIHTML5', '
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
');


$aConfigTousLesCSS = [
    'bootstrap'           => CSS_BOOTSTRAP,
    'fontawesome'         => CSS_FONTAWESOME,
    'ionicons'            => CSS_IONICONS,
    'adminlte'            => CSS_ADMINLTE,
    'googlefont'          => CSS_GOOGLEFONT,
    'fullcalendar'        => CSS_FULLCALENDAR,
    'calendrier'          => CSS_CALENDRIER,
    'daterangepicker'     => CSS_DATERANGEPICKER,
    'bootstrapdatepicker' => CSS_BOOTSTRAPDATEPICKER,
    'icheck'              => CSS_ICHECK,
    'colorpicker'         => CSS_COLORPICKER,
    'timepicker'          => CSS_TIMEPICKER,
    'select2'             => CSS_SELECT2,
    'wysihtml5'           => CSS_WYSIHTML5
];
