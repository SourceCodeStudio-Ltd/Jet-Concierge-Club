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
    </div>
    <div class="background">
        <div class="plane-container">
            <h3 class="title">Test Title</h3>
            <img class="plane-image" src="" alt=""/>
            <p class="btn"><a href="">Discover</a></p>
        </div>
    </div>
</div>