<?php 
  $banner = get_field('active', 'options');

if($banner){
  $inc = get_field('incident', 'options');
  $link = get_permalink($inc);
  $date = get_field('date_of_incident',  $inc);
  $mes = get_the_title($inc);
  $bg = get_field('message_bar_colour', 'options');
  $col = getContrastColor($bg);
?>
<div class="incident-banner" style="background-color: <?= $bg; ?>">
  <p class="content"><a style="color: <?= $col; ?>" href="/incidents"><span class="date"><?= $date; ?></span> - <span class="description"><?= $mes; ?></span></a></p>
</div>
<?php } ?>
<header class="site-header animate__animated animate__fadeInDown <?php if($banner){ echo 'incident-banner-active'; } ?>">
  <div class="container">
    <div class="off-canvas-menu-trigger">
      <i class="fa-solid fa-bars"></i>
      <p>Menu</p>
    </div>
    <?php //$img = get_field('site_logo', 'options'); ?>
    <a href="<?php echo get_home_url(); ?>">
    <div class="text-logo">
      <?php get_template_part('/assets/img/jet-con-full-text.svg'); ?>
    </div>
    <div class="emblem-logo">
          <?php get_template_part('/assets/img/jcc-icon.svg'); ?>
    </div> 
    </a>
    <div class="contact-link">
      <p><span>Contact</span></p>
    </div>
    
  </div>
</header>

<?php get_template_part('templates/partials/off-canvas-menu'); ?>
<?php get_template_part('templates/partials/off-canvas-contact'); ?>
