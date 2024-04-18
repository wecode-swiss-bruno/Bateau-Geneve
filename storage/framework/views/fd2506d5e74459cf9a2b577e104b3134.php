<?php echo form_open([
    'class' =>'locale-picker-form'
]); ?>

<select
    name="locale"
    data-request="<?php echo e($__SELF__.'::onSwitchLocale'); ?>"
    class="form-select locale-picker"
    autocomplete="off"
>
    <?php $__currentLoopData = $__SELF__->locales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $code => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option
            value="<?php echo e($code); ?>"
            <?php echo e($code == $__SELF__->activeLocale ? 'selected' : ''); ?>

        ><?php echo e($name); ?></option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php echo form_close(); ?>


