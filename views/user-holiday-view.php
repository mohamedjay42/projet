<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-user-holiday.php');

function renderViewUserHoliday()
{
  printStartHtml( 'user-holiday', [
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


function contentUserHoliday()
{
  $sContent = '
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Congés</h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="col-md-12">
            <div class="box box-primary">
              <div class="box-header">
                <h3 class="box-title">Demande de congés</h3>
              </div>
              <div class="box-body">
              <div class="form-group">
                  <label>Motif</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Congé principal</option>
                    <option>5eme semaine</option>
                    <option>Sans solde</option>
                    <option>Raison familiale</option>
                  </select>
                </div>

                <!-- Date debut-->
                <div class="form-group">
                  <label>Date début:</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="datepicker">
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- Date debut-->
                <div class="form-group">
                    <label>Date fin:</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="date-picker">
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
                <!-- /.form group -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                  </div>
              </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
          <!-- /.col (right) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->';
  echo sprintf($sContent, 'index.php');
}
