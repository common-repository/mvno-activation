<style>

    .mvno_select{

        width: 100%;

        height: 50px;

        border: 1px solid #8080808a;

    }





    .mvno_msgs {

        align-items: center;

        align-content: center;

        text-align: center;

    }

</style>

<div class="mvno_activation" style="display:block;">


    <form method="post" action="">

        <div class="wrap">

            <input type="hidden" name="user_id" value="<?=get_current_user_id()?>">

            <label for="first_name">First Name</label>

            <input type="text" name="first_name" class="mvno_input">



            <label for="last_name">Last Name</label>

            <input type="text" name="last_name" class="mvno_input">



            <label for="street_number">Street Number</label>

            <input type="text" name="street_number" class="mvno_input">



            <label for="street_name">Street Name</label>

            <input type="text" name="street_name" class="mvno_input">



            <label for="street_type">Street Type</label>

            <input type="text" name="street_type" class="mvno_input">





            <label for="street_direction">Street Direction</label>

            <input type="text" name="street_direction" class="mvno_input">



            <label for="city">City</label>

            <input type="text" name="city" class="mvno_input">

            

            <label for="state">State</label>

            <select name="state" id="state" class="mvno_input mvno_select">

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

            <input type="text" name="zip" class="mvno_input mvno_select">



            <label for="imei">IMEI</label>

            <input type="text" name="imei" class="mvno_input">



            <label for="iccid">ICCID</label>

            <input type="text" name="iccid" class="mvno_input">



            <label for="plan">Plan</label>

            <select name="plan" id="plan" class="mvno_select">

                <?php foreach($plans as $plan){?>

                    <option value="<?=$plan['data']?>-<?=$plan['product_id']?>"><?=$plan['plan_name']?></option>

                <?php } ?>

            </select>

            <?php wp_nonce_field( 'mvno-activations-setting-save-nounce', 'mvno-activations-setting-save-nounce' );?>

            <br>

            <button class="button" type="submit" name="activate">Activate</button>

        </div>

    </form>



    <img src="<?php echo plugin_dir_url(__FILE__).'loading.gif' ?>" width="100px" id="loader" style="display: none;">

</div><!-- .wrap -->