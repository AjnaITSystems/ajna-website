<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_POST['lang'])) {
    $lang = $_POST['lang'];

    // register the session and set the cookie
    $_SESSION['lang'] = $lang;

    setcookie("lang", $lang, time() + (3600 * 24 * 30));

} else if(isSet($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];

} else if(isSet($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'es';
}

switch ($lang) {
    case 'en':
        $lang_file = 'lang.en.php';
        $_SESSION['select-state'] = 'en';
        break;

    case 'es':
        $lang_file = 'lang.es.php';
        $_SESSION['select-state'] = 'es';
        break;

    default:
        $lang_file = 'lang.es.php';
        $_SESSION['select-state'] = 'es';
}

include_once 'languages/'.$lang_file;
?>