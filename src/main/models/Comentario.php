<?php

class Comentario
{
    public string $comentario;
    public string $fecha;

    function __construct(string $comentario, string $fecha)
    {
        $this->comentario = $comentario;
        $this->fecha = $fecha;
    }

    function getComentario()
    {
        return $this->comentario;
    }

    function getFecha()
    {
        return $this->fecha;
    }
}
?>