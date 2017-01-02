<?php
/*
Template Name: Executive Board Page
*/
?>

<?php get_header(); ?>

    <div class="container content-wrap eboard">
    <div class="row">
    <div class="col-xs-12">

    <?php if (is_page( 'Executive Board' )) : ?>
      <?php while (have_posts()) : the_post(); ?>
      <h1 id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>

        <?php
        if( have_rows('officers') ):
          // loop through the rows of data
          while ( have_rows('officers') ) : the_row();

            $image = get_sub_field('pro_pic');
            $size = 'medium'; // (thumbnail, medium, large, full or custom size)
            ?>
            <div class='row-padded'>
              <?php
              if ($image) {
                echo
                  '<div class="col-xs-2">',
                  wp_get_attachment_image(
                    $image,
                    $size,
                    false,
                    array( "class" => "pro-pic" )
                  ),
                  '</div>',
                  '<div class="col-xs-10">';
              } else {
                echo '<div class="col-xs-10 offset-xs-2">';
              }
              ?>
            <h3><?php the_sub_field('officer_name'); ?></h3>
            <h3 class="position"><?php the_sub_field('office'); ?></h3>
            <?php
              $major = get_sub_field('major');
              $hometown = get_sub_field('hometown');

              if ($major) {
                echo '<strong>Major:</strong>', $major;
              }

              if ($hometown) {
                echo '<strong>Hometown:</strong>', $hometown;
              }
             ?>

            </div>
          </div>
          <?php
          endwhile;
        endif; ?>

      <?php // the_content(''); ?>
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
