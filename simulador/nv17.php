<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/anexos.css">
    <title>Nivel 1</title>
</head>
<!--<body style="background-color: #0a4448;">-->
<body>
<?php 
//listado de departamentos Tipo A y PH
$urldptos1 ="https://rodrik.mx/api/listado_deptos_desarrollo.php?id=6";?>

<?php
//listado de departamentos Tipo Loft y B C D E
$urldptos2 ="https://rodrik.mx/api/listado_deptos_desarrollo.php?id=7";?>

<?php
//Listado de departamentos Tipo F G H
$urldptos3 = "https://rodrik.mx/api/listado_deptos_desarrollo.php?id=8";?>

    <div>
        <img src="images/pniveles/2200.png" alt="Nivel17" class="images-simuladornv1">
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 23) { ?>
                <label class="ltipounosqw"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1rojo.png" class="nvunosqw">
                    <label class="lunosqw">2201</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1amarillo.png" class="nvunosqw">
                    <label class="lunosqw">2201</label>
                    </a>
                <?php } else { ?>
                    <a href="2201.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lunosqw">2201</label>
                    <img src="images/1verde.png" class="nvunosqw">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                $data1 = json_decode(file_get_contents($urldptos2), true);
                for ($i = 0; $i < count($data1); $i++) { if ($i == 334){ ?>
                <label class="ltipodosqw"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2rojo.png" class="nvdosqw">
                    <label class="ldosqw">2202</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2amarillo.png" class="nvdosqw">
                    <label class="ldosqw">2202</label>
                    </a>
                <?php } else { ?>
                    <a href="2202.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldosqw">2202</label>
                    <img src="images/2verde.png" class="nvdosqw">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 335){ ?>
                <label class="ltipotresqw"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3rojo.png" class="nvtresqw">
                    <label class="ltresqw">2203</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3amarillo.png" class="nvtresqw">
                    <label class="ltresqw">2203</label>
                    </a>
                <?php } else { ?>
                    <a href="2203.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ltresqw">2203</label>
                    <img src="images/3verde.png" class="nvtresqw">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 336){ ?>
                <label class="ltipocuatroqw"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4rojo.png" class="nvcuatroqw">
                    <label class="lcuatroqw">2204</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4amarillo.png" class="nvcuatroqw">
                    <label class="lcuatroqw">2204</label>
                    </a>
                <?php } else { ?>
                    <a href="2204.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcuatroqw">2204</label>
                    <img src="images/4verde.png" class="nvcuatroqw">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 337){ ?>
                <label class="ltipocincoqw"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5rojo.png" class="nvcincoqw">
                    <label class="lcincoqw">2205</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5amarillo.png" class="nvcincoqw">
                    <label class="lcincoqw">2205</label>
                    </a>
                <?php } else { ?>
                    <a href="2205.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcincoqw">2205</label>
                    <img src="images/5verde.png" class="nvcincoqw">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 338){ ?>
                <label class="ltiposeisqw"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6rojo.png" class="nvseisqw">
                    <label class="lseisqw">2206</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6amarillo.png" class="nvseisqw">
                    <label class="lseisqw">2206</label>
                    </a>
                <?php } else { ?>
                    <a href="2206.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lseisqw">2206</label>
                    <img src="images/6verde.png" class="nvseisqw">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 339){ ?>
                <label class="ltiposieteqw"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7rojo.png" class="nvsieteqw">
                    <label class="lsieteqw">2207</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7amarillo.png" class="nvsieteqw">
                    <label class="lsieteqw">2207</label>
                    </a>
                <?php } else { ?>
                    <a href="2207.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lsieteqw">2207</label>
                    <img src="images/7verde.png" class="nvsieteqw">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 340){ ?>
                <label class="ltipoochoqw"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8rojo.png" class="nvochoqw">
                    <label class="lochoqw">2208</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8amarillo.png" class="nvochoqw">
                    <label class="lochoqw">2208</label>
                    </a>
                <?php } else { ?>
                    <a href="2208.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lochoqw">2208</label>
                    <img src="images/8verde.png" class="nvochoqw">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 341){ ?>
            <label class="ltiponueveqw"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9rojo.png" class="nvnueveqw">
                <label class="lnueveqw">2209</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9amarillo.png" class="nvnueveqw">
                <label class="lnueveqw">2209</label>
                </a>
            <?php } else { ?>
                <a href="2209.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lnueveqw">2209</label>
                <img src="images/9verde.png" class="nvnueveqw">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 342){ ?>
            <label class="ltipodiezqw"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10rojo.png" class="nvdiezqw">
                <label class="ldiezqw">2210</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10amarillo.png" class="nvdiezqw">
                <label class="ldiezqw">2210</label>
                </a>
            <?php } else { ?>
                <a href="2210.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiezqw">2210</label>
                <img src="images/10verde.png" class="nvdiezqw">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 343){ ?>
            <label class="ltipoonceqw"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11rojo.png" class="nvonceqw">
                <label class="lonceqw">2211</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11amarillo.png" class="nvonceqw">
                <label class="lonceqw">2211</label>
                </a>
            <?php } else { ?>
                <a href="2211.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lonceqw">2211</label>
                <img src="images/11verde.png" class="nvonceqw">
        <?php }}} ?></a>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 344){ ?>
            <label class="ltipodoceqw"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12rojo.png" class="nvdoceqw">
                <label class="ldoceqw">2212</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12amarillo.png" class="nvdoceqw">
                <label class="ldoceqw">2212</label>
                </a>
            <?php } else { ?>
                <a href="2212.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldoceqw">2212</label>
                <img src="images/12verde.png" class="nvdoceqw">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 345){ ?>
            <label class="ltipotreceqw"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13rojo.png" class="nvtreceqw">
                <label class="ltreceqw">2213</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13amarillo.png" class="nvtreceqw">
                <label class="ltreceqw">2213</label>
                </a>
            <?php } else { ?>
                <a href="2213.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ltreceqw">2213</label>
                <img src="images/13verde.png" class="nvtreceqw">
        <?php }}} ?></a>
        </div>
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 24) { ?>
                <label class="ltipophcatorceq"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2214rojo.png" class="nvphcatorceq">
                    <label class="lphcatorceq">2214</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2214amarillo.png" class="nvphcatorceq">
                    <label class="lphcatorceq">2214</label>
                    </a>
                <?php } else { ?>
                    <a href="2214.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lphcatorceq">2214</label>
                    <img src="images/2214verde.png" class="nvphcatorceq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 64){?> 
                <label class="ltipoveintiunoq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintiunoq">
                    <label class="lveintiunoq">2215</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintiunoq">
                    <label class="lveintiunoq">2215</label>
                    </a>
                <?php } else { ?>
                    <a href="2215.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintiunoq">2215</label>
                    <img src="images/16verde.png" class="nvveintiunoq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 65){?> 
                <label class="ltipoveintidosq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintidosq">
                    <label class="lveintidosq">2216</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintidosq">
                    <label class="lveintidosq">2216</label>
                    </a>
                <?php } else { ?>
                    <a href="2216.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintidosq">2216</label>
                    <img src="images/16verde.png" class="nvveintidosq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 66){?> 
                <label class="ltipoveintitresq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintitresq">
                    <label class="lveintitresq">2217</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintitresq">
                    <label class="lveintitresq">2217</label>
                    </a>
                <?php } else { ?>
                    <a href="2217.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintitresq">2217</label>
                    <img src="images/16verde.png" class="nvveintitresq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 67){?> 
                <label class="ltipoveinticuatroq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveinticuatroq">
                    <label class="lveinticuatroq">2218</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado17.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveinticuatroq">
                    <label class="lveinticuatroq">2218</label>
                    </a>
                <?php } else { ?>
                    <a href="2218.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveinticuatroq">2218</label>
                    <img src="images/16verde.png" class="nvveinticuatroq">
            <?php }}} ?></a>
        </div>
        </div>
    </div>
</body>
</html>