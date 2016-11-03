<?php get_header();

echo "page.PHP";

if(have_posts()){
    while(have_posts()){
        the_post()?>
        <h2><?php echo the_title();?></h2>
        <?php echo the_content();?>
    <?php }
}

get_footer();?>