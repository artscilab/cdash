<?php
/*
Template Name: syllabi
*/


get_header(); ?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main syllabi" role="main">
      <h1><?php the_title() ?></h1>

      <?php while (have_posts()) : the_post(); ?>
        <?php if(_wp_get_current_user()->has_cap('view_syllabus')): ?>

        <h3>Congrats! You are a part of the cloud curriculum.</h3>

        <a class="syllabiLink" href="<?php echo get_site_url() . "/courses?syllabusFilter=on" ?>">View courses with Syllabus</a>

        <?php else: ?>

        <p>In order to see the submitted syllabi, you must be a member of the "Cloud Curriculum".  In order to become a member, you must:</p>

        <p>Submit a course with a syllabus.</p>

        <p>OR</p>

        <p>Be a member of the Cloud Curriculum Working Group.  For more information, contact Kathryn Evans at kcevans@utdallas.edu</p>

        <p>OR</p>

        <p>Request permission from the CDASH administrator (email cdash@utdallas.edu)</p>

        <?php endif; endwhile; ?>

    </main><!-- #main -->
  </div><!-- #primary -->
  <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();

