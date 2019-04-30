<?php

require_once('views/define-css.php');
require_once('views/define-script.php');
require_once('views/layout-commun.php');
require_once('views/chef-valid-holiday-view.php');
require_once('models/model.php');

function controllerUserChefValidHoliday()
{
  getModelChefValidHoliday();
  renderViewUserChefValidHoliday();
}
