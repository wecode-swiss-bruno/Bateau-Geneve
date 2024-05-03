<tr
    class="list-header"
>
    <?php if($showDragHandle): ?>
        <th class="list-action" data-field="list-action-drag-handle"></th>
    <?php endif; ?>

    <?php if($showCheckboxes): ?>
        <th class="list-action text-nowrap" data-field="list-action-checkboxes">
            <div class="form-check">
                <input
                    type="checkbox" id="<?php echo e('checkboxAll-'.$listId); ?>"
                    class="form-check-input" onclick="$('input[name*=\'checked\']').prop('checked', this.checked)"/>
                <label class="form-check-label" for="<?php echo e('checkboxAll-'.$listId); ?>">&nbsp;</label>
            </div>
        </th>
    <?php endif; ?>

    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($column->type == 'button'): ?>
            <th class="list-action <?php echo e($column->cssClass); ?> text-nowrap"  data-field="<?php echo e($column->cssClass); ?>asfdadsf" data-field="<?php echo e($column->cssClass); ?>2345235"></th>
        <?php elseif($showSorting && $column->sortable): ?>
            <th
            data-field="<?php echo e($column->getName()); ?>"
                class="list-cell-name-<?php echo e($column->getName()); ?> list-cell-type-<?php echo e($column->type); ?> <?php echo e($column->cssClass); ?> text-nowrap"
                <?php if($column->width): ?> style="width: <?php echo e($column->width); ?>" <?php endif; ?>>
                <a
                    class="sort-col"
                    data-request="<?php echo e($this->getEventHandler('onSort')); ?>"
                    data-request-form="#list-form"
                    data-request-data="sort_by: '<?php echo e($column->columnName); ?>'">
                    <?php echo e($this->getHeaderValue($column)); ?>

                    <i class="fa fa-sort-<?php echo e(($sortColumn == $column->columnName) ? strtoupper($sortDirection).' active' : 'ASC'); ?>"></i>
                </a>
            </th>
        <?php else: ?>
            <th
                class="list-cell-name-<?php echo e($column->getName()); ?> list-cell-type-<?php echo e($column->type); ?> text-nowrap"
                data-field="<?php echo e($column->getName()); ?>"
                <?php if($column->width): ?> style="width: <?php echo e($column->width); ?>" <?php endif; ?>
            >
                <span><?php echo e($this->getHeaderValue($column)); ?></span>
            </th>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

 
</tr>
<?php /**PATH /Applications/MAMP/htdocs/bateau-geneve/app/admin/widgets/lists/list_head.blade.php ENDPATH**/ ?>