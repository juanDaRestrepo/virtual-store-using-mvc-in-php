<div class="container-md mt-5">
<h2>Crea tu cuenta</h2>
<label for="mensajeDeFormularioDeRegistro">
El siguiente formulario le permitirá crear una cuenta para realizar sus pedidos de una forma más rápida y personalizada.</label>
<form action="<?=baseUrl?>usuario/save" method="POST" class="border-top border-secondary mt-3 mr-md-5" id="form-registro">
<?php
if(isset($_SESSION["register"])){
    echo '<div class="from-row">
                '.$_SESSION["register"].'
            </div>';
    Utils::deleteSession('register');
}
?>
<div class="form-row mt-3">
    <div class="form-group col-md-4">
        <label for="">Nombres*</label>
        <input type="text" name="nombres" class="form-control" id="nombre"  required>
    </div>
    <div class="form-group col-md-4 ml-md-5">
        <label for="">Apellidos*</label>
        <input type="text" name="apellidos" class="form-control" id="apellidos"  required>
    </div>
</div>
      
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="">Número de celular*</label>
        <input type="number" name="celular" class="form-control" id="celular"  required>
    </div>
    <div class="form-group col-md-4 ml-md-5">
        <label for="">Confirmar Número de celular*</label>
        <input type="number" name="celularConfirma" class="form-control" id="celular" required>
    </div>
</div>
<?php
if(isset($_SESSION["mensajeCelular"])){
    echo"
        <div class='form-row'>
            <div class='form-group'>
                <label for='celular no coincide' class='text-danger'>".$_SESSION["mensajeCelular"]."</label>
            </div>
        </div>
    ";
    Utils::deleteSession('mensajeCelular');
} 
?>
<div class="form-row">
    <div class="form-group col-md-4">
        <label for="departamento">Departamento*</label>
        <select name="departamento" class="form-control" id="departamento"  required>
            <option value="" selected disabled>Seleccione Departamento</option>
        </select>
    </div>
    <div class="form-group col-md-4 ml-md-5">
        <label for="">Ciudad*</label>
        <select name="ciudad" id="ciudad" class="form-control"></select>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-6">
        <label for="">Dirección*</label>
        <input type="text" name="direccion" class="form-control" id="dirección" required>
    </div>

</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="correo">Correo*</label>
        <input type="email" name="email" class="form-control" id="correo" required>
    </div>
    <div class="form-group col-md-4 ml-md-5">
        <label for="correo">Confirmar correo*</label>
        <input type="email" name="emailConfirma" class="form-control" id="correo" required>
    </div>
</div>
<?php
if(isset($_SESSION["mensajeEmail"])){
    echo"
        <div class='form-row'>
            <div class='form-group'>
                <label for='celular no coincide' class='text-danger'>".$_SESSION["mensajeEmail"]."</label>
            </div>
        </div>
    ";
    Utils::deleteSession('mensajeEmail');
} 
?>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="contrasena">Contraseña*</label>
        <input type="text" name="contrasena" id="contrasena" class="form-control" required>
    </div>
    <div class="form-group col-md-4 ml-md-5">
        <label for="contrasena">Confirmar contraseña*</label>
        <input type="text" name="contrasenaConfirma" id="contrasena" class="form-control" required>
    </div>
</div>
<?php
if(isset($_SESSION["mensajeContrasena"])){
    echo"
        <div class='form-row'>
            <div class='form-group'>
                <label for='celular no coincide' class='text-danger'>".$_SESSION["mensajeContrasena"]."</label>
            </div>
        </div>
    ";
    Utils::deleteSession('mensajeContrasena');
} 
?>   
<div class="form-row">
    <div class="form-group">
        <input type="submit" class="form-control btn-outline-danger" value="enviar">
    </div>
</div>
    

    

    
    

</form>

</div>