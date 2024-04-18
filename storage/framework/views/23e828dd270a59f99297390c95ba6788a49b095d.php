<?php if($this->previewMode): ?>
    <div class="form-control"><?php echo e(nl2br($field->value)); ?></div>
<?php else: ?>
    <div
        id="<?php echo e($this->getId('trl-control')); ?>"
        class="field-translatable field-translatable-textarea dropdown"
        data-control="<?php echo e($field->getConfig('controlType', 'translatable')); ?>"
        data-locale-active="<?php echo e($activeLocale->code); ?>"
        data-placeholder-field="#<?php echo e($field->getId('placeholderField')); ?>"
    >
        <textarea
            id="<?php echo e($field->getId('placeholderField')); ?>"
            class="form-control field-textarea"
            name="<?php echo e($field->getName()); ?>"
            placeholder="<?php echo app('translator')->get($field->placeholder); ?>"
            autocomplete="off"
            <?php echo $field->getAttributes(); ?>

        ><?php echo e($field->value); ?></textarea>

        <?php if($field->getConfig('controlType', 'translatable') == 'translatable'): ?>
            <button
                class="btn btn-default trl-btn<?php echo e($field->getConfig('hideLocaleSelector', false) ? ' d-none' : ''); ?>"
                data-bs-toggle="dropdown"
                data-locale-toggle
                type="button"
            ></button>

            <?php echo $this->makeTRLPartial('trlbase/locale_selector'); ?>

        <?php endif; ?>

        <?php echo $this->makeTRLPartial('trlbase/locale_values'); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/extensions/igniter/translate/formwidgets/trltextarea/trltextarea.blade.php ENDPATH**/ ?>