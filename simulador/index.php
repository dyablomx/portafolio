<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <title>Aguamarina Talisman</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="preload" href="css/normalize.css" as="style">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preload" href="css/estilos.css" as="style">
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link href="css/lightbox.css" rel="stylesheet">
    <script src="js/simulador.js"></script>
    <script src="js/financiero.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <link rel="preload" href="css/simulador.css" as="style">
    <link href="css/simulador.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://use.fontawesome.com/4595e5a071.js"></script>
    <script src="https://kit.fontawesome.com/553453f173.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body class="texto">
	<div class="navbar">
        <center><img src="images/logo_blanco.png" alt="Logo Agua Marina Talisman" class="logo-image contenedor" id="top"></center>
        <div class="contenido">
            <nav class="navegacion-principal bars">
                <ul id="menu">
                    <li><a href="https://aguamarinatalisman.com/">
                        <img src="images/logo_blanco.png" alt="Logo Agua Marina Talisman" class="logo-image1 contenedor" id="top"></center></li></a>
                </ul>
            </nav>
        </div>
    </div>
<main>

<?php 
//listado de departamentos Tipo A y PH
$urldptos1 ="https://rodrik.mx/api/listado_deptos_desarrollo.php?id=6";?>

<?php
//listado de departamentos Tipo Loft y B C D E
$urldptos2 ="https://rodrik.mx/api/listado_deptos_desarrollo.php?id=7";?>

<?php
//Listado de departamentos Tipo F G H
$urldptos3 = "https://rodrik.mx/api/listado_deptos_desarrollo.php?id=8";?>

<h1 class="pad" style="color: var(--terciario);">Simulador Interactivo</h1>
<h2 style="color: var(--terciario);">Selecciona un nivel</h2>
<center>
      
<section class="simulador" style="padding-top:2rem;">
    <div class="interactivo">
    <img src="images/main-all.jpg" usemap="#image-map" alt="fachada_simulador" class="mapper noborder nofade icolorffffff" id="fachada">
    <map name="image-map">
            <a href="nv1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="244,621,1204,621,1204,645,250,645" alt="piso1" onclick="selectRegion('nv1');mostrar1();" title="piso1">
            </a>
            <a href="nv2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="252,597,1204,597,1204,621,244,621" alt="piso2" onclick="selectRegion('nv2');mostrar2();" title="Piso2">
            </a>
            <a href="nv3.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="249,573,1204,573,1204,597,252,597" alt="piso3" onclick="selectRegion('nv3');mostrar3();" title="Piso3">
            </a>
            <a href="nv4.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="251,550,1204,550,1204,573,249,573" alt="piso4" onclick="selectRegion('nv4');mostrar4();" title="Piso4">
            </a>
            <a href="nv5.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="252,526,1204,526,1204,550,251,550" alt="piso5" onclick="selectRegion('nv5');mostrar5();" title="Piso5">
            </a>
            <a href="nv6.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="258,501,1204,501,1204,526,252,526" alt="piso6" onclick="selectRegion('nv6');mostrar6();" title="Piso6">
            </a>
            <a href="nv7.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="242,477,1204,478,1204,501,258,501" alt="piso7" onclick="selectRegion('nv7');mostrar7();" title="Piso7">
            </a>
            <a href="nv8.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="256,453,1204,454,1204,478,252,477" alt="piso8" onclick="selectRegion('nv8');mostrar8();" title="Piso8">
            </a>
            <a href="nv9.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="249,428,1204,430,1204,454,256,453" alt="piso9" onclick="selectRegion('nv9');mostrar9();" title="Piso9">
            </a>
            <a href="nv10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="254,404,1546,405,1558,428,249,428" alt="piso10" onclick="selectRegion('nv10');mostrar10();" title="Piso10">
            </a>
            <a href="nv11.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="246,380,1558,379,1546,405,254,404" alt="piso11" onclick="selectRegion('nv11');mostrar11();" title="Piso11">
            </a>
            <a href="nv12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="252,356,1546,356,1558,379,246,380" alt="piso12" onclick="selectRegion('nv12');mostrar12();" title="Piso12">
            </a>
            <a href="nv13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="246,330,1555,330,1546,356,252,356" alt="piso13" onclick="selectRegion('nv13');mostrar13();" title="Piso13">
            </a>
            <a href="nv14.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="253,308,532,311,1428,307,1542,308,1555,330,246,330" alt="piso14" onclick="selectRegion('nv14');mostrar14();" title="Piso14">
            </a>
            <a href="nv15.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="246,282,1317,286,1428,284,1428,307,532,311,253,308" alt="piso15" onclick="selectRegion('nv15');mostrar15();" title="Piso15">
            </a>
            <a href="nv16.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="252,260,1200,262,1258,263,1317,259,1317,286,246,282" alt="piso16" onclick="selectRegion('nv16');mostrar16();" title="Piso16">
            </a>
            <a href="nv17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="246,233,1090,240,1146,238,1200,240,1200,262,252,260" alt="piso17" onclick="selectRegion('nv17');mostrar17();" title="Piso17">
            </a>
            <a href="nv18.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="255,212,978,215,1032,217,1090,214,1090,240,246,233" alt="piso18" onclick="selectRegion('nv18');mostrar18();" title="Piso18">
            </a>
            <a href="nv19.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="246,184,894,194,978,194,978,215,255,212" alt="piso19" onclick="selectRegion('nv19');mostrar19();" title="Piso19">
            </a>
            <a href="nv20.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="251,163,353,161,416,165,470,163,531,168,584,165,643,169,698,166,754,170,808,167,894,170,894,194,246,184" alt="piso20" onclick="selectRegion('nv20');mostrar20();" title="Piso20">
            </a>
            <a href="nv21.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="245,135,358,140,412,139,473,142,528,141,587,144,642,142,698,144,756,143,810,146,820,166,808,167,754,170,698,166,643,169,584,165,531,168,470,163,416,165,353,161,251,163" alt="piso21" onclick="selectRegion('nv21');mostrar21();" title="Piso21">
            </a>
            <a href="nv22.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="252,114,352,112,418,118,468,115,530,120,584,116,644,122,696,118,710,144,698,144,642,142,587,144,528,141,473,142,412,139,358,140,245,135" alt="piso22" onclick="selectRegion('nv22');mostrar22();" title="Piso22">
            </a>
            <a href="nv23.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="246,86,356,92,412,91,472,94,528,96,587,96,604,118,584,116,530,120,468,115,418,118,352,112,252,114" alt="piso23" onclick="selectRegion('nv23');mostrar23();" title="Piso23">
            </a>
            <a href="nv24.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="251,66,353,63,418,70,469,67,492,93,472,94,412,91,356,92,246,86" alt="piso24" onclick="selectRegion('nv24');mostrar24();" title="Piso20">
            </a>
            <a href="nv25.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="244,37,356,43,360,48,360,64,252,66" alt="piso25" onclick="selectRegion('nv25');mostrar25();" title="Piso25">
            </a>
            <a href="loft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="203,748,1585,748,1587,790,203,793" alt="Loft1" onclick="selectRegion('nv26');mostrar26();" title="Loft1">
            </a>
            <a href="loft2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1450" data-height="855">
                <area shape="poly" coords="206,708,1584,708,1584,748,206,746" alt="Loft2" onclick="selectRegion('nv27');mostrar27();" title="Loft2">
            </a>
            </map>
        </div>
</section>

<section class="contacto">
    <div class="overlay"></div>
        <div class="container1">
            <div class="column">
                <div class="wrap">
                    <section class="section">
                    <div class="footermenu">
                        <div class="container-footer">
                            <div class="fila1">
                                <div class="item-0"></div>
                                <div class="item-1"></div>
                                <div></div>
                                <div><img src="images/logo_blanco.png" alt="logo" class="logo-footer"></div>
                                <div></div>
                                <div class="item-2">
                                    <span><a href="https://www.facebook.com/aguamarinatalisman" target="_blank"><i class="fa-brands fa-xl fa-facebook"></i></i></a></span>
                                    <span><a href="https://www.instagram.com/aguamarinatalisman/?hl=es" target="_blank"><i class="fa-brands fa-instagram"></i></i></a></span>
                                </div>
                                </div>
                            <div class="fila2">
                                <div class="item-3"><a href="redinterna/index.php" class="textoinicio" target="_blank">INICIAR SESIÓN ASESORES</a></div>
                                </div>
                            <div class="fila3">
                                <div class="item-6" style="color: white; font-size: 14px;">TODOS LOS DERECHOS RESERVADOS | AGUAMARINA COPYRIGHT © 2022</div>      
                                <div class="item-7" style="color: white; font-size: 14px;">TÉRMINOS Y CONDICIONES</div>
                                <div class="item-8"><img src="images/logo-3difica.png" alt="logo" class="logo3difica"></div>
                            </div>
                        </div>
                    </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</center>
</main>

<script src="js/lightbox-plus-jquery.js"></script>
        
        <script>
            lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'disableScrolling': true,
            })
        </script>
        
        <script src="js/mapper.js"></script>
        <script src="js/simulador.js"></script>
        <script src="js/financiero.js"></script>

        <script src="js/jquery-3.1.1.slim.min.js"></script>
        <script src="js/image-map.jquery.js"></script>
        <!--
        <script src="js/image-map.js"></script>

        <script>
            $(function () {
                ImageMap('img[usemap]');
            });
            function selectRegion(region) {
                document.querySelector("img").setAttribute('src', 'images/main-' + region + '.jpg');
            }
        </script>
        -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
    </html>