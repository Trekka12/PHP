<?php
// for this example we will be using PHP implode() function: https://www.php.net/manual/en/function.implode.php
// to basically "serailize"/create a comma-separated string out of our array indices values

// imagine we have the following array
$array = [1, 2, 3];

// to print for debugging one can write the following to check the array and its values:
echo "<pre>";
print_r($array);
echo "</pre>";

// now imagine that we want to "serialize" above array into a comma-separated string to later be used in PHP PDO SQL SELECT statement to fetch e.g. e-commerce products with specific ID's
// such a SQL statement can look as follows: "SELECT * FROM products WHERE product_id IN (1,2,3)"

// to use our above array for this, we need to convert our array, into the format required for our SQL statement, and we do this using implode
$arrayString = implode(",", $array); // note we wanted a comma-separated string of the array values, so we define first param as comma (,)
echo "our now converted array string: " . $arrayString;

?>
