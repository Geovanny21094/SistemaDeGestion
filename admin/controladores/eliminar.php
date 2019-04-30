<!DOCTYPE html> 
<html> 
    <head> 


    <meta charset="UTF-8">   

      <title>Crear Nuevo Usuario</title>

        <style type="text/css" rel="stylesheet">

                .error{ 
                       color: red;
                                         } 
            </style> 
            </head>
             <body> 
 
 <?php       
           //incluir conexión a la base de datos    
                include '../../config/conexionBD.php';        
                  

     $codigo = $_POST['usu_codigo'];
     $sql = "DELETE  FROM usuario WHERE usu_codigo = '$codigo' "; 
 
                                 

     if ($conn->query($sql) === TRUE) {
        echo "<p>Los datos se han borrado correctamemte!!!</p>";           
       } else { 
              if($conn->errno == 1062){  
                 echo "<p class='error'>La persona con el codigo $codigo ya ha sido eliminada del sistema </p>";       
                           }else{ 
                           echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";   
                                  }    
                                      }  
                                      
                                      
                                      
                            //cerrar la base de datos   
                                  $conn->close(); 
                               echo "<a href='../../admin/vista/usuario/index.php'>Regresar</a>"; 

     ?> 

 
     </body>
      </html> 