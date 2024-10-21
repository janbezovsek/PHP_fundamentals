<?php


$age = 20;

//if ($age >= 18) {
//  echo 'You are old enough to vote!';
//} else {
//  echo 'Sorry, you are too young to vote.';
//}



// Dates
// $today = date("F j, Y, g:i a");
//echo $today;


//$t = date('H');

//if ($t < 12) {
//  echo 'Have a good morning!';
//} elseif ($t < 17) {
//  echo 'Have a good afternoon!';
//} else {
//  echo 'Have a good evening!';
//}



// Check if an array is empty
// The isset() function will generate a warning or e-notice when the variable does not exists. The empty() function will not generate any warning or e-notice when the variable does not exists.

$posts = ['First post'];

// if (!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'There are no posts';
// }


//echo !empty($posts[0]) ? $posts[0] : 'There are no posts';


// Assign a variable based on a condition
// $firstPost = !empty($posts[0]) ? $posts[0] : 'There are no posts';

// $firstPost = !empty($posts[0]) ? $posts[0] : null;



// Always returns first parameter, unless first parameter happens to be NULL
$firstPost = $posts[0] ?? null;

//echo $firstPost;





$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo 'Your favorite color is red!';
    break;
  case 'blue':
    echo 'Your favorite color is blue!';
    break;
  case 'green':
    echo 'Your favorite color is green!';
    break;
  default:
    echo 'Your favorite color is not red, blue, nor green!';
}




?>