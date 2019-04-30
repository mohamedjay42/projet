<?php

require_once('views/define-css.php');
require_once('views/define-script.php');
require_once('views/user-dashboard-view.php');
require_once('models/model.php');

function controllerUserDashboard()
{
  getModelDashboard();
  renderViewUserDashboard();
}
