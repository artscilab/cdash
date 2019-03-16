<?php
/*
Template Name: Course Directory
*/


get_header(); ?>

<?php
$countrycodes = array(
  'AF' => 'Afghanistan',
  'AX' => 'Åland Islands',
  'AL' => 'Albania',
  'DZ' => 'Algeria',
  'AS' => 'American Samoa',
  'AD' => 'Andorra',
  'AO' => 'Angola',
  'AI' => 'Anguilla',
  'AQ' => 'Antarctica',
  'AG' => 'Antigua and Barbuda',
  'AR' => 'Argentina',
  'AU' => 'Australia',
  'AT' => 'Austria',
  'AZ' => 'Azerbaijan',
  'BS' => 'Bahamas',
  'BH' => 'Bahrain',
  'BD' => 'Bangladesh',
  'BB' => 'Barbados',
  'BY' => 'Belarus',
  'BE' => 'Belgium',
  'BZ' => 'Belize',
  'BJ' => 'Benin',
  'BM' => 'Bermuda',
  'BT' => 'Bhutan',
  'BO' => 'Bolivia',
  'BA' => 'Bosnia and Herzegovina',
  'BW' => 'Botswana',
  'BV' => 'Bouvet Island',
  'BR' => 'Brazil',
  'IO' => 'British Indian Ocean Territory',
  'BN' => 'Brunei Darussalam',
  'BG' => 'Bulgaria',
  'BF' => 'Burkina Faso',
  'BI' => 'Burundi',
  'KH' => 'Cambodia',
  'CM' => 'Cameroon',
  'CA' => 'Canada',
  'CV' => 'Cape Verde',
  'KY' => 'Cayman Islands',
  'CF' => 'Central African Republic',
  'TD' => 'Chad',
  'CL' => 'Chile',
  'CN' => 'China',
  'CX' => 'Christmas Island',
  'CC' => 'Cocos (Keeling) Islands',
  'CO' => 'Colombia',
  'KM' => 'Comoros',
  'CG' => 'Congo',
  'CD' => 'Zaire',
  'CK' => 'Cook Islands',
  'CR' => 'Costa Rica',
  'CI' => 'Côte D\'Ivoire',
  'HR' => 'Croatia',
  'CU' => 'Cuba',
  'CY' => 'Cyprus',
  'CZ' => 'Czech Republic',
  'DK' => 'Denmark',
  'DJ' => 'Djibouti',
  'DM' => 'Dominica',
  'DO' => 'Dominican Republic',
  'EC' => 'Ecuador',
  'EG' => 'Egypt',
  'SV' => 'El Salvador',
  'GQ' => 'Equatorial Guinea',
  'ER' => 'Eritrea',
  'EE' => 'Estonia',
  'ET' => 'Ethiopia',
  'FK' => 'Falkland Islands (Malvinas)',
  'FO' => 'Faroe Islands',
  'FJ' => 'Fiji',
  'FI' => 'Finland',
  'FR' => 'France',
  'GF' => 'French Guiana',
  'PF' => 'French Polynesia',
  'TF' => 'French Southern Territories',
  'GA' => 'Gabon',
  'GM' => 'Gambia',
  'GE' => 'Georgia',
  'DE' => 'Germany',
  'GH' => 'Ghana',
  'GI' => 'Gibraltar',
  'GR' => 'Greece',
  'GL' => 'Greenland',
  'GD' => 'Grenada',
  'GP' => 'Guadeloupe',
  'GU' => 'Guam',
  'GT' => 'Guatemala',
  'GG' => 'Guernsey',
  'GN' => 'Guinea',
  'GW' => 'Guinea-Bissau',
  'GY' => 'Guyana',
  'HT' => 'Haiti',
  'HM' => 'Heard Island and Mcdonald Islands',
  'VA' => 'Vatican City State',
  'HN' => 'Honduras',
  'HK' => 'Hong Kong',
  'HU' => 'Hungary',
  'IS' => 'Iceland',
  'IN' => 'India',
  'ID' => 'Indonesia',
  'IR' => 'Iran, Islamic Republic of',
  'IQ' => 'Iraq',
  'IE' => 'Ireland',
  'IM' => 'Isle of Man',
  'IL' => 'Israel',
  'IT' => 'Italy',
  'JM' => 'Jamaica',
  'JP' => 'Japan',
  'JE' => 'Jersey',
  'JO' => 'Jordan',
  'KZ' => 'Kazakhstan',
  'KE' => 'KENYA',
  'KI' => 'Kiribati',
  'KP' => 'Korea, Democratic People\'s Republic of',
  'KR' => 'Korea, Republic of',
  'KW' => 'Kuwait',
  'KG' => 'Kyrgyzstan',
  'LA' => 'Lao People\'s Democratic Republic',
  'LV' => 'Latvia',
  'LB' => 'Lebanon',
  'LS' => 'Lesotho',
  'LR' => 'Liberia',
  'LY' => 'Libyan Arab Jamahiriya',
  'LI' => 'Liechtenstein',
  'LT' => 'Lithuania',
  'LU' => 'Luxembourg',
  'MO' => 'Macao',
  'MK' => 'Macedonia, the Former Yugoslav Republic of',
  'MG' => 'Madagascar',
  'MW' => 'Malawi',
  'MY' => 'Malaysia',
  'MV' => 'Maldives',
  'ML' => 'Mali',
  'MT' => 'Malta',
  'MH' => 'Marshall Islands',
  'MQ' => 'Martinique',
  'MR' => 'Mauritania',
  'MU' => 'Mauritius',
  'YT' => 'Mayotte',
  'MX' => 'Mexico',
  'FM' => 'Micronesia, Federated States of',
  'MD' => 'Moldova, Republic of',
  'MC' => 'Monaco',
  'MN' => 'Mongolia',
  'ME' => 'Montenegro',
  'MS' => 'Montserrat',
  'MA' => 'Morocco',
  'MZ' => 'Mozambique',
  'MM' => 'Myanmar',
  'NA' => 'Namibia',
  'NR' => 'Nauru',
  'NP' => 'Nepal',
  'NL' => 'Netherlands',
  'AN' => 'Netherlands Antilles',
  'NC' => 'New Caledonia',
  'NZ' => 'New Zealand',
  'NI' => 'Nicaragua',
  'NE' => 'Niger',
  'NG' => 'Nigeria',
  'NU' => 'Niue',
  'NF' => 'Norfolk Island',
  'MP' => 'Northern Mariana Islands',
  'NO' => 'Norway',
  'OM' => 'Oman',
  'PK' => 'Pakistan',
  'PW' => 'Palau',
  'PS' => 'Palestinian Territory, Occupied',
  'PA' => 'Panama',
  'PG' => 'Papua New Guinea',
  'PY' => 'Paraguay',
  'PE' => 'Peru',
  'PH' => 'Philippines',
  'PN' => 'Pitcairn',
  'PL' => 'Poland',
  'PT' => 'Portugal',
  'PR' => 'Puerto Rico',
  'QA' => 'Qatar',
  'RE' => 'Réunion',
  'RO' => 'Romania',
  'RU' => 'Russian Federation',
  'RW' => 'Rwanda',
  'SH' => 'Saint Helena',
  'KN' => 'Saint Kitts and Nevis',
  'LC' => 'Saint Lucia',
  'PM' => 'Saint Pierre and Miquelon',
  'VC' => 'Saint Vincent and the Grenadines',
  'WS' => 'Samoa',
  'SM' => 'San Marino',
  'ST' => 'Sao Tome and Principe',
  'SA' => 'Saudi Arabia',
  'SN' => 'Senegal',
  'RS' => 'Serbia',
  'SC' => 'Seychelles',
  'SL' => 'Sierra Leone',
  'SG' => 'Singapore',
  'SK' => 'Slovakia',
  'SI' => 'Slovenia',
  'SB' => 'Solomon Islands',
  'SO' => 'Somalia',
  'ZA' => 'South Africa',
  'GS' => 'South Georgia and the South Sandwich Islands',
  'ES' => 'Spain',
  'LK' => 'Sri Lanka',
  'SD' => 'Sudan',
  'SR' => 'Suriname',
  'SJ' => 'Svalbard and Jan Mayen',
  'SZ' => 'Swaziland',
  'SE' => 'Sweden',
  'CH' => 'Switzerland',
  'SY' => 'Syrian Arab Republic',
  'TW' => 'Taiwan, Province of China',
  'TJ' => 'Tajikistan',
  'TZ' => 'Tanzania, United Republic of',
  'TH' => 'Thailand',
  'TL' => 'Timor-Leste',
  'TG' => 'Togo',
  'TK' => 'Tokelau',
  'TO' => 'Tonga',
  'TT' => 'Trinidad and Tobago',
  'TN' => 'Tunisia',
  'TR' => 'Turkey',
  'TM' => 'Turkmenistan',
  'TC' => 'Turks and Caicos Islands',
  'TV' => 'Tuvalu',
  'UG' => 'Uganda',
  'UA' => 'Ukraine',
  'AE' => 'United Arab Emirates',
  'GB' => 'United Kingdom',
  'US' => 'United States',
  'UM' => 'United States Minor Outlying Islands',
  'UY' => 'Uruguay',
  'UZ' => 'Uzbekistan',
  'VU' => 'Vanuatu',
  'VE' => 'Venezuela',
  'VN' => 'Viet Nam',
  'VG' => 'Virgin Islands, British',
  'VI' => 'Virgin Islands, U.S.',
  'WF' => 'Wallis and Futuna',
  'EH' => 'Western Sahara',
  'YE' => 'Yemen',
  'ZM' => 'Zambia',
  'ZW' => 'Zimbabwe',
);
?>

  <div class="wrap">
    <div id="primary" class="content-area">
      <main id="main" class="site-main" role="main">
        <h1>Courses</h1>
        <br>
        <?php
        $viewDetails = _wp_get_current_user()->has_cap('view_details');
        while (have_posts()) : the_post();

          $p = array('limit' => -1);
          $c = pods('course', $p);

          $allCountries = array();
          $allArtDisciplines = array();
          $allScienceDisciplines = array();
          $allInstitutions = array();

          if (0 < $c->total()) {
            while ($c->fetch()) {
              $tempC = $c->display('country');
              $tempS = $c->field('science_discipline');
              $tempA = $c->field('art_discipline');
              $tempI = $c->field('institution');
              if (!in_array($tempC, $allCountries))
                $allCountries[] = $tempC;

              if (!in_array($tempS, $allScienceDisciplines, true))
                $allScienceDisciplines[] = $tempS;

              if (!in_array($tempA, $allArtDisciplines, true))
                $allArtDisciplines[] = $tempA;

              if (!in_array($tempI, $allInstitutions))
                $allInstitutions[] = $tempI;
            }
          }

          $sorted = sort($allCountries, SORT_STRING);
          $sorted = sort($allInstitutions, SORT_STRING);
          $sorted = sort($allArtDisciplines, SORT_STRING);
          $sorted = sort($allScienceDisciplines, SORT_STRING);
          ?>

          <h3>Filter</h3>
          <div class="course-filter-form">
            <form id="courseFilterForm" action="" method="get">
              <div class="form-section">
                <div class="form-item">
                  <label for="levelFilter"></label>
                  <select name="levelFilter" id="levelFilter">
                    <option value="All">Level</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Graduate">Graduate</option>
                    <option value="Informal">Informal</option>
                    <option value="Primary">Primary & Secondary</option>
                  </select>
                </div>

                <div class="form-item">
                  <label for="countryFilter"></label>
                  <select name="countryFilter" id="countryFilter">
                    <option value="allCountries">Country</option>
                    <?php foreach ($allCountries as $coun): ?>
                      <option value="<?php echo $coun ?>"><?php echo $coun ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-item">
                  <label for="institutionFilter"></label>
                  <select name="institutionFilter" id="institutionFilter">
                    <option value="allInstitutions">Institution</option>
                    <?php foreach ($allInstitutions as $ins): ?>
                      <option value="<?php echo $ins ?>"><?php echo $ins ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>

              <div class="form-section">
                <div class="form-item">
                  <label for="artFilter"></label>
                  <select name="artFilter" id="artFilter">
                    <option value="allArt">Art Discipline</option>
                    <?php foreach ($allArtDisciplines as $art): ?>
                      <option value="<?php echo $art[0]['name'] ?>"><?php echo $art[0]['name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <div class="form-item">
                  <label for="scienceFilter"></label>
                  <select name="scienceFilter" id="scienceFilter">
                    <option value="allScience">Science Discipline</option>
                    <?php foreach ($allScienceDisciplines as $sci): ?>
                      <option value="<?php echo $sci[0]['name'] ?>"><?php echo $sci[0]['name'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>

                <?php if (_wp_get_current_user()->has_cap('view_syllabus')): ?>
                <div class="form-item">
                  <label for="syllabusFilter" class="checkboxContainer"><span class="text">Has Syllabus</span>
                    <?php if (isset($_GET['syllabusFilter'])): ?>
                      <input name="syllabusFilter" type="checkbox" checked="checked" id="syllabusFilter">
                    <?php else: ?>
                      <input name="syllabusFilter" id="syllabusFilter" type="checkbox">
                    <?php endif; ?>
                    <span class="checkmark"></span>
                  </label>
                </div>
                <?php endif; ?>

                <input type="submit">
              </div>
            </form>
          </div>

          <?php
          $whereArray = array();

          if (isset($_GET['levelFilter'])) {
            $levelFilter = $_GET['levelFilter'];

            if ($levelFilter != 'All')
              $whereArray[] = array(
                'key' => 'level',
                'value' => $levelFilter,
                'compare' => 'LIKE'
              );
          }

          if (isset($_GET['countryFilter'])) {
            $countryFilter = $_GET['countryFilter'];

            if ($countryFilter != 'allCountries') {
              $code = array_search($countryFilter, $countrycodes);

              $whereArray[] = array(
                'key' => 'country',
                'value' => $code
              );
            }
          }

          if (isset($_GET['artFilter'])) {
            $artFilter = $_GET['artFilter'];

            if ($artFilter != 'allArt')
              $whereArray[] = array(
                'key' => 'art_discipline',
                'value' => $artFilter
              );
          }

          if (isset($_GET['scienceFilter'])) {
            $scienceFilter = $_GET['scienceFilter'];

            if ($scienceFilter != 'allScience')
              $whereArray[] = array(
                'key' => 'science_discipline',
                'value' => $scienceFilter
              );
          }

          if (isset($_GET['institutionFilter'])) {
            $institutionFilter = $_GET['institutionFilter'];

            if ($institutionFilter != 'allInstitutions')
              $whereArray[] = array(
                'key' => 'institution',
                'value' => $institutionFilter
              );
          }

          if (isset($_GET['syllabusFilter'])) {
            $syllabusFilter = $_GET['syllabusFilter'];

            if ($syllabusFilter == "on") {
              $whereArray[] = array(
                'key' => 'syllabus.guid',
                'value' => 'bool(false)',
                'compare' => '!='
              );
            }
          }

          $params = array(
            'limit' => 15,  // Return all rows
            'where' => $whereArray
          );

          // Create and find in one shot
          $course = pods('course', $params);

          if (0 < $course->total()) {
            while ($course->fetch()) {
              $addedByAdmin = $course->display('added_by_admin');
              $courseName = $course->display ("post_name");
              $courseTitle = $course->display("post_title");
              $level = $course->display("level");
              $artDiscipline = $course->display("art_discipline");
              $scienceDiscipline = $course->display("science_discipline");
              $country = $course->display("country");

              $institution = $course->display("institution");
              $id = $course->display('post_author');
              $description = $course->display('course_description');

              if ($addedByAdmin == "No" || $addedByAdmin == "")
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
          else {
            echo "<h3>No Courses Found.</h3>";
          }

          echo $course->pagination(array('type' => 'advanced'));

          ?>

        <?php endwhile;
        wp_reset_query(); ?>


      </main><!-- #main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
  </div><!-- .wrap -->
<?php get_footer();