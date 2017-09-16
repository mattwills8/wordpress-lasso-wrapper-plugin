<?php 

$lasso              = get_option('lasso-activate');
$lasso_shortcode    = get_option('lasso-shortcode');

if( $lasso === '1' ) {
    echo do_shortcode($lasso_shortcode);
}

?>