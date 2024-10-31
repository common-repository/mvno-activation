<?php
/**
 * Created by PhpStorm.
 * User: Husnain
 * Date: 6/15/2020
 * Time: 8:06 PM
 */

class MVNO_MvnoActivationInstall
{
    public function create_mvno_activations_database_table()
    {
        global $wpdb;
        $mvno_activations_table = $wpdb->prefix .'mvno_activations';
        $mvno_subscribers_table = $wpdb->prefix .'mvno_subscribers';
        $mvno_plans_table = $wpdb->prefix .'mvno_plans';
        $my_products_db_version = '1.0.0';
        $charset_collate = $wpdb->get_charset_collate();

        // create activations plugin
        if ( $wpdb->get_var( "SHOW TABLES LIKE '{$mvno_activations_table}'" ) != $mvno_activations_table ) {

            $sql = "CREATE TABLE $mvno_activations_table (
            ID mediumint(9) NOT NULL AUTO_INCREMENT,
            `background_color` varchar(255) NOT NULL,
            `border_color` varchar(255) NOT NULL,
            `input_color` varchar(255) NOT NULL,
            `color` varchar(255) NOT NULL,
            `width` varchar(255) NOT NULL,
            `width_type` varchar(255) NOT NULL,
            `height` varchar(255) NOT NULL,
            `height_type` varchar(255) NOT NULL,
            `usage_color` varchar(255) NOT NULL,
            `usage_border_color` varchar(255) NOT NULL,
            `usage_border_radius` varchar(255) NOT NULL,
            `usage_text_align` varchar(255) NOT NULL,
            `usage_width` varchar(255) NOT NULL,
            `usage_width_type` varchar(255) NOT NULL,
            `usage_height` varchar(255) NOT NULL,
            `usage_height_type` varchar(255) NOT NULL,
            PRIMARY KEY  (ID)
      )    $charset_collate;";

            require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
            dbDelta( $sql );
            add_option( 'mvno_db_version', $my_products_db_version );

            $wpdb->insert(
                $mvno_activations_table,
                array(
                    'background_color' => '#eeeeee',
                    'border_color' => '#ffffff',
                    'input_color' => '#ffffff',
                    'color'=> '#1d252c',
                    'width' => '100',
                    'width_type' => '%',
                    'height' => '100',
                    'height_type' => '%',
                    'usage_color'=> '#1d252c',
                    'usage_border_color' => '#ffffff',
                    'usage_border_radius' => '5',
                    'usage_text_align' => 'center',
                    'usage_width' => '100',
                    'usage_width_type' => '%',
                    'usage_height' => '100',
                    'usage_height_type' => '%'
                ),
                array(
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s',
                    '%s'
                )
            );
      }

        // create subscribers page
      if ( $wpdb->get_var( "SHOW TABLES LIKE '{$mvno_subscribers_table}'" ) != $mvno_subscribers_table ) {
          $sql = "CREATE TABLE $mvno_subscribers_table (
            ID mediumint(9) NOT NULL AUTO_INCREMENT,
            `user_id` VARCHAR(255) NULL,
            `full_name` VARCHAR(255) NULL,
            `address` VARCHAR(255) NULL,
            `street_number` VARCHAR(255) NULL,
            `street_name` VARCHAR(255) NULL,
            `street_type` VARCHAR(255) NULL,
            `street_direction` VARCHAR(255) NULL,
            `city` VARCHAR(255) NULL,
            `state` VARCHAR(255) NULL,
            `zip` VARCHAR(255) NULL,
            `phone_number` VARCHAR(255) NULL,
            `data_used` varchar(255) NULL,
            `plan` VARCHAR(255) NULL,
            `imei` VARCHAR(255) NULL,
            `iccid` VARCHAR(255) NULL,
            `activation_id` text NULL,
            `new_number` VARCHAR(255) NULL,
            `status` VARCHAR(255) NULL,
            PRIMARY KEY  (ID)
        )$charset_collate;";

          require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
          dbDelta( $sql );
          add_option( 'mvno_db_version', $my_products_db_version );

      }

      // create plans page
        if ( $wpdb->get_var( "SHOW TABLES LIKE '{$mvno_plans_table}'" ) != $mvno_plans_table ) {
        $sql = "CREATE TABLE $mvno_plans_table (
            ID mediumint(9) NOT NULL AUTO_INCREMENT,
            `plan_name` text NOT NULL,
            `plan_data` text NOT NULL,
            `plan_price` text NOT NULL,
            `created_at` text NOT NULL,
            PRIMARY KEY  (ID)
        )$charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
        add_option( 'mvno_db_version', $my_products_db_version );
        }
    }
}