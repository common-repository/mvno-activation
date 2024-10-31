<div class="wrap">

    <img width="100%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) )?>/activation.png">



<div class="main_box">

    <div class="form-wrap">



    <form class="form-table" method="post" action="">

        <?php wp_nonce_field( 'activation' );?>

        <div class="wrap">

     

            <label for="user_id">Users</label>

            <select name="user_id" id="user_id"  class="form-field activation" style="width: 100%;">

            <?php foreach ( $blogusers as $user ) { ?>

                <option value="<?=$user->ID?>"><?=esc_html( $user->display_name )?></option>

            <?php }?>

            </select>



            <label><?php esc_attr_e('Plans', 'WpAdminStyle')?></label>



            <select name="plan" id="plan" class="form-field activation" style="width: 100%;">

                <?php foreach($plans as $plan){ ?>

                    <option value="<?=$plan->plan_data?>"><?=$plan->plan_name?></option>

                <?php } ?>

            </select>



            <label for="first_name">First Name</label>

            <input type="text" name="first_name" class="regular-text activation" id="first_name">



            <label for="last_name">Last Name</label>

            <input type="text" name="last_name" class="regular-text activation" id="last_name">



            <label for="street_number">Street Number</label>

            <input type="text" name="street_number" id="street_number" class="regular-text activation" id="street_name">



            <label for="street_direction">Street Direction</label>

            <input type="text" name="street_direction" id="street_direction" class="regular-text activation" id="street_direction">



            <label for="street_name">Street Name</label>

            <input type="text" name="street_name" class="regular-text activation" id="street_name">



            <label for="street_type">Street Type</label>

            <input type="text" name="street_type" class="regular-text activation" id="street_type">



            <label for="City">City</label>

            <input type="text" name="city" class="regular-text activation" id="city">



            <label for="state">State</label>

            <select name="state" id="state" class="form-field activation" style="width: 100%;">

                <option>Choose...</option>

                <option value="AL">Alabama</option>

                <option value="AK">Alaska</option>

                <option value="AZ">Arizona</option>

                <option value="AR">Arkansas</option>

                <option value="CA">California</option>

                <option value="CO">Colorado</option>

                <option value="CT">Connecticut</option>

                <option value="DE">Delaware</option>

                <option value="DC">District Of Columbia</option>

                <option value="FL">Florida</option>

                <option value="GA">Georgia</option>

                <option value="HI">Hawaii</option>

                <option value="ID">Idaho</option>

                <option value="IL">Illinois</option>

                <option value="IN">Indiana</option>

                <option value="IA">Iowa</option>

                <option value="KS">Kansas</option>

                <option value="KY">Kentucky</option>

                <option value="LA">Louisiana</option>

                <option value="ME">Maine</option>

                <option value="MD">Maryland</option>

                <option value="MA">Massachusetts</option>

                <option value="MI">Michigan</option>

                <option value="MN">Minnesota</option>

                <option value="MS">Mississippi</option>

                <option value="MO">Missouri</option>

                <option value="MT">Montana</option>

                <option value="NE">Nebraska</option>

                <option value="NV">Nevada</option>

                <option value="NH">New Hampshire</option>

                <option value="NJ">New Jersey</option>

                <option value="NM">New Mexico</option>

                <option value="NY">New York</option>

                <option value="NC">North Carolina</option>

                <option value="ND">North Dakota</option>

                <option value="OH">Ohio</option>

                <option value="OK">Oklahoma</option>

                <option value="OR">Oregon</option>

                <option value="PA">Pennsylvania</option>

                <option value="RI">Rhode Island</option>

                <option value="SC">South Carolina</option>

                <option value="SD">South Dakota</option>

                <option value="TN">Tennessee</option>

                <option value="TX">Texas</option>

                <option value="UT">Utah</option>

                <option value="VT">Vermont</option>

                <option value="VA">Virginia</option>

                <option value="WA">Washington</option>

                <option value="WV">West Virginia</option>

                <option value="WI">Wisconsin</option>

                <option value="WY">Wyoming</option>

            </select>



            <label for="zip">Zip</label>

            <input type="text" name="zip" id="zip" class="regular-text activation" id="zip">





            <label for="imei">IMEI</label>

            <input type="text" name="imei" id="imei" class="regular-text activation" id="imei">



            <label for="iccid">ICCID</label>

            <input type="text" name="iccid" id="iccid" class="regular-text activation" id="iccid">

        </div>

        <div class="wrap">

            <?php submit_button('Activate', 'button-primary', 'activate_btn'); ?>

        </div>

    </form>

        <p>

            <?=$message?>

        </p>

    </div>

    <img src="<?php echo plugin_dir_url(__FILE__).'loading.gif' ?>" width="100px" id="loader" style="display: none;">

</div><!-- .wrap -->

</div>