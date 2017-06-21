<?php
/**
 * Plugin Name:       MixMat
 * Plugin URI:        http://themes.tradesouthwest.com/wordpress/plugins/mixmat
 * Description:       Mixmat Page Mixer gives editors an easy way to sectionalize the posts and pages without knowing CSS or HTML.
 * Version:           1.0.1
 * Author:            Larry Judd
 * Author URI:        http://tradesouthwest.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       mixmat
 * Domain Path:       /languages
 *
 * @wordpress-plugin
 * @link              http://tradesouthwest.com
 * @since             1.0.1
 * @package           Mixmat
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

function mixmat_php_version_notice() {
        $class = 'notice notice-error';
        $message = __( 'MixMat Page Mixer for WordPress</strong> requires PHP version 5.3 or later.
        You are running PHP version ' . PHP_VERSION . '. Please upgrade to a supported version of PHP.',
        'mixmat' );
        printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message );
    }
    //Only run this if the PHP version is less than 5.3
    if (version_compare(PHP_VERSION, '5.3.0', '<')) {
        add_action( 'admin_notices', 'mixmat_php_version_notice' );
}

/** Important constants
 *
 * @since   1.0.1
 *
 * @version - reserved
 * @plugin_url
 * @text_domain - reserved
 *
 */
//define( 'MXMT_VERSION', '1.0.0' );
define( 'MIXMAT_URL', plugin_dir_url(__FILE__));
//define( 'MXMT_TEXT', 'mixmat' );

//activate/deactivate hooks
function mixmat_plugin_activation() {

    mixmat_php_version_notice();

        return false;

}

function mixmat_plugin_deactivation() {

    //mixmat_deregister_shortcode
    //flush_rewrite_rules();

        return false;

}

//https://codex.wordpress.org/Shortcode_API
function mixmat_deregister_shortcode(){

    //shortcode_atts( $pairs, $atts )

}

/**
 * Initialise - load in translations
 * @since 1.0.0
 */
function mixmat_loadtranslations () {

    $plugin_dir = basename(dirname(__FILE__)).'/languages';
    load_plugin_textdomain( 'mixmat', false, $plugin_dir );

}
add_action('plugins_loaded', 'mixmat_loadtranslations');


/**
 * Plugin Scripts
 *
 * Register and Enqueues plugin scripts
 *
 * @since 1.0.0
 */
function mixmat_scripts() {

    // Register Scripts
    wp_register_script( 'mixmat-plugin', plugins_url( 'js/mixmat-plugin.js' , __FILE__ ), array( 'jquery' ), true );

    // Register Styles
    wp_register_style( 'mixmat-style', MIXMAT_URL . 'css/mixmat-style.css' );
    wp_enqueue_script( 'wp-color-picker-script', plugins_url('js/mixmat-plugin.js', __FILE__ ),
                array( 'wp-color-picker' ), false, true );
    //let WP handle ver and loading
    wp_enqueue_style(  'mixmat-style' );
    wp_enqueue_script( 'mixmat-plugin' );
    wp_enqueue_script( 'wp-color-picker');
    wp_enqueue_style(  'wp-color-picker' );

}
add_action( 'wp_enqueue_scripts', 'mixmat_scripts' );

//load admin scripts as well
add_action( 'admin_init', 'mixmat_scripts' );

//activate and deactivate registered
register_activation_hook( __FILE__, 'mixmat_plugin_activation');
register_deactivation_hook( __FILE__, 'mixmat_plugin_deactivation');

//include admin and public views
require ( plugin_dir_path( __FILE__ ) . 'includes/mixmat-adminpage.php' ); 
?>
