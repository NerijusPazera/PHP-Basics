<?php
$bin_vol = 40;
$bin_heap_vol = rand(1, 10);
$trash_per_day = 15;
$h1 = 'Siuksliu prognoze';
$p_turima = "Turima siuksline - $bin_vol litru";
$p_nepyksta = "Zmona nieko nesako, kol kaupas nevirsyja $bin_heap_vol litru";
$days = floor(($bin_vol + $bin_heap_vol) / $trash_per_day);
$h3 = "Isvada: Nieko nedarysiu $days dienas";
?>
<html>
    <head>
        <title>Siuksles</title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <p><?php print $p_turima; ?></p>
        <p><?php print $p_nepyksta; ?></p>
        <h3><?php print $h3; ?></h3>
    </body>
</html>