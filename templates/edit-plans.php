<div class="wrap">
    <h1>Edit Plan</h1>

    <div class="form-wrap" >

        <form class="form-table" method="post" action="">
            <input type="hidden" name="plan_id" value="<?=$plan->ID?>">
            <label for="plan_name">Plan Name</label>
            <input type="text" name="plan_name" id="plan_name" class="regular-text" value="<?=esc_html($plan->plan_name)?>">


            <label for="plan_data">Plan Data</label>
            <input type="text" name="plan_data" id="plan_data" class="regular-text" value="<?=esc_html($plan->plan_data)?>">


            <label for="plan_price">Plan Price</label>
            <input type="text" name="plan_price" id="plan_price" class="regular-text" value="<?=esc_html($plan->plan_price)?>">


            <?php
            wp_nonce_field("mvno_edit_plan_".esc_html($plan->ID));
            submit_button( __( 'Update Plan', 'textdomain' ), 'primary', 'mvno-update-plan' );
            ?>

        </form>

        <div class="notice-success" id="success_message" style="">
            <p style="color: green"><?=$message?></p>
        </div>

    </div>
</div>