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

require_once('models/model-auth.php');

session_start();

//print_r($_SESSION);

$sLogStatus = 'logout';
$sUserEmail = '';
$sUserRole = '';
if (isset($_SESSION['log-status'])) {
    $sLogStatus = $_SESSION['log-status'];
    $sUserEmail = $_SESSION['log-email'];
    $sUserRole  = $_SESSION['log-role'];
} else {
    $_SESSION['log-status'] = $sLogStatus;
    $_SESSION['log-email'] = $sUserEmail;
    $_SESSION['log-role'] = $sUserRole;
}

//echo "sLogStatus:$sLogStatus\n";

if ($sLogStatus == 'logout') {

//  print_r($_POST);

      if (
        isset($_POST['user_email']) &&
        isset($_POST['user_password']) &&
        filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)!==false &&
        verifyPassword($_POST['user_email'],$_POST['user_password'])
        ) {

          $_SESSION['log-status'] = 'login';
          $sLogStatus = 'login';
          $_SESSION['log-email'] = $_POST['user_email'];
          $_SESSION['log-role'] = getRole($_POST['user_email']);
          if ( in_array($_SESSION['log-role'], ['user', 'chef'] )) {
            $sPage = 'user-dashboard';
          } else {
            $sPage = 'admin-dashboard';
          }

    } elseif (
      isset($_GET['page']) &&
      (($_GET['page']=='login')||($_GET['page']=='forgot'))
    ) {
      $sPage = $_GET['page'];
    } else {
        $sPage = 'login';
    }

}
else {
  if (isset($_GET['page'])) {
    $sPage = $_GET['page'];
    if ($sPage=='logout') {
      session_destroy();
      $sPage = 'login';
    }
  } else {
    if ( in_array($sUserRole, ['user', 'chef'] )) {
      $sPage = 'user-dashboard';
    } else {
      $sPage = 'admin-dashboard';
    }
  }
}

//echo "sPage:$sPage\n";

switch ($sPage) {
  case 'login':
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
  case 'forgot':
    controllerUserForgot();
    break;
  case 'user-chef-valid-holiday':
    controllerUserChefValidHoliday();
    break;
  default:
      if ( in_array($sUserRole, ['user', 'chef'] )) {
          controllerUserDashboard();
      } else {
          controllerAdminDashboard();
      }
    break;
  }

/*

define("DB_HOST", "");
define("DB_USER", "");
define("DB_PWD",  "");
define("DB_BASE", "");
// variables globales
$dbLink = 0;
*/

/*session_start();
if (!empty($_POST)) {
  //faire verif pass has + email dans model auth
  //........
  // creer les session des identifiants
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['password'] = $_POST['password'];*/
//var_dump($_GET);
/*
if (isset($_GET['page'])) {
  $sPage = $_GET['page'];


  }
//}
*/
