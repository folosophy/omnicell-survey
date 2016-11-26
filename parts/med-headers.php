<div id='med-header'>
  <div class='data med-capabilities'><h2 class='center'>CSC Capabilities</h2></div>
  <div class='data med-savings'>
    <div class='dist'>
      <?php $mods = array('labor','inventory','equipment') ?>

      <?php foreach ($mods as $mod) : ?>

        <div class='cost-module'>
          <img class='cost-icon'  src='<?php url() ?>/src/svg/<?php echo $mod ?>-icon.svg' />
          <h4><?php echo strtoupper($mod) ?></h4>
        </div>

      <?php endforeach ?>
    </div>
  </div>
  <div class='data med-values med-labels-container'>
    <div class='med-labels'>
      <?php $labels = get_field('medication_types','option') ?>

      <?php foreach ($labels as $label) : ?>

        <div>
          <div class='med-stem'></div>
          <div class='med-label'><?php echo $label['type'] ?></div>
        </div>

      <?php endforeach ?>
    </div>
  </div>
  <div class='data comments'></div>
</div>
