<?php

$months = 12;
$wallet = 1000;
$month_income = 700;

for ($x = 1; $x <= $months; $x++) {
    $month_expenses = rand(300, 1200);
    $wallet += $month_income - $month_expenses;
    if ($wallet < 0) {
        $h2 = "Atsargiai, $x mėnesį gali baigtis pinigai !";
        break;
    } else {
        $h2 = "Po $months m., prognozuojamas likutis: $wallet";
    }
}

$h1 = 'Wallet Forecast';

?>

<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title><?php print $h1; ?></title>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
    </body>
</htm