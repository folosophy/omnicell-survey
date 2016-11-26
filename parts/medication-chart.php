<?php get_template_part('parts/med-headers') ?>
<div id='med-chart'>
  <?php $args = array('post_type'=>'capabilities','numberposts'=>-1,'orderby'=>'title','order'=>'ASC') ?>
  <?php $posts = get_posts($args); global $post ?>

  <?php foreach ($posts as $post) : setup_postdata($post) // Loop through posts ?>

      <div class='data-row' post-id='<?php the_ID() ?>'>
        <div class='data med-capabilities <?php swatch('N/A') ?>'>
          <div class='ldist'>
            <div class='remove-cap remove-icon' post-id='<?php the_ID() ?>'></div>
            <h3><?php the_title() ?></h3>
          </div>
        </div>
        <div class='data med-savings <?php swatch('N/A') ?>'>
          <?php get_template_part('/parts/med-reduction') ?>
        </div>
        <div class='med-values data'>
          <?php get_template_part('parts/medications') ?>
        </div>
        <div class='data comments'>
          <textarea class='comment' placeholder='Comments...' rows='4'></textarea>
        </div>
      </div>

  <?php endforeach; wp_reset_postdata() ?>
</div>
