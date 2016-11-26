<?php

function swatch($v) {

  if ($v == 'N/A') {echo 'value-none';}
  elseif ($v == 1) {echo 'value-one';}
  elseif ($v == 2) {echo 'value-two';}
  elseif ($v == 3) {echo 'value-three';}
  elseif ($v == 4) {echo 'value-four';}
  elseif ($v == 5) {echo 'value-five';}
  else {echo 'value-none';}

}
