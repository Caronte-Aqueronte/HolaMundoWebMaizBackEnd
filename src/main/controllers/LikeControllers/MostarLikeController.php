<?php
//aceptando cualquier peticion
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

include("../../services/LikeService.php");
include("../../repositories/LikeRepository.php");
include("../../tools/Conector.php");


$likeService = new LikeService();


class Result
{
    var $numLikes;
}

$response = new Result();
//mandamos a ver si el usuario existe
$response->numLikes = $likeService->mostarLikes();

header('Content-Type: application/json');
echo json_encode($response);
?>