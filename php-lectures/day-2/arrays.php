<?php
$numbers = [1, 2, 3, 4, 5, 6];
print_r($numbers);

/* print_r is used to print the array in human readable format. */

$length = count($numbers);
echo "<br>length of array is $length";

$firstElement = reset($numbers);

/* reset also resests the pointer of the array to first index element. We shall discuss it when we use it. */

echo "<br>first element is $firstElement<br>";
$last = end($numbers);
echo "last item of array is $last";
$last_2 = $numbers[$length-1];
echo "<br>last element is $last_2";

array_push($numbers, 10);
echo "<br>";print_r($numbers);

array_pop($numbers);echo "<br>";

print_r($numbers);echo "<br>";
array_shift($numbers);
print_r($numbers);
echo "<br>";

array_unshift($numbers, 11);
print_r($numbers);

/* further we can read more array functions from the link https://www.learn-php.org/en/Simple_arrays */




?>