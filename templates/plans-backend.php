<div class="wrap">

    <h1 class="wp-heading-inline">Mvno Plans</h1>
    <a href="<?php echo get_admin_url();?>admin.php?page=mvno-plans-add" class="page-title-action">Add New</a>
    <hr class="wp-header-end">
    <?php
    if($del_msg != ""){
        echo "<p>$del_msg</p>";
    }
    ?>
    <table class="widefat fixed" cellspacing="0">
        <thead>
            <tr>

                <th id="cb" class="manage-column column-cb check-column" scope="col"><input type="checkbox"></th>
                <th id="planname" class="manage-column column-planname sortable desc" scope="col">
                    <a>
                        <span>Name</span>
                        <span class="sorting-indicator"></span>
                    </a>
                </th>
                <th id="plandata" class="manage-column column-plandata num" scope="col">Data</th>
                <th id="planprice" class="manage-column column-planprice num" scope="col">Price</th>
                <th id="action" class="manage-column column-action num" scope="col">Action</th>

            </tr>
        </thead>

        <tbody>
        <?php foreach($data as $d){?>
            <tr class="alternate" valign="top">
                <th class="check-column" scope="row">
                    <input type="checkbox" id="cb" name="plans[]" value="<?=esc_html($d->ID)?>">
                </th>
                <td class="planname column-planname page-title" data-colname="planname">
                    <a href="#">
                        <span><?=esc_html($d->plan_name)?></span>
                    </a>
                </td>
                <td class="plandata column-plandata" data-colname="plandata"><?=esc_html($d->plan_data)?></td>
                <td class="planprice column-planprice" data-colname="planprice">$<?=esc_html($d->plan_price)?></td>
                <td class="action column-action" data-colname="action">
                    <a href="?page=mvno-plans&mvno_plan_id=<?=esc_html($d->ID)?>">
                        <span>Edit<i class="fa fa-edit"></i></span>
                    </a>
                    |
                    <a href="?page=mvno-plans&mvno_plan_del_id=<?=esc_html($d->ID)?>">
                        <span>Delete<i class="fa fa-trash"></i></span>
                    </a>
                </td>
            </tr>
        <?php } ?>
        </tbody>
        <tfoot>
            <tr>

                <th id="cb" class="manage-column column-cb check-column" scope="col"><input type="checkbox"></th>
                <th id="columnname" class="manage-column column-columnname" scope="col">Name</th>
                <th id="columnname" class="manage-column column-columnname num" scope="col">Data</th>
                <th id="columnname" class="manage-column column-columnname num" scope="col">Price</th>
                <th id="columnname" class="manage-column column-columnname num" scope="col">Action</th>

            </tr>
        </tfoot>
    </table>
</div>
