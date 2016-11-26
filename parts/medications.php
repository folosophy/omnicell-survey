<?php $field = get_field('medication') ?>

<?php // echo var_dump($field) ?>

<table class='full'>
  <tr>
    <?php foreach ($field as $med) : ?>

      <td>
         <div class='<?php swatch($med['value']) ?> med-value'></div>
      </td>

    <?php endforeach ?>
  </tr>
</table>
