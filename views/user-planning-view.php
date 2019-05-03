<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-user-planning.php');

function renderViewUserPlanning()
{
  printStartHtml( 'user-planning', [
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


function contentUserPlanning()
{
  $sContent ='
  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
           <!-- Main content -->
        <section class="content container-fluid">
                <h2>Planning</h2>
                <!-- /.col -->
                <div class="col-md-12">
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
