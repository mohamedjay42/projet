<?php



function printNavbarUser()
{
  $sNav = '
  <!-- Left side column. contains the logo and sidebar -->
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
          <li class="header">MENU PRINCIPAL</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="index.php?page=user-dashboard"><i class="fa fa-bar-chart"></i> <span>Tableau de bord</span></a></li>
          <li class="active"><a href="index.php?page=user-planning"><i class="fa  fa-calendar"></i> <span>Planning</span></a></li>
          <li class="active"><a href="index.php?page=user-holiday"><i class="fa  fa-plane"></i> <span>Demande congés</span></a></li>
        </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>';
  echo sprintf($sNav);
}

function printNavbarChef()
{
  $sNav = '
  <!-- Left side column. contains the logo and sidebar -->
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
          <li class="header">MENU PRINCIPAL</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="index.php?page=user-dashboard"><i class="fa fa-bar-chart"></i> <span>Tableau de bord</span></a></li>
          <li class="active"><a href="index.php?page=user-planning"><i class="fa  fa-calendar"></i> <span>Planning</span></a></li>
          <li class="active"><a href="index.php?page=user-holiday"><i class="fa  fa-plane"></i> <span>Demande congés</span></a></li>
          <li class="active"><a href="index.php?page=user-chef-valid-holiday"><i class="fa  fa-check-square"></i> <span>validation congés</span></a></li>
        </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>';
  echo sprintf($sNav);
}

function printNavbarAdmin()
{
  $sNav =
    '<!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="dist/img/robot.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>Admin</p>
            <!-- Status -->
            <a href="index.php?page=admin-dashboard"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>../
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MENU PRINCIPAL</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="index.php?page=admin-dashboard"><i class="fa fa-bar-chart"></i> <span>Tableau de bord</span></a></li>
            <li class="active"><a href="index.php?page=admin-planning-update"><i class="fa fa-calendar"></i> <span>Modification planning</span></a></li>
            <li class="active"><a href="index.php?page=admin-valid-holiday"><i class="fa fa-check"></i> <span>Validation congés</span></a></li>
            <li class="active"><a href="index.php?page=admin-message"><i class="fa fa-envelope"></i> <span>Diffusion messages</span></a></li>
            <li class="active"><a href="index.php?page=admin-gestion-role"><i class="fa fa-check-square"></i> <span>Activation compte</span></a></li>
          </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>';
    echo sprintf($sNav);
}
