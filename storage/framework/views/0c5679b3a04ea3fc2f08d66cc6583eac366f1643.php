<?php echo form_open([
'id' => 'list-form',
'role' => 'form',
'method' => 'POST',
]); ?>



<table id="printable-table" class="table-responsive" data-show-print="true">
    <thead style="display: none;" class="d-none">

        <?php echo $this->makePartial('lists/list_head'); ?>

    </thead>
    <tbody style="display: none;">
        <?php if(count($records)): ?>
        <?php echo $this->makePartial('lists/list_body'); ?>

        <?php else: ?>
        <tr>
            <td colspan="99" class="text-center"><?php echo e($emptyMessage); ?></td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>


<div id="<?php echo e($this->getId()); ?>" class="list-table table-responsive">
    <table id="<?php echo e($this->getId('table')); ?>" class="table table-hover mb-0 border-bottom" data-show-print="true">
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

<?php endif; ?><?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/app/admin/widgets/lists/list.blade.php ENDPATH**/ ?>