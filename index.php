<?php

$grizai_velai = rand(0, 1);
$grizai_isgeres = rand(0, 1);

if ($grizai_velai && !$grizai_isgeres) {
    $h2_situacija = 'Grįžai vėlai';
    $img_src = 'https://i2-prod.mirror.co.uk/incoming/article9941794.ece/ALTERNATES/s615/PROD-Woman-frowning.jpg';
    $isvada = 'Miegosi lovoj !';
} elseif (!$grizai_velai && $grizai_isgeres) {
    $h2_situacija = 'Grįžai išgeręs';
    $img_src = 'https://1.bp.blogspot.com/-Y5SBHiD9FaI/WW4gB5ihIaI/AAAAAAABd3k/WMbKM5ivwXUZl5jMsAH8rrvNEzVie_afwCLcBGAs/s1600/wife.jpg';
    $isvada = 'Miegosi lovoj !';
} elseif ($grizai_velai && $grizai_isgeres) {
    $h2_situacija = 'Grįžai velai ir grįžai išgeręs';
    $img_src = 'http://www.mannaexpressonline.com/wp-content/uploads/2017/11/Angry-wife.jpg';
    $isvada = 'Miegosi ant sofos !';
} else {
    $h2_situacija = 'Nieko nepadarei';
    $img_src = 'https://previews.123rf.com/images/puhhha/puhhha1701/puhhha170100181/68983638-healthy-eyes-and-vision-portrait-of-beautiful-happy-woman-holding-heart-shaped-hands-near-eyes-close.jpg';
    $isvada = 'Miegosi lovoj !';
}

$h1 = 'Buitinė skaiciuoklė';
$h2 = "Situacija: $h2_situacija";
$h3_isvada = "Išvada: $isvada";
        
?>
<html>
    <head>
        <title><?php print $h1; ?></title>
        <style>
            img {
                height: 30vh;
                width: 20vw;
            }
        </style>
    </head>
    <body>
        <h1><?php print $h1; ?></h1>
        <h2><?php print $h2; ?></h2>
        <h3><?php print $h3_isvada; ?></h3>
        <img src="<?php print $img_src; ?>">
    </body>
</html>