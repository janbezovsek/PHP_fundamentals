<?php









$fruits = ['apple', 'banana', 'orange'];

// Get array length
//echo count($fruits);

// Search array
//echo in_array('banana', $fruits);

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning


array_pop($fruits);
array_shift($fruits);


$chunked_array = array_chunk($fruits, 2);



//print_r($chunked_array);




// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Use Spread
//var_dump($arr4);

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

// Array of keys
$keys = array_keys($c);

// Flip keys with values
$flipped = array_flip($c);
//var_dump($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number $number";
}, $numbers);

// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 10);

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
//var_dump($sum);



?>