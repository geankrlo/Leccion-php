<?php
include_once("LeccionCollector.php");

$id =1;

echo '<div class="container">
	<form name="frmIngresoPersona" onSubmit="return ingresarPersona();">
		<table>
			<tr>
				<td>C&eacute;dula:</td>
				<td><input type="text" name="cedula" id="cedula"/></td>
			</tr>
			<tr>	
				<td>Nombres:</td>
				<td><input type="text" name="nombres" id="nombres"/></td>
			</tr>
			<tr>
				<td>Apellidos:</td>			
				<td><input type="text" name="apellidos" id="apellidos"/></td>
			</tr>	
			<tr>
				<td>Edad:</td>			
				<td><input type="text" name="edad" id="edad"/></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Ingresar" /></td>
			</tr>
		</table>	
	</form>
	</div>';

$LeccionCollectorObj = new LeccionCollector();
	echo "<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.css' />";
	echo "<div class='container'>";
	echo "<table class='table table-striped'>";
	echo "<thead>
	        <tr>
	          <th class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>Id</th>
	          <th class='col-xs-12 col-sm-2 col-md-2'>Nombre</th>
	          <th class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>Parcial</th>
	          <th class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>Final</th>
	          <th class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>Mejoramiento</th>
	          <th class='col-xs-12 col-sm-2 col-md-2'>Nota Promedio</th>
	        </tr>
	      </thead>";
	//echo $c->getId() . "  | " .$c->getNombre() . "  | " .$c->getParcial() . "  | " .$c->getFinal() . "  | " .$c->getMejoramiento() . "  | " .$c->getNotaPromedio();                                     
	echo "</table>";
	echo "</div>"; 
foreach ($LeccionCollectorObj->showDemos() as $c){
	echo "<div class='container'>";
	echo "<table class='table table-striped'>";
	echo "<tr>
          <td id='id' class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>". $c->getId(). "</td>
          <td id='nombre' class='col-xs-12 col-sm-2 col-md-2'>".$c->getNombre()."</td>
          <td id='notaParcial' class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>".$c->getParcial()."</td>
          <td id='notaFinal' class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>".$c->getFinal()."</td>
          <td id='notaMejoramiento' class='col-xs-12 col-sm-2 col-md-2 hidden-xs'>".$c->getMejoramiento()."</td>
          <td id='notaPromedio' class='col-xs-12 col-sm-2 col-md-2'>".$c->getNotaPromedio()."</td>
        </tr>";
	//echo $c->getId() . "  | " .$c->getNombre() . "  | " .$c->getParcial() . "  | " .$c->getFinal() . "  | " .$c->getMejoramiento() . "  | " .$c->getNotaPromedio();                                     
	echo "</table>";
	echo "</div>"; 
}

?>
