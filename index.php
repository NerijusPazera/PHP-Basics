<?php

$distance = rand(10, 5000);
$consumption = 7.5;
$price_l = 1.3;
$fuel_total = round($consumption / 100 * $distance, 2);
$price_trip = round($fuel_total * $price_l, 2);
$my_money = 100;

if ($price_trip > $my_money) {
    $isvada = 'Neiperkama';
} else {
    $isvada = 'Iperkama';
}

$h1 = 'Keliones skaiciuokle';
$li_1 = "Nuvaziuota distancija: $distance km";
$li_2 = "Sunaudota: $fuel_total l. kuro";
$li_3 = "Kaina: $price_trip €";
$li_4 = "Turimi pinigai $my_money €";
$p = "Isvada: Kelione $isvada";

?>
<html>
    <head>
        <title><?php print $h1; ?></title>
    </head>
    <body>
        <ul>
            <li><?php print $li_1; ?></li>
            <li><?php print $li_2; ?></li>
            <li><?php print $li_3; ?></li>
            <li><?php print $li_4; ?></li>
        </ul>
        <hr>
        <p><?php print $p; ?></p>
    </body>
</html>