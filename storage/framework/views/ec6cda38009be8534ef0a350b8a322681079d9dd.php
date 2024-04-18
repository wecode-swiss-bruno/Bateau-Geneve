<?php if($this->previewMode): ?>
    <p class="form-control-static"><?php echo e($field->value); ?></p>
<?php else: ?>
    <div class="field-permalink">
        <div class="input-group">
            <span class="input-group-text"><?php echo e(root_url()); ?></span>
            <input
                type="text"
                name="<?php echo e($field->getName()); ?>"
                id="input-slug"
                class="form-control"
                value="<?php echo e($field->value); ?>"
            />
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/admin/widgets/form/field_permalink.blade.php ENDPATH**/ ?>