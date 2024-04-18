<?php if(AdminAuth::isLogged()): ?>
    <nav class="navbar navbar-top navbar-expand navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a class="logo" href="<?php echo e(admin_url('dashboard')); ?>">
                <img src="https://app.uramaki-store.com/assets/media/uploads/logo-uramaki-noir-1.png" alt="Uramaki Noir" style="width: 60px; height: auto;">

                </a>
            </div>

            <div class="page-title">
                <span><?php echo Template::getHeading(); ?></span>
            </div>

            <div class="navbar navbar-right">
                <button
                    type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navSidebar"
                    aria-controls="navSidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <?php echo $this->widgets['mainmenu']->render(); ?>

            </div>
        </div>
    </nav>
<?php endif; ?>
<?php /**PATH /home/clients/90374f62723720b37b942de7178cb4c4/sites/app.uramaki-store.com/app/admin/views/_partials/top_nav.blade.php ENDPATH**/ ?>