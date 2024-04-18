
<?php echo controller()->renderComponent('slider'); ?>


<div class="container py-4">
  <div class="row">
    <h1 class="h1"><?php echo lang('main::lang.menu_locations'); ?></h1>
    <?php echo controller()->renderComponent('localList'); ?>

  </div>
</div>

<?php echo controller()->renderComponent('localePicker'); ?>