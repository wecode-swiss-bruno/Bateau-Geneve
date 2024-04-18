<?php if($this->previewMode): ?>
    <p class="form-control-static"><?php echo e($field->value ? e($field->value) : '&nbsp;'); ?></p>
<?php else: ?>
    <input
        type="text"
        name="<?php echo e($field->getName()); ?>"
        id="<?php echo e($field->getId()); ?>"
        value="<?php echo e($field->value); ?>"
        placeholder="<?php echo e($field->placeholder); ?>"
        class="form-control"
        autocomplete="off"
        <?php echo $field->hasAttribute('maxlength') ? '' : 'maxlength="255"'; ?>

        <?php echo $field->getAttributes(); ?>

    />
<?php endif; ?>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/admin/widgets/form/field_text.blade.php ENDPATH**/ ?>