<div
    id="<?php echo e($this->getId('trl-control')); ?>"
    data-control="trlricheditor"
    data-textarea-element="#<?php echo e($this->getId('textarea')); ?>"
    data-locale-active="<?php echo e($activeLocale->code); ?>"
    data-placeholder-field="#<?php echo e($this->getId('textarea')); ?>"
    class="field-translatable field-translatable-richeditor size-<?php echo e($size); ?>"
>

    <div class="dropdown">
        <button
            class="btn btn-default trl-btn"
            data-bs-toggle="dropdown"
            data-locale-toggle
            type="button">
        </button>

        <?php echo $this->makeTRLPartial('trlbase/locale_selector'); ?>

    </div>

    <?php echo $richeditor; ?>


    <?php echo $this->makeTRLPartial('trlbase/locale_values'); ?>

</div>
<?php /**PATH /Applications/MAMP/htdocs/bateau-geneve/extensions/igniter/translate/formwidgets/trlricheditor/trlricheditor.blade.php ENDPATH**/ ?>