<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/mattwills8
 * @since      1.0.0
 *
 * @package    Lasso_Wrapper
 * @subpackage Lasso_Wrapper/admin/partials
 */

ob_start(); ?>

<h1>Lasso Wrapper</h1><br>

<?php include plugin_dir_path( __FILE__ ) . 'lasso-wrapper-admin-form.php'; ?>

<?php
ob_get_flush();
?>