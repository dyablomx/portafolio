<?php
//listado de departamentos Tipo A y PH
$urldptos1 ="https://rodrik.mx/api/listado_deptos_desarrollo.php?id=6";
//listado de departamentos Tipo F G H
$urldptos2 ="https://rodrik.mx/api/listado_deptos_desarrollo.php?id=7";
//Informacion de planes y departamentos
$urlinfo = "https://rodrik.mx/api/info_depto.php?iddes=7&iddep=1906";
?>
            <?php
            $data = json_decode(file_get_contents($urldptos1), true);
                for($i=0; $i<count($data); $i++){?>
                    <?php if ($i == 0){?>
                      <label for="depto">Departamento <?php echo $data[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data[$i]["estatus"];?></label>
            <?php }}?>
<br><br>
            <?php
            $data1 = json_decode(file_get_contents($urldptos2), true);
                for($i=0; $i<count($data1); $i++){?>
            <?php if ($i == 88){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 89){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 90){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 91){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 92){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 93){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
          <?php if ($i == 94){?>
            <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 95){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 96){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 97){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 98){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 99){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 100){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }?>
<br><br>
            <?php if ($i == 101){?>
              <label for="depto">Departamento <?php echo $data1[$i]["depto"]?></label>
                <br>
                      <label for="price">Precio Lista: <?php echo $data1[$i]["valortotal"]." MXN";?></label>
                      <br>
                      <label for="estatus" class="estatus"><?php echo $data1[$i]["estatus"];?></label>
            <?php }}?>

<!--
<section style="display: flex; flex-direction: row; justify-content: space-around;">
  <div>
    <?php
      $data = json_decode(file_get_contents($urldptos1), true);
      //print_r ($data);
      for($i=0; $i<count($data); $i++){
        if ($i == $i){
          echo $i." - ".$data[$i]["id"]."<br>";
          echo $data[$i]["depto"]."<br>";
          echo $data[$i]["tipo"]."<br>";
          echo $data[$i]["suptotal"]." m2"."<br>";
          echo $data[$i]["valortotal"]." MXN"."<br>";
          echo $data[$i]["HIPOTECARIO"]." MXN"."<br>";
          echo $data[$i]["FINANCIERO 1"]." MXN"."<br>";
          echo $data[$i]["FINANCIERO 2"]." MXN"."<br>";
          echo $data[$i]["CONTADO"]." MXN"."<br>";
          echo "ESTATUS: ".$data[$i]["estatus"]."<br><br>";
        }
      }
    ?>
  </div>
  <div>
    <?php
      $data1 = json_decode(file_get_contents($urldptos2), true);
      //print_r ($data1);
      for($i=0; $i<count($data1); $i++){
        if ($i == $i){
          echo $i." - ".$data1[$i]["id"]."<br>";
          echo $data1[$i]["depto"]."<br>";
          echo $data1[$i]["tipo"]."<br>";
          echo $data1[$i]["suptotal"]."<br>";
          echo $data1[$i]["valortotal"]."<br>";
          echo $data1[$i]["HIPOTECARIO"]."<br>";
          echo $data1[$i]["FINANCIERO 1"]."<br>";
          echo $data1[$i]["FINANCIERO 2"]."<br>";
          echo $data1[$i]["CONTADO"]."<br>";
          echo $data1[$i]["estatus"]."<br><br>";
        }
      }
    ?>
  </div>
  <div>
    <?php
      //Informacion del departamento
      $data3 = json_decode(file_get_contents($urlinfo),true);
      //print_r ($data3);
      $var = $data3["INFO_DEPTO"];
      echo "PRECIO LISTA: $".$var["PRECIO_LISTA"]."<br>";
      echo "DEPARTAMENTO: ".$var["DEPTO"]."<br>";
      echo "M2: ".$var["M2_DEPTO"]." m2"."<br>";
      echo "NIVEL: ".$var["NIVEL"]."<br>";
      echo "M2 TERRAZA: ".$var["M2 TERRAZA"]." m2"."<br>";
      echo "BODEGA: ".$var["BODEGA"]."<br>";
      echo "SUPERFICIE TOTAL: ".$var["SUPERFICIE_TOTAL"]." m2"."<br>";
      echo "CAJONES ESTACIONAMIENTO: ".$var["CAJONES"]."<br>";
      echo "PRECIO M2: $".$var["PRECIO_M2"]."<br>";
      echo "DETALLES DEL DEPTO: ".$var["DETALLES DEL DEPTO"]."<br>";
      echo "APARTA CON: $".$var["APARTADO"]." MXN";
      echo "<br><br>";

      $var1 = $data3["PLANES"]["HIPOTECARIO"];
      echo "PLAN HIPOTECARIO"."<br>";
      echo "PRECIO CON DESCUENTO: $".$var1["DESCUENTO PLAN"]."<br>";
      echo "AHORRO DE: $".$var1["AHORRO"]." MXN"."<br>";
      echo "PORCENTAJE DEL ENGANCHE ".$var1["ENGANCHE_PRCENTAJE"]." %"."<br>";
      echo "ENGANCHE DE $".$var1["ENGANCHE"]."<br>";
      echo "PORCENTAJE DURANTE LA OBRA DE".$var1["DURANTE_OBRA_PORCENTAJE"]." %"."<br>";
      echo "DURANTE LA OBRA $".$var1["DURANTE_OBRA"]."<br>";
      echo $var1["MENSUALIDADES"]." MENSUALIDADES "."<br>";
      echo "MENSUALIDAD DE $".$var1["MENSUALIDAD"]."<br>";
      echo "PORCENTAJE A LA ENTREGA ".$var1["A_LA_ENTRGA_PORCENTAJE"]."%"."<br>";
      echo "A LA ENTREGA $".$var1["A_LA_ENTRGA"]."<br>";
      echo "<br><br>";

      $var2 = $data3["PLANES"]["FINANCIERO 1"];
      echo "PLAN FINANCIERO1"."<br>";
      echo "PRECIO CON DESCUENTO: $".$var2["DESCUENTO PLAN"]."<br>";
      echo "AHORRO DE: $".$var2["AHORRO"]." MXN"."<br>";
      echo "PORCENTAJE DEL ENGANCHE ".$var2["ENGANCHE_PRCENTAJE"]." %"."<br>";
      echo "ENGANCHE DE $".$var2["ENGANCHE"]."<br>";
      echo "PORCENTAJE DURANTE LA OBRA DE".$var2["DURANTE_OBRA_PORCENTAJE"]." %"."<br>";
      echo "DURANTE LA OBRA $".$var2["DURANTE_OBRA"]."<br>";
      echo $var2["MENSUALIDADES"]." MENSUALIDADES "."<br>";
      echo "MENSUALIDAD DE $".$var2["MENSUALIDAD"]."<br>";
      echo "PORCENTAJE A LA ENTREGA ".$var2["A_LA_ENTRGA_PORCENTAJE"]."%"."<br>";
      echo "A LA ENTREGA $".$var2["A_LA_ENTRGA"]."<br>";
      echo "<br><br>";

      $var3 = $data3["PLANES"]["FINANCIERO 2"];
      echo "PLAN FINANCIERO2"."<br>";
      echo "PRECIO CON DESCUENTO: $".$var3["DESCUENTO PLAN"]."<br>";
      echo "AHORRO DE: $".$var3["AHORRO"]." MXN"."<br>";
      echo "PORCENTAJE DEL ENGANCHE ".$var3["ENGANCHE_PRCENTAJE"]." %"."<br>";
      echo "ENGANCHE DE $".$var3["ENGANCHE"]."<br>";
      echo "PORCENTAJE DURANTE LA OBRA DE".$var3["DURANTE_OBRA_PORCENTAJE"]." %"."<br>";
      echo "DURANTE LA OBRA $".$var3["DURANTE_OBRA"]."<br>";
      echo $var3["MENSUALIDADES"]." MENSUALIDADES "."<br>";
      echo "MENSUALIDAD DE $".$var3["MENSUALIDAD"]."<br>";
      echo "PORCENTAJE A LA ENTREGA ".$var3["A_LA_ENTRGA_PORCENTAJE"]."%"."<br>";
      echo "A LA ENTREGA $".$var3["A_LA_ENTRGA"]."<br>";
      echo "<br><br>";

      $var4 = $data3["PLANES"]["CONTADO"];
      echo "PLAN CONTADO"."<br>";
      echo "PRECIO CON DESCUENTO: $".$var4["DESCUENTO PLAN"]."<br>";
      echo "AHORRO DE: $".$var4["AHORRO"]." MXN"."<br>";
      echo "PORCENTAJE DEL ENGANCHE ".$var4["ENGANCHE_PRCENTAJE"]." %"."<br>";
      echo "ENGANCHE DE $".$var4["ENGANCHE"]."<br>";
      echo "PORCENTAJE A LA ENTREGA ".$var4["A_LA_ENTRGA_PORCENTAJE"]."%"."<br>";
      echo "A LA ENTREGA $".$var4["A_LA_ENTRGA"]."<br>";
    ?>
  </div>
</section>

  <button class="learn-more">
  <span class="circle" aria-hidden="true">
  <span class="icon arrow"></span>
  </span>
  <span class="button-text">Quiero Mas Información</span>
</button>

/* From uiverse.io */
button {
 position: relative;
 display: inline-block;
 cursor: pointer;
 outline: none;
 border: 0;
 vertical-align: middle;
 text-decoration: none;
 background: transparent;
 padding: 0;
 font-size: inherit;
 font-family: inherit;
}

button.learn-more {
 width: 14rem;
 height: 4.7rem;
}

button.learn-more .circle {
 transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
 position: relative;
 display: block;
 margin: 0;
 width: 3rem;
 height: 3rem;
 background: #009988;
 border-radius: 1.625rem;
}

button.learn-more .circle .icon {
 transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
 position: absolute;
 top: 0;
 bottom: 0;
 margin: auto;
 background: #fff;
}

button.learn-more .circle .icon.arrow {
 transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
 left: 0.625rem;
 width: 1.125rem;
 height: 0.125rem;
 background: none;
}

button.learn-more .circle .icon.arrow::before {
 position: absolute;
 content: "";
 top: -0.29rem;
 right: 0.0625rem;
 width: 0.625rem;
 height: 0.625rem;
 border-top: 0.125rem solid #fff;
 border-right: 0.125rem solid #fff;
 transform: rotate(45deg);
}

button.learn-more .button-text {
 transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
 position: absolute;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0;
 padding: 0.75rem 0;
 margin: 0 0 0 1.85rem;
 color: #282936;
 font-weight: 700;
 line-height: 1.6;
 text-align: center;
 text-transform: uppercase;
}

button:hover .circle {
 width: 100%;
}

button:hover .circle .icon.arrow {
 background: #fff;
 transform: translate(1rem, 0);
}

button:hover .button-text {
 color: #fff;
}
-->
