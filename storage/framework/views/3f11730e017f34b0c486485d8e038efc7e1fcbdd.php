<input type="hidden" data-media-type="current-folder" value="<?php echo e($currentFolder); ?>"/>

<?php if($items): ?>
    <?php echo $this->makePartial('mediamanager/list_grid'); ?>

<?php else: ?>
    <p><?php echo app('translator')->get('admin::lang.text_empty'); ?></p>
<?php endif; ?>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/main/widgets/mediamanager/item_list.blade.php ENDPATH**/ ?>