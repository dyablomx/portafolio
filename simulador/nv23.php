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
        <img src="images/pniveles/2800.png" alt="Nivel23">
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 35) { ?>
                <label class="ltipounosqwertyui"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido23.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1rojo.png" class="nvunosqwertyui">
                    <label class="lunosqwertyui">2801</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado23.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1amarillo.png" class="nvunosqwertyui">
                    <label class="lunosqwertyui">2801</label>
                    </a>
                <?php } else { ?>
                    <a href="2801.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lunosqwertyui">2801</label>
                    <img src="images/1verde.png" class="nvunosqwertyui">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                $data1 = json_decode(file_get_contents($urldptos2), true);
                for ($i = 0; $i < count($data1); $i++) { if ($i == 383){ ?>
                <label class="ltipodosqwertyui"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido23.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2rojo.png" class="nvdosqwertyui">
                    <label class="ldosqwertyui">2802</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado23.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2amarillo.png" class="nvdosqwertyui">
                    <label class="ldosqwertyui">2802</label>
                    </a>
                <?php } else { ?>
                    <a href="2802.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldosqwertyui">2802</label>
                    <img src="images/2verde.png" class="nvdosqwertyui">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 384){ ?>
                <label class="ltipotresqwertyui"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido23.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3rojo.png" class="nvtresqwertyui">
                    <label class="ltresqwertyui">2803</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado23.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3amarillo.png" class="nvtresqwertyui">
                    <label class="ltresqwertyui">2803</label>
                    </a>
                <?php } else { ?>
                    <a href="2803.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ltresqwertyui">2803</label>
                    <img src="images/3verde.png" class="nvtresqwertyui">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 36) { ?>
                <label class="ltipophcuatroq"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido23.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2804rojo.png" class="nvphcuatroq">
                    <label class="lphcuatroq">2804</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado23.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2804amarillo.png" class="nvphcuatroq">
                    <label class="lphcuatroq">2804</label>
                    </a>
                <?php } else { ?>
                    <a href="2804.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lphcuatroq">2804</label>
                    <img src="images/2804verde.png" class="nvphcuatroq">
            <?php }}} ?></a>
        </div>
        </div>
    </div>
</body>
</html>