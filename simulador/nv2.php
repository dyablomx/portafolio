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
        <img src="images/pniveles/600.png" alt="Nivel2" class="images-simuladornv1">
        <div>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for ($i = 0; $i < count($data); $i++) { if ($i == 1) { ?>
                <label class="ltipounos"><?php echo $data[$i]["tipo"]?></label>
                <?php if ($data[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1rojo.png" class="nvunos">
                    <label class="lunos">701</label>
                    </a>
                <?php } elseif ($data[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/1amarillo.png" class="nvunos">
                    <label class="lunos">701</label>
                    </a>
                <?php } else { ?>
                    <a href="701.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lunos">701</label>
                    <img src="images/1verde.png" class="nvunos">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                $data1 = json_decode(file_get_contents($urldptos2), true);
                for ($i = 0; $i < count($data1); $i++) { if ($i == 102){ ?>
                <label class="ltipodos"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2rojo.png" class="nvdos">
                    <label class="ldos">702</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/2amarillo.png" class="nvdos">
                    <label class="ldos">702</label>
                    </a>
                <?php } else { ?>
                    <a href="702.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldos">702</label>
                    <img src="images/2verde.png" class="nvdos">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 103){ ?>
                <label class="ltipotres"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3rojo.png" class="nvtres">
                    <label class="ltres">703</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/3amarillo.png" class="nvtres">
                    <label class="ltres">703</label>
                    </a>
                <?php } else { ?>
                    <a href="703.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ltres">703</label>
                    <img src="images/3verde.png" class="nvtres">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 104){ ?>
                <label class="ltipocuatro"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4rojo.png" class="nvcuatro">
                    <label class="lcuatro">704</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/4amarillo.png" class="nvcuatro">
                    <label class="lcuatro">704</label>
                    </a>
                <?php } else { ?>
                    <a href="704.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcuatro">704</label>
                    <img src="images/4verde.png" class="nvcuatro">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 105){ ?>
                <label class="ltipocinco"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5rojo.png" class="nvcinco">
                    <label class="lcinco">705</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/5amarillo.png" class="nvcinco">
                    <label class="lcinco">705</label>
                    </a>
                <?php } else { ?>
                    <a href="705.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lcinco">705</label>
                    <img src="images/5verde.png" class="nvcinco">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 106){ ?>
                <label class="ltiposeis"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6rojo.png" class="nvseis">
                    <label class="lseis">706</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/6amarillo.png" class="nvseis">
                    <label class="lseis">706</label>
                    </a>
                <?php } else { ?>
                    <a href="706.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lseis">706</label>
                    <img src="images/6verde.png" class="nvseis">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 107){ ?>
                <label class="ltiposiete"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7rojo.png" class="nvsiete">
                    <label class="lsiete">707</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/7amarillo.png" class="nvsiete">
                    <label class="lsiete">707</label>
                    </a>
                <?php } else { ?>
                    <a href="707.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="lsiete">707</label>
                    <img src="images/7verde.png" class="nvsiete">
            <?php }}} ?></a>
        </div>
        <div>
            <?php
                for ($i = 0; $i < count($data1); $i++) { if ($i == 108){ ?>
                <label class="ltipoocho"><?php echo $data1[$i]["tipo"]?></label>
                <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8rojo.png" class="nvocho">
                    <label class="locho">708</label>
                    </a>
                <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/8amarillo.png" class="nvocho">
                    <label class="locho">708</label>
                    </a>
                <?php } else { ?>
                    <a href="708.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="locho">708</label>
                    <img src="images/8verde.png" class="nvocho">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 109){ ?>
            <label class="ltiponueve"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9rojo.png" class="nvnueve">
                <label class="lnueve">709</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/9amarillo.png" class="nvnueve">
                <label class="lnueve">709</label>
                </a>
            <?php } else { ?>
                <a href="709.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lnueve">709</label>
                <img src="images/9verde.png" class="nvnueve">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 110){ ?>
            <label class="ltipodiez"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10rojo.png" class="nvdiez">
                <label class="ldiez">710</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/10amarillo.png" class="nvdiez">
                <label class="ldiez">710</label>
                </a>
            <?php } else { ?>
                <a href="710.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldiez">710</label>
                <img src="images/10verde.png" class="nvdiez">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 111){ ?>
            <label class="ltipoonce"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11rojo.png" class="nvonce">
                <label class="lonce">711</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/11amarillo.png" class="nvonce">
                <label class="lonce">711</label>
                </a>
            <?php } else { ?>
                <a href="711.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lonce">711</label>
                <img src="images/11verde.png" class="nvonce">
        <?php }}} ?></a>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 112){ ?>
            <label class="ltipodoce"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12rojo.png" class="nvdoce">
                <label class="ldoce">712</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/12amarillo.png" class="nvdoce">
                <label class="ldoce">712</label>
                </a>
            <?php } else { ?>
                <a href="712.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ldoce">712</label>
                <img src="images/12verde.png" class="nvdoce">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 113){ ?>
            <label class="ltipotrece"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13rojo.png" class="nvtrece">
                <label class="ltrece">713</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/13amarillo.png" class="nvtrece">
                <label class="ltrece">713</label>
                </a>
            <?php } else { ?>
                <a href="713.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="ltrece">713</label>
                <img src="images/13verde.png" class="nvtrece">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 114){ ?>
            <label class="ltipocatorce"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14rojo.png" class="nvcatorce">
                <label class="lcatorce">714</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/14amarillo.png" class="nvcatorce">
                <label class="lcatorce">714</label>
                </a>
            <?php } else { ?>
                <a href="714.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lcatorce">714</label>
                <img src="images/14verde.png" class="nvcatorce">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
            for ($i = 0; $i < count($data1); $i++) { if ($i == 115){ ?>
            <label class="ltipoquince"><?php echo $data1[$i]["tipo"]?></label>
            <?php if ($data1[$i]["estatus"] == "VENDIDO") { ?>
                <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/15rojob.png" class="nvquince">
                <label class="lquince">715</label>
                </a>
            <?php } elseif ($data1[$i]["estatus"] == "APARTADO") { ?>
                <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <img src="images/15amarillob.png" class="nvquince">
                <label class="lquince">715</label>
                </a>
            <?php } else { ?>
                <a href="715.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                <label class="lquince">715</label>
                <img src="images/15verdeb.png" class="nvquine">
        <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 4){?> 
                <label class="ltipodieciseis"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvdieciseis">
                    <label class="ldieciseis">716</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvdieciseis">
                    <label class="ldieciseis">716</label>
                    </a>
                <?php } else { ?>
                    <a href="716.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldieciseis">716</label>
                    <img src="images/16verde.png" class="nvdieciseis">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 5){?> 
                <label class="ltipodiecisiete"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvdiecisiete">
                    <label class="ldiecisiete">717</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvdiecisiete">
                    <label class="ldiecisiete">717</label>
                    </a>
                <?php } else { ?>
                    <a href="717.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldiecisiete">717</label>
                    <img src="images/16verde.png" class="nvdiecisiete">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 6){?> 
                <label class="ltipodieciocho"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvdieciocho">
                    <label class="ldieciocho">718</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvdieciocho">
                    <label class="ldieciocho">718</label>
                    </a>
                <?php } else { ?>
                    <a href="718.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldieciocho">718</label>
                    <img src="images/16verde.png" class="nvdieciocho">
            <?php }}} ?></a>
        </div>
        <div>
        <?php
        $data2 = json_decode(file_get_contents($urldptos3), true);
            for($i=0; $i<count($data2); $i++){?>
            <?php if ($i == 7){?> 
                <label class="ltipodiecinueve"><?php echo $data2[$i]["tipo"]?></label>
                <?php if ($data2[$i]["estatus"] == "VENDIDO") { ?>
                    <a href="alertavendido2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16rojo.png" class="nvdiecinueve">
                    <label class="ldiecinueve">719</label>
                    </a>
                <?php } elseif ($data2[$i]["estatus"] == "APARTADO") { ?>
                    <a href="alertapartado2.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <img src="images/16amarillo.png" class="nvdiecinueve">
                    <label class="ldiecinueve">719</label>
                    </a>
                <?php } else { ?>
                    <a href="619.php" data-fancybox data-type="iframe" data-preload="false" data-width="1188" data-height="1155">
                    <label class="ldiecinueve">719</label>
                    <img src="images/16verde.png" class="nvdiecinueve">
            <?php }}} ?></a>
        </div>
        </div>
    </div>
</body>
</html>