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
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arimo', sans-serif;}
:root{
    --var-morado: #4E15BC;
    --var-azul: #2172FF;
    --var-amarillo: #FDB900;
    --var-amarilloOscuro: #e4c143;
    --var-verde: #00B945;
    --var-negroClaro: rgb(15, 15, 15);
    
}
body{
    width: 100%;
    height: 100vh;
    background-image: url("../../images/imagen1.jpg");
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    padding:3% 8%;
}
.content-iso{
    width: 100%;
    height: 100%;
    background: rgb(0,89,185);
background: linear-gradient(82deg, rgba(0,89,185,1) 0%, rgba(5,84,173,0.6786064767703957) 23%, rgba(148,148,148,0.1716036756499475) 41%);
    border-radius: 20px;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    padding: 5%;
}
.title-iso{
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    padding: 0 ;
    text-align: center;
}
.title-iso h2{
    color: white;
    font-size: 70px;
    font-weight: 400;
    margin-bottom: 10px;
}
.title-iso h1{
    color: white;
    font-size: 60px;
    font-weight: 500;
}
form{
    width: 50%;
    
    padding: 9% 5%;
}
.bloque-campo{
    width: 90%;
    display: flex;
    flex-direction: column;
}
.bloque-campo label{
    width: 100%;
    color: white;
    font-weight: 600;
    padding: 5px 0;
}
.bloque-campo input{
    background-color: white;
    padding: 12px;
    margin: 5px 0;
    color: black;
    border: none;
    outline: none;
    border-radius: 10px;
}
.campo-numero{
 width: 100%;
 display: flex;
justify-content: space-between;
}
.campo-numero .pais{
  width: 19%;
  
}
.campo-numero .num{
  width: 79%;
}
.condiciones{
    width: 100%;
    margin: 10px 0;
}
.condiciones input{
    margin: 0 5px;
}
.condiciones label{
    color: white;
    font-weight: 600;
}
.terminos{
    color: #0D6EFD;
    font-weight: 900;
}
.boton{
    position: relative;
    top: 15px;
    width: 100%;
    text-align: center;
}
.btn-iniciar{
    width: 50%;
    background-color: #FDB900;
    padding: 15px;
    color: white;
    font-weight: 600;
    border-radius: 5px;
    outline: none;
    border: none;
    font-size: 16px;
    cursor: pointer;
}
input{
    font-size: 16px;
    font-weight: 500;
}
@media (min-width: 768px) and (max-width: 1023px){
       .content-iso{
           width: 100%;
           flex-direction: column;
           background: transparent;
           height: 100vh;
           align-items: center;
           justify-content: center;
        
       }
       .title-iso{
           width: 100%;
           height: auto;
        background: rgb(45,45,45);
        background: linear-gradient(82deg, rgba(45,45,45,0.5329482134650736) 0%, rgba(34,34,34,0.5105392498796393) 100%);
           border-radius: 5px;
           padding: 20px;
       }
       .title-iso h2{
           font-size: 25px;
       }
       .title-iso h1{
           font-size: 35px;
       }
       form{
        height: auto;

           margin: 15px 0 0 0;
           width: 100%;
           background: rgb(45,45,45);
           background: linear-gradient(82deg, rgba(45,45,45,0.5329482134650736) 0%, rgba(34,34,34,0.5105392498796393) 100%);
           border-radius: 5px;
           padding: 20px 20px 30px 20px;
       }
       .bloque-campo{
           width: 100%;
           padding: 5px;
       }
       .btn-iniciar{
           width: 100%;
       }
    }

    @media (min-width: 320px) and (max-width: 767px){
       .content-iso{
           width: 100%;
           flex-direction: column;
           background: transparent;
           height: 100vh;
           align-items: center;
           justify-content: center;
           padding: 0;
        
       }
       .title-iso{
           width: 100%;
           height: auto;
        background: rgb(45,45,45);
        background: linear-gradient(82deg, rgba(45,45,45,0.5329482134650736) 0%, rgba(34,34,34,0.5105392498796393) 100%);
           border-radius: 5px;
           padding: 20px;
       }
       .title-iso h2{
           font-size:15px;
       }
       .title-iso h1{
           font-size: 20px;
       }
       form{
        height: auto;

           margin: 15px 0 0 0;
           width: 100%;
           background: rgb(45,45,45);
           background: linear-gradient(82deg, rgba(45,45,45,0.5329482134650736) 0%, rgba(34,34,34,0.5105392498796393) 100%);
           border-radius: 5px;
           padding: 20px 20px 30px 20px;
       }
       .bloque-campo{
           width: 100%;
           padding: 5px;
       }
       .bloque-campo label{
           
           font-size: 13px;
       }
       .bloque-campo input{
        font-size: 15px;  
        width: 100%;
       }
       .campo-numero input{
          font-size: 15px;
       }
       .campo-numero .pais{
           width: 29%;
           
       }
       .campo-numero .num{
           width: 69%;
           
       }
       .btn-iniciar{
           width: 100%;
       }
       .condiciones label{
           font-size: 11px;
       }
       .condiciones label a{
           font-size: 11px;
       }
       .condiciones input{
           position: relative;
           top: 2.5px;
           left: 1px;
       }
    }
</style>
<body>
    <section class="content-iso">
        <div class="title-iso">
            <h2>ISO 37001</h2>
            <h1>Sistema de Gestión Antisoborno</h1>
        </div>
        <form action="../../controller/ISO37001set/usersave.php" method="POST">
            <div class="bloque-campo">
                <label for="">¿Cúal es tu nombre completo?*</label>
                <input type="text" placeholder="Escriba aquí" name="txtNombre" required>
            </div>
            
            <div class="bloque-campo">
                <label for="">¿Cúal es tu correo?*</label>
                <input type="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="Escriba aquí" name="txtCorreo" required>
            </div>

            <div class="bloque-campo">
                <label for="">¿Cúal es tu teléfon celular?*</label>
                <div class="campo-numero">
                    <input class="pais" type="text" placeholder="+51" name="txtPais" required>
                    <input class="num" type="text" placeholder="Escribe aquí" name="txtNumero" required minlength="9" maxlength="9" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
                </div>
            </div>
            <div class="condiciones">
                <input type="checkbox"  required>
                <label for="">Acepto los <a class="terminos" href="">términos y condiciones.</a></label>
            </div>
            <div class="boton">
            <input type="submit" value="Iniciar" name="btn-iniciar" class="btn-iniciar">
            </div>
        </form>
    </section>

</body>

</html>