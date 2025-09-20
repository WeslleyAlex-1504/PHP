<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$rota = $_SERVER["REQUEST_URI"];
$metodo = $_SERVER["REQUEST_METHOD"];

$resposta = ["message" => "informações do evento encontradas com sucesso"];

if($metodo === "GET"){
    if($rota === "/evento") {
        echo json_encode($resposta);
        exit;
    }
    
}

$respostaErro = ["message" => "rota invalida"];
echo json_encode($respostaErro);
exit;