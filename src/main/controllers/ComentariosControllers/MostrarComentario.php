<?php
//aceptando cualquier peticion
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include("../../services/ComentarioService.php");
include("../../repositories/ComentarioRepository.php");
include("../../tools/Conector.php");
include("../../models/Comentario.php");

$comentarioService = new ComentarioService();

//mandamos a ver si el usuario existe
$response = $comentarioService->mostrarComentarios();

header('Content-Type: application/json');
echo json_encode($response);
?>