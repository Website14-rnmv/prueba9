<?php
session_start();
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Diagnostico de cumplimiento ISO's - ISO's Perú</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Arimo', sans-serif;
        }

    :root {
        --var-morado: #4E15BC;
        --var-azul: #2172FF;
        --var-amarillo: #FDB900;
        --var-amarilloOscuro: #e4c143;
        --var-verde: #00B945;
        --var-negroClaro: rgb(15, 15, 15);

    }

    body {
        width: 100%;
        height: 100vh;
        background-image: url("../../images/imagen1.jpg");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 3% 8%;
    }

    .content-iso {
        width: 100%;
        height: 100%;
        background: rgb(0,89,185);
       background: linear-gradient(82deg, rgba(0,89,185,1) 0%, rgba(5,84,173,0.6786064767703957) 23%, rgba(148,148,148,0.1716036756499475) 41%);
        display: flex;
        border-radius: 20px;
        align-items: flex-start;
        justify-content: space-between;
        padding: 5%;
    }

    .title-iso {
        width: 50%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 0;
        text-align: center;
    }

    .title-iso h2 {
        color: white;
        font-size: 70px;
        font-weight: 400;
        margin-bottom: 10px;
    }

    .title-iso h1 {
        color: white;
        font-size: 60px;
        font-weight: 500;
    }

    .ingrese-ruc {
        width: 50%;
        padding: 5% 0;
    }

    .bloque-campo {
        width: 100%;
        display: flex;
        flex-direction: column;
    }

    .bloque-campo label {
        width: 100%;
        color: white;
        font-weight: 600;
        padding: 5px 0;
    }

    .bloque-campo input {
        background-color: white;
        padding: 12px;
        margin: 5px 0;
        color: black;
        border: none;
        outline: none;
        border-radius: 10px;
    }

    .boton {
        position: relative;
        top: 15px;
        width: 100%;
        text-align: center;
    }

    .btn-iniciar {
        width: 50%;
        background-color: var(--var-morado);
        padding: 15px;
        color: white;
        font-weight: 600;
        border-radius: 5px;
        outline: none;
        border: none;
        font-size: 16px;
    }

    input {
        font-size: 16px;
        font-weight: 500;
    }

    .bloque-2 {
        width: 50%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;

        padding: 0 5%;
    }

    /*radios*/
    .wrapper {

        display: inline-flex;
        background: none;
        height: 80px;
        width: 100%;
        align-items: center;
        justify-content: space-evenly;
        border-radius: 5px;
        padding: 15px;
    }

    .wrapper .option {
        background: white;
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        margin: 0 10px;
        border-radius: 5px;
        cursor: pointer;
        padding: 0 10px;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
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
        background: #FDB900;
        border-radius: 50%;
        opacity: 0;
        transform: scale(1.5);
        transition: all 0.3s ease;
    }

    .contenedorcaja {
        width: 100%;
        margin: 10px 0;
    }

    input[type="radio"] {
        display: none;
    }

    #option-1:checked:checked~.option-1,
    #option-2:checked:checked~.option-2,
    #option-3:checked:checked~.option-3 {
        border-color: #0554AD;
        background:#0554AD;

    }

    #option-1:checked:checked~.option-1 .dot,
    #option-2:checked:checked~.option-2 .dot,
    #option-3:checked:checked~.option-3 .dot {
        background: #fff; 
    }

    #option-1:checked:checked~.option-1 .dot::before,
    #option-2:checked:checked~.option-2 .dot::before,
    #option-3:checked:checked~.option-3 .dot::before {
        opacity: 1;
        transform: scale(1);
    }

    .wrapper .option span {
        font-size: 17px;
        color: #282828;
        font-weight: 500;
    }

    #option-1:checked:checked~.option-1 span,
    #option-2:checked:checked~.option-2 span,
    #option-3:checked:checked~.option-3 span {
        color: #fff;
    }

    .ingrese-ruc {
        width: 100%;
    }

    form {
        width: 100%;
    }

    .resultado {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;

    }

    .m-re {
        display: inline-block;
        width: 100%;
        font-size: 20px;
        margin-bottom: 15px;

    }

    .resultado label {
        width: 100%;
        color: white;
        font-weight: 500;
    }

    .resultado input {
        width: 80%;
        background-color: transparent;
        outline: none;
        border: none;
        color: white;
    }

    .resu {
        border: 2px solid #ccc;
        padding: 10px;

    }

    .datos-empresa {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 20px 0;
    }

    .datos-uno {
        display: flex;
        justify-content: center;
    }

    .datos-empresa label {
        color: white;
        font-weight: 500;
        font-size: 17px;
    }

    .datos-empresa input {
        margin-left: 5px;
        width: 70px;
        padding: 10px;
        border-radius: 5px;
        outline: none;
        border: none;
    }

    .enviar-datos {
        width: 100%;
        position: relative;
        top: 10px;
        text-align: center;
    }

    .enviar-datos input {

        width: 50%;
        background-color: var(--var-amarillo);
        color: white;
        cursor: pointer;
        padding: 15px 5px;
        border: none;
        outline: none;
        border-radius: 5px;
    }

    .arrow {

        background-color: #808080;
        color: white;
        padding: 15px 5px;
        border: none;
        outline: none;
        border-radius: 5px;

    }

    .arrow i {
        font-size: 24px;
        padding: 10px;
        position: relative;
        top: 3px;
    }

    .tm-empresa {
        margin-top: 15px;
        width: 100%;
        display: flex;
        align-items: center;

    }

    .tm-empresa label {
        color: white;
        font-size: 17px;
        font-weight: 600;
        padding-right: 10px;
    }

    .datos-2 {
        position: relative;
        top: 10px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .datos-empresa i {
        margin-left: 10px;
        width: 25px;
        height: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: white;

        background-color: #FDB900;
    }

    @media (min-width: 768px) and (max-width: 1023px) {
        .content-iso {
            width: 100%;
            flex-direction: column;
            background: transparent;
            height: 100vh;
            align-items: center;
            justify-content: center;
            padding: 0;

        }

        .title-iso {
            width: 100%;
            height: auto;
            background: rgb(45, 45, 45);
            background: linear-gradient(82deg, rgba(45, 45, 45, 0.5329482134650736) 0%, rgba(34, 34, 34, 0.5105392498796393) 100%);
            border-radius: 5px;
            padding: 20px;
        }

        .title-iso h2 {
            font-size: 18px;
        }

        .title-iso h1 {
            font-size: 22px;
        }

        .bloque-2 {
            height: auto;
            margin: 15px 0 0 0;
            width: 100%;
            background: rgb(45, 45, 45);
            background: linear-gradient(82deg, rgba(45, 45, 45, 0.5329482134650736) 0%, rgba(34, 34, 34, 0.5105392498796393) 100%);
            border-radius: 5px;
            padding: 20px 20px 30px 20px;
        }

        .datos-2 {
            position: relative;
            top: 10px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }

    @media (min-width: 320px) and (max-width: 768px) {
        .content-iso {
            width: 100%;
            flex-direction: column;
            background: transparent;
            height: 100vh;
            align-items: center;
            justify-content: center;
            padding: 0;

        }

        .title-iso {
            width: 100%;
            height: auto;
            background: rgb(45, 45, 45);
            background: linear-gradient(82deg, rgba(45, 45, 45, 0.5329482134650736) 0%, rgba(34, 34, 34, 0.5105392498796393) 100%);
            border-radius: 5px;
            padding: 20px;
        }

        .title-iso h2 {
            font-size: 18px;
        }

        .title-iso h1 {
            font-size: 22px;
        }

        .bloque-2 {
            height: auto;
            margin: 15px 0 0 0;
            width: 100%;
            background: rgb(45, 45, 45);
            background: linear-gradient(82deg, rgba(45, 45, 45, 0.5329482134650736) 0%, rgba(34, 34, 34, 0.5105392498796393) 100%);
            border-radius: 5px;
            padding: 20px 20px 30px 20px;
        }

        .resultado {
            flex-direction: column;
            text-align: center;
        }

        .resultado label {
            width: 100%;
            font-size: 13px;
            text-align: center;
            margin-bottom: 2px;

        }

        .resultado input {
            width: 100%;
            font-size: 15px;
            text-align: center;
            color: #ccc;

        }

        .tm-empresa {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;

        }

        .tm-empresa label {
            font-size: 13px;
        }

        .tm-empresa i {
            font-size: 13px;
        }

        .datos-empresa {
            width: 100%;
        }

        .datos-empresa label {
            width: 70%;
            font-size: 13px;
        }

        .datos-empresa input {
            width: 30%;
        }

        .wrapper .option span {
            
            font-size: 11px;
            color: #808080;
            font-weight: 600;
            text-align: center;
        }

        .wrapper {

            background: none;
            height: 60px;
            width: 100%;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            
        }
        .option{
            width: 100%;
        }
        .enviar-datos{
            width: 100%;
        }
         .enviar-datos input{
             width: 70%;
         }


    }
</style>

<body>
    <section class="content-iso">
        <div class="title-iso">
            <h2>ISO 37001</h2>
            <h1>Sistema de Gestión Antisoborno</h1>
        </div>
        <div class="bloque-2">

            <form action="../../view/ISO37001view/ISO37001question.php" method="POST">
                <div class="resultado">
                    <label class="m-re" for="">Resultado de tu busqueda</label>
                </div>
                <div class="cuadro-resultado">
                    <div class="resultado resu">
                        <label for="">RUC</label>
                        <input type="txtRuc" disabled value="<?php echo $_SESSION["consulta"]["numeroDocumento"];  ?>">
                    </div>

                    <div class="resultado resu">
                        <label for="">Razon Social</label>
                        <input type="txtRazonSocial" disabled value="<?php echo $_SESSION["consulta"]["nombre"]; ?>">
                    </div>
                </div>
                <div class="tm-empresa">
                    <label for="">Datos de la Empresa</label>
                </div>
                <div class="datos-empresa datos-uno">
                    <label for="">Numero de trabajadores</label>.

                    <input name="txtTrabajadores" type="number" placeholder="+20" required min="1">
                </div>

                <div class="datos-empresa datos-2">
                    <label for="">Tamaño de la empresa</label>
                    <i class="fas fa-info"></i>

                </div>
                <div class="wrapper">
                    <input type="radio" name="tm_empresa" id="option-1" value="micro" required>
                    <input type="radio" name="tm_empresa" id="option-2" value="pequeña" checked required>
                    <input type="radio" name="tm_empresa" id="option-3" value="no_mype" required>

                    <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                        <span>Micro</span>
                    </label>
                    <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                        <span>Pequeña</span>
                    </label>
                    <label for="option-3" class="option option-3">
                        <div class="dot"></div>
                        <span>NO MYPE</span>
                    </label>
                </div>
                <div class="enviar-datos">
                    <a class="arrow" href="ISO37001ruc.php"><i class="fas fa-angle-double-left"></i></a>
                    <input type="submit" value="Siguiente" class="btn-siguiente" name="btn-siguiente">
                </div>
            </form>
        </div>
    </section>

    <script type="text/javascript" src="../js/mostrarRuc.js"></script>
</body>

</html>