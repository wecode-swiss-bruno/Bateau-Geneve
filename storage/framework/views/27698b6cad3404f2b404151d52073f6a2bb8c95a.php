<div
    id="<?php echo e($this->getId()); ?>"
    class="calendar-widget"
    data-control="calendar"
    data-alias="<?php echo e($this->alias); ?>"
    data-aspect-ratio="<?php echo e($aspectRatio); ?>"
    data-editable="<?php echo e($editable ? 'true' : 'false'); ?>"
    data-day-max-event-rows="<?php echo e($eventLimit); ?>"
    data-initial-date="<?php echo e($defaultDate); ?>"
    data-locale=<?php echo e(setting('default_language')); ?>

>

    <?php if($editable): ?>
        <script type="text/template" data-calendar-popover-template>
            <?php echo $this->renderPopoverPartial(); ?>

        </script>
    <?php endif; ?>
</div>
<?php /**PATH /Applications/MAMP/htdocs/bateau-geneve/app/admin/widgets/calendar/calendar.blade.php ENDPATH**/ ?>