<?php if(strlen($buttonAttributes = $this->getButtonAttributes($record, $column))): ?>
    <a <?php echo $buttonAttributes; ?>>
        <?php if($column->iconCssClass): ?>
            <i class="<?php echo e($column->iconCssClass); ?>"></i>
        <?php endif; ?>
    </a>
<?php endif; ?>
<?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/app/admin/widgets/lists/list_button.blade.php ENDPATH**/ ?>