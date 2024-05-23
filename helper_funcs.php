<?php
/**
  Check variable type using PHP function gettype(): https://www.php.net/manual/en/function.gettype.php
  @param $var - variable to check type of
  @return type of var
*/
function checkVarType($var) {
  return gettype($var);
}

/**
  Return true if array is empty
  @param $array - the array to check if empty
  @return boolean true/false - true if empty, false if not 
*/
function checkIfArrayEmpty($array) {
  return !$array;
}

/**
  Check length (amount of slots) of an array using PHP function count(): https://www.php.net/manual/en/function.count.php
  @param $array - array to check the length of
  @return int - the counted amount of slots / the length of the array
*/
function checkArrayLength($array) {
  return count($array);
}

/**
  Get current datetime in the format of "Y-m-d H:i:s"
  @return string - the current datetime format
*/
function getCurrentDateTime() {
  return (new DateTime())->format('Y-m-d H:i:s');
}

/**
  Using PHP function implode(): https://www.php.net/manual/en/function.implode.php, to "serialize"/convert array into a character-separated string with character of your choice
  @param $char - the type of character you wish to separate each value of the array in the converted string
  @param $array - the array of which to "serialize"/convert into a character-separated string
  @return string - the character-separated string converted from the array
*/
function serializeArrayIntoCharSeparatedString($char, $array) {
  return implode($char, $array);
}

/**
  Print array with nice formatting
  @param $array - array to print
  @return void - echos array content with <pre></pre> formatting
*/
function printArray($array) {
  echo "<pre>";
  print_r($array);
  echo "</pre>";
}

/**
  Print a newline debug message with optional pre/post strings around the debug information
  @param $preString - (optional) text before debug information
  @param $debugInfo - the actual debug information
  @param $postString - (optional) text after debug information
  @return void - prints using echos a concatenated debug string
*/
function printDebugMsg($preString = "", $debugInfo, $postString = "") {
  echo $preString . " " . $debugInfo . " " . $postString "<br />";
}

/**
  Alternative print debug function which also prints datetime before message and allows user to concatenate own debug message to be inputted entirely and simply
  @param $debug - the concatenated debug message user provides to print
  @return void - echos the debug message with a pre datetime and a post <br /> linebreak
*/
function printSimpleDebug($debug) {
  echo date('Y-m-d H:i:s') . ": " . $debug . "<br />";
}

/**
  Get the index of a certain value within an array using PHP function array_search($needle, $haystack): https://www.php.net/manual/en/function.array-search.php
  @param $value - the value to search the index for
  @param $array - the array within which to search for the index of the value
  @return int - the index within the array of the value
*/
function getArrayValueIndex($value, $array) {
  return array_search($value, $array);
}

/**
  Check if array contains value using the PHP function in_array($value, $array): https://www.php.net/manual/en/function.in-array.php
  @param $value - value to look for within array
  @param $array - array to search to find the value
  @return boolean - true if value found, false if not
*/
function checkIfArrayContainsValue($value, $array) {
  return in_array($value, $array);
}

/**
  Check if a specific string contains a specific substring using PHP function str_contains($haystack, $needle): https://www.php.net/manual/en/function.str-contains.php
  with modification inspired from following stackoverflow thread: https://stackoverflow.com/questions/4366730/how-do-i-check-if-a-string-contains-a-specific-word
  @param $substring - the word of substring to check if its contained within the string
  @param $string - the actual string of which to check for the existence of our substring/word
  @return boolean - true if substring/word is contained within the string, false if not
*/
function checkIfStringContainsSubstring($substring, $string) {
  return ($substring !== '' && str_contains($string, $substring);
}

?>
