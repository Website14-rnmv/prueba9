<?php
include("logicafinal.php");
/*  $var1 = 15;
$var2 = 18;
$var3 = 10; 
$var4 = 65; 

$var5 = 9; 

$var6 = 5; 

$var7 = 3; 

$var8 = 1;  */


/* echo "puntos modulo 1: " . $puntosModulo_1 . "<br>";
echo "puntos modulo 2: " . $puntosModulo_2 . "<br>";
echo "puntos modulo 3: " . $puntosModulo_3 . "<br>";
echo "puntos modulo 4: " . $puntosModulo_4 . "<br>";
echo "puntos modulo 5: " . $puntosModulo_5 . "<br>";
echo "puntos modulo 6: " . $puntosModulo_6 . "<br>";
echo "puntos modulo 7: " . $puntosModulo_7 . "<br>"; */


?>
<!DOCTYPE html>
<html lang="en">

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
    
    <link rel="icon" type="image/png" href="../../icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="../../icon.png">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/jquery.knob.js"></script>
    <script>
        $(document).ready(function() {
            //$(".dial").knob();
            $('.dial').knob({
                'min': 0,
                'max': 100,
                'width': 250,
                'height': 250,
                'displayInput': true,
                'fgColor': "#164CAA",
                'thickness': 0.15,

                'release': function(v) {
                    $("p").text(v);
                },
                'readOnly': true
            });
        });
    </script>
    <title>Resultado</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Arimo', sans-serif;

    }





    /* body{
        display: flex;
        align-items: center;
        justify-content: center;
    } */
    /* .content-barras{
        width: 50%;
        
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .grafico-1{
        width: 100%;
        height: 100%;
    } */
    /* @media (min-width: 320px) and (max-width: 767px){
        .content-barras{
            width: 95%;
             height: 500px;   
        }
        .grafico-1{
        width: 100%;
        height: 500px;
    }
    } */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }

    :root {
        --var-morado: #4E15BC;
        --var-azul: #2172FF;
        --var-amarillo: #FDB900;
        --var-amarilloOscuro: #e4c143;
        --var-verde: #00B945;
        --var-orange: #FDB900;
        --var-negroClaro: rgb(15, 15, 15);

    }

    body {
        background-color: #F5F5F5;
        padding: 0 0 5% 0;
    }

    .content-resultados {
        width: 100%;
        margin: 0;
        padding: 0;
        background-color: #F5F5F5;
    }

    .title-resultado {
        position: relative;
        padding: 2%;
        text-align: center;
        margin-top: 50px;
        width: 40%;
        background-color: #0C4F97;
    }

    .title-resultado h1 {
        text-transform: uppercase;
        font-size: 30px;
        color: white;
    }

    .title-resultado h2 {
        color: white;
        padding-bottom: 10px;
        border-bottom: 2px solid var(--var-orange);
    }

    .main {

        width: 100%;
        padding: 10%;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .datos {
        position: relative;
        top: 50px;
        left: 10%;
        width: 80%;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
        border-radius: 5px;
        padding: 4%;
    }

    .datos h2 {
        padding: 0 0 1% 0;
    }

    .cuadro-resultado {
        width: 100%;
    }

    .resultado {
        width: 100%;
        display: flex;
        border: 1px solid #ccc;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        border-radius: 2px;
    }

    .resultado label {
        width: 50%;
    }

    .resultado input {
        width: 50%;

        border: none;
        background-color: white;

    }


    .content-circulos {
        position: relative;
        margin-top: 30px;
        top: 50px;
        left: 10%;
        width: 80%;
        border-radius: 5px;

        display: flex;
        align-items: flex-start;
        justify-content: space-between;
    }

    .wid-circulo {
        width: 48.5%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4%;
        background-color: white;
        text-align: center;
        box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
        border-radius: 5px;
        height: 450px;

    }

    .container-cir h2 {
        display: inline-block;
        margin-bottom: 25px;
    }

    .container-cir input {
        font-size: 20px;
    }

    .barras {
        margin-top: 30px;
        position: relative;
        top: 50px;
        left: 10%;
        width: 80%;
        background-color: white;
        box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
        border-radius: 5px;
        padding: 4%;
    }


    @media (min-width: 768px) and (max-width: 1023px) {

        body {
            background-color: #F5F5F5;
            padding: 0 0 10% 0;
        }

        .content-resultados {
            width: 100%;
            margin: 0;
            padding: 0;
            background-color: #F5F5F5;
        }

        .title-resultado {
            position: relative;
            padding: 2%;
            text-align: center;
            margin-top: 50px;
            width: 100%;
            background-color: #0C4F97;

        }

        .title-resultado h1 {
            text-align: center;
            text-transform: uppercase;
            font-size: 30px;
            color: white;
        }

        .title-resultado h2 {
            color: white;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--var-orange);
        }

        .main {

            width: 100%;
            padding: 10%;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .datos {
            position: relative;
            top: 50px;
            left: 10%;
            width: 80%;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
            border-radius: 5px;
            padding: 4%;
        }

        .datos h2 {
            padding: 0 0 1% 0;
            text-align: center;
        }

        .cuadro-resultado {
            width: 100%;
        }

        .resultado {
            width: 100%;
            display: flex;
            border: 1px solid #ccc;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            border-radius: 2px;
        }

        .resultado label {
            width: 50%;
        }

        .resultado input {
            width: 50%;

            border: none;
            background-color: white;

        }


        .content-circulos {
            position: relative;
            margin-top: 30px;
            top: 50px;
            left: 10%;
            width: 80%;
            box-shadow: none;
            border-radius: 5px;

            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            flex-direction: column;
        }

        .wid-circulo {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 4%;
            margin: 20px 0;
            background-color: white;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
            border-radius: 5px;
            height: auto;


        }

        .container-cir h2 {
            display: inline-block;
            margin-bottom: 25px;
        }

        .container-cir input {
            font-size: 20px;
        }

        .barras {
            margin-top: 30px;
            position: relative;
            top: 50px;
            left: 10%;
            width: 80%;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
            border-radius: 5px;
            padding: 4%;
        }

    }

    @media (min-width: 320px) and (max-width: 767px) {

        body {
            background-color: #F5F5F5;
            padding: 0 0 10% 0;
        }

        .content-resultados {
            width: 100%;
            margin: 0;
            padding: 0;
            background-color: #F5F5F5;
        }

        .title-resultado {
            position: relative;
            padding: 5%;
            text-align: center;
            margin-top: 50px;
            width: 100%;
            background-color: #0C4F97;

        }

        .title-resultado h1 {
            text-align: center;
            text-transform: uppercase;
            font-size: 25px;
            color: white;
        }

        .title-resultado h2 {
            color: white;
            font-size: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--var-orange);
        }

        .main {

            width: 100%;
            padding: 10%;
            display: flex;
            align-items: center;
            justify-content: center;

        }

        .datos {
            position: relative;
            top: 50px;
            left: 5%;
            width: 90%;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
            border-radius: 5px;
            padding: 5%;
        }

        .datos h2 {
            font-size: 18px;
            padding: 0 0 1% 0;
            text-align: center;
        }

        .cuadro-resultado {
            width: 100%;
            margin: 10px 0 0 0;
        }


        .resultado {
            width: 100%;
            display: flex;
            border: 1px solid #ccc;
            align-items: center;
            flex-direction: column;
            text-align: center;
            justify-content: space-between;
            padding: 10px;
            border-radius: 2px;
        }

        .resultado label {
            width: 100%;
            font-size: 15px;
        }

        .resultado input {
            width: 100%;
            font-size: 17px;
            text-align: center;

            border: none;
            background-color: white;

        }


        .content-circulos {
            position: relative;
            margin-top: 20px;
            top: 50px;
            left: 5%;
            width: 90%;
            box-shadow: none;
            border-radius: 5px;

            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            flex-direction: column;
        }

        .wid-circulo {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 5%;
            margin: 20px 0;
            background-color: white;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
            border-radius: 5px;
            height: auto;
        }

        .container-cir h2 {
            display: inline-block;
            margin-bottom: 25px;
            font-size: 18px;
            padding: 10px 0;
        }

        .container-cir input {
            font-size: 20px;
        }

        .barras {
            margin-top: 30px;
            position: relative;
            top: 50px;
            left: 5%;
            width: 90%;
            background-color: white;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 3px 12px;
            border-radius: 5px;
            padding: 4%;
        }

    }
</style>

<body>
    <section class="content-resultados">
        <div class="title-resultado">
            <h1>Resultados</h1>
            <h2>cumplimiento ISO 37001</h2>
        </div>
    </section>

    <main>
        <div class="datos">
            <h2>Datos de la empresa</h2>
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
        </div>
        <div class="content-circulos">
            <div class="wid-circulo">
                <div class="container-cir">
                    <h2>Porcentaje cumplimiento total</h2>
                    <input disabled type="text" value="<?php echo round($porcentajeTotalModulos, 2); ?>" class="dial">
                </div>

            </div>
            <div class="wid-circulo">
                <div class="container-cir">
                    <div class="content-barras">
                        <canvas class="grafico-1" id="myChart_2"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="barras">
        <div class="content-barras">
            <canvas class="grafico-1" id="myChart"></canvas>
        </div>
    </section>

    <script>
        let ctx_2 = document.getElementById('myChart_2').getContext('2d');
        let labels = ['Si ', 'No '];
        let colorHex = ['#164CAA', '#FDB900'];

        let myChart_2 = new Chart(ctx_2, {
            type: 'pie',
            data: {
                datasets: [{
                    data: [<?php echo $sumasSi; ?>, <?php echo $sumasNo; ?>],
                    backgroundColor: colorHex
                }],
                labels: labels
            },
            options: {
                responsive: true,
                legend: {
                    position: 'bottom'
                },
                plugins: {
                    datalabels: {
                        color: '#fff',
                        anchor: 'end',
                        align: 'start',
                        offset: -10,
                        borderWidth: 2,
                        borderColor: '#fff',
                        borderRadius: 25,
                        backgroundColor: (context) => {
                            return context.dataset.backgroundColor;
                        },
                        font: {
                            weight: 'bold',
                            size: '10'
                        },
                        formatter: (value) => {
                            return value + ' %';
                        }
                    },
                    title: {
                        display: true,
                        text: 'Repuestas entre:'
                    }
                },

            }
        })
    </script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['M1', 'M2', 'M3', 'M4', 'M5', 'M6', 'M7'],
                datasets: [{
                    label: '% Módulo',
                    data: [<?php echo round($porcentajeM1,2); ?>,
                        <?php echo round($porcentajeM2,2); ?>,
                        <?php echo round($porcentajeM3,2); ?>,
                        <?php echo round($porcentajeM4,2); ?>,
                        <?php echo round($porcentajeM5,2); ?>,
                        <?php echo round($porcentajeM6,2); ?>,
                        <?php echo round($porcentajeM7,2); ?>

                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(33, 114, 255, 0.369)',
                        'rgba(238, 114, 42, 0.336)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(33, 114, 255)',
                        'rgba(238, 114, 42)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        min: 0,
                        max: 100,
                    }
                },
                // Elements options apply to all of the options unless overridden in a dataset
                // In this case, we are setting the border of each horizontal bar to be 2px wide
                elements: {
                    bar: {
                        borderWidth: 5,
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Grafico de barras - Porcentaje individual'
                    ,
                },
                    
                }



            },


        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
</body>

</html>