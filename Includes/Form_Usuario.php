<form name="nuevo_usuario" class="form-horizontal" method="POST" action="Guarda_Usuario.php">
<fieldset>

<!-- Form Name -->
<legend>Formulario Inscripcion Usuario</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="identificacion">Identificacion</label>  
  <div class="col-md-4">
  <input id="identificacion" name="identificacion" type="text" placeholder="Escriba su Cedula" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">Nombre</label>  
  <div class="col-md-4">
  <input id="nombre" name="nombre" type="text" placeholder="Escriba su Nombre" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="apellido">Apellido</label>  
  <div class="col-md-4">
  <input id="apellido" name="apellido" type="text" placeholder="Escriba su Apellido" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Escriba Email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contrasenia">Contraseña</label>  
  <div class="col-md-4">
  <input id="contrasenia" name="contrasenia" type="text" placeholder="Escriba Contraseña para el sitio" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="Nacimiento">Fecha de Nacimiento </label>  
        <div class="col-md-4">
                <input type="date" name="fnacimiento" max="1997-01-01" class="form-control input-md" class="form-control input-md" required=""/>         
        </div> 
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="genero">Genero</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="sexo-0">
      <input type="radio" name="genero"  value="F" >
      Femenino
    </label>
  </div>
  <div class="radio">
    <label for="sexo-1">
      <input type="radio" name="genero"  value="M" >
      Masculino
    </label>
  </div>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
    <label class="col-md-4 control-label" for="Nacimiento">Danzas </label>
          <div class="col-md-4"> 
              <input type="text" name="dpreferida" size="40" class="form-control input-md" list="danzas" Placeholder="Danza preferida" required>
                    <datalist id="danzas">
                         <option value="Salsa">
                         <option value="Merengue">
                         <option value="Tango">
                    </datalist>
          </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="observaciones">Observaciones</label>  
  <div class="col-md-4">
  <input id="observaciones" name="observaciones" type="text" placeholder="Observaciones" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="enviar"></label>
  <div class="col-md-4">
    <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>
