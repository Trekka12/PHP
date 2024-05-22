<?php
// https://onlinephp.io/c/b452d
// do note that this is meant as a pedagogic example mainly
// PHP defines empty array as being false, which means we can also use !$array to get a "true" when array is empty
// similarly we can use empty() function: https://www.php.net/manual/en/function.empty.php
// on stackoverflow someone commented that count might in fact take longer than just using empty() func or !$array when considering performance

$array = [];

if(count($array) == 0) {
  echo "array is empty.";
}else {
  echo "array is NOT empty.";
}
?>
