<?php get_header(); ?>

    <div class="container content-wrap">
    <div class="row">
    <div class="span12">

    <h2><?php wp_title(); ?></h2>
    <h1><?php wp_title(); ?>, Test.</h1>

    <p class="small">Last updated by <?php the_modified_author(); ?> on <?php the_modified_date(); ?></p>


    </div>
    </div> 
    </div>

    

<?php get_sidebar(); ?>


<?php get_footer(); ?>