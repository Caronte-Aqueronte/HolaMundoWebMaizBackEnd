<?php

class LikeRepository
{

    private Conector $conector;

    function __construct()
    {
        $this->conector = new Conector();
    }

    function nuevoLike()
    {
        //traer la conexion de la base de datos
        $conexion = $this->conector->retornarConexion();
        //query que inserta un nuevo like en la tabla
        $query = "INSERT INTO `like` (fecha_creacion) VALUES(CURDATE());";
        //devolvemos el estado de la transaccion
        return $conexion->query($query);
    }

    function mostarLikes()
    {
        //traer la conexion de la base de datos
        $conexion = $this->conector->retornarConexion();
        //query que inserta un nuevo like en la tabla
        $sql = "SELECT * FROM `like`";
        //devolvemos el estado de la transaccion
        $result = $conexion->query($sql);
        return $result->num_rows;
    }
}

?>