<div
    class="dropdown-menu dropdown-menu-right trl-dropdown-menu"
    data-locale-dropdown
    data-dropdown-title="<?php echo app('translator')->get('igniter.translate::lang.text_select_label'); ?>"
>
    <?php $__currentLoopData = $locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a
            class="dropdown-item"
            role="button"
            data-locale-switch="<?php echo e($code); ?>"
        ><?php echo e($name); ?></a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/extensions/igniter/translate/formwidgets/trlbase/locale_selector.blade.php ENDPATH**/ ?>