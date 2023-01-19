<?php
$my_arr_constructor = array(4,3,"f",6);

$my_arr_literal = [4,"fart"];

$my_arr_init_vals = ['a', 1, true, 5.6];

$mixed_arr = [
    'Phil',
    true,
    44,
    80.62
];

array_push($mixed_arr, "I like cats", );
$mixed_arr[] = "I like dogs";

array_unshift($mixed_arr, false);

array_pop($mixed_arr);
//takes off the end

array_shift($mixed_arr);
//takes off the beginning

array_splice($mixed_arr, 3, 1); //index, then number of elements you want to remove

$mixed_arr[] = [
    "hello",
    "world"
];

$mixed_arr[3] = "I like hotdogs";