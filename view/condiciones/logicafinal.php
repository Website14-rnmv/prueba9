<?php 
session_start();



/* echo "<br>". "pregunta repuesta 1: ". $_SESSION["preguntas"]["pregunta_1"];
echo "<br>". "pregunta repuesta 2: ". $_SESSION["preguntas"]["pregunta_2"];
echo "<br>". "pregunta repuesta 3: ". $_SESSION["preguntas"]["pregunta_3"];
echo "<br>". "pregunta repuesta 4: ". $_SESSION["preguntas"]["pregunta_4"];
echo "<br>". "pregunta repuesta 5: ". $_SESSION["preguntas"]["pregunta_5"];
echo "<br>". "pregunta repuesta 6: ". $_SESSION["preguntas"]["pregunta_6"];
echo "<br>". "pregunta repuesta 7: ". $_SESSION["preguntas"]["pregunta_7"];

echo "<br>". "pregunta repuesta 8: ". $_SESSION["preguntas"]["pregunta_8"];
echo "<br>". "pregunta repuesta 8_1: ". $_SESSION["preguntas"]["pregunta_8_1"];
echo "<br>". "pregunta repuesta 8_2: ". $_SESSION["preguntas"]["pregunta_8_2"];
echo "<br>". "pregunta repuesta 8_3: ". $_SESSION["preguntas"]["pregunta_8_3"];

echo "<br>". "pregunta repuesta 9: ". $_SESSION["preguntas"]["pregunta_9"];
echo "<br>". "pregunta repuesta 9_1: ". $_SESSION["preguntas"]["pregunta_9_1"];

echo "<br>". "pregunta repuesta 10: ". $_SESSION["preguntas"]["pregunta_10"];
echo "<br>". "pregunta repuesta 11: ". $_SESSION["preguntas"]["pregunta_11"];

echo "<br>". "pregunta repuesta 11_1: ". $_SESSION["preguntas"]["pregunta_11_1"];


echo "<br>". "pregunta repuesta 12: ". $_SESSION["preguntas"]["pregunta_12"];
echo "<br>". "pregunta repuesta 13: ".   $_SESSION["preguntas"]["pregunta_13"];
echo "<br>". "pregunta repuesta 14: ". $_SESSION["preguntas"]["pregunta_14"];
echo "<br>". "pregunta repuesta 15: ". $_SESSION["preguntas"]["pregunta_15"];
echo "<br>". "pregunta repuesta 16: ". $_SESSION["preguntas"]["pregunta_16"];
echo "<br>". "pregunta repuesta 17: ". $_SESSION["preguntas"]["pregunta_17"];

echo "<br>". "pregunta repuesta 18: ". $_SESSION["preguntas"]["pregunta_18"];
echo "<br>". "pregunta repuesta 19: ". $_SESSION["preguntas"]["pregunta_19"];
echo "<br>". "pregunta repuesta 20: ". $_SESSION["preguntas"]["pregunta_20"];
echo "<br>". "pregunta repuesta 21: ". $_SESSION["preguntas"]["pregunta_21"];
echo "<br>". "pregunta repuesta 22: ". $_SESSION["preguntas"]["pregunta_22"];
echo "<br>". "pregunta repuesta 23: ". $_SESSION["preguntas"]["pregunta_23"];
echo "<br>". "pregunta repuesta 24: ". $_SESSION["preguntas"]["pregunta_24"];
echo "<br>". "pregunta repuesta 25: ". $_SESSION["preguntas"]["pregunta_25"];
echo "<br>". "pregunta repuesta 26: ". $_SESSION["preguntas"]["pregunta_26"];
echo "<br>". "pregunta repuesta 27: ". $_SESSION["preguntas"]["pregunta_27"];

echo "<br>". "pregunta repuesta 28: ". $_SESSION["preguntas"]["pregunta_28"];
echo "<br>". "pregunta repuesta 29: ". $_SESSION["preguntas"]["pregunta_29"];
echo "<br>". "pregunta repuesta 30: ". $_SESSION["preguntas"]["pregunta_30"];

echo "<br>". "pregunta repuesta 31: ". $_SESSION["preguntas"]["pregunta_31"];
echo "<br>". "pregunta repuesta 32: ". $_SESSION["preguntas"]["pregunta_32"]; */

/*MODULO ---------1 */
 $pre_1 = $_SESSION["preguntas"]["pregunta_1"];
 $pre_2 = $_SESSION["preguntas"]["pregunta_2"];
 $pre_3 = $_SESSION["preguntas"]["pregunta_3"];
 $pre_4 = $_SESSION["preguntas"]["pregunta_4"];
/*MODULO ---------1 */

/*MODULO ---------2 */
 $pre_5 = $_SESSION["preguntas"]["pregunta_5"];
 $pre_6 = $_SESSION["preguntas"]["pregunta_6"];
 $pre_7 = $_SESSION["preguntas"]["pregunta_7"];
 $pre_8 = $_SESSION["preguntas"]["pregunta_8"];

 $pre_9 = $_SESSION["preguntas"]["pregunta_9"];
 /*MODULO ---------2 */
 
 /*MODULO ---------3 */
  $pre_10 = $_SESSION["preguntas"]["pregunta_10"];
  $pre_11 = $_SESSION["preguntas"]["pregunta_11"];
 
 /*MODULO ---------3 */
 
 /*MODULO ---------4 */
  $pre_12 = $_SESSION["preguntas"]["pregunta_12"];
  $pre_13 = $_SESSION["preguntas"]["pregunta_13"];
  $pre_14 = $_SESSION["preguntas"]["pregunta_14"];
  $pre_15 = $_SESSION["preguntas"]["pregunta_15"];
  $pre_16 = $_SESSION["preguntas"]["pregunta_16"];
  $pre_17 = $_SESSION["preguntas"]["pregunta_17"];
 /*MODULO ---------4 */
 
 /*MODULO ---------5 */
  $pre_18 = $_SESSION["preguntas"]["pregunta_18"];
  $pre_19 = $_SESSION["preguntas"]["pregunta_19"];
  $pre_20 = $_SESSION["preguntas"]["pregunta_20"];
  $pre_21 = $_SESSION["preguntas"]["pregunta_21"];
  $pre_22 = $_SESSION["preguntas"]["pregunta_22"];
  $pre_23 = $_SESSION["preguntas"]["pregunta_23"];
  $pre_24 = $_SESSION["preguntas"]["pregunta_24"];
  $pre_25 = $_SESSION["preguntas"]["pregunta_25"];
  $pre_26 = $_SESSION["preguntas"]["pregunta_26"];
  $pre_27 = $_SESSION["preguntas"]["pregunta_27"];
 /*MODULO ---------5 */
 
 /*MODULO ---------6 */
  $pre_28 = $_SESSION["preguntas"]["pregunta_28"];
  $pre_29 = $_SESSION["preguntas"]["pregunta_29"];
  $pre_30 = $_SESSION["preguntas"]["pregunta_30"];
 /*MODULO ---------6 */
 
 /*MODULO ---------7 */
  $pre_31 = $_SESSION["preguntas"]["pregunta_31"];
  $pre_32 = $_SESSION["preguntas"]["pregunta_32"];
 /*MODULO ---------7 */
 
/* VALIDAMOS LAS PREGUNTAS CON PREGUNTAS */

 if (empty($_SESSION["preguntas"]["pregunta_8_1"])) {
    $point_8_1 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_8_1"] == "si") {
        $point_8_1 = 2;
    }else if($_SESSION["preguntas"]["pregunta_8_1"] == "no"){
        $point_8_1 = 0;
    }else{
        $point_8_1 = 0;
    }
 }

 if (empty($_SESSION["preguntas"]["pregunta_8_2"])) {
    $point_8_2 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_8_2"] == "si") {
        $point_8_2 = 2;
    }else if($_SESSION["preguntas"]["pregunta_8_2"] == "no"){
        $point_8_2 = 0;
    }else{
        $point_8_2 = 0;
    }
 }

 if (empty($_SESSION["preguntas"]["pregunta_8_3"])) {
    $point_8_3 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_8_3"] == "si") {
        $point_8_3 = 2;
    }else if($_SESSION["preguntas"]["pregunta_8_3"] == "no"){
        $point_8_3 = 0;
    }else{
        $point_8_3 = 0;
    }
 }
 
 if (empty($_SESSION["preguntas"]["pregunta_11_1"])) {
    $point_11_1 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_11_1"] == "si") {
        $point_11_1 = 2;
    }else if($_SESSION["preguntas"]["pregunta_11_1"] == "no"){
        $point_11_1 = 0;
    }else{
        $point_11_1 = 0;
    }
 }

 
 if (empty($_SESSION["preguntas"]["pregunta_9_1"])) {
    $point_9_1 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_9_1"] == "si") {
        $point_9_1 = 2;
    }else if($_SESSION["preguntas"]["pregunta_9_1"] == "no"){
        $point_9_1 = 0;
    }else{
        $point_9_1 = 0;
    }
 }



/* porcentaje individual ----------------------------------------------------------*/

/* SUMATORIA MODULO 1 ------------------------------------------------------------------------------------*/
if ($pre_1 == "si") {
    $point_1 = 2;
 }else if($pre_1 == "no"){
    $point_1 = 0;
}else{
    $point_1 = 0;
}

if ($pre_2 == "si") {
    $point_2 = 2;
 }else if($pre_2 == "no"){
    $point_2 = 0;
}else{
    $point_2 = 0;
}

if ($pre_3 == "si") {
    $point_3 = 2;
 }else if($pre_3 == "no"){
    $point_3 = 0;
}else{
    $point_3 = 0;
}

if ($pre_4 == "si") {
    $point_4 = 3;
 }else if($pre_4 == "no"){
    $point_4 = 0;
}else{
    $point_4 = 0;
}

$puntosModulo_1 = $point_1 + $point_2 + $point_3 + $point_4;

$porcentajeM1 = ($puntosModulo_1 / 9) * 100;

/* SUMATORIA MODULO 1 ------------------------------------------------------------------------------------*/

/* SUMATORIA MODULO 2 ------------------------------------------------------------------------------------*/

if ($pre_5 == "si") {
    $point_5 = 1;
 }else if($pre_5 == "no"){
    $point_5 = 0;
}else{
    $point_5 = 0;
}

if ($pre_6 == "si") {
    $point_6 = 3;
 }else if($pre_6 == "no"){
    $point_6 = 0;
}else{
    $point_6 = 0;
}

if ($pre_7 == "si") {
    $point_7 = 2;
 }else if($pre_7 == "no"){
    $point_7 = 0;
}else{
    $point_7 = 0;
}

if ($pre_8 == "si") {
    $point_8 = 2;
 }else if($pre_8 == "no"){
    $point_8 = 0;
}else{
    $point_8 = 0;
}




if ($pre_9 == "si") {
    $point_9 = 3;
 }else if($pre_9 == "no"){
    $point_9 = 0;
}else{
    $point_9 = 0;
}



$puntosModulo_2 = $point_5 + $point_6 + $point_7 + $point_8 + $point_8_1 + $point_8_2 + $point_8_3 + $point_9 + $point_9_1; 

$porcentajeM2 = ($puntosModulo_2 / 17) * 100;
/* SUMATORIA MODULO 2 ------------------------------------------------------------------------------------*/

/* SUMATORIA MODULO 3 ------------------------------------------------------------------------------------*/

if ($pre_10 == "si") {
    $point_10 = 3;
 }else if($pre_10 == "no"){
    $point_10 = 0;
}else{
    $point_10 = 0;
}

if ($pre_11 == "si") {
    $point_11 = 3;
 }else if($pre_11 == "no"){
    $point_11 = 0;
}else{
    $point_11 = 0;
}



$puntosModulo_3 = $point_10 + $point_11 + $point_11_1;

$porcentajeM3 = ($puntosModulo_3 / 8) * 100;

/* SUMATORIA MODULO 3 ------------------------------------------------------------------------------------*/

/* SUMATORIA MODULO 4 ------------------------------------------------------------------------------------*/

if ($pre_12 == "si") {
    $point_12 = 2;
 }else if($pre_12 == "no"){
    $point_12 = 0;
}else{
    $point_12 = 0;
}

if ($pre_13 == "si") {
    $point_13 = 2;
 }else if($pre_13 == "no"){
    $point_13 = 0;
}else{
    $point_13 = 0;
}

if ($pre_14 == "si") {
    $point_14 = 3;
 }else if($pre_14 == "no"){
    $point_14 = 0;
}else{
    $point_14 = 0;
}

if ($pre_15 == "si") {
    $point_15 = 2;
 }else if($pre_15 == "no"){
    $point_15 = 0;
}else{
    $point_15 = 0;
}

if ($pre_16 == "si") {
    $point_16 = 2;
 }else if($pre_16 == "no"){
    $point_16 = 0;
}else{
    $point_16 = 0;
}

if ($pre_17 == "si") {
    $point_17 = 2;
 }else if($pre_17 == "no"){
    $point_17 = 0;
}else{
    $point_17 = 0;
}

$puntosModulo_4 = $point_12 + $point_13 + $point_14 + $point_15 + $point_16 + $point_17;

$porcentajeM4 = ($puntosModulo_4 / 13) * 100;

/* SUMATORIA MODULO 4 ------------------------------------------------------------------------------------*/

/* SUMATORIA MODULO 5 ------------------------------------------------------------------------------------*/

if ($pre_18 == "si") {
    $point_18 = 3;
 }else if($pre_18 == "no"){
    $point_18 = 0;
}else{
    $point_18 = 0;
}

if ($pre_19 == "si") {
    $point_19 = 3;
 }else if($pre_19 == "no"){
    $point_19 = 0;
}else{
    $point_19 = 0;
}

if ($pre_20 == "si") {
    $point_20 = 3;
 }else if($pre_20 == "no"){
    $point_20 = 0;
}else{
    $point_20 = 0;
}

if ($pre_21 == "si") {
    $point_21 = 3;
 }else if($pre_21 == "no"){
    $point_21 = 0;
}else{
    $point_21 = 0;
}

if ($pre_22 == "si") {
    $point_22 = 3;
 }else if($pre_22 == "no"){
    $point_22 = 0;
}else{
    $point_22 = 0;
}

if ($pre_23 == "si") {
    $point_23 = 3;
 }else if($pre_23 == "no"){
    $point_23 = 0;
}else{
    $point_23 = 0;
}
if ($pre_24 == "si") {
    $point_24 = 2;
 }else if($pre_24 == "no"){
    $point_24 = 0;
}else{
    $point_24 = 0;
}

if ($pre_25 == "si") {
    $point_25 = 2;
 }else if($pre_25 == "no"){
    $point_25 = 0;
}else{
    $point_25 = 0;
}

if ($pre_26 == "si") {
    $point_26 = 2;
 }else if($pre_26 == "no"){
    $point_26 = 0;
}else{
    $point_26 = 0;
}

if ($pre_27 == "si") {
    $point_27 = 3;
 }else if($pre_27 == "no"){
    $point_27 = 0;
}else{
    $point_27 = 0;
}

$puntosModulo_5 = $point_18 + $point_19 + $point_20 + $point_21 + $point_22 + $point_23 + $point_24 + $point_25 + $point_26 + $point_27;

$porcentajeM5 = ($puntosModulo_5 / 27) * 100;

/* SUMATORIA MODULO 5 ------------------------------------------------------------------------------------*/

/* SUMATORIA MODULO 6 ------------------------------------------------------------------------------------*/
if ($pre_28 == "si") {
    $point_28 = 2;
 }else if($pre_28 == "no"){
    $point_28 = 0;
}else{
    $point_28 = 0;
}

if ($pre_29 == "si") {
    $point_29 = 3;
 }else if($pre_29 == "no"){
    $point_29 = 0;
}else{
    $point_29 = 0;
}

if ($pre_30 == "si") {
    $point_30 = 3;
 }else if($pre_30 == "no"){
    $point_30 = 0;
}else{
    $point_30 = 0;
}

$puntosModulo_6 = $point_28 + $point_29 + $point_30;

$porcentajeM6 = ($puntosModulo_6 / 8) * 100;

/* SUMATORIA MODULO 6 ------------------------------------------------------------------------------------*/

/* SUMATORIA MODULO 7 ------------------------------------------------------------------------------------*/
if ($pre_31 == "si") {
    $point_31 = 3;
 }else if($pre_31 == "no"){
    $point_31 = 0;
}else{
    $point_31 = 0;
}

if ($pre_32 == "si") {
    $point_32 = 3;
 }else if($pre_32 == "no"){
    $point_32 = 0;
}else{
    $point_32 = 0;
}



$puntosModulo_7 = $point_31 + $point_32 ;
$porcentajeM7 = ($puntosModulo_7 / 6) * 100;

/* SUMATORIA MODULO 7 ------------------------------------------------------------------------------------*/

/*----------SUMA TOTAL DE PUTNOS DE CADA MODULO---------------------------------- */

$sumaTotalModulos = $puntosModulo_1 + $puntosModulo_2 + $puntosModulo_3 + $puntosModulo_4 +
                    $puntosModulo_5 + $puntosModulo_6 + $puntosModulo_7;

$porcentajeTotalModulos = ($sumaTotalModulos / 90) * 100 ;

/*----------SUMA TOTAL DE PUTNOS DE CADA MODULO---------------------------------- */

/* CIRCULO DE PROGRESO -------------------------------------------------------------------*/

if ($sumaTotalModulos == 10) {
    $porcentaje = 25;
}else if($sumaTotalModulos == 20){
    $porcentaje = 50;
}else if($sumaTotalModulos == 40){
    $porcentaje= 75;
}else if($sumaTotalModulos == 50){
    $porcentaje = 100;
}else{
    $porcentaje = 100;
}

/* CIRCULO DE PROGRESO -------------------------------------------------------------------*/
$si_1 = 0;
$no_1 = 0;

$si_2 = 0;
$no_2 = 0;

$si_3 = 0;
$no_3 = 0;

$si_4 = 0;
$no_4 = 0;

$si_5 = 0;
$no_5 = 0;

$si_6 = 0;
$no_6 = 0;

$si_7 = 0;
$no_7 = 0;

$si_8 = 0;
$no_8 = 0;

$si_8_1 = 0;
$no_8_1 = 0;

$si_8_2 = 0;
$no_8_2 = 0;

$si_8_3 = 0;
$no_8_3 = 0;

$si_9 = 0;
$no_9 = 0;

$si_9_1 = 0;
$no_9_1 = 0;

$si_10 = 0;
$no_10 = 0;

$si_11 = 0;
$no_11 = 0;

$si_11_1 = 0;
$no_11_1 = 0;

$si_12 = 0;
$no_12 = 0;

$si_13 = 0;
$no_13 = 0;

$si_14 = 0;
$no_14 = 0;

$si_15 = 0;
$no_15 = 0;

$si_16 = 0;
$no_16 = 0;

$si_17 = 0;
$no_17 = 0;

$si_18 = 0;
$no_18 = 0;

$si_19 = 0;
$no_19 = 0;

$si_20 = 0;
$no_20 = 0;

$si_21 = 0;
$no_21 = 0;

$si_22 = 0;
$no_22 = 0;

$si_23 = 0;
$no_23 = 0;

$si_24 = 0;
$no_24 = 0;

$si_25 = 0;
$no_25 = 0;

$si_26 = 0;
$no_26 = 0;

$si_27 = 0;
$no_27 = 0;

$si_28 = 0;
$no_28 = 0;

$si_29 = 0;
$no_29 = 0;

$si_30 = 0;
$no_30 = 0;

$si_31 = 0;
$no_31 = 0;

$si_32 = 0;
$no_32 = 0;

/* ASIGNAMOS UN VALOR DE 0 A CADA VARIABLE POR QUE LA SUMATORIA DEBE SER EN ENTEROS Y NO EN----------------------
ENTRE ARRAYS Y ENTEROS POR ESO NO SALIA ERROR */

if ($pre_1 == "si") {
    $si_1 = 1; 
}else if($pre_1 == "no") {
    $no_1 = 1;
}

if ($pre_2 == "si") {
    $si_2 = 1; 
}else if($pre_2 == "no") {
    $no_2 = 1;
}

if ($pre_3 == "si") {
    $si_3 = 1; 
}else if($pre_3 == "no") {
    $no_3 = 1;
}

if ($pre_4 == "si") {
    $si_4 = 1; 
}else if($pre_4 == "no") {
    $no_4 = 1;
}

if ($pre_5 == "si") {
    $si_5 = 1; 
}else if($pre_5 == "no") {
    $no_5 = 1;
}

if ($pre_6 == "si") {
    $si_6 = 1; 
}else if($pre_6 == "no") {
    $no_6 = 1;
}

if ($pre_7 == "si") {
    $si_7 = 1; 
}else if($pre_7 == "no") {
    $no_7 = 1;
}

if ($pre_8 == "si") {
    $si_8 = 1; 
}else if($pre_8 == "no") {
    $no_8 = 1;
}
/*----------------------CONDICION DE LA NUMERO 8-------------------------------- */

if (empty($_SESSION["preguntas"]["pregunta_8_1"])) {
    $si_8_1 = 0;
    $no_8_1 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_8_1"] == "si") {
        $si_8_1 = 1;
    }else if($_SESSION["preguntas"]["pregunta_8_1"] == "no"){
        $no_8_1 = 1;
    }
 }

 if (empty($_SESSION["preguntas"]["pregunta_8_2"])) {
    $si_8_2 = 0;
    $no_8_2 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_8_2"] == "si") {
        $si_8_2 = 1;
    }else if($_SESSION["preguntas"]["pregunta_8_2"] == "no"){
        $no_8_2 = 1;
    }
 }

 if (empty($_SESSION["preguntas"]["pregunta_8_3"])) {
    $si_8_3 = 0;
    $no_8_3 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_8_3"] == "si") {
        $si_8_3 = 1;
    }else if($_SESSION["preguntas"]["pregunta_8_3"] == "no"){
        $no_8_3 = 1;
    }
 }

/*----------------------CONDICION DE LA NUMERO 8-------------------------------- */

/*----------------------CONDICION DE LA NUMERO 9-------------------------------- */

if ($pre_9 == "si") {
    $si_9 = 1; 
}else if($pre_9 == "no") {
    $no_9 = 1;
}

if (empty($_SESSION["preguntas"]["pregunta_9_1"])) {
    $si_9_1 = 0;    
    $no_9_1 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_9_1"] == "si") {
        $si_9_1 = 1;
    }else if($_SESSION["preguntas"]["pregunta_9_1"] == "no"){
        $no_9_1 = 1;
    }
 }

/*----------------------CONDICION DE LA NUMERO 9-------------------------------- */


if ($pre_10 == "si") {
    $si_10 = 1; 
}else if($pre_10 == "no") {
    $no_10 = 1;
}


/*----------------------CONDICION DE LA NUMERO 11-------------------------------- */

if ($pre_11 == "si") {
    $si_11 = 1; 
}else if($pre_11 == "no") {
    $no_11 = 1;
}

if (empty($_SESSION["preguntas"]["pregunta_11_1"])) {
    $si_11_1 = 0;
    $no_11_1 = 0;
 }else{
    if ($_SESSION["preguntas"]["pregunta_11_1"] == "si") {
        $si_11_1 = 1;
    }else if($_SESSION["preguntas"]["pregunta_11_1"] == "no"){
        $no_11_1 = 1;
    }
 }

/*----------------------CONDICION DE LA NUMERO 11-------------------------------- */

if ($pre_12 == "si") {
    $si_12 = 1; 
}else if($pre_12 == "no") {
    $no_12 = 1;
}

if ($pre_13 == "si") {
    $si_13 = 1; 
}else if($pre_13 == "no") {
    $no_13 = 1;
}

if ($pre_14 == "si") {
    $si_14 = 1; 
}else if($pre_14 == "no") {
    $no_14 = 1;
}

if ($pre_15 == "si") {
    $si_15 = 1; 
}else if($pre_15 == "no") {
    $no_15 = 1;
}

if ($pre_16 == "si") {
    $si_16 = 1; 
}else if($pre_16 == "no") {
    $no_16 = 1;
}

if ($pre_17 == "si") {
    $si_17 = 1; 
}else if($pre_17 == "no") {
    $no_17 = 1;
}

if ($pre_18 == "si") {
    $si_18 = 1; 
}else if($pre_18 == "no") {
    $no_18 = 1;
}

if ($pre_19 == "si") {
    $si_19 = 1; 
}else if($pre_19 == "no") {
    $no_19 = 1;
}

if ($pre_20 == "si") {
    $si_20 = 1; 
}else if($pre_20 == "no") {
    $no_20 = 1;
}

if ($pre_21 == "si") {
    $si_21 = 1; 
}else if($pre_21 == "no") {
    $no_21 = 1;
}

if ($pre_22 == "si") {
    $si_22 = 1; 
}else if($pre_22 == "no") {
    $no_22 = 1;
}

if ($pre_23 == "si") {
    $si_23 = 1; 
}else if($pre_23 == "no") {
    $no_23 = 1;
}

if ($pre_24 == "si") {
    $si_24 = 1; 
}else if($pre_24 == "no") {
    $no_24 = 1;
}

if ($pre_25 == "si") {
    $si_25 = 1; 
}else if($pre_25 == "no") {
    $no_25 = 1;
}

if ($pre_26 == "si") {
    $si_26 = 1; 
}else if($pre_26 == "no") {
    $no_26 = 1;
}

if ($pre_27 == "si") {
    $si_27 = 1; 
}else if($pre_27 == "no") {
    $no_27 = 1;
}

if ($pre_28 == "si") {
    $si_28 = 1; 
}else if($pre_28 == "no") {
    $no_28 = 1;
}

if ($pre_29 == "si") {
    $si_29 = 1; 
}else if($pre_29 == "no") {
    $no_29 = 1;
}

if ($pre_30 == "si") {
    $si_30 = 1; 
}else if($pre_30 == "no") {
    $no_30 = 1;
}

if ($pre_31 == "si") {
    $si_31 = 1; 
}else if($pre_31 == "no") {
    $no_31 = 1;
}

if ($pre_32 == "si") {
    $si_32 = 1; 
}else if($pre_32 == "no") {
    $no_32 = 1;
}
/*----------------------------SUMATORIA LOS SI Y NO------------------------------------------------ */

$sumasSi = $si_1 + $si_2 + $si_3 + $si_4 + $si_5 + $si_6 + $si_7 + $si_8 + $si_8_1 + $si_8_2 + $si_8_3 +
           $si_9 + $si_9_1 + $si_10 + $si_11 + $si_11_1 + $si_12 + $si_13 + $si_14 + $si_15 + $si_16 +
           $si_17 + $si_18 + $si_19 + $si_20 + $si_21 + $si_22 + $si_23 + $si_24 + $si_25 + $si_26 + $si_27 + 
           $si_28 + $si_29 + $si_30 + $si_31 + $si_32;

$sumasNo = $no_1 + $no_2 + $no_3 + $no_4 + $no_5 + $si_6 + $si_7 + $no_8 + $no_8_1 + $no_8_2 + $no_8_3 +
           $no_9 + $no_9_1 + $no_10 + $no_11 + $no_11_1 + $no_12 + $no_13 + $no_14 + $no_15 + $no_16 +
           $no_17 + $no_18 + $no_19 + $no_20 + $no_21 + $no_22 + $no_23 + $no_24 + $no_25 + $no_26 + $no_27 + 
           $no_28 + $no_29 + $no_30 + $no_31 + $no_32;



 $user = $_SESSION["datos"]["nombre"];
 $correoUser = $_SESSION["datos"]["correo"];
 $codPais = $_SESSION["datos"]["pais"];
 $numeroUser = $_SESSION["datos"]["numero"];
       
       
 $numeroRuc = $_SESSION["consulta"]["numeroDocumento"];
 $razonSocial = $_SESSION["consulta"]["nombre"];
 $tm_empresa = $_SESSION["datos"]["tm_empresa"];
 $trabajadores =  $_SESSION["datos"]["trabajadores"];

 include("../../controller/conexionISO..php");
 $insertar = "INSERT INTO user_iso_save (nombre, correo, cod_pais, celular, ruc, razonSocial, tm_empresa, trabajadores ) 
  VALUES ('$user','$correoUser','$codPais','$numeroUser','$numeroRuc','$razonSocial','$tm_empresa','$trabajadores')";

$resultado = mysqli_query($conexion, $insertar);

  