<?php

require_once('layout-commun.php');


function renderViewAdminDashboard()
{
  printStartHtml( 'admin-dashboard', [
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


function contentAdminDashboard($sSociete1,$sSociete2,$sSociete3)
{
  $sContent =
  '   <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Administration
            <small>Accueil</small>
          </h1>
        </section>
        <!-- Main content -->
        <section class="content container-fluid">
          <section class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-industry"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Société 1</span>
                  <span class="info-box-number">Plannifié 100%</span>
                  <span class="info-box-number">Demandes 3</span>
                  <a href=%s><u>Entrer</u></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-industry"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Société 2</span>
                  <span class="info-box-number">Plannifié 75%</span>
                  <span class="info-box-number">Demandes 0</span>
                  <a href=%s><u>Entrer</u></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-industry"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Société 3</span>
                  <span class="info-box-number">Plannifié 50%</span>
                  <span class="info-box-number">Demandes 10</span>
                  <a href=%s><u>Entrer</u></a>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </section>
          <!-- /.row -->
          <section class="content">
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
        </section>
          <!-- /.content -->
      </div>
    <!-- /.content-wrapper -->';
    echo sprintf($sSociete1,$sSociete2,$sSociete3,$sContent);
}
