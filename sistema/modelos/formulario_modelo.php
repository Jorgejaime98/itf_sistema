<?php
require_once "conexion.php";

class ModeloFormulario{

    static public function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (email, clave, estado) values (:email,:clave,:estado)");

        $stmt->bindParam(":email",   $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":clave",   $datos["clave"], PDO::PARAM_STR);
        $stmt->bindParam(":estado",   $datos["estado"], PDO::PARAM_STR);


        if ($stmt->execute()){
            return "OK";
        } else {
            return Conexion::conectar()->errorInfo();
        }

       $stmt->close(); 
       $stmt = null;
    }

    // Seleccionar todos los registros  de la tabla usuario.
    // Se retorna colección con las tuplas seleccionadas.
    static public function mdlSeleccionarRegistros($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT id_usuarios, email, clave, estado FROM $tabla ORDER BY email");

        $stmt->execute();
        
        return $stmt->fetchAll();

        $stmt->close(); 
        $stmt = null;        
    }

    
}

?>