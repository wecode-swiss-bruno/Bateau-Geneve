<div id="list-items">
    <?php
        $countItems = count($updates['items']);
        $countIgnored = count($updates['ignoredItems']);
    ?>
    <?php if($countItems): ?>
        <div class="p-3 border-bottom">
            <b>
                <i class="fa fa-arrow-up fa-fw"></i>&nbsp;&nbsp;
                <?php echo e(sprintf(lang('system::lang.updates.text_update_found'), $countItems)); ?>

            </b>
        </div>

        <?php echo $this->makePartial('updates/list_items', ['items' => $updates['items'], 'ignored' => FALSE]); ?>

    <?php endif; ?>

    <?php if($countIgnored): ?>
        <div class="panel-heading">
            <b>
                <i class="fa fa-xmark fa-fw"></i>&nbsp;&nbsp;
                <?php echo e(sprintf(lang('system::lang.updates.text_update_ignored'), $countIgnored)); ?>

            </b>
        </div>

        <?php echo $this->makePartial('updates/list_items', ['items' => $updates['ignoredItems'], 'ignored' => TRUE]); ?>

    <?php endif; ?>

</div>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/system/views/updates/list.blade.php ENDPATH**/ ?>