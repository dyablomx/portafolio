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
        <img src="images/pniveles/1500.png" alt="Nivel10" class="images-simuladornv1">
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 9) { ?>
                <label class="ltipounosq"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1rojo.png" class="nvunosq">
                    <label class="lunosq">1501</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1amarillo.png" class="nvunosq">
                    <label class="lunosq">1501</label>
                    </a>
                <?php } else { ?>
                    <a href="1501.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lunosq">1501</label>
                    <img src="images/1verde.png" class="nvunosq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                $data1 = json_decode(file_get_contents($urldptos2), true);
                for ($i = 0; $i < count($data1); $i++) { if ($i == 214){ ?>
                <label class="ltipodosq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2rojo.png" class="nvdosq">
                    <label class="ldosq">1502</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2amarillo.png" class="nvdosq">
                    <label class="ldosq">1502</label>
                    </a>
                <?php } else { ?>
                    <a href="1502.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldosq">1502</label>
                    <img src="images/2verde.png" class="nvdosq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 215){ ?>
                <label class="ltipotresq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3rojo.png" class="nvtresq">
                    <label class="ltresq">1503</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3amarillo.png" class="nvtresq">
                    <label class="ltresq">1503</label>
                    </a>
                <?php } else { ?>
                    <a href="1503.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ltresq">1503</label>
                    <img src="images/3verde.png" class="nvtresq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 216){ ?>
                <label class="ltipocuatroq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4rojo.png" class="nvcuatroq">
                    <label class="lcuatroq">1504</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4amarillo.png" class="nvcuatroq">
                    <label class="lcuatroq">1504</label>
                    </a>
                <?php } else { ?>
                    <a href="1504.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcuatroq">1504</label>
                    <img src="images/4verde.png" class="nvcuatroq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 217){ ?>
                <label class="ltipocincoq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5rojo.png" class="nvcincoq">
                    <label class="lcincoq">1505</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5amarillo.png" class="nvcincoq">
                    <label class="lcincoq">1505</label>
                    </a>
                <?php } else { ?>
                    <a href="1505.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcincoq">1505</label>
                    <img src="images/5verde.png" class="nvcincoq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 218){ ?>
                <label class="ltiposeisq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6rojo.png" class="nvseisq">
                    <label class="lseisq">1506</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6amarillo.png" class="nvseisq">
                    <label class="lseisq">1506</label>
                    </a>
                <?php } else { ?>
                    <a href="1506.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lseisq">1506</label>
                    <img src="images/6verde.png" class="nvseisq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 219){ ?>
                <label class="ltiposieteq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7rojo.png" class="nvsieteq">
                    <label class="lsieteq">1507</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7amarillo.png" class="nvsieteq">
                    <label class="lsieteq">1507</label>
                    </a>
                <?php } else { ?>
                    <a href="1507.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lsieteq">1507</label>
                    <img src="images/7verde.png" class="nvsieteq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 220){ ?>
                <label class="ltipoochoq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8rojo.png" class="nvochoq">
                    <label class="lochoq">1508</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8amarillo.png" class="nvochoq">
                    <label class="lochoq">1508</label>
                    </a>
                <?php } else { ?>
                    <a href="1508.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lochoq">1508</label>
                    <img src="images/8verde.png" class="nvochoq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 221){ ?>
            <label class="ltiponueveq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9rojo.png" class="nvnueveq">
                <label class="lnueveq">1509</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9amarillo.png" class="nvnueveq">
                <label class="lnueveq">1509</label>
                </a>
            <?php } else { ?>
                <a href="1509.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lnueveq">1509</label>
                <img src="images/9verde.png" class="nvnueveq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 222){ ?>
            <label class="ltipodiezq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10rojo.png" class="nvdiezq">
                <label class="ldiezq">1510</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10amarillo.png" class="nvdiezq">
                <label class="ldiezq">1510</label>
                </a>
            <?php } else { ?>
                <a href="1510.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiezq">1510</label>
                <img src="images/10verde.png" class="nvdiezq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 223){ ?>
            <label class="ltipoonceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11rojo.png" class="nvonceq">
                <label class="lonceq">1511</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11amarillo.png" class="nvonceq">
                <label class="lonceq">1511</label>
                </a>
            <?php } else { ?>
                <a href="1511.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lonceq">1511</label>
                <img src="images/11verde.png" class="nvonceq">
        <?php }}} ?></a>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 224){ ?>
            <label class="ltipodoceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12rojo.png" class="nvdoceq">
                <label class="ldoceq">1512</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12amarillo.png" class="nvdoceq">
                <label class="ldoceq">1512</label>
                </a>
            <?php } else { ?>
                <a href="1512.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldoceq">1512</label>
                <img src="images/12verde.png" class="nvdoceq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 225){ ?>
            <label class="ltipotreceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13rojo.png" class="nvtreceq">
                <label class="ltreceq">1513</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13amarillo.png" class="nvtreceq">
                <label class="ltreceq">1513</label>
                </a>
            <?php } else { ?>
                <a href="1513.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ltreceq">1513</label>
                <img src="images/13verde.png" class="nvtreceq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 226){ ?>
            <label class="ltipocatorceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14rojo.png" class="nvcatorceq">
                <label class="lcatorceq">1514</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14amarillo.png" class="nvcatorceq">
                <label class="lcatorceq">1514</label>
                </a>
            <?php } else { ?>
                <a href="1514.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lcatorceq">1514</label>
                <img src="images/14verde.png" class="nvcatorceq">
        <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 227){ ?>
                <label class="ltipoquinceq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5rojo.png" class="nvquinceq">
                    <label class="lquinceq">1515</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5amarillo.png" class="nvquinceq">
                    <label class="lquinceq">1515</label>
                    </a>
                <?php } else { ?>
                    <a href="1515.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lquiceq">1515</label>
                    <img src="images/5verde.png" class="nvquinceq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 228){ ?>
                <label class="ltipodieciseisq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6rojo.png" class="nvdieciseisq">
                    <label class="ldieciseisq">1516</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6amarillo.png" class="nvdieciseisq">
                    <label class="ldieciseisq">1516</label>
                    </a>
                <?php } else { ?>
                    <a href="1516.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldieciseisq">1516</label>
                    <img src="images/6verde.png" class="nvdieciseisq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 229){ ?>
            <label class="ltipodiecisieteq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13rojo.png" class="nvdiecisieteq">
                <label class="ldiecisieteq">1517</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13amarillo.png" class="nvdiecisieteq">
                <label class="ldiecisieteq">1517</label>
                </a>
            <?php } else { ?>
                <a href="1517.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiecisieteq">1517</label>
                <img src="images/13verde.png" class="nvdiecisieteq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 230){ ?>
            <label class="ltipodieciochoq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14rojo.png" class="nvdieciochoq">
                <label class="ldieciochoq">1518</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14amarillo.png" class="nvdieciochoq">
                <label class="ldieciochoq">1518</label>
                </a>
            <?php } else { ?>
                <a href="1518.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldieciochoq">1518</label>
                <img src="images/14verde.png" class="nvdieciochoq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 231){ ?>
            <label class="ltipodiecinueveq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12rojo.png" class="nvdiecinueveq">
                <label class="ldiecinueveq">1519</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12amarillo.png" class="nvdiecinueveq">
                <label class="ldiecinueveq">1519</label>
                </a>
            <?php } else { ?>
                <a href="1519.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiecinueveq">1519</label>
                <img src="images/12verde.png" class="nvdiecinueveq">
        <?php }}} ?></a>
        </div>
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 10) { ?>
                <label class="ltipoveinteq"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/20rojo.png" class="nvveinteq">
                    <label class="lveinteq">1520</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/20amarillo.png" class="nvveinteq">
                    <label class="lveinteq">1520</label>
                    </a>
                <?php } else { ?>
                    <a href="1520.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveinteq">1520</label>
                    <img src="images/20verde.png" class="nvveinteq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 36){?> 
                <label class="ltipoveintiunoq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintiunoq">
                    <label class="lveintiunoq">1521</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintiunoq">
                    <label class="lveintiunoq">1521</label>
                    </a>
                <?php } else { ?>
                    <a href="1521.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintiunoq">1521</label>
                    <img src="images/16verde.png" class="nvveintiunoq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 37){?> 
                <label class="ltipoveintidosq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintidosq">
                    <label class="lveintidosq">1522</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintidosq">
                    <label class="lveintidosq">1522</label>
                    </a>
                <?php } else { ?>
                    <a href="1522.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintidosq">1522</label>
                    <img src="images/16verde.png" class="nvveintidosq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 38){?> 
                <label class="ltipoveintitresq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintitresq">
                    <label class="lveintitresq">1523</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintitresq">
                    <label class="lveintitresq">1523</label>
                    </a>
                <?php } else { ?>
                    <a href="1523.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintitresq">1523</label>
                    <img src="images/16verde.png" class="nvveintitresq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 39){?> 
                <label class="ltipoveinticuatroq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveinticuatroq">
                    <label class="lveinticuatroq">1524</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado10.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveinticuatroq">
                    <label class="lveinticuatroq">1524</label>
                    </a>
                <?php } else { ?>
                    <a href="1524.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveinticuatroq">1524</label>
                    <img src="images/16verde.png" class="nvveinticuatroq">
            <?php }}} ?></a>
        </div>
        </div>
    </div>
</body>
</html>