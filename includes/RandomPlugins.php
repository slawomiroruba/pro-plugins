<?php 

namespace ProformatPlugins;

class RandomPlugins {

    // Właściwość przechowująca dane o wtyczkach
    private $plugins;

    public function __construct() {
        $this->plugins = $this->getRandomPlugins();
    }
    public function getRandomPlugins(): array
    {
        return [
            [
                'id' => 1,
                'name' => 'WooCommerce',
                'plugin_uri' => 'https://downloads.wordpress.org/plugin/woocommerce.5.5.2.zip',
                'description' => 'WooCommerce to darmowa wtyczka eCommerce, która pozwala sprzedawać wszystko. Pięknie.',
                'author' => 'Automattic',
                'author_url' => 'https://woocommerce.com/',
                'newest_version' => '5.5.2',
                'active' => false,
            ],
            [
                'id' => 2,
                'name' => 'Contact Form 7',
                'plugin_uri' => 'https://downloads.wordpress.org/plugin/contact-form',
                'description' => 'Contact Form 7 to jedna z najpopularniejszych wtyczek do tworzenia formularzy kontaktowych.',
                'author' => 'Takayuki Miyoshi',
                'author_url' => 'https://contactform7.com/',
                'newest_version' => '5.5.2',
                'active' => true,
            ],
            [
                'id' => 3,
                'name' => 'Yoast SEO',
                'plugin_uri' => 'https://downloads.wordpress.org/plugin/wordpress-seo.17.0.zip',
                'description' => 'Yoast SEO to najpopularniejsza wtyczka do optymalizacji stron pod kątem wyszukiwarek.',
                'author' => 'Team Yoast',
                'author_url' => 'https://yoast.com/',
                'newest_version' => '17.0',
                'active' => false,
            ],
            [
                'id' => 4,
                'name' => 'WP Super Cache',
                'plugin_uri' => 'https://downloads.wordpress.org/plugin/wp-super-cache.1.7.2.zip',
                'description' => 'WP Super Cache to wtyczka do tworzenia statycznych kopii stron, co przyspiesza ich ładowanie.',
                'author' => 'Automattic',
                'author_url' => 'https://automattic.com/',
                'newest_version' => '1.7.2',
                'active' => true,
            ],
            [
                'id' => 5,
                'name' => 'Jetpack',
                'plugin_uri' => 'https://downloads.wordpress.org/plugin/jetpack.9.8.zip',
                'description' => 'Jetpack to wtyczka, która łączy w sobie wiele różnych funkcjonalności, takich jak statystyki, powiadomienia, komentarze, itp.',
                'author' => 'Automattic',
                'author_url' => 'https://automattic.com/',
                'newest_version' => '9.8',
                'active' => false,
            ],
            [
                'id' => 6,
                'name' => 'Akismet',
                'plugin_uri' => 'https://downloads.wordpress.org/plugin/akismet.4.1.9.zip',
                'description' => 'Akismet to wtyczka do filtrowania komentarzy, która pomaga walczyć ze spamem.',
                'author' => 'Automattic',
                'author_url' => 'https://automattic.com/',
                'newest_version' => '4.1.9',
                'active' => true,
            ],
            [
                'id' => 7,
                'name' => 'Elementor',
                'plugin_uri' => 'https://downloads.wordpress.org/plugin/elementor.3.3.1.zip',
                'description' => 'Elementor to wtyczka do tworzenia stron i szablonów za pomocą drag & drop.',
                'author' => 'Elementor.com',
                'author_url' => 'https://elementor.com/',
                'newest_version' => '3.3.1',
                'active' => true,
            ],
            [
                'id' => 8,
                'name' => 'W3 Total Cache',
                'plugin_uri' => 'https://downloads.wordpress.org/plugin/w3-total-cache.2.1.4.zip',
                'description' => 'W3 Total Cache to wtyczka do tworzenia statycznych kopii stron, co przyspiesza ich ładowanie.',
                'author' => 'BoldGrid',
                'author_url' => 'https://www.boldgrid.com/',
                'newest_version' => '2.1.4',
                'active' => false,
            ],
            [
                'id' => 9,
                'name' => 'Wordfence Security',
                'plugin_uri' => 'https://downloads.wordpress.org/plugin/wordfence.7.5.5.zip',
                'description' => 'Wordfence Security to wtyczka do zabezpieczania stron przed atakami hakerskimi.',
                'author' => 'Wordfence',
                'author_url' => 'https://www.wordfence.com/',
                'newest_version' => '7.5.5',
                'active' => false,
            ]
        ];
    }

    public function getPluginById(int $id): array | null
    {
        foreach ($this->plugins as $plugin) {
            if ($plugin['id'] === $id) {
                return $plugin;
            }
        }
        
        return null; // Add this line to handle the case when the plugin is not found
    }
}


?>