 <?php 



  session_start();
  if (!isset($_SESSION['nombre'])) {
    header('Location:index.php');
  }elseif(isset($_SESSION['nombre'])){
    include '../../conexion/conexion.php';
    $sentencia = $bd->query("SELECT * FROM usuarios;");
    $variable = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($alumnos);
  }else{
    echo "Error en el sistema";
  }
        if(isset($_POST['register']))
          {
            $BDclass->newRegister($_POST);
          }
          ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
 <title>Veterinaria</title>  

  <link rel='stylesheet' href='../../views/bootstrap-3.3.7-dist/css/bootstrap.min.css'>
<link rel="stylesheet" href="../../views/style.css">
<link rel="stylesheet" href="../../views/fontawesome-free-5.11.2-web/css/solid.css">
     <script src="../../views/fontawesome-free-5.11.2-web/js/all.js"></script>
      

     
</head>
<body>
<!-- partial:index.partial.html -->
<nav class="mnb navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <i class="ic fa fa-bars"></i>
      </button>
      <div style="padding: 15px 0;">
         <a href="#" id="msbo"><i class="ic fa fa-bars"> </i></a>
          <div class="titu"> <i class="fas fa-user-edit"></i> Registrar</div>
        


      </div>

    </div>

   


    <div id="navbar" class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">
 

        <li class="dropdown">
<table class="position">   
             <th>




</table>

         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
           aria-expanded="false">  

      <i class="far fa-user"></i> <?php echo $_SESSION['nombre'] ?>  <span class="caret"></span>  </a>
          

          <ul class="dropdown-menu">
            
           <li><a href="../../conexion/salir.php"> Salir</a></li>
  
            </ul>
     
    </div>
  </div>
</nav>
<!--msb: main sidebar-->
<div class="msb" id="msb">
    <nav class="navbar navbar-default" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->

      

      <div class="navbar-header">
        <div class="brand-wrapper">
          <!-- Brand -->
          <div class="brand-name-wrapper"> 
            <div> <h4>   Veterinaria</h4></div>


            <a class="" href="#">
               

            </a>
          </div>

        </div>

      </div>

      <!-- Main Menu -->
      <div class="side-menu-container">
        <ul class="nav navbar-nav">

          
            <li><a href="../../home.php"><i class="fas fa-home"></i> Inicio</a></li>

          <!-- Dropdown-->
          <li class="panel panel-default" id="dropdown">
            <a data-toggle="collapse" href="#dropdown-lvl1">
              <i class="fas fa-user-edit"></i> Registrar<span class="caret"></span>
            </a>
            <!-- Dropdown level 1 -->
            <div id="dropdown-lvl1" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                  <li><a href="../clientes/registrar.php">Clientes</a></li>
                  <li><a href="registrar.php">Mascota</a></li>
                  <li> <a href="../doctores/registrar.php">Doctor</a></li>
                  

                  
                
                    </a>
                    
                  </li>
                </ul>
              </div>
            </div>
          </li>
         
         

       
         
          <!-- Dropdown-->
          <li class="panel panel-default" id="dropdown">
            <a data-toggle="collapse" href="#dropdown-lvl9">
            <i class="fas fa-list"></i> Listas <span class="caret"></span>
                           </a>
            <!-- Dropdown 1evel 9 -->
            <div id="dropdown-lvl9" class="panel-collapse collapse">
              <div class="panel-body">
                <ul class="nav navbar-nav">
                               <li> <a href="index.php">Lista de Clientes</a></li>
                                 
                                         
                  
                
                    </a>
                    
                  </li>
                </ul>
              </div>
            </div>
          </li>
         
      </div><!-- /.navbar-collapse -->
    
    </nav>  
</div>
<!--main content wrapper-->
<div class="mcw">
  <!--navigation here-->
  <!--main content view-->
  <div class="cv">
    <div>
     <div class="inbox">
       <div class="inbox-sb">
         
       </div>
      
         <div class="col-md-10 box">
     
       </div>
      
           <div class="col-md-10 box">
    
      

              <div class="cajabox" >

            

                <h1>Registrar mascota</h1>  
                <div class="caja-campo"><h5>Campo obligatorio <label class="color">(*)</label></h5></div>
                
                 
                <form class="form" method="POST" action="../../conexion/registro_mascota.php">
                 
                
                      <table align="center" class="table table-striped table-dark">
                       


                                 
                       <tr>

                    <th>

                      <label>Nombre de mascota</label></th>
                    <th><label class="color"> (*)  </label>  <input type="text"   class="form-main col-8" name="nombre" required="required" >
                    </th>
                   

                      
                       <th> <label>tipo de mascota</label></th>
                    <th><label class="color"> (*) </label> 
                     <input type="radio"  value="gato" class="form-main col-8"  name="radiot" required="required" > Gato 

                    <input type="radio"  value="perro" class="form-main col-8"  name="radiot" required="required" > Perro
                    </th>

                    
                          <tr>

                  
                      <tr>

                    <th> <label>Sexo</label></th>
                    <th><label class="color"> (*) </label> 
                     <input type="radio"  value="hembra" class="form-main col-8"  name="radios" required="required" > Hembra

                    <input type="radio"  value="macho" class="form-main col-8"  name="radios" required="required" > Macho
                    </th>


                    <th><label>Fecha de nacimiento</label></th>
                    <th><label class="color"> (*)  </label>  <input type="date"   class="form-main col-8" name="fecha_n" required="required" ></th>
                    </th>

              
                    </tr>

                       <tr>

                   

                        <th> <label>Estado de la mascota</label></th>
                    <th><label class="color"> (*) </label> 
                     <input type="radio"  value="vivo" class="form-main col-8"  name="radioe" required="required" > Vivo

                    <input type="radio"  value="muerto" class="form-main col-8"  name="radioe" required="required" > Muerto
                    </th>


                     </tr>
                          
                   
      


                   </table>
                
                
                     <center>
                      <input type="hidden" name="oculto" value="1">
                      <button type="submit" name="register" class="btn1"><i class="fas fa-save"></i>  Guardar </button>
                      <button type="reset" class="btn1"><i class=""></i>  Limpiar </button>
                     </center>
                    
                </form>
                     
                </div>
          
               
 

             
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
</div>
<!-- partial -->
   <script src='../../views/jquery-3.1.1.min.js'></script>
<script src='../../views/bootstrap-3.3.7-dist/js/bootstrap.min.js'></script>
<script  src="../../views/script.js"></script>

</body>
</html>