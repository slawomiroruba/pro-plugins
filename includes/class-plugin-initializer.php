<?php 
// includes/class-plugin-initializer.php
namespace ProformatPlugins\Includes;

use ProformatPlugins\Includes\PluginsList;

class PluginInitializer {
    public function __construct() {
        add_action( 'plugins_loaded', array( $this, 'init' ) );
    }

    public function init() {
        $this->load_textdomain();
        $this->load_plugin();
    }

    private function load_textdomain() {
        // load_plugin_textdomain( 'pro-plugins', false, PRO_PLUGINS_DIR . '/languages' );
    }

    private function load_plugin() {
        new PluginsList();
    }
}

?>