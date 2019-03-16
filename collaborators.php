<?php
/*
Template Name: Collaborator Directory
*/

get_header();

$params = array(
  'limit'   => 0  // Return all rows
);
$collaborator = pods('collaborator', $params);
?>

<div class="wrap">
  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <div class="collaborators-container">
        <?php
        if ( 0 < $collaborator->total() ): while ($collaborator->fetch()):
          $name = $collaborator->display('full_name');
          $uni  = $collaborator->display('associated_university');
          $city = $collaborator->display('city');
          $country = $collaborator->display('country');
          $bio = $collaborator->display('bio');
          $portrait = $collaborator->display('portrait');
          $website = $collaborator->display('website');
          ?>

        <div class="collaborator">
          <div class="picture">
            <img src="<?php echo $portrait ?>" alt="">
          </div>
          <div class="namepanel">
            <h3><?php echo $name ?></h3>
            <p><?php echo $uni ?></p>
          </div>
          <button class="open">Bio</button>
          <div class="hidden-panel">
            <div class="hidden-content">
              <div class="bio">
                <p><?php echo $bio ?></p>
              </div>
              <button class="close">Close</button>
            </div>
          </div>
        </div>
        <?php  endwhile; endif; ?>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->
  <?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();