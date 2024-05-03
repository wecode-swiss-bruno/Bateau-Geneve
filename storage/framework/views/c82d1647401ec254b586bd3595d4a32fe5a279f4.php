<input type="hidden" data-media-type="current-folder" value="<?php echo e($currentFolder); ?>"/>

<?php if($items): ?>
    <?php echo $this->makePartial('mediamanager/list_grid'); ?>

<?php else: ?>
    <p><?php echo app('translator')->get('admin::lang.text_empty'); ?></p>
<?php endif; ?>
<?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/app/main/widgets/mediamanager/item_list.blade.php ENDPATH**/ ?>