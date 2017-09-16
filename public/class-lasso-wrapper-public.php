<?php
/**
 * The public-facing functionality of the plugin.
 *
 * @package    Lasso_Wrapper
 * @subpackage Lasso_Wrapper/public
 * @author     Matt Wills <matt_wills8@outlook.com>
 */
class Lasso_Wrapper_Public {

	private $plugin_name;

	private $version;

	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}
    
    public function public_display() {
        
        include plugin_dir_path( __FILE__ ) . 'partials/lasso-wrapper-public-display.php';
        
    }

	public function enqueue_styles() {

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/lasso-wrapper-public.css', array(), $this->version, 'all' );

	}

	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/lasso-wrapper-public.js', array( 'jquery' ), $this->version, false );

	}

}
