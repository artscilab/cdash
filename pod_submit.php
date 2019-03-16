<?php
/*
Template Name: pod_submit
*/


get_header(); ?>

  <div class="wrap">
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
        <?php while (have_posts()) : the_post(); ?>

          <?php
          $user = wp_get_current_user();
          $user_id = $user->ID;
          $role = (array) $user->roles;

          $where = array(
            array(
              'key' => 'id',
              'value' => $_GET['new_id']
            ),
            array(
              'key' => 'post_status',
              'value' => 'Draft',
              'compare' => 'LIKE'
            )
          );
          $params = array ('where' => $where);

          $course = pods('course', $params);

          $foundSyllabus = false;

          while ($course->fetch()) {
            if ($course->display('syllabus._src'))
              $foundSyllabus = true;
          }

          if ($role[0] == 'subscriber')
            if (!$foundSyllabus)
              wp_update_user(array('ID' => get_current_user_id(), 'role' => 'instructor'));
            else
              wp_update_user(array('ID' => get_current_user_id(), 'role' => 'instructor_with_syllabus'));

          else if ($role[0] == 'instructor')
            if ($foundSyllabus)
              wp_update_user(array('ID' => get_current_user_id(), 'role' => 'instructor_with_syllabus'));

          the_content(); ?>

          <h3>Thanks for submitting your course!</h3>
          <p>You can now access additional information about each course by clicking on the title.</p>
          <p>If you have attached a syllabus, you will be able to access the syllabi of the other courses as well. If you haven't, you can still attach one at
            <a href="<?php echo get_site_url() ?>/manage-courses ">cdash.atec.io/manage-courses</a></p>
          <p>Your course will appear on the site in three to five days once it is reviewed by the administrator.</p>
          <?php

          $firstName = $user->first_name;
          $lastName = $user->last_name;

          wp_mail(
            'cdash@utdallas.edu',
            'New Course Submitted',
            'Check the courses page for a new course submitted on ' . current_time('mysql') . ' by ' . $firstName . ' ' . $lastName);

          endwhile;
          wp_reset_query();

        ?>

      </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
  </div><!-- .wrap -->

<?php get_footer();
