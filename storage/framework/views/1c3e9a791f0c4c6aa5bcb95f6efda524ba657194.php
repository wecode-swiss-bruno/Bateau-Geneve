<div class="row-fluid">
    <?php echo form_open(current_url(),
        [
            'id'     => 'edit-form',
            'role'   => 'form',
            'method' => 'POST',
        ]
    ); ?>


    <?php echo $this->renderForm(); ?>


    <?php echo form_close(); ?>

</div>

<?php /**PATH /Applications/MAMP/htdocs/bateau-geneve/app/system/views/mailtemplates/create.blade.php ENDPATH**/ ?>