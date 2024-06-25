<section class="page-header">
  <h1 class="animate__animated animate__fadeIn">
    <?php
    if(is_home()){
      echo 'News';
    }
    else if(is_archive()){
      echo get_the_archive_title();
    }
    else{
      if(get_field('title')){
        the_field('title');
      }
      else{
        the_title();
      }
    } ?></h1>
</section>
