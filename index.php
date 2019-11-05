<?php
$kates = rand(1, 3);
$sunys = rand(1, 3);
$katasuniai = 0;

for ($x = 0; $x < $kates; $x++) {
    for ($y = 0; $y < $sunys; $y++) {
        $pavyko = rand(0, 1);
        if ($pavyko) {
            $katasuniai++;
            break;
        }
    }
}

$h1 = 'Katašunių Išeiga';
$h2 = "Dalyvavo $kates katės ir $sunys šunys";
$h3 = "Katašunių išeiga : $katasuniai";
?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php print $h1; ?></title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3; ?></h3>
    </body>
</htm