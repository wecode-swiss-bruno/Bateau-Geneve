<div class="row-fluid">
    <?php echo form_open([
            'id'     => 'edit-form',
            'role'   => 'form',
            'method' => 'POST',
    ]); ?>


    <?php echo $this->renderForm(); ?>


    <?php echo form_close(); ?>

</div>
<?php /**PATH /Applications/MAMP/htdocs/bateau-geneve/app/admin/views/reservations/create.blade.php ENDPATH**/ ?>