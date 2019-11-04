<?php

if (date('s') % 2) {
    $class = 'lyginis';
}   else {
    $class = 'nelyginis';
}

?>
<html>
    <head>
        <title></title>
        <style>
            .lyginis {
                height: 50vh;
                width: 40vw;
                border: solid;
            }
            .nelyginis {
                height: 50vh;
                width: 40vw;
                border: solid;
                border-radius: 50%;
            }
            .laikas {
                display: flex;
                justify-content: center;
                align-content: center;
            }
        </style>
    </head>
    <body>
        <div class="<?php print $class; ?>">
            <div class="laikas"><?php print date('H:i:s'); ?></div>
        </div>
    </body>
</html>