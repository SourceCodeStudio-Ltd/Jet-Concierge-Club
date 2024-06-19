<div class="off-canvas-contact">
    <div class="close-bar">
        <div class="container">
            <div class="close-button">
                <i class="fa-solid fa-xmark"></i>
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
                <?= do_shortcode('[forminator_form id="66"]'); ?>
            </div>
        </div>
    </div>
    <div class="background">
    <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/937665584?h=bbda980d37&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="JCC-WallpaperVideo_Vimeo"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
    </div>
</div>