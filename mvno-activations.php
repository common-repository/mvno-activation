<?php

/**

 * Plugin Name: MVNO Activation

 * Plugin URI: https://mvnop.com/

 * Description: MVNO Activations to get you started with MVNO activation services.

 * Version: 1.0.2

 * Author: MVNOP

 * Author URI: https://mvnop.com

 * Text Domain: MVNOP

 * @package Mvno

 */



defined( 'ABSPATH' ) || exit;





include ('init.php');

include ('includes/Install.php');

include ('includes/Uninstall.php');



if (class_exists('MVNO_MvnoActivations')) {

    $newinstance = new MVNO_MvnoActivations();



}

register_activation_hook( __FILE__, array( 'MVNO_MvnoActivationInstall', 'create_mvno_activations_database_table' ) );

register_deactivation_hook( __FILE__, array('MVNO_MvnoActivationUninstall', 'mvno_activations_remove_database_table'));