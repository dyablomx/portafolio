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
        <img src="images/pniveles/1500.png" alt="Nivel12" class="images-simuladornv1">
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 13) { ?>
                <label class="ltipounosq"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1rojo.png" class="nvunosq">
                    <label class="lunosq">1701</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1amarillo.png" class="nvunosq">
                    <label class="lunosq">1701</label>
                    </a>
                <?php } else { ?>
                    <a href="1701.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lunosq">1701</label>
                    <img src="images/1verde.png" class="nvunosq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                $data1 = json_decode(file_get_contents($urldptos2), true);
                for ($i = 0; $i < count($data1); $i++) { if ($i == 250){ ?>
                <label class="ltipodosq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2rojo.png" class="nvdosq">
                    <label class="ldosq">1702</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2amarillo.png" class="nvdosq">
                    <label class="ldosq">1702</label>
                    </a>
                <?php } else { ?>
                    <a href="1702.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldosq">1702</label>
                    <img src="images/2verde.png" class="nvdosq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 251){ ?>
                <label class="ltipotresq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3rojo.png" class="nvtresq">
                    <label class="ltresq">1703</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3amarillo.png" class="nvtresq">
                    <label class="ltresq">1703</label>
                    </a>
                <?php } else { ?>
                    <a href="1703.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ltresq">1703</label>
                    <img src="images/3verde.png" class="nvtresq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 252){ ?>
                <label class="ltipocuatroq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4rojo.png" class="nvcuatroq">
                    <label class="lcuatroq">1704</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4amarillo.png" class="nvcuatroq">
                    <label class="lcuatroq">1704</label>
                    </a>
                <?php } else { ?>
                    <a href="1704.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcuatroq">1704</label>
                    <img src="images/4verde.png" class="nvcuatroq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 253){ ?>
                <label class="ltipocincoq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5rojo.png" class="nvcincoq">
                    <label class="lcincoq">1705</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5amarillo.png" class="nvcincoq">
                    <label class="lcincoq">1705</label>
                    </a>
                <?php } else { ?>
                    <a href="1705.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcincoq">1705</label>
                    <img src="images/5verde.png" class="nvcincoq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 254){ ?>
                <label class="ltiposeisq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6rojo.png" class="nvseisq">
                    <label class="lseisq">1706</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6amarillo.png" class="nvseisq">
                    <label class="lseisq">1706</label>
                    </a>
                <?php } else { ?>
                    <a href="1706.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lseisq">1706</label>
                    <img src="images/6verde.png" class="nvseisq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 255){ ?>
                <label class="ltiposieteq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7rojo.png" class="nvsieteq">
                    <label class="lsieteq">1707</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7amarillo.png" class="nvsieteq">
                    <label class="lsieteq">1707</label>
                    </a>
                <?php } else { ?>
                    <a href="1707.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lsieteq">1707</label>
                    <img src="images/7verde.png" class="nvsieteq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 256){ ?>
                <label class="ltipoochoq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8rojo.png" class="nvochoq">
                    <label class="lochoq">1708</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8amarillo.png" class="nvochoq">
                    <label class="lochoq">1708</label>
                    </a>
                <?php } else { ?>
                    <a href="1708.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lochoq">1708</label>
                    <img src="images/8verde.png" class="nvochoq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 257){ ?>
            <label class="ltiponueveq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9rojo.png" class="nvnueveq">
                <label class="lnueveq">1709</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9amarillo.png" class="nvnueveq">
                <label class="lnueveq">1709</label>
                </a>
            <?php } else { ?>
                <a href="1709.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lnueveq">1709</label>
                <img src="images/9verde.png" class="nvnueveq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 258){ ?>
            <label class="ltipodiezq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10rojo.png" class="nvdiezq">
                <label class="ldiezq">1710</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10amarillo.png" class="nvdiezq">
                <label class="ldiezq">1710</label>
                </a>
            <?php } else { ?>
                <a href="1710.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiezq">1710</label>
                <img src="images/10verde.png" class="nvdiezq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 259){ ?>
            <label class="ltipoonceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11rojo.png" class="nvonceq">
                <label class="lonceq">1711</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11amarillo.png" class="nvonceq">
                <label class="lonceq">1711</label>
                </a>
            <?php } else { ?>
                <a href="1711.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lonceq">1711</label>
                <img src="images/11verde.png" class="nvonceq">
        <?php }}} ?></a>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 260){ ?>
            <label class="ltipodoceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12rojo.png" class="nvdoceq">
                <label class="ldoceq">1712</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12amarillo.png" class="nvdoceq">
                <label class="ldoceq">1712</label>
                </a>
            <?php } else { ?>
                <a href="1712.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldoceq">1712</label>
                <img src="images/12verde.png" class="nvdoceq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 261){ ?>
            <label class="ltipotreceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13rojo.png" class="nvtreceq">
                <label class="ltreceq">1713</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13amarillo.png" class="nvtreceq">
                <label class="ltreceq">1713</label>
                </a>
            <?php } else { ?>
                <a href="1713.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ltreceq">1713</label>
                <img src="images/13verde.png" class="nvtreceq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 262){ ?>
            <label class="ltipocatorceq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14rojo.png" class="nvcatorceq">
                <label class="lcatorceq">1714</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14amarillo.png" class="nvcatorceq">
                <label class="lcatorceq">1714</label>
                </a>
            <?php } else { ?>
                <a href="1714.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lcatorceq">1714</label>
                <img src="images/14verde.png" class="nvcatorceq">
        <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 263){ ?>
                <label class="ltipoquinceq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5rojo.png" class="nvquinceq">
                    <label class="lquinceq">1715</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5amarillo.png" class="nvquinceq">
                    <label class="lquinceq">1715</label>
                    </a>
                <?php } else { ?>
                    <a href="1715.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lquiceq">1715</label>
                    <img src="images/5verde.png" class="nvquinceq">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 264){ ?>
                <label class="ltipodieciseisq"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6rojo.png" class="nvdieciseisq">
                    <label class="ldieciseisq">1716</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6amarillo.png" class="nvdieciseisq">
                    <label class="ldieciseisq">1716</label>
                    </a>
                <?php } else { ?>
                    <a href="1716.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldieciseisq">1716</label>
                    <img src="images/6verde.png" class="nvdieciseisq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 265){ ?>
            <label class="ltipodiecisieteq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13rojo.png" class="nvdiecisieteq">
                <label class="ldiecisieteq">1717</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13amarillo.png" class="nvdiecisieteq">
                <label class="ldiecisieteq">1717</label>
                </a>
            <?php } else { ?>
                <a href="1717.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiecisieteq">1717</label>
                <img src="images/13verde.png" class="nvdiecisieteq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 266){ ?>
            <label class="ltipodieciochoq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14rojo.png" class="nvdieciochoq">
                <label class="ldieciochoq">1718</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14amarillo.png" class="nvdieciochoq">
                <label class="ldieciochoq">1718</label>
                </a>
            <?php } else { ?>
                <a href="1718.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldieciochoq">1718</label>
                <img src="images/14verde.png" class="nvdieciochoq">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 267){ ?>
            <label class="ltipodiecinueveq"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12rojo.png" class="nvdiecinueveq">
                <label class="ldiecinueveq">1719</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12amarillo.png" class="nvdiecinueveq">
                <label class="ldiecinueveq">1719</label>
                </a>
            <?php } else { ?>
                <a href="1719.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiecinueveq">1719</label>
                <img src="images/12verde.png" class="nvdiecinueveq">
        <?php }}} ?></a>
        </div>
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 14) { ?>
                <label class="ltipoveinteq"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/20rojo.png" class="nvveinteq">
                    <label class="lveinteq">1720</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/20amarillo.png" class="nvveinteq">
                    <label class="lveinteq">1720</label>
                    </a>
                <?php } else { ?>
                    <a href="1720.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveinteq">1720</label>
                    <img src="images/20verde.png" class="nvveinteq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 44){?> 
                <label class="ltipoveintiunoq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintiunoq">
                    <label class="lveintiunoq">1721</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintiunoq">
                    <label class="lveintiunoq">1721</label>
                    </a>
                <?php } else { ?>
                    <a href="1721.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintiunoq">1721</label>
                    <img src="images/16verde.png" class="nvveintiunoq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 45){?> 
                <label class="ltipoveintidosq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintidosq">
                    <label class="lveintidosq">1722</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintidosq">
                    <label class="lveintidosq">1722</label>
                    </a>
                <?php } else { ?>
                    <a href="1722.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintidosq">1722</label>
                    <img src="images/16verde.png" class="nvveintidosq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 46){?> 
                <label class="ltipoveintitresq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveintitresq">
                    <label class="lveintitresq">1723</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveintitresq">
                    <label class="lveintitresq">1723</label>
                    </a>
                <?php } else { ?>
                    <a href="1723.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveintitresq">1723</label>
                    <img src="images/16verde.png" class="nvveintitresq">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 47){?> 
                <label class="ltipoveinticuatroq"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvveinticuatroq">
                    <label class="lveinticuatroq">1724</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado12.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvveinticuatroq">
                    <label class="lveinticuatroq">1724</label>
                    </a>
                <?php } else { ?>
                    <a href="1724.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lveinticuatroq">1724</label>
                    <img src="images/16verde.png" class="nvveinticuatroq">
            <?php }}} ?></a>
        </div>
        </div>
    </div>
</body>
</html>