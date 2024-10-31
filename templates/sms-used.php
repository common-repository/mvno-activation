<style>
    .mvno_data_usage_div {
        width: <?=$styles->usage_width?><?=$styles->usage_width_type?> !important;
        height: <?=$styles->usage_height?><?=$styles->usage_height_type?>;
        border-left: 1px solid <?=$styles->usage_border_color?>;
        border-bottom: 1px solid <?=$styles->usage_border_color?>;
        border-top: none;
        border-right: none;
        box-shadow: -7px 9px 10px 0px;
        text-align: <?=$styles->usage_text_align?>;
        color: <?=$styles->usage_color?>;
        background-image : linear-gradient(to left,
        rgba(255,255,255, 0),
        rgba(255,255,255, 1) 90%);
    }
</style>

<div class="column">
    <div class="mvno_data_usage_div">
        <h3 style="margin-top: 10px">Calling & SMS</h3>
        <h4><?=$sub->new_number?></h4>
        <?php if($subscriber_info->resultType == "Success"){ ?>
            <div>SMS</div>
            <b><?=$sms_used?></b>
            <br />
            <div>Calling</div>
            <b><?=$voice_used?></b>
        <?php }else{ ?>
            <p>There is no data usage for this Number</p>
        <?php } ?>
    </div>
</div>
