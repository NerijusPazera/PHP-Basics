<?php

if (date('s') % 2) {
    $class = 'lyginis';
} else {
    $class = 'nelyginis';
}

?>
<html>
    <head>
        <title>Laikas</title>
        <style>
            .lyginis {
                border: solid;
            }
            .nelyginis {
                border: solid;
                border-radius: 50%;
            }
            .laikas {
                height: 50vh;
                width: 40vw;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <div class="laikas <?php print $class; ?>">
            <div><?php print date('H:i:s'); ?></div>
        </div>
    </body>
</html>