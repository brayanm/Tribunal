<form form name="agre_actividad" action="php/agregar_actividad_pasos.php" method="POST">

	Nombre de la actividad : <input name="nombre" required>  </input> <br>

	Cargo del funcionario : <br>
	Jefe de Unidad : <input type="radio" name="cargo" value="1">  <br>
	Administrativo : <input type="radio" name="cargo" value="2" >  <br>
	Asistente : <input type="radio" name="cargo" value="3" checked>  <br>
	
	Unidad a la que pertenece : <br>
	Unidad Administrativa de Apoyo a Peritos y Testigo : <input type="radio" name="unidad" value="2">  <br>
	Unidad Administrativa de Atencion a Publico : <input type="radio" name="unidad" value="3" >  <br>
	Unidad Administrativa de Causas : <input type="radio" name="unidad" value="4" >  <br>
	Unidad Administrativa de Sala : <input type="radio" name="unidad" value="5" >  <br>
	Unidad Administrativa de Servicio : <input type="radio" name="unidad" value="6" >  <br>
	Unidad Administrativa General : <input type="radio" name="unidad" value="1" checked>  <br>
	<button type="submit" value="submit"> Crear Actividad </button>



</form>

