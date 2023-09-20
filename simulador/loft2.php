<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/anexos.css">
    <title>Loft 1</title>
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
        <img src="images/pniveles/300.png" alt="Lofts" class="loftpos">
<!--Loft I-->
        <div>
            <?php
                $data1 = json_decode(file_get_contents($urldptos2), true);
                for ($i = 0; $i < count($data1); $i++) { if ($i == 44){ ?>
                <label class="ltipo1"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv1">
                    <label class="loft1">401</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv1">
                    <label class="loft1">401</label>
                    </a>
                <?php } else { ?>
                    <a href="401.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft1">401</label>
                    <img src="images/301verde.png" class="nv1">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 45){ ?>
                <label class="ltipo2"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv2">
                    <label class="loft2">402</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv2">
                    <label class="loft2">402</label>
                    </a>
                <?php } else { ?>
                    <a href="402.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft2">402</label>
                    <img src="images/302verde.png" class="nv2">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 46){ ?>
                <label class="ltipo3"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv3">
                    <label class="loft3">403</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv3">
                    <label class="loft3">403</label>
                    </a>
                <?php } else { ?>
                    <a href="403.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft3">403</label>
                    <img src="images/301verde.png" class="nv3">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 47){ ?>
                <label class="ltipo4"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv4">
                    <label class="loft4">404</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv4">
                    <label class="loft4">404</label>
                    </a>
                <?php } else { ?>
                    <a href="404.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft4">404</label>
                    <img src="images/302verde.png" class="nv4">
            <?php }}} ?></a>
        </div>
        
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 48){ ?>
                <label class="ltipo5"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv5">
                    <label class="loft5">405</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv5">
                    <label class="loft5">405</label>
                    </a>
                <?php } else { ?>
                    <a href="405.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft5">405</label>
                    <img src="images/301verde.png" class="nv5">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 49){ ?>
                <label class="ltipo6"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv6">
                    <label class="loft6">406</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv6">
                    <label class="loft6">406</label>
                    </a>
                <?php } else { ?>
                    <a href="406.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft6">406</label>
                    <img src="images/302verde.png" class="nv6">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 50){ ?>
                <label class="ltipo7"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv7">
                    <label class="loft7">407</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv7">
                    <label class="loft7">407</label>
                    </a>
                <?php } else { ?>
                    <a href="407.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft7">407</label>
                    <img src="images/301verde.png" class="nv7">
            <?php }}} ?></a>
        </div>
<!--Loft F-->
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 51){ ?>
                <label class="ltipo8"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv8">
                    <label class="loft8">408</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv8">
                    <label class="loft8">408</label>
                    </a>
                <?php } else { ?>
                    <a href="408.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft8">408</label>
                    <img src="images/308verde.png" class="nv8">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 52){ ?>
                <label class="ltipo9"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv9">
                    <label class="loft9">409</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv9">
                    <label class="loft9">409</label>
                    </a>
                <?php } else { ?>
                    <a href="409.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft9">409</label>
                    <img src="images/309verde.png" class="nv9">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 53){ ?>
                <label class="ltipo10"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv10">
                    <label class="loft10">410</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv10">
                    <label class="loft10">410</label>
                    </a>
                <?php } else { ?>
                    <a href="410.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft10">410</label>
                    <img src="images/310verde.png" class="nv10">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 54){ ?>
                <label class="ltipo11"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv11">
                    <label class="loft11">411</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv11">
                    <label class="loft11">411</label>
                    </a>
                <?php } else { ?>
                    <a href="411.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft11">411</label>
                    <img src="images/311verde.png" class="nv11">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 55){ ?>
                <label class="ltipo12"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv12">
                    <label class="loft12">412</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv12">
                    <label class="loft12">412</label>
                    </a>
                <?php } else { ?>
                    <a href="412.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft12">412</label>
                    <img src="images/308verde.png" class="nv12">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 57){ ?>
                <label class="ltipo13"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv13">
                    <label class="loft13">413</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv13">
                    <label class="loft13">413</label>
                    </a>
                <?php } else { ?>
                    <a href="413.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft13">413</label>
                    <img src="images/309verde.png" class="nv13">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 58){ ?>
                <label class="ltipo14"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv14">
                    <label class="loft14">414</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv14">
                    <label class="loft14">414</label>
                    </a>
                <?php } else { ?>
                    <a href="414.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft14">414</label>
                    <img src="images/310verde.png" class="nv14">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 59){ ?>
                <label class="ltipo15"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv15">
                    <label class="loft15">415</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv15">
                    <label class="loft15">415</label>
                    </a>
                <?php } else { ?>
                    <a href="415.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft15">415</label>
                    <img src="images/311verde.png" class="nv15">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 60){ ?>
                <label class="ltipo16"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv16">
                    <label class="loft16">416</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv16">
                    <label class="loft16">416</label>
                    </a>
                <?php } else { ?>
                    <a href="416.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft16">416</label>
                    <img src="images/308verde.png" class="nv16">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 61){ ?>
                <label class="ltipo17"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv17">
                    <label class="loft17">417</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv17">
                    <label class="loft17">417</label>
                    </a>
                <?php } else { ?>
                    <a href="417.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft17">417</label>
                    <img src="images/309verde.png" class="nv17">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 62){ ?>
                <label class="ltipo18"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv18">
                    <label class="loft18">418</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv18">
                    <label class="loft18">418</label>
                    </a>
                <?php } else { ?>
                    <a href="418.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft18">418</label>
                    <img src="images/310verde.png" class="nv18">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 63){ ?>
                <label class="ltipo19"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv19">
                    <label class="loft19">419</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv19">
                    <label class="loft19">419</label>
                    </a>
                <?php } else { ?>
                    <a href="419.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft19">419</label>
                    <img src="images/311verde.png" class="nv19">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 64){ ?>
                <label class="ltipo20"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv20">
                    <label class="loft20">420</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv20">
                    <label class="loft20">420</label>
                    </a>
                <?php } else { ?>
                    <a href="420.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft20">420</label>
                    <img src="images/308verde.png" class="nv20">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 65){ ?>
                <label class="ltipo21"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv21">
                    <label class="loft21">421</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv21">
                    <label class="loft21">421</label>
                    </a>
                <?php } else { ?>
                    <a href="421.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft21">421</label>
                    <img src="images/309verde.png" class="nv21">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 66){ ?>
                <label class="ltipo22"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv22">
                    <label class="loft22">422</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv22">
                    <label class="loft22">422</label>
                    </a>
                <?php } else { ?>
                    <a href="422.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft22">422</label>
                    <img src="images/310verde.png" class="nv22">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 67){ ?>
                <label class="ltipo23"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv23">
                    <label class="loft23">423</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv23">
                    <label class="loft23">423</label>
                    </a>
                <?php } else { ?>
                    <a href="423.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft23">423</label>
                    <img src="images/311verde.png" class="nv23">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 68){ ?>
                <label class="ltipo24"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv24">
                    <label class="loft24">424</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv24">
                    <label class="loft24">424</label>
                    </a>
                <?php } else { ?>
                    <a href="424.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft24">424</label>
                    <img src="images/308verde.png" class="nv24">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 69){ ?>
                <label class="ltipo25"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv25">
                    <label class="loft25">425</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv25">
                    <label class="loft25">425</label>
                    </a>
                <?php } else { ?>
                    <a href="425.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft25">425</label>
                    <img src="images/309verde.png" class="nv25">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 70){ ?>
                <label class="ltipo26"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv26">
                    <label class="loft26">426</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv26">
                    <label class="loft26">426</label>
                    </a>
                <?php } else { ?>
                    <a href="426.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft26">426</label>
                    <img src="images/310verde.png" class="nv26">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 71){ ?>
                <label class="ltipo27"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv27">
                    <label class="loft27">427</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv27">
                    <label class="loft27">427</label>
                    </a>
                <?php } else { ?>
                    <a href="427.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft27">427</label>
                    <img src="images/311verde.png" class="nv27">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 72){ ?>
                <label class="ltipo28"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv28">
                    <label class="loft28">428</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv28">
                    <label class="loft28">428</label>
                    </a>
                <?php } else { ?>
                    <a href="428.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft28">428</label>
                    <img src="images/308verde.png" class="nv28">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 74){ ?>
                <label class="ltipo29"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv29">
                    <label class="loft29">429</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv29">
                    <label class="loft29">429</label>
                    </a>
                <?php } else { ?>
                    <a href="429.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft29">429</label>
                    <img src="images/309verde.png" class="nv29">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 75){ ?>
                <label class="ltipo30"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv30">
                    <label class="loft30">430</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv30">
                    <label class="loft30">430</label>
                    </a>
                <?php } else { ?>
                    <a href="430.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft30">430</label>
                    <img src="images/310verde.png" class="nv30">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 76){ ?>
                <label class="ltipo31"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv31">
                    <label class="loft31">431</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv31">
                    <label class="loft31">431</label>
                    </a>
                <?php } else { ?>
                    <a href="431.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft31">431</label>
                    <img src="images/308verde.png" class="nv31">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 77){ ?>
                <label class="ltipo32"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv32">
                    <label class="loft32">432</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv32">
                    <label class="loft32">432</label>
                    </a>
                <?php } else { ?>
                    <a href="432.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft32">432</label>
                    <img src="images/308verde.png" class="nv32">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 78){ ?>
                <label class="ltipo33"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv33">
                    <label class="loft33">433</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv33">
                    <label class="loft33">433</label>
                    </a>
                <?php } else { ?>
                    <a href="433.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft33">433</label>
                    <img src="images/309verde.png" class="nv33">
            <?php }}} ?></a>
        </div>
<!--Loft D-->        
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 79){ ?>
                <label class="ltipo34"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv34">
                    <label class="loft34">434</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv34">
                    <label class="loft34">434</label>
                    </a>
                <?php } else { ?>
                    <a href="434.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft34">434</label>
                    <img src="images/301verde.png" class="nv34">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 80){ ?>
                <label class="ltipo35"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv35">
                    <label class="loft35">345</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv35">
                    <label class="loft35">435</label>
                    </a>
                <?php } else { ?>
                    <a href="435.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft35">435</label>
                    <img src="images/302verde.png" class="nv35">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 81){ ?>
                <label class="ltipo36"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv36">
                    <label class="loft36">436</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv36">
                    <label class="loft36">436</label>
                    </a>
                <?php } else { ?>
                    <a href="436.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft36">436</label>
                    <img src="images/301verde.png" class="nv36">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 82){ ?>
                <label class="ltipo37"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv37">
                    <label class="loft37">437</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv37">
                    <label class="loft37">437</label>
                    </a>
                <?php } else { ?>
                    <a href="437.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft37">437</label>
                    <img src="images/302verde.png" class="nv37">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 83){ ?>
                <label class="ltipo38"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv38">
                    <label class="loft38">438</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv38">
                    <label class="loft38">438</label>
                    </a>
                <?php } else { ?>
                    <a href="438.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft38">438</label>
                    <img src="images/301verde.png" class="nv38">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 84){ ?>
                <label class="ltipo39"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv39">
                    <label class="loft39">439</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv39">
                    <label class="loft39">439</label>
                    </a>
                <?php } else { ?>
                    <a href="439.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft39">439</label>
                    <img src="images/302verde.png" class="nv39">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 85){ ?>
                <label class="ltipo40"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv40">
                    <label class="loft40">440</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv40">
                    <label class="loft40">440</label>
                    </a>
                <?php } else { ?>
                    <a href="440.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft40">440</label>
                    <img src="images/301verde.png" class="nv40">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 86){ ?>
                <label class="ltipo41"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv41">
                    <label class="loft41">441</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv41">
                    <label class="loft41">441</label>
                    </a>
                <?php } else { ?>
                    <a href="441.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft41">441</label>
                    <img src="images/302verde.png" class="nv41">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 87){ ?>
                <label class="ltipo42"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv42">
                    <label class="loft42">442</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv42">
                    <label class="loft42">442</label>
                    </a>
                <?php } else { ?>
                    <a href="442.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft42">442</label>
                    <img src="images/301verde.png" class="nv42">
            <?php }}} ?></a>
        </div>
    </div>
</body>
</html>