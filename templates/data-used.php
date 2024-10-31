<style>
    .mvno_data_usage_div {
        width: <?=esc_html($styles->usage_width)?><?=esc_html($styles->usage_width_type)?> !important;
        height: <?=esc_html($styles->usage_height)?><?=esc_html($styles->usage_height_type)?>;
        border-left: 1px solid <?=esc_html($styles->usage_border_color)?>;
        border-bottom: 1px solid <?=esc_html($styles->usage_border_color)?>;
        border-top: none;
        border-right: none;
        box-shadow: -7px 9px 10px 0px;
        text-align: <?=esc_html($styles->usage_text_align)?>;
        color: <?=esc_html($styles->usage_color)?>;
        border-radius: 10px;
        background-image : linear-gradient(to left,
        rgba(255,255,255, 0),
        rgba(255,255,255, 1) 90%);
    }
</style>
<?php
if(isset($usage_report->totalVolume)){
    $total_volume = $usage_report->totalVolume;
    $size = $usage_report->size;
}else{
    $total_volume = 0;
    $size = '0GB';
}
$res = preg_replace("/[^0-9\s]/", "", esc_html($size));

$data_left = ($res * 1024) - (int)(esc_html($total_volume));
if($total_volume !== 0){

?>
<div class="column">

    <div class="mvno_data_usage_div">
        <h3 style="margin-top: 10px">Data Used</h3>
        <h4><?=esc_html($sub->new_number)?></h4>
        <?php if($usage_report->resultType == "Success"){ ?>
            <div>Data Usage</div>
            <b><?=esc_html($usage_report->totalVolume)?>MB</b>
            <br />
            <div>Plan</div>
            <b><?=esc_html($usage_report->size)?></b>
            <br />
            <div>Data Left</div>
            <b><?php echo round(($data_left / 1024), 2) ?>GB</b>
        <?php }else{ ?>
            <p>There is no data usage for this Number</p>
        <?php } ?>
    </div>
</div>
<?php
}
?>