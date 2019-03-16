<?php
/**
 * Created by PhpStorm.
 * User: aahladmadireddy
 * Date: 2/22/18
 * Time: 9:07 PM
 */

$course = pods('course', $params);

if (0 < $course->total()) {
  while ($course->fetch()) {
    $addedByAdmin = $course->display('added_by_admin');
    $courseName = $course->display("post_name");
    $courseTitle = $course->display("post_title");
    $level = $course->display("level");
    $artDiscipline = $course->display("art_discipline");
    $scienceDiscipline = $course->display("science_discipline");
    $country = $course->display("country");

    $institution = $course->display("institution");
    $id = $course->display('post_author');
    $description = $course->display('course_description');

    if ($addedByAdmin == "")
      $instructorName = bp_get_profile_field_data('field=First Name&user_id=' . $id) . " " . bp_get_profile_field_data('field=Last Name&user_id=' . $id);
    else if ($addedByAdmin == "Yes")
      $instructorName = $course->display('instructor');

    echo "<div class='course-listing-item'><h3>";

    if ($viewDetails)
      echo "<a href=\"http://cdash.atec.io/course/$courseName/\">$courseTitle</a>";
    else
      echo $courseTitle;

    echo "</h3><p>Instructor: $instructorName <br>Level: $level <br> Art Discipline: $artDiscipline <br> Science Discipline: $scienceDiscipline <br> Country: $country <br> Institution: $institution </p>";

    if (!is_user_logged_in())
      echo "<p class='login-prompt'><a class='inline-link' href=" . get_site_url() . "/wp-login.php?redirect_to=https%3A%2F%2Fcdash.atec.io%2Fcourses%2F>Log in</a> to view more details.</p>";

    else {
      echo "<br><p>" . $description . "</p>";

    }

    echo "</div>";
  } // end of books loop
} // end of found books