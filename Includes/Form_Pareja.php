<form name="nuevo_usuario" class="form-horizontal" method="POST" action="Guarda_Pareja.php">
<fieldset>

<!-- Form Name -->
<legend>Formulario Inscripcion Pareja</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre1">Nombre Completo Primer Participante</label>  
  <div class="col-md-5">
  <input id="nombre1" name="nombre1" type="text" placeholder="Ingrese nombre pareja 1" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nombre2">Nombre Completo Segundo Participante</label>  
  <div class="col-md-5">
  <input id="nombre2" name="nombre2" type="text" placeholder="Ingrese nombre pareja 2" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="categoria">Categoria</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="categoria-0">
      <input type="radio" name="categoria" id="categoria-0" value="Amateur" checked="checked">
      Amateur
    </label>
  </div>
  <div class="radio">
    <label for="categoria-1">
      <input type="radio" name="categoria" id="categoria-1" value="Profesional">
      Profesional
    </label>
  </div>
  <div class="radio">
    <label for="categoria-2">
      <input type="radio" name="categoria" id="categoria-2" value="Bailadores_de_ocacion">
      Bailadores de ocación
    </label>
  </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
      <label class="col-md-4 control-label" for="Categoria">Elija un Color del vestido </label>
            <div class="col-md-6"> 
                  <input type="color" name="color">
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