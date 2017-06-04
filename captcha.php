<?php

function getCaptcha() {

    header("Content-Type: image/png");

    $data = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0',
             'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];

    $strCode = null;

    for ($i = 0; $i < 6; $i++) {
        $strCode .= $data[ rand(0, count($data) - 1) ];
    }

    $image = imagecreate(100, 40);
    imagecolorallocate($image, 52, 58, 61);
    imagestring($image, 30, 22, 11, $strCode, imagecolorallocate($image, 255, 255, 255));
    imagepng($image);

    setcookie('captcha', md5($strCode), time()+60*5);
}

getCaptcha();


