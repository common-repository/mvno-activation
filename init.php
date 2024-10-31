<?php
class MVNO_MvnoActivations{

    protected $mvno_activations_tbl;
    protected $mvno_settings_tbl;
    protected $mvno_subscribers_tbl;
    protected $mvno_plans_tbl;
    protected $mvno_number;
    protected $auth_code;
    /**
     * Mvno constructor.
     */
    public function __construct()
    {

    }


    /**
     * Recursive sanitation for text or array
     *
     * @param $array_or_string (array|string)
     * @since  0.1
     * @return mixed
     */
    function mvno_sanitize_text_or_array_field($array_or_string)
    {

    }

    /**
     * @param $hook
     * Color picker enqueu style
     */
    function mvno_add_color_picker( $hook ) 
    {

    }

    /**
     * Register a custom mvno settings menu page.
     */
    public function mvno_register_mvno_settings_menu_page()
    {

    }

    /**
     * Display a custom menu page
     */
    public function mvno_activations_menu_page()
    {

    }

    /**
     * @param array $data
     * @return array|mixed|object
     */
    public function mvno_activations(array $data)
    {

    }



    /**
     * @param $return_id
     * @return array|mixed|object
     */
    public function mvno_verify_activation($return_id)
    {

    }



    /**
     * @param array $data
     * @return int
     */
    public function mvn_store_subscriber(array $data )
    {

    }





    /**

     * Creating a sub menu page

     */

    public function register_mvno_activations_settings_page() 
    {

    }



    /**

     * Submenu page settings page Template

     */

    public function mvno_activations_settings_page()
    {

    }



    /**

     * Subscribers page

     */

    public function register_mvno_activations_subscribers_page()

    {

    }



    /**

     * Submenu page settings page Template

     */

    public function mvno_activations_subscribers_page()

    {

    }



    public function getSubscriberInfo($sub_id)

    {
    }





    /**

     * Register Mvno Scripts

     */

    public function mvno_settings_js()

    {

    }



    /**

     * Saving Custom Scripts

     */

    public function mvno_save_custom_scripts()

    {


    }



    /**

     * Retriving Custom Scripts

     */

    public function mvnoSettingsGetCustomScripts()

    {

    }

    public function getCurrentUserPlans()
    {

    }


    /**

     * Adding Template for frontend

     * @param $atts

     */

    public function mvn_activation_page( $atts )
    {

    }



    /**

     * Data usage shortcode

     */

    public function mvno_data_usage_frontend()

    {

    }



    /**

     * Voice and SMS Used shortcode

     */

    public function mvno_voice_sms_used()

    {
    }



    /**

     * @param $user_id

     * @return array|mixed|object

     */

    public function usageReport($number)

    {

    }





    /**

     * Adding menu page for plans

     */

    public function register_mvno_plans_menu_page()

    {

    }



    /**

     * Plans menu page backend

     */

    public function mvno_plans_menu_page()

    {
    }





    /**

     * @param $plan_id

     */

    public function mvno_edit_plan($plan_id)

    {

    }



    /**

     * @param $plan_id

     * @return false|int

     */

    public function mvno_delete_plan($plan_id)

    {
    }



    /**

     * Adding Submenu for plans

     */

    public function mvnoAddPlansPage()

    {
    }



    /**

     * Add Plans template

     */

    public function mvno_add_plans_submenu_page()

    {

    }





    /**

     * MVNO Plans

     */

    public function store_mvno_plans()

    {
    }
}

