  <!-- Se llama al contenido general - incluye el menu  -->
  <div class="row clearfix">
    <div class="col-md-12 column">
      <div class="row clearfix">
        
       
          <?php 
            // Llamo a la conexión
            include 'conexion.php';

            // Realizo la primer consulta de usuarios y lo guardo en una variable para después recorrerla
            $query="SELECT id_Usuario, Nombre, Apellido, Email, Fecha_Nacimiento, Genero, Danza_Preferida, Observaciones FROM Usuario";
            $resultado=$mysqli->query($query);

           ?>
  
          <!-- Defino la tabla de consulta -->          
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Fecha de Nacimiento</th>
                <th>Genero</th>
                <th>Danza Preferida</th>
                <th>Observaciones</th>
              </tr>
            </thead>

            <tbody>

            <?php 
            // Inicio cada fila dentro de un while, pero lo dejo abierto
            while($row=$resultado->fetch_assoc()){ 

            ?>
             
              <tr>
                <!-- Imprimo cada fila con los datos del array -->
                <td><?php echo $row['id_Usuario'];?></td>
                <td><?php echo $row['Nombre'];?></td>
                <td><?php echo $row['Apellido'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><?php echo $row['Fecha_Nacimiento'];?></td>
                <td><?php echo $row['Genero'];?></td>
                <td><?php echo $row['Danza_Preferida'];?></td>
                <td><?php echo $row['Observaciones'];?></td>

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