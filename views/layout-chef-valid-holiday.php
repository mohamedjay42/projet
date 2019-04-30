<?php



function contentChefValidHoliday()
{
  $sContent = '
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Validation congés</h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
          <!-- /.box-header -->
          <div class="form-group">
            <label>Employé</label>
            <input type="text" class="form-control" placeholder="NOM Prénom" disabled>
          </div>
              <!-- textarea -->
              <div class="form-group">
                <label>Demande de congés</label>
                <textarea class="form-control" rows="3" placeholder="Congés souhaités du 12/04/2019 au 20/04/2019" disabled></textarea>
              </div>
              <!-- select -->
              <div class="form-group">
                <label>Avis</label>
                <select class="form-control">
                  <option>Accorder</option>
                  <option>Rejeter</option>
                  <option>Modifier</option>
                </select>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Valider</button>
              </div>
            </form>
          </div>
          <!-- /.box-body -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->';
  echo sprintf($sContent);
}
