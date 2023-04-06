<?php

class Conector{
    function retornarConexion()
    {
        $con = mysqli_connect("localhost", "usuarioMaiz", "123456789!@#$%^&*(", "maiz", 3306);
        return $con;
    }
}
?>