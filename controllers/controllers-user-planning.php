<?php

require_once('views/define-css.php');
require_once('views/define-script.php');
require_once('views/layout-commun.php');
require_once('views/user-planning-view.php');
require_once('models/model.php');

function controllerUserPlanning()
{
  echo __FUNCTION__;

  getModelUserPlanning();
//  renderViewUserPlanning();
}
