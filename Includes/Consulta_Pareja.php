<!-- Se llama al contenido general - incluye el menu  -->
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="row clearfix">
        
       
          <?php 
            // Llamo a la conexión
            include 'conexion.php';

            // Realizo la primer consulta de usuarios y lo guardo en una variable para después recorrerla
            $query="SELECT id_Pareja, Nombre_Pareja1, Nombre_Pareja2, Categoria, Color_Vestido FROM Pareja";
            $resultado=$mysqli->query($query);

           ?>
  
          <!-- Defino la tabla de consulta -->          
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Nombre Participante 1</th>
                <th>Nombre Participante 2</th>
                <th>Categoria</th>
                <th>Color del Vestido Escogido</th>
              </tr>
            </thead>

            <tbody>

            <?php 
            // Inicio cada fila dentro de un while, pero lo dejo abierto
            while($row=$resultado->fetch_assoc()){ 

            ?>
             
              <tr>
                <!-- Imprimo cada fila con los datos del array -->
                <td><?php echo $row['id_Pareja'];?></td>
                <td><?php echo $row['Nombre_Pareja1'];?></td>
                <td><?php echo $row['Nombre_Pareja2'];?></td>
                <td><?php echo $row['Categoria'];?></td>
                <td><?php echo $row['Color_Vestido'];?></td>
                
                <!-- Creo unos iconos con Glyphicon y les pongo una url con el id 
                <td class="text-center">
                  <a href="modificar.php?id=<?php echo $row['id'] ?>">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                  </a>
                </td>
                <td class="text-center">
                  <a href="eliminar.php?id=<?php echo $row['id'] ?>">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                  </a>
                </td>-->
              </tr> 
                                        
            <?php 

            // Fin del while
            }
             ?>

            </tbody>

          </table>           
        
      </div>
    </div>
  </div>