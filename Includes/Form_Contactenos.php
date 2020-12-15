
<div class="col-md-8 col-md-offset-2">
<form class="form-horizontal" method="pots" action="">
<!-- Form Name -->
<legend>Datos de Contacto</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nombre">Nombre Completo</label>  
  <div class="col-md-6">
  <input id="Nombre" name="Nombre" placeholder="Ingrese todo su nombre" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email</label>  
  <div class="col-md-6">
  <input id="Email" name="Email" placeholder="Email" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Tipo de observación o razón de contacto</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Queja
    </label>
  </div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Comentario Simple
    </label>
  </div>
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Pregunta
    </label>
  </div>
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Otro
    </label>
  </div>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Texto a enviar</label>
  <div class="col-md-4">
    <textarea class="form-control" placeholder="Comentarios o Sugerencias" id="textarea" name="textarea"></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Enviar</button>
  </div>
</div>

</fieldset>
</form>
</div>