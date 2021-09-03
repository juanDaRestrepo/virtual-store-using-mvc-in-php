<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--ESTILOS BOOTSTRAP 4-->
    <link rel="stylesheet" href="<?=baseUrl?>assets/css/bootstrap.min.css">
    <!--ESTILOS PERSONALIZADOS-->
    <link rel="stylesheet" href="<?=baseUrl?>assets/css/estilos.css">
    <link rel="stylesheet" href="<?=baseUrl?>assets/fontawesome/css/all.css">
    <script src="<?=baseUrl?>assets/fontawesome/js/all.js"></script>
    <title>Tienda Virtual D&C Burger's</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md" style="background:#bb0c0c">
        <div class="container">
            <a href="" class="navbar-brand">
                <img src="<?=baseUrl?>assets/img/logoDyC.jpeg" alt="Logotipo de HTML5" width="110" />
            </a> 
            <button type="button" class="navbar-toggler" data-toggle="collapse"
            data-target="#menu-principal" aria-controls="menu-principal" aria-expanded="false"
            aria-label="Desplegar menu de navegación">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-link  active mr-sm-5"><a href="<?=baseUrl?>usuario/iniciarSesion" class="nav-link active">Inicia sesión</a></li>
                    <li class="nav-link mr-sm-5"><a href="<?=baseUrl?>producto/index" class="nav-link">Menú</a></li>
                    <li class="nav-link mr-sm-5"><a href="" class="nav-link">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>