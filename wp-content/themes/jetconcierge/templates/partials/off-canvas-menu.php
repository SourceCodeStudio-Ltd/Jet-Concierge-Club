<div class="off-canvas-menu">
    <div class="menu-container">
        <div class="close-menu">
            <i class="fa-solid fa-xmark"></i>
            <p>Close</p>
        </div>
        <div class="fleet-menu">
            <h5>Fleet Compendium</h5>
            <?php
            $currentID = get_the_ID();
            $args = array('post_type' => 'plane', 'posts_per_page' => '-1');
            $post_query = new WP_Query($args);
            if($post_query->have_posts() ) {
            while($post_query->have_posts() ) { $post_query->the_post();
                $plane = get_field('plane'); ?>
                <p class="plane-label" data-plane-link="<?= get_permalink(); ?>" data-plane-title="<?= get_the_title(); ?>" <?php if($plane){ ?>data-plane-url="<?= $plane['url']; ?>" data-plane-alt="<?= $plane['alt']; ?>" <?php } ?>><span><?= get_the_title(); ?></span></p>
                <?php
            }
            }
            wp_reset_postdata();
            ?>
        </div>
        <div class="video-background">
            <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/937665584?h=bbda980d37&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479&autoplay=1&background=1&muted=1&loop=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture; clipboard-write" style="position:absolute;top:0;left:0;width:100%;height:100%;" title="JCC-WallpaperVideo_Vimeo"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
        </div>
    </div>
    <div class="background">
        <div class="plane-container">
            <h3 class="title">Test Title</h3>
            <img class="plane-image" src="" alt=""/>
            <p class="btn"><a href="">Discover</a></p>
        </div>
    </div>
</div>