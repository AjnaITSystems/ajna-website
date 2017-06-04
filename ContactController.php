<?php

class ContactController
{
    function getInfoMessage() {

        if (isset($_POST , $_COOKIE['captcha'], $_POST['txtnom'], $_POST['txtmail'], $_POST['txttel'], $_POST['txtmail'], $_POST['txtobs'], $_POST['txtcaptcha'])) {

            $message = array();

            if (md5($_POST['txtcaptcha']) != $_COOKIE['captcha'])
                $message[] = 'Captcha incorrecto';

            if ($_POST['txtnom'] == '')
                $message[] = 'Por favor ingresa tu nombre';

            if ($_POST['txttel'] == '')
                $message[] = 'Por favor ingresa tu telefono';

            if ($_POST['txtmail'] == '')
                $message[] = 'Por favor ingresa tu correo electronico';

            if ($_POST['txtobs'] == '')
                $message[] = 'Por favor ingresa tu comentario';

            $this->clearCookie();
            return $message;
        }
    }

    private function clearCookie() {
        unset($_COOKIE['captcha']);
        setcookie('captcha', null, -1, '/');
    }
}


