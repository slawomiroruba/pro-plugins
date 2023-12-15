<?php 

namespace ProformatPlugins\Includes;

use ProformatPlugins\Includes\RandomPlugins;

class PluginsList {
    public function __construct() {
        
        add_action( 'admin_enqueue_scripts', array( $this, 'add_custom_styles' ) );
        
        add_action('admin_menu', function() {
            add_menu_page('Proformat Plugins', 'Proformat Plugins', 'manage_options', 'proformat-list', function() {
                if (isset($_GET['plugin_id'])) {
                    $this->display_plugin_details((new RandomPlugins())->getPluginById($_GET['plugin_id']));
                } else {
                    $this->plugins_list_display((new RandomPlugins())->getRandomPlugins());
                }
            }, 'dashicons-admin-plugins', 6);
        });
    }

    private function add_custom_styles() {
        wp_enqueue_style( 'custom-styles', plugin_dir_url( __FILE__ ) . 'assets/css/admin.css' );
    }

    public function plugins_list_display(array $plugins): void 
    {
        echo '<div class="wrap">';
        echo '<h2>Dostępne pluginy</h2>';
        echo '<table class="wp-list-table widefat fixed striped">';
        
        // Nagłówek tabeli
        echo '<tr>';
        echo '<th>Nazwa</th>';
        echo '<th>Opis</th>';
        echo '<th>Autor</th>';
        echo '<th>Wersja</th>';
        echo '<th>Aktywny</th>';
        echo '<th>Akcje</th>';
        echo '</tr>';
    
        // Dane tabeli
        foreach ($plugins as $plugin) {
            echo '<tr>';
            echo '<td><a href="?page=proformat-list&plugin_id=' . $plugin['id'] . '">' . $plugin['name'] . '</a></td>';
            echo '<td>' . $plugin['description'] . '</td>';
            echo '<td>' . $plugin['author'] . '</td>';
            echo '<td>' . $plugin['newest_version'] . '</td>';
            echo '<td>' . ($plugin['active'] ? 'Tak' : 'Nie') . '</td>';
            echo '<td><a href="#">Zainstaluj</a></td>';
            echo '</tr>';
        }
    
        echo '</table>';
        echo '</div>';
    }

    public function display_plugin_details(array $plugin): void 
    {
        echo '<div class="wrap">';
        echo '<p><a href="?page=proformat-list">&laquo; Powrót do listy</a></p>';
        echo '<h2>Szczegóły Pluginu: ' . $plugin['name'] . '</h2>';
        echo '<p><strong>Opis:</strong> ' . $plugin['description'] . '</p>';
        echo '<p><strong>Autor:</strong> ' . $plugin['author'] . '</p>';
        echo '<p><strong>Wersja:</strong> ' . $plugin['newest_version'] . '</p>';
        echo '<p><strong>Aktywny:</strong> ' . ($plugin['active'] ? 'Tak' : 'Nie') . '</p>';
        echo '</div>';
    }
}

?>