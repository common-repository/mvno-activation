<style>


.main_box h3 {
    display: block;
    padding: 2px 0;
    font-size: 20px;
    margin-bottom: 10px;
    margin-top: 10px;
    color: #fff;
}

.shortcodes_div {

max-width: 500px;
    margin-top: 0px;
    background: #333;
    padding: 20px;
    border-radius: 10px;
    margin-top: 20px;
    color: #fff !important;
}

</style>

<div class="wrap">
<img width="100%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) )?>/settings.jpg">

    <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>





    <h1>Short Code for Activations</h1>

    <div class="wrap shortcodes_div">



        <b>Activation Shortcode:</b>

        <b>[mvnoactivation]</b>

        <br>

        <b>Data Usage Shortcode:</b>

        <b>[data_usage]</b>

        <br>

        <b>Voice & SMS Usage Shortcode:</b>

        <b>[voice_sms_usage]</b>

    </div>

    <hr>



    <form class="main_box">

        <h3>Activation Page Settings</h3>

        <div class="wrap">



            <h3><?php esc_attr_e('Color', 'WpAdminStyle')?></h3>

            <input type="text" class="input_color" value="<?=esc_html($styles->input_color)?>">



            <h3><?php esc_attr_e('Background Color', 'WpAdminStyle')?></h3>

            <input type="text" class="color-field" value="<?=esc_html($styles->background_color)?>">



            <h3><?php esc_attr_e('Border Color', 'WpAdminStyle')?></h3>

            <input type="text" class="border_color" value="<?=esc_html($styles->border_color)?>">





            <h3>Width</h3>

            <input type="number" class="width_number" value="<?=esc_html($styles->width)?>" style="width: 100px;"><select style="margin-bottom: 5px;" name="width_type" id="width_type">

                <option value="px" <?=(esc_html($styles->width_type)== 'px'?'SELECTED': '')?>>PX</option>

                <option value="%" <?=(esc_html($styles->width_type) == '%'?'SELECTED': '')?>>%</option>

            </select>



            <h3>Height</h3>

            <input type="number" class="height_number" value="<?=esc_html($styles->height)?>" style="width: 100px;"><select style="margin-bottom: 5px;" name="height_type" id="height_type">

                <option value="px" <?=(esc_html($styles->height_type) == 'px'?'SELECTED': '')?>>PX</option>

                <option value="%" <?=(esc_html($styles->height_type) == '%'?'SELECTED': '')?>>%</option>

            </select>



        </div>

        <hr>

        <h3>Data Usage Settings</h3>

        <div class="wrap">



            <h3><?php esc_attr_e('Color', 'WpAdminStyle')?></h3>

            <input type="text" class="usage_color" value="<?=esc_html($styles->usage_color)?>">



            <h3><?php esc_attr_e('Border Color', 'WpAdminStyle')?></h3>

            <input type="text" class="usage_border_color" value="<?=esc_html($styles->usage_border_color)?>">



            <h3>Border Radius</h3>

            <input type="number" class="usage_border_radius" value="<?=esc_html($styles->usage_border_radius)?>">



            <h3>Width</h3>

            <input type="number" class="usage_width" value="<?=esc_html($styles->usage_width)?>" style="width: 100px;"><select style="margin-bottom: 5px;" name="usage_width_type" id="usage_width_type">

                <option value="px" <?=(esc_html($styles->usage_width_type) == 'px'?'SELECTED': '')?>>PX</option>

                <option value="%" <?=(esc_html($styles->usage_width_type) == '%'?'SELECTED': '')?>>%</option>

            </select>



            <h3>Height</h3>

            <input type="number" class="usage_height" value="<?=esc_html($styles->usage_height)?>" style="width: 100px;"><select style="margin-bottom: 5px;" name="usage_height_type" id="usage_height_type">

                <option value="px" <?=(esc_html($styles->usage_height_type) == 'px'?'SELECTED': '')?>>PX</option>

                <option value="%" <?=(esc_html($styles->usage_height_type) == '%'?'SELECTED': '')?>>%</option>

            </select>







            <h3>Text Align</h3>

            <select style="margin-bottom: 5px;" name="text-center" id="text-center">

                <option value="center" <?=(esc_html($styles->usage_text_align) == 'center'?'SELECTED': '')?>>CENTER</option>

                <option value="left" <?=(esc_html($styles->usage_text_align) == 'left'?'SELECTED': '')?>>LEFT</option>

                <option value="right" <?=(esc_html($styles->usage_text_align) == 'right'?'SELECTED': '')?>>RIGHT</option>

            </select>



        </div>

        <div class="wrap">

            <?php

            wp_nonce_field( 'mvno-activations-setting-save-nounce', 'mvno-activations-setting-save-nounce' );

            submit_button(null, 'button-primary', 'mvno_activations_btn');

            ?>

        </div>

    </form>

    <div class="mvno-activations-loader-center">

        <img src="<?php echo plugin_dir_url(__FILE__).'loading.gif' ?>" id="loader">

    </div>

</div><!-- .wrap -->