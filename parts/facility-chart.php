<?php $args = array('post_type'=>'capabilities','numberposts'=>-1,'orderby'=>'title','order'=>'ASC') ?>
<?php $posts = get_posts($args); global $post; $i = 0 ?>

<table id='facility-chart-labels'>
  <tr class='facility-chart-labels'>
    <td class='facility-chart-label'>Overall Value</td>
    <td class='facility-chart-label'></td>
    <td class='facility-chart-label'>General Storage</td>
    <td class='facility-chart-label'>Manual Pharmacy</td>
    <td class='facility-chart-label'>Cabinet & Cart</td>
    <td class='facility-chart-label'>Nurse Server</td>
    <td class='facility-chart-label'>Robot-Rx Pharmacy</td>
    <td class='facility-chart-label'>Redrock Pharmacy</td>
  </tr>
</table>

<div id='facility-chart'>

  <?php foreach ($posts as $post) : setup_postdata($post) // Loop through posts?>

      <table class='facility-chart <?php if ($i == 0) {echo 'selected';} ?>' post-id='<?php the_ID() ?>'>

        <?php if (have_rows('facility_value_chart')) : ?>

          <?php $keys = get_field('facility_value_chart') ?>
          <?php $keys = array_keys($keys[0]); $i = 0 ?>

          <?php while (have_rows('facility_value_chart')) : the_row() // Loop through facilities ?>

            <?php foreach ($keys as $key) : ?>

              <?php $object = get_sub_field_object($keys[$i]) ?>

              <?php while (have_rows($keys[$i])) : the_row() // Loop through table row ?>

                <?php $overall = get_sub_field('overall_value') ?>
                <?php $sub_keys = get_sub_field('services') ?>
                <?php $sub_keys = array_keys($sub_keys[0]); $iii = 0 ?>

                <?php while (have_rows('services')) : the_row() // Loop through services ?>

                  <tr class='table-row'>
                    <td class='<?php swatch($overall) ?> overall-value'><?php echo $overall ?></td>
                    <td class='value-none facility-type'><?php echo $object['label'] ?></td>

                    <?php foreach ($sub_keys as $sub_key) : ?>

                      <?php $val =  get_sub_field($sub_key) ?>

                      <td class='<?php swatch($val) ?> service'></td>

                      <?php $iii++ ?>

                    <?php endforeach ?>

                  </tr>

                <?php endwhile ?>

              <?php endwhile ?>

              <?php $i++ ?>

            <?php endforeach ?>

          <?php endwhile ?>

        <?php endif ?>
      </table>

    <?php $i++ // Post Counter ?>

  <?php endforeach; wp_reset_postdata() ?>

</div>
