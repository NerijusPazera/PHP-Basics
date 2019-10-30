<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
        <style>
            body {
                background-color: rgb(<?php print rand(0, 255) ?>,<?php print rand(0, 255) ?>,<?php print rand(0, 255) ?>);
            }
            h1 {
                font-size: <?php print rand(16, 30) ?>px;
            }
            p {
                color: rgb(<?php print rand(0, 255) ?>,<?php print rand(0, 255) ?>,<?php print rand(0, 255) ?>);
            }
        </style>
    </head>
    <body>
        <h1>
            Aš keičiu savo dydi!
        </h1>

        <p>
            Aš keičiu savo spalvą!
        </p>
    <body>
</html>
