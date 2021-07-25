

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    body{
        width: 100%;
        height: 100vh;
        background-image: url("../images/imagen1.jpg");
        overflow: hidden;
    }
    .return{
        position: relative;
        background-color: #4E15BC;
        width: 100px;
        padding: 15px;
        margin: 0 -50px;
        text-decoration: none;
        color: white;
        border-radius: 4px;
    }
</style>

<body>
    
</body>
</html>
<?php
include("../../sweet.php");
        echo "<script>

            Swal.fire({
                icon: 'error',
                allowOutsideClick: false,
                title: 'Lo sentimos',
                text: `No se pudo encontrar el número de RUC ingresado, vuelve a intentarlo`,
                confirmButtonText: `<a class='return' href='../../view/ISO37001view/ISO37001ruc.php'>Regresar</a>`,
                
              });
              
              
     
              </script>";
?>