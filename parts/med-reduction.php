<div class='center cost-reduction' post-id='<?php the_ID() ?>'>
  <div class='reduction-types'>
    <?php $mods = array('labor','inventory','equipment') ?>

    <?php foreach ($mods as $mod) : ?>

      <div class='cost-module'>
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
