<div
    id="<?php echo e($this->getId('items-container')); ?>"
    class="field-scheduleeditor"
    data-control="scheduleeditor"
    data-alias="<?php echo e($this->alias); ?>"
>
    <div
        id="<?php echo e($this->getId('schedules')); ?>"
        role="tablist"
        aria-multiselectable="true"
    >
        <?php echo $this->makePartial('scheduleeditor/schedules'); ?>

    </div>
</div>
<?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/app/admin/formwidgets/scheduleeditor/scheduleeditor.blade.php ENDPATH**/ ?>