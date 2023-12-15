<?php
/*
Plugin Name: Proformat Plugins
Description: Wtyczka do zarządzania wtyczkami z różnych źródeł
Version: 1.0
Author: Sławomir Oruba
*/
require_once __DIR__ . '/vendor/autoload.php';

define( 'PRO_PLUGINS_DIR', plugin_dir_path( __FILE__ ) );

use ProformatPlugins\PluginInitializer;

new PluginInitializer();




