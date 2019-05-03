<?php

//require_once('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-admin-message.php');

function renderViewAdminMessage()
{
  printStartHtml( 'admin-message', [
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


function contentSendMessage()
{
  $sContent = '
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <h1>Messages</h1>
    <!-- Main content -->
    <section class="content container-fluid">
       <!-- PRODUCT LIST -->
       <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Derniers messages publiés</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <i class="fa fa-fw fa-envelope-o"></i>
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">&nbsp;Congés
                      <span class="label label-default pull-left">01/03/19 à 8h00</span></a>
                    <div class="btn-group pull-right">
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-close"></i></button>
                    </div>
                    <span class="product-description">
                          Tous les congés antérieurs doivent être pris avant mai 2019.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <i class="fa fa-fw fa-envelope-o"></i>
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">&nbsp;Prime
                      <span class="label label-default pull-left">03/03/19 à 10h00</span></a>
                    <div class="btn-group pull-right">
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-close"></i></button>
                    </div>
                    <span class="product-description">
                          Objectif trimestriel atteint.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <i class="fa fa-fw fa-envelope-o"></i>
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">&nbsp;Interim <span
                        class="label label-default pull-left">05/03/19 à 9h00</span></a>
                    <div class="btn-group pull-right">
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-close"></i></button>
                    </div>
                    <span class="product-description">
                          Accueil nouvel intérimaire.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
                <li class="item">
                  <div class="product-img">
                    <i class="fa fa-fw fa-envelope-o"></i>
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">&nbsp;Nuit
                      <span class="label label-default pull-left">07/03/19 à 21h63</span></a>
                    <div class="btn-group pull-right">
                      <button type="button" class="btn btn-default btn-flat"><i class="fa fa-close"></i></button>
                    </div>
                    <span class="product-description">
                          Mise en place d\'une équipe de nuit pour le chantier X.
                        </span>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="row">
                    <div class="col-md-12">
                      <div class="box box-info">
                        <div class="box-header">
                          <h3 class="box-title">Nouveau message</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">
                          <form>
                                <textarea id="editor1" name="editor1" rows="10" cols="80">
                                                        Zone de texte.
                                </textarea>
                                <button type="button" class="btn btn-block btn-primary btn-sm">Envoyer</button>
                          </form>
                        </div>
                      </div>
                      <!-- /.box -->
                    </div>
                    <!-- /.col-->
              </div>
                  <!-- ./row -->
            <!-- /.col-->
    </section>
    <!-- /.content -->
  </div>';
  echo sprintf($sContent);
}
