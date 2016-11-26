<?php

add_filter('acf/load_field/name=medication', 'load_field');

function load_field($field) {
  // see all the field settings before changing
  //echo '<pre>'; print_r($field); echo '</pre>';

  $num = get_field('medication_types','option');
  $num = count($num);

  $field['max'] = $num;
  $field['min'] = $num;

  return $field;
}

function my_acf_set_repeater( $value, $post_id, $field ){

    // echo '<pre>'; print_r($value); echo '</pre>';

    // this one should consists array of the names
    $settings_values = get_field('medication_types','option');

    $i = 0;

    foreach( $settings_values as $settings_value ){

      $value[$i]['field_582e293d22e63'] = $settings_value['type'];

      $i++;

    }

    //echo '<pre>'; print_r($value); echo '</pre>';

    return $value;

}

add_filter('acf/load_value/name=medication', 'my_acf_set_repeater', 10, 3);


/*
add_filter('acf/prepare_field/name=medication_types', 'medicationTypes');

function medicationTypes($field) {

  $template = get_field_object('medication_template','option');

  // see all the field settings before changing
  echo '<pre>'; print_r($field); echo '</pre>';

  return $field;
}

add_filter('acf/prepare_field/name=medication_template', 'medication_template');

function medication_template($field) {

  echo '<pre>'; print_r($field); echo '</pre>';

  return $field;
}
