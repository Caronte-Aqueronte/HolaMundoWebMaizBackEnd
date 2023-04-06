<?php

//aceptando cualquier peticion
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include("../../services/LikeService.php");
include("../../repositories/LikeRepository.php");
include("../../tools/Conector.php");

//incluyendo clase externa

//obtener el json del request
//$json = file_get_contents('php://input');
//extraer el json
//$params = json_decode($json);
//invocar al Usuario service mandar a traer un usuario
//$usuarioService = new UsuarioService();
//construir un objeto a partir del json
//$usuario = new Usuario($params->correoElectronico, $params->password);

$likeService = new LikeService();



class Result
{
    var $banderaLike;
}

$response = new Result();
//mandamos a ver si el usuario existe
$response->banderaLike = $likeService->nuevoLike();

header('Content-Type: application/json');
echo json_encode($response);

?>