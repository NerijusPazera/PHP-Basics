<?php

$boulingas = [
    'takelis_1' => [
        'busena' => 'Zaisti galima',
        'kegliai' => [
            [1],
            [0, 1],
            [0, 0, 1],
            [1, 0, 0, 1],
        ],
    ],
    'takelis_2' => [
        'busena' => 'Zaisti negalima, privemta',
        'kegliai' => [
            [0],
            [0, 0],
            [0, 0, 0],
            [0, 0, 0, 0],
        ],
    ],
];

var_dump($boulingas);
