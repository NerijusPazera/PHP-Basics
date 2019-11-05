<?php
$months = 12;
$wallet = 1000;
$month_income = 700;

for ($x = 1; $x <= $months; $x++) {
    $month_expenses = rand(300, 700);
    $wallet += $month_income - $month_expenses;
}

$h1 = 'Wallet Forecast';
$h2 = "Po $months m., prognozuojamas likutis: $wallet";

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