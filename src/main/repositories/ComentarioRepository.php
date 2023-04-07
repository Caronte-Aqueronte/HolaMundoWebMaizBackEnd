<?php
class ComentarioRepository
{
    private Conector $conector;

    function __construct()
    {
        $this->conector = new Conector();
    }

    function nuevoComentario(Comentario $comentario)
    {
        //traer la conexion de la base de datos
        $conexion = $this->conector->retornarConexion();
        //query que inserta un nuevo comentario en la tabla
        $preparedStatement = $conexion->prepare("INSERT INTO comentario (comentario, fecha_comentario) VALUES(?, CURDATE());");
        //damos valores a los ? con los parametros del Comentario enviado como parametro
        $comentarioString = $comentario->getComentario();
        $preparedStatement->bind_param("s", $comentarioString);
        //devolvemos el estado de la transaccion
        return $preparedStatement->execute();
    }

    function mostrarComentarios()
    {
        //traer la conexion de la base de datos
        $conexion = $this->conector->retornarConexion();
        //query que inserta un nuevo like en la tabla
        $sql = "SELECT * FROM comentario ORDER BY id DESC;";
        //ejecucion de la query
        $result = $conexion->query($sql);
        if ($result->num_rows > 0) {
            //array que guardara los registros
            $registros = [];
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $comentarioString = $row["comentario"];
                $fecha = $row["fecha_comentario"];
                $comentario = new Comentario($comentarioString, $fecha);
                $registros[] = $comentario;
            }
            return $registros;
        } 
        return $vacio = [];
    }
}
?>