<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/anexos.css">
    <link href="css/simulador.css" rel="stylesheet">
    <title>GRACIAS</title>
</head>
<?php 
//listado de departamentos Tipo A y PH
$urldptos1 ="https://rodrik.mx/api/listado_deptos_desarrollo.php?id=6";?>

<?php
//listado de departamentos Tipo F G H
$urldptos2 ="https://rodrik.mx/api/listado_deptos_desarrollo.php?id=7";?>

<?php
    $data = json_decode(file_get_contents($urldptos1), true);
    $data1 = json_decode(file_get_contents($urldptos2), true);
?>
<?php
        $urldptos1 ="https://rodrik.mx/api/listado_deptos_desarrollo.php?id=6";
        $urlinfo = "https://rodrik.mx/api/info_depto.php?iddes=6&iddep=1634";
        //Informacion del departamento
        $data3 = json_decode(file_get_contents($urlinfo),true);
        $var = $data3["INFO_DEPTO"];
        $var1 = $data3["PLANES"]["HIPOTECARIO"];
        $var2 = $data3["PLANES"]["FINANCIERO 1"];
        $var3 = $data3["PLANES"]["FINANCIERO 2"];
        $var4 = $data3["PLANES"]["CONTADO"];
    ?>
<body class="fondobody" style="background-color: #0a4448;">
    <div class="flex-row1">
        <table id="corrida-fin1" class="corrida-fin">
            <thead>
                <tr>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr><td class="centrar"><p style="font-size: 3.5rem;">GRACIAS<br>POR LA CONFIANZA</p></td></tr>
                <tr><td><br><br><br><img src="images/logo_blanco.png" alt="Logo" class="dim"></td></tr>
            </tbody>
        </table>
</body>
</html>