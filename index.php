<?php

require_once('controllers/controllers-login.php');
require_once('controllers/controllers-forgot.php');
require_once('controllers/controllers-admin-dashboard.php');
require_once('controllers/controllers-admin-gestion-role.php');
require_once('controllers/controllers-admin-message.php');
require_once('controllers/controllers-admin-update-planning.php');
require_once('controllers/controllers-admin-valid-holiday.php');
require_once('controllers/controllers-user-dashboard.php');
require_once('controllers/controllers-user-holiday.php');
require_once('controllers/controllers-user-planning.php');
require_once('controllers/controllers-user-chef-valid-holiday.php');

define("DB_HOST", "");
define("DB_USER", "");
define("DB_PWD",  "");
define("DB_BASE", "");
// variables globales
$dbLink = 0;

/*session_start();
if (!empty($_POST)) {
  //faire verif pass has + email dans model auth
  //........
  // creer les session des identifiants
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['password'] = $_POST['password'];*/
//var_dump($_GET);
if (isset($_GET['page'])) {
  $sPage = $_GET['page'];

  switch ($sPage) {
    case 'connexion':
        controllerConnexion();
        break;
    case 'admin-dashboard':
        controllerAdminDashboard();
        break;
    case 'admin-planning-update':
      controllerAdminPlanningUpdate();
      break;
    case 'admin-message':
        controllerAdminMessage();
      break;
    case 'admin-gestion-role':
        controllerAdminGestionRole();
      break;
    case 'admin-valid-holiday':
      controllerAdminValidHoliday();
      break;
    case 'user-dashboard':
      controllerUserDashboard();
      break;
    case 'user-holiday':
      controllerUserHoliday();
      break;
    case 'user-planning':
      controllerUserPlanning();
      break;
    case 'recuperation':
      controllerUserForgot();
      break;
    case 'user-chef-valid-holiday':
      controllerUserChefValidHoliday();
      break;
    default:
        if ( in_array($sRole, ['user', 'chef'] )) {
            controllerUserDashboard();
        } else {
            controllerAdminDashboard();
        }
      break;

    }
  }
//}
