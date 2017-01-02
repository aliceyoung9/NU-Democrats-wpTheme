<?php
/*
Template Name: Executive Board Page
*/
?>

<?php get_header(); ?>

  <div class="container content-wrap eboard">
    <div class="row">
    <div class="col-xs-12">

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
                  '<div class="col-sm-2">',
                  wp_get_attachment_image(
                    $image,
                    $size,
                    false,
                    array( "class" => "pro-pic" )
                  ),
                  '</div>',
                  '<div class="col-sm-10">';
              } else {
                echo '<div class="col-sm-10 offset-sm-2">';
              }
              ?>
            <h3><?php the_sub_field('officer_name'); ?></h3>
            <h3 class="position"><?php the_sub_field('office'); ?></h3>
            <?php
              $major = get_sub_field('major');
              $hometown = get_sub_field('hometown');
              $campaigns_worked_on = get_sub_field('campaigns_worked_on');
              $favorite_democrat = get_sub_field('favorite_democrat');
              $favorite_quote = get_sub_field('favorite_quote');
              $quote_attribution = get_sub_field('quote_attribution');

              if ($major) {
                echo "<strong>Major: </strong>{$major}<br/>";
              }

              if ($hometown) {
                echo "<strong>Hometown: </strong>{$hometown}<br/>";
              }

              if ($campaigns_worked_on) {
                echo "<strong>Campaigns worked on: </strong>{$campaigns_worked_on}<br/>";
              }

              if ($favorite_democrat) {
                echo "<strong>Favorite Democrat: </strong>{$favorite_democrat}<br/>";
              }

              if ($favorite_quote) {
                echo "<strong>Favorite Quote: </strong>
                <p>
                  <blockquote>“{$favorite_quote}”";

                if ($quote_attribution) {
                  echo "<footer>{$quote_attribution}</footer>";
                }

                echo "</blockquote></p>";
              }
             ?>

             </div><!-- div class="col-sm-10 offset-sm-2" -->
           </div><!--div class="row-padded" -->
          <?php
          endwhile;
        endif; ?>

      <?php endwhile; ?>

      <?php // the_content(''); ?>
      <?php edit_post_link('Edit this Page'); ?>
      <p class="small">
        Last updated by <?php the_modified_author(); ?> on <?php the_modified_date(); ?>
      </p>

    </div> <!-- div class="col-xs-12" -->
    </div> <!-- div class="row" -->
  </div> <!-- <div class="container content-wrap eboard"-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
