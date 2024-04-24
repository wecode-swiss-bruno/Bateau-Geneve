
<div class="table-responsive">
    <table class="table table-borderless">
        <tr>
            <td><b><?php echo app('translator')->get('admin::lang.column_id'); ?>:</b></td>
            <td><?php echo e($customerReservation->reservation_id); ?></td>
        </tr>
        <tr>
            <td><b><?php echo app('translator')->get('igniter.reservation::default.reservations.column_status'); ?>:</b></td>
            <td>
                <span style="color: <?php echo e($customerReservation->status_color); ?>;"><?php echo e($customerReservation->status_name); ?></span>
            </td>
        </tr>
        <tr>
            <td><b><?php echo app('translator')->get('igniter.reservation::default.reservations.column_date'); ?>:</b></td>
            <td>
                <?php echo e($customerReservation->reserve_date->setTimeFromTimeString($customerReservation->reserve_time)->isoFormat($reservationDateTimeFormat)); ?>

            </td>
        </tr>
        <tr>
            <td><b><?php echo app('translator')->get('igniter.reservation::default.reservations.column_table'); ?>:</b></td>
            <td><?php echo e(implode(', ', $customerReservation->tables->pluck('table_name')->all())); ?></td>
        </tr>
        <tr>
            <td><b><?php echo app('translator')->get('igniter.reservation::default.reservations.column_guest'); ?>:</b></td>
            <td><?php echo e($customerReservation->guest_num); ?></td>
        </tr>
        <tr>
            <td><b><?php echo app('translator')->get('igniter.reservation::default.reservations.column_location'); ?>:</b></td>
            <td>
                <?php echo e($customerReservation->location->location_name); ?><br />
                <?php echo e(format_address($customerReservation->location->getAddress())); ?>

            </td>
        </tr>
        <tr>
            <td><b><?php echo app('translator')->get('admin::lang.label_name'); ?>:</b></td>
            <td><?php echo e($customerReservation->first_name); ?><?php echo e($customerReservation->last_name); ?></td>
        </tr>
        <tr>
            <td><b><?php echo app('translator')->get('admin::lang.label_email'); ?>:</b></td>
            <td><?php echo e($customerReservation->email); ?></td>
        </tr>
        <tr>
            <td><b><?php echo app('translator')->get('igniter.reservation::default.reservations.column_telephone'); ?>:</b></td>
            <td><?php echo e($customerReservation->telephone); ?></td>
        </tr>
        <tr>
            <td><b><?php echo app('translator')->get('igniter.reservation::default.reservations.column_comment'); ?>:</b></td>
            <td><?php echo e($customerReservation->comment); ?></td>
        </tr>
    </table>
</div>



<?php if($__SELF__->showCancelButton()): ?>
<hr>
<div class="mt-3 text-center">
    <?php echo controller()->renderPartial($__SELF__.'::cancel_modal'); ?>
    
    <?php if($customerReservation->reserve_date > now()): ?>
    <?php echo controller()->renderPartial($__SELF__.'::edit_button'); ?>
    <?php endif; ?>

</div>
<?php endif; ?>
