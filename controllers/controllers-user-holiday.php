<?php

require_once('views/define-css.php');
require_once('views/define-script.php');
require_once('views/layout-commun.php');
require_once('views/user-holiday-view.php');
require_once('models/model.php');

function controllerUserHoliday()
{
  echo __FUNCTION__;

  getModelUserHoliday();
//  renderViewUserHoliday();
}
