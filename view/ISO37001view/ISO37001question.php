<?php
session_start();

if (isset($_REQUEST["btn-siguiente"])) {


    $user = $_SESSION["datos"]["nombre"];
    $correoUser = $_SESSION["datos"]["correo"];
    $codPais = $_SESSION["datos"]["pais"];
    $numeroUser = $_SESSION["datos"]["numero"];


    $numeroRuc = $_SESSION["consulta"]["numeroDocumento"];
    $razonSocial = $_SESSION["consulta"]["nombre"];
    $tm_empresa = $_POST["tm_empresa"];
    $trabajadores = $_POST["txtTrabajadores"];

    $_SESSION["datos"]["tm_empresa"] = $tm_empresa;
    $_SESSION["datos"]["trabajadores"] = $trabajadores;
    

/* echo $user."<br>";
echo $correoUser."<br>";
echo $codPais."<br>";
echo $numeroUser."<br>";
echo $numeroRuc."<br>";
echo $razonSocial."<br>";
echo $tm_empresa."<br>";
echo $trabajadores."<br>"; */
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <!--METATAGS-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta mame="Keywords" content="ISO 37001, APP-ISO's Ware,ISO's Perú, Gana tu proxima Licitación, Gestion de Normas ISO, previene multas de SUNAFIL">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="ISO's Perú" content="Normas ISO con ISO's Perú | Gana tu próxima licitación">
    <meta name="description" content="Implementación de Sistema Integrado de Gestión, consultoría, capacitación de normas ISO. Juntos obtendremos ese certificado ISO.">    <meta mame="Keywords" content="ISO 37001, APP-ISO's Ware, Sistemas Integrados de Gestión, Gestion de Normas ISO, previene multas de SUNAFIL">
    <meta name="author" content="ISO's Perú">
    <meta name="msapplication-TileImage" content="https://isosperu.com/wp-content/uploads/2020/11/cropped-logo_pequeno-e1605810046228-270x270.png">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta property="og:title" content="ISO´s Perú | Gana tu próxima licitación | Visítanos">
    <meta property="og:url" content="https://isosperu.com/">
    <meta property="og:site_name" content="ISO's Perú">
    <!--METATAGS-->

    <!--LINKS ANCLADOS-->
    <link rel="icon" type="image/png" href="../../icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Diagnostico de cumplimiento ISO's - ISO's Perú</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Arimo', sans-serif;
    }

    :root {
        --var-azul: #005ABA;
        --var-verde: #00B945;
        --var-fondo: #8c8c8c;
        --var-amarillo: #ffD741;
        --var-naranja: #ff9900;
        --var-rojo: #D04240;
        --var-fondo: #f8f8f8;
    }

    .iniciar {
        width: 100%;
        height: 100vh;
        background-image: url("../../images/imagen1.jpg");
        background-position: center;
        background-size: cover;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        align-items: center;

    }

    .centro {
        width: 80%;
        height: 60%;
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background: rgb(0,89,185);
        background: linear-gradient(82deg, rgba(0,89,185,0.47692580450148814) 0%, rgba(5,84,173,0.5497549361541492) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        border-radius: 10px;
    }

    .centro img {
        width: 300px;
    }
    .centro p{
        width: 60%;
        text-align: center;
        color: white;
        font-weight: 500;
    }
    .centro a{
        display: inline-block;
        padding: 13px 35px;
        border-radius: 4px;
        color:white;
        margin-top: 20px;
        background-color: #FDB900;
        text-decoration: none;
        font-weight: 500;
        
    }

    @media (min-width: 768px) and (max-width: 1023px){
        .iniciar{
            width: 100%;
        }
        .centro{
            width: 80%;
            height: 80%;
        }
}

@media (min-width: 320px) and (max-width: 767px){
        .iniciar{
            width: 100%;
        }
        .centro{
            width: 80%;
            height: 80%;
        }
        .centro img{
            width: 200px;
        }
        .centro p{
            width: 80%;
        }
        .centro a{
            width: 50%;
            text-align: center;
        }
}
</style>

<body>

    <section class="iniciar">
        <div class="centro">
            <img src="../../images/logo-2isos.png" alt="">
            <p>Lea atentamente las siguientes preguntas y responda recuerde que si no marca una opción
                dentro de una pregunta no podrá visualizar sus resultadoss.
            </p>
            <a href="ISO37001pre.php">Empezar</a>
        </div>
    </section>

    <script type="text/javascript" src="../js/mostrarRuc.js"></script>
</body>

</html>