<?php


$file = 'extras/users.txt';

if(file_exists($file)) {
  //  echo readFile($file);
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'John'. PHP_EOL .'Frank'. PHP_EOL . 'MIKE';
    fwrite($handle, $contents);
    fclose($handle);

}
