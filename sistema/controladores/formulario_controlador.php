<?php
require_once "modelos/formulario_modelo.php";

class ControladorFormulario{

    // Controlador para manejar el registro del usuario al sistema.
    static public function ctrCrearRegistrosUsuarios(){
        if (isset($_POST["CrearEmailUsuarios"])) {
            $tabla = "usuarios";

            $datos = array(
                "email"  => $_POST["CrearEmailUsuarios"],
                "clave"  => $_POST["CrearClaveUsuarios"],
                "estado"  => $_POST["CrearEstadoUsuarios"],
            );

            //Una vez cargado mis datos desde el formulario web,
            //los paso al modelo respectivo.
            $respuesta = ModeloFormulario::mdlCrearRegistrosUsuarios($tabla, $datos);

            return $respuesta;
        }
    }

// Método para cargar todos los usuarios a la vista respectiva.
    static public function ctrSeleccionarRegistrosUsuarios(){

        $tabla = "usuarios";

        $respuesta = ModeloFormulario::mdlSeleccionarRegistrosUsuarios($tabla);

        return $respuesta;
    }



// Controlador para manejar la actualizacion de registro del usuario al sistema.
    static public function ctrActualizarRegistro(){
        if (isset($_POST["EditarEmailUsuarios"])) {
            $tabla = "usuarios";
    
            $datos = array(
                "id_usuarios" => $_POST["EditarId"],
                "email" => $_POST["EditarEmailUsuarios"],
                "clave" => $_POST["EditarPassword"],
                "estado"  => $_POST["EditarEstadoUsuarios"],
            );

            $respuesta = ModeloFormulario::mdlActualizarRegistro($tabla, $datos);
    
            return $respuesta;
        }
    }

    //Método para consultar un registro de la tabla usuario.
    static public function ctrSeleccionarRegistro($id_usuarios){

        $tabla = "usuarios";

        $respuesta = ModeloFormulario::mdlSeleccionarRegistro($tabla, $id_usuarios);
         
        return $respuesta;
        
    }
}
?>