<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>

    <div class="container content-wrap">
    <div class="row">
    <div class="span12">

    <?php if (is_page( 'About Us' )) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
    </div></div>

    <div class="row"><div class="span8 offset2">
    
    <div></div>
    <?php the_content(''); ?>

    <p class="small">Last updated by <?php the_modified_author(); ?> 
        on <?php the_modified_date(); ?></p>

    </div></div>
    <?php endwhile; ?>
    
    <?php else : ?>
    <h1>Not Found</h1>
    <p><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
    <?php endif; ?>




    </div>
    </div> 
    </div>

    

<?php get_sidebar(); ?>


<?php get_footer(); ?>