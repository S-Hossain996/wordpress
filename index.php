
<?php get_header(); ?>
<?php echo "this is index";?>
<section class="blog_post">
  <?php if ( have_posts() ){
    while( have_posts() ){
      the_post();?>
        <div class="single_post">
            <a href="<?php echo the_permalink();?>" class="title"><?php echo the_title(); ?></a>
            <small><?php the_author(); ?></small>
            <span><?php the_time('F jS,Y'); ?></span>
            <p><?php echo the_excerpt(); ?></p>

            <?php if(has_post_thumbnail()){?>
                <a href="<?php the_permalink();?>"><?php the_post_thumbnail('post_thumb'); ?></a>
                <?php
            }?>
        </div>
    <?php }
  }?>
</section>
<?php get_footer();?>
