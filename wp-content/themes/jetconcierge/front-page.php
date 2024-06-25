<?php get_header(); ?>
	<main role="main">
		<section class="page-content">
			<div class="image-gallery-slider">
				<?php 
				$gallery = get_field('gallery');

				foreach($gallery as $img){ ?>
					<div class="slide-container">
						<img src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>"/>
					</div>
				<?php
				} ?>
			</div>
			<p class="btn discover animate__animated animate__fadeInUp"><span>Discover The Fleet</span></a>
		</section>
	</main>
<?php get_footer(); ?>
