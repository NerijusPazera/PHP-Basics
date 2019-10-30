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
            .bomb {
                height: <?php print date('s'); ?>vh;
                width: <?php print date('s'); ?>vw;
                background-image: url("https://files.gamebanana.com/img/ico/sprays/4ea33068c0dcc.png");
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
            }
        </style>
    </head>
    <body>
        <div class="bomb"></div>
        <div class="sec"><?php print date('s'); ?></div>
    </body>
</html>
