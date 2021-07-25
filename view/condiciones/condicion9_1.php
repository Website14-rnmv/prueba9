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

$pre9 = $_SESSION["preguntas"]["pregunta_9"] = $_POST["pregunta_9"];/*RECIBIDO */
/* echo $_SESSION["preguntas"]["pregunta_1"]."<br>";
echo $_SESSION["preguntas"]["pregunta_2"]."<br>";
echo $_SESSION["preguntas"]["pregunta_3"]."<br>";
echo $_SESSION["preguntas"]["pregunta_4"]."<br>";
echo $_SESSION["preguntas"]["pregunta_5"]."<br>";
echo $_SESSION["preguntas"]["pregunta_6"]."<br>";
echo $_SESSION["preguntas"]["pregunta_7"]."<br>";
echo $_SESSION["preguntas"]["pregunta_8"]."<br>"; */



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
    body {
        overflow: hidden;
    }

    * {
        margin: 0;
        padding: 0;
        font-family: 'Arimo', sans-serif;
    }

    html {
        scroll-behavior: smooth;
    }

    ::-webkit-scrollbar {
        width: 0;
    }

    main {
        width: 100%;
        height: 200000vh;
        background-image: url("../../images/imagen1.jpg");
        background-position: center;
        background-size: cover;
        background-attachment: fixed;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        padding-top: 5%;
    }

    .content-bloques {
        width: 80%;
        height: 80vh;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        position: relative;
    }

    .bloque-1 {
        width: 20%;
        height: 68%;
        background-color: rgba(104, 104, 104, 0.445);
        padding: 3%;
        margin: 0 20px;
        position: fixed;
        left: 5%;
    }

    .title-bloque-1 {
        width: 100%;
    }

    .title-bloque-1 h1 {
        color: white;
        font-size: 25px;
        font-style: italic;
    }

    .modulos {
        width: 100%;
        display: flex;
        align-items: center;
        margin: 25px 0;
    }

    .modulos i {
        font-size: 30px;
        padding-right: 15px;
        color: #f8f8f8;
    }

    .modulos h2 {
        color: #f8f8f8;
        font-size: 20px;
    }

    .modulos .active {
        color: #FCBB03;
    }

    .modulos .modulo_pasado{
        color: #A2A2A2;

    }


    /*----------------------------------------------BLOQUE -2--------------------------------------------------------- */


    .bloque-2 {
        width: 75%;
        height: 100%;
        background-color: rgba(104, 104, 104, 0.445);
        position: absolute;
        right: -5%;
    }

    /*---------------------------------------OPTIONS--------------------------------------------------- */
    .wrapper {
        display: inline-flex;
        height: 50px;
        width: 340px;
        align-items: center;
        justify-content: space-evenly;
        border-radius: 5px;
        margin-top: 20px;
        padding: 20px 15px;
    }

    .wrapper .option {
        background: #80631D;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        margin: 0 10px;
        border-radius: 5px;
        cursor: pointer;
        padding: 0 10px;
        border: 2px solid lightgrey;
        transition: all 0.3s ease;
    }

    .wrapper .option .dot {
        height: 20px;
        width: 20px;
        background: #d9d9d9;
        border-radius: 50%;
        position: relative;
    }

    .wrapper .option .dot::before {
        position: absolute;
        content: "";
        top: 4px;
        left: 4px;
        width: 12px;
        height: 12px;
        background: orange;
        border-radius: 50%;
        opacity: 0;
        transform: scale(1.5);
        transition: all 0.3s ease;
    }

    input[type="radio"] {
        display: none;
    }

    #option-1:checked:checked~.option-1,
    #option-2:checked:checked~.option-2,
    #option-3:checked:checked~.option-3,
    #option-4:checked:checked~.option-4,
    #option-5:checked:checked~.option-5,
    #option-6:checked:checked~.option-6,
    #option-7:checked:checked~.option-7,
    #option-8:checked:checked~.option-8,
    #option-9:checked:checked~.option-9,
    #option-10:checked:checked~.option-10,
    #option-11:checked:checked~.option-11,
    #option-12:checked:checked~.option-12,
    #option-13:checked:checked~.option-13,
    #option-14:checked:checked~.option-14,
    #option-15:checked:checked~.option-15,
    #option-16:checked:checked~.option-16,
    #option-17:checked:checked~.option-17,
    #option-18:checked:checked~.option-18,
    #option-19:checked:checked~.option-19,
    #option-20:checked:checked~.option-20,
    #option-21:checked:checked~.option-21,
    #option-22:checked:checked~.option-22,
    #option-23:checked:checked~.option-23,
    #option-24:checked:checked~.option-24,
    #option-25:checked:checked~.option-25,
    #option-26:checked:checked~.option-26,
    #option-27:checked:checked~.option-27,
    #option-28:checked:checked~.option-28,
    #option-29:checked:checked~.option-29,
    #option-30:checked:checked~.option-30,
    #option-31:checked:checked~.option-31,
    #option-32:checked:checked~.option-32,
    #option-33:checked:checked~.option-33,
    #option-34:checked:checked~.option-34 {
        border-color: #f8f8f8;
        background: orange;
    }

    #option-1:checked:checked~.option-1 .dot,
    #option-2:checked:checked~.option-2 .dot,
    #option-3:checked:checked~.option-3 .dot,
    #option-4:checked:checked~.option-4 .dot,
    #option-5:checked:checked~.option-5 .dot,
    #option-6:checked:checked~.option-6 .dot,
    #option-7:checked:checked~.option-7 .dot,
    #option-8:checked:checked~.option-8 .dot,
    #option-9:checked:checked~.option-9 .dot,
    #option-10:checked:checked~.option-10 .dot,
    #option-11:checked:checked~.option-11 .dot,
    #option-12:checked:checked~.option-12 .dot,
    #option-13:checked:checked~.option-13 .dot,
    #option-14:checked:checked~.option-14 .dot,
    #option-15:checked:checked~.option-15 .dot,
    #option-16:checked:checked~.option-16 .dot,
    #option-17:checked:checked~.option-17 .dot,
    #option-18:checked:checked~.option-18 .dot,
    #option-19:checked:checked~.option-19 .dot,
    #option-20:checked:checked~.option-20 .dot,
    #option-21:checked:checked~.option-21 .dot,
    #option-22:checked:checked~.option-22 .dot,
    #option-23:checked:checked~.option-23 .dot,
    #option-24:checked:checked~.option-24 .dot,
    #option-25:checked:checked~.option-25 .dot,
    #option-26:checked:checked~.option-26 .dot,
    #option-27:checked:checked~.option-27 .dot,
    #option-28:checked:checked~.option-28 .dot,
    #option-29:checked:checked~.option-29 .dot,
    #option-30:checked:checked~.option-30 .dot,
    #option-31:checked:checked~.option-31 .dot,
    #option-32:checked:checked~.option-32 .dot,
    #option-33:checked:checked~.option-33 .dot,
    #option-34:checked:checked~.option-34 .dot {
        background: #fff;
    }

    #option-1:checked:checked~.option-1 .dot::before,
    #option-2:checked:checked~.option-2 .dot::before,
    #option-3:checked:checked~.option-3 .dot::before,
    #option-4:checked:checked~.option-4 .dot::before,
    #option-5:checked:checked~.option-5 .dot::before,
    #option-6:checked:checked~.option-6 .dot::before,
    #option-7:checked:checked~.option-7 .dot::before,
    #option-8:checked:checked~.option-8 .dot::before,
    #option-9:checked:checked~.option-9 .dot::before,
    #option-10:checked:checked~.option-10 .dot::before,
    #option-11:checked:checked~.option-11 .dot::before,
    #option-12:checked:checked~.option-12 .dot::before,
    #option-13:checked:checked~.option-13 .dot::before,
    #option-14:checked:checked~.option-14 .dot::before,
    #option-15:checked:checked~.option-15 .dot::before,
    #option-16:checked:checked~.option-16 .dot::before,
    #option-17:checked:checked~.option-17 .dot::before,
    #option-18:checked:checked~.option-18 .dot::before,
    #option-19:checked:checked~.option-19 .dot::before,
    #option-20:checked:checked~.option-20 .dot::before,
    #option-21:checked:checked~.option-21 .dot::before,
    #option-22:checked:checked~.option-22 .dot::before,
    #option-23:checked:checked~.option-23 .dot::before,
    #option-24:checked:checked~.option-24 .dot::before,
    #option-25:checked:checked~.option-25 .dot::before,
    #option-26:checked:checked~.option-26 .dot::before,
    #option-27:checked:checked~.option-27 .dot::before,
    #option-28:checked:checked~.option-28 .dot::before,
    #option-29:checked:checked~.option-29 .dot::before,
    #option-30:checked:checked~.option-30 .dot::before,
    #option-31:checked:checked~.option-31 .dot::before,
    #option-32:checked:checked~.option-32 .dot::before,
    #option-33:checked:checked~.option-33 .dot::before,
    #option-34:checked:checked~.option-34 .dot::before {
        opacity: 1;
        transform: scale(1);
    }

    .wrapper .option span {
        font-size: 25px;
        color: white;
        font-weight: 700;
    }

    #option-1:checked:checked~.option-1 span,
    #option-2:checked:checked~.option-2 span,
    #option-3:checked:checked~.option-3 span,
    #option-4:checked:checked~.option-4 span,
    #option-5:checked:checked~.option-5 span,
    #option-6:checked:checked~.option-6 span,
    #option-7:checked:checked~.option-7 span,
    #option-8:checked:checked~.option-8 span,
    #option-9:checked:checked~.option-9 span,
    #option-10:checked:checked~.option-10 span,
    #option-11:checked:checked~.option-11 span,
    #option-12:checked:checked~.option-12 span,
    #option-13:checked:checked~.option-13 span,
    #option-14:checked:checked~.option-14 span,
    #option-15:checked:checked~.option-15 span,
    #option-16:checked:checked~.option-16 span,
    #option-17:checked:checked~.option-17 span,
    #option-18:checked:checked~.option-18 span,
    #option-19:checked:checked~.option-19 span,
    #option-20:checked:checked~.option-20 span,
    #option-21:checked:checked~.option-21 span,
    #option-22:checked:checked~.option-22 span,
    #option-23:checked:checked~.option-23 span,
    #option-24:checked:checked~.option-24 span,
    #option-25:checked:checked~.option-25 span,
    #option-26:checked:checked~.option-26 span,
    #option-27:checked:checked~.option-27 span,
    #option-28:checked:checked~.option-28 span,
    #option-29:checked:checked~.option-29 span,
    #option-30:checked:checked~.option-30 span,
    #option-31:checked:checked~.option-31 span,
    #option-32:checked:checked~.option-32 span,
    #option-33:checked:checked~.option-33 span,
    #option-34:checked:checked~.option-34 span {
        color: #fff;
    }

    /*---------------------------------------OPTIONS--------------------------------------------------- */

    .pregunta {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        position: relative;
        overflow: hidden;
        flex-direction: column;
        background-color: rgba(104, 104, 104, 0.445);

    }

    .content-pre {
        width: 80%;

    }

    .content-pre h1 {
        color: white;
        font-size: 35px;
    }

    .guia {
        position: absolute;
        bottom: 20px;
        width: 100%;
        height: 25px;
    }

    .guia i {
        display: inline-block;
        width: 25px;
        height: 25px;
        background-color: white;
        border-radius: 50%;
        margin: 0 2px;
    }

    .input-tras {
        display: inline-block;
        width: 100%;
        height: 100%;
        background-color: transparent;
        border: none;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 2;
        cursor: pointer;
    }

    .guia .active-guia {
        background-color: orange;
    }

    .flechas {
        display: inline-block;
        position: absolute;
        bottom: 20px;
        right: 20px;
    }

    .flechas a {
        display: inline-block;
        background-color: orange;
        padding: 10px 15px;
        font-size: 20px;
        color: white;
        margin: 0 0.5px;
        cursor: pointer;
        text-decoration: none;
        border-radius: 4px;
    }

    .flechas .up:hover {
        box-shadow: black 0 -52px inset;
        transition: .5s;


    }

    .flechas .down:hover {
        box-shadow: black 0 52px inset;
        transition: .5s;
    }

    .flechas .up {
        position: relative;
        display: inline-block;
        animation-name: up;
        animation-duration: 3s;
        animation-iteration-count: infinite;
    }

    .flechas .down {
        position: relative;
        display: inline-block;
        animation-name: down;
        animation-duration: 3s;
        animation-iteration-count: infinite;

    }

    @keyframes up {
        0% {
            bottom: 0;
        }

        50% {
            bottom: 20px;
        }

        50% {
            bottom: 5px;
        }

        100% {
            bottom: 0;
        }
    }


    @keyframes down {
        0% {
            top: 0;
        }

        50% {
            top: 20px;
        }

        50% {
            top: 5px;
        }

        100% {
            top: 0;
        }
    }

    .flechas .modulo-siguiente {


        display: inline-block;
        border: none;
        border-radius: 4px;
        background-color: #80631D;
        padding: 10px 15px;
        font-size: 20px;
        color: white;
        margin: 0 0.5px;
        cursor: pointer;
        text-decoration: none;
    }

    #section1 {
        width: 100%;
        height: 200px;
        position: absolute;
        top: 0;
    }

    #section2 {
        width: 100%;
        height: 13%;
        background-color: transparent;
    }

    #section3 {
        width: 100%;
        height: 13%;
        background-color: transparent;
    }

    #section4 {
        width: 100%;
        height: 13%;
        background-color: transparent;
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .content-bloques {
            width: 100%;
            flex-direction: column;
            padding: 0;
            margin: 0;
        }

        .bloque-1 {
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 99999;
            top: 5%;
            left: -5%;
            width: 100%;
            height: 10%;
            padding: 5% 3% 3% 3%;
            text-align: center;
            background: rgb(38, 38, 38);
            background: linear-gradient(82deg, rgba(38, 38, 38, 0.8970938717283788) 0%, rgba(25, 25, 25, 0.9139005944174545) 100%);



        }

        .bloque-2 {
            position: relative;
            top: 20%;
            width: 90%;
            height: 80%;
            background: rgb(45, 45, 45);
            background: linear-gradient(82deg, rgba(45, 45, 45, 0.40689779329700626) 0%, rgba(34, 34, 34, 0.45171572046787467) 100%);


        }

        .content-pre h1 {
            font-size: 30px;
        }

        .modulos {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #section1 {
            width: 100%;
            height: 500px;
            position: absolute;
            top: 0;
        }

        #section2 {
            width: 100%;
            height: 50%;
            background-color: transparent;
        }

        #section3 {
            width: 100%;
            height: 50%;
            background-color: transparent;
        }

        #section4 {
            width: 100%;
            height: 50%;
            background-color: transparent;
        }

        .block-1,
        .block-3,/* DESBLOQUEAMOS LA NUMERO 2 */
        .block-4,
        .block-5,
        .block-6,
        .block-7,
        .block-8 {
            display: none;
        }

        .flechas {
            display: inline-block;
            position: absolute;
            bottom: 20px;
            right: 20px;
        }

        .flechas a {
            display: inline-block;
            background-color: orange;
            padding: 10px 15px;
            font-size: 15px;
            color: white;
            margin: 0 0.5px;
            cursor: pointer;
            text-decoration: none;
            border-radius: 4px;
        }

        .flechas .modulo-siguiente {


            display: inline-block;
            border: none;
            border-radius: 4px;
            background-color: #80631D;
            padding: 10px 15px;
            font-size: 15px;
            color: white;
            margin: 0 0.5px;
            cursor: pointer;
            text-decoration: none;
        }

        .wrapper .option span {
            font-size: 20px;
            color: white;
            font-weight: 700;
        }
    }

    @media (min-width: 320px) and (max-width: 767px) {
        .title-bloque-1 h1 {
            font-size: 20px;
        }

        .content-bloques {
            width: 100%;
            flex-direction: column;
            padding: 0;
            margin: 0;
        }

        .modulos h2 {
            font-size: 15px;
        }

        .bloque-1 {
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            z-index: 99999;
            top: 5%;
            left: -5%;
            width: 100%;
            height: 10%;
            padding: 10% 3% 3% 3%;
            text-align: center;
            background: rgb(38, 38, 38);
            background: linear-gradient(82deg, rgba(38, 38, 38, 0.8970938717283788) 0%, rgba(25, 25, 25, 0.9139005944174545) 100%);



        }

        .bloque-2 {
            position: relative;
            top: 20%;
            width: 90%;
            height: 85%;
            background: rgb(45, 45, 45);
            background: linear-gradient(82deg, rgba(45, 45, 45, 0.40689779329700626) 0%, rgba(34, 34, 34, 0.45171572046787467) 100%);


        }

        .content-pre h1 {
            font-size: 20px;
        }

        .modulos {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #section1 {
            width: 100%;
            height: 500px;
            position: absolute;
            top: 0;
        }

        #section2 {
            width: 100%;
            height: 40%;
            background-color: transparent;
        }

        #section3 {
            width: 100%;
            height: 40%;
            background-color: transparent;
        }

        #section4 {
            width: 100%;
            height: 40%;
            background-color: transparent;
        }

        .block-1,
        .block-3,
        .block-4,
        .block-5,
        .block-6,
        .block-7,
        .block-8 {
            display: none;
        }

        .flechas {
            display: inline-block;
            position: absolute;
            bottom: 20px;
            right: 20px;
        }

        .flechas a {
            display: inline-block;
            background-color: orange;
            padding: 10px 15px;
            font-size: 15px;
            color: white;
            margin: 0 5px;
            position: relative;
            left: -10px;
            cursor: pointer;
            text-decoration: none;
            border-radius: 4px;
        }

        .flechas .modulo-siguiente {


            display: inline-block;
            border: none;
            border-radius: 4px;
            background-color: #80631D;
            padding: 9px 15px;
            font-size: 15px;
            color: white;
            margin: 0;
            cursor: pointer;
            text-decoration: none;
        }

        .wrapper .option span {
            font-size: 20px;
            color: white;
            font-weight: 700;
        }


        .wrapper {
            display: flex;
            height: 40px;
            width: 100%;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            margin-top: 20px;
            position: relative;
            left: -13px;
            padding: 20px 15px;
        }

        .wrapper .option {
            background: #80631D;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin: 0 10px;
            border-radius: 5px;
            cursor: pointer;
            padding: 0 10px;
            border: 2px solid lightgrey;
            transition: all 0.3s ease;
        }

        .wrapper .option .dot {
            height: 20px;
            width: 20px;
            background: #d9d9d9;
            border-radius: 50%;
            position: relative;
            display: none;
        }

        .wrapper .option .dot::before {
            position: absolute;
            content: "";
            top: 4px;
            left: 4px;
            width: 12px;
            height: 12px;
            background: orange;
            border-radius: 50%;
            opacity: 0;
            transform: scale(1.5);
            transition: all 0.3s ease;
        }


        .wrapper .option span {
            font-size: 18px;
            color: white;
            font-weight: 700;
        }

        .guia {
            position: absolute;
            top: 60px;
            width: 100%;
            height: 25px;
        }

        .guia i {
            display: inline-block;
            width: 10px;
            height: 10px;
            background-color: white;
            border-radius: 50%;
            margin: 0 2px;
        }

        .flechas {
            width: 100%;
            padding: 10px;
            position: absolute;
            bottom: 30px;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;

        }

    }
</style>

<body>
    <?php

    if ($pre9 == "si") {
    ?>
        <div id="section1"></div>

        <main>
            <section class="content-bloques">
                <section class="bloque-1">
                    <div class="title-bloque-1">
                        <h1>Estructura de Alto Nivel</h1>
                    </div>
                    <div class="modulos block-1">
                        <i class="modulo_pasado fas fa-landmark"></i>
                        <h2 class="modulo_pasado">Contexto de la organización</h2>
                    </div>

                    <div class="modulos block-2">
                        <i class=" active fas fa-handshake"></i>
                        <h2 class="active">Liderazgo</h2>
                    </div>

                    <div class="modulos block-3">
                        <i class="fas fa-bullseye"></i>
                        <h2>Panificación</h2>
                    </div>

                    <div class="modulos block-4">
                        <i class="fas fa-chart-line"></i>
                        <h2>Apoyo</h2>
                    </div>

                    <div class="modulos block-5">
                    <i class="fas fa-user-cog"></i>
                        <h2>Operación</h2>
                    </div>

                    <div class="modulos block-6">
                    <i class="fas fa-exclamation-triangle"></i>
                        <h2>Evaluación del desempeño</h2>
                    </div>

                    <div class="modulos block-7">
                    <i class="fas fa-signal"></i>
                        <h2>Mejora</h2>
                    </div>

                    <div class="modulos block-8">
                    <i class="fas fa-check-circle"></i>
                        <h2>Resultado</h2>
                    </div>
                </section>

                <form class="bloque-2" action="../condiciones/condicion9_2_1.php" method="POST">

                    <!-- PREGUNTA NUMERO PREGUNTA 9_1 CONDICION 1------------------------------------------------------------------------------------------>
                    <div class="pregunta ">
                        <div class="content-pre">
                            <h1>¿se ha comunicado a todos los niveles de la organización?</h1>
                            <div class="wrapper">
                                <input type="radio" name="pregunta_9_1" value="si" id="option-1" required>
                                <input type="radio" name="pregunta_9_1" value="no" id="option-2" required>
                                <label for="option-1" class="option option-1">
                                    <div class="dot"></div>
                                    <span>Si</span>
                                </label>
                                <label for="option-2" class="option option-2">
                                    <div class="dot"></div>
                                    <span>No</span>
                                </label>
                            </div>

                        </div>
                        <div class="guia">
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i class="active-guia"></i>


                        </div>
                        <div class="flechas">
                            <a title="Siguiente Pregunta" class="down fas fa-chevron-down"><input class="input-tras" title="Siguiente Pregunta" type="submit" value="" name="validar-pregunta"></a>

                        </div>
                    </div>
                    <!-- PREGUNTA NUMERO PREGUNTA 8 CONDICION 1------------MODULO 2----------------------------------------------------------------------------->


                </form>

            </section>
        </main>
    <?php
    } else if ($pre9 == "no") {
        /*MOSTARAMPOS LA PREGUNTA 9 Y LO ENVIAMOS A OTRO ARCHIVO */
    ?>
        <div id="section1"></div>

        <main>
            <section class="content-bloques">
                <section class="bloque-1">
                    <div class="title-bloque-1">
                        <h1>Estructura de Alto Nivel</h1>
                    </div>
                    <div class="modulos block-1">
                        <i class=" fas fa-landmark"></i>
                        <h2>Contexto de la organización</h2>
                    </div>

                    <div class="modulos block-3">
                        <i class="  fas fa-handshake"></i>
                        <h2 class="">Liderazgo</h2>
                    </div>

                    <div class="modulos ">
                        <i class="active fas fa-bullseye"></i>
                        <h2 class="active">Panificación</h2>
                    </div>

                    <div class="modulos block-4">
                        <i class="fas fa-chart-line"></i>
                        <h2>Apoyo</h2>
                    </div>

                    <div class="modulos block-5">
                    <i class="fas fa-user-cog"></i>
                        <h2>Operación</h2>
                    </div>

                    <div class="modulos block-6">
                    <i class="fas fa-exclamation-triangle"></i>
                        <h2>Evaluación del desempeño</h2>
                    </div>

                    <div class="modulos block-7">
                    <i class="fas fa-signal"></i>
                        <h2>Mejora</h2>
                    </div>

                    <div class="modulos block-8">
                    <i class="fas fa-check-circle"></i>
                        <h2>Resultado</h2>
                    </div>
                </section>

                <form class="bloque-2" action="../condiciones/redicond11.php" method="POST">

                    <!-- PREGUNTA NUMERO PREGUNTA 10  MODULO 3------------------------------------------------------------------------------------------>
                    <div class="pregunta ">
                        <div class="content-pre">
                            <h1>¿La organización ha establecido un plan de accion para actuar sobre sus riesgos y oportunidades?</h1>
                            <div class="wrapper">
                                <input type="radio" name="pregunta_10" value="si" id="option-1" required>
                                <input type="radio" name="pregunta_10" value="no" id="option-2" required>
                                <label for="option-1" class="option option-1">
                                    <div class="dot"></div>
                                    <span>Si</span>
                                </label>
                                <label for="option-2" class="option option-2">
                                    <div class="dot"></div>
                                    <span>No</span>
                                </label>
                            </div>

                        </div>
                        <div class="guia">
                            <i class="active-guia"></i>
                            <i></i>

                        </div>
                        <div class="flechas">
                            <a title="Siguiente Pregunta" href="#section2" class="down fas fa-chevron-down"></a>
                        </div>
                    </div>
                    <!-- PREGUNTA NUMERO PREGUNTA 10 CON CONCDICION------------MODULO 3----------------------------------------------------------------------------->


                    <!-- PREGUNTA NUMERO 11-------------------------------------MODULO 3---------------------------------------------------->
                    <div id="section2"></div>
                    <div class="pregunta">
                        <div class="content-pre">
                            <h1>¿Se han establecido objetivos relacionados al Sistema de Gestion Antisoborno, y asu vez consistentes con la politica Antisoborno?</h1>
                            <div class="wrapper">
                                <input type="radio" name="pregunta_11" value="si" id="option-3" required>
                                <input type="radio" name="pregunta_11" value="no" id="option-4" required>
                                <label for="option-3" class="option option-3">
                                    <div class="dot"></div>
                                    <span>Si</span>
                                </label>
                                <label for="option-4" class="option option-4">
                                    <div class="dot"></div>
                                    <span>No</span>
                                </label>
                            </div>

                        </div>
                        <div class="guia">
                            <i></i>
                            <i class="active-guia"></i>
                        </div>
                        <div class="flechas">
                            <a title="Retroceder" href="#section1" class="up fas fa-chevron-up"></a>
                            <a title="Siguiente Pregunta" href="#section4" class="down fas fa-chevron-down"><input class="input-tras" title="Siguiente Pregunta" type="submit" value="" name="condi-1"></a>
                        </div>
                    </div>
                    <!-- PREGUNTA NUMERO 11-------------------------------------MODULO 3---------------------------------------------------->

                </form>

            </section>
        </main>

    <?php
    } else {
        echo "OCURRIO UN ERROR";
    }

    ?>
</body>

</html>