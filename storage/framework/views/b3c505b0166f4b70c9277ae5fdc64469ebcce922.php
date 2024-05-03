<?php if($outsideTabs->hasFields()): ?>
    <?php echo $this->makePartial('form/form_section', ['tabs' => $outsideTabs]); ?>

<?php endif; ?>

<?php if($primaryTabs->hasFields()): ?>
    <?php echo $this->makePartial('form/form_section', ['tabs' => $primaryTabs]); ?>

<?php endif; ?>

<?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/app/admin/widgets/form/form.blade.php ENDPATH**/ ?>