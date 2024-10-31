<div class="wrap">
    <h1>Add Plans</h1>

    <div class="form-wrap">

        <form class="form-table">
            <label for="plan_name">Plan Name</label>
            <input type="text" name="plan_name" id="plan_name" class="regular-text">


            <label for="plan_data">Plan Data</label>
            <input type="text" name="plan_data" id="plan_data" class="regular-text">


            <label for="plan_price">Plan Price</label>
            <input type="text" name="plan_price" id="plan_price" class="regular-text">

            <p class="submit">
                <button class="button add_plan">Create</button>
            </p>
        </form>

        <div class="notice-success" id="success_message" style="display:none;">
            <p style="color: green">Plan has been added</p>
        </div>
        <div class="mvno-activations-loader-center">
            <img src="<?php echo plugin_dir_url(__FILE__).'loading.gif' ?>" id="loader">
        </div>
    </div>
</div>