<?php get_header(); ?>
	<main role="main">
		<?php get_template_part('templates/page-header'); ?>
		<section class="page-content">
        <?php
        $incidents = get_posts(array('post_type' => 'incident', 'fields' => 'ids', 'posts_per_page'  => -1));
        foreach($incidents as $inc){ 
            if(get_field('active', $inc)){ ?>
            <div class="incident-container">
                <div class="active"><small>Active</small></div>
                <h4><?= get_the_title($inc); ?> - <?= get_field('date_of_incident',  $inc); ?></h4>
                <p><?= get_field('incident_message', $inc); ?></p>
            </div>
        <?php }
        } ?>
		</section>
		<?php the_content(); ?>
	</main>
<?php get_footer(); ?>
