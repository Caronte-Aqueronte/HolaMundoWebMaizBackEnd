<?php


include("../../services/ComentarioService.php");
include("../../repositories/ComentarioRepository.php");
include("../../tools/Conector.php");
include("../../models/Comentario.php");


header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$json = file_get_contents('php://input');

$params = json_decode($json);



$comentarioService = new ComentarioService();

$comentario = new Comentario($params->comentario, "");

class Result
{
var $banderaComentario;
}
$response = new Result();
//mandamos a ver si el usuario existe
$response->banderaComentario = $comentarioService->nuevoComentario($comentario);
header('Content-Type: application/json');
echo json_encode($response);
?>