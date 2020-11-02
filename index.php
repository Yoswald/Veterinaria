<?php 
    
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="views/css/bootstrap/bootstrap.min.css">
    <!-- personalizado CSS -->
    <link rel="stylesheet" href="views/css/index.css">
    <!-- Los iconos tipo Solid de Fontawesome-->
     <link rel="stylesheet" href="views/css/fontawesome/css/solid.css">
     <script src="views/css/fontawesome/js/all.js"></script>
     <link rel="shortcut icon" href="#" />      
          
    
     <!-- Plugin Toastr -->      
     <link rel="stylesheet" href="toast/plugins/toastr/toastr.min.css"> 
      
    <link rel="stylesheet" href="toast/estilos.css">
    
    <link rel="stylesheet" href="pace/themes/blue/pace-theme-minimal.css"> 

<script src="pace/pace.js"></script> 

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">  
            <!--  <button id="btn1" class="btn btn-info">Mostrar Notificación</button>        -->      
            </div>                                        
        </div>                  
    </div>
      
    <script src="toast/jquery/jquery-3.3.1.min.js"></script>      
    <script src="toast/popper/popper.min.js"></script>            
    <script src="toast/bootstrap4/js/bootstrap.min.js"></script>   
      
    <!--  Plugin Toastr -->
    <script src="toast/plugins/toastr/toastr.min.js"></script>
        
   

    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                  
                 <!-- <img src="views/img/caribe.jpg"/>
                  -->
                 <h1 class="forgot" >Veterinaria</h1>
                  usuario:mascota
                  clave:1234

                    
                </div>
                <form action="conexion/controladorlogin.php"  class="col-12"  method="POST">
                 <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Usuario" name="nombre" maxlength="20" required="required">
                    
                    </div>
                    <div class="form-group" id="contrasena-group">
                   <input type="password" class="form-control" placeholder="Contraseña" name="clave" maxlength="20" title="ingrese su clave de acceso" required="required">
                    </div>
                     <button type="submit" class="btn-2"><i class="fas fa-sign-out-alt"></i>Ingresar</button>
                </form>
                <div class="col-12 forgot">
                  <!--  // <a href="/controladorlogin.php?operacion=olvido">¿Olvido contraseña?</a> -->
                </div>
               
            </div>
        </div>
  
   </div>
</body>

</html>
