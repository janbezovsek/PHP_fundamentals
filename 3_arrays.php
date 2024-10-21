<?php

$numbers = [1,2,3,4,5];

$fruits = array('apple','orange','pear');

//var_dump($numbers);

//echo $fruits[2];

//print_r($fruits);

//Associative array
$colors = [
    1 => 'red',
    4=> 'blue',
    10 => 'yellow'
];

//echo $colors[10];



$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

//echo $hex['red'];

$person = [
    'firstname' => 'John',
    'lastname' => 'Boe',
    'email' => 'john@example.com'
];

//echo $person['lastname'];



$people = [
    [
        'firstname' => 'John',
        'lastname' => 'Boe',
        'email' => 'john@example.com'
    ],
    [
        'firstname' => 'Jack',
        'lastname' => 'Back',
        'email' => 'jack@example.com'
    ],
    [
        'firstname' => 'Mack',
        'lastname' => 'Sack',
        'email' => 'mack@example.com'
    ]
    ];

    //echo $people[1]['lastname'];

    var_dump(json_encode($people));


?>