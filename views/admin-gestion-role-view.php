<?php

//require('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-admin-gestion-role.php');

function renderViewAdminGestionRole()
{
  printStartHtml( 'admin-gestion-role', [
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


function contentGestionRole()
{
  $sContent = '
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Gestion utilisateurs</h1>
    </section>
      <!-- Main content -->
    <section class="content container-fluid">
        <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Effectif</h3>
                <div class="box-tools">

                </div>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>Matricule</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Générer mot de passe</th>
                    <th>Role</th>
                    <th>Statut</th>
                  </tr>
                  <tr>
                    <td>183</td>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@doe.fr</td>
                    <td>
                      <div class=" col-sm-5">
                        <button type="button" class="btn btn-block btn-primary btn-sm">Générer</button>
                      <div>
                    </td>
                    <td>Admin</td>
                    <td>
                      <div class="btn-group" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                    </button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                  </div>
                    </td>
                  </tr>
                  <tr>
                    <td>219</td>
                    <td>Alexander</td>
                    <td>Pierce</td>
                    <td>alexandre@pierce.com</td>
                    <td>
                      <div class=" col-sm-5">
                        <button type="button" class="btn btn-block btn-primary btn-sm">Générer</button>
                      <div>
                    </td>
                    <td>Chef d\'équipe</td>
                    <td>
                      <div class="btn-group" data-toggle="btn-toggle">
                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                      </div>
                    </td>

                  </tr>
                  <tr>
                    <td>657</td>
                    <td>Bob</td>
                    <td>Doe</td>
                    <td>bob@doe.fr</td>
                    <td>
                      <div class=" col-sm-5">
                        <button type="button" class="btn btn-block btn-primary btn-sm">Générer</button>
                      <div>
                    </td>
                    <td>Utilisateur</td>
                    <td>
                      <div class="btn-group" data-toggle="btn-toggle">
                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>175</td>
                    <td>Mike</td>
                    <td>Doe</td>
                    <td>mike@doe.com</td>
                    <td>
                      <div class=" col-sm-5">
                        <button type="button" class="btn btn-block btn-primary btn-sm">Générer</button>
                      <div>
                    </td>
                    <td>Utilisateur</td>
                    <td>
                      <div class="btn-group" data-toggle="btn-toggle">
                        <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i>
                        </button>
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>
                      </div>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->';
  echo sprintf($sContent);
}
