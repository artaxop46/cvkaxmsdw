<?php

$lists = array_unique(explode("\n", str_replace("\r", "", file_get_contents("data.txt"))));

$phone = $_GET['phone'];
$areaCode = substr($phone, -10, 3);
$nextThree = substr($phone, -7, 3);
$lastFour = substr($phone, -4, 4);

foreach($lists as $list) {
    $gomu = explode("|", $list);
    if ($areaCode == $gomu[0]) {
        if ($nextThree == $gomu[1]){
            print('{"found": "'.$gomu[2].'"}');
        }
    }
}