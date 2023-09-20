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
                for ($i = 0; $i < count($data1); $i++) { if ($i == 0){ ?>
                <label class="ltipo1"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv1">
                    <label class="loft1">301</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv1">
                    <label class="loft1">301</label>
                    </a>
                <?php } else { ?>
                    <a href="301.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft1">301</label>
                    <img src="images/301verde.png" class="nv1">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 1){ ?>
                <label class="ltipo2"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv2">
                    <label class="loft2">302</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv2">
                    <label class="loft2">302</label>
                    </a>
                <?php } else { ?>
                    <a href="302.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft2">302</label>
                    <img src="images/302verde.png" class="nv2">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 2){ ?>
                <label class="ltipo3"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv3">
                    <label class="loft3">303</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv3">
                    <label class="loft3">303</label>
                    </a>
                <?php } else { ?>
                    <a href="303.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft3">303</label>
                    <img src="images/301verde.png" class="nv3">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 3){ ?>
                <label class="ltipo4"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv4">
                    <label class="loft4">304</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv4">
                    <label class="loft4">304</label>
                    </a>
                <?php } else { ?>
                    <a href="304.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft4">304</label>
                    <img src="images/302verde.png" class="nv4">
            <?php }}} ?></a>
        </div>
        
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 4){ ?>
                <label class="ltipo5"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv5">
                    <label class="loft5">305</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv5">
                    <label class="loft5">305</label>
                    </a>
                <?php } else { ?>
                    <a href="305.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft5">305</label>
                    <img src="images/301verde.png" class="nv5">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 5){ ?>
                <label class="ltipo6"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv6">
                    <label class="loft6">306</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv6">
                    <label class="loft6">306</label>
                    </a>
                <?php } else { ?>
                    <a href="306.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft6">306</label>
                    <img src="images/302verde.png" class="nv6">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 6){ ?>
                <label class="ltipo7"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv7">
                    <label class="loft7">307</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv7">
                    <label class="loft7">307</label>
                    </a>
                <?php } else { ?>
                    <a href="307.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft7">307</label>
                    <img src="images/301verde.png" class="nv7">
            <?php }}} ?></a>
        </div>
<!--Loft F-->
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 7){ ?>
                <label class="ltipo8"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv8">
                    <label class="loft8">308</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv8">
                    <label class="loft8">308</label>
                    </a>
                <?php } else { ?>
                    <a href="308.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft8">308</label>
                    <img src="images/308verde.png" class="nv8">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 8){ ?>
                <label class="ltipo9"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv9">
                    <label class="loft9">309</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv9">
                    <label class="loft9">309</label>
                    </a>
                <?php } else { ?>
                    <a href="309.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft9">309</label>
                    <img src="images/309verde.png" class="nv9">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 9){ ?>
                <label class="ltipo10"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv10">
                    <label class="loft10">310</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv10">
                    <label class="loft10">310</label>
                    </a>
                <?php } else { ?>
                    <a href="310.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft10">310</label>
                    <img src="images/310verde.png" class="nv10">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 10){ ?>
                <label class="ltipo11"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv11">
                    <label class="loft11">311</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv11">
                    <label class="loft11">311</label>
                    </a>
                <?php } else { ?>
                    <a href="311.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft11">311</label>
                    <img src="images/311verde.png" class="nv11">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 11){ ?>
                <label class="ltipo12"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv12">
                    <label class="loft12">312</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv12">
                    <label class="loft12">312</label>
                    </a>
                <?php } else { ?>
                    <a href="312.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft12">312</label>
                    <img src="images/308verde.png" class="nv12">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 13){ ?>
                <label class="ltipo13"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv13">
                    <label class="loft13">313</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv13">
                    <label class="loft13">313</label>
                    </a>
                <?php } else { ?>
                    <a href="313.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft13">313</label>
                    <img src="images/309verde.png" class="nv13">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 14){ ?>
                <label class="ltipo14"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv14">
                    <label class="loft14">314</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv14">
                    <label class="loft14">314</label>
                    </a>
                <?php } else { ?>
                    <a href="314.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft14">314</label>
                    <img src="images/310verde.png" class="nv14">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 15){ ?>
                <label class="ltipo15"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv15">
                    <label class="loft15">315</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv15">
                    <label class="loft15">315</label>
                    </a>
                <?php } else { ?>
                    <a href="315.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft15">315</label>
                    <img src="images/311verde.png" class="nv15">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 16){ ?>
                <label class="ltipo16"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv16">
                    <label class="loft16">316</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv16">
                    <label class="loft16">316</label>
                    </a>
                <?php } else { ?>
                    <a href="316.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft16">316</label>
                    <img src="images/308verde.png" class="nv16">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 17){ ?>
                <label class="ltipo17"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv17">
                    <label class="loft17">317</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv17">
                    <label class="loft17">317</label>
                    </a>
                <?php } else { ?>
                    <a href="317.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft17">317</label>
                    <img src="images/309verde.png" class="nv17">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 18){ ?>
                <label class="ltipo18"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv18">
                    <label class="loft18">318</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv18">
                    <label class="loft18">318</label>
                    </a>
                <?php } else { ?>
                    <a href="318.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft18">318</label>
                    <img src="images/310verde.png" class="nv18">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 19){ ?>
                <label class="ltipo19"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv19">
                    <label class="loft19">319</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv19">
                    <label class="loft19">319</label>
                    </a>
                <?php } else { ?>
                    <a href="319.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft19">319</label>
                    <img src="images/311verde.png" class="nv19">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 20){ ?>
                <label class="ltipo20"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv20">
                    <label class="loft20">320</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv20">
                    <label class="loft20">320</label>
                    </a>
                <?php } else { ?>
                    <a href="320.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft20">320</label>
                    <img src="images/308verde.png" class="nv20">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 21){ ?>
                <label class="ltipo21"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv21">
                    <label class="loft21">321</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv21">
                    <label class="loft21">321</label>
                    </a>
                <?php } else { ?>
                    <a href="321.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft21">321</label>
                    <img src="images/309verde.png" class="nv21">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 22){ ?>
                <label class="ltipo22"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv22">
                    <label class="loft22">322</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv22">
                    <label class="loft22">322</label>
                    </a>
                <?php } else { ?>
                    <a href="322.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft22">322</label>
                    <img src="images/310verde.png" class="nv22">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 23){ ?>
                <label class="ltipo23"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv23">
                    <label class="loft23">323</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv23">
                    <label class="loft23">323</label>
                    </a>
                <?php } else { ?>
                    <a href="323.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft23">323</label>
                    <img src="images/311verde.png" class="nv23">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 24){ ?>
                <label class="ltipo24"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv24">
                    <label class="loft24">324</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv24">
                    <label class="loft24">324</label>
                    </a>
                <?php } else { ?>
                    <a href="324.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft24">324</label>
                    <img src="images/308verde.png" class="nv24">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 25){ ?>
                <label class="ltipo25"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv25">
                    <label class="loft25">325</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv25">
                    <label class="loft25">325</label>
                    </a>
                <?php } else { ?>
                    <a href="325.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft25">325</label>
                    <img src="images/309verde.png" class="nv25">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 26){ ?>
                <label class="ltipo26"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv26">
                    <label class="loft26">326</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv26">
                    <label class="loft26">326</label>
                    </a>
                <?php } else { ?>
                    <a href="326.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft26">326</label>
                    <img src="images/310verde.png" class="nv26">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 27){ ?>
                <label class="ltipo27"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv27">
                    <label class="loft27">327</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv27">
                    <label class="loft27">327</label>
                    </a>
                <?php } else { ?>
                    <a href="327.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft27">327</label>
                    <img src="images/311verde.png" class="nv27">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 28){ ?>
                <label class="ltipo28"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv28">
                    <label class="loft28">328</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv28">
                    <label class="loft28">328</label>
                    </a>
                <?php } else { ?>
                    <a href="328.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft28">328</label>
                    <img src="images/308verde.png" class="nv28">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 30){ ?>
                <label class="ltipo29"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv29">
                    <label class="loft29">329</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv29">
                    <label class="loft29">329</label>
                    </a>
                <?php } else { ?>
                    <a href="329.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft29">329</label>
                    <img src="images/309verde.png" class="nv29">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 31){ ?>
                <label class="ltipo30"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310rojo.png" class="nv30">
                    <label class="loft30">330</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/310amarillo.png" class="nv30">
                    <label class="loft30">330</label>
                    </a>
                <?php } else { ?>
                    <a href="330.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft30">330</label>
                    <img src="images/310verde.png" class="nv30">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 32){ ?>
                <label class="ltipo31"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311rojo.png" class="nv31">
                    <label class="loft31">331</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/311amarillo.png" class="nv31">
                    <label class="loft31">331</label>
                    </a>
                <?php } else { ?>
                    <a href="331.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft31">331</label>
                    <img src="images/308verde.png" class="nv31">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 33){ ?>
                <label class="ltipo32"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308rojo.png" class="nv32">
                    <label class="loft32">332</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/308amarillo.png" class="nv32">
                    <label class="loft32">332</label>
                    </a>
                <?php } else { ?>
                    <a href="332.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft32">332</label>
                    <img src="images/308verde.png" class="nv32">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 34){ ?>
                <label class="ltipo33"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309rojo.png" class="nv33">
                    <label class="loft33">333</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/309amarillo.png" class="nv33">
                    <label class="loft33">333</label>
                    </a>
                <?php } else { ?>
                    <a href="333.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft33">333</label>
                    <img src="images/309verde.png" class="nv33">
            <?php }}} ?></a>
        </div>
<!--Loft D-->        
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 35){ ?>
                <label class="ltipo34"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv34">
                    <label class="loft34">334</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv34">
                    <label class="loft34">334</label>
                    </a>
                <?php } else { ?>
                    <a href="334.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft34">334</label>
                    <img src="images/301verde.png" class="nv34">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 36){ ?>
                <label class="ltipo35"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv35">
                    <label class="loft35">335</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv35">
                    <label class="loft35">335</label>
                    </a>
                <?php } else { ?>
                    <a href="335.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft35">335</label>
                    <img src="images/302verde.png" class="nv35">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 37){ ?>
                <label class="ltipo36"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv36">
                    <label class="loft36">336</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv36">
                    <label class="loft36">336</label>
                    </a>
                <?php } else { ?>
                    <a href="336.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft36">336</label>
                    <img src="images/301verde.png" class="nv36">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 38){ ?>
                <label class="ltipo37"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv37">
                    <label class="loft37">337</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv37">
                    <label class="loft37">337</label>
                    </a>
                <?php } else { ?>
                    <a href="337.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft37">337</label>
                    <img src="images/302verde.png" class="nv37">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 39){ ?>
                <label class="ltipo38"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv38">
                    <label class="loft38">338</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv38">
                    <label class="loft38">338</label>
                    </a>
                <?php } else { ?>
                    <a href="338.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft38">338</label>
                    <img src="images/301verde.png" class="nv38">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 40){ ?>
                <label class="ltipo39"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv39">
                    <label class="loft39">339</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv39">
                    <label class="loft39">339</label>
                    </a>
                <?php } else { ?>
                    <a href="339.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft39">339</label>
                    <img src="images/302verde.png" class="nv39">
            <?php }}} ?></a>
        </div>

        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 41){ ?>
                <label class="ltipo40"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv40">
                    <label class="loft40">340</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv40">
                    <label class="loft40">340</label>
                    </a>
                <?php } else { ?>
                    <a href="340.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft40">340</label>
                    <img src="images/301verde.png" class="nv40">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 42){ ?>
                <label class="ltipo41"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302rojo.png" class="nv41">
                    <label class="loft41">341</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/302amarillo.png" class="nv41">
                    <label class="loft41">341</label>
                    </a>
                <?php } else { ?>
                    <a href="341.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft41">341</label>
                    <img src="images/302verde.png" class="nv41">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 43){ ?>
                <label class="ltipo42"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendidoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301rojo.png" class="nv42">
                    <label class="loft42">342</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartadoloft1.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/301amarillo.png" class="nv42">
                    <label class="loft42">342</label>
                    </a>
                <?php } else { ?>
                    <a href="342.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="loft42">342</label>
                    <img src="images/301verde.png" class="nv42">
            <?php }}} ?></a>
        </div>
    </div>
</body>
</html>