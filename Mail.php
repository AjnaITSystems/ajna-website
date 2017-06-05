<?php
class Mail{
    function sentMail($nombre, $mensaje, $email, $tel) {
        // Guardar los datos recibidos en variables:

        // nombre=Bombon&mensaje=Mi+mensaje&email=bombon%40gmail.com

        // Definir el correo de destino:
        // $dest = "contacto@ajna.com.mx";
        // $dest2 = "aortiz@ajna.com.mx";
        $dest = "adrianortizmartinez@gmail.com";

        // Estas son cabeceras que se usan para evitar que el correo llegue a SPAM:
        $headers = "From: $nombre <$email>\r\n";
        $headers .= "X-Mailer: PHP5\n";
        $headers .= "MIME-Version: 1.0" . "\n";
        $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n"; // charset=iso-8859-1

        // Aqui definimos el asunto y armamos el cuerpo del mensaje
        $asunto = "Mensaje de contacto desde AJNA.com.mx";

        $cuerpo = '
            <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            
                    <title>Mail title</title>
                    <style type="text/css">
                        body{
                            font-family: helvetica-Light, helvetica, arial !important;
                            padding: 0px;
                            margin: 0px;
                            background-color: #F2F2F2;
                        }
            
                        #contenedor{
                            margin: auto;
                            margin-top: 20px;
                            margin-bottom: 30px;
                            background-color: #FFF;
                            min-width: 300px;
                            max-width: 745px;
                            height: auto;
                            min-height: 800px;
                            border-radius: 8px;
                            border: solid 1px #E2E2E2;
                            /* background-image: url(http://codizer.com/cmail/mensajes/foooter.jpg); */
                            background-position: bottom;
                            background-repeat: no-repeat;
                        }
            
                        div#titulo{
                            background-color: #FFFFFF;
                            width: 100%;
                            height: 200px;
                            border-bottom: solid 1px #E2E2E2;
                            border-radius: 8px 8px 0px 0px;
                            background-image: url(http://www.ajna.com.mx/public/media/ajna-it-systems.png);
                            background-position: center;
                            background-repeat: no-repeat;
                        }
            
                        div#informacionN{
                            margin: auto;
                            margin-top: 70px;
                            width: 90%;
                            min-height: 400px;
                        }
            
                        div a{
                            margin: auto !important;
                            text-align: center !important;
                        }
            
                        div.marcado{
                            font-size: 13px;
                            width: 75px;
                            text-decoration: none;
                            color: #FFFFFF;
                            background-color: #4D4D4D;
                            padding: 4px 10px 4px 10px;
                            border-radius: 5px;
                        }
            
                        a{
                            text-decoration: none;
                            color: #FFFFFF;
                            background-color: #74A9DA;
                            padding: 4px 10px 4px 10px;
                            border-radius: 5px;
                        }
            
                        div#footerX{
                            margin: auto;
                            width: 100%;
                            text-align: center;
                            color: #74A9DA;
                        }
            
                    </style>
                </head>
                <body>
                <div id="contenedor">
                    <div id="titulo">
                    </div>
                    <div id="informacionN">
                        <div class="marcado">NOMBRE: </div><p>' . $nombre . '</p>
                        <div class="marcado">TEL: </div><p>' . $tel . '</p>
                        <div class="marcado">MENSAJE: </div><p>' . $mensaje . '</p>
                        <div class="marcado">CORREO: </div><p><a href="mailto:' . $email . '?Subject=Hola">' . $email . '</a></p>
                    </div>
                    <div id="footerX">
                        Copyrights 2017 © Ajna IT Systems
                    </div>
                </div>
                </body>
            </html>
            ';

        // Esta es una pequena validación, que solo envie el correo si todas las variables tiene algo de contenido:
        if ($nombre != '' && $email != '' && $mensaje != '') {
            mail($dest, $asunto, $cuerpo, $headers); //ENVIAR A USUARIO A!
            // mail($dest2,$asunto,$cuerpo,$headers);
            echo '<div class="error-contact success"><div>Cerrar</div><ul><li>Mensaje:</li><li>¡Correo enviado correctamente!</li></ul></div>';
        } else {
            echo '<div class="error-contact"><div>Cerrar</div><ul><li>Mensaje:</li><li>Algo salio mal, por favor intentalo más tarde.</li></ul></div>';
        }
    }
}
?>