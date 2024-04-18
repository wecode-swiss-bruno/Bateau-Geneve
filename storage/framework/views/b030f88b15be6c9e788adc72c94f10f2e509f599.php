<p class="card-title font-weight-bold mb-0"><?php echo app('translator')->get($item->title); ?></p>
<?php if($item->parent): ?>
    <span class="text-muted">Parent: </span><?php echo app('translator')->get($item->parent->title); ?>&nbsp;&nbsp;
<?php endif; ?>
<span class="text-muted">Type: </span><?php echo e($item->type); ?>

<div
    data-properties='<?php echo json_encode($item->toArray(), 15, 512) ?>'
></div><?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/extensions/igniter/pages/views/menus/form/type_info_summary.blade.php ENDPATH**/ ?>