<form form name="agre_funcionario" action="php/agregar_funcionario_bd.php" method="POST">

	Nombre : <input name="nombre" required>  </input> <br>
	Apellido paterno : <input name="apaterno" required>  </input><br>
	Apellido Materno : <input name="amaterno" required>  </input> <br>
	RUT : <input name="rut" required>  </input> <br>
	User name : <input name="nick"required>  </input> <br>
	Password : <input name="password"required>  </input> <br>
	Cargo del funcionario : <br>
	Jefe de Unidad : <input type="radio" name="cargo" value="1">  <br>
	Administrativo : <input type="radio" name="cargo" value="2" >  <br>
	Asistente : <input type="radio" name="cargo" value="3" checked>  <br>
	<button type="submit" value="submit"> Agregar Funcionario </button>



</form>