<?php $args = array('post_type'=>'capabilities','numberposts'=>-1,'orderby'=>'title','order'=>'ASC') ?>
<?php $posts = get_posts($args); global $post; $i = 0 ?>

<?php foreach ($posts as $post) : setup_postdata($post) ?>

  <div class='module-med center cost-reduction <?php if ($i == 0) {echo 'selected';} ?>' post-id='<?php the_ID() ?>'>
    <div>
      <td><h3 class='white center'>Cost Reduction at CSC</h3></td>
    </div>
    <div id='menu-reductions'>
      <?php $mods = array('labor','inventory','equipment') ?>

      <?php foreach ($mods as $mod) : ?>

        <div class='cost-module'>
          <img class='cost-icon'  src='<?php url() ?>/src/svg/<?php echo $mod ?>-icon.svg' />
          <h4 class='white'><?php echo strtoupper($mod) ?></h4>
          <div class='bar-graph'>
            <?php $field = get_field($mod) ?>

            <?php foreach ($field[0] as $graph) : ?>

              <div class='graph'>
                <?php for ($i = 4; $i > 0; $i--) : ?>

                  <div class='graph-val <?php if ($i > $graph) {echo 'none';} ?>'></div>

                <?php endfor ?>
              </div>

            <?php endforeach ?>
          </div>
        </div>

      <?php endforeach ?>
    </div>
  </div>

  <?php $i++ ?>

<?php endforeach; wp_reset_postdata() ?>
