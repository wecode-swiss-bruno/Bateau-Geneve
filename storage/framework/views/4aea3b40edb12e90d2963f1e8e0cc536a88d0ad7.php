<?php echo $this->makePartial('lists/averages'); ?>


<?php echo form_open([
    'id' => 'list-form',
    'role' => 'form',
    'method' => 'POST',
]); ?>


<div class="list-table table-responsive">
    <table class="table table-hover mb-0 border-bottom">
        <thead>
        <?php if($showCheckboxes): ?>
            <?php echo $this->makePartial('lists/list_actions'); ?>

        <?php endif; ?>
        <?php echo $this->makePartial('lists/list_head'); ?>

        </thead>
        <tbody>
        <?php if(count($records)): ?>
            <?php echo $this->makePartial('lists/list_body'); ?>

        <?php else: ?>
            <tr>
                <td colspan="99" class="text-center"><?php echo e($emptyMessage); ?></td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?php echo form_close(); ?>


<?php echo $this->makePartial('lists/list_pagination'); ?>


<?php if($showSetup): ?>
    <?php echo $this->makePartial('lists/list_setup'); ?>

<?php endif; ?>
<?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/extensions/igniter/local/views/reviews/lists/list.blade.php ENDPATH**/ ?>