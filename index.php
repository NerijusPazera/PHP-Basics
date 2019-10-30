<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
        <style>
            .dice1 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_black_1-512.png");
            }
            .dice2 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_black_2-512.png");
            }
            .dice3 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_black_3-512.png");
            }
            .dice4 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_black_4-512.png");
            }
            .dice5 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_black_5-512.png");
            }
            .dice6 {
                background-image: url("https://cdn2.iconfinder.com/data/icons/dice-roll/100/dice_black_6-512.png");
            }
            .dim {
                height: 512px;
                width: 512px;
            }
        </style>
    </head>
    <body>
        <div class="dim dice<?php print rand(1,6);?>"></div>
    </body>
</html>
