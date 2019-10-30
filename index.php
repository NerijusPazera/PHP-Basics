<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
        <style>
            body {
                display:flex;
                flex-direction:column;
                align-items:center;
            }
            .bomb-<?php print date('s'); ?> {
                height: <?php print date('s'); ?>vh;
                width: <?php print date('s'); ?>vw;
                background-image: url("https://files.gamebanana.com/img/ico/sprays/4ea33068c0dcc.png");
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
            }
            .bomb-00 {
                background-image: url("https://gamespot1.cbsistatic.com/uploads/original/gamespot/images/2004/features/tenspot/fps/554342-fps_013.jpg");
                height: 70vh;
                width: 70vw;
                background-size: contain;
                background-position: center;
            }
        </style>
    </head>
    <body>
        <div class="bomb-<?php print date('s'); ?>"></div>
        <div class="sec"><?php print date('s'); ?></div>
    </body>
</html>
