<?php

//set shortcode value
$shortcode = "";
$shortcode = lasso_get_input_value('lasso-shortcode','lasso-shortcode');

//set on/off value
$lasso_activate = '0';
$lasso_on = $lasso_off = '';

$lasso_activate = lasso_get_input_value('lasso-activate','lasso-activate');

if( $lasso_activate === '1' ) {
    $lasso_on = 'checked';
}
if( $lasso_activate === '0' ) {
    $lasso_off = 'checked';
}

//update options
lasso_update_option_from_post('lasso-shortcode', 'lasso-shortcode');
lasso_update_option_from_post('lasso-activate', 'lasso-activate');



function lasso_update_option_from_post($input_name, $option_name) {
    
    if(isset($_POST[$input_name])){      
        update_option($option_name, $_POST[$input_name]);
    }
}


function lasso_get_input_value($option_name, $input_value_name) {
    
    if(isset($_POST[$input_value_name])){

        $value = $_POST[$input_value_name];

    } else {

        $value = get_option($option_name);
    }
    
    return $value;
}
?>