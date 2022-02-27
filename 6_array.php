<?php

// $user = [ "Aye Aye",30, "Mandalay"];
// echo $user['0];
// echo $user[1];
// echo $user[2];

// $user = [ 'name' => "Aye Aye", 'age' => 30, 'address' => "Mandalay"];
// echo $user['name'];
// echo $user['age'];
// echo $user['address'];

$users = [ 
    ['name' => "Aye Aye", 'age' => 30, 'address' => "Mandalay"],
    [
        'name' => "Mg Mg",
        'age' => 28, 
        'foo' => [
                    [
                        'bar' => [
                            'aaa' => [
                                'bbb' => 'ccc',
                                    '123' => [
                                        456,
                                        987 => [
                                            'apple', 'orange', 'banana'
                                        ]
                                    ]
                                ]
                        ],
                        'zzz' => 'xyz'
                    ]
                ],
        'address' => [ 'No' => 100, 'Township' => 'Lanmadaw', 'Region' => 'Yangon' ],
    ],
];

echo $users[1]['foo'][0]['zzz'];

// echo "<pre>";
// print_r($users);
// echo "</pre>";

// echo $users[1]['address'][1]['Township'];
// echo $users[0]['name'];
// echo $users[1]['address'];
// var_dump($users);
