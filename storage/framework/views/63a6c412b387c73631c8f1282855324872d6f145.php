<div class="d-flex">
    <div class="mr-3 flex-fill">
        <label class="form-label">
            <?php echo app('translator')->get('admin::lang.reservations.label_reservation_id'); ?>
        </label>
        <h3>#<?php echo e($formModel->reservation_id); ?></h3>
    </div>
    <div class="mr-3 flex-fill text-center">
        <label class="form-label">
            <?php echo app('translator')->get('admin::lang.reservations.label_table_name'); ?>
        </label>
        <h3><?php echo e($formModel->table_name); ?></h3>
    </div>
    <div class="flex-fill text-center">
        <label class="form-label">
            <?php echo app('translator')->get('admin::lang.reservations.label_guest'); ?>
        </label>
        <h3><?php echo e($formModel->guest_num); ?></h3>
    </div>
</div>
<?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/app/admin/views/reservations/form/info.blade.php ENDPATH**/ ?>