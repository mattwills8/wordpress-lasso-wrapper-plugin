<?php
/*
* handle form and set input values
*/
include plugin_dir_path( __FILE__ ) . 'lasso-wrapper-admin-form-handle.php';


/*
* display form
*/ 
?>
<form name="lasso-form" id="lasso-form" class="form admin-form" action="" method="post">
    
    <div id="lasso-activate" class="lasso-form-row">
        <input type="radio" name="lasso-activate" value="1" <?php echo $lasso_on; ?>>On 
        <input type="radio" name="lasso-activate" value="0" <?php echo $lasso_off; ?>>Off<br>
    </div><br>

    <div id="lasso-shortcode" class="lasso-form-row">
        <label for="lasso-shortcode">Lasso Shortcode</label><br>
        <input name="lasso-shortcode" id="lasso-shortcode-input" class="input" value="<?php echo $shortcode; ?>" size="20" type="text">
    </div>
    
    <div id="lasso-submit" class="submit">
        <input name="lasso-submit" id="lasso-submit-input" value="Save Changes" type="submit">
    </div>
    
</form>