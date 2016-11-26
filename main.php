<?php /* Template Name: Main */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<title><?php bloginfo('name'); ?> | <?php the_title() ?></title>
<?php wp_head(); ?>
</head>

<html>
<body>
<?php get_header(); ?>
<!-- Begin Page Content -->

<?php if (is_user_logged_in()) : ?>

  <div id='page'>
    <div id='menu-container'>
        <div id='menu-header' class='pad'>CSC Capabilities</div>
        <div id='view-saved'>
          <h3 class='white'>View Saved (<span id='saved-count'></span>)</h3>
        </div>
        <div id='menu-items'>
          <div class='top'>
            <?php $args = array('post_type'=>'capabilities','numberposts'=>-1,'orderby'=>'title','order'=>'ASC') ?>
            <?php $posts = get_posts($args); global $post; $i == 0 ?>

            <?php foreach ($posts as $post) : setup_postdata($post) ?>

              <div class='menu-item dist <?php if ($i == 0) {echo 'selected';} ?>' post-id='<?php the_ID() ?>'>
                <div class='menu-item-title' post-id='<?php the_ID() ?>'><?php the_title() ?></div>
                <div class='menu-item-save save-cap' post-id='<?php the_ID() ?>'>Save</div>
              </div>

              <?php $i++ ?>

            <?php endforeach; wp_reset_postdata() ?>
          </div>
        </div>
        <div id='menu-reduction' class='center module'>
          <?php get_template_part('parts/cost-reduction') ?>
        </div>
      </div>
    </td> <!-- End Menu -->
    <div id='facilities-section'>
      <div id='nav'>
        <div id='medication-nav' class='medication-module'>
          <div id='chart-back'>
            <img id='chart-back-arrow' src='<?php url() ?>/src/svg/left-arrow.svg' />
            <h3 class='last'>View Chart</h3>
          </div>
          <a id='save' href='<?php echo wp_logout_url() ?>'>
            <img id='save-icon' src='<?php url() ?>/src/svg/save-icon.svg' />
            <h3 id='save-text' class='last'>Save & Close</h3>
          </a>
        </div>
        <?php

          if (is_user_logged_in()) {

            $user = get_currentuserinfo();
            $fname = $user->first_name;
            $lname = $user->last_name;
            $user_id = 'user_' . $user->ID;
            $facility = get_field('facility_name',$user_id);
            $info = $fname . ' ' . $lname . ', ' . $facility;

          } else {$info = 'Mary Smith, General Hospital';}

        ?>

        <div id='user-info'><?php echo $info ?></div>
      </div>
      <div class='legend module lg'>
        <?php get_template_part('parts/legend') ?>
      </div>
      <div id='facility-charts'>
        <?php get_template_part('parts/facility-chart') ?>
      </div>
      <div id='med-chart-wrapper' class='medication-module'>
        <?php get_template_part('parts/medication-chart') ?>
      </div>
    </div>
  </div>
  <div id='service-info'>
    <div id='service-info-text'></div>
  </div>

<?php else : ?>

  <?php get_template_part('parts/users/gateway') ?>

<?php endif ?>

<!-- End Page Content -->
<?php get_footer(); ?>
</body>
</html>
