jQuery( document ).ready( function ($) {

    $("#mvno_activations_btn").on('click', function (e) {

        e.preventDefault()

        $(".mvno-activations-loader-center").show();

        let width_number = $(".width_number").val();

        let width_type = $("#width_type").val();

        let height_number  = $(".height_number").val();

        let height_type  = $("#height_type").val();



        let usage_width = $(".usage_width").val();

        let usage_width_type = $("#usage_width_type").val();



        let usage_height = $(".usage_height").val();

        let usage_height_type = $("#usage_height_type").val();

        let usage_text_align = $("#text-center").val();





        let usage_color = $(".usage_color").val();

        let usage_border_color = $(".usage_border_color").val();



        let background_color = $(".color-field").val();

        let color = $(".input_color").val();

        let border_color = $(".border_color").val();

        let usage_border_radius = $(".usage_border_radius").val();



        // console.log("Color: ",$(".color-field").val());



        $.ajax({

            type: "post",

            url: mvnoActivationAjax.mvnoactivationajaxurl,

            data: {

                action: "mvnoSaveCustomScripts",

                background_color: background_color,

                border_color: border_color,

                color: color,

                width: width_number,

                width_type: width_type,

                height: height_number,

                height_type: height_type,

                usage_width: usage_width,

                usage_width_type: usage_width_type,

                usage_height: usage_height,

                usage_height_type: usage_height_type,

                usage_color: usage_color,

                usage_border_color: usage_border_color,

                usage_border_radius: usage_border_radius,

                usage_text_align: usage_text_align,

            }, success: function (result) {

                $(".mvno-activations-loader-center").hide();

                let d = JSON.parse(result);

            }, error: function (err) {

                console.log(err)

            }

        });

    })



    if (window.location.href.indexOf("mvno-activations-settings") > -1) {

        $(".mvno-activations-loader-center").show();

        $.ajax({

            type: "post",

            url: mvnoActivationAjax.mvnoactivationajaxurl,

            data: {

                action: "mvnoSettingsGetCustomScripts",

            }, success: function (result) {

                // console.log(typeof(result) );

                if(result != "null"){

                    let data = JSON.parse(result);



                    // $("#custom_css").val(data.custom_css)

                    // $("#custom_js").val(data.custom_js)

                }

                $(".mvno-activations-loader-center").hide();

            }

        })

    }





    $(".add_plan").on("click", function(e){

        e.preventDefault();

        $(".mvno-activations-loader-center").show();

        $.ajax({

            type: 'post',

            url: mvnoActivationAjax.mvnoactivationajaxurl,

            data: {

                action: "store_mvno_plans",

                plan_name: $("#plan_name").val(),

                plan_data: $("#plan_data").val(),

                plan_price: $("#plan_price").val(),

            }, success: function(result) {

                $(".mvno-activations-loader-center").hide();

                if(result){

                    $("#success_message").show();

                    $("#plan_name").val('');

                    $("#plan_data").val('');

                    $("#plan_price").val('');

                }

                // console.log(result)

            }

        });

    })


    $("#user_id").on("change", function(e){
        console.log($(this).val())
        $.ajax({
            type: 'post',
            url: mvnoActivationAjax.mvnoactivationajaxurl,
            data: {
                'action': 'getCurrentUserPlansAjax',
                'user_id' : $(this).val()
            }, success: function(result) {
                let plans = JSON.parse(result);
                $("select[name=plan] > option").remove();
                plans.forEach(function(plan, index){
                    console.log(plan)
                    $("select[name=plan]").append("<option value='"+plan.data+"-"+plan.product_id+"'>"+plan.plan_name+"</option>")
                })
            }
        })
    })


    $('.color-field').wpColorPicker();

    $('.border_color').wpColorPicker();

    $('.input_color').wpColorPicker();

    $('.usage_color').wpColorPicker();

    $('.usage_border_color').wpColorPicker();

} )