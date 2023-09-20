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
        <img src="images/pniveles/1500.png" alt="Nivel13" class="images-simuladornv1">
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 15) { ?>
                <label class="ltipounosq"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1rojo.png" class="nvunosq">
                    <label class="lunosq">1801</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1amarillo.png" class="nvunosq">
                    <label class="lunosq">1801</label>
                    </a>
                <?php } else { ?>
                    <a href="1801.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lunosq">1801</label>
                    <img src="images/1verde.png" class="nvunosq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                $data1 = json_decode(file_get_contents($urldptos2), true);
                for ($i = 0; $i < count($data1); $i++) { if ($i == 268){ ?>
                <label class="ltipodosq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2rojo.png" class="nvdosq">
                    <label class="ldosq">1802</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2amarillo.png" class="nvdosq">
                    <label class="ldosq">1802</label>
                    </a>
                <?php } else { ?>
                    <a href="1802.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldosq">1802</label>
                    <img src="images/2verde.png" class="nvdosq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 269){ ?>
                <label class="ltipotresq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3rojo.png" class="nvtresq">
                    <label class="ltresq">1803</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3amarillo.png" class="nvtresq">
                    <label class="ltresq">1803</label>
                    </a>
                <?php } else { ?>
                    <a href="1803.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ltresq">1803</label>
                    <img src="images/3verde.png" class="nvtresq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 270){ ?>
                <label class="ltipocuatroq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4rojo.png" class="nvcuatroq">
                    <label class="lcuatroq">1804</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4amarillo.png" class="nvcuatroq">
                    <label class="lcuatroq">1804</label>
                    </a>
                <?php } else { ?>
                    <a href="1804.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcuatroq">1804</label>
                    <img src="images/4verde.png" class="nvcuatroq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 271){ ?>
                <label class="ltipocincoq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5rojo.png" class="nvcincoq">
                    <label class="lcincoq">1805</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5amarillo.png" class="nvcincoq">
                    <label class="lcincoq">1805</label>
                    </a>
                <?php } else { ?>
                    <a href="1805.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcincoq">1805</label>
                    <img src="images/5verde.png" class="nvcincoq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 272){ ?>
                <label class="ltiposeisq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6rojo.png" class="nvseisq">
                    <label class="lseisq">1806</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6amarillo.png" class="nvseisq">
                    <label class="lseisq">1806</label>
                    </a>
                <?php } else { ?>
                    <a href="1806.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lseisq">1806</label>
                    <img src="images/6verde.png" class="nvseisq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 273){ ?>
                <label class="ltiposieteq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7rojo.png" class="nvsieteq">
                    <label class="lsieteq">1807</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7amarillo.png" class="nvsieteq">
                    <label class="lsieteq">1807</label>
                    </a>
                <?php } else { ?>
                    <a href="1807.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lsieteq">1807</label>
                    <img src="images/7verde.png" class="nvsieteq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 274){ ?>
                <label class="ltipoochoq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8rojo.png" class="nvochoq">
                    <label class="lochoq">1808</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8amarillo.png" class="nvochoq">
                    <label class="lochoq">1808</label>
                    </a>
                <?php } else { ?>
                    <a href="1808.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lochoq">1808</label>
                    <img src="images/8verde.png" class="nvochoq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 275){ ?>
            <label class="ltiponueveq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9rojo.png" class="nvnueveq">
                <label class="lnueveq">1809</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9amarillo.png" class="nvnueveq">
                <label class="lnueveq">1809</label>
                </a>
            <?php } else { ?>
                <a href="1809.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lnueveq">1809</label>
                <img src="images/9verde.png" class="nvnueveq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 276){ ?>
            <label class="ltipodiezq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10rojo.png" class="nvdiezq">
                <label class="ldiezq">1810</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10amarillo.png" class="nvdiezq">
                <label class="ldiezq">1810</label>
                </a>
            <?php } else { ?>
                <a href="1810.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiezq">1810</label>
                <img src="images/10verde.png" class="nvdiezq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 277){ ?>
            <label class="ltipoonceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11rojo.png" class="nvonceq">
                <label class="lonceq">1811</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11amarillo.png" class="nvonceq">
                <label class="lonceq">1811</label>
                </a>
            <?php } else { ?>
                <a href="1811.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lonceq">1811</label>
                <img src="images/11verde.png" class="nvonceq">
        <?php }}} ?></a>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 278){ ?>
            <label class="ltipodoceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12rojo.png" class="nvdoceq">
                <label class="ldoceq">1812</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12amarillo.png" class="nvdoceq">
                <label class="ldoceq">1812</label>
                </a>
            <?php } else { ?>
                <a href="1812.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldoceq">1812</label>
                <img src="images/12verde.png" class="nvdoceq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 279){ ?>
            <label class="ltipotreceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13rojo.png" class="nvtreceq">
                <label class="ltreceq">1813</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13amarillo.png" class="nvtreceq">
                <label class="ltreceq">1813</label>
                </a>
            <?php } else { ?>
                <a href="1813.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ltreceq">1813</label>
                <img src="images/13verde.png" class="nvtreceq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 280){ ?>
            <label class="ltipocatorceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14rojo.png" class="nvcatorceq">
                <label class="lcatorceq">1814</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14amarillo.png" class="nvcatorceq">
                <label class="lcatorceq">1814</label>
                </a>
            <?php } else { ?>
                <a href="1814.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lcatorceq">1814</label>
                <img src="images/14verde.png" class="nvcatorceq">
        <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 281){ ?>
                <label class="ltipoquinceq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5rojo.png" class="nvquinceq">
                    <label class="lquinceq">1815</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5amarillo.png" class="nvquinceq">
                    <label class="lquinceq">1815</label>
                    </a>
                <?php } else { ?>
                    <a href="1815.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lquiceq">1815</label>
                    <img src="images/5verde.png" class="nvquinceq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 282){ ?>
                <label class="ltipodieciseisq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6rojo.png" class="nvdieciseisq">
                    <label class="ldieciseisq">1816</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6amarillo.png" class="nvdieciseisq">
                    <label class="ldieciseisq">1816</label>
                    </a>
                <?php } else { ?>
                    <a href="1816.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldieciseisq">1816</label>
                    <img src="images/6verde.png" class="nvdieciseisq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 283){ ?>
            <label class="ltipodiecisieteq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13rojo.png" class="nvdiecisieteq">
                <label class="ldiecisieteq">1817</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13amarillo.png" class="nvdiecisieteq">
                <label class="ldiecisieteq">1817</label>
                </a>
            <?php } else { ?>
                <a href="1817.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiecisieteq">1817</label>
                <img src="images/13verde.png" class="nvdiecisieteq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 284){ ?>
            <label class="ltipodieciochoq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14rojo.png" class="nvdieciochoq">
                <label class="ldieciochoq">1818</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14amarillo.png" class="nvdieciochoq">
                <label class="ldieciochoq">1818</label>
                </a>
            <?php } else { ?>
                <a href="1818.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldieciochoq">1818</label>
                <img src="images/14verde.png" class="nvdieciochoq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 285){ ?>
            <label class="ltipodiecinueveq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12rojo.png" class="nvdiecinueveq">
                <label class="ldiecinueveq">1819</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12amarillo.png" class="nvdiecinueveq">
                <label class="ldiecinueveq">1819</label>
                </a>
            <?php } else { ?>
                <a href="1819.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiecinueveq">1819</label>
                <img src="images/12verde.png" class="nvdiecinueveq">
        <?php }}} ?></a>
        </div>
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 16) { ?>
                <label class="ltipoveinteq"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/20rojo.png" class="nvveinteq">
                    <label class="lveinteq">1820</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/20amarillo.png" class="nvveinteq">
                    <label class="lveinteq">1820</label>
                    </a>
                <?php } else { ?>
                    <a href="1820.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveinteq">1820</label>
                    <img src="images/20verde.png" class="nvveinteq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 48){?> 
                <label class="ltipoveintiunoq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintiunoq">
                    <label class="lveintiunoq">1821</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintiunoq">
                    <label class="lveintiunoq">1821</label>
                    </a>
                <?php } else { ?>
                    <a href="1821.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintiunoq">1821</label>
                    <img src="images/16verde.png" class="nvveintiunoq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 49){?> 
                <label class="ltipoveintidosq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintidosq">
                    <label class="lveintidosq">1822</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintidosq">
                    <label class="lveintidosq">1822</label>
                    </a>
                <?php } else { ?>
                    <a href="1822.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintidosq">1822</label>
                    <img src="images/16verde.png" class="nvveintidosq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 50){?> 
                <label class="ltipoveintitresq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintitresq">
                    <label class="lveintitresq">1823</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintitresq">
                    <label class="lveintitresq">1823</label>
                    </a>
                <?php } else { ?>
                    <a href="1823.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintitresq">1823</label>
                    <img src="images/16verde.png" class="nvveintitresq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 51){?> 
                <label class="ltipoveinticuatroq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveinticuatroq">
                    <label class="lveinticuatroq">1824</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado13.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveinticuatroq">
                    <label class="lveinticuatroq">1824</label>
                    </a>
                <?php } else { ?>
                    <a href="1824.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveinticuatroq">1824</label>
                    <img src="images/16verde.png" class="nvveinticuatroq">
            <?php }}} ?></a>
        </div>
        </div>
    </div>
</body>
</html>