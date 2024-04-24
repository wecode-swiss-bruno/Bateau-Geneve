<?php echo $this->makePartial('lists/list_button', ['record' => $theme, 'column' => $this->getColumn('source')]); ?>


<?php if($theme->getTheme()->isActive() && $theme->getTheme()->hasCustomData()): ?>
    <?php echo $this->makePartial('lists/list_button', ['record' => $theme, 'column' => $this->getColumn('edit')]); ?>

<?php endif; ?>

<?php echo $this->makePartial('lists/list_button', ['record' => $theme, 'column' => $this->getColumn('default')]); ?>


<?php echo $this->makePartial('lists/list_button', ['record' => $theme, 'column' => $this->getColumn('delete')]); ?>

<?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/app/system/views/themes/lists/list_buttons.blade.php ENDPATH**/ ?>