<?php
/**
 * Created by PhpStorm.
 * User: aahladmadireddy
 * Date: 1/25/18
 * Time: 2:40 PM
 */

get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">


      <div class="resources">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="resource">
          <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>

          <?php
          $posttags = get_the_tags();
          if ($posttags) {
          ?>
          <p class="resource-date">Added on: <?php the_date() ?></p>
          <div class="taglist">
          <?php
            foreach ($posttags as $tag) {
              echo "<a class='tag' href='" . get_tag_link($tag->term_id) . "'>" . $tag->name . '</a>';
            } ?>
          </div>
            <?php
          }
          ?>
        </div>

        <?php endwhile; endif; ?>
      </div>

      <div class="nav-previous alignright"><?php next_posts_link( 'Next' ); ?></div>
      <div class="nav-next alignleft"><?php previous_posts_link( 'Previous' ); ?></div>
    </main><!-- #main -->
  </div><!-- #primary -->
  <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
