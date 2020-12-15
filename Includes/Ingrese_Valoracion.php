<form class="form-horizontal" method="post" action="">
<fieldset>

<!-- Form Name -->
<legend>Valoracion de las Parejas Participantes</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email del jurado</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="Jurado ingrese su email" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contraseña">Contraseña</label>
  <div class="col-md-5">
    <input id="contraseña" name="contraseña" type="password" placeholder="Contraseña" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pareja">Pareja a evaluar</label>  
  <div class="col-md-5">
  <input id="pareja" name="pareja" type="text" placeholder="Id. pareja a evaluar" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="Nacimiento">Fecha de puntuacion </label>  
      <div class="col-md-5">
            <input type="date" name="Fingreso" min="2015-01-01" class="form-control input-md" class="form-control input-md" required=""/>         
      </div> 
</div>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="puntaje">Ingrese un Puntaje </label> 
      <div class="col-md-5">
            <input type="number" min="0" max="5" value="puntaje" step="0.5" class="form-control input-md"> 
    </label/> 
      </div> 
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="observaciones">Observaciones</label>  
  <div class="col-md-5">
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
