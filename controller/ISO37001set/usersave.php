<?php
session_start();
include("../controller/conexionISO..php");
if (isset($_POST["btn-iniciar"])) {
    
    $_SESSION["datos"]["nombre"] =  $_POST["txtNombre"] ;
    $_SESSION["datos"]["correo"] = $_POST["txtCorreo"] ;
    $_SESSION["datos"]["pais"] = $_POST["txtPais"] ;
    $_SESSION["datos"]["numero"] = $_POST["txtNumero"];


 
    header("location:../../view/ISO37001view/ISO37001ruc.php");
     

    
}
