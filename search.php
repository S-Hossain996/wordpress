<?php get_header();?>
<h1>Here is the search result for <?php printf('%s', get_search_query()); ?></h1>
<?php
    if(have_posts()){
        while(have_posts()){
            the_post();?>
            
<a href="<?php echo the_permalink()?>"><h2><?php the_title(); ?></h2></a>
        <?php }
    }
get_footer();?>
