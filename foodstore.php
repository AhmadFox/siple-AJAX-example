<?php
header ('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
    $food= $_GET['food'];
    $foodArray= array('tona','ham','checkin','beef','bacon');
    if(in_array($food,$foodArray))
        echo 'We Do Have ' . $food . '!';
    elseif($food=='')
        echo 'Pleas Enter a Food!';
    else
        echo 'Sorry punk we dont sell no ' . $food . '!';
echo '</response>';
?>