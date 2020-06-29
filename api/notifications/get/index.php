<?php

header('Content-type: application/json');

include_once '../../global/functions.php';
global $access_token, $collector_id, $notificationJSON;


// Este servicio llama a la URL recibida en la notificación
// Para ver el estado del pago.

$lastResource = file_get_contents('../notifications.txt');

$EXTERNAL_REFERENCE = "";

//Decomentar estas lineas si el lastResource es un JSON
//$jsonResource = json_decode($lastResource, true);
//$urlResource = $jsonResource['resource'];

//Url en texto Plano. Utilizar el código anterior en caso de recibir un JSON
$urlResource = $lastResource;    

$url= $urlResource."?access_token=$access_token";


// REVISAR AQUÍ:
// Agrega la $url necesaria para revisar el estado del pago en base al recurso recibido de la notificación

// Sustituye el método por su correspondiente: get, put, post, delete

curl_call("GET",$url,"");

?>