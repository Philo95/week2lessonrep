<?php

$student_info_keys = [
    'name',
    'age',
    'dob'
];

$students = [
    ['Shaun McKinnon',
    44,'12-22-1978'],

    ['Phil Cloutier',
    27,'03-16-1995'],

    ['Arthur Morgan',
    40,'10-4-1860']
];

$aa_students = [
[
    "name" => "Shaun McKinnon",
    "age" => 44,
    "dob" => "1978-12-22"
],
[
    "name" => "Phil",
    "age" => 27,
    "dob" => "2001-01-18"
]
];

foreach($aa_students as $student) {
    echo $student["age"];
};