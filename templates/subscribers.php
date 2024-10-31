<div class="wrap">
<!-- <img src="../wp-content/uploads/2020/11/mvno_subscriberts.jpg" width="100%" alt=""> -->
<img width="100%" src="<?php echo plugin_dir_url( dirname( __FILE__ ) )?>/mvno_subscriberts.jpg">

    <h1 class="wp-heading-inline">MVNO Subscribers</h1>

    <a href="<?php echo get_admin_url();?>admin.php?page=mvno-activations" class="page-title-action">Add New</a>

    <hr class="wp-header-end">

    <table class="table widefat fixed" cellspacing="0">

        <thead>

        <tr>



            <th id="cb" class="manage-column column-cb check-column" scope="col"><input type="checkbox"></th>

            <th id="full_name" class="manage-column column-full_name sortable desc" scope="col">

                <a>

                    <span>Name</span>

                    <span class="sorting-indicator"></span>

                </a>

            </th>

            <th id="plan" class="manage-column column-plan num" scope="col">Plan</th>

            <th id="new_number" class="manage-column column-new_number num" scope="col">Number</th>

            <th id="imei" class="manage-column column-imei num" scope="col">IMEI</th>

            <th id="iccid" class="manage-column column-iccid num" scope="col">ICCID</th>

            <th id="status" class="manage-column column-status num" scope="col">Status</th>





        </tr>

        </thead>



        <tbody>

        <?php foreach($subscribers as $subscriber){?>

            <tr class="column-visible" valign="middle" style="text-align: center">

                <th class="check-column" scope="row">

                    <input type="checkbox" id="cb" name="plans[]" value="<?=esc_html($subscriber->ID)?>">

                </th>

                <td class="full_name column-full_name page-title" data-colname="full_name">

                    <a href="<?=admin_url('admin.php?page=mvno-activations-subscribers&sub_id='.esc_html($subscriber->ID))?>">

                        <span>

                            <?=esc_html($subscriber->full_name)?>

                        </span>

                    </a>

                </td>

                <td class="plan column-plan" data-colname="plan"><?=esc_html($subscriber->plan)?></td>

                <td class="new_number column-new_number" data-colname="new_number"><?=esc_html($subscriber->new_number)?></td>

                <td class="imei column-imei" data-colname="imei"><?=esc_html($subscriber->imei)?></td>

                <td class="iccid column-iccid" data-colname="iccid"><?=esc_html($subscriber->iccid)?></td>

                <td class="status column-status" data-colname="status"><?=esc_html($subscriber->status)?></td>



            </tr>

        <?php } ?>

        </tbody>

        <tfoot>

        <tr>



            <th id="cb" class="manage-column column-cb check-column" scope="col"><input type="checkbox"></th>

            <th id="full_name" class="manage-column column-full_name sortable desc" scope="col">

                <a>

                    <span>Name</span>

                    <span class="sorting-indicator"></span>

                </a>

            </th>

            <th id="plan" class="manage-column column-plan num" scope="col">Plan</th>

            <th id="new_number" class="manage-column column-new_number num" scope="col">Number</th>

            <th id="imei" class="manage-column column-imei num" scope="col">IMEI</th>

            <th id="iccid" class="manage-column column-iccid num" scope="col">ICCID</th>

            <th id="status" class="manage-column column-status num" scope="col">Status</th>





        </tr>

        </tfoot>

    </table>

</div>

