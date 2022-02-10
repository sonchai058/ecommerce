<?php $site = $this->webinfo_model->getOnceWebMain(); ?>
<main>
    <?php $this->template->load('header/breadcrumb'); ?>

    <section>
        <div class="login-wrapper-2">
            <div class="login-logo">
                <img src="<?php echo base_url('assets/images/logo/logo-2.png'); ?>" alt="<?php echo $site['WD_Name']; ?>">
            </div>

            <?php $this->template->load('content/login'."?language=".@$_GET['language']); ?>

        </div>
        <hr>
        <div class="footer-copyright-2">
            <h5>ต้องการความช่วยเหลือ? แผนกบริการลูกค้า โทร 099 367 4224 </h5>
        </div>
    </section>  
</main>