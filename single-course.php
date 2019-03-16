<?php

get_header(); ?>

  <div class="wrap">
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">

        <?php
        if (!is_user_logged_in()) { ?>
        <div class="course-header">
          <p>Sorry, it looks like you are not logged in, or do not have access to the cloud curriculum.</p> 
          <p>To log in, click <a href="https://cdash.atec.io/wp-login.php">here</a></p>
          <p>To get access to the cloud curriculum, see <a href="https://cdash.atec.io/syllabi/">Cloud Syllabi</a></p>
        </div>
      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- .wrap -->

  <?php get_footer();
  die();
  }
  ?>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      $slug = pods_v(1, 'url');
      $course = pods('course', $slug);

      $addedByAdmin = $course->display('added_by_admin');
      $title = $course->display('post_title');
      $excerpt = $course->display('post_content');
      $description = $course -> display('course_description');
      $syllabusLink = $course->display('syllabus._src');
      $imageLink = $course->display('course_image._src.medium');
      $artDiscipline = $course->display('art_discipline');
      $scienceDiscipline = $course->display('science_discipline');
      $institution = $course->display('institution');
      $department = $course->display('departmentscenters');
      $country = $course->display('country');
      $id = $course->display('post_author');

      if ($addedByAdmin == "Yes")
        $instructor = array(
          "title" => $course->display('instructor.instructor_title'),
          "firstName" => $course->display('instructor.instructor_first_name'),
          "lastName" => $course->display('instructor.instructor_family_name'),
          "email" => $course->display('instructor.instructor_email'),
          "website" => $course->display('instructor.instructor_website')
        );
      else if ($addedByAdmin == "No" || $addedByAdmin == "")
        $instructor = array(
          "title" => bp_get_profile_field_data( 'field=Title&user_id=' . $id ),
          "firstName" => bp_get_profile_field_data( 'field=First Name&user_id=' . $id ),
          "lastName" => bp_get_profile_field_data( 'field=Last Name&user_id=' . $id ),
          "email" => bp_get_profile_field_data( 'field=Institutional Email&user_id=' . $id ),
          "website" => bp_get_profile_field_data( 'field=Website&user_id=' . $id )
        );

      $additionalInstructor= array(
        "title" => $course->display('additional_instructor.instructor_title'),
        "firstName" => $course->display('additional_instructor.instructor_first_name'),
        "lastName" => $course->display('additional_instructor.instructor_family_name'),
        "email" => $course->display('additional_instructor.instructor_email'),
        "website" => $course->display('additional_instructor.instructor_website')
      );
      $courseSize = $course->display('course_size');
      $courseCode = $course->display('course_code');
      $firstOffered = array(
          'month' => $course->display('first_offered_month'),
          'year' => $course->display('first_offered_year')
      );
      $lastOffered = array(
        'month' => $course->display('last_offered_month'),
        'year' => $course->display('last_offered_year')
      );
      $courseWebsite = $course->display('course_website');
      $postDate = $course->display('post_date');

      if ( $course->exists() ): ?>

      <div class="course-header">
        <h1 class="course-title"><?php echo $title ?></h1>
        <?php echo $description ?>
        <p>Art Discipline: <span class="discipline"><?php echo $artDiscipline ?></span>, Science Discipline: <span class="discipline"><?php echo $scienceDiscipline ?></span></p>

        <?php if (_wp_get_current_user()->has_cap('view_syllabus')) :
          if ($syllabusLink) { ?>
          <h3 class="syllabus-link">Syllabus: <a target="_blank" href="<?php echo $syllabusLink ?>">Download</a></h3>
        <?php } else { ?>
          <h3 class="syllabus-link">Syllabus was not provided. Contact the instructor for more information.</h3>
        <?php }
        endif; ?>
      </div>

      <div class="course-content">
        <?php
        if ($institution): ?>
          <div class="course-info-block">
            <h3>Institution: <?php echo $institution ?></h3>
            <?php echo $department ? '<p>Department: '. $department . '</p>' : null ?>
            <?php echo $country ? '<p>Country: '. $country . '</p>' : null ?>
          </div>
        <?php endif; ?>

        <div class="course-info-block">
          <h3>Instructor: <?php echo $instructor['firstName'] . " " . $instructor['lastName'] ?></h3>
          <p>Website: <?php echo '<a href="' . $instructor['website'] . '">' . $instructor['website'] . '</a>' ? $instructor['website'] : "website not provided"; ?></p>
          <p>Email: <?php echo $instructor['email']  ? $instructor['email'] : "email not provided"; ?></p>
        </div>
        <?php if($additionalInstructor['firstName']) { ?>
        <div class="course-info-block">
          <h3>Additional Instructor: <?php echo $additionalInstructor['firstName']; ?></h3>
          <p>Website: <?php echo $additionalInstructor['website']  ? $additionalInstructor['website'] : "website not provided"; ?> </p>
          <p>Email: <?php echo $additionalInstructor['email']  ? $additionalInstructor['email'] : "email not provided"; ?></p>
        </div>
        <?php } ?>

        <?php if($courseCode || $courseSize || ($firstOffered['month'] && $firstOffered['year'])) { ?>
        <div class="course-info-block">
          <h3>Course Details</h3>
          <?php echo $courseSize ? "<p>Course Size: " . $courseSize . "</p>" : ""; ?>
          <?php echo $courseCode ? "<p>Course Code: " . $courseCode . "</p>" : ""; ?>
          <?php if($firstOffered['month'] && $firstOffered['year']) { ?>
              <p><?php echo "This course was first offered in " . $firstOffered['month'] . ", " . $firstOffered['year'] . "."?></p>
          <?php } ?>
          <?php if($lastOffered['month'] && $lastOffered['year']) { ?>
              <p><?php echo "This course was last offered in " . $lastOffered['month'] . ", " . $lastOffered['year'] . "."?></p>
          <?php } ?>
        </div>
        <?php } ?>

        <?php echo $courseWebsite ? "<p>Course Website: " . $courseWebsite . "</p>" : ""; ?>
        <p>Posted on: <?php echo $postDate ?></p>

        <?php if ($addedByAdmin == "Yes"): ?>
        <p>This course was added by the CDASH team from a publicly available website.</p>
        <?php endif; ?>
      </div>
    </div>

      <?php else :
        echo "Pod Not Found";

      endif;

      endwhile;

      else : ?>
        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

      </main><!-- #main -->
    </div><!-- #primary -->
  </div><!-- .wrap -->

<?php get_footer();