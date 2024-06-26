<div class="off-canvas-contact" style="background-image:url('/wp-content/themes/jetconcierge/assets/img/JetCon-background.gif');">
    <div class="close-bar">
        <div class="container">
            <div class="close-button">
                <div class="icon-container">
                    <?php get_template_part('/assets/img/icons/close-cross.svg'); ?>
                </div>
                <p>Close</p>
            </div>
        </div>
    </div>
    <div class="contact-area">
        <div class="container">
            <div class="contact-details">
                <h3>Contact the Club</h3>
                <p>Send us an enquiry or speak to one of our team through email or phone.</p>
                <div class="button-group">
    <p class="btn"><a href=""><?= get_field('email_address', 7); ?></a></p>
    <p class="btn"><a href=""><?= get_field('telephone_number', 7); ?></a></p>
</div>
                <div class="location">
                    <h6>Located</h6>
                    <address><?= get_field('address', 7); ?></address>
                </div>
            </div>
            <div class="form-container">
                <?= do_shortcode('[forminator_form id="607"]'); ?>
            </div>
        </div>
    </div>
</div>