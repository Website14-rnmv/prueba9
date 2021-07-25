<?php
session_start();

if (isset($_POST["buscar-ruc"])) {
    $ruc = $_POST["ruc"];

    $token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';

    // Iniciar llamada a API
    $curl = curl_init();

    // Buscar ruc sunat
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.apis.net.pe/v1/ruc?numero=' . $ruc,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Referer: http://apis.net.pe/api-ruc',
            'Authorization: Bearer ' . $token
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    // Datos de empresas según padron reducido
    $empresa = json_decode($response);
    
    $confirmar  = $empresa->numeroDocumento;
    $razon = $empresa->nombre;
    
  

    if ($confirmar == $ruc) {
        $_SESSION["consulta"]["nombre"] = $razon;
        $_SESSION["consulta"]["numeroDocumento"] = $confirmar;

        header("location:../../view/ISO37001view/ISO37001mosruc.php");
        

    }else{
        echo "NO ESTA FUNCIONANDO LA VALIDACION";
        header("location:../../controller/ISO37001set/errorRuc.php");

    }


   
}
