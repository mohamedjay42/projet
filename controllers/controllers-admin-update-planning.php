<?php

require_once('views/define-css.php');
require_once('views/define-script.php');
require_once('views/layout-commun.php');
require_once('views/admin-update-planning-view.php');
require_once('models/model.php');

function controllerAdminPlanningUpdate()
{
  echo __FUNCTION__;

  getModelPlanningUpdate();
//  renderViewAdminPlanningUpdate();
}
