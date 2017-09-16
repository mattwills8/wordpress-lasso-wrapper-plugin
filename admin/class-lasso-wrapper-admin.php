<?php
/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Lasso_Wrapper
 * @subpackage Lasso_Wrapper/admin
 * @author     Matt Wills <matt_wills8@outlook.com>
 */
class Lasso_Wrapper_Admin {

	private $plugin_name;
	private $version;

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}
    
    public function lasso_wrapper_plugin_menu() {
        
        add_options_page( 'Lasso', 'Lasso', 'manage_options', 'Lasso Shortcode Wrapper', array($this,'lasso_wrapper_options') );
        
    }

    public function lasso_wrapper_options() {
        
        include plugin_dir_path( __FILE__ ) . 'partials/lasso-wrapper-admin-display.php';
        
    }
    
	public function enqueue_styles() {

		/**
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Lasso_Wrapper_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Lasso_Wrapper_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/lasso-wrapper-admin.css', array(), $this->version, 'all' );

	}

	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/lasso-wrapper-admin.js', array( 'jquery' ), $this->version, false );
        
    }

}
