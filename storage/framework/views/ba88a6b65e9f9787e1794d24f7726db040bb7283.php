<?php if($this->previewMode): ?>
    <span class="form-control"><?php echo e($field->value ? $field->value : '&nbsp;'); ?></span>
<?php else: ?>
    <div
        id="<?php echo e($this->getId('trl-control')); ?>"
        class="field-translatable field-translatable-text dropdown"
        data-control="<?php echo e($field->getConfig('controlType', 'translatable')); ?>"
        data-locale-active="<?php echo e($activeLocale->code); ?>"
        data-placeholder-field="#<?php echo e($field->getId('placeholderField')); ?>"
    >
        <input
            type="text"
            id="<?php echo e($field->getId('placeholderField')); ?>"
            class="form-control"
            name="<?php echo e($field->getName()); ?>"
            value="<?php echo e($field->value); ?>"
            placeholder="<?php echo app('translator')->get($field->placeholder); ?>"
            autocomplete="off"
            <?php echo $field->hasAttribute('maxlength') ? '' : 'maxlength="255"'; ?>

            <?php echo $field->getAttributes(); ?>

        />

        <?php if($field->getConfig('controlType', 'translatable') == 'translatable'): ?>
            <button
                class="btn btn-default trl-btn"
                data-bs-toggle="dropdown"
                data-locale-toggle
                type="button"
            ></button>

            <?php echo $this->makeTRLPartial('trlbase/locale_selector'); ?>

        <?php endif; ?>

        <?php echo $this->makeTRLPartial('trlbase/locale_values'); ?>

    </div>
<?php endif; ?>
<?php /**PATH /Applications/MAMP/htdocs/bateau-geneve/extensions/igniter/translate/formwidgets/trltext/trltext.blade.php ENDPATH**/ ?>