<?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <input
        type="hidden"
        name="<?php echo e($field->getName('TRLTranslate').'['.$code.']'); ?>"
        value="<?php echo e($this->getLocaleValue($code)); ?>"
        data-locale-value="<?php echo e($code); ?>"
        <?php echo $field->getAttributes(); ?>

    />
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/extensions/igniter/translate/formwidgets/trlbase/locale_values.blade.php ENDPATH**/ ?>