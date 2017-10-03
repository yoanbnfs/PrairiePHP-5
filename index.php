<?php
function merge($string1, $string2){
  $result = $string1 . ' ' .$string2;
  return $result;
}
echo merge('Hello', 'world');
?>
