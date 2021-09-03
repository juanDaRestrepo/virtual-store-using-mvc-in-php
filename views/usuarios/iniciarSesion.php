<br><br><div class="container mt-5">
    <div class="row">
        <div class="col-md-5 col-1 col-lg-3" ></div>
        
        <form action="index.php?controller=usuario&action=save" class=" col-10 col-md-6" method="POST">
            <h2>Inicia sesión</h2>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="correo" >Ingrese su correo</label>
                    <input type="email" class="form-control" name="correo">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12">
                    <label for="">Ingrese su contraseña</label>
                    <input type="text" class="form-control" name="contrasena">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-6">
                    <input type="submit" value="enviar" class="form-control btn-outline-danger" name="enviar">
                </div>
                <div class="form-group col-5 m-2 colorRed">
                    <a href="<?=baseUrl?>usuario/registro" style="color:#bb0c0c" >Regístrate</a>
                </div>
                
            </div>
        </form>
    </div>
</div>