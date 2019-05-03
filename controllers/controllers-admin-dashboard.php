<?php

require_once('views/define-css.php');
require_once('views/define-script.php');
require_once('views/admin-dashboard-view.php');
require_once('models/model.php');

function controllerAdminDashboard()
{

  echo __FUNCTION__;

  getModelDashboard();
  //renderViewAdminDashboard();
}
