<?php
/**
 * Created by PhpStorm.
 * User: Husnain
 * Date: 6/15/2020
 * Time: 8:06 PM
 */

class MVNO_MvnoActivationUninstall
{

    public function mvno_activations_remove_database_table() {
        global $wpdb;
        $mvno_activations_table = $wpdb->prefix .'mvno_activations';
        $mvno_subscribers_table = $wpdb->prefix .'mvno_subscribers';
        $mvno_plans_table = $wpdb->prefix .'mvno_plans';
        $sql = "DROP TABLE IF EXISTS $mvno_activations_table";
        $sql1 = "DROP TABLE IF EXISTS $mvno_subscribers_table";
        $sql2 = "DROP TABLE IF EXISTS $mvno_plans_table";
        $wpdb->query($sql);
        $wpdb->query($sql1);
        $wpdb->query($sql2);
        delete_option("mvno_activations_db_version");
    }

}