<?php
/*
Template Name: Executive Board Page
*/
?>

<?php get_header(); ?>

    <div class="container content-wrap eboard">
    <div class="row">
    <div class="span12">

    <?php if (is_page( 'Executive Board' )) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
    
    <?php the_content(''); ?>
    <?php edit_post_link('Edit this Page'); ?>
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
