<?php
class ComentarioService{
    private ComentarioRepository $comentarioRepository;

    function __construct(){
        $this->comentarioRepository = new ComentarioRepository;
    }

    function nuevoComentario(Comentario $comentario){
        return $this->comentarioRepository->nuevoComentario($comentario);
    }

    function mostrarComentarios(){
        return $this->comentarioRepository->mostrarComentarios();
    }
}
?>