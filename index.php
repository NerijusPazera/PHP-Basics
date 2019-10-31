<?php
$distance = rand(10, 300);
$consumption = 7.5;
$price_l = 1.3;
$fuel_total = round($consumption / 100 * $distance, 2);
$price_trip = round($fuel_total * $price_l, 2);
$h1 = 'Keliones skaiciuokle';
$li_1 = "Nuvaziuota distancija: $distance";
$li_2 = "Sunaudota: $fuel_total l. kuro";
$li_3 = "Kaina: $price_trip pinigu";
?>
<html>
    <head>
        <title>Kuras</title>
    </head>
    <body>
        <ul>
            <li><?php print $li_1; ?></li>
            <li><?php print $li_2; ?></li>
            <li><?php print $li_3; ?></li>
        </ul>
    </body>
</html>