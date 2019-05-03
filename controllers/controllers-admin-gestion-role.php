<?php

require_once('views/define-css.php');
require_once('views/define-script.php');
require_once('views/layout-commun.php');
require_once('views/admin-gestion-role-view.php');
require_once('models/model.php');

function controllerAdminGestionRole()
{
  echo __FUNCTION__;

  getModelGestionRole();
//  renderViewAdminGestionRole();
}
