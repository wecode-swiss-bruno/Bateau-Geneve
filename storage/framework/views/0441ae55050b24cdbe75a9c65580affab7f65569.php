<?php $__currentLoopData = $scopes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scope): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col col-md-3 pr-md-3">
        <?php echo $this->renderScopeElement($scope); ?>

    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /Users/vladtemneanu/Library/CloudStorage/SynologyDrive-Wecode/WECODE-SHARE/_COLLABORATEURS/VLAD/LOCAL DEV/Bateau-Geneve/app/admin/widgets/filter/filter_scopes.blade.php ENDPATH**/ ?>