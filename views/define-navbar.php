<?php

define( 'ADMIN_NAVBAR', '
<li class="active"><a href="index.php?page=admin-dashboard"><i class="fa fa-bar-chart"></i> <span>Tableau de bord</span></a></li>
<li class="active"><a href="index.php?page=admin-planning-update"><i class="fa fa-calendar"></i> <span>Modification planning</span></a></li>
<li class="active"><a href="index.php?page=admin-valid-holiday"><i class="fa fa-check"></i> <span>Validation congés</span></a></li>
<li class="active"><a href="index.php?page=admin-message"><i class="fa fa-envelope"></i> <span>Diffusion messages</span></a></li>
<li class="active"><a href="index.php?page=admin-gestion-role"><i class="fa fa-check-square"></i> <span>Activation compte</span></a></li>
');

define( 'USER_NAVBAR', '
<li class="active"><a href="index.php?page=user-dashboard"><i class="fa fa-bar-chart"></i> <span>Tableau de bord</span></a></li>
<li class="active"><a href="index.php?page=user-planning"><i class="fa  fa-calendar"></i> <span>Planning</span></a></li>
<li class="active"><a href="index.php?page=user-holiday"><i class="fa  fa-plane"></i> <span>Demande congés</span></a></li>
');

define( 'CHEF_NAVBAR', '
<li class="active"><a href="index.php?page=user-dashboard"><i class="fa fa-bar-chart"></i> <span>Tableau de bord</span></a></li>
<li class="active"><a href="index.php?page=user-planning"><i class="fa  fa-calendar"></i> <span>Planning</span></a></li>
<li class="active"><a href="index.php?page=user-holiday"><i class="fa  fa-plane"></i> <span>Demande congés</span></a></li>
<li class="active"><a href="index.php?page=user-chef-valid-holiday"><i class="fa  fa-check-square"></i> <span>validation congés</span></a></li>
');

$aConfigNavbar = [
  'nav_admin'  => ADMIN_NAVBAR,
  'nav_user'   => USER_NAVBAR,
  'nav_chef'   => CHEF_NAVBAR
];
