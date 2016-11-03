<?php get_header(); ?>
<section class="single_post">
  <div class="single_post_area">
    <?php if(have_posts()){
      while(have_posts()){
        the_post();?>
        <h4><?php the_title(); ?></h4>
        <?php the_post_thumbnail("medium");
         the_content();
      }
    } ?>
  </div>
</section>
<?php get_footer(); ?>
