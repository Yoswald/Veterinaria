<?php  
session_start();
  if (!isset($_SESSION['nombre'])) {
    header('Location:index.php');
  }elseif(isset($_SESSION['nombre'])){
    include '../../conexion/conexion.php';
    $sentencia = $bd->query("SELECT * FROM usuarios;");
    $variable = $sentencia->fetchAll(PDO::FETCH_OBJ);
  
  }else{
    echo "Error en el sistema";
  }
  
    $sentencia = $bd->query("SELECT * FROM doctor;");
    $doctores = $sentencia->fetchAll(PDO::FETCH_OBJ);


  
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
                  <li><a href="registrar.php">Clientes</a></li>
                  <li><a href="controladores/controladorproveedor.php?operacion=registrar">Mascota</a></li>
                  <li> <a href="controladores/controladorincidencias.php?operacion=agregar">Doctor</a></li>
                  

                  
                
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

 

            <h1>Lista de doctores</h1>    
                    
              <table id="example" class="table table-striped table-bordered" style="width:100%">

                        
                        <thead>
                         <tr>

                    <th>id</th>
                    <th>Nombre</th>
                    <th>direccion</th>
                    <th>Teléfono</th>
                    <th>fecha registrada</th>
                    <th>opciones</th>
                          </tr>
                        </thead>
                          
 
                    <tbody>

 <?php 
        foreach ($doctores as $dato){
          ?>
          <tr>
            <td><?php echo $dato->id; ?></td>
            <td><?php echo $dato->nombre_completo; ?></td>
            <td><?php echo $dato->direccion; ?></td>
            <td><?php echo $dato->telefono; ?></td>
            <td><?php echo $dato->fecha_add; ?></td>
            
            <td>
              <a class='btn1' href="modificar.php?id=<?php echo $dato->id; ?>"><i class='far fa-edit'></i></a>
              <a   class='btn2' href="../../conexion/eliminar_doctor.php?id=<?php echo $dato->id; ?>"><i class='fas fa-times'></i></a>
            </td>
            

          </tr>
          <?php
        }
      ?>


                  
                             

                       </tbody>
                        </table> 
                        </div>
                </div>
          
               
 
    <script src="../../datatables/popper/popper.min.js"></script>
    <script src="../../datatables/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="../../datatables/datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="../../datatables/main.js"></script>  
    <script src="../../datatables/jquery/jquery-3.3.1.min.js"></script>
    <script src="../../datatables/popper/popper.min.js"></script>
    <script src="../../datatables/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="../../datatables/datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="../../datatables/main.js"></script>  
         

             
           </div>
         </div>
       </div>
     </div>
    </div>
  </div>
</div>
<!-- partial -->
   

<script  src="../../views/script.js"></script>

</body>
</html>