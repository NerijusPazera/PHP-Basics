<?php
$sudas1 = rand(1, 100);
$sudas2 = rand(101, 200);
$sudas3 = rand(201, 300);
$sudas4 = rand(301, 400);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
    </head>
    <body>
        <div>
            <h1>Skolos skaiciuokle</h1>
            <h3>Jei paemei <?php print $sudas1; ?> jievru</h3>
            <h3>Su dviem kabanciais grazinsi <?php print $sudas3; ?></h3>
            <h3>Su vienu kabanciu grazinsi <?php print $sudas2; ?></h3>
        </div>
    </body>
</html>
