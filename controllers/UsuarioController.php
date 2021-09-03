<?php

require_once 'models/usuario.php';
class usuarioController{
    public function index(){
        echo "Controlador usuarios, Accion index";
    }

    public function registro(){
        require_once 'views/usuarios/registro.php';
       
    }
    public function iniciarSesion(){
        require_once 'views/usuarios/iniciarSesion.php';
        
    }
    public function save(){
        if(isset($_POST)){
            //Se reciben todos los datos para devolverlos al formulario en caso de que 
            //los datos que necesitan confirmación no haytn sido diligenciados correctamente
            $nombres=isset($_POST["nombres"]) ? $_POST["nombres"]:false;
            $apellidos=isset($_POST["apellidos"]) ? $_POST["apellidos"]:false;
            $departamento=isset($_POST["departamento"]) ? $_POST["departamento"]:false;
            $ciudad=isset($_POST["ciudad"]) ? $_POST["ciudad"]:false;
            $direccion=isset($_POST["direccion"]) ? $_POST["direccion"]:false;
            
            //confirmación de datos
            $celular=$_POST["celular"];
            $celularConfirma=$_POST["celularConfirma"];

            $email=$_POST["email"];
            $emailConfirma=$_POST["emailConfirma"];

            $contrasena=$_POST["contrasena"];
            $contrasenaConfirma=$_POST["contrasenaConfirma"];

            if($celular!=$celularConfirma){
                $_SESSION["mensajeCelular"]="El numero ingresado no coincide";
                header("Location:registro");
                exit;
            }elseif($email!=$emailConfirma){
                $_SESSION["mensajeEmail"]="El email no coincide";
                header("Location:registro");
                exit;
            }elseif($contrasena!=$contrasenaConfirma){
                $_SESSION["mensajeContrasena"]="La contraseña no coincide";
                header("Location:registro");
                exit;
            }
            //--------------------------------------------------
            $usuario=new Usuario();

            $idCiudad=$usuario->verCiudadId($ciudad);

            $usuario->setNombre($nombres);
            $usuario->setApellidos($apellidos);
            $usuario->setCelular($celular);
            $usuario->setEmail($email);
            $usuario->setContrasena($contrasena);
            $usuario->setDireccion($direccion);
            $usuario->setCiudad_id($idCiudad);
            
            
            
            $save=$usuario->save();
            if($save){
                $_SESSION['register'] ='<label for="" class="text-success">Registro completado</label>';
            }else{
                $_SESSION['register'] = '<label for="" class="text-danger">Registro fallido</label>';
            }
        }else{
            $_SESSION['register'] = '<label for="" class="text-danger">Registro fallido</label>';
           
        }
        header("Location:".baseUrl."usuario/registro");
    }
    
}
?>