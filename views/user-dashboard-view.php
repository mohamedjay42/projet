<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('views/layout-commun.php');
require_once('layout-user-dashboard.php');


function renderViewUserDashboard()
{
  printStartHtml( 'user-dashboard', [
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


function contentUserDashboard()
{
  $sContent = '
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Accueil</h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
              <!-- Chat box -->
          <div class="box box-success ">
              <div class="box-header">
                <i class="fa fa-envelope"></i>
                <h3 class="box-title">Message</h3>
              <div class="box-body chat" id="chat-box">
                <!-- chat item -->
                <div class="item">
                  <img src="dist/img/message.png">
                  <p class="message">
                    <a href="#" class="name">
                        <small class="text-muted pull-right direct-chat-timestamp pull-right"><i class="fa fa-clock-o"></i> 20 Jan 10:00 am</span></small>
                      Admin
                    </a>
                    Les congés doivent être soldés avant le 15/05/2019.
                  <!-- /.attachment -->
                </div>
                <!-- /.item -->
                <!-- chat item -->
                <div class="item">
                  <img src="dist/img/message.png">
                  <p class="message">
                    <a href="#" class="name">
                        <small class="text-muted pull-right direct-chat-timestamp pull-right"><i class="fa fa-clock-o"></i> 21 Jan 5:00 pm</span></small>
                      Admin
                    </a>
                    Travail de nuit prévu entre le 03/03/2019 et 13/03/2019
                  </p>
                </div>
                <!-- /.item -->
                <!-- chat item -->
                <div class="item">
                  <img src="dist/img/message.png">

                  <p class="message">
                    <a href="#" class="name">
                      <small class="text-muted pull-right direct-chat-timestamp pull-right"><i class="fa fa-clock-o"></i> 23 Jan 2:00 pm</span></small>
                      Admin
                    </a>
                    Congés validé !
                  </p>
                </div>
                <!-- /.item -->
              </div>
              <!-- /.chat -->
            </div>
            <!-- /.box (chat box) -->
              <!-- /.col -->
             <div class="col-md-12">
             <h2>Planning</h2>
                <div class="box box-primary">
                  <div class="box-body no-padding">
                    <!-- THE CALENDAR -->
                    <div id="calendar"></div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /. box -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->';
  echo sprintf($sContent);
}
