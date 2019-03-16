<?php
/*
Template Name: Manage Your Courses
*/


get_header();
function manage() {
  echo 'manage_called';
}
?>

  <div class="wrap">
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
        <?php while (have_posts()) : the_post(); ?>

          <div class="submit-course-form">
            <?php
            the_content();
            $course = pods('course');

            $fields = array (
              'post_title',
              'art_discipline',
              'science_discipline',
              'level',
              'course_code',
              'course_size',
              'course_website',
              'institution',
              'institution_city',
              'institution_stateprovince',
              'departmentscenters',
              'country',
              'syllabus'
            );

            if (current_user_can('administrator'))
              $uiArray = array(
                'fields' => array (
                  'edit' => $fields,
                  'add' => $fields,
                  'duplicate' => $fields,
                  'manage' => array ('post_title')
                )
              );
            else
              $uiArray = array(
                'where' => array (
                  'manage' => "t.post_author = '" . get_current_user_id() . "'"
                ),
                'fields' => array (
                  'edit' => $fields,
                  'add' => $fields,
                  'duplicate' => $fields,
                  'manage' => array ('post_title')
                )
              );

            $course->ui = $uiArray;

            pods_ui($course, false);
            ?>
          </div>

        <?php endwhile; wp_reset_query(); ?>

      </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
  </div><!-- .wrap -->

<?php get_footer();
