<?php get_header();?>
<?php echo "this is home page";?>
<div class="search_form">
    <?php get_search_form();?>

    <h4>The dynamic sidebar function</h4>
   	<ul>
   		<?php if( !dynamic_sidebar('main_sidebar') ){
   			echo "No sidebar";
   		}?>
   	</ul>
</div>

<section class="working_post" style="border: 1px solid red">
	<div class="all_posts">

		<?php 
			$test = new WP_Query("post_type=learning");

			if($test->have_posts()){
				while($test->have_posts()){
					$test->the_post();
                                        echo get_post_meta(get_the_ID(), 'new_hope' , true);
					the_title();
					the_content();
				}	
			}
			else{
				echo 'no posts';
			}?>

			<?php  echo "hi"; ?>
	</div>
</section>
<?php get_footer()?>
