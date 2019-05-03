<?php

//require_once('../layout/layout-commun.php');
require_once('layout-navbar.php');
require_once('layout-admin-planning-update.php');

function renderViewAdminPlanningUpdate()
{
   printStartHtml( 'admin-planning-update', [
      'bootstrap',
      'fontawesome',
      'ionicons',
      'adminlte',
      'googlefont',
      'calendrier',
      'select2'
    ]);
      printHeader();
      printNavbarAdmin();
      contentPlanningUpdate();
      printFooter();
      printEndHtml('admin-planning-update', [
        'jquery3',
        'bootstrap',
        'jqueryui',
        'slimscroll',
        'fastclick',
        'adminlte',
        'calendrier',
        'select2'
      ]);
}


function contentPlanningUpdate()
{
  $sContent = '
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="content">

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Mise à jour planning :</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
              <label>Chantier</label>
        <select class="form-control select2" style="width: 100%;">
                  <option selected="selected">Chantier A</option>
                  <option>Chantier A</option>
                  <option>Chantier B</option>
                  <option>Chantier C</option>
                  <option>Chantier D</option>
                  <option>Chantier E</option>
                  <option>Chantier F</option>
                </select>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
              <label>Employé</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option>DUPOND Paul</option>
                    <option>LOPEZ Sylvain</option>
                    <option>VALON Eric</option>
                    <option>CHOLAS Claire</option>
                    <option>JOURDAIN Philippe</option>
                  </select>
                </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
            <div class="col-md-6">
                <!-- radio -->
                <div class="form-group">
                <label>Durée</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      1/4 journée
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                      1/2 journée
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                      Journée entière
                    </label>
                  </div>
                </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
      </div>
      <!-- /.box -->
      <div class="row">
         <div class="col-md-12">
           <div class="box box-primary">
             <div class="box-body no-padding">
               <br>
           <!-- THE CALENDAR -->
               <table class="table table-responsive text-center">
                 <thead>
                     <tr>
                         <th class="info">Heures</th>
                         <th class="info">Lundi</th>
                         <th class="info">Mardi</th>
                         <th class="info">Mercredi</th>
                         <th class="info">Jeudi</th>
                         <th class="info">Vendredi</th>
                     </tr>
                 </thead>
                 <tbody id="tableID"  style="cursor: pointer;">
                     <tr>
                       <th class="info">7h00</th>
                       <td class="info" id="A1">Text</td>
                       <td class="info" id="A2">MoreText</td>
                       <td class="info" id="A3">Lorem</td>
                       <td class="info" id="A4">Ipsum</td>
                       <td class="info" id="A5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">8h00</th>
                       <td class="info" id="B1">Text</td>
                       <td class="info" id="B2">MoreText</td>
                       <td class="info" id="B3">Lorem</td>
                       <td class="info" id="B4">Ipsum</td>
                       <td class="info" id="B5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">9h00</th>
                       <td class="info" id="C1">Text</td>
                       <td class="info" id="C2">MoreText</td>
                       <td class="info" id="C3">Lorem</td>
                       <td class="info" id="C4">Ipsum</td>
                       <td class="info" id="C5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">10h00</th>
                       <td class="info" id="D1">Text</td>
                       <td class="info" id="D2">MoreText</td>
                       <td class="info" id="D3">Lorem</td>
                       <td class="info" id="D4">Ipsum</td>
                       <td class="info" id="D5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">11h00</th>
                       <td class="info" id="E1">Text</td>
                       <td class="info" id="E2">MoreText</td>
                       <td class="info" id="E3">Lorem</td>
                       <td class="info" id="E4">Ipsum</td>
                       <td class="info" id="E5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">12h00</th>
                       <td class="info" id="F1">Text</td>
                       <td class="info" id="F2">MoreText</td>
                       <td class="info" id="F3">Lorem</td>
                       <td class="info" id="F4">Ipsum</td>
                       <td class="info" id="F5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">13h00</th>
                       <td class="info" id="G1">Text</td>
                       <td class="info" id="G2">MoreText</td>
                       <td class="info" id="G3">Lorem</td>
                       <td class="info" id="G4">Ipsum</td>
                       <td class="info" id="G5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">14h00</th>
                       <td class="info" id="H1">Text</td>
                       <td class="info" id="H2">MoreText</td>
                       <td class="info" id="H3">Lorem</td>
                       <td class="info" id="H4">Ipsum</td>
                       <td class="info" id="H5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">15h00</th>
                       <td class="info" id="I1">Text</td>
                       <td class="info" id="I2">MoreText</td>
                       <td class="info" id="I3">Lorem</td>
                       <td class="info" id="I4">Ipsum</td>
                       <td class="info" id="I5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">16h00</th>
                       <td class="info" id="J1">Text</td>
                       <td class="info" id="J2">MoreText</td>
                       <td class="info" id="J3">Lorem</td>
                       <td class="info" id="J4">Ipsum</td>
                       <td class="info" id="J5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">17h00</th>
                       <td class="info" id="K1">Text</td>
                       <td class="info" id="K2">MoreText</td>
                       <td class="info" id="K3">Lorem</td>
                       <td class="info" id="K4">Ipsum</td>
                       <td class="info" id="K5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">18h00</th>
                       <td class="info" id="L1">Text</td>
                       <td class="info" id="L2">MoreText</td>
                       <td class="info" id="L3">Lorem</td>
                       <td class="info" id="L4">Ipsum</td>
                       <td class="info" id="L5">Ipsum</td>
                     </tr>
                     <tr>
                       <th class="info">19h00</th>
                       <td class="info" id="M1">Text</td>
                       <td class="info" id="M2">MoreText</td>
                       <td class="info" id="M3">Lorem</td>
                       <td class="info" id="M4">Ipsum</td>
                       <td class="info" id="M5">Ipsum</td>
                     </tr>
                   </tbody>
               </table>
             </div>
             <!-- /.box-body -->
           </div>
           <!-- /. box -->
         </div>
         <!-- /.col -->
       </div>
       </div>
       <!-- /.row -->
   </div>
        </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->';
  echo sprintf($sContent,'index.php');
}
