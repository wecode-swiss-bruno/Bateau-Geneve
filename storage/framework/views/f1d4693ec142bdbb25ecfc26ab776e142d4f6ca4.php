<div
    class="widget-container"
>
    <div
        id="<?php echo e($this->getId('container-list')); ?>"
        class="widget-list row <?php echo e(!$this->canManage ?: 'add-delete'); ?>"
        data-container-widget
    >
        <?php echo $this->makePartial('widget_list'); ?>

    </div>
</div>
<?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/app/admin/widgets/dashboardcontainer/widget_container.blade.php ENDPATH**/ ?>