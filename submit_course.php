<?php
/*
Template Name: Submit Course
*/


get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <h1>Submit Course</h1>


      <?php while (have_posts()) : the_post(); ?>

      <div class="submit-course-form">
        <?php
        the_content();
        if (is_user_logged_in()) {

        ?>
        <p>Use this form to submit your course. If you attach a syllabus for your course, you will be given access to view the syllabi submitted by other instructors from their course.</p>

        <br>

        <p>All syllabi and course content is the intellectual property of the instructor, and all rights and privileges are retained by the instructor. By submitting course information and syllabi, you are giving permission to publish this information on the CDASH website.</p>

        <br>

        <hr>
        <?php
          $course = pods('course');
          $fields = array(
            'post_title',
            'course_description',
            'art_discipline',
            'science_discipline',
            'institution',
            'institution_city',
            'institution_stateprovince',
            'country',
            'online',
            'syllabus',
            'level',
            'course_code',
            'course_size',
            'course_website',
            'departmentscenters'
          );

          echo $course->form($fields, 'Submit Course', get_site_url() . '/pod-submit?new_id=X_ID_X');
        } else {
        ?>
          <p>Please <a class="inline-link" href="<?php echo get_site_url() ?>/wp-login.php?redirect_to=https%3A%2F%2Fcdash.atec.io%2Fsubmit-course%2F">login</a> or <a class="inline-link" href="<?php echo get_site_url() ?>/register">register</a> to submit a course.</p>
        <?php
        }
        ?>
      </div>

      <?php endwhile; wp_reset_query(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
