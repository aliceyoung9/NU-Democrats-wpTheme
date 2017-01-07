<?php
/*
Template Name: About Page
*/
?>

<?php get_header(); ?>

    <div class="container heavy-padded-bottom">
    <div class="row">
    <div class="col-xs-12">

      <?php while (have_posts()) : the_post(); ?>

        <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>

        <div class="row">
          <div class="col-md-10 offset-md-1 about">
            <?php the_content(''); ?>
          </div>
        </div>

        <?php edit_post_link('Edit this Page'); ?>
        <p class="small">Last updated by <?php the_modified_author(); ?>
            on <?php the_modified_date(); ?></p>
      <?php endwhile; ?>

    </div>
    </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
