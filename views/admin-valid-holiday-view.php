<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-admin-valid-holiday.php');

function renderViewAdminValidHoliday()
{
  printStartHtml( 'admin-valid-holiday', [
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


function contentValidHoliday()
{
  $sContent = '
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Demandes de congés</h1>
    </section>
      <!-- Main content -->
    <section class="content container-fluid">
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Motif</th>
                    <th>Etat</th>
                    <th>Validation</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>A001</td>
                    <td>Dupond</td>
                    <td>Paul</td>
                    <td>01/12/2018</td>
                    <td>25/12/2018</td>
                    <td>Congé</td>
                    <td>En attente</td>
                	<td>
                    <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
                  </td>
                  </tr>
                  <tr>
                    <td>A002</td>
                    <td>Lopez</td>
                    <td>Sylvain</td>
                    <td>11/01/2019</td>
                    <td>12/01/2019</td>
                    <td>5ème semaine</td>
                    <td>Validé chef</td>
                	<td>
                    <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
                  </td>
                  </tr>
                  <tr>
                    <td>A003</td>
                    <td>Valon</td>
                    <td>Eric</td>
                    <td>20/08/2018</td>
                    <td>22/08/2018</td>
                    <td>Congé</td>
                    <td>refusé admin</td>
                	<td>
                    <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
                  </td>
                  </tr>
                  <tr>
                    <td>A004</td>
                    <td>Cholas</td>
                    <td>Claire</td>
                    <td>18/12/2018</td>
                    <td>21/12/2018</td>
                    <td>Motif personnel</td>
                    <td>Validé admin</td>
                	<td>
                    <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
                  </td>
                  </tr>
                  <tr>
                    <td>A005</td>
                    <td>Jourdain</td>
                    <td>Philippe</td>
                    <td>01/01/2019</td>
                    <td>07/01/2019</td>
                    <td>Congé</td>
                    <td>En attente</td>
                	<td>
                    <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
                  </td>
                  </tr>
                  <tr>
                    <td>A006</td>
                    <td>Ozil</td>
                    <td>Melvut</td>
                    <td>25/12/2018</td>
                    <td>25/12/2018</td>
                    <td>Congé</td>
                    <td>Refusé admin</td>
                	<td>
                    <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
                  </td>
                  </tr>
                  <tr>
                    <td>A007</td>
                    <td>Simon</td>
                    <td>Gerard</td>
                    <td>25/01/2019</td>
                    <td>25/01/2019</td>
                    <td>Congé</td>
                    <td>En attente</td>
                	<td>
                    <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
                  </td>
                  </tr>
                  <tr>
                    <td>A008</td>
                    <td>Petit</td>
                    <td>Pierre</td>
                    <td>06/02/2019</td>
                    <td>08/02/2019</td>
                    <td>Congé</td>
                    <td>Validé admin</td>
                	<td>
                    <div class="btn-group" data-toggle="btn-toggle">
                  <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                  </button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                </div>
                  </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.box-body -->
            <div class="row">
                <div class="col-md-6">
                <button type="button" class="btn btn-block btn-success btn-sm">Enregistrer</button>
                </div>
                <div class="col-md-6">
                <button type="button" class="btn btn-block btn-danger btn-sm">Annuler</button>
              </div>
            </div>
            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->';
  echo sprintf($sContent);
}
