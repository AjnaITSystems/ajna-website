<?php
$title = "AJNA IT Systems | Contactános | Contacto | Contáctanos ingresando tus datos en el formulario de contacto. Responderemos todas tus dudas lo antes posible.";
include 'header.php';
include 'ContactController.php'
?>


<section class="full-container container-title-section" style="background-image: url('public/media/bg/about-us.png')">
    <div>
        <div class="container-title container-title-section-left">
            <h2><span></span><span></span>Contáctanos</h2>
            <p>Contáctanos ingresando tus datos en el formulario de contacto. Responderemos todas tus dudas lo antes posible.</p>
        </div>
        <div class="container-title-section-right">
            <img src="public/media/general/general-contact.png" alt="About US">
        </div>
    </div>
</section>
<section class="full-container">
    <div class="container" id="container-anim-a" style="overflow: hidden">
    <article>

        <div id="info-contact-container">
                <div class="logo-contact">
                    <img src="public/media/ajna-it-systems.png" alt="Bogen contacto" width="151" height="43">
                </div>
                <ul>
                    <li><h2>Télefono</h2></li>
                    <li><span>(55) 6834 9007</span></li>
                </ul>

                <ul>
                    <li><h2>Correo electrónico</h2></li>
                    <li><a href="mailto:contacto@ajna.com.mx?Subject=Ventas%20-%20Ajna IT Systems%20México" target="_top">contacto@ajna.com.mx</a></li>
                </ul>

                <ul>
                    <li><h2>Dirección</h2></li>
                    <li><span>México, Ciudad de México, Hipódromo Condesa,
                        C.P. 55745</span>
                    </li>
                </ul>

                <ul>
                    <li><h2>Horario</h2></li>
                    <li><span>Lunes a Viernes - 09:00 a 18:00</span></li>
                    <li><span>Fin de Semana - Cerrado</span></li>
                </ul>
            </div>

        <div id="contact-container">
                <h1>Ingresa tus datos</h1>
                <p>Nos pondremos en contacto</p>

                <?php
                    $result = new ContactController();
                    $errors = $result->getInfoMessage();

                    if ( count($errors) > 0) {
                        echo '<div class="error-contact"><ul><div>Cerrar</div><li>Por favor revisa los siguientes campos:</li>';
                        foreach ($errors as $message) {
                            echo "<li>$message</li>";
                        }
                        echo "</ul></div>";
                    }

                    if (count($errors) == 0 && isset($_POST , $_POST['txtnom'], $_POST['txtmail'], $_POST['txtobs'], $_POST['txttel'])) {
                        include('mail.php');
                    }
                ?>

                <form method="post" action="contact.php" name="frmcontacto">

                    <label for="txtnom">Nombre</label>
                    <input type="text" name="txtnom" id="txtnom" placeholder="Nombre" value="<?php echo isset($_POST['txtnom']) ? $_POST['txtnom'] : ''; ?>" required />

                    <label for="txtmail">E-mail</label>
                    <input type="email" name="txtmail" id="txtmail" placeholder="Correo" value="<?php echo isset($_POST['txtmail']) ? $_POST['txtmail'] : ''; ?>" required />

                    <label for="txttel">Teléfono</label>
                    <input type="number" name="txttel" id="txttel" placeholder="Teléfono" value="<?php echo isset($_POST['txttel']) ? $_POST['txttel'] : ''; ?>" required />

                    <label for="txtobs">Comentario</label>
                    <textarea name="txtobs" id="txtobs" placeholder="Sus comentarios son de gran importancia para nosotros" required><?php echo isset($_POST['txtobs']) ? $_POST['txtobs'] : ''; ?></textarea>

                    <label for="txtcaptcha">Código</label>
                    <input type="text" name="txtcaptcha" id="txtcaptcha" placeholder="Código de seguridad" required/>
                    <div id="captcha-container"><img src="captcha.php"></div>

                    <input type="submit" value="Enviar"/>

                </form>
            </div>

    </article>
</div>
</section>


<div id="map" style="width: 100%; height: 320px"></div>


<script>
    function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 19.415310874313878, lng: -99.17608410000003},
            zoom: 15,
            scrollwheel: false,
            styles: [
                {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
                {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
                {
                    featureType: 'administrative.locality',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#263c3f'}]
                },
                {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#6b9a76'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#38414e'}]
                },
                {
                    featureType: 'road',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#212a37'}]
                },
                {
                    featureType: 'road',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9ca5b3'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#746855'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'geometry.stroke',
                    stylers: [{color: '#1f2835'}]
                },
                {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#f3d19c'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'geometry',
                    stylers: [{color: '#2f3948'}]
                },
                {
                    featureType: 'transit.station',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#d59563'}]
                },
                {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#17263c'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#515c6d'}]
                },
                {
                    featureType: 'water',
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#17263c'}]
                }
            ]
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASGLG_X33TnTSWT_ynl3qKkTX2YhrVSeI&callback=initMap" async defer></script>

<?php include 'footer.php';?>
