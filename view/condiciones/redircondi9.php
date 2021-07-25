<?php
session_start();

/* $_SESSION["preguntas"]["pregunta_1"] = $_POST["pregunta_1"];
$_SESSION["preguntas"]["pregunta_2"] = $_POST["pregunta_2"];
$_SESSION["preguntas"]["pregunta_3"] = $_POST["pregunta_3"];
$_SESSION["preguntas"]["pregunta_4"] = $_POST["pregunta_4"]; */
/* $_SESSION["preguntas"]["pregunta_5"] = $_POST["pregunta_5"];
$_SESSION["preguntas"]["pregunta_6"] = $_POST["pregunta_6"];
$_SESSION["preguntas"]["pregunta_7"] = $_POST["pregunta_7"];
$_SESSION["preguntas"]["pregunta_8"] = $_POST["pregunta_8"]; */

 $_SESSION["preguntas"]["pregunta_8_1"] = $_POST["pregunta_8_1"];/*RECIBIDO */
 $_SESSION["preguntas"]["pregunta_8_2"] = $_POST["pregunta_8_2"];/*RECIBIDO */
 $_SESSION["preguntas"]["pregunta_8_3"] = $_POST["pregunta_8_3"];/*RECIBIDO ALMACENAMOS DATOS*/

header("location:condicion9.php");



?>