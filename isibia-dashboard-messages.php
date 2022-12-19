<?php
/*
  Plugin Name: Isibia Dashboard Messages
  Description: Free Isibia plugin.
  Version: 1.0
  Author: Artem Anoshin <artem.anoshin@gmail.com>
  Text Domain: isibia-dashboard-messages
*/

use IsibiaDashboardMessages\Core\Plugin;

require_once 'vendor/autoload.php';

$plugin = new Plugin();
$plugin->launch();
