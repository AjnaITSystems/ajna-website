<?php
include_once 'common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="http://www.ajna.com.mx/favicon.ico" type="image/vnd.microsoft.icon">
    <title><?php echo $title?></title>
    <link rel="canonical" href="http://www.ajna.com.mx"/>
    <link rel="shortlink" href="http://www.ajna.com.mx">
    <meta http-equiv="content-language" content="es_mx"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Servicios  de Consultoría, Business Intelligence, Desarrollo de Software, Staffing, Qlik, Qlik View, Qlik Sense"/>
    <meta property="og:description" content="AJNA, es una empresa dedicada a resolver problemas de negocios, ayudando a mejorar el desempe&ntilde;o. Ofrecemos consultor&iacute;a en Business Intelligence, Desarrollo de Software, Staffing y Software Qlik View, Qlik Sense, etc."/>
    <meta property="og:url" content="http://www.ajna.com.mx"/>
    <meta property="og:site_name" content="AJNA IT Systems"/>
    <meta name="robots" content="index,follow"/>
    <meta name="keywords" content="Business Intelligence, desarrollo de software, staffing, banca móvil, servicios de consultoria, talento, consultoria, IT, consultoría en servicios de tecnologías de la información, Oracle, oracle BI, Hyperion Essbase, Qlik, Qlick View, Qlik Sense"/>
    <meta name="description" content="Ofrecemos consultor&iacute;a de negocios para mejorar del desempe&ntilde;o, transparencia y rentabilidad de las empresas m&aacute;s importantes con consultor&iacute;a de negocios. Cont&aacute;ctanos +52 55 5263 5749"/>
    <meta name="author" content="AjnaITsystems"/>
    <meta property="og:image" content="http://www.ajna.com.mx/ajna-cover.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1350" />
    <meta property="og:image:height" content="650" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="AJNA IT Systems | Servicios de Consultoría | Business Intelligence | Somos data freaks expertos en data discovery y analytics. | Desarrollo de Software | Staffing | Qlik | Qlik View | Qlik Sense | Oracle BI" />
    <meta name="twitter:title" content="Inicio &bull; AJNA IT Systems" />
    <meta name="twitter:site" content="@AjnaitSystems" />
    <meta name="twitter:image" content="http://www.ajna.com.mx/ajna-cover.png" />
    <meta name="twitter:creator" content="@AjnaitSystems" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="public/css/index.css">
</head>

<body>

    <div class="btn-menu" style="background-image: url('public/media/icon/menu.png')"></div>

    <div class="mobil-menu-container">
        <input type="text" class="input-search" name="search" style="background-image: url('public/media/icon/search.png')">
        <a href="contact.php" class="btn-mobil-contact">Contacto</a>
        <form action="#">
            <select class="select-languaje">
                <option value="es">es</option>
                <option value="en">en</option>
            </select>
        </form>
        <div class="mobil-menu-container-list">
            <a href="index.php"><span></span>Inicio</a>
            <a href="services.php"><span></span>Servicios</a>
            <a href="products.php"><span></span>Productos</a>
            <a href="customer.php"><span></span>Clientes</a>
            <a href="us.php"><span></span>Nosotros</a>
        </div>
        <div class="mobil-info-container-list">
            <ul class="footer-menu-information">
                <li class="right-menu-item">
                    <a href="contact.php">
                        <img src="public/media/icon/businessman.png" width="38" height="38" alt="Correo electronico">
                        <ul>
                            <li>(55) 6834 9007</li>
                            <li class="header-blue">contacto@ajna.com.mx</li>
                        </ul>
                    </a>
                </li>
                <li class="right-menu-item">
                    <a href="contact.php">
                        <img src="public/media/icon/place.png" width="38" height="38" alt="Dirección">
                        <ul>
                            <li>México, Ciudad de México</li>
                            <li class="header-blue">Hipódromo Condesa</li>
                        </ul>
                    </a>
                </li>
                <li class="right-menu-item">
                    <a href="contact.php">
                        <img src="public/media/icon/schedule.png" width="38" height="38" alt="Horario de Actividades">
                        <ul>
                            <li>Lunes - Viernes 09:00 - 18:00</li>
                            <li class="header-blue">Cerrado - Fin de semana</li>
                        </ul>
                    </a>
                </li>
            </ul>
        </div>
        <div class="mobil-social-container-list">
            <a href="https://www.linkedin.com/company-beta/16261191/" target="_blank" style="background-image: url('public/media/icon/linkedin.png')"></a>
            <a href="https://www.facebook.com/ajnaitsystems/" target="_blank" style="background-image: url('public/media/icon/facebook.png')"></a>
            <a href="https://twitter.com/ajnaitsystems" target="_blank" style="background-image: url('public/media/icon/twitter.png')"></a>
        </div>
    </div>




    <header>
        <div class="header-container">
            <a href="index.php" id="logo">
                <img src="public/media/ajna-it-systems.png" width="151" height="43" alt="AJNA IT SYSTEMS S.A. de C.V.">
            </a>

            <ul id="right-menu">
                <li class="right-menu-item">
                    <a href="contact.php">
                        <img src="public/media/icon/businessman.png" width="38" height="38" alt="Telefono, correo">
                        <ul>
                            <li>(55) 6834 9007</li>
                            <li class="header-blue">contacto@ajna.com.mx</li>
                        </ul>
                    </a>
                </li>
                <li class="right-menu-item">
                    <a href="contact.php">
                        <img src="public/media/icon/place.png" width="38" height="38" alt="Horario">
                        <ul>
                            <li>México, Ciudad de México</li>
                            <li class="header-blue">Hipódromo Condesa</li>
                        </ul>
                    </a>
                </li>
                <li class="right-menu-item">
                    <a href="https://www.linkedin.com/company-beta/16261191/" target="_blank" class="social-network" style="background-image: url('public/media/icon/linkedin.png')"></a>
                </li>
                <li class="right-menu-item">
                    <a href="https://www.facebook.com/ajnaitsystems/" target="_blank" class="social-network" style="background-image: url('public/media/icon/facebook.png')"></a>
                </li>
                <li class="right-menu-item">
                    <a href="https://twitter.com/ajnaitsystems" target="_blank" class="social-network" style="background-image: url('public/media/icon/twitter.png')"></a>
                </li>
            </ul>
        </div>
        <div class="header-container">
            <nav>
                <ul>
                    <li>
                        <a href="index.php" style="background-image: url('public/media/icon/item-bar.png')"><?php echo $lang['MENU_HOME']; ?></a>
                    </li>
                    <li>
                        <a href="services.php" style="background-image: url('public/media/icon/item-bar.png')"><?php echo $lang['MENU_SERVICE']; ?></a>
                    </li>
                    <li>
                        <a href="products.php" style="background-image: url('public/media/icon/item-bar.png')"><?php echo $lang['MENU_PRODUCT']; ?></a>
                    </li>
                    <li>
                        <a href="customer.php" style="background-image: url('public/media/icon/item-bar.png')"><?php echo $lang['MENU_CUSTOMER']; ?></a>
                    </li>
                    <li>
                        <a href="us.php" style="background-image: url('public/media/icon/item-bar.png')"><?php echo $lang['MENU_ABOUT_US']; ?></a>
                    </li>
                </ul>

                <ul>
                    <li>
                        <div style="background-image: url('public/media/icon/search.png')">
                        </div>
                    </li>
                    <li>
                        <a href="contact.php"><?php echo $lang['MENU_CONTACT_US']; ?></a>
                    </li>
                    <li>
                        <form action="index.php" method="get">
                            <select id="lang" name="lang" class="select-languaje">
                                <option value="es">es</option>
                                <option value="en">en</option>
                            </select>
                        </form>
                    </li>
                </ul>

            </nav>
        </div>
    </header>