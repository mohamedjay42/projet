<?php

function printHtml()
{
  $sHtml =
  '
  <!DOCTYPE html>
  <html>';
  //printHead($sPageTitle, $aCss);
  '<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->';
  //printHeader();
  '<!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/avatar.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Nom prenom</p>
            <!-- Status -->
            <a href="index.php?page=user-dashboard"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU PRINCIPAL</li>';
          //  printNav($sRole, $aNav);
        '</ul>
            <!-- /.sidebar-menu -->
          </section>
          <!-- /.sidebar -->
        </aside>';
//  printFooter();

  '</div>
  <!-- ./wrapper -->';
  //printEndHtml($sPageTitle,$aScript);
  '</body>
  </html>';
  echo sprintf($sHtml);
}

function printHead( $sPageTitle, $aCss )
{
  global $aConfigTousLesCSS;
  $sHeadHtml =
  '
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>%s</title>
      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">';

  echo sprintf($sHeadHtml, $sPageTitle);

  foreach ($aCss as $sCss ) {
      echo $aConfigTousLesCSS[$sCss] ;
  }

  echo '</head>';

}

function printHeader()
{
  $sPage = '';
  $sHeader =
  '
      <header class="main-header">

        <!-- Logo -->
        <a href="'.$sPage.'" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>tecc</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Atecc</b> Services</span>
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="'.$sPage.'" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="dist/img/robot.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Admin</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="dist/img/robot.png" class="img-circle" alt="User Image">

                    <p>Admin </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="login.html" class="btn btn-default btn-flat">Se deconnecter</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>';
    echo sprintf($sHeader);
}

function printNav($sRole, $aNav)
{
  global $aConfigNavbar;

  foreach ($aNav as $sNav) {
    echo $aConfigNavbar[$sNav];
  }
}

function printFooter()
{
  $sFooter =
  ' <!-- Main Footer -->
      <footer class="main-footer">
          <!-- Default to the left -->
          <strong>Copyright &copy; 2019 <a href="#">Atecc Services</a>.</strong> Tous droits réservés.
      </footer>';
    echo sprintf($sFooter);
}

function printEndHtml($sPageTitle,$aScript)
{
  global $aConfigTousLesScript;

  foreach ($aScript as $sScript ) {
      echo $aConfigTousLesScript[$sScript] ;

  }
}
