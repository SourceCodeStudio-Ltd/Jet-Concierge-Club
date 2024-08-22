 <?php

 $img = get_field('plane');
 $specs = get_field('specifications');
 $features = get_field('features');
 $tour = get_field('virtual_tour_link'); ?>
 
<?php get_template_part('templates/page-header'); ?>
<div class="plane-image-container animate__animated animate__fadeInRight">
  <img class="plane-image" src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>"/>
</div>

<div class="button-group animate__animated animate__fadeInUp">
 <?php if($specs OR $features){ ?>
  <p class="btn specification-trigger"><span>Specifications<i class="fa-solid fa-arrow-right"></i></span></p>
  <?php 
 } ?>
 <?php if($tour){ ?>
  <p class="btn"><a target="_blank" href="<?= $tour; ?>">Virtual Tour<i class="fa-solid fa-arrow-right"></i></a></p>
  <?php 
 } ?>
</div>
<div class="prev-next-plan-links">
  <?php 
  $nextpost = get_adjacent_post(false,'',true);
  if($nextpost){
    $nxt = get_permalink($nextpost->ID); 
    ?>
  <?php
  }
  else{
    $planes = get_posts(array('post_type' => 'plane', 'orderby' => 'menu_order', 'order' => 'DESC', 'fields' => 'ids', 'posts_per_page'  => -1));
    $nxt = get_permalink($planes[0]);
  }

  if($nxt){ ?>
    <div class="next-link">
      <a href="<?= $nxt; ?>"><i class="fa-solid fa-arrow-right"></i></a>
    </div>
  <?php
  }
  $prevpost = get_adjacent_post(false,'',false);
  if($prevpost){
    $pre = get_permalink($prevpost->ID);
  } 
  else{
    $planes = get_posts(array('post_type' => 'plane', 'orderby' => 'menu_order', 'order' => 'DESC', 'fields' => 'ids', 'posts_per_page'  => -1));
    $count = count($planes);
    $pre = get_permalink($planes[$count - 1]);
  }
  if($pre){ ?>
    <div class="prev-link">
      <a href="<?= $pre; ?>"><i class="fa-solid fa-arrow-left"></i></a>
    </div>
  <?php
  }?>
 
</div>

<?php if($specs OR $features){ ?>
  <div class="off-canvas-specs">
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
    <div class="specifications-gallery">
      <div class="container">
        <div class="specification-features">
          <h3><?= get_the_title(); ?></h3>
          <div class="specifications">
            <?php $specs = get_field('specifications'); 
            if($specs){ ?>
              <p>Specifications</p>
              <div class="spec-container">
                <div class="icon">
                  <i class="fa-solid fa-plane"></i>
                </div>
                <div class="content">
                  <p>Aircraft Type</p>
                  <p><?= $specs['aircraft_type']; ?></p>
                </div>
              </div>
              <div class="spec-container">
                <div class="icon">
                  <i class="fa-solid fa-calendar-days"></i>
                </div>
                <div class="content">
                  <p>Year of Manufacture</p>
                  <p><?= $specs['year_of_manufacture']; ?></p>
                </div>
              </div>
              <div class="spec-container">
                <div class="icon">
                  <i class="fa-solid fa-people-group"></i>
                </div>
                <div class="content">
                  <p>Seating Capacity</p>
                  <p><?= $specs['capacity']; ?></p>
                </div>
              </div>
            <?php  
            }?>
            
          </div>
          <div class="features">
            <?php 
            $features = get_field('features'); 
            if($features){
              foreach($features as $fea){ ?>
                <div class="feature-container">
                  <p><?= $fea['feature_label']; ?></p>
                  <p><?= $fea['feature_content']; ?></p>
                </div>
              <?php 
              }
            } ?>
          </div>
        </div>
        <div class="gallery-container">
          <?php 
          $gallery = get_field('plane_gallery'); 
          if($gallery){ ?>
          <div class="view-full"><i class="fa-solid fa-maximize"></i></div>
            <div class="gallery">
              <?php    
              
              foreach($gallery as $img){ ?>
                <img src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>"/>
              <?php
              }?>
            </div>
          <?php } ?>
        </div>
      </div>
      
    </div>
  </div>
<?php
} ?>

<?php 
 $gallery = get_field('plane_gallery'); 
 if($gallery){ ?>
  <div class="gallery-full-screen">
    <div class="close-full"><i class="fas fa-window-close"></i></div>
    <div class="gallery-controls">
      <div class="prev">
        <i class="fa-solid fa-arrow-left"></i>
      </div>
      <div class="next">
        <i class="fa-solid fa-arrow-right"></i>
      </div>
    </div>
    <div class="gallery">
      <?php
      foreach($gallery as $img){ ?>
        <img src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>"/>
      <?php
      } ?>
   </div>
  </div>  
<?php
 }?>

           

